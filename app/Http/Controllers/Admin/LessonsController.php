<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LessonRequests\LessonStoreRequest;
use App\Http\Repository\Eloquent\LessonRepository;

class LessonsController extends Controller
{

    public $lesson;

    public function __construct(LessonRepository $lesson)
    {
        $this->lesson = $lesson;
    }

    public function index($id)
    {
        return $this->lesson->LessonIndex($id);
    }

    public function store(LessonStoreRequest $request, $id){
        return $this->lesson->LessonStore($request, $id);
    }

    public function update(Request $request, $id){
        return $this->lesson->LessonUpdate($request, $id);
    }

    public function activate($id){
        return $this->lesson->LessonActivate($id);
    }

    public function delete($id){
        return $this->lesson->LessonDelete($id);
    }

}
