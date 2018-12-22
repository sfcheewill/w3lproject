<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class HomestandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //个人信息
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');
        // 查询出用户对应的站内信详情
        $sendstand = DB::select("select s.id,sendtime,type,title,sendperson,content from send_desc as s,send_stand as t where uid = {$uid} and s.sendid=t.id");
        return view('Home.Sendstand.index',['users_info'=>$users_info,'link'=>$link,'sendstand'=>$sendstand]);
    }
    // 前台ajax删除站内信
    public function delstand(Request $request){

        // 获取传递过来的值
        $id  = $request->input('id');
        if (DB::table('send_desc')->where('id','=',$id)->delete()) {
            // 删除成功返回1
            echo 1;
        }else{
            // 删除失败返回2
            echo 2; 
        };

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
         //个人信息
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');
        // 查询数据
        $standdesc = DB::select("select sendtime,sendperson,title,content from send_desc as s,send_stand as r where s.id={$id} and s.sendid=r.id");
        return view('Home.Sendstand.show',['users_info'=>$users_info,'link'=>$link,'standdesc'=>$standdesc[0]]);
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
