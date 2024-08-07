<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpertRequest extends FormRequest
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
            'job' => 'required|string',
            'brief' =>  'required|string',
            'cv' => 'required|mimes:pdf,text,word,pptx'
            
        ];
    }
}
