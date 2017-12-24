<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePostData extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // must change false to true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'author' => 'required|min:5',
            'title' => 'required',
            'content' => 'required'
        ];
    }

    public function messages() {
        return [
            'author.required' => "Please enter an author name",
            'author.min' => "must be above 5 characters",
            'content.required' => "please enter content",
            'title.required' => "please provide title"
        ];
    }
}
