<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
class RolesPost extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            //
            'name'=>['required','min:2',Rule::unique('roles')->ignore('id')],
            'description'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'   => '请输入角色',
            'name.min'  => '角色最少2个字符',
            'name.unique'=>'角色已经存在',
            'description.required' => '请输入描述',
        ];
    }
}
