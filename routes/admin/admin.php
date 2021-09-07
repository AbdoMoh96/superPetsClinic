<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\FilesController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;

Route::get('/' , [DashboardController::class , 'index'])->name('dashboard');

/*<=============slider=routes=============>*/
Route::prefix('sliders')->name('slider.')->group(function(){

    Route::get('/' , [SlidersController::class , 'index'])->name('index');
    Route::get('/create/slide/{slider}' , [SlidersController::class , 'createSlide'])->name('slides.create');
    Route::post('/dashboard/slide' , [SlidersController::class , 'storeSlide'])->name('slides.store');
    Route::get('/edit/slide/{slide}' , [SlidersController::class , 'editSlide'])->name('slides.edit');
    Route::post('/update/slide' , [SlidersController::class , 'updateSlide'])->name('slides.update');
    Route::delete('/dashboard/slide/delete/{slide}' , [SlidersController::class , 'deleteSlide'])->name('slides.delete');
    Route::get('/{slider}' , [SlidersController::class , 'showSlides'])->name('slides.index');
});
/*<=========end=slider=routes=============>*/

Route::prefix('products')->name('product.')->group(function(){
    Route::get('/' , [ProductController::class , 'index'])->name('index');
    Route::get('/create' , [ProductController::class , 'create'])->name('create');
    Route::post('/store' , [ProductController::class , 'store'])->name('store');
    Route::get('/edit/{product}' , [ProductController::class , 'edit'])->name('edit');
    Route::post('/update' , [ProductController::class , 'update'])->name('update');
    Route::delete('/delete/{product}' , [ProductController::class , 'destroy'])->name('delete');
});


/*<=============About=routes=============>*/
Route::get('about/update' , [AboutController::class , 'edit'])->name('about.edit');
Route::post('about/update' , [AboutController::class , 'update'])->name('about.update');
/*<=============About=routes=============>*/

/*<=============Contact=routes=============>*/
Route::get('contact/update' , [ContactController::class , 'edit'])->name('contact.edit');
Route::post('contact/update' , [ContactController::class , 'update'])->name('contact.update');
/*<=============Contact=routes=============>*/

/*<=============Settings=routes=============>*/
Route::get('settings/update' , [SettingsController::class , 'edit'])->name('settings.edit');
Route::post('settings/update' , [SettingsController::class , 'update'])->name('settings.update');
/*<=============Settings=routes=============>*/

/*<=============Mail=routes=============>*/
Route::get('mail' , [MailController::class , 'index'])->name('mail.index');
Route::get('mail/show/{mail}' , [MailController::class , 'show'])->name('mail.show');
Route::delete('mail/delete/{mail}' , [MailController::class , 'destroy'])->name('mail.delete');
/*<=============Mail=routes=============>*/

/*<=============Appointments=routes=============>*/
Route::get('appointments' , [AppointmentController::class , 'index'])->name('appointment.index');
Route::get('appointments/show/{appointment}' , [AppointmentController::class , 'show'])->name('appointment.show');
Route::post('appointments/update' , [AppointmentController::class , 'update'])->name('appointment.update');
Route::delete('appointments/delete/{appointment}' , [AppointmentController::class , 'destroy'])->name('appointment.delete');
/*<=============Appointments=routes=============>*/

/*<=============Categories=routes=============>*/
Route::get('categories' , [CategoryController::class , 'index'])->name('category.index');
Route::get('categories/create' , [CategoryController::class , 'create'])->name('category.create');
Route::post('categories/store' , [CategoryController::class , 'store'])->name('category.store');
Route::get('categories/edit/{category}' , [CategoryController::class , 'edit'])->name('category.edit');
Route::post('categories/update' , [CategoryController::class , 'update'])->name('category.update');
Route::delete('categories/delete/{category}' , [CategoryController::class , 'destroy'])->name('category.delete');
/*<=============Categories=routes=============>*/

/*<=============Orders=routes=============>*/
Route::get('orders' , [OrderController::class , 'index'])->name('order.index');
Route::get('orders/show/{order}' , [OrderController::class , 'show'])->name('order.show');
Route::get('orders/print/{order}' , [OrderController::class , 'printOrder'])->name('order.print');
Route::post('orders/update' , [OrderController::class , 'update'])->name('order.update');
Route::delete('orders/delete/{order}' , [OrderController::class , 'destroy'])->name('order.delete');
/*<=============Orders=routes=============>*/


/*<=============file=routes=============>*/
Route::post('/file/image/upload' , [FilesController::class , 'image'])
    ->name('upload.image')
    ->middleware(['image-sanitize']);

Route::delete('/file/image/delete' , [FilesController::class , 'imageDelete'])->name('delete.image');
/*<=============file=routes=============>*/

// Route::post('/files', 'FileController@upload')
//    ->name('file.upload')
//    ->middleware(['image-sanitize']);
