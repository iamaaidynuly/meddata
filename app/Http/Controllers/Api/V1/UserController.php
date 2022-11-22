<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }


    public function update(UpdateUserRequest $request): \Illuminate\Http\JsonResponse
    {
        if ($request->hasFile('image')) {
            $path = $this->uploadImage($request->file('image'));
        }
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

    public function updateImage(Request $request): \Illuminate\Http\JsonResponse
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

    public function deleteImage(Request $request): \Illuminate\Http\JsonResponse
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
