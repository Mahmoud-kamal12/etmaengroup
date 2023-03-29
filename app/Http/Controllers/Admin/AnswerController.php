<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AnswerRequests\AnswerStoreRequest;
use App\Http\Repository\Eloquent\AnswerRepository;

class AnswerController extends Controller
{

    public $answer;

    public function __construct(AnswerRepository $answer)
    {
        $this->answer = $answer;
    }

    public function store(AnswerStoreRequest $request, $id){
        return $this->answer->AnswerStore($request, $id);
    }

    public function update(Request $request, $id){
        return $this->answer->AnswerUpdate($request, $id);
    }

    public function activate($id){
        return $this->answer->AnswerActivate($id);
    }

    public function delete($id){
        return $this->answer->AnswerDelete($id);
    }

}
