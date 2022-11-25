<?php

namespace App\Http\Requests\Wellit;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'  =>  'required',
            'login' =>  'required|unique:clients,login',
            'birthday'  =>  'date',
            'city_id'   =>  'required|exists:cities,id',
            'image'     =>  'file|mimes:jpeg,png,jpg',
            'password'  =>  'required',
            'weight'    =>  'required',
            'height'    =>  'required',
        ];
    }
}
