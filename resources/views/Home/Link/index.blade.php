@extends('Home.HomePublic.public')
@section('title','友情链接')
@section('content')
<hr>
<br>
    <link type="text/css" rel="stylesheet" href="/static/homes/link/a.css">
  <link type="text/css" rel="stylesheet" href="/static/homes/link/link.css">    
  <script type="text/javascript" src="/static/homes/link/base.js"></script>
<body>  
  <div class="w">
    <div class="link_box">
      <div class="link_top"><div class="top_right"></div><div class="top_left"></div></div> 
      <div class="link_content">
        <h3 class="link_tit">友情链接</h3>
        <ul class="link_list">
            
            @foreach($data as $value)
            @if($value->status ==2)
            <li><a href="http://{{$value->url}}" target="_blank">{{$value->name}}</a></li>
            @endif
            @endforeach
            
        </ul>
      </div>
      <div class="link_bottom"><div class="bottom_right"></div><div class="bottom_left"></div></div>
    </div>
    <div class="link_box_a">
      <div class="link_top">
        <div class="top_right"></div>
        <div class="top_left"></div>
      </div>
      <div class="link_content">
        <h3 class="link_tit">申请友情链接</h3>
        <ul class="link_step">
          <li class="link_step_tit">申请步骤：</li>
          <li>
            <div class="float_Left">
              1.</div>
            <div class="margin_l_12">
              请先在贵网站做好w3l的文字友情链接：
              <br> 链接文字：w3l链接地址：
              <a href="www.w3lproject" target="_blank">www.w3lproject</a></div>
          </li>
          <li>2.做好链接后，请在右侧填写申请信息。w3l只接受申请文字友情链接。</li>
          <li>
            <div class="float_Left"> 3.</div>
            <div class="margin_l_12">
              已经开通我站友情链接且内容健康，符合本站友情链接要求的网站，经w3l管理员审核后，可以显示在此友情链接页面。</div>
          </li>
          <li>
            <div class="float_Left"> 4.</div>
            <div class="margin_l_12">
              请通过右侧提交申请，注明：友情链接申请。</div>
          </li>
        </ul>
        <form id="frm_submit" action="/homelink" method="post">
        <table class="link_table" width="309" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td colspan="2" class="link_step_tit" valign="top" height="29">
              申请信息</td>
          </tr>
          <tr>
            <td height="29">
              网站名称：
            </td>
            <td height="29">
              <input id="name" name="name" type="text" class="w247" placeholder="请用中文或字母填写网站名称"><br>
              <span id="span1"></span>
            </td>
          </tr>
          <tr>
            <td height="29">
              网&nbsp;&nbsp;&nbsp;&nbsp;址：
            </td>
            <td height="29">
              <input id="url" name="url" type="text" class="w247" value="" placeholder="请填入网址 例www.w3lproject.com"><br>
              <span id="span2"></span>
            </td>
          </tr>
          <tr>
            <td height="35">
              电子邮箱：
            </td>
            <td height="29">
              <input id="email" name="email" type="text" class="w247"><br>
              <span id="span3"></span>
            </td>
          </tr>
          <tr>
            <td width="61" valign="top" height="29">
              网站介绍：
            </td>
            <td width="348" valign="top">
              <textarea id="present" name="present" cols="" rows="" class="w247h60"></textarea><br>
              <span id="span4"></span>
            </td>
          </tr>
          <tr>
            <td colspan="2" valign="middle" height="45" align="center">
              <input type="submit" value="提交申请" id="btnSubmit" class="link_button">
            </td>
          </tr>
          {{csrf_field()}}
        </tbody></table>
        </form>
      </div>
      <div class="link_bottom">
        <div class="bottom_right"></div>
        <div class="bottom_left"></div>
      </div>
    </div>
  </div>  
</div>
</body>
  <script type="text/javascript">
  flage = false;
    //获取网站名 绑定失去焦点的事件
    $("input[name='name']").blur(function(){
        //获取网站名
        n = $(this).val();
        //网站名正则匹配
        if (n.match(/^[\w\u4e00-\u9fa5,]{1,15}$/)==null) {
            $('#span1').css("color",'red').html('请输入1到8的中文或字母的网站名');
            flage = false;
        }else{
            //判断网站名是否重名
            $.get('/linkname',{n:n},function(data){
                // alert(data);
                if (data==2) {
                  $('#span1').css("color",'red').html('该网站名已被使用');
                  flage = false;
                }else{
                  $('#span1').css("color",'green').html('*符合*');
                  flage = true;
                }
            });
        }
    });
  //获取网址 绑定失去焦点事件
  $("input[name='url']").blur(function(){
    //获取当前网址
    u = $(this).val();
    //网址 正则匹配
    if (u.match(/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:/~\+#]*[\w\-\@?^=%&amp;/~\+#])?/)==null) {
            $('#span2').css("color",'red').html('请输入正确格式的网址');
    }else{
         //判断网址是否重名
          $.get('/linkurl',{u:u},function(data){
              // alert(data);
              if (data==2) {
                $('#span2').css("color",'red').html('该网站名已被使用');
                flage = false;
              }else{
                $('#span2').css("color",'green').html('*符合*'); 
                flage = true;               
              }
          });
    }
  })

  //获取邮箱  绑定失去焦点事件
  $("input[name='email']").blur(function(){
    //获取当前邮箱
    e = $(this).val();
    //邮箱 正则匹配
    if (e.match(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/)==null) {
            $('#span3').css("color",'red').html('请输入正确格式的邮箱');
            flage = false;
    }else{
            $('#span3').css("color",'green').html('*符合*');
            flage = true;               
    }
  })

  //获取网站介绍 限制字数
  $('#present').focus(function(){
    
    // console.log(p);
    $("#present").attr('maxlength','80'); 
  });

  // 表单提交
  $('#frm_submit').submit(function(){
    //获取文本框的值
    p = $("#present").val();
    //判断p是否有值
    if (p=='') {
      $("#span4").css("color","red").html('请填写网站介绍');
      // alert(p);
      return false;
    }else{
      return true;
    }
      //提交看返回的是true还是false
      return flage;
  });
  </script>
</html>
@endsection