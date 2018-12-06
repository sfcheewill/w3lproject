@extends("Admin.AdminPublic.public")
@section('title','后台分配角色')
@section('content')
<html>
 <head></head>
 <body>
  <div class="container"> 
   <div class="container"> 
    <div class="mws-panel-body no-padding"> 
     <form class="mws-form" action="/saverole" method="post"> 
      <div class="mws-form-inline"> 
       <div class="mws-form-row"> 
        <label class="mws-form-label">角色信息</label> 
        <div class="mws-form-item clearfix"> 
         <h4>当前用户: <span class="text-info">{{$info->name}}</span> 的角色信息</h4> 
         <ul class="mws-form-list inline">
         @foreach($role as $row) 
          <li><input type="radio" class="large" name="rid" value="{{$row->id}}" @if($rid==$row->id) checked @endif >{{$row->name}}</li>
          @endforeach
         </ul> 
        </div> 
       </div> 
      </div> 
      <div class="mws-button-row">
      {{csrf_field()}}
      <input type="hidden" name="uid" value="{{$info->id}}">
       <input value="分配角色" class="btn btn-danger" type="submit" /> 
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
