<?php

namespace App\Http\Controllers\V1\Wellit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wellit\LoginRequest;
use App\Http\Requests\Wellit\RegisterRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $client = (new \App\Service\ClientService)->createWellit($request->all());
        $token = $client->createToken('client_token')->plainTextToken;

        return response()->json([
            'data'  =>  $client,
            'message'   =>  'Successfully created!',
            'token' =>  $token,
        ],201);
    }

    public function login(LoginRequest $request)
    {
        $login = (new \App\Service\ClientService)->login($request->all());
        if (!$login) {
            return response()->json([
                'message'   =>  'Incorrect password'
            ],400);
        }
        $client = Client::whereLogin($request['login'])->firstOrFail();
        $token = $client->createToken('client_token')->plainTextToken;

        return response()->json([
            'data'  =>  $client,
            'message'   =>  'Successfully login!',
            'token' =>  $token,
        ],201);
    }

}
