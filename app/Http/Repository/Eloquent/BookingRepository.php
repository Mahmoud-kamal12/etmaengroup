<?php

namespace App\Http\Repository\Eloquent;

use App\Models\Booking;
use App\Services\NationalElearningCenterService;

class BookingRepository extends AbstractRepository
{

    protected $model;
    protected $nationalElearningCenterService;

    public function __construct(Booking $model, NationalElearningCenterService $nationalElearningCenterService)
    {
        $this->model = $model;
        $this->nationalElearningCenterService = $nationalElearningCenterService;
    }

    public function BookingStatus($id)
    {
        try{
            $booking = $this->model->where('id', $id)->with('user', 'course')->first();
            $user = $booking->user;
            $course = $booking->course;
            $uuid_pattern = "250fdeae-fe97-483a-b868-412eec2fc505";
            if($booking->status == 1){
                $booking->status = 0;
            }else{
                $booking->status = 1;
                if(empty($booking->uuid_register) || $booking->uuid_register == NULL){
                    $uuid_register = $this->nationalElearningCenterService->register($booking, $user, $course);
                    if(count(explode('-', $uuid_register)) == count(explode('-', $uuid_pattern))){
                        $booking->confirm_date = date('Y-m-d H:i:s');
                        $booking->uuid_register = $uuid_register;
                    }else{
                        // flash()->error($uuid_register);
                        flash()->error("There Is Something Wrong In Api , Please Concat Technical Support");
                        return back();
                    }
                }
            }
            $booking->save();
            flash()->success("Updated Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function BookingStudentInfo($id)
    {
        try{
            $booking = $this->model->where('id', $id)->with('user', 'course')->first();
            $user = $booking->user;
            $course = $booking->course;
            return view('admin.bookings.booking_info', compact(['booking', 'user', 'course']));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function BookingCompleted($id , $notreq = false)
    {
        try{
            $booking = $this->model->where('id', $id)->with('user', 'course')->first();
            $user = $booking->user;
            $course = $booking->course;
            $uuid_pattern = "250fdeae-fe97-483a-b868-412eec2fc505";
            if(empty($booking->uuid_completed)){
                $uuid_completed = $this->nationalElearningCenterService->completed($booking, $user, $course);
                if(count(explode('-', $uuid_completed)) == count(explode('-', $uuid_pattern))){
                    $booking->completed_date = date('Y-m-d H:i:s');
                    $booking->uuid_completed = $uuid_completed;
                    $booking->save();
                }else{
                    if ($notreq){
                        return "Error";
                    }
                    flash()->error("There Is Something Wrong In Api , Please Concat Technical Support");
                    return back();
                }
            }
            if ($notreq){
                return "Done";
            }
            flash()->success("Updated Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function BookingGetMore($request)
    {
        try{
            if(isset($request->id) && $request->id > 0){
                $bookings = $this->model->latest()->skip($request->id)->limit(PAGINATION_COUNT)->get();
            }else{
                $bookings = $this->model->latest()->skip(PAGINATION_COUNT)->limit(PAGINATION_COUNT)->get();
            }
            $allData = [];
            if($bookings && count($bookings) > 0){
                foreach($bookings as $booking ){
                    $booking->title = optional($booking->course)->title;
                    $booking->user_name = optional($booking->user)->name;
                    $booking->urlRouteStatus = route('admin/bookings/status', $booking->id);
                    $booking->urlRouteCompleted = route('admin/bookings/completed', $booking->id);
                    $allData [] = $booking;
                }
            }
            return $allData;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    public function BookingSearch($request)
    {
        try{
            $query = $request->get('query');
            $bookings = [];
            if($query != ''){
                $bookings = $this->model->latest()->where('id', 'LIKE', '%'. $query .'%')->get();
            }else{
                $bookings = $this->model->latest()->limit(PAGINATION_COUNT)->get();
            }
            $allData = [];
            if($bookings && count($bookings) > 0){
                foreach($bookings as $booking ){
                    $booking->title = optional($booking->course)->title;
                    $booking->user_name = optional($booking->user)->name;
                    $booking->urlRouteStatus = route('admin/bookings/status', $booking->id);
                    $booking->urlRouteCompleted = route('admin/bookings/completed', $booking->id);
                    if( $query != '' ){
                        $booking->searchButton = 0;
                    }else{
                        $booking->searchButton = 1;
                    }
                    $allData [] = $booking;
                }
            }
            return $allData;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

}
