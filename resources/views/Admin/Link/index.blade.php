@extends('Admin.AdminPublic.public')
@section('title','后台会员列表')
@section('content')
	<html>
 <head></head>
 <script src="/static/admins/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>后台友情链接列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
     <form action="" method="get">
      <label>搜索网站名称: <input type="text" aria-controls="DataTables_Table_1" name="keyword" value="{{$request['keyword'] or ''}}" /></label>
      <input type="submit" value="搜索">
      </form>
     </div>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 255px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">网站名称</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">网址</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">电子邮箱</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">网站介绍</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 334px;">状态</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 334px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $value)
       <tr class="odd"> 
        <td class=" ">{{$value->id}}</td> 
        <td class=" ">{{$value->name}}</td> 
        <td class=" ">{{$value->url}}</td> 
        <td class=" ">{{$value->email}}</td> 
        <td class=" ">{{$value->present}}</td> 
        <td class="status{{$value->id}}">{{$value->status}}</td>  
        <td class=" ">
            <button class="btn btn-success yes"  value="2" onclick="select(this,2)">同意</button>
            <button class="btn btn-warning no" value="3" onclick="select(this,3)">拒绝</button>
        </td>  
       </tr>
       @endforeach
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      {{$data->appends($request)->render()}}
     </div>
    </div> 
   </div> 
  </div>
 </body>
 <script>
      //点击同意
      // $('.yes').click(function(){
      //   //获取id
      //   id = $(this).parents('tr').find('td:first').html();
      //   v = $(this).attr('value');
      //   $.get('/links',{id:id,v:v},function(data){
      //     if (data==1) {

      //         $('.status'+id).html('同意');
      //     }
      //   });
      // })
      function select(obj,n){
          //获取id
          id = $(obj).parents('tr').find('td:first').html();
          $.get('/links',{id:id,n:n},function(data){
            if (data==2) {
              $('.status'+id).html('同意');
            }else if(data==3){
              $('.status'+id).html('拒绝');
            }
          });
      }
 </script>
</html>
@endsection