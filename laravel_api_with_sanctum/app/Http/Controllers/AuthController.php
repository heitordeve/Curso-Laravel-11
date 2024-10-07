<?php

namespace App\Http\Controllers;

use App\Services\ApiResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $attempt = auth()->attempt([
            'email' => $email,
            'password' => $password,
        ]);

        if(!$attempt){
            return ApiResponse::unauthorized();
        }

        $user = auth()->user();
        $token = $request->user()->createToken($user->name)->plainTextToken;

        return ApiResponse::delete();
    }
}
