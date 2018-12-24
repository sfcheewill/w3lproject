<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\AdminAwardInsert;
class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 抽奖模块管理首页
    public function index()
    {
        $data = DB::table('award')->paginate(10);
        return view('Admin.Award.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Award.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(AdminAwardInsert $request)
    {
        // 获取传递过来的参数
        $data=$request->except('_token');
        // 判断是否有文件上传
        if ($request->has('pic')) {
            // 初始化图片名
            $name =  time()+rand(1,10000);
            // 获取文件上传后缀
            $ext = $request->file('pic')->getClientOriginalExtension();
            // 把文件上传文件移动到指定的位置
            $request->file("pic")->move('./uploads/award/'.date("Y-m-d"),$name.".".$ext);
            // 获取文件上传路径
            $data['pic'] = '/uploads/award/'.date("Y-m-d").'/'.$name.".".$ext;
            if (DB::table('award')->insert($data)) {
                return redirect('/award')->with('success','添加抽奖模板成功');
            }
        }else{
            return redirect('/award')->with('error','添加抽奖模板失败');
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
        $data = DB::table('award')->where('id','=',$id)->first();
       if ($data) {
           // 删除图片
            unlink('.'.$data->pic);
            if(DB::table('award')->where('id','=',$id)->delete()){
                return redirect('/award')->with('success','删除成功');
            }  
       }else{
            return redirect('/award')->with('error','删除失败'); 
       }
    }
}
