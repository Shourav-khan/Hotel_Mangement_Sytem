<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/dashboard',[adminController::class,'dashboard']);
Route::resource('admin/roomtype',RoomTypeController::class);
Route::get('admin/roomtype/{id}/delete',[RoomTypeController::class,'destroy']);

Route::resource('admin/room',RoomController::class);
Route::get('admin/room/{id}/delete',[RoomController::class,'destroy']);



