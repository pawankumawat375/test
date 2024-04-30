<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Mail;
use Str;
class AuthController extends Controller
{
    public function login(){
        // dd(Hash::make(123456));
        if(Auth::check()){
            return redirect('admin/dashboard');
        }
        return view('auth.login');
    }

    public function AuthLogin(Request $data){
        // dd($data->all());
        $remember = !empty($data->remember) ? true : false;
        if(Auth::attempt(['email'=> $data->username, 'password'=>$data->password], $remember)){

            if(Auth::user()->user_type == 1){
                return redirect('admin/dashboard');
            }
            elseif(Auth::user()->user_type == 2){
                return redirect('teacher/dashboard');
            }
            elseif(Auth::user()->user_type == 3){
                return redirect('student/dashboard');
            }
            elseif(Auth::user()->user_type == 4){
                return redirect('parent/dashboard');
            }


        }
        else{
            return redirect()->back()->with('error','Please enter correct email and password');
        }
        
    }
    public function logout(){
        Auth::logout();
        return view('auth.login');
    }

    public function forgotpassword(){
        return view('auth.forgot');
    }

    public function PostForgotpassword(Request $data){
        
        $user = User::where('email',$data->username)->first();
        if(!empty($user)){
            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($data->username)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('seccess','Thanks, Please check your email');
        }
        else{
            return redirect()->back()->with('error','Please enter correct email');
        }
    }

    public function reset($token){
        $user = User::where('remember_token', $token)->first();
        if(!empty($token)){
            $data['user'] = $user;
            return view('auth.reset', $data);
        }
        else{
            abort(404);
        }
        echo $token;
    }
    public function postrest($token, Request $request){
        if($request->password == $request->cpassword){
            $user = User::where('remember_token', $token)->first();
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('login')->with('seccess','Password successfully reset.');
        }
        else{
            return redirect()->back()->with('error','Password and Confirm password notmach');
        }
    }
}
