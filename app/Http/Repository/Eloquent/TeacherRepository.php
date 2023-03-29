<?php 

namespace App\Http\Repository\Eloquent;

use App\Models\Admin;
use DB;
use Hash;
use Illuminate\Validation\Rule;

class TeacherRepository extends AbstractRepository
{

    protected $model;

    public function __construct(Admin $model)
    {
        $this->model = $model;
    }

    public function GetAllTeacher()
    {
        return $this->model->latest()->where('is_teacher', 1)->paginate(10);
    }

    public function TeacherStore($request)
    {
        try{
            // validation 
            // hash password
            $request->merge(['password' => bcrypt($request->password)]);
            //create admin
            $admin = new $this->model();
            $admin->is_activate = 1;
            $admin->name = $request->name;
            $admin->email = $request->email; 
            $admin->phone = $request->phone; 
            $admin->password = $request->password; 
            $admin->is_teacher = 1;
            //save image
            if (!$request->hasFile('photo') == null) {
                $file = uploadIamge( $request->file('photo'), 'admins'); // function on helper file to upload file
                $admin->photo = $file;
            }
            $admin->save();
            flash()->success("Success Add");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function TeacherActivate($id)
    {
        try{
            $admin = $this->model->findOrFail($id);
            if($admin->is_activate == 1){
                $admin->update(['is_activate' => 0]);
            }else{
                $admin->update(['is_activate' => 1]);
            }
            flash()->success("The Change Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong ,  Please Contact Technical Support");
            return back();
        }
    }

    public function TeacherDelete($id)
    {
        try{
            $admin = $this->model->findOrFail($id);
            $admin->delete();
            flash()->success("The Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function TeacherGetMore($request)
    {
        try{
            if(isset($request->id) && $request->id > 0){
                $admins = $this->model->latest()->where('is_teacher', 1)->skip($request->id)->limit(10)->get();
            }else{
                $admins = $this->model->latest()->where('is_teacher', 1)->skip(10)->limit(10)->get();
            }
            $alladmins = [];
            if($admins && count($admins) > 0){
                foreach($admins as $admin ){
                    $admin->photo = asset($admin->photo);
                    $admin->urlRouteActivate = route('admins/activate', $admin->id);
                    $admin->urlRouteDelete = route('admins/delete', $admin->id);
                    $alladmins [] = $admin;
                }
            }
            return $alladmins;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    public function TeacherSearch($request)
    {
        try{
            $query = $request->get('query');
            $admins = [];
            if($query != ''){
                $admins = $this->model->latest()->where('id', 'LIKE', '%'. $query .'%')
                                                ->orWhere('email', 'LIKE', '%'. $query .'%')
                                                ->orWhere('name', 'LIKE', '%'. $query .'%')
                                                ->where('is_teacher', 1)
                                                ->get();
            }else{
                $admins = $this->model->latest()->where('is_teacher', 1)->paginate(10);
            }
            $alladmins = [];
            if($admins && count($admins) > 0){
                foreach($admins as $admin ){
                    if($admin->is_teacher == 1){
                        $admin->photo = asset($admin->photo);
                        $admin->urlRouteActivate = route('admins/activate', $admin->id);
                        $admin->urlRouteDelete = route('admins/delete', $admin->id);
                        if( $query != '' ){
                            $admin->searchButton = 0;
                        }else{
                            $admin->searchButton = 1;
                        }
                        $alladmins [] = $admin;
                    }
                }
            }
            return $alladmins;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

}