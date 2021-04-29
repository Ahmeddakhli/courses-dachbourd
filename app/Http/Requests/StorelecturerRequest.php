<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorelecturerRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:lecturers',
            'email' => 'required|string|email|max:255|unique:lecturers',
            'password' => 'required|string|confirmed|min:8',
            'phone' => 'required|string|min:11|unique:lecturers',
        ];
    }
}
