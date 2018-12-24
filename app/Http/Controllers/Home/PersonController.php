<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserinfoModel;
use App\Model\UsersModel;
use DB;
class PersonController extends Controller
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

        // 加载模板
        return view('Home.Person.index',['users_info'=>$users_info,'link'=>$link,'timeout'=>$timeout]);
    }

    // ajax修改性别
    public function sex(Request $request){

        // 获取参数
        $data['sex'] = $request->input('sex');
        $uid = session('uid');
        // 判断更新是否成功
        if (DB::table('users_info')->where('uid','=',$uid)->update($data)) {
            // 成功返回
            echo 1;
        }else{
            // 失败返回
            echo 2;
        }
    }

    // ajax修改昵称
    public function nickname(Request $request){
        // 获取传递过来的参数
        $data['nickname'] = $request->input('nickname');
        // 获取session里面的id值
        $uid = session('uid');
        // 判断更新是否成功
        if (DB::table('users_info')->where('uid','=',$uid)->update($data)) {
            // 成功返回1
            echo 1;
        }else{
            // 失败返回2
            echo 2;
        }
    }
    // ajax地址显示
    public function address(Request $request){
        // 获取传递过来的参数
        $upid = $request->input('upid');
        // 查询数据库
        $data = DB::table('district')->where('upid','=',$upid)->get();
        // 返回json字符串
        echo json_encode($data);
    }
    // ajax地址设置
    public function addreset(Request $request){

        // 获取session里面的id值
        $uid = session('uid');
        // 获取传递过来的参数
        $data['district'] = $request->input('address');
       if( DB::table('users_info')->where('uid','=',$uid)->update($data)){
            // 成功返回数据
            echo $data['district'];
       }else{
            // 失败返回2
            echo 2;
       };
    }

    // ajax修改生日
    public function birthday(Request $request){

        // 获取session里面的id值
        $uid = session('uid');
        // 获取传递过来的参数
        $data['birthday'] = $request->input('birthday');
        if( DB::table('users_info')->where('uid','=',$uid)->update($data)){
            // 成功返回1
            echo 1;
        }else{
            // 失败返回2
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
        // 获取session里面的id值
        $uid = session('uid');
        // 查询数据库
        $data = UserinfoModel::where('uid','=',$uid)->first();
        $info = UsersModel::where('id','=',$uid)->first();
        // 声明数组
        $year=array();
        $month=array();
        $day=array();
        // 年
        for($i=1900;$i<=2018;$i++){
            $year[]=$i;
        }
        //月
        for($i=1;$i<=12;$i++){
            $month[]=$i;
        }
        //日
        for($i=1;$i<=30;$i++){
            $day[]=$i;
        }

        //个人信息
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');

        // 加载模板
        return view('Home.Person.personcenter',['data'=>$data,'info'=>$info,'year'=>$year,'month'=>$month,'day'=>$day,'users_info'=>$users_info,'link'=>$link]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 获取session里面的id值
        $uid = session('uid');
        $info = DB::table('users_info')->where('uid','=',$uid)->first();
        // 判断是否有图片上传
        if($request->hasFile('pic')){
            // 判断图片是否是第一次修改
            // 是为1
            // 否为2
            if ($info->status==1) {
                $name =  time()+rand(1,10000);
                // 获取文件上传后缀
                $ext = $request->file('pic')->getClientOriginalExtension();
                // 把文件上传文件移动到指定的位置
                $request->file("pic")->move('./uploads/users_info/'.date("Y-m-d"),$name.".".$ext);
                // 获取文件上传路径
                $data['pic'] = '/uploads/users_info/'.date("Y-m-d").'/'.$name.".".$ext;
                $data['status']=2;
                if (DB::table('users_info')->where('uid','=',$uid)->update($data)) {
                    return redirect('/person/create');
                }
            }else{
                // 删除原来图像
                unlink('.'.$info->pic);
                // 重新上传图片
                // 初始化图片名
                $name =  time()+rand(1,10000);
                // 获取文件上传后缀
                $ext = $request->file('pic')->getClientOriginalExtension();
                // 把文件上传文件移动到指定的位置
                $request->file("pic")->move('./uploads/users_info/'.date("Y-m-d"),$name.".".$ext);
                // 获取文件上传路径
                $data['pic'] = '/uploads/users_info/'.date("Y-m-d").'/'.$name.".".$ext;
                if (DB::table('users_info')->where('uid','=',$uid)->update($data)) {
                    return redirect('/person/create');
                }
            }
        }else{
            return redirect('/person/create');
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
