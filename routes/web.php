<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controller\User;
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

use App\Http\Controllers\UserController;
//Route::get('user',[UserController::class, 'index']);

//use App\Http\Controllers\DemoController;

//Route::resource('user', UserController::class);


//Route::get('/user', 'App\Http\Controllers\User@index');
//Route::get('/user', 'App\Http\Controllers\UserController@index');
//Route::resource('/user', [UserController::class,'index']);
Route::get('/user', 'UserController@index');
//Route::get('/user', function () {
  //  return view('welcome');
//});
