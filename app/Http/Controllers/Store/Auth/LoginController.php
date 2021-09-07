<?php

namespace App\Http\Controllers\Store\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{

    public function getLoginView(){
        if(Auth::guard('web')->check()){
            return redirect()->route("store.index");
        }

        return view('store.auth.login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt($credentials , $request["remember"])) {
            $request->session()->regenerate();
            return redirect()->route('store.index');
//            return redirect()->intended('store/home');
        }

        return back()->withErrors([
            'email' => 'The Email or Password are wrong.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('store.index');
    }
}
