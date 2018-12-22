<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email'=>'required|unique:users,email|regex:/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/',
            'phone'=>[
                'required',
                'unique:users,phone',
                'regex:/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]||17[0|1|2|3|5|6|7|8|9]18[0|1|2|3|5|6|7|8|9])\d{8}$/'
                ],
            'password'=>'required|regex:/\w{6,16}/',
            'repassword'=>'same:password'
        ];
    }

    //自定义错误信息
    public function messages(){
        return [
            'email.required' => '邮箱不能为空',
            'email.unique' => '该邮箱已被注册',
            'email.regex' => '邮箱格式错误',
            'phone.required' => '手机号不能为空',
            'phone.unique' => '该手机号已被注册',
            'phone.regex' => '手机号格式错误',
            'passwords.required' => '密码不能为空',
            'password.regex' => '密码格式错误',
            'repassword.same' => '两次密码不一致'
        ];
    }
}
