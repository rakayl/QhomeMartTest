<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class SquereAreaRequest extends FormRequest
{
    public function rules()
    {
        return [
            'panjang'   => 'required|numeric',
            "lebar" => 'required|numeric'
        ];
    }

    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 'fail', 'messages'  => $validator->errors()->all()], 200));
    }

    public function validationData()
    {
        return $this->json()->all();
    }
}