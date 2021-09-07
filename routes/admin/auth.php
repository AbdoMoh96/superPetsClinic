<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;

Route::get('login' , [LoginController::class , 'getLoginView'] )->name('login');

Route::post('login' , [LoginController::class , 'authenticate'] )->name('login');


Route::middleware('auth.admin')->group(function(){
    Route::post('logout' , [LoginController::class , 'logout'] )->name('logout');
});
