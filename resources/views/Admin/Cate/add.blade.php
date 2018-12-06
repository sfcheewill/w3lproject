@extends('Admin.AdminPublic.public')
@section('title','后台分类添加')
@section('content')
	<div class="mws-panel grid_8">
      	<div class="mws-panel-header">
          	<span>Inline Form</span>
          </div>
          <div class="mws-panel-body no-padding">
          	<form class="mws-form" action="/admincate" method="post" enctype="multipart/form-data">
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
          				<label class="mws-form-label">分类名称</label>
          				<div class="mws-form-item">
          					<input type="text" class="large" name="name" value="{{old('username')}}">
          				</div>
          			</div>
          			<div class="mws-form-row">
          				<label class="mws-form-label">父类</label>
          				<div class="mws-form-item">
                                   <select class="large" name="pid" id="">
                                        <option value="0">请选择</option>
                                        @foreach($data as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                   </select>
          				</div>
          			</div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">分类logo</label>
                              <div class="mws-form-item">
                                   <input type="file" class="large" name="pic" value="">
                              </div>
                         </div>
          		</div>
          		{{csrf_field()}}
          		<div class="mws-button-row">
          			<input type="submit" value="添加" class="btn btn-danger">
          			<input type="reset" value="重置" class="btn ">
          		</div>
          	</form>
          </div>    	
      </div>
@endsection