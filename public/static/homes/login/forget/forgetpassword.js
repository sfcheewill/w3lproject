/**
* 去掉左右空格
**/
function Trim(text) { 
	return text.replace(/(^\s*)|(\s*$)/g, ""); 
	} 

function changeRandomCode(){
	if(gid('randomCodeImg')) {
		gid('randomCodeImg').src=randomCodeImgURL + "&_t="+ new Date().getTime();
	}
};

/**
 * 验证码校验
 */
function authCodeValidate(randomCode, randomCodeError, thisValue, session_code_key, pageToken) {
	var dataParms={
			randomCode:thisValue,
			session_code_key:session_code_key
	};
	
	ajaxHandler("authCodeValidate",dataParms,function(data){
		if("1"==data.isSuccess)
		{
			showSuccess($("#msg_randomCode"), rss.common_authcode_success);
		}
		else
		{
			changeRandomCode();
			switch(data.errorCode) 
			{
 				case '10000201':
				{
 					showError($("#msg_randomCode"), rss.wrongcode);
					break;
				}
 				case '10000001':
 				{
 					showError($("#msg_randomCode"), rss.error_10000001);
 					break;
 				}
 				case '10000004':
 				{
 					showError($("#msg_randomCode"), rss.error_10000004);
 					break;
 				}
 				default:
 				{
 					showError($("#msg_randomCode"), rss.error_10000001);
 					break;
 				}
			}
			randomCode.focus();
			randomCode.val("");
		}
		
	},function(data){
	},false,"JSON");
}

/**
* 获取手机验证码
 */
function getMobileCode(accountType, smsReqType, session_code_key,reqClientType,lang, reqClientIp,operType, userAccount, mobile)
{
	var mobilephone;
	if (mobile)
	{
		mobilephone= Trim(mobile);
	}
	else
	{
		mobilephone= Trim($("#phoneaccount").val());
	}
	
	var username;
	if (userAccount)
	{
		username= Trim(userAccount);
	}
	else
	{
		username= Trim($("#username").val());
	}
	
	var getCodeButton=$("#getValiCode");
	var randomCode=$("#randomCode").val();
	if(randomCode=="")
	{
		changeRandomCode();
		$("#randomCode").focus();
		return;
	}
	getCodeButton.attr("IntervalTime",60);
	if(randomCode=="")
	{
		changeRandomCode();
		$("#randomCode").focus();
		return;
	}
	getCodeButton.attr("IntervalTime",60);
	var errorBojCustom = {
		"70001105":rss_new.uc_error_10000001,
		"70001401":rss_new.uc_error_10000001,
		"70002001":rss_new.uc_error_10000001,
		"70001201":rss_new.uc_error_10000001,
		"70001102":rss_new.uc_error_70001102_1,
		"70001104":rss_new.uc_error_70001104_1,
		"default":rss_new.uc_common_get_auth_code_error
	}
	var dataParms={
			"userAccount":username,
			"smsReqType":smsReqType,
			"reqClientType":reqClientType,
			"accountType":accountType,
			"languageCode":lang,
			"mobilePhone":mobilephone,
			"languageCode":localInfo.lang,
			operType:operType
	};
	getCodeButton.attr("disabled",true);
	casAjaxObj.getSMSAuthCode(dataParms,getAuthCodeSuccessFn,getAuthCodeFailFn,errorBojCustom);

	function getAuthCodeSuccessFn(){
		if(isMobile()) {
			$("#errorTips").html("");
			$("#errorTips").removeClass("addbtmpad-msg-top2p");
			$("#codeInputDiv").removeClass("input-error-EMUI5");	
			wapToast(rss.smsHasSendTo.format(getExpressPhone(dataParms.mobilePhone)));
		} else {
			showMsgSuccess({obj:$("#msg_getAuthCode"), msg:rss.smsHasSendTo.format(getExpressPhone(dataParms.mobilePhone)), leftPix:'-239px', rightPix:'-239px', bottom:'39px'})
		}
		  
		getCodeButton.attr("IntervalTime",60);
		getCodeButton.addClass("auth_code_grey");
		getCodeButton.attr("disabled",true);
		jsInnerTimeout();
	}

	function getAuthCodeFailFn(msg){
		$("#errorTips").addClass("addbtmpad-msg-top2p");
		$("#codeInputDiv").addClass("input-error-EMUI5");
		getCodeButton.removeAttr("disabled");
		changeRandomCode();
		$("#randomCode").val("");
		$("#randomCode").focus();
		showGetAuthCodeErrorForOld(msg);
	}
}

function showGetAuthCodeErrorForOld(errorMsg)
{
	  if(isMobile()) {
		  //错误信息更新（非气泡）
		  $("#errorTips").html(errorMsg);
	  }
	  else
	  {
		  //错误信息更新（气泡）
		  showError($("#msg_getAuthCode"), errorMsg);
	  }	
}

/**
* 获取手机验证码
 */
function sendMobileCode(param)
{
	var userAccount = param.userAccount;
	var accountType = param.accountType;
	var mobilephone = param.mobilephone;
	var smsReqType = param.smsReqType;
	var reqClientType = param.reqClientType;
	var languageCode = param.languageCode;
	var operType = param.operType;
	

	var getCodeButton = param.getCodeButton;

	//错误信息更新（非气泡）
	var errorTips = $("#errorTips");
	
	var errorBojCustom = {
		"70001105":rss_new.uc_error_10000001,
		"70001401":rss_new.uc_error_10000001,
		"70002001":rss_new.uc_error_10000001,
		"70001201":rss_new.uc_error_10000001,
		"70001102":rss_new.uc_error_70001102_1,
		"70001104":rss_new.uc_error_70001104_1,
		"default":rss_new.uc_common_get_auth_code_error
	}
	var dataParms={
			"userAccount":userAccount,
			"smsReqType":smsReqType,
			"reqClientType":reqClientType,
			"accountType":accountType,
			"languageCode":languageCode,
			"mobilePhone":mobilephone,
			"operType":operType
	};
	getCodeButton.attr("disabled",true);

casAjaxObj.getSMSAuthCode(dataParms,getAuthCodeSuccessFn,getAuthCodeFailFn,errorBojCustom);
	function getAuthCodeSuccessFn(){
	//获取验证码成功打点
	analysisHealth({operType:20, event:"FORGOT_INPUTAUTHCODE_CLICK_GET_AUTHCODE_RESULT", actionName:"getSMSAuthCode", actionIsSuccess:1});
		if (param.successFunction)
		{
			param.successFunction();
		}
		
		getCodeButton.attr("IntervalTime",60);
		getCodeButton.addClass("auth_code_grey");
		getCodeButton.attr("disabled",true);
		jsInnerTimeout();
	}

	function getAuthCodeFailFn(msg,data){
		//获取验证码失败打点
		analysisHealth({ operType:20, event:"FORGOT_INPUTAUTHCODE_CLICK_GET_AUTHCODE_RESULT", actionName:"getSMSAuthCode", actionIsSuccess:0, actionErrorCode:data.errorCode});
		getCodeButton.removeAttr("disabled");
		if (param.errorBorder)
		{
			param.errorBorder.addClass("input-error-EMUI5");
		}

		if(param.errorClass){
			errorTips.addClass(param.errorClass).html(msg);
		}else{
			errorTips.html(msg);
		}
	}
}

function sendEmailCode(param){
	var getCodeButton = param.getCodeButton;
	var errorTips = param.errorTips;
	var errorBojCustom = {
		"70001101":rss_new.uc_error_10000001,
		"70001201":rss_new.uc_error_10000001,
		"70001102":rss_new.uc_error_70001102_0,
		"70001104":rss_new.uc_error_70001104_0,
		"10000002":rss_new.uc_error_10000001,
		"default":rss_new.uc_error_10000001
	}
	var dataParms={
		"email": param.email,
		"userAccount": param.userAccount,
		"accountType": param.accountType,
		"emailReqType": param.emailReqType,
		"languageCode": param.languageCode,
		"reqClientType": param.reqClientType,
		"operType":param.operType
	};
	getCodeButton.attr("disabled",true);
	casAjaxObj.getEMailAuthCode(dataParms,getAuthCodeSuccessFn,getAuthCodeFailFn,errorBojCustom);

	function getAuthCodeSuccessFn(){
		analysisHealth({ operType:20, event:"FORGOT_INPUTAUTHCODE_CLICK_GET_AUTHCODE_RESULT", actionName:"getEMailAuthCode", actionIsSuccess:1});
		if (param.successFunction)
		{
			param.successFunction();
		}
		getCodeButton.attr("IntervalTime",60);
		getCodeButton.attr("disabled",true);
		getCodeButton.addClass("auth_code_grey");
		jsInnerTimeout();
	}

	function getAuthCodeFailFn(msg,data){
		analysisHealth({operType:20, event:"FORGOT_INPUTAUTHCODE_CLICK_GET_AUTHCODE_RESULT", actionName:"getEMailAuthCode", actionIsSuccess:0, actionErrorCode:data.errorCode});
		getCodeButton.removeAttr("disabled");	  
		if (param.errorBorder)
		{
			param.errorBorder.addClass("input-error-EMUI5");
		}

		if(param.errorClass){
			errorTips.addClass(param.errorClass).html(msg);
		}else{
			errorTips.html(msg);
		}
	}
}


function chkAuthCode(param) {
	var errorTips = param.errorTips;
	var dataParms = {
		"accountType": param.accountType,
		"userAccount": param.userAccount,
		"authCode": param.authCode,
		"authOprType": param.authOprType,
		"reqClientType": param.reqClientType,
		"operType": param.operType
	};
	var errorBojCustom = {
        "10000001":rss_new.common_wrong_authcode,
        "70001201":rss_new.uc_error_10000001,
        "10000201":rss_new.common_wrong_authcode,
        "default":rss_new.common_wrong_authcode
	}

	casAjaxObj.chkAuthCode(dataParms,chkAuthCodeSucessFn,chkAuthCodeFailFn,errorBojCustom);
	function chkAuthCodeSucessFn(){
		analysisHealth({operType:20, event:"FORGOT_INPUTAUTHCODE_CLICK_NEXT_RESULT", actionName:"chkAuthCode", actionIsSuccess:1, message:param.accountType});
		if (param.successFunction)
		{
			param.successFunction();
		}
	}
	function chkAuthCodeFailFn(msg,data){
		analysisHealth({operType:20, event:"FORGOT_INPUTAUTHCODE_CLICK_NEXT_RESULT", actionName:"chkAuthCode", actionIsSuccess:0, actionErrorCode:data.errorCode, message:param.accountType});
		if (param.errorBorder)
		{
			param.errorBorder.addClass("input-error-EMUI5");
		}
		
		if(param.errorClass){
			errorTips.addClass(param.errorClass).html(msg);
		}else{
			errorTips.html(msg);
		}
	}		
}

function pcToast(toastEl, msg)
{
	 msg = xssFilter(msg);
	 var contStyle="font-size:13px;padding:0 12px";
	 var width = countLength(msg,contStyle);
	 var msgStyle = "font-size:13px;text-align:center;background-color:rgba(209,209,209,0.9);border-radius: 16px;min-width: 76px;margin:0 auto;max-width: 236px;width:"+width+"px;";
	 if(width>260)
	 {
	 	msgStyle+="padding:6px 12px;";
	 }
	 else
	 {
	 	msgStyle+="padding:0 12px;height:32px;line-height:32px;";
	 }

	 var id = "toast"+new Date().getTime();
	 var html="<div  id='" + id + "'>" + msg + "</div>";
	 if($("#toastContent").length>0)
	 {
	   if($("#toastContent div").length>0)
	   {
	   		html="<div  id='"+id+"'>"+msg+"</div>";
	   }	
	   $("#toastContent").append(html);
	   $("#toastContent").find('#'+ id).attr('style',msgStyle +'margin-top:10px');
	 }
	 else
	 {
	   var toastContenHtml="<div id='toastContent' style='position:absolute;top:64px;width:100%;z-index:100000'></div>";
	   toastEl.append(toastContenHtml);
	   $("#toastContent").append(html);
	   $("#toastContent").find('#'+ id).attr('style',msgStyle);
	 }	

	 setTimeout(function(){
	 	$("#"+id).remove();
	 },2000);
}


function countLength(msg, style) {
	msg = xssFilter(msg.trim());
	var id = "count" + new Date().getTime();
	style += ";visibility:hidden;word-wrap:break-word;word-break:break-all;";
	var html = "<span id='"+id+"'>" + msg + "</span>";
	$("body").append(html);
	$("body").find('#'+ id).attr('style',style);
	var width = $("#" + id)[0].offsetWidth;
	$("#" + id).remove();
	return width;
}

function jsInnerTimeout()
{
	var codeObj=$("#getValiCode");
	
	var intAs=parseInt(codeObj.attr("IntervalTime"));

	intAs--;
	codeObj.attr("disabled",true);
	if(intAs<=-1)
	{
		codeObj.removeAttr("disabled");
		codeObj.removeClass("auth_code_grey");
		if(isMobile()) {
			if(codeObj.attr("type") && codeObj.attr("type").toLowerCase() == "button")
			{
				codeObj.val(rss_new.common_Resend);
			}
			else
			{
				codeObj.find("span,a").text(rss_new.common_Resend);
			}
		}
		codeObj.val(rss_new.common_Resend);// 兼容老页面，老页面是一个按钮
		codeObj.find("span:first,a:first").text(rss_new.common_Resend);// 新页面
		codeObj.attr("IntervalTime",60);
		return true;
	}
	
	
	if(isMobile()){
		if(codeObj.attr("type") && codeObj.attr("type").toLowerCase() == "button")
		{
			codeObj.val(rss_new.common_Resend_time.format(intAs));
		}
		else
		{
			codeObj.find("span,a").text(rss_new.common_Resend_time.format(intAs));
		}
	}
	else{
		//PC的时候就这么执行
		codeObj.val(rss_new.common_Resend_time.format(intAs));
		codeObj.find("span:first,a:first").text(rss_new.common_Resend_time.format(intAs));// 新页面
	}
	
	codeObj.attr("IntervalTime",intAs);
	
	setTimeout("jsInnerTimeout()",1000);
}

// 用于判断当前设备是否是移动设备
function isMobile()
{
	var userAgentInfo=navigator.userAgent;
    var Agents=["Android","iPhone","SymbianOS", "Mobile",
        "Windows Phone","iPad","iPod"];
    
    var flag = false;
    for(var v = 0; v<Agents.length;v++){
    	if(userAgentInfo.indexOf(Agents[v])>0)
    	{
    		flag=true;
    		break;
    	}
    }
    return flag;
}


// only for web
function getAccountListFun()
{
     var fullUserAccount = $("#fullUserAccount").val();
	 var username=$("#resetByIdFrom input[name='formBean.username']").val();
	 if (fullUserAccount) {
	     username = fullUserAccount;
	 }
	 var reqClientType=$("#resetByIdFrom input[name='formBean.reqClientType']").val();
	 var buttonSmt=$("#btnSubmit");
	//让按钮失效，为了保证按钮不会被多次点击
	 buttonSmt.attr("disabled","disabled");
	 
	 var randomCodeVal = $("#randomCode").val();
	 
	 var strParms="getUserAccInfo";
	 var dataParms={
	 		 "operType":1,
		     "randomCode": randomCodeVal,
		     "session_code_key" : "p_forget_byid_session_ramdom_code_key",
			 "userAccount":username,
			 "reqClientType":reqClientType
	 };
	 ajaxHandler(strParms,dataParms,function(data){
		 buttonSmt.removeAttr("disabled");
		 var isSuccess=data.isSuccess;
		 var errorCode=data.errorCode;
		 if(isSuccess=="1") 
		 {
			 var userAcctInfoList=data.userAcctInfoList;
			 var accountTypes = new Array();
			 $.each(userAcctInfoList,function(n,value) {   
				 accountTypes.push(value.accountType);
			 });  
			
			 if(accountTypes.length<=0) 
		     {
				 showUsernameError(rss.accountNotActive);
				 return false;
		     }
			 else
			 {
				 
			 
				  // 账号申诉2.0
				  var result = getTwoFacRecovery(data.userID, username);
				  return result;
		      }
				 
		
		 }
		 else 
		 {
			 if(errorCode == "10000001") 
			 {
				 showUsernameError( rss.error_10000001);
			 }else if(errorCode == "10000004") 
			 {
				 showUsernameError( rss.error_10000004);
			 }else if(errorCode == "10000002") 
			 {
				 showUsernameError( rss.error_10000002);
			 }
			 else if(errorCode=="10000201")
			 {
				 showRandomCodeError(rss.common_js_wrongcode);
			 }
			 else if(errorCode=="70001401")
			 {
				 showSystemError(rss.error_70001401,rss.iKnowBtn)
			 }
			 else 
			 {
				 showUsernameError( rss.user_not_exsit);
			 }
			 return false;
		 }
	 },function(){},true,"json");
}


function getTwoFacRecovery(userID, userAccount)
{
	 var strParms="getTwoFacRecovery";
	 var dataParms={
	 };
	 
	// 账号申诉2.0
	ajaxHandler(strParms,dataParms,function(data){
		var accountRecoverState = data.accountRecoverState;
		var errorCode=data.errorCode;
		if(data.isSuccess=="1") 
		{
			 if (localInfo.clientNonce)
		     {
				 // extInfo、sceneID、clientNonce
				 gotoUrl(data.nextStepUrl + localInfo.urlQurey + "&sceneID=1&clientNonce=" + localInfo.clientNonce + "&extInfo=" + data.extInfo);
			 }
			 else
		     {
				 gotoUrl(data.nextStepUrl + localInfo.urlQurey + "&sceneID=1&extInfo=" + data.extInfo);
			 }						 
			 
			 return true;
		}
		else
		{
			 if(errorCode == "10000001") 
			 {
				 $("#error-tips").html( rss.error_10000001);
			 }else if(errorCode == "10000004") 
			 {
				 $("#error-tips").html( rss.error_10000004);
			 }else if(errorCode == "10000002") 
			 {
				 $("#error-tips").html( rss.error_10000002);
			 }else if(errorCode == "10000003"){
				$("#error-tips").html(rss.error_10000003);
			 }
			 else if(errorCode == "10001003") 
			 {
				 showUsernameError( rss.error_10001003);
			 }
			 else if(errorCode == "10001004") 
			 {
				 showUsernameError( rss.error_10001004);
			 }
			 else if(data.errorCode=="70001401")
			 {
				 $("#error-tips").html( rss.error_70001401);
			 }
			 else 
			 {
				 $("#error-tips").html( rss.user_not_exsit);
			 }
			 return false;			
		}
	});		
}


function resetPwdByEmailFun()
{
	 var email=jQuery("#forgetByEmailForm select[name='formBean.emailaccount']").val();
	 
	 var strParms="resetPwdByEmail";
	 var dataParms={
			 "email":email
	 };
	 ajaxHandler(strParms,dataParms,function(data){
		 	var flag=data.isSuccess;
			if(flag=="1")
			 {
				var myUrl = localHttps + "/portal/resetPwd/forgetSuccess.html?email=" + email +"&lang="+lang
				 +"&service="+getUrlParm('service')+"&loginChannel="+getUrlParm('loginChannel')+"&deviceID="+getUrlParm('deviceID')+"&isDialog="+getUrlParm('isDialog')
				 +"&loginUrl="+getUrlParm('loginUrl')+"&viewType="+getUrlParm('viewType')+"&adUrl="+getUrlParm('adUrl')+"&themeName="+getUrlParm('themeName') ;
				
				var bizIfmUrl = getUrlParm('bizIfmUrl');
				
				if (bizIfmUrl)
				{
					myUrl = myUrl + "&bizIfmUrl=" + bizIfmUrl;
				}
				
				gotoUrl(myUrl);
				 
				 return true;
			 }
			 else 
			 {
				 if(data.errorCode=="10000601") {
					 showError($("#forget_msg"), rss.dialogLoseEffect);
					 setTimeout(function ss(){
						gotoUrl(localHttps + "/portal/resetPwd/forgetbyid.html" + localInfo.urlQurey);
						 
					 },2000); 
				 }
				 if(data.errorCode=="10000001" || data.errorCode=="70001201")
				 {
					 showError($("#forget_msg"), rss.dialogLoseEffect);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else if(data.errorCode=="70001401")
				 {
					 showError($("#forget_msg"), rss.dialogLoseEffect);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else if(data.errorCode=="70002001")
				 {
					 showError($("#forget_msg"), rss.error_70002001);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else if(data.errorCode=="70002017")
				 {
					 showError($("#forget_msg"), rss.error_70002017);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else if(data.errorCode=="70002008")
				 {
					 showError($("#forget_msg"), rss.error_70002008);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else if(data.errorCode=="70001102")
				 {
					 showError($("#forget_msg"), rss.error_70001102_0);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else if(data.errorCode=="70001104")
				 {
					 showError($("#forget_msg"), rss.error_70001104_0);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else if(data.errorCode=="70002019")
				 {
					 showError($("#forget_msg"), rss.error_70002019);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else if(data.errorCode=="70002009")
				 {
					 showError($("#forget_msg"), rss.error_70002009);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else if(data.errorCode=="10000004")
				 {
					 showError($("#forget_msg"), rss.error_10000004);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else if(data.errorCode=="10000002")
				 {
					 showError($("#forget_msg"), rss.error_10000002);
					 $("#randomCode").val("");
					 $("#randomCode").focus();
					 changeRandomCode();
				 }
				 else 
				 {
					 showError($("#forget_msg"), rss.getpwdfail);
				 }
			 }
	 },function(){},true,"json");
}
//错误提示
function showErrorNew(boxObj, tipObj, errorInfo)
{
	if(boxObj)
	{
		boxObj.addClass("input-error-EMUI5");
		tipObj.html(errorInfo).addClass("error-tips-EMUI5");
	}
	else 
	{
		tipObj.html(errorInfo).addClass("errorColor");
	}
	
}
function hideErrorNew(boxObj, tipObj)
{
	boxObj.removeClass("input-error-EMUI5");
	tipObj.html("").removeClass("error-tips-EMUI5");
}
function hideErrorBox(boxObj)
{
	boxObj.removeClass("input-error-EMUI5");
}
//弹窗提示错误
function showPopError(errorMsg)
{
	showSystemError(errorMsg,rss.iKnowBtn);
}