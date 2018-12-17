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
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 334px;">标题</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 442px;">内容</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 226px;">修改时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 226px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $value)
       <tr class="odd">
        <td class=" "><input type="checkbox" value="{{$value->id}}"></td> 
        <td class="  sorting_1">{{$value->id}}</td> 
        <td class=" ">{{$value->title}}</td> 
        <td class=" " style="display: inline-block;height: 150px;overflow: scroll;">{!!$value->content!!}</td> 
        <td class=" ">{{date('Y-m-d H:i:s',$value->addtime)}}</td>
        <td class=" ">
        <form action="/adminnotice/{{$value->id}}" method="post" style="display: inline-block;">
          {{method_field('DELETE')}}
          {{csrf_field()}}
          <button href="" class="btn btn-danger del">删除</button>
        </form>
            <a href="/adminnotice/{{$value->id}}/edit" class="btn btn-info">修改</a>
        </td> 
       </tr>
       @endforeach
       <tr class="odd">
        <td colspan="6">
          <a href="javascript:void(0)" onclick="chooes(true)" class="btn btn-primary">全选</a>
          <a href="javascript:void(0)" onclick="chooes(false)" class="btn btn-primary">全不选</a>
          <a href="javascript:void(0)" onclick="fchooes()" class="btn btn-primary">反选</a>
        </td>
       </tr>
       <tr>
        <td colspan="6">
          <a href="javascript:void(0)" onclick="del(this)" class="btn btn-danger">删除</a>
        </td>
       </tr>
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
     @foreach($pagess as $row)
      @if($row == $page)
       <a href="javascript:void(0)" onclick="page({{$row}})" title="{{$row}}" class="btn btn-success">{{$row}}</a>
      @else
        <a href="javascript:void(0)" onclick="page({{$row}})" title="{{$row}}" class="btn btn-default">{{$row}}</a>
      @endif
     @endforeach
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

      //ajax删除
      function del(obj){
        var s = confirm('确定要删除吗');
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

        //ajax
        $.get('/noticedel',{ids:ids},function(data){
          if(data != 0){
            //根据ids删除tr
            // for(var i = 0;i < ids.length; i++){
            //   $('input[value="'+ids[i]+'"]').parents('tr').remove();
            // }
            var page = $(obj).parents('table').next('#pages').find('a').attr('title');
            $.get('/adminnotice',{page:page},function(data){
              $('#mytable').html(data);
            })
          }else{
            alert('请至少选中一条数据');
          }
        });
      }
 </script>
</html>
@endsection