<?php

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

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/web', function () {
        return view('welcome-web');
    });
});

Route::group(['middleware' => 'auth:member'], function () {
    Route::get('/member', function () {
        return view('welcome-member');
    });
});

Route::view('/login', 'authen')->name("login");