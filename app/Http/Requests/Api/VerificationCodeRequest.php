<?php

namespace App\Http\Requests\Api;


class VerificationCodeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'phone' => [
                'required'
            ]
        ];
    }

    public function messages()
    {

        return [
            'phone.regex' => '手机号格式不对',
            'phone.unique' => '手机号已存在',
        ];
    }
}
