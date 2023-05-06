<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Admin\BookingsController;
use App\Http\Controllers\Controller;
use App\Http\Repository\Eloquent\BookingRepository;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Question;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\User\UserRequests\UserRegisterRequest;
use App\Models\Booking;
use App\Models\BookingLessons;
use App\Models\Lessons;
use App\Services\NationalElearningCenterService;
use Mpdf\Mpdf;
use Owenoj\LaravelGetId3\GetId3;
use Illuminate\Support\Facades\File;


class CoursesController extends Controller
{
    protected $nationalElearningCenterService;
    protected $bookingRepository;
    protected $bookingsController;

    public function __construct(NationalElearningCenterService $nationalElearningCenterService , BookingRepository $bookingRepository , BookingsController  $bookingsController)
    {
        $this->nationalElearningCenterService = $nationalElearningCenterService;
        $this->bookingRepository = $bookingRepository;
        $this->bookingsController = $bookingsController;
    }

    public function courses($id)
    {
        try{
            if((int)$id == 1 OR (int)$id == 2 OR (int)$id == 3){
                $courses = DB::select('SELECT * FROM products WHERE is_activate = 1 AND type = '. $id .' ');
                return view('courses', compact('courses','id'));
            }else{
                return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
            }
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    // public function course_register($id){
    //     try{
    //         dd(Auth::user());
    //         $course = Product::find($id);
    //         // dd($course);
    //         $instructor = User::find($course->user_id);
    //         $lang = "en-us";
    //         $data = [
    //             "actor" => [
    //                 "mbox" => "",
    //                 "name" => "1234567890",
    //                 "objectType" => "Agent"
    //             ],
    //             "verb" => [
    //                 "id" => "http://adlnet.gov/expapi/verbs/initialized",
    //                 "display" => [ $lang => "initialized" ]
    //             ],
    //             "object" => [
    //                 "id" => "https://ksu.edu.sa/ar/pnu.IT.0011/CR001",
    //                 "definition" => [
    //                     "name" => [$lang => $course->title],
    //                     "description" => [$lang => $course->description],
    //                     "type" => "https://w3id.org/xapi/cmi5/activitytype/course"
    //                 ],
    //                 "objectType" => "Activity"
    //             ],
    //             "context" => [
    //                 "instructor" => [
    //                     "name" => $instructor->name,
    //                     "mbox" => $instructor->email
    //                 ],
    //                 "platform" => "ALIF-001",
    //                 "language" => $lang,
    //                 "extensions" => []
    //             ]

    //         ];
    //         return response()->json(['success' => 'success']);
    //     }catch(\Exception $ex){
    //         return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
    //     }
    // }

    public function course_details($id)
    {
        try{
            $course = Product::find($id);
            return view('detials', compact('course'));
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    public function student_courses(){
        try{

            $lessons = [];
            $student = auth()->user();
            $courses = Booking::where("status" , 1)->where("user_id" , $student->id)->with("course")->get()->pluck("course");
//            $courses = DB::select("SELECT P.* FROM products P INNER JOIN bookings B ON P.id=B.course_id WHERE B.user_id=".$student->id." AND B.status=1");
//            dd($courses);
            foreach($courses as $course){
                $CourseLessons = Lessons::where("product_id" , $course->id)->get();

                $watchedLessons = BookingLessons::where("user_id" , $student->id)->where("course_id" , $course->id)->get();
                $differenceArray = array_diff($CourseLessons->pluck("id")->toArray() , $watchedLessons->pluck("lesson_id")->toArray());

                if (empty($differenceArray)){
                    $booking = Booking::where("status" , 1)->where("user_id" , $student->id)->where("course_id" , $course->id)->whereNull("uuid_completed")->first();
                    if ($booking){
//                        $res = $this->bookingRepository->BookingCompleted($booking->id, true);
                        $booking->temp_complete = true;
                        $booking->save();
                    }
                }
//                $CourseLessons = DB::select("SELECT * FROM lessons WHERE product_id = ".$course->id."");
                foreach($CourseLessons as $CourseLesson){
                    $lessons[$course->title][] = [
                        'id' => $CourseLesson->id,
                        'name' => $CourseLesson->title
                    ];
                }
            }
//             dd($lessons);
//            if ($temp == 0){
//                BookingRepository
//            }
            return view('mycourses',compact('courses','lessons'));
        }catch(\Exception $ex){
            flash()->error($ex->getMessage());
            return \redirect("/");
        }
    }

    public function lesson_details(Request $request,$id){
        try{
            $data_lesson_watched = NULL;
            $uuid_pattern = "b2a0f3be-55cb-41b3-9969-74fcecfb0dbc";
            $lesson = Lessons::active()->where('id', $id)->with('product')->first();
            $booking = Booking::where('course_id', $lesson->product_id)->where('user_id', auth()->user()->id)->where('status', 1)->with('user', 'lessons_watched')->first();

            if(!empty($booking)){
                $user = $booking->user;
                $course = $lesson->product;
                $lessons_watched = $booking->lessons_watched;
                if(empty($booking->uuid_started)){
                    $uuid_started = $this->nationalElearningCenterService->initialized($booking, $user, $course);
                    if(count(explode('-', $uuid_started)) == count(explode('-', $uuid_pattern))){
                        $booking->uuid_started = $uuid_started;
                        $booking->started_date = date('Y-m-d H:i:s');
                        $booking->save();
                    }else{
                        flash()->error("There Is Something Wrong In Api , Please Concat Technical Support");
                        return back();
                    }
                }
                if(in_array($lesson->id, $lessons_watched->pluck('lesson_id')->toArray()) ){
                    foreach($lessons_watched as $lesson_watched){
                        if($lesson_watched->lesson_id == $lesson->id){
                            $data_lesson_watched = $lesson_watched;
                        }
                    }
                }else{
                    $data_lesson_watched = new BookingLessons;
                    $data_lesson_watched->lesson_id = $lesson->id;
                    $data_lesson_watched->booking_id = $booking->id;
                    $data_lesson_watched->user_id = $booking->user_id;
                    $data_lesson_watched->course_id = $booking->course_id;
                    $data_lesson_watched->save();
                }
                if ($request->ajax()){
                    if(!empty($data_lesson_watched)){
                        if(empty($data_lesson_watched->uuid_watched)){
                            $uuid_watched = $this->nationalElearningCenterService->lesson($booking, $user, $course, $lesson);
                            if(count(explode('-', $uuid_watched)) == count(explode('-', $uuid_pattern))){
                                $data_lesson_watched->uuid_watched = $uuid_watched;
                                $data_lesson_watched->watched_date = date('Y-m-d H:i:s');
                                $data_lesson_watched->save();
                            }else{
                                return response()->json(['error api'=> $uuid_watched],500);

//                                flash()->error("There Is Something Wrong In Api , Please Concat Technical Support");
//                                return back();
                            }
                        }
                    }else{
                        return response()->json(['error data'=> $data_lesson_watched],500);

//                        flash()->error("There Is Something Wrong In Lesson Data , Please Concat Technical Support");
//                        return back();
                    }
                    return response()->json(['message'=>"watched"],200);
                }
                return view('lessonsDetials',compact('lesson','course'));
            }else{
                flash()->error("There Is Something Wrong , Please Concat Technical Support");
                return back();
            }
        }catch(\Exception $ex){
            dd($ex->getMessage());
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function nextlesson($id)
    {
        try{
            $oldLesson = Lessons::find($id);
            $lesson = Lessons::where('product_id','=',$oldLesson->product_id)
                ->where('id','>',$id)
                ->where('is_activate','=',1)
                ->orderBy('id','ASC')
                ->take(1)
                ->get();
            if(count($lesson) > 0){
                return Redirect::route('lesson/details',$lesson[0]->id);
            }
            flash()->success('تم الإنتهاء من الكورس بنجاح');
            return \redirect()->route("course/mycourses");
        }catch(\Exception $ex){
            flash()->error('Something bad happend .. please communicate with the support team');
            return back();
        }
    }

    public function prevlesson($id)
    {
        try{
            $oldLesson = Lessons::find($id);
            $lesson = Lessons::where('product_id','=',$oldLesson->product_id)
                ->where('id','<',$id)
                ->where('is_activate','=',1)
                ->orderBy('id','DESC')
                ->take(1)
                ->get();
            if(count($lesson) > 0){
                return Redirect::route('lesson/details',$lesson[0]->id);
            }
            return back();
        }catch(\Exception $ex){
            dd($ex);
            flash()->error('Something bad happend .. please communicate with the support team');
            return back();
        }
    }

    public function checkmore($id,$type)
    {
        if($type == 'ASC'){$sign = '>';}
        else{$sign = '<';}
        try{
            $oldLesson = Lessons::find($id);
            $lesson = Lessons::where('product_id','=',$oldLesson->product_id)
                ->where('id',$sign,$id)
                ->where('is_activate','=',1)
                ->orderBy('id',$type)
                ->take(1)
                ->get();

            return response()->json(['success' => count($lesson)]);
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    public function downloadVideo($id)
    {
        try{
            $lesson = Lessons::active()->find($id);
            return response()->download(public_path($lesson->video));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Concat Technical Support");
            return back();
        }
    }

    public function register(Request $request){
        $user = User::where('email',$request->email)->first();
        try{
            DB::beginTransaction();
            if(auth()->user()){
                $user_id = auth()->user()->id;
            }else{

                // validation
                $validator = validator()->make($request->all(), [
                    'email' => 'required|email|unique:users,email',
                    'name' => 'required',
                    'phone' => 'required|unique:users,phone',
                    'id_number' => 'required',
                    'course_id' => 'required|exists:products,id',
                    'gender' => 'required',
                ]);
                if($validator->fails()){
                    flash()->error($validator->errors()->first());
                    return back();
                }
                $user = new User();
                $user->email = $request->email;
                $user->name = $request->name;
                $user->phone = $request->phone;
                $user->id_number = $request->id_number;
                $user->gender = $request->gender;
                $user->is_activate = 1;
                $user->password = bcrypt(123456);
                $user->save();
                $user_id = $user->id;
            }
            $booking = Booking::where("user_id" , $user_id)->where("course_id",$request->course_id)->first();
            if($booking){
                if ($booking->status == 0){
                    DB::commit();
                    flash()->success("تم الاشتراك من قبل وفى انتظار التفعيل ");
                    return back();
                }
                if ($booking->status == 1){
                    DB::commit();
                    flash()->success("انت بالفعل مشترك فى الدوره من قبل");
                    return back();
                }
            }else{
                $booking = new Booking();
                $booking->status = 0;
                $booking->user_id = $user_id;
                $booking->course_id = $request->course_id;
                $booking->save();
                DB::commit();
                flash()->success("تم الارسال بنجاح .. الرجاء انتظار تفعيل المشرف");
                return back();
            }


        }catch(\Exception $ex){
            DB::rollBack();
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }




    public function student_courses_quiz($id){

        $product = Product::where("is_activate" , 1)->where("id",$id)->first();
        $student = auth()->user();
        $booking = Booking::where("status" , 1)->where("user_id" , $student->id)->where("course_id" , $id)->first();
        if ($booking == null){
            flash()->error("يجب التسجيل فى الدوره لاداء الاختبار الخاص");
            return \redirect()->route("course/mycourses");
        }
//        if ($booking->quiz !== null and $booking->marked == 0){
//            flash()->success("تم  ارسال الاجابات من قبل .. وسيتم مراجعة الاجابات والمتابعه من خلال البريد الالكترونى");
//            return \redirect()->route("course/mycourses");
//        }
//        if ($booking->quiz !== null and $booking->marked == 1){
//            flash()->success("تم مراجعة الاختبار اذا كان لديك اى تعليقات اخرى تواصل عن طريق البريد الالكترونى ");
//            return \redirect()->route("course/mycourses");
//        }
//        dd($product->quiz );
        return view("quizcourse" ,compact(["product"]));
    }

    public function student_courses_quiz_answer(Request $request , $id){
        $product = Product::where("is_activate" , 1)->where("id",$id)->first();
        $student = auth()->user();
        $quiz = array_filter($request->quiz);
        $booking = Booking::where("status" , 1)->where("user_id" , $student->id)->where("course_id" , $id)->first();

        if ($booking == null){
            flash()->error("يجب التسجيل فى الدوره لاداء الاختبار الخاص");
            return \redirect()->route("course/mycourses");
        }

//        Mahmoud Kamal
        $row = 0;
        $max = 0;
        foreach ($quiz as $oneQuiz){
            $max++;
            foreach ($product->quiz as $proQuiz){
                if($proQuiz['question'] === $oneQuiz['q']){
                    if($proQuiz['right_answer_order'] === $oneQuiz['a']){
                        $row++;
                    }
                }
            }
        }
        $booking->quiz = $quiz;
        $booking->answered_at = Carbon::now();
        $booking->save();

        $success_status = ($row >= ($max / 2 ));
        $result = ["max" => $max , "raw" => $row , "success_status" => $success_status];
        $return = $this->quiz_rate($result , $booking->id);
        $ee = str_contains($return , "Error");


        if ($ee){
            flash()->error("There Is Something Wrong In Api , Please Concat Technical Support");
            return \redirect()->route("course/mycourses");
        }
//
        if ($success_status){
            $student = User::where("id",$booking->user_id)->first();
            $product = Product::where("id",$booking->course_id)->first();
            $instructor = Admin::where("id",$product->user_id)->first();

            $mpdf = new Mpdf([
                'mode' => 'utf-8',
                'format' => 'A4-L',
                'orientation' => 'L'
            ]);

            $mpdf->setAutoTopMargin = 'stretch';
            $mpdf->autoScriptToLang = true;
            $mpdf->autoLangToFont = true;
            $mpdf->SetDirectionality('rtl');

            $view = view('admin.certification',compact(['product','student','instructor','booking']));

            $mpdf->WriteHTML($view->render());
            $location = public_path('/certification');
            $fileName = $student->name.$product->title.time().'.pdf';
            if (!File::exists($location)) {
                File::makeDirectory($location, $mode = 0755, true, true);
            }
            $mpdf->Output($location . '/' . $fileName, 'F');

            $booking->certification = "certification/".$fileName;
            $booking->save();
        }

        flash()->success("تم الارسال بنجاح ");
        return \redirect()->route("course/mycourses");
    }

    public function quiz_rate($request , $id){
        $booking = Booking::where("id" , $id)->first();
        $oldRaw = $booking->raw;
        $booking->max = $request['max'];
        $booking->raw = $request['raw'];
        $booking->success_status = $request['success_status'];
        $booking->marked = 1;
        $booking->marked_at = Carbon::now();
        $booking->save();
        $student = User::where("id",$booking->user_id)->first();
        $product = Product::where("id",$booking->course_id)->first();
        $instructor = Admin::where("id",$product->user_id)->first();



        $re = $this->nationalElearningCenterService->attempted($booking,$student,$product);
        $ee = str_contains($re , "The Requested URL Was Rejected. Please Consult With Your Administrator");
        if ($ee){
            return "Error There Is Something Wrong In Api attempted, Please Concat Technical Support attempted";
        }

        $uuid_pattern = "250fdeae-fe97-483a-b868-412eec2fc505";
        if(count(explode('-', $re)) == count(explode('-', $uuid_pattern))) {
            $booking->attempted_date = date('Y-m-d H:i:s');
            $booking->uuid_attempted = $re;
            $booking->save();
        }

        $CourseLessons = Lessons::where("product_id" , $product->id)->get();

        $watchedLessons = BookingLessons::where("user_id" , $student->id)->where("course_id" , $product->id)->get();
        $differenceArray = array_diff($CourseLessons->pluck("id")->toArray() , $watchedLessons->pluck("lesson_id")->toArray());

        if (empty($differenceArray)){
            $booking = Booking::where("status" , 1)->where("user_id" , $student->id)->where("course_id" , $product->id)->whereNull("uuid_completed")->first();
            if ($booking){
                $resw = $this->bookingRepository->BookingCompleted($booking->id, true);
                if ($resw == "Error"){
                    flash()->error("There Is Something Wrong In Api , Please Concat Technical Support");
                    return back();
                }
            }
        }

        if ($request['success_status'] && $request['raw'] > $oldRaw){
            $re = $this->nationalElearningCenterService->earned($booking,$student,$product);
            $ee = str_contains($re , "The Requested URL Was Rejected. Please Consult With Your Administrator");
            if ($ee){
                return "Error There Is Something Wrong In Api earned, Please Concat Technical Support earned";
            }
        }

        return "success";

    }


    public function student_courses_rate(Request $request , $id){
        $course = Product::where("id" , $id)->first();
        $student = \auth()->user();
        $data = $request->all();
        $booking = Booking::where("status" , 1)->where("user_id" , $student->id)->where("course_id" , $id)->first();
        if ($booking == null){
            flash()->error("يجب التسجيل فى الدوره  لتقيم الدوره");
            return \redirect()->route("course/mycourses");
        }

        $re = $this->nationalElearningCenterService->rated($student , $course , $data);
        $ee = str_contains($re , "The Requested URL Was Rejected. Please Consult With Your Administrator");
        if ($ee){
            flash()->error("There Is Something Wrong In Api , Please Concat Technical Support");

            return \redirect()->route("course/mycourses");
        }

        flash()->success("تم الارسال بنجاح .. شكرا لتقيم الدوره");

        return \redirect()->route("course/mycourses");
    }

    public function certifications($studentId , $courseId , Request $request){
        $student = User::where("id",$studentId)->first();
        $product = Product::where("id",$courseId)->first();
        $instructor = Admin::where("id",$product->user_id)->first();
        $booking = Booking::where("status" , 1)->where("user_id" , $studentId)->where("course_id" , $courseId)->first();

        if ($booking){
            if ($booking->success_status){
                return view('admin.certification',compact(['product','student','instructor','booking']));
            }
            return \redirect()->route('home');
        }

        return \redirect()->route('home');

    }
}
