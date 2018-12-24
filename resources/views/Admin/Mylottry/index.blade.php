@extends('Admin.AdminPublic.public')
@section('title','广告图片列表')
@section('content')
	<html>
 <head></head>
 <script src="/static/admins/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>广告图片列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
     <form action="/admingoods" method="get">
      <label>搜索: <input type="text" aria-controls="DataTables_Table_1" name="keyword" value="" /></label>
      <input type="submit" value="搜索">
      </form>
     </div>
     <div id="mytable">
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 120px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">用户名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 400px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($users as $value)
       <tr class="odd" >
        <td class="sorting_1" style="width:10%">{{$value->id}}</td> 
        <td class="" style="width:15%">{{$value->username}}</td> 
        <td class=" " style="width:10%">
          <a href="/mylottry/{{$value->id}}" class="btn btn-success">查看优惠券</a>
           <!--  <a href="/advertising/{{$value->id}}/edit" class="btn btn-info">修改</a> -->
        </td> 
       </tr>
       @endforeach
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
    	{{$users->render()}}
     </div>
     </div>
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection