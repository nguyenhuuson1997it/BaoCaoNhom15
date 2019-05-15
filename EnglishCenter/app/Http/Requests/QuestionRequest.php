<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'txtQuestion'=>'required',
            'txtAnswerA' => 'required',
            'txtAnswerB'=>'required',
            'txtAnswerC'=>'required',
            'txtAnswerD'=>'required',
        ];
    }
    public function messages(){
        return [
            'txtQuestion.required'=>'Please enter question',
            'txtAnswerA.required'=>'Please enter answer A',
            'txtAnswerB.required'=>'Please enter answer B',
            'txtAnswerC.required'=>'Please enter answer C',
            'txtAnswerD.required'=>'Please enter answer D', 
            ];
    }
}
