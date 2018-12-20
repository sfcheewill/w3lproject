<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入要调用的模型类
use App\Model\LinkModel;
class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //友情链接列表
    public function index(Request $request)
    {
        //获取搜索关键词
        $k = $request->input('keyword');
        //获取列表数据
        $data = LinkModel::where('name','like','%'.$k.'%')->paginate(10);
        //加载模板
        return view('Admin.Link.index',['data'=>$data,'request'=>$request->all()]);
    }

    //友情链接Ajax修改状态
    public function links(Request $request){
        //获取id
        $id = $request->input('id');
        //获取Ajax传过来的状态值
        $data['status'] = $request->input('n');
        //修改状态
        if (LinkModel::where('id','=',$id)->update($data)) {
            echo $data['status'];
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
