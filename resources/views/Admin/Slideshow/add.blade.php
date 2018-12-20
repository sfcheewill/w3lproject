@extends('Admin.AdminPublic.public')
@section('title','后台商品添加')
@section('content')
	<div class="mws-panel grid_8">
      	<div class="mws-panel-header">
          	<span>后台商品添加</span>
          </div>
          <script type="text/javascript" charset="utf-8" src="/static/admins/ueditor/ueditor.config.js"></script>
          <script type="text/javascript" charset="utf-8" src="/static/admins/ueditor/ueditor.all.min.js">
          </script>
          <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
          <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加
          载的中文，那最后就是中文-->
          <script type="text/javascript" charset="utf-8" src="/static/admins/ueditor/lang/zh-cn/zh-cn.js">
          </script>
          <div class="mws-panel-body no-padding">
          	<form class="mws-form" action="/adminslideshow" method="post" enctype="multipart/form-data">
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

	                <div class="mws-form-row">
	                    <label class="mws-form-label">轮播图片</label>
	                    <div class="mws-form-item">
	                           <input type="file" name="picture" class="large">
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