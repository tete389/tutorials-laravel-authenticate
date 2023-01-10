<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/auth/signin', [UserController::class, 'onLogin']);
Route::post('/auth/register', [UserController::class, 'onRegister']);
Route::get('/auth/signout', [UserController::class, 'onLogout']);



Route::post('/auth/signinmember', [UserController::class, 'onLoginMember']);
Route::post('/auth/registermember', [UserController::class, 'onRegisterMember']);
Route::get('/auth/signoutmember', [UserController::class, 'onLogoutMember']);