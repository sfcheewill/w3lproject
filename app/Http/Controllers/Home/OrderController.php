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
        $order = DB::table('gorder')->where('uid','=',$uid)->get();
        //获取订单详情
        foreach ($order as $key => $value) {
            $order[$key]->info = DB::table('gorder_info')->join('spec_info','gorder_info.gid','=','spec_info.id')->join('goods_spec','spec_info.spec_id','=','goods_spec.id')->join('goods','goods_spec.gid','=','goods.id')->where('gorder_info.order_id','=',$value->id)->select('gorder_info.quantity','spec_info.price as sprice','spec_info.desc as sdesc','goods.logo','goods.name as gname','goods.id as gid')->get();
        }   

        // dd($order);

        //个人信息
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');

        //加载订单列表页
        return view('Home.Order.index',['users_info'=>$users_info,'link'=>$link,'order'=>$order]);
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
                DB::table('gorder_info')->insert($gorder_info);
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

    //检测订单
    public function checkorder(){
        $order_id = \Cookie::get('order_id');
        if(!empty($order_id)){
            return 'success';
        }else {
            return 'error';
        }
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
            //跳转到订单列表页
            return redirect('/homeorder');
        }
    }
}
