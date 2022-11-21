<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }


    public function update(UpdateUserRequest $request)
    {
        $path = $this->uploadImage($request->file('image'));
        $user = \auth()->user();
        $user->update([
            'city_id'  =>  $request['city_id'],
            'name'      =>  $request['name'],
            'surname'      =>  $request['surname'],
            'patronymic'      =>  $request['patronymic'],
            'iin'      =>  $request['iin'],
            'birthday'      =>  Carbon::createFromFormat('Y-m-d', $request['birthday']),
            'gender'      =>  $request['gender'],
            'street'      =>  $request['street'],
            'house'      =>  $request['house'],
            'floor'      =>  $request['floor'],
            'apartment'      =>  $request['apartment'],
            'index'      =>  $request['index'],
            'phone'      =>  $request['phone'],
            'image' =>  $path ?? null
        ]);

        return response()->json([
            'message'   =>  'Successfully updated',
        ],200);
    }

    public function updateImage(Request $request)
    {
        $request->validate([
            'image' =>  'required|mimes:jpg,jpeg,png'
        ]);
        $user = \auth()->user();
        $user->update([
            'image' =>  $this->uploadImage($request->file('image'))
        ]);

        return response()->json([
            'message'   =>  'Successfully updated'
        ]);
    }

    public function deleteImage(Request $request)
    {
        $user = \auth()->user();
        $user->update([
            'image' =>  null
        ]);

        return response()->json([
            'message'   =>  'Successfully updated'
        ]);
    }
}
