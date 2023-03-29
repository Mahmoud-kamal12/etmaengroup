<?php

namespace App\Http\Requests\User\UserRequests;

use Illuminate\Foundation\Http\FormRequest;

class UserSignInRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'phone' => 'required|unique:users,phone',
            'id_number' => 'required',
            'gender' => 'required',
            'password' => 'required|confirmed',
        ];
    }
}
