<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ABCController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('sla_home');
});
Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'App\Http\Controllers\TestController@index',
 ]);

 Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'App\Http\Controllers\ABCController@index',
 ]);
 Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\UserController@showProfile'
 ]);

 Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'App\Http\Controllers\UserController@showPath'
 ]);