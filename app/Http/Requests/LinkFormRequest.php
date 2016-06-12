<?php

namespace Hanya\Http\Requests;

use Hanya\Http\Requests\Request;

class LinkFormRequest extends Request
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
            'name' => 'required',
            'link' => 'required|active_url'
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
            'name.required' => '名称必填！',
            'link.required' => '链接网址必填！',
            'link.active_url' => '这不是一个有效的网址！'
        ];
    }
}
