<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store\Auth\LoginController;
use App\Http\Controllers\Store\Auth\RegisterController;
use App\Http\Controllers\Store\Auth\ForgotPasswordController;
use App\Http\Controllers\Store\Payment\CartController;

Route::get('login' , [LoginController::class , 'getLoginView'] )->name('login');

Route::post('login' , [LoginController::class , 'authenticate'] )->name('login');

Route::middleware('auth.user')->group(function(){
    Route::post('logout' , [LoginController::class , 'logout'] )->name('logout');
    Route::get('/profile' , [RegisterController::class , 'edit'] )->name('auth.edit');
    Route::post('/profile/update' , [RegisterController::class , 'update'] )->name('auth.update');
    Route::post('/profile/create/address' , [RegisterController::class , 'newAddress'] )->name('auth.create.address');
});


/*<==============Register=routes==============>*/
Route::get('register' , [RegisterController::class , 'getRegisterView'])->name('register.get');
Route::post('register' , [RegisterController::class , 'register'])->name('register.post');
/*<==============Register=routes==============>*/


/*<==========forgot=password=routes========>*/
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{email}/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
/*<==========forgot=password=routes========>*/
