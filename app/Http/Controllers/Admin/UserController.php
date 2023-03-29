<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UserRequests\UserStoreRequest;
use App\Http\Repository\Eloquent\UserRepository;

class UserController extends Controller
{

    public $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function index(){
        try{
            $users = $this->user->GetAll();
            return view('admin.users.index', compact('users'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function create(){
        try{
            return view('admin.users.create');
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function store(UserStoreRequest $request){
        return $this->user->UserStore($request);
    }

    public function activate($id){
        return $this->user->UserActivate($id);
    }

    public function delete($id){
        return $this->user->UserDelete($id);
    }

    public function getMore(Request $request){
        return $this->user->UserGetMore($request);
    }

    public function search(Request $request){
        return $this->user->UserSearch($request);
    }

}
