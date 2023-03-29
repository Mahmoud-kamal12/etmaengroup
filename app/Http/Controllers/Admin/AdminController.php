<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AdminRequests\AdminChangePasswordRequest;
use App\Http\Requests\Admin\AdminRequests\AdminStoreRequest;
use App\Http\Repository\Eloquent\AdminRepository;
use App\Models\Role;

class AdminController extends Controller
{

    public $admin;
    public $role;

    public function __construct(AdminRepository $admin, Role $role)
    {
        $this->admin = $admin;
        $this->role = $role;
    }

    public function index(){
        try{
            $admins = $this->admin->GetAllAdmin();
            return view('admin.admins.index', compact('admins'));
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function create(){
        try{
            $roles = $this->role->get();
            return view('admin.admins.create', compact('roles'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function store(AdminStoreRequest $request){
        return $this->admin->AdminStore($request);
    }

    public function role($id){
        try{
            $admin = $this->admin->AdminRole($id); 
            $roles = $this->role->get();
            return view('admin.admins.role', compact(['roles', 'admin']));
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function roleUpdate(Request $request, $id){
        return $this->admin->AdminUpdateRole($id, $request);
    }

    public function info($id){
        return $this->admin->AdminInfo($id);
    }

    public function info_update(Request $request, $id){
        return $this->admin->AdminUpdateInfo($request, $id);
    }  

    public function change_password(AdminChangePasswordRequest $request){
        return $this->admin->AdminChangePassword($request);
    }

    public function activate($id){
        return $this->admin->AdminActivate($id);
    }

    public function delete($id){
        return $this->admin->AdminDelete($id);
    }

    public function search(Request $request){
        return $this->admin->AdminSearch($request);
    }

    public function getMore(Request $request){
        return $this->admin->AdminGetMore($request);
    }

}
