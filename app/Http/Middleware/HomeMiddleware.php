<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeMiddleware
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
        if(Auth::check()){
            if(Auth::user()->active == 1){
                return $next($request);
            }else{
                Auth::logout();
                toastr()->error("Your account is not active");
                return redirect()->route('get_login');
            }
        }else{
            return \redirect()->route('get_login');
        }
    }
}
