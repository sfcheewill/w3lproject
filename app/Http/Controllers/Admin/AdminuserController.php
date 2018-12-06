<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Http\Requests\AdminUserInsert;
use App\Http\Requests\AdminUserUpdate;

class AdminuserController extends Controller
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
        $data = DB::table('admin_users')->where('name','like','%'.$keyword.'%')->paginate(5);
        //加载管理员列表
        return view('Admin.Adminuser.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加模板
        return view('Admin.Adminuser.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserInsert $request)
    {
        //获取数据
        $data = $request->except(['_token','repassword']);
        //密码加密
        $data['password'] = Hash::make($data['password']);
        //开始添加
        if(DB::table('admin_users')->insert($data)){
            return redirect('/adminuser')->with('success','添加成功');
        }else {
            return redirect('/adminuser/create')->with('error','添加失败');
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
        $data = DB::table('admin_users')->where('id','=',$id)->first();
        //加载模板,分配数据
        return view('Admin.Adminuser.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUserUpdate $request, $id)
    {
        //获取数据 
        $data = $request->except(['_token','repassword','_method','name']);
        //加密密码
        $data['password'] = Hash::make($data['password']);
        //执行修改
        if(DB::table('admin_users')->where('id','=',$id)->update($data)){
            return redirect('/adminuser')->with('success','修改成功');
        }else {
            return redirect('/adminuser')->with('error','修改失败');
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
        //执行删除
        if(DB::table('admin_users')->where('id','=',$id)->delete()){
            return redirect('/adminuser')->with('success','删除成功');
        }else {
            return redirect('/adminuser')->with('error','删除失败');
        }
    }


    //角色分配
    public function rolelist($id){
        //获取管理员信息
        $info = DB::table('admin_users')->where('id','=',$id)->first();
        //获取所有角色信息
        $role = Db::table('role')->orderBy('id','asc')->get();
        //获取当前管理员已有的角色信息
        $rid = DB::table('user_role')->where('uid','=',$id)->value('rid');

        //加载模板 分配数据
        return view('Admin.Adminuser.rolelist',['rid'=>$rid,'info'=>$info,'role'=>$role]);        
    }

    //保存角色
    public function saverole(Request $request){
        //检测是否分配角色
        if(empty($request->input('rid'))){
            return back()->with('error','未选择角色,分配失败');
        }
        //超级管理员无法修改而且无法分配为超级管理员
        if($request->input('uid') == 1){
            return back()->with('error','当前角色为超级管理员,无法修改');
        }
        if($request->input('rid') == 2){
            return back()->with('error','无法分配为超级管理员,请重新分配');
        }
        //获取数据
        $data['uid'] = $request->input('uid');
        $data['rid'] = $request->input('rid');

        //删除管理员原来的角色
        DB::table('user_role')->where('uid','=',$request->input('uid'))->delete();

        //入库
        if(DB::table('user_role')->insert($data)){
            return redirect('/adminuser')->with('success','分配角色成功');
        }
    }
}
