<?php

namespace App\Http\Requests;

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
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required|min:3|max:20',
            'email' => 'required|email',
            'password' => 'required|max:32|min:6',
            'password2' => 'required|same:password',
            'telephone' => 'nullable|regex:/^\+\d{1,3}\s?\(\d{3}\)\s?\d{3}(-\d{2}){2}$/'
        ];
    }
}