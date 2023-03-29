<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Questionnaire;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function gallery()
    {
        try{
            $galleries_section_one = Gallery::active()->where('section', 1)->get();
            $galleries_section_two = Gallery::active()->where('section', 2)->get();
            return view('gallery', compact(['galleries_section_one', 'galleries_section_two']));
        }catch(\Exception $ex){
            return $ex;
            flash()->error('Something bad happend .. please communicate with the support team');
            return back();
        }
    }

    public function trainee_questionnaire()
    {
        try{
            $questionnaire = Questionnaire::find(1);
            return view('trainee_questionnaire', compact('questionnaire'));
        }catch(\Exception $ex){
            flash()->error('Something bad happend .. please communicate with the support team');
            return back();
        }
    }

    public function trainers_questionnaire()
    {
        try{
            $questionnaire = Questionnaire::find(2);
            return view('trainers_questionnaire', compact('questionnaire'));
        }catch(\Exception $ex){
            flash()->error('Something bad happend .. please communicate with the support team');
            return back();
        }
    }

    public function presentation()
    {
        try{
            $questionnaire = Questionnaire::find(3);
            return view('presentation', compact('questionnaire'));
        }catch(\Exception $ex){
            flash()->error('Something bad happend .. please communicate with the support team');
            return back();
        }
    }
}
