<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Hash;
//引入验证码类
use Gregwar\Captcha\CaptchaBuilder;
use App\Model\UsersModel;
use App\Model\UserinfoModel;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //验证码
    public function code(){
        //清除操作
        ob_clean();
        //实例化对象
        $bulider = new CaptchaBuilder;
        //设置宽高及字体
        $bulider->build($with=100,$height=40,$font=null);
        //获取验证码
        $phrase = $bulider->getPhrase();
        //将内容存入session
        session(['vcode'=>$phrase]);
        // \Cookie::queue('vcode',$phrase,2);
        //生成图片
        header('Cache-Controller:no-cache,must-revalidate');
        header('Content-Type:image/jpeg');
        //输出
        $bulider->output();
        //结束
        // die;
    }

    public function index()
    {
        //加载注册模板 
        return view('Home.Register.register');
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
    public function store(RegisterRequest $request)
    {
        //获取数据
        $data = $request->except(['_token','repassword','pcode']);
        //随机用户名
        $data['username'] = 'HUAWEI_' . (time() + mt_rand(1,100000));
        //密码加密
        $data['password'] = Hash::make($data['password']);
        //激活状态 1未激活
        $data['status'] = 1;
        //token
        $data['token'] = str_random(50);
        //入库
        if($row = UsersModel::create($data)){
            //为用户创建默认个人信息
            $info['uid'] = $row->id;
            $info['status'] = 1;
            $info['pic'] = '/uploads/users_info/2018-12-14/img_logged_in.png';
            UserinfoModel::create($info);
            return redirect('/homelogin/create');
            // echo '注册成功';
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

    //短信验证码
    public function phone(Request $request){
        $p = $request->input('p');
        echo sendsphone($p);
        // echo json_encode(['code'=>'000000']);
    }

    //检测验证码
    public function checkcode(Request $request){
        //获取验证码
        $pcode = $request->input('pcode');
        //判断 
        if(\Cookie::get('fcode')!='' && !empty($pcode)){
            $fcode = \Cookie::get('fcode');
            if($fcode == $pcode){
                //验证码一致
                echo 1;
            }else {
                //验证码错误
                echo 2;
            }
        }elseif(empty($pcode)){
            //验证码为空
            echo 3;
        }else {
            //验证码过期
            echo 4;
        }
    }

    //检测邮箱
    public function checkemail(Request $request){  
        $email = $request->input('email');
        $data = UsersModel::where('email','=',$email)->first();
        if(!empty($data)){
            echo 1;
        }else {
            echo 2;
        }
    }

    //检测手机号
    public function checkphone(Request $request){
        $phone = $request->input('phone');
        $data = UsersModel::where('phone','=',$phone)->first();
        if(!empty($data)){
            echo 1;
        }else {
            echo 2;
        }
    }
}
