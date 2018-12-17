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