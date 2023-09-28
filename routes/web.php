<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tableController;
use App\Http\Controllers\testcontroller;

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
    return view('welcome');
});

Route::get('/table',[tableController::class, 'table']);

Route::get('/booking',[tableController::class, 'booking']);

// Route::get('/home',[tableController::class, 'home']);

Route::get('/history',[tableController::class,'history']);

Route::get('/test',[testcontroller::class, 'test']);

Route::get('/home2',[tableController::class, 'home2']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home',[HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pro',[tableController::class,'promotion']);

Route::get('/payment',[tableController::class,'payment']);

Route::post('/payment', [tableController::class,'store'])->name('table.store');
