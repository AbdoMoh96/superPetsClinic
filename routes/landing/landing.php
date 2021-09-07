<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\LandingController;

/*##########Abdelrahman##Mohammed#El-sayed###########
* ##############FullStack#Web#Developer#############
* ##########Phone#=>01121226689##Egypt##############
* ######Email#=>abdo.moh96@outlook.com##############
* ######github#=>github.com/AbdoMoh96/##############*/

Route::get('/home' , [LandingController::class , 'home'])->name('index');
