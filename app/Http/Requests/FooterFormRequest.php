<?php

namespace Hanya\Http\Requests;

use Hanya\Http\Requests\Request;

class FooterFormRequest extends Request
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
            'copyright' => 'required',
            'telephone' => 'required',
            'wechat'    => 'required',
            'qq'        => 'required',
            'address'   => 'required',
        ];
    }

    /**
     * 验证不通过时返回的错误信息
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'copyright.required' => '版权所有必填！',
            'telephone.required' => '联系电话必填！',
            'wechat.required'    => '微信公众平台账号必填！',
            'qq.required'        => 'qq号码必填！',
            'address.required'   => '公司地址必填！',
        ];
    }
}
