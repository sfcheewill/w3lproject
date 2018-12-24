<?php

namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Usercity;
class UsercityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //加载收货地址模板
    public function index()
    {
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //查询出地址列表
        $usercity = Usercity::where('uid','=',$uid)->orderby('status','asc')->get();
        $link = DB::select('select * from link order By id asc limit 0,5');
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
        //加载模板
        return view('Home.City.index',['link'=>$link,'users_info'=>$users_info,'usercity'=>$usercity,'timeout'=>$timeout]);
    }

    //获取地区名
    public function district(Request $request){
        $upid = $request->input('upid');
        //根据upid获取数据
        $city = DB::table('district')->where('upid','=',$upid)->get();
        return json_encode($city);
    }


    //获取处理添加地址所有数据
    public function docity(Request $request){
        $cityinfo = $request->only('name','phone','city','code','status');
        //获取当前用户id
        $uid = session('uid');
        //将用户id插入数据表
        $cityinfo['uid'] = $uid;
        //查询用户地址表  用于判断表中有无数据
        //定义一个空数组用于返回
        $id = array();
        $userinfo = DB::table('user_city')->where('uid','=',$uid)->get();
        //表中数据少于6条的时候  可以继续插入数据(当表中没数据的时候 第一条应为默认地址1)
        if (count($userinfo) < 5) { 
            //表中没数据的时候  修改status值
            if (count($userinfo) == 0){
                $cityinfo['status'] = 1;
                if(DB::table('user_city')->insert($cityinfo)){
                    //获取uid 返回
                    $id['uid']=$uid;
                    echo json_encode([$id]);
                }
            }else{
                //表中有数据时  获取传过来的status值
                $status = $cityinfo['status'];
                // echo $status;
                if ($status == 1) {
                    //返回1 说明选择了默认地址 需要修改数据表里面的status值
                    DB::table('user_city')->where('uid','=',$uid)->update(['status'=>2]);
                    if(DB::table('user_city')->insert($cityinfo)){
                        //获取uid 返回
                        $id['uid']=$uid;
                        echo json_encode([$id]);
                    }    
                }elseif($status == 2){
                    //返回2 说明没有选择默认地址 直接写入数据库
                    if (DB::table('user_city')->insert($cityinfo)) {
                        //获取uid 返回
                        $id['uid']=$uid;
                        echo json_encode([$id]);
                    }
                }
            }
        }else{
            //表中数据多于6条禁止写入数据 返回6给前台判断
            echo 6;
        }
    }

    //Ajax 删除
    public function citydel(Request $request){
        $id = $request->input('id');
        if (DB::table('user_city')->where('id','=',$id)->delete()) {
            echo 1;
        }
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
        //获取添加的数据
        dd($request->all());
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
