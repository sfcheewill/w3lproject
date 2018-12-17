@extends('Admin.AdminPublic.public')
@section('title','后台会员列表')
@section('content')
	<html>
 <head></head>
 <script src="/static/admins/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>后台会员列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
     <form action="/adminusers" method="get">
      <label>搜索: <input type="text" aria-controls="DataTables_Table_1" name="keyword" value="{{$request['keyword'] or ''}}" /></label>
      <input type="submit" value="搜索">
      </form>
     </div>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 255px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">会员名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">邮箱</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">手机</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">状态</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 334px;">添加时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 334px;">修改时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 380px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $value)
       <tr class="odd"> 
        <td class="  sorting_1">{{$value->id}}</td> 
        <td class=" ">{{$value->username}}</td> 
        <td class=" ">{{$value->email}}</td> 
        <td class=" ">{{$value->phone}}</td> 
        <td class=" ">{{$value->status}}</td> 
        <td class=" ">{{$value->created_at}}</td> 
        <td class=" ">{{$value->updated_at}}</td> 
        <td class=" ">
          <a href="/adminusers/{{$value->id}}" class="btn btn-info">查看详情</a>
          <a href="#" class="btn btn-primary">查看收货地址</a>
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
      $('.del').click(function(){
        var s = confirm('确定要删除吗');
        if(!s){
          return false;
        }
      });
 </script>
</html>
@endsection