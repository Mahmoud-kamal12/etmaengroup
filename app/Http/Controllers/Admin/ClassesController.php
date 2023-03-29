<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ClassesRequests\ClassesStoreRequest;
use App\Http\Repository\Eloquent\ClassesRepository;
use Illuminate\Support\Facades\DB as FacadesDB;

class ClassesController extends Controller
{

    public $classes_repo;

    public function __construct(ClassesRepository $classes_repo)
    {
        $this->classes_repo = $classes_repo;
    }

    public function index()
    {
        try{
            $classes = $this->classes_repo->GetAll();
            return view('admin.classes.index', compact('classes'));
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function create()
    {
        try{
            return view('admin.classes.create');
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function store(ClassesStoreRequest $request)
    {
        return $this->classes_repo->ClassesStore($request);
    }

    public function details($id)
    {
        try{
            $classes = $this->classes_repo->GetClasses($id);
            $students = $this->classes_repo->GetClassStudents($classes->id);
            return view('admin.classes.details', compact(['classes', 'students']));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function edit($id)
    {
        try{
            $classes = $this->classes_repo->GetClasses($id);
            return view('admin.classes.edit', compact('classes'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function update(Request $request, $id)
    {
        return $this->classes_repo->ClassesUpdate($request, $id);
    }

    public function addStudents($id)
    {
        try{
            $classes = $this->classes_repo->ClassesShowAddStudents($id);;
            return view('admin.classes.add_students', compact('classes'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function studentsSearch(Request $request)
    {
        return $this->classes_repo->ClassesStudentsSearch($request);
    }

    public function studentsStore(Request $request)
    {
        return $this->classes_repo->ClassesAddStudents($request);
    }

    public function studentsRemove(Request $request)
    {
        return $this->classes_repo->ClassesRemoveStudent($request);
    }

    public function file($id)
    {
        try{
            $classes = $this->classes_repo->GetClasses($id);
            $files = $this->classes_repo->GetFiles($classes->id);
            return view('admin.classes.file', compact(['classes', 'files']));
        }catch(\Exception $ex){
            flash()->error("There Is Something WRong , Please Contact Techncial Support");
            return back();
        }
    }

    public function fileStore(Request $request, $id)
    {
        return $this->classes_repo->ClassesStoreFile($request, $id);
    }

    public function fileDownload($id)
    {
        return $this->classes_repo->ClassesFileDownload($id);
    }

    public function fileDelete($id)
    {
        return $this->classes_repo->ClassesFileDelete($id);
    }

    public function activate($id)
    {
        return $this->classes_repo->ClassesActivate($id);
    }

    public function delete($id)
    {
        return $this->classes_repo->ClassesDelete($id);
    }

    public function getMore(Request $request)
    {
        return $this->classes_repo->ClassesGetMore($request);
    }

    public function search(Request $request)
    {
        return $this->classes_repo->ClassesSearch($request);
    }

}
