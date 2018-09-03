<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PositionPost extends FormRequest
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

            'status'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'   => '请输入职位名称',

            'status.required'  => '请选择状态',
        ];
    }
}
