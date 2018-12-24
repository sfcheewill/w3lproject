@extends('Admin.AdminPublic.public')
@section('title','后台会员订单列表')
@section('content')
	<html>
 <head></head>
 <script src="/static/admins/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>后台会员订单列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
     </div>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 255px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">会员名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">订单号</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">订单总价</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">下单时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">下单状态</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 334px;">付款时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">订单状态</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 334px;">收货地址</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 400px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $value)
       <tr class="odd"> 
        <td class="  sorting_1">{{$value->id}}</td> 
        <td class=" ">{{$value->username}}</td> 
        <td class=" ">{{$value->order_number}}</td> 
        <td class=" ">{{$value->total_price}}</td> 
        <td class=" ">{{date('Y-m-d',$value->order_time)}}</td> 
        <td class=" ">{{$value->buy_status}}</td> 
        <td class=" ">@if(!empty($value->buy_time)) {{date('Y-m-d H:i',$value->buy_time)}} @else 未支付 @endif</td> 
        <td class="order_status">{{$value->order_status or '未支付'}}</td> 
        <td class=" ">{{$value->address}}</td> 
        <td class=" ">
          @if($value->order_status == '未发货') <a href="javascript:void(0);" class="btn btn-primary send">发货</a> @endif
          <a href="/adminorder/{{$value->id}}" class="btn btn-success">查看订单详情</a>
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
 </body>
 <script>
    $('.send').click(function(){
      var o = $(this);
      var id = $(this).parents('tr').find('td:first').html();
      //Ajac
      $.get('/ordersend',{id:id},function(data){
        if(data == 'success'){
          //发货成功
          o.parents('tr').find('.order_status').html('已发货');
          o.remove();
        }
      });
    });
 </script>
</html>
@endsection