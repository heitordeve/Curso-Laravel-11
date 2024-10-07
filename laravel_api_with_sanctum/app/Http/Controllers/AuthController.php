<?php

namespace App\Http\Controllers;

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
            return response()->json([
                'error' => 'Unauthorizaded'
            ],401);
        }

        $user = auth()->user();
        $token = $request->user()->createToken($user->name)->plainTextToken;

        return response()->json([
            'token' => $token
        ]);
    }
}
