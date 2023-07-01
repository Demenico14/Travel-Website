<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('login');
    }


    function signup(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('signup');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $detail = $request->only('email', 'password');
        if (Auth::attempt($detail)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Invalid Credentials!");

    }

    function signupPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);


        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['password']= $request->password;
        $user = User::create($data);
        if(!$user){
            return redirect(route('signup'))->with("error", "Signup failed, please try again");
        }
        return redirect(route('login'))->with("success", "Valid credentials, Login  to Access Application");

    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
