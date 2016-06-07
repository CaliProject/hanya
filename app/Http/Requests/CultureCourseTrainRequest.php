<?php

namespace Hanya\Http\Requests;

use Hanya\Http\Requests\Request;

class CultureCourseTrainRequest extends Request
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
            'title'  => 'required',
            'author' => 'required',
            'source' => 'required',
            'body'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'  => '标题必须填写！',
            'body.required'   => '内容必须填写！',
            'author.required' => '作者必须填写！',
            'source.required' => '内容来源必须填写！'
        ];
    }
}
