<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //无限分类
    public static function getCateByPid($pid){
        $res = DB::table('cate')->where('pid','=',$pid)->orderBy('id','asc')->get();
        $data = [];
        //遍历
        foreach($res as $value){
            $value->dev = self::getCateByPid($value->id);
            $data[] = $value;
        }
        return $data;
    }

    //面包屑
    public static function getParents($cate_id){
        $data = [];
        while($cate_id){
            $res = DB::table('cate')->where('id','=',$cate_id)->first();
            array_unshift($data,array('cate_id'=>$res->id,'cate_name'=>$res->name));
            $cate_id = $res->pid;
        }
        return $data;
    }

    public function index()
    {
        //获取数据
        $cate = self::getCateByPid(0);
        //获取公告
        $notices = DB::table('notice')->orderBy('id','asc')->get();
        //获取热销商品
        $hotgoods = DB::table('goods')->join('goods_spec','goods.id','=','goods_spec.gid')->join('spec_info','goods_spec.id','=','spec_info.spec_id')->select('goods.name as gname','goods.logo as glogo','goods.price as gprice','spec_info.desc as sdesc','goods.id as gid')->orderBy('spec_info.sale','desc')->offset(0)->limit(8)->get();
        //商品列表
        $goods = DB::table('goods')->join('cate','goods.cate_id','=','cate.id')->select('goods.name as gname','goods.price as gprice','goods.logo as glogo','cate.pid as cid','goods.id as gid')->get();

        //轮播图
        $slide = DB::table('slideshow')->offset(0)->limit(8)->get();
        //获取顶部广告图片
        $adverti = DB::table('advertise')->orderBy('addtime','desc')->first();

        //个人信息
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();

        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');

        //加载前台首页
        return view('Home.Index.index',['cate'=>$cate,'notices'=>$notices,'hotgoods'=>$hotgoods,'goods'=>$goods,'slide'=>$slide,'adverti'=>$adverti,'users_info'=>$users_info,'link'=>$link]);
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

    //商品列表
    public function goodslists($id){
        //获取数据 
        //检测是否为顶级分类,是的话显示所有数据
        $info = DB::table('cate')->where('id','=',$id)->first();
        if($info->pid == 0){
            //顶级分类 
            $info->pids = $info->id;
            //获取该分类的所有子类的商品
            $data = DB::table('cate')->join('goods','cate.id','=','goods.cate_id')->where('cate.pid','=',$id)->select('goods.name as gname','goods.logo as glogo','goods.price as gprice','goods.id as gid')->get();
            //获取分类
            $cate = DB::table('cate')->where('pid','=',$id)->get();

            //个人信息
            $uid = session('uid');
            $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
            //查询出友情链接的数据
            $link = DB::select('select * from link order By id asc limit 0,5');

            return view('Home.Index.goodslist',['data'=>$data,'info'=>$info,'cate'=>$cate,'users_info'=>$users_info,'link'=>$link]);        
        }else {
            //子集分类 
            $info->pids = $info->pid;
            //获取该分类的所有子类的商品
            $data = DB::table('cate')->join('goods','cate.id','=','goods.cate_id')->where('cate.id','=',$id)->select('goods.name as gname','goods.logo as glogo','goods.price as gprice','goods.id as gid')->get();
            //获取分类
            $cate = DB::table('cate')->where('pid','=',$info->pid)->get();

            //个人信息
            $uid = session('uid');
            $users_info = DB::table('users_info')->where('uid','=',$uid)->first();
            
            //查询出友情链接的数据
            $link = DB::select('select * from link order By id asc limit 0,5');

            //加载模板
            return view('Home.Index.goodslist',['data'=>$data,'info'=>$info,'cate'=>$cate,'users_info'=>$users_info,'link'=>$link]);
        }
    }

    //商品详情
    public function goodsinfo($id){
        // 获取商品数据
        // $goods = DB::table('goods')->join('goods_spec','goods.id','=','goods_spec.gid')->select('goods.cate_id','goods.name','goods.id as gid','goods_spec.id as gsid','goods_spec.color','goods_spec.pic as gspic')->where('goods.id','=',$id)->orderBy('goods_spec.id','asc')->get();
        $goods = DB::table('goods')->where('id','=',$id)->first();
        //获取颜色和图片
        $spec = DB::table('goods_spec')->where('gid','=',$goods->id)->orderBy('id','asc')->get();
        foreach ($spec as $key => $value) {
            $spec[$key]->pic = explode('@', $value->pic);
        }
        //获取详情
        $info = DB::table('spec_info')->where('spec_id','=',$spec[0]->id)->orderBy('id','asc')->get();
        //获取面包屑
        $crumbs = self::getParents($goods->cate_id);

        //个人信息
        $uid = session('uid');
        $users_info = DB::table('users_info')->where('uid','=',$uid)->first();

        //查询出友情链接的数据
        $link = DB::select('select * from link order By id asc limit 0,5');

        //查询出用户是否收藏了该商品
        $collec = DB::table('user_shopcollect')->where('uid','=',$uid)->where('sid','=',$id)->get();


        //加载模板
        return view('Home.Index.goodsinfo',['crumbs'=>$crumbs,'goods'=>$goods,'info'=>$info,'spec'=>$spec,'users_info'=>$users_info,'link'=>$link,'useid'=>$uid,'shoid'=>$id,'collec'=>$collec]);
    }

    //选择商品颜色
    public function goodscolor(Request $request){
        $cid = $request->input('cid');
        //获取数据
        $data = DB::table('goods_spec')->where('id','=',$cid)->first();
        $data->info = DB::table('spec_info')->where('spec_id','=',$data->id)->get();
        $data->pic = explode('@',$data->pic);
        echo json_encode($data);
        // dd($data);
    }

    //选择商品版本
    public function specinfo(Request $request){
        //获取数据
        $vid = $request->input('vid');
        $data = DB::table('spec_info')->where('id','=',$vid)->first();
        $data->color = DB::table('goods_spec')->where('id','=',$data->spec_id)->value('color');
        echo json_encode($data);
        // dd($data);
    }

    //选择商品数量追加
    public function goodsadd(Request $request){
        $gid = $request->input('gid');
        $sum = $request->input('sum');        
        //获取库存
        $repertory = DB::table('spec_info')->where('id','=',$gid)->value('repertory');
        if($sum > $repertory){
            //超出库存
            return 'error';
        }else {
            return 'success';
        }
    } 

    //详情页面商品收藏
    public function GoodCollect(Request $request){
        //商品id
        $sid = $request->input('id');
        $data['sid'] = $sid;
        //用户id
        $data['uid'] = session('uid');
        //状态码 (1添加  0 删除)
        $stat = $request->input('status');

        //判断
        if ($stat == 1) {
            //执行添加
            if (DB::table('user_shopcollect')->insert($data)) {
                echo "1";
            }
        }else{
            //执行删除
            if (DB::table('user_shopcollect')->where('sid','=',$sid)->delete()) {
                echo "2";
            }
        }
    }

}
