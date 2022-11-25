<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\RegisterRequest;
use App\Models\User;
use App\Models\UserSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    public function doctorAdd(RegisterRequest $request)
    {
        $doctor = User::create([
            'name'  =>  $request['name'],
            'email'  =>  $request['email'],
            'surname'  =>  $request['surname'],
            'patronymic'  =>  $request['patronymic'],
            'iin'  =>  $request['iin'],
            'street'  =>  $request['street'],
            'house'  =>  $request['house'],
            'floor'  =>  $request['floor'],
            'apartment'  =>  $request['apartment'],
            'index'  =>  $request['index'],
            'phone'  =>  $request['phone'],
            'birthday'  =>  \Carbon\Carbon::createFromFormat('Y-m-d', $request['birthday']),
            'city_id'  =>  $request['city_id'],
            'specialization'  =>  $request['specialization'],
            'category_id'  =>  $request['category_id'],
            'work_place'  =>  $request['work_place'],
            'experience'  =>  $request['experience'],
            'password'  =>  Hash::make($request['password'])
        ]);
        if (isset($request['schedules'])) {
            foreach ($request['schedules'] as $schedule) {
                UserSchedule::insert([
                    'user_id'   =>  $doctor->id,
                    'day'   =>  $schedule['day'],
                    'start_time'    =>  $schedule['start_time'],
                    'end_time'  =>  $schedule['end_time']
                ]);
            }
        }
        return response()->json([
            'message'   =>  'Created',
            'data'  =>  $doctor,
            'schedules' =>  $doctor->schedules
        ],201);
    }
}
