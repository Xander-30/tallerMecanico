<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveClientRequest extends FormRequest
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
            'identification_card' => 'required',
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
            'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
            'id_genders' => 'required',
            'phone' => 'required|regex:/^[0-9]+$/i|max:10',
            'direction' => 'required|regex:/([^0-9][a-zA-Z0-9]+)/',
            'email' => 'required',

        ];
    }
}
