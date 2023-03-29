<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\QuestionRequests\QuestionStoreRequest;
use App\Http\Repository\Eloquent\QuestionRepository;

class QuestionController extends Controller
{

    public $question;

    public function __construct(QuestionRepository $question)
    {
        $this->question = $question;
    }

    public function index(){
        try{
            $questions = $this->question->GetAll();
            return view('admin.questions.index', compact('questions'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function create(){
        try{
            return view('admin.questions.create');
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function store(QuestionStoreRequest $request){
        return $this->question->QuestionStore($request);
    }

    public function edit($id){
        return $this->question->QuestionEdit($id);
    }

    public function update(Request $request, $id){
        return $this->question->QuestionUpdate($request, $id);
    }

    public function activate($id){
        return $this->question->QuestionActivate($id);
    }

    public function delete($id){
        return $this->question->QuestionDelete($id);
    }

    public function search(Request $request){
        return $this->question->QuestionSearch($request);
    }

    public function getMore(Request $request){
        return $this->question->QuestionGetMore($request);
    }

    public function answers($id){
        return $this->question->QuestionAnswers($id);
    }

}
