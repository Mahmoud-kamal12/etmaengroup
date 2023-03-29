<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AdminRequests\AdminChangePasswordRequest;
use App\Http\Requests\Admin\AdminRequests\AdminStoreRequest;
use App\Http\Repository\Eloquent\TeacherRepository;

class TeacherController extends Controller
{

    public $teacher;

    public function __construct(TeacherRepository $teacher)
    {
        $this->teacher = $teacher;
    }

    public function index(){
        try{
            $teachers = $this->teacher->GetAllTeacher();
            return view('admin.teachers.index', compact('teachers'));
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function create(){
        try{
            return view('admin.teachers.create');
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function store(AdminStoreRequest $request){
        return $this->teacher->TeacherStore($request);
    }

    public function activate($id){
        return $this->teacher->TeacherActivate($id);
    }

    public function delete($id){
        return $this->teacher->TeacherDelete($id);
    }

    public function search(Request $request){
        return $this->teacher->TeacherSearch($request);
    }

    public function getMore(Request $request){
        return $this->teacher->TeacherGetMore($request);
    }

}
