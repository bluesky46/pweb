<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tableController;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\bookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. The
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/table', [tableController::class, 'table']);

Route::get('/booking', [tableController::class, 'booking']);

// Route::get('/home',[tableController::class, 'home']);

Route::get('/history', [tableController::class, 'history']);

Route::get('/test', [testcontroller::class, 'test']);

Route::get('/home2', [tableController::class, 'home2'])->name('home2');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pro', [tableController::class, 'promotion']);

Route::get('/payment', [tableController::class, 'payment']);

Route::post('/payment', [tableController::class, 'store'])->name('table.store');

// Route::get('/adminhome',[tableController::class,'adminhome']);

// Route::get('/bdata',[tableController::class,'bdata']);

// Route::get('/store',[tableController::class,'storelayout']);

Route::post('/booking/store', [bookingController::class, 'storeBooking'])->name('booking.store');

Route::get('/product', [tableController::class, 'product'])->name('product_menu');
Route::post('/product/insert', [tableController::class, 'product_menu']);


Route::get('admin/home', [tableController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/adminHome/storelayout', [tableController::class, 'storelayout'])->name('storelayout');
Route::get('/adminHome/storelayout/deleteAll', [tableController::class, 'deleteAll'])->name('deleteAll');
Route::get('/adminHome/storelayout/refreshAll', [tableController::class, 'refreshAll'])->name('refreshAll');
Route::get('/bdata', [tableController::class, 'bdata'])->name('bdata');
Route::get('/addsingle', [tableController::class, 'addsingle'])->name('addsingle');
Route::post('/addsingle/insert', [tableController::class, 'addsingleInsert']);
Route::get('/showsingle', [tableController::class, 'showsingle']);
Route::delete('/addsingle/delete/{id}', [tableController::class, 'deleteSingle'])->name('single.delete');


