<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
            'title' => 'required|min:3',
            'description' => 'required|min:5'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    //comment to use default in ressource/lang/fr
    public function messages()
    {
        return [
            'title.required' => 'Entre un titre mec !',
            'description.required' => 'Veillez entrer une description',
            'title.min' => 'Le titre requiert au minimum :min caractères',
            'description.min' => 'La description requiert au minimum :min caractères'
        ];
    }
}
