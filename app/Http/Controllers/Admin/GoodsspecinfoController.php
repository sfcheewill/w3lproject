<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GoodsspecinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //获取数据
        $data = DB::table('spec_info')->where('id','=',$id)->first();
        //加载修改模板 分配数据
        return view('Admin.Goodsspec.editinfo',['data'=>$data]);
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
        //获取spec_id,用于跳转
        $spec_id = DB::table('spec_info')->where('id','=',$id)->value('spec_id');
        //获取数据
        $data = $request->except(['_token','_method']);
        //执行修改
        if(DB::table('spec_info')->where('id','=',$id)->update($data)){
            return redirect('/admingoodsspec/'.$spec_id)->with('success','修改成功');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //获取spec_id,用于跳转
        $spec_id = DB::table('spec_info')->where('id','=',$id)->value('spec_id');
        //执行删除
        if(DB::table('spec_info')->where('id','=',$id)->delete()){
            return redirect('/admingoodsspec/'.$spec_id)->with('success','删除成功');
        }
    }
}
