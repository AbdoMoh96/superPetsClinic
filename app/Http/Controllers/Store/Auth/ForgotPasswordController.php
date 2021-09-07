<?php

namespace App\Http\Controllers\Store\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm(){
        return view("store.auth.forgot-password");
    }

    public function submitForgetPasswordForm(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request['email'],
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('mail.forgetPassword', ['token' => $token , 'email' => $request['email'] ], function($message) use($request){
            $message->from("superpetsclinic@example.com");
            $message->to($request["email"]);
            $message->subject('Reset Password');
        });

        return back()->with('status', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($email , $token){
        return view('store.auth.reset-password' , compact('token' , 'email'));
    }

    public function submitResetPasswordForm(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:2|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request['email'],
                'token' => $request['token']
            ])
            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        User::where('email', $request['email'])->update(['password' => Hash::make($request['password'])]);

        DB::table('password_resets')->where(['email'=> $request['email']])->delete();

        return redirect()->route("store.login")->with('message', 'Your password has been changed!');
    }
}
