<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\employer\EmployerController;
use App\Http\Controllers\employer\DirectionController;
use App\Http\Controllers\employer\StatusController;
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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/profil', [App\Http\Controllers\HomeController::class, 'profil']);


Route::get('/andrana', [App\Http\Controllers\andranaController::class, 'index']);


Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('Admin/users','App\Http\Controllers\Admin\UserController');
});

Route::name('employer.')->group(function(){
    Route::resource('employer/direction/poste','App\Http\Controllers\employer\DirectionController');
    Route::resource('employer','App\Http\Controllers\employer\EmployerController');
    Route::resource('status','App\Http\Controllers\employer\StatusController');
    Route::resource('flotte','App\Http\Controllers\employer\FlotteController');
});


