<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }
    public function login(Request $request){
        $request->validate([
            'email' =>'required|email',
            'password' => 'required',
        ]);

        $loginData=$request->only('email','password');
        if(Auth::attempt($loginData)){
            $request->session()->regenerate();
            toastr()->success("Welcome to our website");
          return redirect()->route('home');
        }else{
          toastr()->error("Record does not match");
          return redirect()->back();
      }

    }

    public function logout(){
        Auth::logout();
        toastr()->success("logout Successfull");
        return redirect()->route('get_login');

    }

}
