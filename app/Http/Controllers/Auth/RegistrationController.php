<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use App\SendCode;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

class RegistrationController extends Controller
{

    public function getRegister(){
       return view('auth.register');
    }
    public function registered(Request $request){
       $request->validate([
        // 'name' => $request->name,
        'name' => 'required',
        'email' =>  'required|unique:users',
        'phone' => 'required',
        'password' => 'required|confirmed',
       ]);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            //'code'=>SendCode::sendCode($request->phone),
            'password' => bcrypt($request->password),
        ]);
        if($user){
            $user->code=SendCode::sendCode($user->phone);
            $user->save();
            toastr()->success('Please verify your account');
            return redirect()->route('get_verify');
        }




    }
}
