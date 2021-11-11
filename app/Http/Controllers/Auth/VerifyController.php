<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function getVerify(){
        return view('verify');
    }
    public function postVerify(Request $request){
        if($user=User::where('code',$request->code)->first()){
            $user->active=1;
            $user->code=null;
            $user->save();
            return redirect()->route('get_login');
            toastr()->success('Your account is active');
        }
        else{
            toastr()->error('verify code is not correct. Please try again');
            return redirect()->back();
        }
    }
}
