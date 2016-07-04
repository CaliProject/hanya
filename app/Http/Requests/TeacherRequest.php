<?php

namespace Hanya\Http\Requests;

use Hanya\Http\Requests\Request;

class TeacherRequest extends Request
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
            'body' => 'required',
            'content' => 'required'
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
            'name.required' => '老师姓名必填！',
            'body.required' => '老师介绍必填！',
            'content.required' => '老师简介必填！'
        ];
    }
}
