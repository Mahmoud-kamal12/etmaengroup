<?php 

namespace App\Http\Repository\Eloquent;

use App\Models\Answer;
use DB;
use Hash;
use Illuminate\Validation\Rule;

class AnswerRepository extends AbstractRepository
{

    protected $model;

    public function __construct(Answer $model)
    {
        $this->model = $model;
    }

    public function AnswerStore($request, $id)
    {
        try{
            // validation 
            //create
            $request->is_correct && (int)$request->is_correct == 1 ? $is_correct = 1 : $is_correct = 0;
            $question = new $this->model();
            $question->answer = $request->answer;
            $question->question_id = $id;
            $question->admin_id = auth()->user()->id;
            $question->is_activate = 1;
            $question->is_correct = $is_correct;
            $question->save();
            flash()->success("Success Add");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function AnswerUpdate($request, $id)
    {
        try{
            // validation 
            $request->is_correct && (int)$request->is_correct == 1 ? $is_correct = 1 : $is_correct = 0;
            //create
            $question = $this->model->findOrFail($id);
            $question->answer = $request->answer;
            $question->is_correct = $is_correct;
            $question->save();
            flash()->success("Updated Has Been Done");
            return back();
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function AnswerActivate($id)
    {
        try{
            $question = $this->model->findOrFail($id);
            if($question->is_activate == 1){
                $question->update(['is_activate' => 0]);
            }else{
                $question->update(['is_activate' => 1]);
            }
            flash()->success("The Change Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong ,  Please Contact Technical Support");
            return back();
        }
    }

    public function AnswerDelete($id)
    {
        try{
            $question = $this->model->findOrFail($id);
            $question->delete();
            flash()->success("The Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

}