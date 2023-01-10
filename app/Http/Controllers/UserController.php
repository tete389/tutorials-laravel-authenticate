<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function onRegister(Request $request){
        try {
            $hashPwd = Hash::make("1234");
            $users = User::create([
                "name" => "admin",
                "email" => "admin@example.com",
                "password" => $hashPwd
            ]);
            if ($users) {
                return response([
                    "message" => "ok",
                    "description" => "create user success."
                ], 201);
            } else {
                return response([
                    "message" => "error",
                    "description" => "create user error."
                ], 400);
            }
        } catch (Exception $e) {
            return response([
                "message" => "error",
                "description" => "Something went wrong.",
                "errorMessage" => $e
            ], 500);
        }
    }

    public function onLogin(Request $request){
        $email = "admin@example.com";
        $password = "1234";
        try {
            $auth = Auth::attempt(['email' => $email, 'password' => $password]);
            if ($auth) {
                return response([
                    "message" => "ok",
                    "description" => "sign in success.",
                    "user" => Auth::user()
                ], 200);
            } else {
                return response([
                    "message" => "error",
                    "description" => "sign in failed."
                ], 401);
            }
        } catch (Exception $e) {
            return response([
                "message" => "error",
                "description" => "Something went wrong.",
                "errorMessage" => $e
            ], 500);
        }
    }

    public function onLogout(Request $request){
        try {
            Auth::logout();
            if (!Auth::check()) {
                return response([
                    "message" => "ok",
                    "description" => "sign out success."
                ], 200);
            } else {
                return response([
                    "message" => "error",
                    "description" => "sign out failed."
                ], 401);
            }
        } catch (Exception $e) {
            return response([
                "message" => "error",
                "description" => "Something went wrong.",
                "errorMessage" => $e
            ], 500);
        }
    }

    public function onRegisterMember(Request $request){
        try {
            $hashPwd = Hash::make("1234");
            $users = Members::create([
                "name" => "admin",
                "email" => "admin@example.com",
                "password" => $hashPwd
            ]);
            if ($users) {
                return response([
                    "message" => "ok",
                    "description" => "create user success."
                ], 201);
            } else {
                return response([
                    "message" => "error",
                    "description" => "create user error."
                ], 400);
            }
        } catch (Exception $e) {
            return response([
                "message" => "error",
                "description" => "Something went wrong.",
                "errorMessage" => $e
            ], 500);
        }
    }

    public function onLoginMember(Request $request){
        $email = "admin@example.com";
        $password = "1234";
        try {
            $auth = Auth::guard('member')->attempt(['email' => $email, 'password' => $password]);
            if ($auth) {
                return response([
                    "message" => "ok",
                    "description" => "sign in success.",
                    "user" => Auth::guard('member')->user()
                ], 200);
            } else {
                return response([
                    "message" => "error",
                    "description" => "sign in failed."
                ], 401);
            }
        } catch (Exception $e) {
            return response([
                "message" => "error",
                "description" => "Something went wrong.",
                "errorMessage" => $e
            ], 500);
        }
    }

    public function onLogoutMember(Request $request){
        try {
            Auth::guard('member')->logout();
            if (!Auth::guard('member')->check()) {
                return response([
                    "message" => "ok",
                    "description" => "sign out success."
                ], 200);
            } else {
                return response([
                    "message" => "error",
                    "description" => "sign out failed."
                ], 401);
            }
        } catch (Exception $e) {
            return response([
                "message" => "error",
                "description" => "Something went wrong.",
                "errorMessage" => $e
            ], 500);
        }
    }
}
