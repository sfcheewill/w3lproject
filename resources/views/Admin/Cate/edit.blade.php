@extends('Admin.AdminPublic.public')
@section('title','后台分类修改')
@section('content')
	<div class="mws-panel grid_8">
      	<div class="mws-panel-header">
          	<span>Inline Form</span>
          </div>
          <div class="mws-panel-body no-padding">
          	<form class="mws-form" action="/admincate/{{$data->id}}" method="post" enctype="multipart/form-data">
          		<div class="mws-form-inline">
          			<div class="mws-form-row">
          				<label class="mws-form-label">分类名称</label>
          				<div class="mws-form-item">
          					<input type="text" class="large" name="name" value="{{$data->name}}">
          				</div>
          			</div>
          			<div class="mws-form-row">
          				<label class="mws-form-label">父类</label>
          				<div class="mws-form-item">
          					<input type="text" class="large" value="{{$data->pid}}" readonly>
          				</div>
          			</div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">分类logo</label>
                              <div class="mws-form-item">
                                   <img src="{{$data->pic}}" alt="">
                                   <input type="file" name="pic" class="large" value="">
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