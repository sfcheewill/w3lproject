<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Http\Requests\AdminUserUpdate;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载后台首页
        return view('Admin.Admins.index');
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
        //获取对应权限数据
        $data = DB::table('admin_users')->join('user_role','admin_users.id','=','user_role.uid')->join('role_node','user_role.rid','=','role_node.rid')->join('node','role_node.nid','=','node.id')->where('admin_users.id','=',$id)->orderBy('node.id','asc')->paginate(5);
        //获取所属角色
        $info = DB::table('admin_users')->join('user_role','admin_users.id','=','user_role.uid')->join('role','user_role.rid','=','role.id')->where('admin_users.id','=',$id)->first();
        //加载模板
        return view('Admin.Admins.show',['data'=>$data,'info'=>$info]);
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
        //加载修改模板 分配数据
        return view('Admin.Admins.edit',['data'=>$data]);
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
        $data['password'] = Hash::make($request->input('password'));
        //执行修改
        if(DB::table('admin_users')->where('id','=',$id)->update($data)){
            return redirect('/admin')->with('success','修改密码成功');
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
        //
    }
}
