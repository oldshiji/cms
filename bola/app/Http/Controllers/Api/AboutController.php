<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Model\Admin\Page;
class AboutController extends Controller
{
    //
    public function contact()
    {
        $ret = Page::whereIn("title",["关于我们","联系我们"])->get();
        if($ret){
            return $this->response->array(['status'=>1,'msg'=>'请求成功','result'=>$ret]);
        }else{
            return $this->response->array(['status'=>0,'msg'=>'请求失败']);
        }

    }
}