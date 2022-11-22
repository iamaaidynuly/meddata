<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function countries(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'data'  =>  CountryResource::collection(Country::get())
        ], 200);
    }

    public function cities(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'data'  =>  City::get()
        ], 200);
    }
}
