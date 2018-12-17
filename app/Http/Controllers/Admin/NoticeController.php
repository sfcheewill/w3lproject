<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\NoticeRequest;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取当前页码数
        $page = $request->input('page');
        if(empty($page)){
            $page = 1;
        }
        //获取数据总条数
        $total = DB::table('notice')->count();
        //每页显示条数
        $num = 5;
        //获取总页数
        $pages = ceil($total / $num);

        if($pages == 0){
            $pagess[] = 1;
        }

        for($i = 1; $i <= $pages; $i++){
            $pagess[] = $i;
        }
        //偏移量
        $offset = ($page-1) * $num;
        //获取数据
        $data = DB::select("select * from notice order by id asc limit $offset,$num");
        $pattern = '/<img.*?src=\s*?"?([^"\s]+)(?!\/>)"?\s*?/is';
        // foreach($data as $v){
        //     $url = preg_match_all($pattern,$v->content,$match);
        //     var_dump($match);
        // }
        //判断是否为ajax
        if($request->ajax()){
            return view('Admin.Notice.page',['data'=>$data,'pagess'=>$pagess,'page'=>$page]);
        }

        //加载公告列表模板 分配数据
        return view('Admin.Notice.index',['data'=>$data,'pagess'=>$pagess,'page'=>$page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载广告添加模板
        return view('Admin.notice.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticeRequest $request)
    {
        //获取数据
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        $data['addtime'] = time();

        //入库
        if(DB::table('notice')->insert($data)){
            return redirect('/adminnotice')->with('success','添加公告成功');
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
        //获取数据
        $data = DB::table('notice')->where('id','=',$id)->first();
        //加载修改模板 分配数据
        return view('Admin.notice.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticeRequest $request, $id)
    {
        //获取数据
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');
        $data['addtime'] = time();
        //获取原来的图片
        $info = DB::table('notice')->where('id','=',$id)->first();
        $pattern = '/<img.*?src=\s*?"?([^"\s]+)(?!\/>)"?\s*?/is';
        $url = preg_match_all($pattern,$info->content,$match);
        //执行修改
        if(DB::table('notice')->where('id','=',$id)->update($data)){
            //获取新的数据
            $newinfo = DB::table('notice')->where('id','=',$id)->first();
            $newurl =  preg_match_all($pattern,$newinfo->content,$newmatch);
            if(!empty($match[1]) && !empty($newmatch[1])){
                foreach($match[1] as $row){ //要删除的
                    $flag = true; 
                    foreach($newmatch[1] as $rows){ //新修改的
                        if($row == $rows){
                            $flag = false;
                        }
                    }
                    if($flag){
                        unlink('.'.$row);
                    }
                }   
            }
            return redirect('/adminnotice')->with('success','修改公告成功');
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
        //删除图片 
        $info = DB::table('notice')->where('id','=',$id)->first();
        $pattern = '/<img.*?src=\s*?"?([^"\s]+)(?!\/>)"?\s*?/is';
        $url = preg_match_all($pattern,$info->content,$match);
        if(!empty($match[1])){
            foreach ($match[1] as $v){
                unlink('.'.$v);
            }
        }
        // 执行删除
        if(DB::table('notice')->where('id','=',$id)->delete()){
            return redirect('/adminnotice');
        }
    }

    //批量删除公告
    public function del(Request $request){
        //获取数据
        $ids = $request->input('ids');
        //检测是否选中数据
        if(empty($ids)){
            echo 0;
            exit;
        }
        // 遍历删除数据
        foreach($ids as $v){
            //删除图片 
            $info = DB::table('notice')->where('id','=',$v)->first();
            $pattern = '/<img.*?src=\s*?"?([^"\s]+)(?!\/>)"?\s*?/is';
            $url = preg_match_all($pattern,$info->content,$match);
            if(!empty($match[1])){
                foreach ($match[1] as $p){
                    unlink('.'.$p);
                }
            }
            DB::table('notice')->where('id','=',$v)->delete();
        }
        //获取当前页码数
        $page = $request->input('page');
        if(empty($page)){
            $page = 1;
        }
        //获取数据总条数
        $total = DB::table('notice')->count();
        //每页显示条数
        $num = 5;
        //获取总页数
        $pages = ceil($total / $num);

        if($pages == 0){
            $pagess[] = 1;
        }

        for($i = 1; $i <= $pages; $i++){
            $pagess[] = $i;
        }
        //偏移量
        $offset = ($page-1) * $num;
        //获取数据
        $data = DB::select("select * from notice order by id asc limit $offset,$num");

        return view('Admin.Notice.page',['data'=>$data,'pagess'=>$pagess,'page'=>$page]);
    }
}
