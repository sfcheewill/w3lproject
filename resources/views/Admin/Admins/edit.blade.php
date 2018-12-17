@extends('Admin.AdminPublic.public')
@section('title','修改管理员密码')
@section('content')
	<div class="mws-panel grid_8">
      	<div class="mws-panel-header">
          	<span>修改管理员密码</span>
          </div>
          <div class="mws-panel-body no-padding">
          	<form class="mws-form" action="/admin/{{$data->id}}" method="post" enctype="multipart/form-data">
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
          				<label class="mws-form-label">管理员名称</label>
          				<div class="mws-form-item">
          					<input type="text" class="large" name="name" readonly value="{{$data->name}}">
          				</div>
          			</div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">新密码</label>
                              <div class="mws-form-item">
                                   <input type="password" class="large" name="password" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">确认密码</label>
                              <div class="mws-form-item">
                                   <input type="password" class="large" name="repassword" value="">
                              </div>
                         </div>
          		</div>
          		{{csrf_field()}}
                    {{method_field('PUT')}}
          		<div class="mws-button-row">
          			<input type="submit" value="修改" class="btn btn-danger">
          			<input type="reset" value="重置" class="btn ">
          		</div>
          	</form>
          </div>    	
      </div>
@endsection