<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
            'course_id' => 'required',
            'description' =>'required|string|max:255',
            'document_link.*' =>'required|mimes:csv,txt,xlx,xls,pdf,png,jpg|max:4048',
            'order' =>  'required|string|max:255',
            'title' =>'required|string|max:255',
            'vedio_link' => 'required|url|max:255',
        ];
    }
}
