<!DOCTYPE html>
<!-- saved from url=(0262)https://hwid1.vmall.com/AMW/portal/resetPwd/forgetbyid.html?reqClientType=26&loginChannel=26000000&countryCode=cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Fcaslogin&lang=zh-cn&themeName=red -->
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

  <script src="/static/homes/login/forget/jquery-1.7.2.min.js" id="jsid"></script> 

  <title>华为帐号-输入华为帐号</title> 
  <link href="/static/homes/login/forget/style_https.1.0.3.css" rel="stylesheet" />
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
   <div id="mod-forget-area" class="resetpwd-container"> 
    <div class="h"> 
     <h3><span>找回密码</span></h3> 
    </div> 
    <div class="b"> 
    <form action="/emailcode" method="post"> 
     <div id="forgetByIdV3Form"> 
      <!--表单 -->
      <div class="form-edit-area"> 
       <div class="head_text" style="padding:20px 16px"> 
        <em id="check_history_password_title">输入华为帐号</em> 
       </div> 
       <div id="username-input" class="input-area marginBottom0"> 
        <input style="padding: 6px 14px; z-index: 1;" placeholder="输入注册华为帐号的手机号或邮件地址" type="text" autocomplete="off" class="text vam" id="formBean_username" name="username" maxlength="50" tabindex="1" validator="validator11544595908094" /> 
        <span id="msg_username"></span> 
       </div> 

       <div id="error-tips" class="error-tips-EMUI6"></div> 
       <div class="randomCodeDiv"> 

        <!-- 验证码 -->
        <div id="username-input" class="input-area marginBottom0"> 
          <img src="/code" alt="" onclick="this.src = this.src + '?a=1'">
          <input style="padding: 6px 14px; z-index: 1;" placeholder="输入验证码" type="text" autocomplete="off" class="text vam" id="formBean_username" name="vcode" maxlength="50" tabindex="1" validator="validator11544595908094" />
          <span id="msg_username"></span> 
       </div> 
          
        <div id="randomCode_msg" class="error-tips-EMUI6">@if(session('error')) {{session('error')}} @endif</div> 
       </div> 
      </div> 

      <div class="input-area step-area"> 
        {{csrf_field()}}      
       <input type="submit" id="btnSubmit" class="button disabled" value="下一步" tabindex="3" style="width:210px;" /> 
      </div> 
     </div> 
     </form>
    </div> 
    <div class="f"></div> 
   </div> 
  </div> 
  <div id="selectCountryCodeDiv"></div> 
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
    //验证账号
    var uflag = false;
    //验证图形验证码
    var vflag = false;

    //检测账号
    $('input[name="username"]').blur(function(){
      var value = $(this).val();
      if(value == ''){
        $('#error-tips').css('color','red').html('账号不能为空');
        uflag = false;
      }else {
        //检测账号
        $.get('/checkAccount',{username:value},function(data){
          if(data == 'success'){
            $('#error-tips').css('color','green').html('账号验证成功');
            uflag = true;
          }else {
            $('#error-tips').css('color','red').html('该账号不存在');
            uflag = false;
          }
        });
      }
    });

    //检测验证码
    $('input[name="vcode"]').blur(function(){
      var vcode = $(this).val();
      if(vcode == ''){
        $('#randomCode_msg').css('color','red').html('验证码不能为空');
        vflag = false;
      }else {
        //Ajax
        $.get('/checkvcode',{vcode:vcode},function(data){
          if(data == 'success'){
           $('#randomCode_msg').css('color','green').html('验证码验证成功');
           vflag = true;
           //检测按钮
           if(uflag && vflag){
            $('#btnSubmit').removeClass('disabled');
          }else {
            $('#btnSubmit').addClass('disabled');
      }
          }else {
           $('#randomCode_msg').css('color','red').html('验证码输入错误');
            vflag = false;
          }
        });
      }
    });
</script>
</html>