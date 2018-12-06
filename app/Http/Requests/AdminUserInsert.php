<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserInsert extends FormRequest
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
            'name'=>'required|regex:/\w{4,8}/|unique:admin_users,name',
            'password'=>'required|regex:/\w{6,12}/',
            'repassword'=>'same:password'
        ];
    }

    //自定义错误信息
    public function messages(){
        return [
            'name.required' => '管理员名称不能为空',
            'name.regex' => '用户名必须为4-8位任意字母数字下划线',
            'name.unique' => '用户名已存在',
            'password.required' => '密码不能为空',
            'password.regex' => '密码必须为6-12位任意字母数字下划线',
            'repassword.same' => '两次密码不一致'
        ];
    }
}
