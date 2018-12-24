<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class MylikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //获取用户id
          $uid = session('uid');
        //遍历用户收藏商品
        $shopcollec = DB::table('goods')->join('user_shopcollect','goods.id','=','user_shopcollect.sid')->where('uid','=',$uid)->get();
       
        //获取个人信息      
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //查询出友情链接的数据
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

        //加载订单列表页
        return view('Home.Mylike.index',['users_info'=>$users_info,'link'=>$link,'shopcollec'=>$shopcollec,'timeout'=>$timeout]);
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

    //ajax 取消收藏
    public function Nolike(Request $request){
        //获取商品id
        $shopid = $request->input('id');
        //执行删除
        if (DB::table('user_shopcollect')->where('sid','=',$shopid)->delete()) {
            //删除成功
            echo "1";
        }else{
            //删除失败
            echo "2";
        }
    }
}
