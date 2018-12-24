@extends('Admin.AdminPublic.public')
@section('title','后台商品规格修改')
@section('content')
	<div class="mws-panel grid_8">
      	<div class="mws-panel-header">
          	<span>后台商品规格修改</span>
          </div>
          <div class="mws-panel-body no-padding">
          	<form class="mws-form" action="/admingoodsspec/{{$data->id}}" method="post" enctype="multipart/form-data">
          		<div class="mws-form-inline">
          			<div class="mws-form-row">
          				<label class="mws-form-label">颜色</label>
          				<div class="mws-form-item">
          					<input type="text" class="large" name="color" value="{{$data->color}}">
          				</div>
          			</div>
                         
                         <div class="mws-form-row">
                              <label class="mws-form-label">图片</label>
                              <div class="mws-form-item">
                                   @foreach($data->pic as $r)
                                   <img src="{{$r}}" alt="" width="50">
                                   @endforeach
                                   <input type="file" name="pic[]" class="large" multiple>
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