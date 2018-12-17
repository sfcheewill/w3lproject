<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgetRequest extends FormRequest
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
            'password'=>'required|regex:/\w{6,16}/',
            'repassword'=>'same:password'
        ];
    }

    //自定义错误信息
    public function messages(){
        return [
            'password.required'=>'密码不能为空',
            'password.regex' => '密码格式错误',
            'repassword.same' => '两次密码不一致'
        ];
    }
}
