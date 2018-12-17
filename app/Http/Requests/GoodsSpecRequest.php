<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodsSpecRequest extends FormRequest
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
            'color'=>'required',
            'pic[]'=>'image'
        ];
    }

    public function messages(){
        return [
            'color.required' => '颜色不能为空',
            'pic[].image' => '上传的文件格式必须为(jpeg、png、bmp、gif、或 svg)'
        ];
    }
}
