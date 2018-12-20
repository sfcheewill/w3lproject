<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use DB;
use Mail;
use App\Model\UsersModel;
use App\Model\UserinfoModel;
use App\Http\Requests\ForgetRequest;

class LoginController extends Controller
{
    //邮箱激活
    public static function sendMail($id,$token,$email){
        Mail::send('Home.Login.status',['id'=>$id,'token'=>$token],function($message) use($email){
            $message->to($email);
            $message->subject('w3l验证账号');
        });
    }

    //邮件验证码
    public static function mailCode($email){
        //随机验证码
        $mailcode = mt_rand(100000,999999);
        //存进cookie
        \Cookie::queue('mailcode',$mailcode,1);
        //发送邮件
        Mail::raw('您的验证码为:' . $mailcode.',请在1分钟内输入',function($message) use($email){
            $message->to($email);
            $message->subject('w3l协会邮件验证码');
        });
        return true;
    }

    //存储登录用户数据
    public static function saveinfo($name,$info){
        $data = substr_replace($info->phone, '****', 3,4);
        //存进session
        session([$name=>$data]);
        session(['uid'=>$info->id]);
        $user_info = UserinfoModel::where('uid','=',$info->id)->first();
        session(['upic'=>$user_info->pic]);
    }

    //将session中的购物车存进数据库
    public function savecart($request){
        //检测是否有数据
        $cart = session('cart');
        $uid = session('uid');
        //检测相同商品
        $dbcart = DB::table('shopcart')->where('uid','=',$uid)->get();
        //检测seesion购物车是否为空
        if(!empty($cart)){
            foreach ($cart as $key=>$row) {
                $flag = true;
                foreach ($dbcart as $k => $rows) {
                    if($row['gid'] == $rows->gid){
                        //相同商品
                        //数量相加
                        $data['quantity'] = $row['quantity'] + $rows->quantity;
                        //更新数据
                        DB::table('shopcart')->where('id','=',$rows->id)->update($data);
                        $flag = false;
                    }
                }
                if($flag){
                    //没有找到相同商品
                    $row['uid'] = session('uid');
                    DB::table('shopcart')->insert($row);
                }
            }
            //清空session的购物车
            $request->session()->pull('cart');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //退出登录
        //删除session
        $request->session()->pull('username');
        $request->session()->pull('uid');
        $request->session()->pull('upic');
        return redirect('/homeindex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载前台登录模板
        return view('Home.Login.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取数据
        //检测是否用短信验证码登录
        $pcode = $request->input('pcode');
        if(!empty($pcode)){
            $p = $request->input('phone');
            //检测手机号
            $info = DB::table('users')->where('phone','=',$p)->first();
            if(!empty($info)){
                //检测验证码
                $fcode = \Cookie::get('fcode');
                if($pcode == $fcode){
                    //检测是否已经激活
                    if($info->status == '2'){
                        //登录成功
                        //将信息存进session
                        self::saveinfo('username',$info);
                        //将session中的购物车存进数据库
                        self::savecart($request);
                        //跳转到首页
                        return redirect('/homeindex');
                    }else {
                        //未激活
                        //发送邮件激活
                        self::sendMail($info->id,$info->token,$info->email);
                        return back()->with('error','账号未激活,已将激活连接发送至'.$info->email);
                    }
                }else {
                    return back()->with('error1','验证码错误');
                }
            }else {
                return back()->with('error1','手机号未注册');
            }
        }else{
            $name = $request->input('username');     
            $password = $request->input('password');
            $info = DB::table('users')->where('username','=',$name)->orWhere('phone','=',$name)->orWhere('email','=',$name)->first();
            //检测账号
            if(!empty($info)){
                //检测密码
                if(Hash::check($password,$info->password)){
                    //检测是否已经激活
                    if($info->status == '2'){
                        //登录成功
                        //将信息存进session
                        self::saveinfo('username',$info);
                        //将session中的购物车存进数据库
                        self::savecart($request);
                        //跳转到首页
                        return redirect('/homeindex');
                    }else {
                        //未激活
                        //发送邮件激活
                        self::sendMail($info->id,$info->token,$info->email);
                        return back()->with('error','账号未激活,已将激活连接发送至'.$info->email);
                    }
                }else {
                    return back()->with('error','密码错误');
                }
            }else {
                return back()->with('error','账号不存在');
            } 
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

    //激活状态
    public function status(Request $request){
        //获取数据
        $id = $request->input('id');
        $token = $request->input('token');
        //检测token
        $ftoken = UsersModel::where('id','=',$id)->value('token');
        if($ftoken == $token){
            //修改状态
            $data['status'] = 2;
            UsersModel::where('id','=',$id)->update($data);
            echo '<h3>激活成功</>';
        }
    }

    //加载忘记密码模板
    public function forget(){
        return view('Home.Login.forget');
    }

    //检测账号
    public function checkAccount(Request $request){
        $username = $request->input('username');
        $info = DB::table('users')->where('username','=',$username)->orWhere('phone','=',$username)->orWhere('email','=',$username)->first();
        if(empty($info)){
            //账号不存在
            return 'error';
        }else {
            return 'success';
        }
    }

    //检测图形验证码
    public function checkvcode(Request $request){
        //获取输入的数据
        $vcode = $request->input('vcode');
        //获取验证码
        $fvcode = session('vcode');
        //检测
        if($vcode == $fvcode){
            return 'success';
        }else {
            return 'error';
        }
    }

    //加载邮箱验证码模板
    public function emailcode(Request $request){
        //获取数据
        $u = $this->checkAccount($request);
        $v = $this->checkvcode($request);
        $username = $request->input('username');
        if($u == 'success' && $v == 'success'){
            //获取用户数据
            $info = DB::table('users')->where('username','=',$username)->orWhere('phone','=',$username)->orWhere('email','=',$username)->first();
            //将邮箱存进cookie
            \Cookie::queue('email',$info->email,20);
            //加载模板
            $data['id'] = $info->id;
            $data['token'] = $info->token;
            $data['remail'] = substr_replace($info->email, '****', 2,4);
            return view('Home.Login.emailcode',['data'=>$data]);
        }else {
            return back()->with('error','输入信息有误,请重新输入');
        }
    }

    //发送邮箱验证码
    public function sendEmailCode(Request $request){
        //获取token
        $token = $request->input('token');
        //获取邮箱
        $email = \Cookie::get('email');
        //检测token
        $s = DB::table('users')->where('email','=',$email)->value('token');
        if($s == $token && $email != ''){
            //发送邮件
            self::mailCode($email);
            return 'success';
        }else {
            return 'error';
        }
    }

    //检测邮箱验证码
    public function checkemailcode(Request $request){
        //获取数据
        $code = $request->input('code');
        //获取验证码
        $fcode = \Cookie::get('mailcode');
        //检测
        if($code == $fcode && $fcode != ''){
            return 'success';
        }else {
            return 'error';
        }
    }

    //加载设置新密码模板
    public function newPass(Request $request){
        //检测验证码
        $flag = $this->checkemailcode($request);
        if($flag == 'success'){
            $id = $request->input('id');
            $data = DB::table('users')->where('id','=',$id)->first();
            //加载忘记密码模板 分配数据
            return view('Home.Login.newpass',['data'=>$data]);
        }else {
            // echo 1;
            // exit;
            // 非法测试,跳转到找回密码页
            return redirect('/forget');
        }
    }

    //设置新密码
    public function setNewPass(ForgetRequest $request){
        //获取数据
        $id = $request->input('id');
        $token = $request->input('token');
        $data['password'] = Hash::make($request->input('password'));
        $info = UsersModel::where('id','=',$id)->first();
        if($token == $info->token){
            //修改密码
            UsersModel::where('id','=',$id)->update($data);
            return redirect('/homelogin/create');
        }else {
            return back()->with('error','您提交的信息有误,请重新提交');
        }
    }
}
