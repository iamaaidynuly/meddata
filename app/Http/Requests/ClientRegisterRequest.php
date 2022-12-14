<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            'surname'   =>  'required',
            'login' =>  'required|unique:clients,login',
            'contact'   =>  'required|unique:clients,contact',
            'birthday'  =>  'date',
            'gender'    =>  'required|in:male,female',
            'city_id'   =>  'required|exists:cities,id',
            'image'     =>  'file|mimes:jpeg,png,jpg',
            'password'  =>  'required',
            'nickname'  =>  'required',
            'office_worker' =>  'required',
            'weight' =>  'required',
            'height' =>  'required',
            'physical_worker' =>  'required',
        ];
    }
}
