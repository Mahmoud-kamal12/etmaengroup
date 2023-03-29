<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->guard('admin')->check()){
            if(auth()->guard('admin')->user()->is_supplier == 0){
                return $next($request);
            }else{
                flash()->error("This Account Not Activate , Please Contact Technical Support");
                return redirect(route('front/login'));
            }
        }else{
            flash()->error("FORBIDDEN , Please Contact Technical Support");
            return redirect(route('front/login'));
        }
    }
}
