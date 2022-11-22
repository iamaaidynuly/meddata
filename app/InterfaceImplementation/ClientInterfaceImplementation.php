<?php
namespace App\InterfaceImplementation;
use App\Interface\ClientInterface;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class ClientInterfaceImplementation implements ClientInterface
{
    /*-
        implementation for get well
    */
    public function register(array $data)
    {
        return Client::create([
            'name'  =>  $data['name'],
            'surname'  =>  $data['surname'],
            'login'  =>  $data['login'],
            'contact'   =>  $data['contact'],
            'birthday'  =>  \Carbon\Carbon::createFromFormat('Y-m-d', $data['birthday']),
            'gender'    =>  $data['gender'],
            'city_id'   =>  $data['city_id'],
            'password'  =>  Hash::make($data['password']),
            'app'  =>  Client::TYPE_GET_WELL
        ]);
    }
}
