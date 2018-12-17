<!DOCTYPE html>
<!-- saved from url=(0265)https://hwid1.vmall.com/AMW/portal/resetPwd/inputAuthCode.html?reqClientType=26&loginChannel=26000000&countryCode=cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Fcaslogin&lang=zh-cn&themeName=red -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="Content-Language" content="zh-cn" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="renderer" content="webkit" /> 
  <link href="/static/homes/login/forget/favicon.ico" type="image/x-icon" rel="shortcut icon" /> 
  <link href="/static/homes/login/forget/common.css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/login/forget/dialog.css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/login/forget/common(1).css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/login/forget/zh-cn_css.css" rel="stylesheet" type="text/css" /> 
  <script src="/static/homes/login/forget/hm.js/static/homes/login/forget/"></script>
  <script src="/static/homes/login/forget/jquery-1.7.2.min.js" id="jsid"></script> 
  <title>华为帐号-邮件找回密码</title> 
 </head> 
 <body class="forget"> 
  <!-- 头部  --> 
  <div class="head-background"> 
   <div class="head_center"> 
    <div class="main-logo adHeadPicContainer" style="width:143px"> 
     <img src="/static/homes/login/forget/head-top.png" class="wihteBgPic" /> 
    </div> 
    <div class="website-name"> 
     <b style="font-size: 18px;margin-top: -5px;float: left;color:#cccccc;">|</b> 
     <b style="font-size: 18px;margin-top: -3px;float: left; margin-left:18px;">华为商城</b> 
    </div> 
   </div> 
  </div> 
  <div class="g"> 
   <!--找回密码 -->
   <form action="/newPass" method="post"> 
   <div id="mod-forget-area" class="resetpwd-container"> 
    <div class="h"> 
     <h3><span>找回密码</span></h3> 
    </div> 
    <div class="b"> 
     <div id="checkAuthCodeFrom"> 
      <div class="form-edit-area clearfix"> 
       <div class="checkAuthCodeHeadTitle">
        邮件找回密码
       </div> 
       <div class="checkAuthCodeHeadtips">
        若您能登录邮箱 
        <span class="blodFont nophonewrap userAccount">{{$data['remail']}}</span>，请点击获取验证码。
       </div> 
       <div class="input-area" id="pc-toast"> 
        <div class="getAuthbtn input-right-msg" id="getValiCode" intervaltime="60" token="{{$data['token']}}"> 
         <input type="button" class="get-code dbtn3" value="获取验证码"> 
        </div> 
    
        <input maxlength="8" id="authcode" name="code" type="text" autocomplete="off" class="text vam with-right-msg ar-eg padR112" validator="validator11544595970825" style="z-index: 1;" /> 
       </div> 
       <div id="errorTips" class="error-tips-EMUI6">@if(session('error')) {{session('error')}} @endif</div> 
       <div class="input-area step-area"> 
       {{csrf_field()}}
       <input type="hidden" name="id" value="{{$data['id']}}">
        <input type="submit" id="next" class="button disabled" value="下一步" /> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   </form>
  </div> 
  <!-- 底部  --> 
  <div class="customer-footer"> 
   <div class="ft"> 
    <!--授权  --> 
    <div class="warrant-area"> 
     <p style="text-align: center;line-height:20px;height:20px;"> <a href="https://hwid1.vmall.com/AMW/portal/agreements/userAgreement/zh-cn_userAgreement.html?version=china&amp;countryCode=cn" class="rule" target="_blank">华为帐号用户协议</a> <em class="foot_em">|</em> <a href="https://hwid1.vmall.com/AMW/portal/agreements/accPrivacyStatement/zh-cn_accPrivacyStatement.html?version=china" class="rule" target="_blank">关于华为帐号与隐私的声明</a> <span class="foot_em"><em style="font-style: normal">|</em> <a style="padding:0 10px;" target="blank" href="https://hwid1.vmall.com/AMW/portal/faq/zh-cn_faq.html?version=china&amp;countryCode=cn&amp;lang=zh-cn">常见问题</a></span> </p> 
     <p style="text-align: center;line-height: 12px;height:12px;margin-top: 10px "> Copyright&nbsp;&copy;&nbsp;2011-2018&nbsp;&nbsp;华为软件技术有限公司&nbsp;&nbsp;版权所有&nbsp;&nbsp;保留一切权利&nbsp;&nbsp;苏B2-20070200号&nbsp;|&nbsp;苏ICP备09062682号-9 </p> 
    </div> 
   </div> 
  </div> 
 </body>
 <script>
  $('#getValiCode').click(function(){
    var o = $(this);
    var token = $(this).attr('token');
    //发送验证码
    $.get('/sendEmailCode',{token:token},function(data){
      if(data == 'success'){
        m = 60;
        timmer = setInterval(function(){
          m--;
          //改变按钮文本
          o.find('input').val(m + '秒后重新获取');
          //禁止按钮
          o.find('input').attr('disabled',true);
          if(m == 0){
            //清除定时器
            clearInterval(timmer);
            //改变按钮文本
            o.find('input').val('重新获取验证码');
            //恢复按钮
          o.find('input').attr('disabled',false);
         }
        },1000);
      }else {
        $('#errorTips').css('color','red').html('邮箱检测错误,请返回上一层重新填写');
      }
    });
  });

  //检测验证码
  $('input[name="code"]').blur(function(){
    var code = $(this).val();
    if(code == ''){
       $('#errorTips').css('color','red').html('验证码不能为空');
    }else {
      //Ajax
      $.get('/checkemailcode',{code:code},function(data){
        if(data == 'success'){
           $('#errorTips').css('color','green').html('检测验证码成功');
           $('#next').removeClass('disabled');
        }else {
           $('#errorTips').css('color','red').html('验证码输入错误');
           $('#next').addClass('disabled');
        }
      });
    }
  });
 </script>
</html>