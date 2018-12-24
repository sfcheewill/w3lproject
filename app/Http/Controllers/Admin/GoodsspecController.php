<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\GoodsSpecRequest;

class GoodsspecController extends Controller
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
        //获取gid,用户页面跳转
        $gid = DB::table('goods_spec')->where('id','=',$id)->value('gid');
        //获取数据
        $data = DB::table('spec_info')->where('spec_id','=',$id)->paginate(5);
        //加载规格详情模板 分配数据
        return view('Admin.Goodsspec.show',['data'=>$data,'gid'=>$gid]);
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
        $data = DB::table('goods_spec')->where('id','=',$id)->first();
        $data->pic = explode('@', $data->pic);
        //加载修改模板
        return view('Admin.Goodsspec.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GoodsSpecRequest $request, $id)
    {
        //获取数据
        //检测是否修改图片
        if($request->hasFile('pic')){
            $data = $request->except(['_token','_method']);
            $data['pic'] = self::uploads('logo',$request);
            $data['pic'] = implode('@',$pic);
            //删除原来的logo图片
            $oldpic = DB::table('goods_spec')->where('id','=',$id)->value('pic');
            foreach($oldpic as $r){
                unlink('.'.$r);
            }
        }else {
            $data = $request->except(['_token','_method','logo']);
        }
        //执行修改
        if(DB::table('goods_spec')->where('id','=',$id)->update($data)){
            return redirect('/admingoods/'.$id)->with('success','修改商品规格成功');
        }else {
            return redirect('/admingoods/$id'.$id)->with('error','修改商品规格失败');
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
        //删除所有规格详情
        // DB::table('spec_info')->where('spec_id','=',$id)->delete();
        //删除自己
        $img = DB::table('goods_spec')->where('id','=',$id)->value('pic');
        $imgs = explode('@',$img);
        if(DB::table('goods_spec')->where('id','=',$id)->delete()){
            foreach ($imgs as $r) {
                unlink('.'.$r);
            }
            return redirect('/admingoods/'.$id)->with('success','删除成功');
        }
    }

    //规格详情
    public function addinfo($id){
        //获取数据
        $data = DB::table('goods_spec')->where('id','=',$id)->first();
        //加载视图
        return view('Admin.Goodsspec.addinfo',['data'=>$data]);
    }

    //保存规格详情
    public function saveinfo(Request $request){
        //获取gid,用于页面跳转
        $gid = DB::table('goods_spec')->where('id','=',$request->input('spec_id'))->value('gid');
        //获取数据
        $data = $request->except(['_token']);
        $data['sale'] = 0;
        $data['code'] = date('Ymds') + mt_rand(1,100);
        //入库
        if(DB::table('spec_info')->insert($data)){
            return redirect('/admingoods/'.$gid)->with('success','添加成功');
        }
    }
}
