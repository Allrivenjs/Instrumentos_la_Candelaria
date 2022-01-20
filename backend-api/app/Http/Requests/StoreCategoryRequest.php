<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name'=>'required:unique:categories',
            'description'=>'required',
        ];
    }

    public function bodyParameters()
    {
        return [
            'name' => [
                'description' => '🤖 Category name, unique in the table category',
                'example' => 'technology'
            ],
            'description' => [
                'description' => '📝 Category description ',
                'example' => 'State-of-the-art technological products',
            ],
        ];
    }
}
