<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询出友情链接所有数据
        $data = DB::table('link')->get();

        //个人信息
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');

        //加载前台模板
        return view('Home.Link.index',['data'=>$data,'link'=>$link,'users_info'=>$users_info]);
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
    //申请友情链接
    public function store(Request $request)
    {
        //获取需要的前台页面友情链接的数据
        $data = $request->except('_token');
        //默认的状态
        $data['status'] = 1;
        //将获取到值写入数据库中
        if (DB::table('link')->insert($data)) {
            return redirect('/homeindex');
        }
    }
    //检测友情链接网站名
    public function linkname(Request $request){
        $n = $request->input('n');
        // echo $n;die;
        $info = DB::table('link')->where('name','=',$n)->first();
        //判断表中的数据
        if (empty($info)) {
            echo 1;//网站名为空  可以申请
        }else{
            echo 2;//网站不为空  不可申请
        }
    }
    //检测友情链接网址
    public function linkurl(Request $request){
        $u = $request->input('u');
        // echo $n;die;
        $info = DB::table('link')->where('url','=',$u)->first();
        //判断表中的数据
        if (empty($info)) {
            echo 1;//网址为空  可以申请
        }else{
            echo 2;//网址不为空  不可申请
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
