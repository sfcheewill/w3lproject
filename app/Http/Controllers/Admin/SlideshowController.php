<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('slideshow')->paginate(8);
        return view('Admin.Slideshow.index',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Slideshow.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //规定上传的图片(jpeg、png、bmp、gif、或 svg)
        $suffix = array('jpeg','png','bmp','svg','jpg');
        //获取上传的文件
        $file = $request->file('picture');
        //判断是否有上传图片
        if($file){
            //文件后缀
            $extion = $file->getClientOriginalExtension();
            //判断是否是规定的 图片
            if(!in_array($extion,$suffix)){
                return redirect('/adminslideshow/create')->with('error','上传图片的格式为(jpeg、png、bmp、gif、或 svg)');
            }
            //新文件名
            $newName = mb_substr(md5($file->getClientOriginalName().time()),0,8) . '.' . $extion;
            //上传位置
            $savePath = './uploads/slideshow/'.date('Y-m-d').'/';
            //移动文件
            $file->move($savePath,$newName);
            //拼接完整路径
            $pic['picture'] = ltrim($savePath . $newName,'.'); 
        
            //执行入库
            if(DB::table('slideshow')->insert($pic)){
                return redirect('/adminslideshow')->with('success','添加成功');
            }else{
                return redirect('/adminslideshow/create')->with('error','添加失败');
            }
        }else{
            return redirect('/adminslideshow/create')->with('error','上传图片为空');
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
        //获取图片属性
        $info = DB::table('slideshow')->where('id','=',$id)->first();
        //删除数据库数据
        if(DB::table('slideshow')->where('id','=',$id)->delete()){
            //删除图片
            unlink('.'.$info->picture);
            return redirect('/adminslideshow')->with('success','删除成功');
        }else{
            return redirect('/adminslideshow')->with('error','删除失败');
        }
    }
}
