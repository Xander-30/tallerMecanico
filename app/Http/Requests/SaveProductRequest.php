<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
         'nameproduct' =>'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i' ,
         'description' =>'required|regex:/([^0-9][a-zA-Z0-9]+)/' ,
        // 'price' =>'required|regex:/^[0-9]+$/i|max:10',
         'price'=>'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
         'stock' =>'required|regex:/^[0-9]+$/i|max:10',
         'supplier' =>'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
         'phone' =>'required|regex:/^[0-9]+$/i|max:10',
         'direction' =>'required|regex:/([^0-9][a-zA-Z0-9]+)/',
         //'user_id' => '\Auth::user()->id',
 
        
         
       ];
    }
}
