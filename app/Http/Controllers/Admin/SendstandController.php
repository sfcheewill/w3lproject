<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SendstandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 站内信首页
    public function index(){
    
        $data = DB::table('send_stand')->paginate(3);
        return view('Admin.Sendstand.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Sendstand.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 获取传递过来的参数
        $data = $request->except('_token');
        $data['sendperson'] = '华为商城';
        // 插入数据库
        if (DB::table('send_stand')->insert($data)) {
            return redirect('/sendstand')->with('success','添加成功');
        }else{
            return redirect('/sendstand')->with('error','添加失败');
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
        // 获取站内信模板id
        $sendid = $id;
        // 获取用户表数据
        $data = DB::table('users')->get();
        // 获取当前站内信模板的用户
        $uinfo = DB::table('send_desc')->where('sendid','=',$sendid)->get();
        if (count($uinfo)) {
            foreach($uinfo as $v){
                $uids[] = $v->uid;
            }
            return view('Admin.Sendstand.send',['data'=>$data,'sendid'=>$sendid,'uids'=>$uids]);
        }else{
            return view('Admin.Sendstand.send',['data'=>$data,'sendid'=>$sendid,'uids'=>array()]);

        }
        // var_dump($uids);
       
    }

    public function sendshow(Request $request){
        // 接收传递过来的参数
        $ids = $request->input('ids');
        // 判断传递过来的uid是否为空
        if(empty($ids)){
            echo 0;
            exit;
        }
        // 循环添加
        foreach($ids as $v){
            $data['uid'] = $v;
            $data['sendid'] = $request->input('sendid');
            $data['sendtime'] = time();
            $info = DB::table('send_desc')->insert($data);
        }
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
        if (DB::table('send_stand')->where('id','=',$id)->delete()) {
            return redirect('/sendstand')->with('success','删除站内信模板成功');
        }else{
            return redirect('/sendstand')->with('error','删除站内信模板失败');
        }
    }
}
