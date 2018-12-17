<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //获取分类
    public static function getCates(){
      $data = DB::table('cate')->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths','asc')->get();
        //遍历
        foreach($data as $key=>$value){
            //计算逗号
            $arr = explode(',',$value->path);
            $len = count($arr)-1;
            //添加分隔符
            $data[$key]->name = str_repeat('--|',$len) . $value->name;
        }
        //返回数据
        return $data;
    }

    //图片上传
    public static function uploads($file,$request){
        //文件后缀
        $extion = $request->file($file)->getClientOriginalExtension();
        //新文件名
        $newName = md5($request->file($file)->getClientOriginalName().time()) . '.' . $extion;
        //上传位置
        $savePath = './uploads/cate/'.date('Y-m-d').'/';
        $request->file($file)->move($savePath,$newName);
        //拼接完整路径
        $pic = $savePath . $newName;
        //返回上传文件路径
        return $pic;
    }

    public function index(Request $request)
    {
        //获取关键词
        $keyword = $request->input('keyword');
        //获取数据
        // $data = DB::table('cate')->select(DB::raw('*,concat(path,",",id) as paths'))->where('name','like','%'.$keyword.'%')->orderBy('paths','asc')->paginate(5);
        $data = DB::table('cate')->where('pid','=',0)->orderBy('id','asc')->paginate(5);
        //遍历
        // foreach($data as $key=>$value){
        //     //计算逗号
        //     $arr = explode(',',$value->path);
        //     $len = count($arr)-1;
        //     //添加分隔符
        //     $data[$key]->name = str_repeat('--|',$len) . $value->name;
        // }
        //加载分类列表模板
        return view('Admin.Cate.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取分类信息
        $data = DB::table('cate')->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths','asc')->get();
        //遍历
        foreach($data as $key=>$value){
            //计算逗号
            $arr = explode(',',$value->path);
            $len = count($arr)-1;
            //添加分隔符
            $data[$key]->name = str_repeat('--|',$len) . $value->name;
        }
        //加载添加分类模板 分配数据
        return view('Admin.Cate.add',['data'=>$data]);
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
        $data = $request->except(['_token']);
        if($request->hasFile('pic')){
            $data['pic'] = ltrim(self::uploads('pic',$request),'.');
        }else{
            $data['pic'] = '';
        }
        $pid = $request->input('pid');
        //判断是否为顶级分类
        if($pid == '0'){
            $data['path'] = '0';
        }else {
            //获取父类
            $info = DB::table('cate')->where('id','=',$pid)->first();
            $data['path'] = $info->path . ',' . $info->id;
        }
        //入库
        if(DB::table('cate')->insert($data)){
            return redirect('/admincate')->with('success','添加分类成功');
        }else {
            return redirect('/admincate/create')->with('error','添加分类失败');
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
        $data = DB::table('cate')->where('pid','=',$id)->orderBy('id','asc')->paginate(5);
        if(empty($data[0])){
            return back()->with('error','已经是最底级分类');
        }
        //加载模板
        return view('Admin.Cate.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取数据
        $data = DB::table('cate')->where('id','=',$id)->first();
        //获取分类名称
        if($data->pid == '0'){
            $data->pid = '顶级分类';
        }else {
            $data->pid = DB::table('cate')->where('id','=',$data->pid)->value('name');
        }
        //加载分类修改模板
        return view('Admin.Cate.edit',['data'=>$data]);
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
        //获取数据
        //判断是否上传图片修改logo
        if($request->hasFile('pic')){
            $data = $request->except(['_token','_method']);
            $data['pic'] = ltrim(self::uploads('pic',$request),'.');
            //删除原来的logo图片
            $oldpic = DB::table('cate')->where('id','=',$id)->value('pic');
            unlink('.'.$oldpic);
        }else {
            $data = $request->except(['_token','_method','pic']);            
        }
        //执行修改
        if(DB::table('cate')->where('id','=',$id)->update($data)){
            return redirect('/admincate')->with('success','修改分类成功');
        }else {
            return redirect('/admincate')->with('error','修改分类失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除分类
        //判断是否有子类
        $res = DB::table('cate')->where('pid','=',$id)->count();
        if($res > 0){
            return back()->with('error','该分类有子类,无法删除');
        }
        $img = DB::table('cate')->where('id','=',$id)->value('pic');
        //执行删除
        if(DB::table('cate')->where('id','=',$id)->delete()){
          unlink('.'.$img);
          return redirect('/admincate')->with('success','删除分类成功');  
        }else {
            return redirect('/adminuser')->with('error','删除分类失败');
        }
    }
}
