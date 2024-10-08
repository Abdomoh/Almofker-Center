<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
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
            'title' => 'required|string',
            'description'=>'required|string',
            'phone' =>  'required|string',
            'email' =>  'required|email',
            'facebook' => 'required|string',
            'Instagram' =>  'required|string',
            'whatsapp' =>  'required|string',
            'tweeter' =>  'required|string',
        ];
    }
}
