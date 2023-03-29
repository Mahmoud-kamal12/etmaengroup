<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Repository\Eloquent\BookingRepository;

class BookingsController extends Controller
{

    public $booking;

    public function __construct(BookingRepository $booking)
    {
        $this->booking = $booking;
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

    public function quiz_info($id){
        $booking = Booking::where("id" , $id)->first();
        return view("admin.bookings.quiz_info",compact(['booking']));
    }

    public function quiz_rate(Request $request , $id){
        $booking = Booking::where("id" , $id)->first();
        $booking->max = $request->max;
        $booking->raw = $request->raw;
        $booking->success_status = $request->success_status;
        $booking->save();
        if ($booking->success_status){
            //        earn Mahmoud Kamal
        }

        flash()->success("تم تقيم الاختبار بنجاح");
        return redirect()->route("admin/bookings/index");

    }

}
