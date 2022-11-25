<?php

namespace App\Http\Requests\Doctor;

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
            'email'  =>  'required|unique:users,email',
            'surname'  =>  'required',
            'patronymic'  =>  'required',
            'iin'  =>  'required',
            'street'  =>  'required',
            'house'  =>  'required',
            'floor'  =>  'required',
            'apartment'  =>  'required',
            'index'  =>  'required',
            'phone'  =>  'required',
            'birthday'  =>  'date',
            'city_id'  =>  'required|exists:cities,id',
            'specialization'  =>  'required',
            'category_id'  =>  'required',
            'work_place'  =>  'required',
            'experience'  =>  'required',
            'password'  =>  'required'
        ];
    }
}
