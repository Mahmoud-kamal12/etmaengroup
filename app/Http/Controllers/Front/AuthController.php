<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User\UserRequests\UserLoginRequest;
use App\Http\Requests\User\UserRequests\UserSignInRequest;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use App\Mail\User\ResetPassword;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login(){
        if(auth()->user()){
            return redirect(route('home'));
        }else{
            return view('login');
        }
    }

    public function check_login(UserLoginRequest $request){
        try{
            // validation
            $admin = User::where('email', $request->email)->first();
            if($admin){
                if(FacadesHash::check($request->password, $admin->password)){
                    if($admin->is_activate == 1){
                        if(FacadesAuth::guard('web')->attempt($request->only('email', 'password'))){
                            return redirect(route('home'));
                        }
                    }else{
                        flash()->error("You Are Not Activate");
                        return back();
                    }
                }else{
                    flash()->error("Data Not Correct");
                    return back();
                }
            }else{
                flash()->error("Data Not Correct");
                return back();
            }
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function sign_in(){
        if(auth()->user()){
            return redirect(route('home'));
        }else{
            return view('sign_in');
        }
    }

    public function check_sign_in(UserSignInRequest $request){
        try{
            // validation
            $user = new User();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->id_number = $request->id_number;
            $user->gender = $request->gender;
            $user->is_activate = 1;
            $user->password = bcrypt($request->password);
            $user->save();
            flash()->success("Created Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function logout(){
        auth('web')->logout();
        return redirect(route('home'));
    }

    public function reset_password()
    {
        return view('reset_password');
    }

    public function send_code(Request $request){
        // validation
        $validator = validator()->make($request->all(),[
            'email' => 'required|email|exists:users,email|max:30'
        ]);
        if($validator->fails()){
            flash()->error($validator->errors()->first());
            return back();
        }
        try{
            $dateNow = Carbon::now()->format('Y-m-d');
            // check if admin is in database
            $student = User::where('email', $request->email)->first(); 
            if($student){
                // send code
                $code = rand(1111, 9999);
                $student->pin_code = $code;
                $student->pin_code_expiration = $dateNow;
                $student->save();
                Mail::to($student->email)
                    ->bcc("amrhuusien99@gmail.com")
                    ->send(New ResetPassword($code));
                    flash()->success("send Code Has Been Done");
                    return back();
            }else{
                flash()->error("There IS Something Wrong , Please Contact Technical Support");
                return back();
            }
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function reset_password_last()
    {
        return view('reset_password_last');
    }

    public function password_update(Request $request){
        // validation
        $validator = validator()->make($request->all(),[
            'pin_code' => 'required',
            'email' => 'required|email|exists:users,email|max:30',
            'password' => 'required|confirmed|max:15'
        ]);
        if($validator->fails()){
            flash()->error($validator->errors()->first());
            return back();
        }
        try{
            $dateBefour24Hour = Carbon::now()->parse('-24 hours');
            // check if is admin in database
            $student = User::where('email', $request->email)->first(); 
            if($student){
                // check pin code 
                if($student->pin_code == $request->pin_code){
                    if(strtotime($dateBefour24Hour) <= strtotime($student->pin_code_expiration) ){
                        // update password
                        $student->password = bcrypt($request->input('password'));
                        $student->pin_code = NULL;
                        $student->pin_code_expiration = NULL;
                        $student->save();
                        flash()->success("The Change Has Been Done");
                        return back();
                    }else{
                        flash()->error("This Code Has Expired");
                        return back();
                    }
                }else{
                    flash()->error("There Is Something Wrong , Please Contact Technical Support");
                    return back();
                }
            }else{
                flash()->error("There Is Something Wrong , Please Contact Technical Support");
                return back();
            }
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

}
