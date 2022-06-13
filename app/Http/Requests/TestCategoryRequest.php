<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestCategoryRequest extends FormRequest
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
    public function messages()
    {
        return [
            'lab_id.required' => 'Lab Name is required',
            'title.required' => 'Title is required',
            'status.required' => 'Status is required',

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $method = $this->method();
        return match($method){
            'PUT','POST' =>[
                'lab_id' => 'required',
                'title' => 'required',
                'status' => 'required',
            ],
            default => [],
        };
    }
}