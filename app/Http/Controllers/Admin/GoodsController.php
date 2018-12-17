<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\GoodsRequest;
use App\Http\Requests\GoodsSpecRequest;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //图片上传
    public static function uploads($file,$request){
        // var_dump($request->file($file));
        // exit;
        // return $file;
        //检测是否为多文件上传
        if(is_array($request->file($file))){
            foreach($request->file($file) as $value){
                //文件后缀
                $extion = $value->getClientOriginalExtension();
                //新文件名
                $newName = mb_substr(md5($value->getClientOriginalName().time()),0,8) . '.' . $extion;
                //上传位置
                $savePath = './uploads/goods/'.date('Y-m-d').'/';
                $value->move($savePath,$newName);
                //拼接完整路径
                $pic[] = ltrim($savePath . $newName,'.');   
            }
        }else{
             //文件后缀
            $extion = $request->file($file)->getClientOriginalExtension();
            //新文件名
            $newName = mb_substr(md5($request->file($file)->getClientOriginalName().time()),0,8) . '.' . $extion;
            //上传位置
            $savePath = './uploads/goods/'.date('Y-m-d').'/';
            $request->file($file)->move($savePath,$newName);
            //拼接完整路径
            $pic = ltrim($savePath . $newName,'.');  
        }
        
        //返回上传文件路径
        return $pic;
    }

    public function index(Request $request)
    {
        //获取关键词
        $keyword = $request->input('keyword');
        //获取数据
        $data = DB::table('goods')->where('name','like','%'.$keyword.'%')->paginate(5);
        $data = DB::table('goods')->join('cate','goods.cate_id','=','cate.id')->where('goods.name','like','%'.$keyword.'%')->select('goods.id as gid','goods.name as gname','cate.name as cname','goods.logo as glogo','goods.price as gprice','goods.status as gstatus','goods.addtime as gaddtime')->paginate(5);
        $status = [1=>'上架',2=>'下架'];
        foreach($data as $key=>$value){
            $data[$key]->gstatus = $status[$value->gstatus];
        }
        //加载商品列表模板 分配数据 
        return view('Admin.Goods.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取类别数据
        $data = CateController::getCates();

        //加载商品加载模板
        return view('Admin.Goods.add',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoodsRequest $request)
    {
        //获取数据
        $data = $request->except(['_token']);
        //检测是否有图片上传
        if($request->hasFile('logo')){
            $data['logo'] = self::uploads('logo',$request);
        }else {
            $data['logo'] = '';
        }
        $data['addtime'] = time();
        //入库
        if(DB::table('goods')->insert($data)){
            return redirect('/admingoods')->with('success','添加商品成功');   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //获取数据
        $data = DB::table('goods_spec')->where('gid','=',$id)->paginate(5);
        foreach($data as $k=>$v){
            $data[$k]->pic = explode('@',$v->pic);
        }
        //加载视图 分配数据 
        return view('Admin.Goods.show',['data'=>$data]);
        
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
        $data = DB::table('goods')->where('id','=',$id)->first();
        $cate = CateController::getCates();
        //加载商品修改
        return view('Admin.Goods.edit',['data'=>$data,'cate'=>$cate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GoodsRequest $request, $id)
    {
        //获取数据
        //检测是否有文件上传
        if($request->hasFile('logo')){
            $data = $request->except(['_token','_method']);
            $data['logo'] = self::uploads('logo',$request);
            //删除原来的logo图片
            $oldpic = DB::table('goods')->where('id','=',$id)->value('logo');
            unlink('.'.$oldpic);
        }else {
            $data = $request->except(['_token','_method','logo']);
        }
        //执行修改
        if(DB::table('goods')->where('id','=',$id)->update($data)){
            return redirect('/admingoods')->with('success','修改商品成功');
        }else {
            return redirect('/admingoods')->with('error','修改商品失败');
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
        DB::table('spec_info')->join('goods_spec','spec_info.spec_id','=','goods_spec.id')->where('goods_spec.gid','=',$id)->delete();
        //获取规格图片
        $specimg = DB::table('goods_spec')->where('gid','=',$id)->value('pic');
        //删除规格
        if(DB::table('goods_spec')->where('gid','=',$id)->delete()){
            $specimgs = explode('@',$specimg);
            //删除颜色图片
            foreach($specimgs as $v){
                unlink('.'.$v);
            }   
        }
        //删除图片logo
        $img = DB::table('goods')->where('id','=',$id)->value('logo');
        if(DB::table('goods')->where('id','=',$id)->delete()){
            unlink('.'.$img);
        }
        return redirect('/admingoods')->with('success','删除商品成功');
    }

    //添加商品规格
    public function spec($id){
        //获取数据
        $data = DB::table('goods')->where('id','=',$id)->first();
        //加载模板
        return view('Admin.Goods.spec',['data'=>$data]);
    }

    //保存商品规格
    public function savespec(GoodsSpecRequest $request){
        if(count($_FILES['pic']['name']) > 6){
            return back()->with('error','上传图片最多不能超过6张');
        }
        //获取数据
        $data = $request->except(['_token']);
        //上传图片
        if($request->hasFile('pic')){
            $pic = self::uploads('pic',$request);
        }
        //将pic数组变为字符串
        $data['pic'] = implode('@',$pic);
        //入库
        if(DB::table('goods_spec')->insert($data)){
            return redirect('/admingoods')->with('success','添加商品规格成功');
        }
    }
}
