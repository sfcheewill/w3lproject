<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取用户所有订单信息
        $uid = session('uid');
        $order = DB::table('gorder')->where('uid','=',$uid)->whereIn('buy_status',[1,2])->get();
        //获取订单详情
        foreach ($order as $key => $value) {
            $order[$key]->info = DB::table('gorder_info')->join('spec_info','gorder_info.gid','=','spec_info.id')->join('goods_spec','spec_info.spec_id','=','goods_spec.id')->join('goods','goods_spec.gid','=','goods.id')->where('gorder_info.order_id','=',$value->id)->select('gorder_info.quantity','spec_info.price as sprice','spec_info.desc as sdesc','goods.logo','goods.name as gname','goods.id as gid')->get();
        }   
        $order_status = [1=>'未发货',2=>'已发货',3=>'已收货'];
        $buy_status = [1=>'未付款',2=>'已付款',3=>'已取消'];

        foreach ($order as $key => $value) {
            if(!empty($value->order_status)){
                $order[$key]->order_status = $order_status[$value->order_status];
            }
            if(!empty($value->buy_status)){
                $order[$key]->buy_status = $buy_status[$value->buy_status];
            }
        }

        // dd($order);

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

        //加载订单列表页
        return view('Home.Order.index',['users_info'=>$users_info,'link'=>$link,'order'=>$order,'timeout'=>$timeout]);
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
        //获取数据
        $uid = session('uid');
        $gids = $request->input('gids');
        //商品数量
        $quantitys = [];
        //计算商品总价
        $total_price = 0;
        foreach ($gids as $key => $value) {
            //获取用户对应的购物车数据
            $quantity = DB::table('shopcart')->where('uid','=',$uid)->where('gid','=',$value)->value('quantity');
            //对应商品数量
            array_push($quantitys,$quantity);
            //商品单价
            $price = DB::table('spec_info')->where('id','=',$value)->value('price');
            $total_price += $quantity*$price;
        }
        //设置数据
        $gorder['address_id'] = $request->input('ordercity');          //地址
        $gorder['uid'] = $uid;                                      //用户
        $gorder['order_number'] = time() + mt_rand(1,100000);       //订单编号
        $gorder['total_price'] = $total_price;                      //总价
        $gorder['order_time'] = time();                             //下单时间
        $gorder['buy_status'] = 1;                                  //付款状态 1未付款 2已付款
        //入库
        $order_id = DB::table('gorder')->insertGetId($gorder);
        if($order_id){
            //添加订单详情
            $gorder_info['order_id'] = $order_id;   //订单id
            for($i = 0; $i < count($gids); $i++){
                $gorder_info['gid'] = $gids[$i];
                $gorder_info['quantity'] = $quantitys[$i];
                if(DB::table('gorder_info')->insert($gorder_info)){
                    //获取原来库存
                    $oldrepertory = DB::table('spec_info')->where('id','=',$gids[$i])->value('repertory');
                    //减少库存
                    $data['repertory'] = $oldrepertory - $quantitys[$i];
                    DB::table('spec_info')->where('id','=',$gids[$i])->update($data);
                }
            }
        }

        //将订单id放入cookie
        \Cookie::queue('order_id',$order_id,30);

        //获取显示数据
        $data = $gorder;
        $data['address'] = DB::table('user_city')->where('id','=',$data['address_id'])->first();   //地址详情
        $gnames = [];         //商品名称
        foreach ($gids as $key => $value) {
            $gname = DB::table('spec_info')->join('goods_spec','spec_info.spec_id','=','goods_spec.id')->join('goods','goods.id','=','goods_spec.gid')->where('spec_info.id','=',$value)->select('goods.name as gname','spec_info.desc as sdesc')->first();
            $gname = json_decode(json_encode($gname),true);
            $gname = implode(' ', $gname);
            array_push($gnames,$gname);
        }
        $gnames = mb_substr(implode(',',$gnames), 0, 30) . '...';
        $data['gname'] = $gnames;


        //清除购物车数据库中的对应数据
        foreach ($gids as $v) {
            DB::table('shopcart')->where('uid','=',$uid)->where('gid','=',$v)->delete();
        }  

        //加载模板 分配数据
        return view('Home.Orderbuy.orderbuy',['data'=>$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //获取数据
        $order = DB::table('gorder')->join('user_city','gorder.address_id','=','user_city.id')->where('gorder.id','=',$id)->select(DB::raw('gorder.id as goid,gorder.order_number,user_city.name as ucname,user_city.phone as ucphone,user_city.city as uccity,gorder.buy_status,gorder.order_status,gorder.total_price'))->first();

        $order->info = DB::table('gorder_info')->join('spec_info','gorder_info.gid','=','spec_info.id')->join('goods_spec','spec_info.spec_id','=','goods_spec.id')->join('goods','goods_spec.gid','=','goods.id')->where('gorder_info.order_id','=',$order->goid)->select(DB::raw('concat(goods.name,spec_info.desc) as gname,goods.logo,goods.id as gid,spec_info.price as sprice,gorder_info.quantity'))->get();

        $order_status = [1=>'未发货',2=>'已发货',3=>'已收货'];
        $buy_status = [1=>'未付款',2=>'已付款',3=>'已取消'];

        
        if(!empty($order->order_status)){
            $order->order_status = $order_status[$order->order_status];
        }
        if(!empty($order->buy_status)){
            $order->buy_status = $buy_status[$order->buy_status];
        }
        // dd($order);

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

        //加载模板
        return view('Home.Order.show',['users_info'=>$users_info,'link'=>$link,'order'=>$order,'timeout'=>$timeout]);
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

    //检测订单
    public function checkorder(){
        $order_id = \Cookie::get('order_id');
        if(!empty($order_id)){
            return 'success';
        }else {
            return 'error';
        }
    }

    //订单页的立即支付
    public function orderpaynow($id,$number,$name){
        //将id存进cookie
        \Cookie::queue('order_id',$id,30);
        //支付
        pay($number,$name);
    }

    //订单支付
    public function orderpay(Request $request){
        //获取数据
        $order_number = $request->input('order_number');
        $gname = $request->input('gname');
        //调用支付宝支付接口
        pay($order_number,$gname);
    }

    //订单支付成功
    public function paysuccess(){
        //获取订单id
        $order_id = \Cookie::get('order_id');
        //设置数据
        $data['buy_status'] = 2;    //已支付
        $data['buy_time'] = time(); //付款时间
        $data['order_status'] = 1;  //未发货状态

        //修改
        if(DB::table('gorder')->where('id','=',$order_id)->update($data)){
            //修改成功
            //获取对应商品原来销量
            $info = DB::table('gorder_info')->join('spec_info','gorder_info.gid','=','spec_info.id')
                                            ->where('gorder_info.order_id','=',$order_id)
                                            ->select(DB::raw('spec_info.id,spec_info.sale,gorder_info.quantity'))
                                            ->first();
            //销量增加
            $arr['sale'] = $info->sale + $info->quantity;
            //修改
            DB::table('spec_info')->where('id','=',$info->id)->update($arr);
            //跳转到订单列表页
            return redirect('/homeorder');
        }
    }

    //订单取消
    public function ordercancel(Request $request){
        $id = $request->input('id');
        //修改订单状态 
        $data['buy_status'] = 3;
        if(DB::table('gorder')->where('id','=',$id)->update($data)){
            //获取原来库存
            $info = DB::table('gorder_info')->join('spec_info','gorder_info.gid','=','spec_info.id')
                                            ->where('gorder_info.order_id','=',$id)
                                            ->select(DB::raw('spec_info.id,spec_info.repertory,gorder_info.quantity'))
                                            ->first();
            //库存增加
            $arr['repertory'] = $info->repertory + $info->quantity;
            //修改
            DB::table('spec_info')->where('id','=',$info->id)->update($arr);
            //跳转到订单页
            return 'success';
        }
    }

    //确认收货
    public function orderstatus(Request $request){
        //获取数据
        $id = $request->input('id');
        $data['order_status'] = 3;
        //修改订单状态 
        if(DB::table('gorder')->where('id','=',$id)->update($data)){
            return 'success';
        }
    }

    //查看不同订单
    public function ordercheck(Request $request){
        $msg = $request->input('msg');
        switch($msg){
            case 'all':
                //获取所有有效订单
                $wheres = array('buy_status',[1,2]);
                break;
            case 'unpaid':
                //待支付
                $wheres = array('buy_status',[1]);
                break;
            case 'send':
                //待收货
                $wheres = array('order_status',[2]);
                break;
            case 'finished':
                //已完成
                $wheres = array('order_status',[3]);
                break;
            case 'canceled':
                //已取消
                $wheres = array('buy_status',[3]);
                break;
        }

        //获取用户所有订单信息
        $uid = session('uid');
        //获取数据
        $order = DB::table('gorder')->where('uid','=',$uid)->whereIn($wheres[0],$wheres[1])->get();
        //获取订单详情
        foreach ($order as $key => $value) {
            $order[$key]->info = DB::table('gorder_info')->join('spec_info','gorder_info.gid','=','spec_info.id')->join('goods_spec','spec_info.spec_id','=','goods_spec.id')->join('goods','goods_spec.gid','=','goods.id')->where('gorder_info.order_id','=',$value->id)->select('gorder_info.quantity','spec_info.price as sprice','spec_info.desc as sdesc','goods.logo','goods.name as gname','goods.id as gid')->get();
        }   
        $order_status = [1=>'未发货',2=>'已发货',3=>'已收货'];
        $buy_status = [1=>'未付款',2=>'已付款',3=>'已取消'];

        foreach ($order as $key => $value) {
            if(!empty($value->order_status)){
                $order[$key]->order_status = $order_status[$value->order_status];
            }
            if(!empty($value->buy_status)){
                $order[$key]->buy_status = $buy_status[$value->buy_status];
            }
        }

        return view('Home.Order.check',['order'=>$order]);
    }
}
