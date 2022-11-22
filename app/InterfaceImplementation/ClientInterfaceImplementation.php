<?php
namespace App\InterfaceImplementation;
use App\Interface\ClientInterface;
use App\Models\Client;
use App\Models\ClientBadHabit;
use App\Models\ClientLifestyle;
use Illuminate\Support\Facades\Hash;

class ClientInterfaceImplementation implements ClientInterface
{
    /*-
        implementation for get well
    */
    public function register(array $data)
    {
        $client = Client::create([
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
        foreach ($data['bad_habits'] as $habit) {
            ClientBadHabit::insert([
                'bad_habit_id'  =>  $habit,
                'client_id' =>  $client->id,
            ]);
        }
        foreach ($data['lifestyles'] as $lifestyle) {
            ClientLifestyle::insert([
                'lifestyle_id'  =>  $lifestyle,
                'client_id' =>  $client->id,
            ]);
        }

        return $client;
    }
}
