<?php
namespace App\Service;

use App\InterfaceImplementation\ClientInterfaceImplementation;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientService
{
    public function create($data)
    {
        return (new \App\InterfaceImplementation\ClientInterfaceImplementation)->register($data);
    }

    public function login($data)
    {
        $client = Client::whereLogin($data['login'])->firstOrFail();
        if (!Hash::check($data['password'],$client->password)) {
            return false;
        }

        return true;
    }

    public function createWellit($data)
    {
        return (new \App\InterfaceImplementation\ClientInterfaceImplementation)->registerWellit($data);
    }
}
