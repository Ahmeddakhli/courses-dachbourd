<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title'=>'required|string|max:255',
            'vedio_link'=>'required|url|max:255',
            'img' =>'required',
          

            'img.*' =>'required|mimes:png,jpg|max:4048',
            'sex'=>'required|string',
           'description'=>'required|string|max:255',
            'course_payment'=>'required',
            'course_mony'=>'required|integer',
            'wellcome_massage'=>'required|string|max:255',
            'start_at'=>'required|date|before:end_at',
            'end_at'=>'required|date|after:start_at',
        ];
    }
}
