<!DOCTYPE html>
<!-- saved from url=(0267)https://hwid1.vmall.com/AMW/portal/resetPwd/resetPwdInPhone.html?reqClientType=26&loginChannel=26000000&countryCode=cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Fcaslogin&lang=zh-cn&themeName=red -->
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
  <script src="/static/homes/login/forget/jquery-1.7.2.min.js"></script>
  <title>华为帐号-设置新密码</title> 
  <style type="text/css">
.success-tips-EMUI5 {padding: 2px 0; font-size: 15px;}
</style> 
 </head> 
 <body class="forget" style="max-width:none;margin-top:0;"> 
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
  <form action="/setNewPass" method="post">
  <div class="g"> 
   <div id="mod-forget-area" class="resetpwd-container"> 
    <div class="h"> 
     <h3><span>找回密码</span></h3> 
    </div> 
    <div class="b"> 
     <div class="form-edit-area clearfix"> 
      <div class="head_text"> 
       <em>设置新密码</em> 
       <p>如果您有其他设备使用此帐号，设置新密码后需重新登录，以确保正常使用华为服务。</p> 
      </div> 
      <div class="input-area marginBottom10"> 
       <div class="dinput-UI5 margin0" id="passwordDiv" style="max-width: 100%;height: 42px;line-height: 42px;padding:0 16px;"> 
        <div class="ico-div">
         <img class="eyeoff" style="margin-top:9px;" id="passwdEye" src="/static/homes/login/forget/eyeoff_wap_ui9.png" />
        </div> 
        <div class="input-div"> 
         <input oncut="return false;" name="password" oncopy="return false" class="input-scroll" style="padding-left: 0px; z-index: 1;" type="password" maxlength="32" autocomplete="off" id="newPassword" validator="validator11544596053645" placeholder ="密码" /> 
        </div> 
       </div> 
       <div id="passwd_msg" class="error-tips-EMUI5 addbtmpad-msg"></div> 
      </div> 
      <div class="line-EMUI5" style="margin:0 0 10px;"> 
       <div class="dinput-UI5 margin0" id="confirmPasswordDiv" style="max-width: 100%;height: 42px;line-height: 42px;padding:0 16px;"> 
        <div class="input-div"> 
         <input oncut="return false;" oncopy="return false" name="repassword" class="input-scroll" style="padding-left: 0px; z-index: 1;" type="password" autocomplete="off" maxlength="32" id="confirmPasswd" validator="validator21544596053645" placeholder="确认密码" /> 
        </div> 
       </div> 
       <div id="errorTips" class="error-tips-EMUI5 addbtmpad-msg"></div> 
      </div> 
      <div class="line8-EMUI5 marginLR16">
       <div class="gray-tips"> 
        <div class="pwd-complex">
         <div id="pwdStong"  style="color: red;">
			@if (count($errors) > 0)
		        <ul>
		        @foreach ($errors->all() as $error)
		        <li>{{ $error }}</li>
		        @endforeach
		        </ul>
	         @endif
	         @if(session('error'))
				{{session('error')}}
	         @endif
         </div>
        </div> 
       </div>
      </div> 
      <div class="input-area step-area"> 
      	{{csrf_field()}}
 		<input type="hidden" name="id" value="{{$data->id}}">
 		<input type="hidden" name="token" value="{{$data->token}}">
       <input type="submit" id="resetPwdBtn" class="button disabled" value="确定" tabindex="3" />
       <span class="vam error" id="showerror"></span> 
      </div> 
     </div> 
    </div> 
    <div class="f"></div> 
   </div> 
  </div> 
  </form>
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
 	var passflag = false;
 	var repassflag = false;
 	$('#passwdEye').toggle(function(){
 		$(this).attr('src','/static/homes/login/forget/eyeon_wap_ui9.png');
 		$('#confirmPasswd').prop('type','text');
 		$('#newPassword').prop('type','text');
 	},function(){
 		$(this).attr('src','/static/homes/login/forget/eyeoff_wap_ui9.png');
 		$('#confirmPasswd').prop('type','password');
 		$('#newPassword').prop('type','password');
 	});

 	//检测密码
 	 $('#newPassword').blur(function(){
	    var pass = $(this).val();
	    if(!pass.match(/\w{6,16}/)){
	      $('#passwd_msg').css('color','red').html('密码必须为(6-16位字母下划线组成)');
	      passflag = false;
	    }else {
	      $('#passwd_msg').css('color','green').html('密码验证通过');
	      passflag = true;
    	}
 	 });

 	 //检测确认密码
	  $('#confirmPasswd').blur(function(){
	    var repass = $(this).val();
	    var pass = $('#newPassword').val();
	    if(repass != pass){
	      $('#errorTips').css('color','red').html('两次密码不一致');
	      repassflag = false;
	    }else {
	      $('#errorTips').css('color','green').html('两次密码一致');
	      repassflag = true;
	    }
	    if(repassflag && passflag){
	      	$('#resetPwdBtn').removeClass('disabled');
	     }else {
	      	$('#resetPwdBtn').addClass('disabled');
	     }
	  });
 </script>
</html>