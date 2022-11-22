<?php

namespace App\Http\Controllers\Api\V1\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientLoginRequest;
use App\Http\Requests\ClientRegisterRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Service\ClientService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(ClientRegisterRequest $request)
    {
        $client = (new \App\Service\ClientService)->create($request->all());
        $token = $client->createToken('client_token')->plainTextToken;

        return response()->json([
            'data'  =>  $client,
            'message'   =>  'Successfully created!',
            'token' =>  $token,
        ],201);
    }

    public function login(ClientLoginRequest $request)
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

    public function get(Request $request)
    {
        return response()->json([
            'data'  =>  new ClientResource(auth()->user()),
        ]);
    }
}
