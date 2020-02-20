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
            'name' => 'required|max:50',
            'description' => 'required|max:100',
            'amount' => 'required|numeric|regex:/^[+]?\d+([.]\d+)?$/|not_in:0', //Inteiro e maior que zero
            'value' => 'required|numeric|not_in:0'

        ];
    }

    public function menssages(){

        return[
            'required' => 'O campo :attribute não pode ser vazio',
            'regex' => 'A quantidade precisa ser maior que zero'
        ];
    }
}