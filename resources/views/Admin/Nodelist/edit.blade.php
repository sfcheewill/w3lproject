@extends('Admin.AdminPublic.public')
@section('title','后台权限修改')
@section('content')
     <div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>权限修改</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form class="mws-form" action="/adminnodelist/{{$data->id}}" method="post" enctype="multipart/form-data">
               @if (count($errors) > 0)
                        <div class="alert alert-danger">
                         <div class="mws-form-message error">
                           <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach
                           </ul>
                         </div>
                     </div>
                    @endif
                    <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label"><span style="color: red;font-size: 20px;">*</span>权限名称</label>
                              <div class="mws-form-item">
                                   <input type="text" class="large" name="name" value="{{$data->name}}">
                              </div>
                         </div>
                    </div>
                     <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label"><span style="color: red;font-size: 20px;">*</span>控制器名称</label>
                              <div class="mws-form-item">
                                   <input type="text" class="large" name="mname" value="{{$data->mname}}">
                              </div>
                         </div>
                    </div>
                     <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label"><span style="color: red;font-size: 20px;">*</span>方法名称</label>
                              <div class="mws-form-item">
                                   <input type="text" class="large" name="aname" value="{{$data->aname}}">
                              </div>
                         </div>
                    </div>
                    <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label"><span style="color: red;font-size: 20px;">*</span>状态</label>
                              <div class="mws-form-item">
                                   <ul class="mws-form-list inline">
                                        <li><label><input type="radio" name="status" @if($data->status==1) checked @endif value="1">激活</label></li>
                                        <li><label><input type="radio" name="status" @if($data->status==2) checked @endif value="2">禁用</label></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="mws-button-row">
                         <input type="submit" value="修改" class="btn btn-danger">
                         <input type="reset" value="重置" class="btn ">
                    </div>
               </form>
          </div>         
      </div>
@endsection