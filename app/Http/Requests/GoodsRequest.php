<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodsRequest extends FormRequest
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
            'name'=>'required',
            'cate_id'=>'required',
            'status'=>'required',
            'logo'=>'image',
            'price'=>'numeric'
        ];
    }

    public function messages(){
        return [
            'name.required' => '商品名称不能为空',
            'cate_id.required' => '类别不能为空',
            'status.required' => '状态不能为空',
            'logo.image' => '上传的文件格式必须为(jpeg、png、bmp、gif、或 svg)',
            'price.numeric' => '价格必须为数字'
        ];
    }
}
