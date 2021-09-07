<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function setLang($lang){
        session()->put('store.lang' , $lang);
        return redirect()->back();
    }
}
