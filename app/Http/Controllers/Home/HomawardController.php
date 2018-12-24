<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class HomawardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 前台抽奖
    public function index()
    {
        $award = DB::table('award')->get();
        //个人信息
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');
        return view('Home.Award.index',['award'=>$award,'users_info'=>$users_info,'link'=>$link]);
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

    //处理抽奖结果
    public function lottery(Request $request){
        $id = $request->input('id');
        $uid = session('uid');
        //检测用户是否抽奖过
        $status = DB::table('award_desc')->where('uid','=',$uid)->value('status');
        if(!empty($status)){
            //已抽奖
            return 'error';
        }else {
            //未抽奖
            //设置数据
            $data['awardid'] = $id;
            $data['uid'] = $uid;
            $data['status'] = 1;    //1已抽奖过 null未抽奖
            //入库
            if(DB::table('award_desc')->where('uid','=',$uid)->insert($data)){
                return 'success';
            }
        }
    }
    // 查看我的优惠券
    public function checklottery(){

        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');
        $mylottery = DB::select("select pic from award_desc as a,award as r where uid={$uid} and a.awardid=r.id ");
        $award = DB::table('users')->where('id','=',$uid)->first();
        // 求出用户创建了多少天
        $date = time()-strtotime($award->created_at);
        // 判断是否过三天的日期
        // 如果输入2,否输入1
        // 如果没超过三天则可以进行新人抽奖
        if ($date<(3*24*3600)) {
            $timeout = 1;
        }else{
            $timeout = 2;
        }
        // 判断是否有优惠券
        if (empty($mylottery)) {
            $lottery = 0;
            return view('Home.mylottery.index',['users_info'=>$users_info,'link'=>$link,'lottery'=>$lottery,'timeout'=>$timeout]);
        }else{
            $lottery = $mylottery[0];
            return view('Home.mylottery.index',['users_info'=>$users_info,'link'=>$link,'lottery'=>$lottery,'timeout'=>$timeout]);
        }
        
    }
}
