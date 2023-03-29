<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Product;
use App\Models\User;
use App\Services\NationalElearningCenterService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Repository\Eloquent\BookingRepository;

class BookingsController extends Controller
{

    public $booking;
    protected $nationalElearningCenterService;

    public function __construct(BookingRepository $booking , NationalElearningCenterService $nationalElearningCenterService)
    {
        $this->booking = $booking;
        $this->nationalElearningCenterService = $nationalElearningCenterService;

    }

    public function index(){
        try{
            $bookings = $this->booking->GetAll();
            return view('admin.bookings.index', compact('bookings'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function status($id){
        return $this->booking->BookingStatus($id);
    }

    public function student_info($id){
        return $this->booking->BookingStudentInfo($id);
    }

    public function completed($id)
    {
        return $this->booking->BookingCompleted($id);
    }

    public function search(Request $request){
        return $this->booking->BookingSearch($request);
    }

    public function getMore(Request $request){
        return $this->booking->BookingGetMore($request);
    }


    public function quiz_index(){
        $bookings = Booking::where("status",1)->whereNotNull("quiz")->where("marked",1)->orderBy("marked_at")->paginate(PAGINATION_COUNT);
        return view("admin.bookings.quiz-index-not",compact(['bookings']));
    }
    public function quiz_index_not(){
        $bookings = Booking::where("status",1)->whereNotNull("quiz")->where("marked",0)->orderBy("answered_at")->paginate(PAGINATION_COUNT);
        return view("admin.bookings.quiz-index-not",compact(['bookings']));
    }
    public function quiz_info($id){
        $booking = Booking::where("id" , $id)->first();
        return view("admin.bookings.quiz_info",compact(['booking']));
    }

    public function quiz_rate(Request $request , $id){
        $booking = Booking::where("id" , $id)->first();
        $booking->max = $request->max;
        $booking->raw = $request->raw;
        $booking->success_status = $request->success_status;
        $booking->marked = 1;
        $booking->marked_at = Carbon::now();
        $booking->save();
        $student = User::where("id",$booking->user_id)->first();
        $product = Product::where("id",$booking->course_id)->first();

        $re = $this->nationalElearningCenterService->attempted($booking,$student,$product);
        $ee = str_contains($re , "The Requested URL Was Rejected. Please Consult With Your Administrator attempted");
        if ($ee){
            flash()->error("There Is Something Wrong In Api , Please Concat Technical Support");

            return \redirect()->route("course/mycourses");
        }

        if ($booking->success_status){
            $re = $this->nationalElearningCenterService->earned($booking,$student,$product);
            $ee = str_contains($re , "The Requested URL Was Rejected. Please Consult With Your Administrator earned");
            if ($ee){
                flash()->error("There Is Something Wrong In Api , Please Concat Technical Support");

                return \redirect()->route("course/mycourses");
            }
        }

        flash()->success("تم تقيم الاختبار بنجاح");
        return redirect()->route("admin/bookings/index");

    }

}
