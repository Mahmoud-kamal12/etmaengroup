<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Notification;
use App\Models\Exam;
use App\Models\ExamInfo;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TestLevelRequests\TestLevelStoreRequest;
use App\Mail\LevelTest;
use App\Models\Answer;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function getNewNotifications(){
        try{
            return auth()->user()->notifications()->where('is_read', 0)->count();
        }catch(\Exception $ex){
            return 0;
        }
    }

    public function getNotifications()
    {
        try{
            $notifications = auth()->user()->notifications()->latest()->where('is_read', 0)->get();
            DB::select("UPDATE notifications SET is_read = 1 WHERE student_id = ".auth()->user()->id." ");
            return $notifications;
        }catch(\Exception $ex){
            return 0;
        }
    }

    public function getMoreNotifications(Request $request)
    {
        try{
            if(isset($request->dataCount) && $request->dataCount > 0){
                $notifications = Notification::where('student_id', auth()->user()->id)->latest()->skip((int)$request->dataCount)->limit(PAGINATION_COUNT)->get();
            }else{
                $notifications = Notification::where('student_id', auth()->user()->id)->latest()->limit(PAGINATION_COUNT)->get();
            }
            $allNotifications = [];
            if($notifications && count($notifications) > 0){
                $allNotifications = $notifications;
            }
            return $allNotifications;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Supprt']);
        }
    }

    public function getFile($id)
    {
        try{
            $file = FacadesDB::select(" SELECT CF.*, N.id notifi_id, A.name admin_name, C.title group_name
                                        FROM notifications N 
                                            INNER JOIN classes_files CF ON N.file_id = CF.id  
                                            INNER JOIN classes C ON C.id = CF.class_id
                                            INNER JOIN admins A ON A.id = C.admin_id
                                        WHERE 
                                            N.id= ".$id." AND N.student_id= ".auth()->user()->id." 
                                    ");
            // dd($file);
            return view('view_attachments', compact('file'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function getFileDownload($id)
    {
        try{
            $file = FacadesDB::select(" SELECT CF.* 
                                        FROM notifications N 
                                            INNER JOIN classes_files CF ON N.file_id = CF.id  
                                        WHERE N.id= ".$id." AND N.student_id= ".auth()->user()->id." 
                                    ");
            if(!count($file)){
                flash()->error("There Is Something Wrong , Please Contact Technical Support");
                return back();
            }
            return response()->download(public_path($file[0]->file), $file[0]->file_name);
        }catch(\Exception $ex){
            return $ex;
            flash()->error("THere IS Something Wrong ,Please Contact Technical Support");
            return back();
        }
    }

    public function test_level()
    {
        try{
            $questions = Question::active()->has('answers')->get();
            return view('level_test', compact('questions'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function test_level_save(TestLevelStoreRequest $request)
    {
        try{
            DB::beginTransaction();

            $correct_no = 0;
            if(!$request->questions){
                flash()->error("There Is Something Wrong , Not Found Question");
                return back();
            }
            $questions_count = Question::active()->has('answers')->count();
            if(!$questions_count > 0){
                flash()->error("There Is Something Wrong , Please Contact Technical Support");
                return back();
            }
            $request_questions = $request->questions;
            $exam_info = new ExamInfo();
            $exam_info->name = $request->name;
            $exam_info->email = $request->email;
            $exam_info->save();
            foreach($request_questions as $request_question){
                $question = DB::select("SELECT * 
                                        FROM 
                                            answers 
                                        WHERE 
                                            question_id = ".$request_question['question_id']." AND
                                            id = ".$request_question['answer_id']." AND
                                            is_activate = 1
                                        ");
                if($question[0]->is_correct == 1){
                    $exam = new Exam();
                    $exam->question_id = $request_question['question_id'];
                    $exam->answer_id = $request_question['answer_id'];
                    $exam->is_correct = 1;
                    $exam->exam_info_id = $exam_info->id;
                    $exam->save();
                    $correct_no++;
                }else{
                    $exam = new Exam();
                    $exam->question_id = $request_question['question_id'];
                    $exam->answer_id = $request_question['answer_id'];
                    $exam->is_correct = 0;
                    $exam->exam_info_id = $exam_info->id;
                    $exam->save();
                }
            }
            $exam_info->update([$exam_info->degree = $correct_no.'/'.$questions_count]);

            DB::commit();

            $data = [
                'name' => $exam_info->name,
                'email' => $exam_info->email,
                'degree' => $correct_no.'/'.$questions_count
            ];
            Mail::to("amrhuusien99@gmail.com")
            ->bcc("amrhuusien99@gmail.com")
            ->send(New LevelTest($data));
            
            flash()->success("Tested Has Been Done");
            return back();
        }catch(\Exception $ex){

            DB::rollback();
            return $ex;
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

}
