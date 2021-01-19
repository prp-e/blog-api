<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(){
        $credentials = request()->only(['email', 'password']);
        if(! $token = auth()->attempt($credentials)){
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }

    private function respondWithToken($token){
        return response()->json([
            "token" => $token, 
            "type" => "bearer", 
            "expires_in" => auth()->factory()->getTTL() * 60
        ]);
    }
}
