<?php

namespace App\Http\Controllers\Store\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Address;

class RegisterController extends Controller
{
    public function getRegisterView(){
        if(Auth::guard('web')->check()){
            return redirect()->route("store.index");
        }

        return view('store.auth.register');
    }

    public function register(Request $request){

        $request->validate([
          'first_name' => 'required',
          'last_name' => 'required',
          'email' => 'required|email|unique:users,email',
          'password' => 'required|string|min:2|confirmed',
          'password_confirmation' => 'required',
        ]);

        $user = new User();
        $user->first_name = $request['first_name'];
        $user->last_name  = $request['last_name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();

        Auth::loginUsingId($user['id']);

        return redirect()->route('store.index')->with('message' , 'welcome to Super Pets Store' );

    }

    public function newAddress(Request $request){

        $address = new Address();
        $address['user_id'] = Auth::guard('web')->user()->id;
        $address['city'] = $request['city'];
        $address['phone'] = $request['phone'];
        $address['street'] = $request['street'];
        $address['block'] = $request['block'];
        $address['floor'] = $request['floor'];
        $address['postal'] = $request['postal'];
        $address['apartment'] = $request['apartment'];
        $address['info'] = $request['info'];
        $address->save();

        return redirect()->back();
    }

    public function edit(){
        $user = Auth::guard('web')->user();
        $address = Auth::guard('web')->user()->address;
        return view('store.auth.profile' , compact('user' , 'address'));
    }

    public function update(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
//            'email' => 'required|email|unique:users,email',
//            'password' => 'required|string|min:2|confirmed',
//            'password_confirmation' => 'required',
        ]);

        $user = Auth::guard('web')->user();
        $user->first_name = $request['first_name'];
        $user->last_name  = $request['last_name'];
//        $user->email = $request['email'];
//        $user->password = Hash::make($request['password']);
        $user->update();

        return redirect()->back()->with('success' , 'account updated successfully!!');
    }
}
