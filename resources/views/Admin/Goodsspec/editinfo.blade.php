@extends('Admin.AdminPublic.public')
@section('title','后台规格详情添加')
@section('content')
	<div class="mws-panel grid_8">
      	<div class="mws-panel-header">
          	<span>后台规格详情添加</span>
          </div>
          <div class="mws-panel-body no-padding">
          	<form class="mws-form" action="/adminspecinfo/{{$data->id}}" method="post" enctype="multipart/form-data">
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
                              <label class="mws-form-label">版本</label>
                              <div class="mws-form-item">
                                   <input type="text" class="large" name="version" value="{{$data->version}}">
                              </div>
                         </div>

                         <div class="mws-form-row">
                              <label class="mws-form-label">价格</label>
                              <div class="mws-form-item">
                                   <input type="text" class="large" name="price" value="{{$data->price}}">
                              </div>
                         </div>

                          <div class="mws-form-row">
                              <label class="mws-form-label">简介</label>
                              <div class="mws-form-item">
                                   <input type="text" class="large" name="desc" value="{{$data->desc}}">
                              </div>
                         </div>

                         <div class="mws-form-row">
                              <label class="mws-form-label">库存</label>
                              <div class="mws-form-item">
                                   <input type="text" class="large" name="repertory" value="{{$data->repertory}}">
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