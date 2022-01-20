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

            'name'=>'required',
            'description'=>'required|string|max:850',
            'price'=>'required|int|min:1',
            'weight'=>'required|int|min:1',
            'stock'=>'required|int|min:1',
            'thumbnail'=>'required|image',

        ];
    }
    public function bodyParameters()
    {
        return [
            'name' => [
                'description' => '🤖 Product name',
                'example' => 'Glass'
            ],
            'description' => [
                'description' => '📝 Product description ',
                'example' => 'Glasses for all people',
            ],
            'price' => [
                'description' => '💵 Product price ',
                'example' => 33.2
            ],
            'weight' => [
                'description' => '📏 Product weight ',
                'example' =>2.2
            ],
            'stock' => [
                'description' => '🗃 Product stock ',
                'example' =>34
            ],
            'thumbnail' => [
                'description' => '📷 Thumbnail of the product, it will be shown as an image when selling ',

            ],

        ];
    }
}
