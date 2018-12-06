@extends('Admin.AdminPublic.public')
@section('title','后台角色添加')
@section('content')
	<div class="mws-panel grid_8">
      	<div class="mws-panel-header">
          	<span>Inline Form</span>
          </div>
          <div class="mws-panel-body no-padding">
          	<form class="mws-form" action="/adminrolelist" method="post" enctype="multipart/form-data">
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
          				<label class="mws-form-label"><span style="color: red;font-size: 20px;">*</span>角色名称</label>
          				<div class="mws-form-item">
          					<input type="text" class="large" name="name" value="{{old('name')}}">
          				</div>
          			</div>
          		</div>
                    <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label"><span style="color: red;font-size: 20px;">*</span>状态</label>
                              <div class="mws-form-item">
                                   <ul class="mws-form-list inline">
                                        <li><label><input type="radio" name="status" value="1">激活</label></li>
                                        <li><label><input type="radio" name="status" value="2">禁用</label></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">备注</label>
                              <div class="mws-form-item">
                                   <textarea name="remark" cols="30" rows="5" maxlength="100"></textarea>
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