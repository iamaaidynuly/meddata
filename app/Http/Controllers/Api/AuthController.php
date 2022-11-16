<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if(! Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return response()->json([
                'status'    =>  400,
                'message'   =>  'Incorrect password!'
            ],400);
        }
        $user = User::where('email', $request['email'])->first();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'token' =>  $token,
            'user'  =>  $user,
            'role'  =>  $user->userRole->title,
        ],202);
    }
}
