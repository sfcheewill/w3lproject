@extends('Admin.AdminPublic.public')
@section('title','后台公告修改')
@section('content')
	<div class="mws-panel grid_8">
      	<div class="mws-panel-header">
          	<span>后台公告修改</span>
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
          	<form class="mws-form" action="/adminnotice/{{$data->id}}" method="post" enctype="multipart/form-data">
          		<div class="mws-form-inline">
          			<div class="mws-form-row">
          				<label class="mws-form-label">标题</label>
          				<div class="mws-form-item">
          					<input type="text" class="large" name="title" value="{{$data->title}}">
          				</div>
          			</div>
          			<div class="mws-form-row">
          				<label class="mws-form-label">内容</label>
          				<div class="mws-form-item">
          					<script id="editor" type="text/plain" name="content" style="width:1200px;height:500px;">{!! $data->content !!}</script>
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
      <script type="text/javascript">
          //实例化编辑器
          //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接
          //调用UE.getEditor('editor')就能拿到相关的实例
          var ue = UE.getEditor('editor');
     </script>
@endsection