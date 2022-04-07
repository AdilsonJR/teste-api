<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * acl, polices
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * replace function return
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
          'errors' => $validator->errors(),
          'status' => false
        ], 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'adress' => 'string|min:10',
            'number' => 'integer|min:0'
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'adress.min' => 'a quantidade minima de caracteres é :min'
        ];
    }

}
