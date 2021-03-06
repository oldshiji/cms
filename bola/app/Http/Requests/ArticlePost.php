<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlePost extends FormRequest
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
            'title'   => 'required',
            'name'    => 'required',
            'content' => 'required',
            'status'  => 'required',
            'is_recommend' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'   => '请输入标题',
            'name.required'    => '请输入发布人姓名',
            'content.required' => '请输入文章简介',
            'status.required'  => '请选择状态',
            'is_recommend.required'  => '请选择是否推荐',
        ];
    }
}
