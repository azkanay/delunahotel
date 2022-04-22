<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [KamarController::class, 'home']);

Route::get('/facilities', function () {
    return view('facilities');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::post('/login', [LoginController::class, 'Authenticate']);

Route::get('/resepsionis', function(){
    return view('resepsionis');
});

Route::post('/booking', [BookingController::class, 'store'])->name('store.booking');

// //Route Admin
Route::get('/admin', [KamarController::class, 'index']);
Route::get('/fasilities/{id}', [FasilitasController::class, 'edit'])->name('edit.view.fasilities');
Route::patch('/fasilities/update/{id}', [FasilitasController::class, 'update'])->name('update.fasilities');
Route::delete('/fasilities/delete/{id}', [FasilitasController::class, 'destroy'])->name('delete.fasilities');
Route::post('/rooms', [KamarController::class, 'store'])->name('store.room');
Route::get('/rooms/update/{id}', [KamarController::class, 'edit'])->name('edit.view.rooms');
Route::patch('/rooms/update/{id}', [KamarController::class, 'update'])->name('update.rooms');
Route::delete('/rooms/delete/{id}', [KamarController::class, 'destroy'])->name('delete.rooms');

// // ---> Route Resepsionis
Route::get('/resepsionis', [BookingController::class, 'index']);
Route::post('/resepsionis/search', [BookingController::class, 'search'])->name('resepsionis.search');


// // ---> Route Booking
Route::post('/booking', [BookingController::class, 'store'])->name('store.booking');
Route::get('/booking/detail', [BookingController::class, 'detail'])->name('booking.detail');
