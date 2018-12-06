@extends("Admin.AdminPublic.public")
@section('title','后台分配权限')
@section('content')
<html>
 <head></head>
 <body>
  <div class="container"> 
   <div class="container"> 
    <div class="mws-panel-body no-padding"> 
     <form class="mws-form" action="/saveauth" method="post"> 
      <div class="mws-form-inline"> 
       <div class="mws-form-row"> 
        <label class="mws-form-label">权限信息</label> 
        <div class="mws-form-item clearfix"> 
         <h4>当前角色: <span class="text-info">{{$info->name}}</span> 的权限信息</h4> 
         <ul class="mws-form-list inline">
         @foreach($data as $row) 
          <li><input type="checkbox" class="large" name="nodes[]" value="{{$row->id}}" @if(in_array($row->id,$nids)) checked @endif >{{$row->name}}</li>
          @endforeach
         </ul> 
        </div> 
       </div> 
      </div> 
      <div class="mws-button-row">
      {{csrf_field()}}
      <input type="hidden" name="rid" value="{{$info->id}}">
       <input value="分配权限" class="btn btn-danger" type="submit" /> 
       <input value="重置" class="btn " type="reset" /> 
      </div> 
     </form> 
    </div> 
    <!-- Panels End --> 
   </div> 
   <!-- Panels End --> 
  </div>
 </body>
</html>
@endsection
