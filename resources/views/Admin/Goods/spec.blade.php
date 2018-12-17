@extends('Admin.AdminPublic.public')
@section('title','后台商品规格添加')
@section('content')
	<div class="mws-panel grid_8">
      	<div class="mws-panel-header">
          	<span>后台商品规格添加</span>
          </div>
          <div class="mws-panel-body no-padding">
          	<form class="mws-form" action="/adminsavespec" method="post" enctype="multipart/form-data">
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
          				<label class="mws-form-label">商品名称</label>
          				<div class="mws-form-item">
          					<input type="text" class="large" name="" value="{{$data->name}}" readonly>
          				</div>
          			</div>

                         <div class="mws-form-row">
                              <label class="mws-form-label">颜色</label>
                              <div class="mws-form-item">
                                   <input type="text" class="large" name="color" value="">
                              </div>
                         </div>
     
                         <div class="mws-form-row">
                              <label class="mws-form-label">图片</label>
                              <div class="mws-form-item">
                                   <input type="file" class="large" name="pic[]" value="" multiple>
                              </div>
                         </div>
                         
          		</div>
          		{{csrf_field()}}
          		<div class="mws-button-row">
                         <input type="hidden" name="gid" value="{{$data->id}}">
          			<input type="submit" value="添加" class="btn btn-danger">
          			<input type="reset" value="重置" class="btn ">
          		</div>
          	</form>
          </div>    	
      </div>
@endsection