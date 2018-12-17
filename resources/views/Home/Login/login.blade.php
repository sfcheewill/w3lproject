<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="renderer" content="webkit" /> 
  <title>登录</title> 
  <script type="text/javascript">var pageToken = "XCSW28FixMeDQsJ2tHu8CdZCvq4Msh99";</script>
  <script type="text/javascript">

</script> 
  <link href="/static/homes/login/favicon.ico" type="image/x-icon" rel="shortcut icon" /> 
  <link href="/static/homes/login/ec.core.css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/login/common.css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/login/dialog.css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/login/dialogEMUIV6.css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/login/common(1).css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/login/zh-cn.css" rel="stylesheet" type="text/css" /> 
  <script src="/static/homes/login/jquery-1.7.2.min.js"></script>
 </head> 
 <body class="login themeName-red"> 
  <div id="cookies_privacy" class="center cookie hidden">
    本站点使用cookies,继续浏览表示您同意我们使用cookies。 
   <img src="/static/homes/login/cookie-close.png" /> 
  </div> 
  <div> 
   <!-- 头部  --> 
   <div class="customer-header"> 
    <div class="head_center"> 
     <div class="main-logo adHeadPicContainer"> 
      <img src="/static/homes/login/HUAWEI.png" class="adHeadPic" /> 
     </div> 
     <div class="website-name"> 
      <b style="font-size: 18px;margin-top: -5px;float: left;color:#cccccc;">|</b> 
      <b class="adHeadTitle">华为商城</b> 
     </div> 
    </div> 
   </div> 
   <!-- 广告位 --> 
   <!--登录 --> 
   <div class="login_bg" id="loginform"> 
    <div style="background-image: url('/static/homes/login/login_default_bg.png');" class="g login_adBg"> 
     <div class="login-area login-right login-area-box"> 
      <div class="userAccountLogin"> 
       <div class="h"> 
        <span class="loginTitle actived loginTitle-left" data-type="account">帐号登录</span>
       </div> 
       <div class="b-account"> 
        <div class="login-form-marginTop"> 
         <div class="form-edit-area loginEventForm"> 
          <div class="userAccountLogin-errorTipsDiv" id="errorTip"></div> 
          <form action="/homelogin" method="post">
          <table border="0" cellpadding="0" cellspacing="0"> 
           <tbody> 
            <tr> 
             <td class="user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="login_userName">
               <div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">
               </div></label><input type="text" autocomplete="off" class="text vam" id="login_userName" name="username" maxlength="50" tabindex="1" validator="validator11543921359507" placeholder="手机号/邮件地址/华为号" value="" style="z-index: 1;" /></td> 
            </tr> 
            <tr> 
             <td class="user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="login_password">
               <div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">
               </div></label><input oncut="return false;" oncopy="return false" id="login_password" type="password" autocomplete="off" class="text vam" name="password" maxlength="32" placeholder="密码" tabindex="2" validator="validator21543921359508" style="z-index: 1;" /></td> 
            </tr> 
            <tr> 
             <td id="picAuthCode" class="verify-td referenceTarget"> </td> 
            </tr> 
            <tr> 
             <td class="mt-links lineHeightFix" id="operLinkTd"> <span id="smsLoginEntrance" class="changeLoginType l" data-type="userAccountLogin" title="短信验证码登录" style="visibility: visible;"><i class="phoneIcon marginR6"></i>短信验证码登录</span> </td> 
            </tr> 
            <tr> 
             <td> 
              <div style="margin-bottom:0px;">
               <span class="vam error" id="login_msg" style="display:block">@if(session('error')) {{session('error')}} @endif</span>
              {{csrf_field()}}
              </div> <input type="submit" class="button-login" id="btnLogin" data-type="accountLogin" value="登录" tabindex="5" /> <img class="load" src="/static/homes/login/loading3.gif" /> </td> 
            </tr> 
            <tr> 
             <td class="mt-checkbox"> <span id="errormess"><input type="checkbox" class="checkbox vam" id="remember_name" name="remember_name" tabindex="4" /><label for="remember_name"><i id="remember_name_icon" class="checkBox-icon tick-off-icon marginR6"></i></label></span> 
               <div class="set-more"> 
                <div id="more_list" class="more-list hiden"> 
                 <ul> 
                  <li id="goConFaq" class="bottom_border pop_up_dialog security-menu">遇到问题</li> 
                 </ul> 
                 <ul> 
                  <li id="appealLink" class="bottom_border pop_up_dialog security-menu">更换手机号</li> 
                 </ul> 
                 <ul> 
                  <li id="goSecurity" class="pop_up_dialog security-menu">安全中心</li> 
                 </ul> 
                </div> 
               </div> </span> </td> 
            </tr> 
            <tr> 
             <td class="mt-links p0"> 
              <div class="mt-links-float vam clearWidth"> 
               <span class="regist"><a id="registText" class="btn-primary clearWidth" href="/homeregister" title="注册帐号">注册帐号</a></span>
               <span class="forgot"><a class="btn-primary clearWidth" href="/forget" title="忘记密码？">忘记密码？</a></span> 
              </div> </td> 
            </tr> 
           </tbody> 
          </table> 
          </form>
         </div> 
        </div> 
       </div> 
      </div>   
      <div class="smsValidateLogin hidden"> 
       <form action="/homelogin" method="post">
       {{csrf_field()}}
       <span class="changeLoginType callbackAcctLoginBtn" data-type="smsValidateLogin" style="visibility: visible;">&lt;&nbsp;返回</span> 
       <div class="b-account"> 
        <div class="login-form-marginTop smsLogin-form"> 
         <div class="form-edit-area loginEventForm"> 
          <div class="smsValidateLogin-errorTipsDiv"></div> 
          <table border="0" cellpadding="0" cellspacing="0"> 
           <tbody> 
            <tr> 
             <td class="user-input-tr chooseCountryTD"> 
              <!-- 国家/地区--> 
              <div class="l" id="chooseCountry"> 
               <div id="smsLoginCountryCodeDiv" class="ddrop-EMU5">
                <input type="hidden" value="cn,+86,1" />
                <span class="select-text ar-eg" data-regions="cn" data-countrycode="+86" data-countrysite="1">+86 中国 </span>
                <span class="suffix" style="color: rgb(51, 51, 51);"></span>
                <div class="select-ico"></div>
                X
               </div> 
              </div>
              <div class="splitLine l"> 
              </div>
              <div class="overFlowHidden"> 
               <input type="text" autocomplete="off" class="text vam" id="login_phoneNum" name="phone" maxlength="50" tabindex="1" validator="validator31543921359508" /> 
              </div> </td> 
            </tr> 
            <!-- 图形验证码 --> 
            <tr> 
             <td class="referenceTarget user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="smsAuthCode">
               <div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">
               </div></label><input type="text" autocomplete="off" class="text vam" id="smsAuthCode" maxlength="8" tabindex="3" validator="validator41543921359508" name="pcode" placeholder="短信验证码" style="z-index: 1;" />
              <div id="getSmsRandomCodeDiv">
               <div id="getSmsRandomCode" intervaltime="60" class="smsAuthBth btnUnable">
                <!-- <button style="color: #0064cc;">获取验证码</button> -->
                <input id="getValiCode" type="button" class="get-code dbtn2" value="获取验证码">
                <div id="smsAuthCodeTips"></div>
               </div>
              </div></td> 
            </tr> 
            <tr> 
             <td class="mt-checkbox"> <span id="sms-rememberNameSpan"><input type="checkbox" class="checkbox vam" id="remember_smsName" name="remember_smsName" tabindex="4" /><label for="remember_smsName"><i id="remember_smsName_icon" class="checkBox-icon tick-off-icon marginR6"></i></label></span> 
              <div class="remeberTip"></div> </td> 
            </tr> 
            <tr> 
             <td> 
              <div style="margin-bottom:0px;">
               <span class="vam error" id="login_msg1" style="display:block">@if(session('error1')) {{session('error1')}} @endif</span>
              </div> <input type="submit" class="button-login" id="btnSMSLogin" data-type="smsLogin" value="登录" tabindex="5" /> <img class="load" src="/static/homes/login/loading3.gif" /> </td> 
            </tr> 
           </tbody> 
          </table> 
         </div> 
        </div> 
       </div>
       </form> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div> 
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
  </div> 
  <div id="layer"> 
   <div class="mc"></div> 
  </div> 
  <div id="selectCountryCodeDiv"></div> 
  <div class="loginmask" style="display: none;"> 
   <div> 
    <span>登录中...</span> 
   </div> 
  </div> 
 </body>
 <script>
  var pflag = false;
 $('#dd').attr('disabled',false);
  $('#operLinkTd').click(function(){
    //添加类名
    $('.userAccountLogin').addClass('hidden');
    //删除类名
    $('.smsValidateLogin').removeClass('hidden');
  });
  $('.callbackAcctLoginBtn').click(function(){
    //添加类名
    $('.smsValidateLogin').addClass('hidden');
    //删除类名
    $('.userAccountLogin').removeClass  ('hidden');
  });

  //登录按钮
  $('#btnLogin').click(function(){
    //检测输入信息
    var username = $('input[name="username"]').val();
    var password = $('input[name="password"]').val();
    if(username == ''){
      $('#login_msg').html('账号不能为空');
      return false;
    }
   if(password == ''){
      $('#login_msg').html('密码不能为空');
      return false;
    }
  });

  //短信登录检测
  $('#getSmsRandomCode').click(function(){
    var o = $(this);
    // //检测手机号
    var p  = $('input[name="phone"]').val();
    if(!p.match(/^1[3|4|5|8][0-9]\d{8}$/)){
      $('#login_msg1').html('手机号不正确');
      return ;
    }

    //检测手机号是否注册
    $.get('/checkphone',{phone:p},function(data){
      if(data != '1'){
        $('#login_msg1').html('该手机号未注册');
        return ;
      }else {
        $.getJSON('/phone',{p:p},function(data){
          if(data.code == 000000){
            m = 60;
            timmer = setInterval(function(){
              m--;
              //改变按钮文本
              $('#getValiCode').val(m + '秒后重新获取');
              //禁止按钮
              $('#getValiCode').attr('disabled',true);
              if(m == 0){
                //清除定时器
                clearInterval(timmer);
                //改变按钮文本
                $('#getValiCode').val('重新获取验证码');
                //恢复按钮
               $('#getValiCode').attr('disabled',false);
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
            $('#smsAuthCodeTips').css('color','green').html('输入验证码正确');
            pflag = true;
            break;
          case '2':
            $('#smsAuthCodeTips').css('color','red').html('输入验证码错误');
            pflag = false;
            break;
          case '3':
            $('#smsAuthCodeTips').css('color','red').html('验证码不能为空');
            pflag = false;
            break;
          case '4':
             $('#smsAuthCodeTips').css('color','red').html('验证码已过期');
            pflag = false;
            break;
        }
      });
    });
  });

  $('#btnSMSLogin').click(function(){
    return pflag;
  });
 </script>
</html>