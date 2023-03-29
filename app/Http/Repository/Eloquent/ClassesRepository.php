<?php

namespace App\Http\Repository\Eloquent;

use App\Events\NotificationSend;
use App\Models\Classes;
use App\Models\User;
use App\Models\DataClasses;
use App\Models\ClassesFiles;
use App\Models\Notification;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB as FacadesDB;
use \Pusher\Pusher;

class ClassesRepository extends AbstractRepository
{
    protected $model;
    protected $student;
    protected $class_data;
    protected $file_model;
    protected $notification;

    public function __construct(Classes $model, User $student, DataClasses $class_data, ClassesFiles $file_model, Notification $notification)
    {
        $this->model = $model;
        $this->student = $student;
        $this->class_data = $class_data;
        $this->file_model = $file_model;
        $this->notification = $notification;
    }

    public function ClassesStore($request)
    {
        try{
            // validation
            // create new city
            $class = new $this->model();
            $class->title = $request->title;
            $class->admin_id = auth()->user()->id;
            $class->is_activate = 1;
            $class->save();
            flash()->success("Added Has Been Done");
            if(isset($request->is_going) && (int)$request->is_going === 1 ){
                return redirect()->route('admin/classes/add/students', $class->id);
            }else{
                return back();
            }
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Somrthing Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function GetClasses($id)
    {
        return $this->model->findOrFail($id);
    }

    public function GetClassStudents($id)
    {
        try{
            return FacadesDB::select("SELECT US.*
                                        FROM data_classes DCT
                                        INNER JOIN users US ON DCT.student_id = US.id
                                        INNER JOIN classes CL ON DCT.class_id = CL.id
                                        WHERE CL.id = $id AND CL.is_activate = 1 AND US.is_activate = 1");
        }catch(\Exception $ex){
            return '';
        }
    }

    public function ClassesUpdate($request, $id)
    {
        try{
            // dd($request->all());
            // validation
            $validator = validator()->make($request->all(),[
                'title' => ['required', Rule::unique('classes', 'title')->ignore($id, 'id')],
            ]);
            if($validator->fails()){
                flash()->error($validator->errors()->first());
                return back();
            }
            $class = $this->model->findOrFail($id);
            $class->title = $request->title;
            $class->save();
            flash()->success("Edited Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function GetFiles($id)
    {
        try{
            return FacadesDB::select("SELECT DCF.*
                                        FROM classes_files DCF
                                        INNER JOIN classes CL ON DCF.class_id = CL.id
                                        WHERE CL.id = $id AND CL.is_activate = 1 AND DCF.is_activate = 1");
        }catch(\Exception $ex){
            return '';
        }
    }

    public function ClassesStoreFile($request, $id)
    {
        try{
            // validation
            $validator = validator()->make($request->all(),[
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf,docx,doc|max:2048',
            ]);
            if($validator->fails()){
                flash()->error($validator->errors()->first());
                return back();
            }
            $class = $this->model->find($id);
            if(!$class){
                flash()->error("There Is Something Wrong , Please Contact Technical Support");
                return back();
            }

            $row = new $this->file_model();
            //save image
            if (!$request->hasFile('file') == null) {
                $file = uploadIamge( $request->file('file'), 'classes'); // function on helper file to upload file
                $row->file = $file;
            }
            $row->file_name = $request->file->getClientOriginalName();
            $row->class_id = $class->id;
            $row->admin_id = auth()->user()->id;
            $row->is_activate = 1;
            $row->save();

            $options = array(
                'cluster' => 'mt1',
                'useTLS' => true
            );
            $pusher = new Pusher(
                'dfc8ac8682cb7ddaf65d',
                '47ef6bdc40dddf6d85ce',
                '1423511',
                $options
            );

            if(count($class->students) > 0){
                foreach($class->students as $student_data){
                    $new_notifi = new $this->notification();
                    $new_notifi->student_id = $student_data->student_id;
                    $new_notifi->class_id = $class->id;
                    $new_notifi->file_id = $row->id;
                    $new_notifi->save();

                    $data = ['student_id' => $student_data->student_id, 'file_id' => $row->id, 'notifi_id' => $new_notifi->id];
                    $pusher->trigger('my-channel', 'notifi-push', $data);
                }
            }

            flash()->success("Edited Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ClassesFileDownload($id)
    {
        try{
            $row = $this->file_model->find($id);
            if(!$row){
                flash()->error("There Is Something Wrong , Please Contact Technical Support");
                return back();
            }
            return response()->download(public_path($row->file), $row->file_name);
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ClassesFileDelete($id)
    {
        try{
            $row = $this->file_model->find($id);
            if(!$row){
                flash()->error("There Is Something Wrong , Please Contact Technical Support");
                return back();
            }
            $row->delete();
            flash()->success("Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ClassesShowAddStudents($id)
    {
        return $this->model->findOrFail($id);
    }

    public function ClassesStudentsSearch($request)
    {
        try{
            $query = $request->get('query');
            $classs = [];
            if($query != ''){
                $classs = $this->student->latest()->where('id', 'LIKE', '%'. $query .'%')
                                                ->orWhere('phone', 'LIKE', '%'. $query .'%')
                                                ->orWhere('email', 'LIKE', '%'. $query .'%')
                                                ->orWhere('name', 'LIKE', '%'. $query .'%')
                                                ->get();
            }
            $allClasses = [];
            if($classs && count($classs) > 0){
                $allClasses [] = $classs;
            }
            return $allClasses;
        }catch(\Exception $ex){
            return responseJson(0, 'error');
        }
    }

    public function ClassesAddStudents($request)
    {
        try{
            // dd( $request->all());
            // validation
            $old_student = $this->class_data->where('class_id', (int)$request->class_id)->where('student_id', (int)$request->student_id)->first();
            if(!$old_student){
                // create new 
                $atudent = new $this->class_data();
                $atudent->class_id = (int)$request->class_id;
                $atudent->student_id = (int)$request->student_id;
                $atudent->admin_id = auth()->user()->id;
                $atudent->is_activate = 1;
                $atudent->save();
                return response()->json(['success' => 'Added Has Been Done'], 200);
            }else{
                return response()->json(['error' => 'This Student Already Exists In This Class'], 200);
            }
        }catch(\Exception $ex){
            return response()->json(['error' => $ex->getMessage()], 500);
            // return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support'], 200);
        }
    }

    public function ClassesRemoveStudent($request)
    {
        try{
            $validator = validator()->make($request->all(),[
                'class_id' => ['required', Rule::exists('classes', 'id')],
                'student_id' => ['required', Rule::exists('users', 'id')],
            ]);
            if($validator->fails()){
                flash()->error($validator->errors()->first());
                return back();
            }
            $student =  $this->class_data->where([['class_id', $request->class_id], ['student_id', $request->student_id]])->first();
            $student->delete();
            return response()->json(['success' => 'Deleted Has Been Done']);
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    public function ClassesActivate($id)
    {
        try{
            $class = $this->model->findOrFail($id);
            if($class->is_activate == 0){
                $class->update(['is_activate' => 1]);
            }else{
                $class->update(['is_activate' => 0]);
            }
            flash()->success("The Change Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ClassesDelete($id)
    {
        try{
            $class =  $this->model->findOrFail($id);
            $class->delete();
            flash()->success("Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Somrthing Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ClassesGetMore($request)
    {
        try{
            if( isset($request->id) && $request->id > 0){
                $classs = $this->model->latest()->skip($request->id)->limit(10)->get();
            }else{
                $classs = $this->model->latest()->skip(10)->limit(10)->get();
            }
            $allClasses = [];
            if($classs && count($classs) > 0){
                foreach($classs as $class ){
                    $class->urlRouteEdit = route('admin/classes/edit', $class->id);
                    $class->urlRouteActivate = route('admin/classes/activate', $class->id);
                    $class->urlRouteDelete = route('admin/classes/delete', $class->id);
                    $allClasses [] = $class;
                }
            }
            return $allClasses;
        }catch(\Exception $ex){
            return responseJson(0, 'error');
        }
    }

    public function ClassesSearch($request)
    {
        try{
            $query = $request->get('query');
            $classs = [];
            if($query != ''){
                $classs = $this->model->latest()->where('id', 'LIKE', '%'. $query .'%')
                                                ->orWhere('title', 'LIKE', '%'. $query .'%')
                                                ->get();
            }else{
                $classs = $this->model->latest()->paginate(10);
            }
            $allClasses = [];
            if($classs && count($classs) > 0){
                foreach($classs as $class ){
                    $class->urlRouteEdit = route('admin/classes/edit', $class->id);
                    $class->urlRouteActivate = route('admin/classes/activate', $class->id);
                    $class->urlRouteDelete = route('admin/classes/delete', $class->id);
                    if( $query != '' ){
                        $class->searchButton = 0;
                    }else{
                        $class->searchButton = 1;
                    }
                    $allClasses [] = $class;
                }
            }
            return $allClasses;
        }catch(\Exception $ex){
            return responseJson(0, 'error');
        }
    }

}
