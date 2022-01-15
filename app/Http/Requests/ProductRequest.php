<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Prepare for validation.
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->name)
        ]);
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
            'price'=>'required|numeric',
            'discount_price'=>'required|numeric',
            'category'=>'required',
            'brand'=>'required',
            'img'=>'file',
            'description'=>'required',

        ];
    }

    public function messages()
{
    return [
        'price.numeric' => 'Giá không thể chứa ký tự',
        'discount_price.numeric' => 'Giá khuyến mãi Không thể chứa ký tự',
    ];
}
}
