<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataentryController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('Data_Entry', [dataentryController::class, 'index']);
//Route::get('Data_Entry', '\App\Http\Controllers\dataentryController');

//back prevention
Route::group(['middleware' => 'prevent-back-history'],function(){
	Auth::routes();
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
});