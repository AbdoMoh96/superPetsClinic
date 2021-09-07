<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
/*##########Abdelrahman##Mohammed#El-sayed###########
* ##############FullStack#Web#Developer#############
* ##########Phone#=>01121226689##Egypt##############
* ######Email#=>abdo.moh96@outlook.com##############
* ######github#=>github.com/AbdoMoh96/##############*/

Route::get("/" , function(){
    return redirect()->route("clinic.index");
});

/*Route::get("/clear" , function(){
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    exec('composer dump-autoload');
    return redirect()->route("clinic.index");
});*/


