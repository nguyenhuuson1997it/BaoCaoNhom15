<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'txtUser'=>'required|unique:users,username',
            'txtEmail'=>'required',
            'txtPass'=>'required',
            'txtRePass'=>'required|same:txtPass',
        ];
    }
    public function messages(){
        return [
            'txtUser.required'=>'Please enter username',
            'txtUser.unique'=>'User is exixst',
            'txtEmail.required'=>'Please chose category',          
            'txtPass.required'=>'Please enter password',
            'txtRePass.required'=>'Please enter retype password',
            'txtRePass.same'=>'Two password dont match', 
        ];
    }
}
