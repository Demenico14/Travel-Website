<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgetPasswordManager extends Controller
{
    function ForgetPassword(){
        return view("Auth.forget-password");
    }
    function ForgetPasswordPost(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token =Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("emails.forget",['token' => $token], function ($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route('forget.password'))->with('Success', 'We have send an Email to reset your password');

    }



    function resetPassword($token){
        return view('Auth.new-passoword', compact('token'));
    }

    function resetPasswordPost(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:5|confirmed',
            'password_confimation' => 'required'
        ]);

        $updatePassword = DB::table('password_reset_tokens')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();


        if(!$updatePassword){
            return redirect()->to(route('reset.password'))->with('Error', 'Invalid');
        }

        User::where('email', $request->email)->update(["password" => Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(["email" => $request->email])->delete();

        return redirect()->to(route('login'))->with('Sucess', 'Password reset Successful');


    }
}

