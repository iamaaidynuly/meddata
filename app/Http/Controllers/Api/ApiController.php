<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Http\Resources\CountryResource;

class ApiController extends Controller
{
    public function countries(Request $request)
    {
        return response()->json([
            'data'  =>  CountryResource::collection(Country::get())
        ], 200);
    }

    public function cities(Request $request)
    {
        return response()->json([
            'data'  =>  City::get()
        ], 200);
    }
}
