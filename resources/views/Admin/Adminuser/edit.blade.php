@extends('Admin.AdminPublic.public')
@section('title','后台管理员修改')
@section('content')
	<div class="mws-panel grid_8">
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
      	<div class="mws-panel-header">
          	<span>Inline Form</span>
          </div>
          <div class="mws-panel-body no-padding">
          	<form class="mws-form" action="/adminuser/{{$data->id}}" method="post">
          		<div class="mws-form-inline">
          			<div class="mws-form-row">
          				<label class="mws-form-label">管理员名称</label>
          				<div class="mws-form-item">
          					<input type="text" class="large" value="{{$data->name}}" readonly>
          				</div>
          			</div>
          			<div class="mws-form-row">
          				<label class="mws-form-label">密码</label>
          				<div class="mws-form-item">
          					<input type="password" name="password" class="large" value="">
          				</div>
          			</div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">确认密码</label>
                              <div class="mws-form-item">
                                   <input type="password" name="repassword" class="large" name="name" value="">
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