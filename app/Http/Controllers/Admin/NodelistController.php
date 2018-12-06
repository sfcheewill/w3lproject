<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\Node;

class NodelistController extends Controller
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
        $data = Node::where('name','like','%'.$keyword.'%')->orderBy('id','asc')->paginate(5);
        //加载权限列表模板 分配数据
        return view('Admin.Nodelist.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加模板
        return view('Admin.Nodelist.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //检测数据
        if(empty($request->input('name')) || empty($request->input('mname')) || empty($request->input('aname')) || empty($request->input('status'))){
            return back()->with('error','提交数据不能为空,请重新提交')->withInput();
        }
        //获取数据
        $data = $request->except(['_token']);
        //入库
        if(DB::table('node')->insert($data)){
            return redirect('/adminnodelist')->with('success','添加权限成功');
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
        //获取数据
        $data = DB::table('node')->where('id','=',$id)->first();
        //加载修改模板
        return view('Admin.Nodelist.edit',['data'=>$data]);
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
        //检测数据
        if(empty($request->input('name')) || empty($request->input('mname')) || empty($request->input('aname')) || empty($request->input('status'))){
            return back()->with('error','提交数据不能为空,请重新提交')->withInput();
        }
        //获取数据
        $data = $request->except(['_token','_method']);
        //执行修改
        if(DB::table('node')->where('id','=',$id)->update($data)){
            return redirect('/adminnodelist')->with('success','修改权限成功');
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
        if(DB::table('node')->where('id','=',$id)->delete()){
            //删除角色拥有的权限
            DB::table('role_node')->where('nid','=',$id)->delete();
            //页面跳转
            return redirect('/adminnodelist')->with('success','删除权限成功');
        }
    }

    //ajax修改状态
    public function nodeedit(Request $request){
        //获取id
        $id = $request->input('id');
        $data['status'] = $request->input('status') == '激活'? 2 : 1;
        //修改状态
        if(DB::table('node')->where('id','=',$id)->update($data)){
            $info = Node::where('id','=',$id)->first();
            $arr['status'] = $info->status;
            $arr['code'] = 1;
            //返回状态
            echo json_encode($arr);
        }
    }
}
