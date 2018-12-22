@extends('Admin.AdminPublic.public')
@section('title','后台公告列表')
@section('content')
	<html>
 <head></head>
 <script src="/static/admins/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>后台公告列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
     <form action="/adminnotice" method="get">
      <label>搜索: <input type="text" aria-controls="DataTables_Table_1" name="keyword" value="{{$request['keyword'] or ''}}" /></label>
      <input type="submit" value="搜索">
      </form>
     </div>
     <div id="mytable">
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 120px;">选项</th>
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 120px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 334px;">用户名</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $value)
       <tr class="odd">
        <td class=" "><input type="checkbox" value="{{$value->id}}" @if(in_array($value->id,$uids)) checked @endif></td> 
        <td class="  sorting_1">{{$value->id}}</td> 
        <td class=" ">{{$value->username}}</td> 
        </td> 
       </tr>
       @endforeach
       <input type="hidden" value="{{$sendid}}" id="sendid" >
       <tr class="odd">
        <td colspan="6">
          <a href="javascript:void(0)" onclick="chooes(true)" class="btn btn-primary">全选</a>
          <a href="javascript:void(0)" onclick="chooes(false)" class="btn btn-primary">全不选</a>
          <a href="javascript:void(0)" onclick="fchooes()" class="btn btn-primary">反选</a>
        </td>
       </tr>
       <tr>
        <td colspan="6">
          <a href="javascript:void(0)" onclick="sendstand(this)" class="btn btn-danger">发送</a>
        </td>
       </tr>
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
     
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
      //ajax分页
      function page(page){
        //Ajax
        $.get('/adminnotice',{page:page},function(data){
          $('#mytable').html(data);
        });
      }

      //全选/反选
      function chooes(flag){
       $('#DataTables_Table_1').find('tr').each(function(){
          $(this).find(':checkbox').attr('checked',flag);
        }); 
      };

      //反选
      function fchooes(){
        $('#DataTables_Table_1').find('tr').each(function(){
          $(this).find(':checkbox').attr('checked',!$(this).find(':checkbox').attr('checked'));
        });
      }

      //ajax发送
      function sendstand(obj){
        var s = confirm('确定要发送吗');
        if(!s){
          return;
        }
        //存储id
        var ids = [];
        //获取要删除的id
        $('#DataTables_Table_1').find('tr').each(function(){
          $(this).find(':checked').each(function(){
            ids.push($(this).val());
          });
        });
        // 获取模板的id
        sendid = $('#sendid').val();
        //ajax
        $.get('/sendshow',{ids:ids,sendid:sendid},function(data){
          
          if (data=0) {

          confirm('请至少选中一条数据');        
            
          }else{
            location.href = '/sendstand';
            confirm('发送成功');
          }
        });
      }
 </script>
</html>
@endsection