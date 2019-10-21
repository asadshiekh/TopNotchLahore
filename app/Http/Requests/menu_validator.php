<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class menu_validator extends FormRequest
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
    
    // menu rules of validation 
    public function rules()
    {
        return [
            
          'selected_cat' => 'required',
          'item_name' => 'required',
          'item_price' => 'required',
          'item_des' => 'required|max:150',
          'item_type' => 'required',
        ];
    }

    // menu custom validation messages


    public function messages(){

        $messages =[
            "selected_cat.required"  => 'Item Category is Required ',
            "item_name.required"  => 'Item name is Required',
            "item_price.required"  => 'item price is Required',
            "item_des.required"  => 'item description is Required',
            "item_type.required"  => 'item type is Required',
        ];

        return $messages;
    }








}
