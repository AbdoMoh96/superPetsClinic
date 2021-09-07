<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\Store\SettingsController;
use App\Http\Controllers\Store\Payment\CartController;
use App\Http\Controllers\Store\Payment\CheckoutController;


/*##########Abdelrahman##Mohammed#El-sayed###########
* ##############FullStack#Web#Developer#############
* ##########Phone#=>01121226689##Egypt##############
* ######Email#=>abdo.moh96@outlook.com##############
* ######github#=>github.com/AbdoMoh96/##############*/


Route::get('/lang/{lang}' , [SettingsController::class , 'setLang'])->name("lang");
Route::get('/home' , [StoreController::class , 'index'])->name('index');

Route::get('/clinic' , [StoreController::class , 'clinic'])->name('clinic');
Route::get('/about' , [StoreController::class , 'about'])->name('about');
Route::get('/contact' , [StoreController::class , 'contact'])->name('contact');
Route::post('/contact' , [StoreController::class , 'contactForm'])->name('contact.post');
Route::get('/our_team' , [StoreController::class , 'team'])->name('team');
Route::get('/our_team/{id}' , [StoreController::class , 'showTeam'])->name('team.show');

Route::get('/appointment' , [StoreController::class , 'appointment'])->name('appointment');
Route::post('/appointment' , [StoreController::class , 'appointmentForm'])->name('appointment.post');

Route::get('products' , [StoreController::class , 'products'])->name('products');
Route::get('products/{product}' , [StoreController::class , 'getProduct'])->name('product.show');
Route::post('products/search' , [StoreController::class , 'productSearch'])->name('product.search.post');
Route::get('products/search/{title}' , [StoreController::class , 'productSearchGet'])->name('product.search.get');
Route::post('products/categories' , [StoreController::class , 'category'])->name('products.categories.post');
Route::get('products/categories/{categories}' , [StoreController::class , 'categoryGet'])->name('products.categories.get');


Route::middleware('auth.user')->group(function(){
    Route::get('cart' , [CartController::class , 'cartView'])->name('cart.show');
    Route::post('cart/add' , [CartController::class , 'cartAdd'])->name('cart.add');
    Route::post('cart/all' , [CartController::class , 'cartAll'])->name('cart.all');
    Route::post('cart/increment' , [CartController::class , 'cartIncrement'])->name('cart.increment');
    Route::post('cart/total' , [CartController::class , 'getCartTotal'])->name('cart.total');
    Route::post('cart/remove' , [CartController::class , 'cartRemove'])->name('cart.remove');
    Route::get('customer/checkout' , [CheckoutController::class , 'getCheckOutView'])->name('checkout');
    Route::post('customer/checkout' , [CheckoutController::class , 'checkout'])->name('checkout.post');
});


