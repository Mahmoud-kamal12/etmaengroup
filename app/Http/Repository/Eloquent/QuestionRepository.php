<?php 

namespace App\Http\Repository\Eloquent;

use App\Models\Question;
use App\Models\Answer;
use DB;
use Hash;
use Illuminate\Validation\Rule;

class QuestionRepository extends AbstractRepository
{

    protected $model;
    protected $answer;

    public function __construct(Question $model, Answer $answer)
    {
        $this->model = $model;
        $this->answer = $answer;
    }

    public function QuestionStore($request)
    {
        try{
            // validation 
            //create admin
            $question = new $this->model();
            $question->title = $request->title;
            $question->admin_id = auth()->user()->id;
            $question->is_activate = 1;
            $question->save();
            flash()->success("Success Add");
            return back();
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function QuestionEdit($id)
    {
        try{
            $question = $this->model->findOrFail($id);
            return view('admin.questions.edit', compact('question'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function QuestionUpdate($request, $id)
    {
        try{
            // validation 
            //create admin
            $question = $this->model->findOrFail($id);
            $question->title = $request->title;
            $question->save();
            flash()->success("Updated Has Been Done");
            return back();
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function QuestionActivate($id)
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

    public function QuestionDelete($id)
    {
        try{
            $question = $this->model->findOrFail($id);
            if(count($question->answers) > 0){
                flash()->error("Sorry Cant Delete This Question , Please Delete His Answers First");
                return back();
            }
            $question->delete();
            flash()->success("The Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function QuestionGetMore($request)
    {
        try{
            if(isset($request->id) && $request->id > 0){
                $questions = $this->model->latest()->skip($request->id)->limit(PAGINATION_COUNT)->get();
            }else{
                $questions = $this->model->latest()->skip(PAGINATION_COUNT)->limit(PAGINATION_COUNT)->get();
            }
            $allQuestion = [];
            if($questions && count($questions) > 0){
                foreach($questions as $question ){
                    $question->urlRouteEdit = route('admin/questions/edit', $question->id);
                    $question->urlRouteActivate = route('admin/questions/activate', $question->id);
                    $question->urlRouteDelete = route('admin/questions/delete', $question->id);
                    $question->urlRouteAnswers = route('admin/questions/answers', $question->id);
                    $allQuestion [] = $question;
                }
            }
            return $allQuestion;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    public function QuestionSearch($request)
    {
        try{
            $query = $request->get('query');
            $questions = [];
            if($query != ''){
                $questions = $this->model->latest()->where('id', 'LIKE', '%'. $query .'%')
                                                ->orWhere('title', 'LIKE', '%'. $query .'%')
                                                ->get();
            }else{
                $questions = $this->model->latest()->paginate(PAGINATION_COUNT);
            }
            $allQuestion = [];
            if($questions && count($questions) > 0){
                foreach($questions as $question ){
                    $question->urlRouteEdit = route('admin/questions/edit', $question->id);
                    $question->urlRouteActivate = route('admin/questions/activate', $question->id);
                    $question->urlRouteDelete = route('admin/questions/delete', $question->id);
                    $question->urlRouteAnswers = route('admin/questions/answers', $question->id);
                    if( $query != '' ){
                        $question->searchButton = 0;
                    }else{
                        $question->searchButton = 1;
                    }
                    $allQuestion [] = $question;
                }
            }
            return $allQuestion;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    public function QuestionAnswers($id){
        try{
            $answers = $this->answer->where('question_id', $id)->get();
            return view('admin.questions.answers.index', compact(['answers', 'id']));
        }catch(\Exception $ex){
            flash()->error("There Is Something rong , Please Contact Technical Support");
            return back();
        }
    }

}