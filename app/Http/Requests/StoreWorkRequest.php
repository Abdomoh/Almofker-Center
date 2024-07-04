<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' =>  'required|string',
            'category_id' => 'required|string',
            'client' =>  'required|string',
            'date' =>  'required|string',
            'url' =>  'required|string',
            'img1' =>  'required|image',
            'img2' =>  'required|image',
        ];
    }
}
