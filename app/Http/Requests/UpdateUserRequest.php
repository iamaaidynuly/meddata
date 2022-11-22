<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'city_id'  =>  'required|exists:cities,id',
            'name'      =>  'required',
            'surname'      =>  'required',
            'patronymic'      =>  'required',
            'iin'      =>  'required',
            'birthday'      =>  'required|date',
            'gender'      =>  'required|in:male,female',
            'street'      =>  'required',
            'house'      =>  'required',
            'floor'      =>  'required',
            'apartment'      =>  'required',
            'index'      =>  'required',
            'phone'      =>  'required',
            'image' =>  'mimes:jpg,jpeg,png'
        ];
    }
}
