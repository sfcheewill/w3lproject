<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CartController extends Controller
{

    //设置购物车数据,返回商品总价
    public static function setCart($cart){
        $sum = 0;
        foreach ($cart as $key => $value) {
            // $info = DB::table('spec_info')->where('id','=',$value->gid)->first();
            // $pic = DB::table('goods_spec')->where('id','=',$info->spec_id)->value('pic');
            
            $info = DB::table('spec_info')->join('goods_spec','spec_info.spec_id','=','goods_spec.id')
                                        ->join('goods','goods_spec.gid','=','goods.id')
                                        ->where('spec_info.id','=',$value->gid)
                                        ->select(DB::raw('spec_info.*,goods_spec.pic,goods.id as goodsid,concat(goods.name,spec_info.desc) as gname'))
                                        ->first();
            $pic = explode('@', $info->pic);
            $cart[$key]->name = $info->gname;
            $cart[$key]->price = $info->price;
            $cart[$key]->pic = $pic[0];
            $cart[$key]->goodsid = $info->goodsid;
            $sum += $cart[$key]->price * $cart[$key]->quantity;
        }
        return $sum;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //检测是否登录
        if(session('username')){
            //登录
            $uid = session('uid');
            //从数据库拿数据
            $cart = DB::table('shopcart')->where('uid','=',$uid)->get();
            if(count($cart) == 0){
                $uid = session('uid');
                $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
                //查询出友情链接的数据
                $link = DB::select('select * from link order By id asc limit 0,5');
                //跳转到空购物车页
                return view('Home.Shopcart.emptycart',['users_info'=>$users_info,'link'=>$link]);
            }
            //设置数据
            $sum = self::setCart($cart);

        }else {
            //未登录
            //从session拿数据
            $cart = session('cart');
            if(empty($cart)){
                //查询出友情链接的数据
                $link = DB::select('select * from link order By id asc limit 0,5');
                //跳转到空购物车页
                return view('Home.Shopcart.emptycart',['link'=>$link]);
            }
            
            //将数组转换为对象
            $cart = json_decode(json_encode($cart));
            //设置数据
            $sum = self::setCart($cart);
        }
        // dd($cart);

        //个人信息
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');
        
        //加载模板
        return view('Home.Shopcart.cart',['cart'=>$cart,'sum'=>$sum,'users_info'=>$users_info,'link'=>$link]);
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

    //检测session相同商品
    public static function checkgoodsBysession($cart,$request,$gid,$quantity){
        $flag = false;
        //检测购物车是否为空
        if(!empty($cart)){
            foreach ($cart as $key => $value) {
                if($gid == $value['gid']){
                    $cart[$key]['quantity'] += $quantity;
                    $flag = true;
               }
            }
            $request->session()->pull('cart');
            session(['cart'=>$cart]);   
        }
        return $flag;
    }

    //检测数据库购物车相同商品
    public static function checkgoodsBydb($gid,$uid,$quantity){
        $flag = false;
        //获取数据库数据
        $cart = DB::table('shopcart')->where('gid','=',$gid)->where('uid','=',$uid)->first();
        //检测是否为空
        if(!empty($cart)){
            $data['quantity'] = $cart->quantity + $quantity;
            DB::table('shopcart')->where('uid','=',$uid)->where('gid','=',$gid)->update($data);
            $flag = true;
        }
        return $flag;
    } 


    //加入购物车
    public function addshopcart(Request $request){
        //获取参数 
        $gid = $request->input('gid');
        $quantity = $request->input('quantity');
        //判断用户是否有登录
        if(empty(session('username'))){
            // 未登录
            // 获取原来的购物车
            $cart = session('cart');
            //检测是否为相同商品
            if(!self::checkgoodsBysession($cart,$request,$gid,$quantity)){
                $data['gid'] = $gid;
                $data['quantity'] = $quantity;
                // 将购物车存进session
                $request->session()->push('cart',$data);
            }
            return 'success';
        }else{
            //已登录
            $uid = session('uid');
            // 检测是否有相同商品
            if(!self::checkgoodsBydb($gid,$uid,$quantity)){
                $data['gid'] = $gid;
                $data['quantity'] = $quantity;
                $data['uid'] = $uid;
                DB::table('shopcart')->insert($data);
            }
            return 'success';
        }
    }

    //检测用户是否登录和操作购物车
    public static function cartOperation($gid,$quantity,$info){
        //检测是否登录
        if(session('username')){
            //已登录
            $uid = session('uid');
            //操作数据库
            $data['quantity'] = $quantity;
            DB::table('shopcart')->where('uid','=',$uid)->where('gid','=',$gid)->update($data);
            //返回单品总价
            return $info->price * $quantity;
        }else {
            //未登录
            //操作session
            $cart = session('cart');
            foreach ($cart as $key => $value) {
                if($gid == $value['gid']){
                    $cart[$key]['quantity'] = $quantity;
                }
            }
            //重新写回session
            session(['cart'=>$cart]);
            //返回单品总价
            return $info->price * $quantity;
        }
    }

    //输入值改变购物车商品数量
    public function shopcartedit(Request $request){
        //获取参数
        $gid = $request->input('gid');
        $quantity = $request->input('quantity');
        //数据检测
        if($quantity < 1){
            $quantity = 1;
        }
        //获取该商品库存
        $info = DB::table('spec_info')->where('id','=',$gid)->first();
        
        if($quantity > $info->repertory){
            $quantity = $info->repertory;
        }

       $prices = self::cartOperation($gid,$quantity,$info);
       return $prices;
    }

    //增加购物车商品数量
    public function cartplus(Request $request){
        $gid = $request->input('gid');
        $quantity = $request->input('quantity');
        //检测商品库存
        $info = DB::table('spec_info')->where('id','=',$gid)->first();
        if($quantity > $info->repertory){
            $quantity = $info->repertory;
        }
        $prices = self::cartOperation($gid,$quantity,$info);
        return $prices;
    }

    //减少购物车商品数量
    public function cartminus(Request $request){
        $gid = $request->input('gid');
        $quantity = $request->input('quantity');
        //数据检测
        if($quantity < 1){
            $quantity = 1;
        }
        $info = DB::table('spec_info')->where('id','=',$gid)->first();

        $prices = self::cartOperation($gid,$quantity,$info);
        return $prices;
    }

    //删除购物车商品
    public function cartdel(Request $request){
        $gid = $request->input('gid');
        //检测是否登录
        if(session('username')){
            //登录
            //操作数据库
            $uid = session('uid');
            //检测是否为批量删除
            if(is_array($gid)){
                DB::table('shopcart')->where('uid','=',$uid)->whereIn('gid',$gid)->delete();
            }else{ 
                DB::table('shopcart')->where('gid','=',$gid)->where('uid','=',$uid)->delete();
            }
            //检测购物车是否为空
            $cart = DB::table('shopcart')->where('uid','=',$uid)->get();
            if(count($cart) == 0){
                //购物车为空
                //跳转到空购物车页
                return 'empty';
            }
            return 'success';
        }else {
            //未登录
            //操作session
            $cart = session('cart');
            //检测是否为批量删除
            if(is_array($gid)){
                foreach($cart as $key => $value){
                    foreach($gid  as $v){
                        if($value['gid'] == $v){
                            unset($cart[$key]);
                        }
                    }
                }
            }else {
                foreach ($cart as $key => $value) {
                    if($gid == $value['gid']){
                        unset($cart[$key]);
                    }
                }   
            }
            //将数据重新存回session
            session(['cart'=>$cart]);
            //检测购物车是否为空
            if(empty($cart)){
                //购物车为空
                //跳转到空购物车页
                return 'empty';
            }
            return 'success';
        }
    }

    //购物车结算
    public function settleAccount($gids){
        //获取数据
        $uid = session('uid');
        $gids = json_decode($gids);
        $sum = 0;
        //根据选中的商品id获取数据
        foreach ($gids as $key => $value) {
            $orderdata[$key] = DB::table('spec_info')->where('id','=',$value)->first();
            $orderdata[$key]->quantity = DB::table('shopcart')->where('uid','=',$uid)->where('gid','=',$value)->value('quantity');
            $orderdata[$key]->gid = DB::table('shopcart')->where('uid','=',$uid)->where('gid','=',$value)->value('gid');
            $orderdata[$key]->gname = DB::table('goods_spec')->join('goods','goods_spec.gid','=','goods.id')->where('goods_spec.id','=',$orderdata[$key]->spec_id)->value('goods.name');
            $orderdata[$key]->pic = DB::table('goods_spec')->where('id','=',$orderdata[$key]->spec_id)->value('pic');
            $orderdata[$key]->pic = explode('@',$orderdata[$key]->pic)[0];
            $sum += $orderdata[$key]->quantity * $orderdata[$key]->price;
        }
        //个人信息
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
        //获取地址
        $user_city = DB::table('user_city')->where('uid','=',$uid)->get();
        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');
        // dd($data);
        return view('Home.Shopcart.confirmorder',['users_info'=>$users_info,'link'=>$link,'orderdata'=>$orderdata,'sum'=>$sum,'user_city'=>$user_city]);
    }


    // //迷你购物车
    // public function getcart(){
    //     //检测是否登录
    //     if(session('username')){
    //         //登录
    //         $data = DB::table('shopcart')->join('spec_info','shopcart.gid','=','spec_info.id')
    //                                     ->join('goods_spec','spec_info.spec_id','=','goods_spec.id')
    //                                     ->join('goods','goods_spec.gid','=','goods.id')
    //                                     ->select(DB::raw('concat(goods.name,spec_info.desc) as gname,spec_info.price as sprice,goods.logo,shopcart.quantity'))
    //                                     ->where('uid','=',$uid)
    //                                     ->get();
    //         //检测数量 
    //         $data->sum = count($data);
    //         if($data->sum == 0){
    //             return json_encode('empty');
    //         }else {
    //             //计算总价
    //             $prices = 0;
    //             foreach ($data as $key => $value) {
    //                  $prices += $value->quantity * $value->sprice;
    //             }
    //             // $data->prices = $prices;
    //         }

    //         return json_encode($data);
    //     }else {
    //         //未登录
    //         $cart = session('cart');
    //         //检测数量
    //         if(count($cart) == 0){
    //             return json_encode('empty');
    //         }else{
    //             foreach($cart as $k=>$v){
    //                 $data[$k] = DB::table('spec_info')->join('goods_spec','spec_info.spec_id','=','goods_spec.id')
    //                                     ->join('goods','goods_spec.gid','=','goods.id')
    //                                     ->select(DB::raw('concat(goods.name,spec_info.desc) as gname,spec_info.price as sprice,goods.logo'))
    //                                     ->where('spec_info.id','=',$v['gid'])
    //                                     ->first();
    //                 $data[$k]->quantity = $v['quantity'];
    //             }
    //             //计算总价
    //             $prices = 0;
    //             foreach ($data as $key => $value) {
    //                  $prices += $value->quantity * $value->sprice;
    //             }
    //             // $data['prices'] = $prices;

    //             return json_encode($data);
    //         }
    //     }
    // }
}
