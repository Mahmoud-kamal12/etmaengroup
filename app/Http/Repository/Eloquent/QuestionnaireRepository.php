<?php 

namespace App\Http\Repository\Eloquent;

use App\Models\Questionnaire;
use DB;
use Hash;
use Illuminate\Validation\Rule;

class QuestionnaireRepository extends AbstractRepository
{

    protected $model;

    public function __construct(Questionnaire $model)
    {
        $this->model = $model;
    }

    public function QuestionnaireUpdate($request)
    {
        try{
            //create
            $questionnaire = $this->model->findOrFail($request->row_id);
            if($questionnaire->id == 1 || $questionnaire->id == 2){
                $questionnaire->value = $request->link;
            }elseif($questionnaire->id == 3){
                //save image
                if (!$request->hasFile('photo') == null) {
                    $file = uploadIamge( $request->file('photo'), 'products'); // function on helper file to upload file
                    $questionnaire->value = $file;
                }
            }
            $questionnaire->save();
            flash()->success("Updated Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

}