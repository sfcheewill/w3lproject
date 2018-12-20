<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UsersModel;
use App\Model\UserinfoModel;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取关键词
        $keyword = $request->input('keyword');
        //获取数据
        $data = UsersModel::where('username','like','%'.$keyword.'%')->where('phone','like','%'.$keyword.'%')->where('email','like','%'.$keyword.'%')->orderBy('id','asc')->paginate(5);
        //加载会员列表模板 分配数据
        return view('Admin.Users.index',['data'=>$data,'request'=>$request->all()]);
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
        //获取数据
        $data = UserinfoModel::where('uid','=',$id)->first();
        //加载模板 分配数据
        return view('Admin.Users.info',['data'=>$data]);
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

    //获取会员地址列表的方法
    public function Usercity($id){
        //从数据库获取地址数据
        $data = UsersModel::find($id)->Usercity;
        //加载模板
        return view('Admin.Users.city',['data'=>$data]);
    }
}
