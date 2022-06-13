<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'title.required' => 'Title is required',
            'permission_id.required' => 'Permission is required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $method = $this->method();

        return match ($method) {
            'PUT', 'POST' => [
                'title' => 'required',
                'permission_id' => 'required',
            ],
            default => [],
        };
    }
}
