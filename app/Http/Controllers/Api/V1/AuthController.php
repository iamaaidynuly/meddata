<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ManagerRegisterRequest;
use App\Models\User;
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

    public function register(ManagerRegisterRequest $request) {
        $user = User::create([
            'name' => 'Ваше имя',
            'email' => $request->email,
            'user_role_id' => 3,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'token' =>  $token,
        ], 201);
    }

    public function registerClinic(ClinicRegisterRequest $request) {

        $path = $request->file('license_file')->store('licenses');
        $clinic = Clinic::create([
            'title' => $request->title,
            'legal_title' => $request->legal_title,
            'desc' => 'Описание клиники',
            'address' => $request->address,
            'license' => $request->license,
            'contact' => 'Контакты',
            'license_file' => $path,
            'license_date' => date("dd-mm-YYYY", strtotime($request->license_date)),
            'password' => Hash::make($request->password),
        ]);
        return response()->json([
        ], 201);
    }
    
}
