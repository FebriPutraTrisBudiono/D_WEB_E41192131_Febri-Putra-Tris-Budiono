<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Frontend\HomeController;

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

Route::group(['namespace' => 'Frontend'], function() {
    Route::resource('home', 'HomeController');
});

//Jika menu home tidak muncul cek file app/providers/RouteServiceProvider line ke 29