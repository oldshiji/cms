<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Classify;
use Illuminate\Http\Request;
use App\Http\Requests\ClassifyPost;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;

class ClassifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Classify::orderBy('id', 'asc')->paginate(10);
        return view('admin/classify/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/classify/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassifyPost $request)
    {
         $input             = $request->except('_token','s');
        Classify::create($input) ? showMsg('1', '添加成功', URL::action('Admin\ClassifyController@index')) : showMsg('0', '添加失败');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Classify::where('id', $id)->first();
        return view('admin.classify.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClassifyPost $request, $id)
    {
         $input = $request->except('_token','_method','s');
        Classify::where('id', $id)->update($input) ? showMsg('1', '修改成功',URL::action('Admin\ClassifyController@index')) : showMsg('0', '修改失败');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Classify::destroy($id);
        $res ? showMsg('1', '删除成功') : showMsg('0', '删除失败');
    }

    //更新状态
    public function status(Request $request)
    {
        $post = $request->all();
        $res  = Classify::where('id', $post['id'])->update(array('status' => $post['status']));
        $res ? showMsg('1', '修改成功') : showMsg('0', '修改失败');
    }
}
