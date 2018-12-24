@extends('Admin.AdminPublic.public')
@section('title','后台商品规格列表')
@section('content')
	<html>
 <head></head>
 <script src="/static/admins/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>后台商品规格列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
     <a href="/admingoods" class="btn btn-info">返回</a>
     </div>
     <div id="mytable">
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 120px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">颜色</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 226px;">图片</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 226px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $value)
       <tr class="odd">
        <td class="  sorting_1">{{$value->id}}</td> 
        <td class=" ">{{$value->color}}</td> 
        <td class=" ">
          @foreach($value->pic as $r)
            <img src="{{$r}}" width="50" alt=""> 
          @endforeach
        </td>
        <td class=" ">
        <form action="/admingoodsspec/{{$value->gid}}" method="post" style="display: inline-block;">
          {{method_field('DELETE')}}
          {{csrf_field()}}
          <button href="" class="btn btn-danger del">删除</button>
        </form>
            <a href="/admingoodsspec/{{$value->id}}/edit" class="btn btn-info">修改</a>
            <a href="/admingoodsspec/{{$value->id}}" class="btn btn-success">查看详情</a>
            <a href="/admingoodsspec/{{$value->id}}/addinfo" class="btn btn-primary">添加详情</a>
        </td> 
       </tr>
       @endforeach
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      {{$data->render()}}
     </div>
     </div>
    </div> 
   </div> 
  </div>
 </body>
 <script>
      $('.del').live('click',function(){
        var s = confirm('确定要删除吗');
        if(!s){
          return false;
        }
      });
 </script>
</html>
@endsection