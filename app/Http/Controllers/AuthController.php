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
    public function login()
    {
        // dd(Hash::make('123456'));

        // para hindi bumalik sa login page kung talagang nakalog in na
        if(!empty(Auth::check())) {
            if(Auth::user()->user_type == 'super_admin') {
                return redirect('/super_admin/overview');
            } else if(Auth::user()->user_type == 'admin') {
                return redirect('/admin/overview');
            } else if (Auth::user()->user_type == 'encoder'){
                return redirect('/encoder/overview');
            } else if (Auth::user()->user_type == 'viewer'){
                return redirect('/viewer/overview'); // Changed directory to overview, wala ng dashboard na term para di nakakalito
            }     
        }

        return view('login');
    }

    public function AuthLogin(Request $request)
    {
        // dd($request->all());
        $user = User::getEmailSingle($request->email);

        // $remember = !empty($request->remember) ? true : false;

        if(!empty($user)) {
            if($user->email_verified_at == '') {
                return redirect()->back()->with('error', 'Your account is not yet verified.');
            }
            // if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                if(!empty(Auth::check())) {

                    if(Auth::user()->user_type == 'super_admin') {
                        return redirect('/super_admin/overview');
                    } else if(Auth::user()->user_type == 'admin') {
                        return redirect('/admin/overview');
                    } else if (Auth::user()->user_type == 'encoder'){
                        return redirect('/encoder/overview');
                    } else if (Auth::user()->user_type == 'viewer'){
                        return redirect('/viewer/overview'); //Changed directory to overview, wala ng dashboard na term para di nakakalito
                    }
                }            
            } else {
                return redirect()->back()->with('error', 'Please enter correct email and password');
            }
        } else {
            return redirect()->back()->with('error', 'Please create an account before logging in.');
        }
    }

    public function PostForgot(Request $request)
    {
        $user = User::getEmailSingle($request->email);
        // dd($user);
        if(!empty($user)) {
            $user->remember_token = Str::random(30);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('success', "Please check your email and reset your password.");
        } else {
            return redirect()->back()->with('error', "Email is not existing"); 
        }
    }

    public function reset($remember_token) 
    {
        $user = User::getTokenSingle($remember_token);

        if(!empty($user)) {
            $data['user'] = $user;

            return view('reset', $data);
        } else {
            abort(404);
        }
    }

    public function PostReset($remember_token, Request $request)
    {
        if($request->password == $request->confirm_password) {
            $user = User::getTokenSingle($remember_token);
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();

            return redirect(url('/login'))->with('success', "Password successfully reset.");
        } else {
            return redirect()->back()->with('error', "Password and Confirm Password does not match.");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
        // return redirect(url(''));
    }
}
