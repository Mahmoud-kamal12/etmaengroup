<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Repository\Eloquent\QuestionnaireRepository;

class QuestionnairesController extends Controller
{

    public $questionnaire;

    public function __construct(QuestionnaireRepository $questionnaire)
    {
        $this->questionnaire = $questionnaire;
    }

    public function index(){
        try{
            $questionnaires = $this->questionnaire->GetAll();
            return view('admin.questionnaires.index', compact('questionnaires'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function update(Request $request){
        return $this->questionnaire->QuestionnaireUpdate($request);
    }

}
