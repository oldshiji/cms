<?php

namespace App\Http\Requests\Api;

//use Illuminate\Foundation\Http\FormRequest;
use Dingo\Api\Http\FormRequest;
class GuestRequest extends FormRequest
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
            //
            "username"=>"required",
            "mobile"=>[
                "required",
                "regex:/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|(17[0,3,5-8])|(18[0-9])|166|198|199|(147))\d{8}$/",
                //"unique:joinrecord"
            ],
            //"cert"=>"required"
        ];
    }

    public function messages()
    {
        //   return parent::messages(); // TODO: Change the autogenerated stub
        return [
            "username.required"=>"请填写姓名",
            "mobile.required"=>"请填写手机号",
            "mobile.regex"=>"请填写正确的手机号码",
            "mobile.unique"=>"该手机号已存在",
            //"cert.required"=>"请上传凭证",
        ];

    }
}
