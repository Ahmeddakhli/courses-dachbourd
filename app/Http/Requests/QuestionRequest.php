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
            'course_id' => 'required|string|max:255',
            'correct_answer' =>'required|string|max:255',
            'question' =>'required|string|max:255',
            '1' =>  'required|string|max:255',
            '2' =>'required|string|max:255',
            '3' => 'required|string|max:255',
        ];
    }
}
