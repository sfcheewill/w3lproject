<?php

namespace App\Http\Controllers\Admin;

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
        //加载订单列表模板 分配数据
        $data = DB::table('gorder')->join('users','gorder.uid','=','users.id')->join('user_city','gorder.address_id','=','user_city.id')->select(DB::raw('users.username,gorder.*,concat(name,user_city.phone,city) as address'))->paginate(5);

        $order_status = [1=>'未发货',2=>'已发货',3=>'已收货'];
        $buy_status = [1=>'未付款',2=>'已付款'];

        foreach ($data as $key => $value) {
            if(!empty($value->order_status)){
                $data[$key]->order_status = $order_status[$value->order_status];
            }
            if(!empty($value->buy_status)){
                $data[$key]->buy_status = $buy_status[$value->buy_status];
            }
        }


        return view('Admin.Order.index',['data'=>$data]);
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
        //获取数据
        $data = DB::table('gorder_info')->join('spec_info','gorder_info.gid','=','spec_info.id')->join('goods_spec','spec_info.spec_id','=','goods_spec.id')->join('goods','goods_spec.gid','=','goods.id')->where('gorder_info.order_id','=',$id)->select(DB::raw('gorder_info.id as grid,goods_spec.pic as gpic,concat(goods.name,spec_info.desc) as gname,gorder_info.quantity,spec_info.price as sprice'))->paginate(5);

        foreach ($data as $key => $value) {
            $data[$key]->gpic = explode('@',$value->gpic)[0];
        }

        return view('Admin.Order.show',['data'=>$data]);
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
