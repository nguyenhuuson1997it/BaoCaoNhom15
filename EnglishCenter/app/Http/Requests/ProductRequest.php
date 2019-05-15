<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'txtName'=>'required',
            'sltparent' => 'required',
            'txtIntro'=>'required',
            'txtContent'=>'required',
            'fImage_Add'=>'required',
        ];
    }
    public function messages(){
        return [
            'txtName.required'=>'Please enter name',
            'sltparent.required'=>'Please chose category',
            'txtIntro.required'=>'Please enter Introduce',
            'txtContent.required'=>'Please enter Content',
            'fImage_Add.required'=>'You can need image for course',
        ];
    }
}
