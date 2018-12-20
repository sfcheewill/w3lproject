<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title>注册_华为帐号</title> 
  <!-- 资源引用-CSS-JS--> 
  <!-- ICON --> 
  <link href="/static/homes/register/favicon.ico" type="image/x-icon" rel="shortcut icon" /> 
  <!-- CSS --> 
  <link href="/static/homes/register/dialog.css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/register/common.css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/register/zh-cn_css.css" rel="stylesheet" type="text/css" /> 
  <!-- JS --> 
  <script src="/static/homes/register/jquery-1.7.2.min.js"></script> 
  <!-- 注册公用 --> 
  <script charset="UTF-8" async="" src="/static/homes/register/gettype.php"></script>
  <script charset="UTF-8" src="/static/homes/register/get.php"></script>
  <link href="/static/homes/register/style_https.1.0.3.css" rel="stylesheet" />
 </head> 
 <body class="reg themeName-red" id="loginform"> 
  <!-- 头部  --> 
  <div class="head-background"> 
   <div class="head_center"> 
    <div class="main-logo adHeadPicContainer" style="width:143px"> 
     <a href="/homeindex"><img src="/static/homes/register/head-top.png" class="wihteBgPic" /> </a>
    </div> 
    <div class="website-name"> 
     <b style="font-size: 18px;margin-top: -5px;float: left;color:#cccccc;">|</b> 
     <b style="font-size: 18px;margin-top: -3px;float: left; margin-left:18px;">华为商城</b> 
    </div> 
   </div> 
  </div> 
  <div class="wp1 relative"> 
   <div class="register-content" id="registerForm"> 
    <div class="reg-tab clearFix" style="visibility: visible;"> 
     <a class="phone-wrap l sel" href="javascript:void(0)"> <i class="phone-icon"></i> <span id="tabPhone" class="tab-phone" style="width: 66px;">账号注册</span> </a> 
    </div> 
    <div class="login r">
      已有华为帐号 
     <a href="/homelogin/create" class="login-a" title="登录">登录</a>
     <span class="ar-eg-opposite">&gt;</span> 
    </div> 
    <form action="/homeregister" method="post">
    <div class="reg-detail"> 
    <!--邮件地址 --> 
     <div class="input-container" id="errormsgemail-box"> 
      <div class="l input-left">
        邮件地址 
      </div> 
      <div class="r input-right"> 
      </div> 
      <div class="input-content"> 
       <input type="text" class="text" name="email" maxlength="50" autocomplete="off" validator="validator11544514294334" style="z-index: 1;" placeholder="请输入邮箱" /> 
      </div> 
     </div> 
     <div id="msg_email"></div>
     <!--手机号码 --> 
     <div class="input-container" id="phoneInputDiv-box"> 
      <div class="l input-left"> 
       <div id="input_languageCode" class="ddrop-EMU5">
        <span class="select-text ar-eg">+86(中国)</span>
        <span class="suffix" style="color: rgb(51, 51, 51);"></span>
        <div class="select-ico select-ico-gray"></div>
       </div> 
      </div> 
      <div class="r input-right"></div> 
      <div class="input-content"> 
       <input class="text input-number" type="text" name="phone" maxlength="50" autocomplete="off" placeholder="请输入手机号" />
      </div> 
     </div> 
     <div id="msg_phone" class="error-tips-EMUI5"></div> 
     <!-- 短信验证码 --> 
     <div class="input-container" id="errRandomCode-box"> 
      <div class="l input-left">
        短信验证码 
      </div> 
      <div class="r input-right"> 
       <input type="button" class="get-code dbtn2" autocomplete="off" id="getValiCode" intervaltime="60" value="获取验证码" />
       <span id="msg_getPhoneRandomCode" style="position: relative; top: 34px;left: 20px;"></span>
       <b id="authCodeRightSms" class="authCodeRightPosFix" datavalue="false"></b> 
      </div> 
      <div class="input-content"> 
       <input type="text" autocomplete="off" class="verify vam ime-disabled text" tabindex="3" style="vertical-align: middle; z-index: 1;" name="pcode" maxlength="8" placeholder="请输入短信验证码" /> 
      </div> 
     </div> 
     <div id="msg_phoneRandomCode"></div> 
     <!-- 设置密码 --> 
     <div class="set-password"> 
      <div class="input-container" id="pwdDiv"> 
       <div class="l input-left">
         密码 
       </div> 
       <div class="input-content"> 
        <input oncut="return false;" oncopy="return false" type="password" autocomplete="off" class="pwd-input text" name="password" maxlength="32" style="z-index: 1;" placeholder="请输入密码" /> 
       </div> 
      </div> 
      <div id="msg_password"></div> 
      <div id="pwd_check_dialog"></div> 
      <div class="input-container " id="confirmpwdDiv"> 
       <div class="l input-left">
         确认密码 
       </div> 
       <div class="input-content"> 
        <input oncut="return false;" oncopy="return false" type="password" autocomplete="off" class="text vam" name="repassword" maxlength="32" style="z-index: 1;" placeholder="请再次输入密码" /> 
       </div> 
      </div> 
      <div id="msg_checkPassword"></div> 
      <!-- 协议 --> 
      <!-- 按钮 --> 
      <div class="reg-btn" align="center">
      	{{csrf_field()}} 
       <input type="submit" class="btn btn-reg sel" value="注册">
       <div id="register_msg" style="position: relative; left: 26%;">
          @if (count($errors) > 0)
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
          @endif
        </div> 
      </div> 
     </div> 
    </div>
    </form>
    </div>  
    <div class="box-shadow"></div> 
    <!-- 底部  --> 

    <div class="wp1 ft"> 
     <div class="reg-content"> 
      <p class="footer"> <a id="foot_EULA" href="https://hwid1.vmall.com/AMW/portal/agreements/userAgreement/zh-cn_userAgreement.html?version=china&amp;countryCode=cn" class="rule" target="_blank">华为帐号用户协议</a> <em class="foot_em">|</em> <a id="foot_privacy" href="https://hwid1.vmall.com/AMW/portal/agreements/accPrivacyStatement/zh-cn_accPrivacyStatement.html?version=china" class="rule" target="_blank">关于华为帐号与隐私的声明</a> <span id="faqPart" class="foot_em"><em style="font-style: normal">|</em> <a style="padding:0 10px;" target="blank" href="https://hwid1.vmall.com/AMW/portal/faq/zh-cn_faq.html?version=china&amp;countryCode=cn&amp;lang=zh-cn">常见问题</a></span> </p> 
      <p id="copyrightPart" class="footer">Copyright&nbsp;&copy;&nbsp;2011-2018&nbsp;&nbsp;华为软件技术有限公司&nbsp;&nbsp;版权所有&nbsp;&nbsp;保留一切权利&nbsp;&nbsp;苏B2-20070200号&nbsp;|&nbsp;苏ICP备09062682号-9</p> 
     </div> 
    </div> 
   </div>
  </div>
 </body>
 <script>
 var eflag = false;
 var pflag = false;
 var passflag = false;
 var repassflag = false;
  //检测邮箱
  $('input[name=email]').blur(function(){
    var v = $(this).val();
    if(!v.match(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/)){
      $('#msg_email').css('color','red').html('邮箱格式不正确');
      eflag = false;
    }else {
      //检测邮箱是否被使用
      $.get('/checkemail',{email:v},function(data){
        if(data == '1'){
          $('#msg_email').css('color','red').html('该邮箱已被使用');
          eflag = false;
        }else{
          $('#msg_email').css('color','green').html('邮箱验证正确');
          eflag = true;
        }
      });
    }
  });
  //短信发送按钮
  $('#getValiCode').click(function(){
    var o = $(this);
    // //检测手机号
    var p  = $('input[name="phone"]').val();
    if(!p.match(/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/)){
      $('#msg_phone').html('手机号不正确');
      return ;
    }
    //检测手机号是否被使用
    $.get('/checkphone',{phone:p},function(data){
      if(data == '1'){
        $('#msg_phone').html('该手机号已被使用');
        return ;
      }else {
        $.getJSON('/phone',{p:p},function(data){
          if(data.code == 000000){
            m = 60;
            timmer = setInterval(function(){
              m--;
              //改变按钮文本
              o.val(m + '秒后重新获取');
              //禁止按钮
              o.attr('disabled',true);
              if(m == 0){
                //清除定时器
                clearInterval(timmer);
                //改变按钮文本
                o.val('重新获取验证码');
                //恢复按钮
                o.attr('disabled',false);
              }
            },1000);
          }else {
            alert('获取验证码失败');
          }
        });
      }
    });
    
    //检测验证码
    $('input[name="pcode"]').blur(function(){
      var obj = $(this);
      //获取验证码
      var pcode = $(this).val();
      //ajax检测验证码
      $.get('/checkcode',{pcode:pcode},function(data){
        switch(data){
          case '1':
            $('#msg_phoneRandomCode').css('color','green').html('输入验证码正确');
            pflag = true;
            break;
          case '2':
            $('#msg_phoneRandomCode').css('color','red').html('输入验证码错误');
            pflag = false;
            break;
          case '3':
            $('#msg_phoneRandomCode').css('color','red').html('验证码不能为空');
            pflag = false;
            break;
          case '4':
             $('#msg_phoneRandomCode').css('color','red').html('验证码已过期');
            pflag = false;
            break;
        }
      });
    });
  });

  //检测密码 
  $('input[name="password"]').blur(function(){
    var pass = $(this).val();
    if(!pass.match(/\w{6,16}/)){
      $('#msg_password').css('color','red').html('密码必须为(6-16位字母下划线组成)');
      passflag = false;
    }else {
      $('#msg_password').css('color','green').html('密码验证通过');
      passflag = true;
    }
  });

  //检测确认密码
  $('input[name="repassword"]').blur(function(){
    var repass = $(this).val();
    var pass = $('input[name="password"]').val();
    if(repass != pass){
      $('#msg_checkPassword').css('color','red').html('两次密码不一致');
      repassflag = false;
    }else {
      $('#msg_checkPassword').css('color','green').html('两次密码一致');
      repassflag = true;
    }
  });

  //表单提交
  $('input[type="submit"]').click(function(){
    if(!eflag){
      $('#register_msg').css('color','red').html('邮箱验证错误');
      return false;
    }else if(!pflag){
      $('#register_msg').css('color','red').html('短信验证码错误');
      return false;
    }else if(!passflag){
      $('#register_msg').css('color','red').html('密码验证错误');
      return false;
    }else if(!repassflag){
      $('#register_msg').css('color','red').html('两次密码不一致');
      return false;
    }else {
      return true;
    }
  });

 </script>
</html>