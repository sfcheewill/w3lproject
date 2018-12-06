<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB; 
use App\Models\Admin\Role;

class RolelistController extends Controller
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
        $data = Role::where('name','like','%'.$keyword.'%')->orderBy('id','asc')->paginate(5);
        //加载角色列表模板 分配数据
        return view('Admin.Rolelist.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加角色模板
        return view('Admin.Rolelist.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->input('name')) || empty($request->input('status'))){
            return back()->with('error','必填数据不能为空')->withInput();
        }
        //添加角色
        //获取数据
        $data = $request->except(['_token']);
        //入库 
        if(Db::table('role')->insert($data)){
            return redirect('/adminrolelist')->with('success','添加角色成功');
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
        $data = DB::table('role')->join('user_role','role.id','=','user_role.rid')->join('admin_users','user_role.uid','=','admin_users.id')->where('role.id','=',$id)->select('admin_users.id','admin_users.name')->paginate(5);
        //加载模板 分配数据
        $data->rid = $id;
        return view('Admin.Rolelist.show',['data'=>$data]);
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
        $data = DB::table('role')->where('id','=',$id)->first();
        //加载修改模板 分配数据
        return view('Admin.Rolelist.edit',['data'=>$data]);
        
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
        //执行修改
        if(empty($request->input('name')) || empty($request->input('status'))){
            return back()->with('error','必填数据不能为空');
        }
        //获取数据
        $data = $request->except(['_token','_method']);
        //执行修改
        if(DB::table('role')->where('id','=',$id)->update($data)){
            return redirect('/adminrolelist')->with('success','修改角色成功');
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
        if(DB::table('role')->where('id','=',$id)->delete()){
            return redirect('/adminrolelist')->with('success','删除角色成功');
        }
    }

    //ajax修改状态
    public function roleedit(Request $request){
        //获取id
        $id = $request->input('id');
        $data['status'] = $request->input('status') == '激活'? 2 : 1;
        //修改状态
        if(DB::table('role')->where('id','=',$id)->update($data)){
            $info = Role::where('id','=',$id)->first();
            $arr['status'] = $info->status;
            $arr['code'] = 1;
            //返回状态
            echo json_encode($arr);
        }
    }

    //分配权限
    public function auth($id){
        //获取所有权限信息
        $data = DB::table('node')->orderBy('id','asc')->get();
        //获取当前角色信息
        $info = DB::table('role')->where('id','=',$id)->first();
        //获取当前角色的权限信息
        $node = DB::table('role_node')->where('rid','=',$id)->get();
        //判断
        if(count($node)){
            //存储角色权限信息
            foreach($node as $v){
                $nids[] = $v->nid;
            }
            return view('Admin.Rolelist.auth',['data'=>$data,'info'=>$info,'nids'=>$nids]);
        }else {
            return view('Admin.Rolelist.auth',['data'=>$data,'info'=>$info,'nids'=>array()]);
        }
    }

    //保存权限
    public function saveauth(Request $request){
        if(empty($request->input('nodes'))){
            return back()->with('error','未分配权限,无法提交');
        }
        //获取数据
        $rid = $request->input('rid');
        $nodes = $request->input('nodes');
        //删除角色原来的权限信息
        DB::table('role_node')->where('rid','=',$rid)->delete();
        //遍历
        foreach($nodes as $value){
            $data['rid'] = $rid;
            $data['nid'] = $value;      
            //执行添加
            DB::table('role_node')->insert($data);
        }
        //页面跳转
        return redirect('/adminrolelist')->with('success','权限分配成功');
    }
}
