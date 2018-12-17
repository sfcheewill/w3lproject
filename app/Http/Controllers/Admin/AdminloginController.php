<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class AdminloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //执行退出
        //销毁session
        $request->session()->pull('name');
        //页面跳转
        return redirect('/adminlogin/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载后台登录模板
        return view('Admin.Adminlogin.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取数据 
        $name = $request->input('name');
        $password = $request->input('password');
        $info = DB::table('admin_users')->where('name','=',$name)->first();
        //检测用户名
        if(!empty($info)){
            //检测密码
            if(Hash::check($password,$info->password)){
                //登录成功
                //将信息存进session
                session(['name'=>$name,'id'=>$info->id]);
                //将登录会员权限列表添加进session
                //获取登录会员的权限列表
                $list = DB::select("select n.name,n.mname,n.aname from user_role as ur,role_node as rn,node as n where ur.rid=rn.rid and rn.nid=n.id and uid={$info->id}");
                //初始化权限列表
                //默认权限
                $nodelist['AdminsController'][] = 'index';  //后台首页
                $nodelist['AdminsController'][] = 'edit';   //加载修改密码模板   
                $nodelist['AdminsController'][] = 'update'; //修改密码
                $nodelist['AdminsController'][] = 'show';   //查看自己权限
                foreach($list as $key=>$value){
                    $nodelist[$value->mname][] = $value->aname;
                    if($value->aname == 'create'){
                        $nodelist[$value->mname][] = 'store';
                    }
                    if($value->aname == 'edit'){
                        $nodelist[$value->mname][] = 'update';
                    }
                }
                //存进session
                session(['nodelist'=>$nodelist]);
                //跳转到后台首页
                return redirect('/admin')->with('success','登录成功');
            }else {
                return back()->with('error','密码错误');
            }
        }else {
            return back()->with('error','用户名错误');
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
        //
    }
}
