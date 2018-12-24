ec.load('ajax');
ec.load('ec.box');
ec.pkg('ec.leftMenu');
 

/* IE版本判断 */
var isIE = !!window.ActiveXObject;
var isIE6 = isIE && !window.XMLHttpRequest;
var isIE8 = isIE && !!document.documentMode;
var isIE7 = isIE && !isIE6 && !isIE8;
var validateBox,exchangeType=1,id="";
var storage=window.localStorage;
var validateBox,isInLastTimer=0;
var msgStartTag='<span class="label-error red">';
var msgEndTag='</span>';
 
//=========================ec.company的入口函数
ec.ready(function() {
	var companyUser = ec.util.cookie.get("companyUser");
	changeCompanyClass(companyUser);
	
	//var userIdO2O = ec.util.cookie.get("o2oUser");
	//changeO2OClass(userIdO2O);
	
	var weChatInfo = ec.util.cookie.get("weChatInfo");
	changeWechatClass(weChatInfo);
});
 
function changeCompanyClass(flag)
{
	if(flag.length<5)
	 {
      	$("#li-companyUserInfo").html('<a href="/member/company/info" ><span>企业购用户信息</span></a>');
    	$("#li-companyOrder").html('<a href="/member/company/intend" ><span>采购意向单</span></a>');
    	$("#li-companyOrderList").html('<a href="/member/company/order" ><span>企业购订单</span></a>');
    	$("#li-companyQues").html('<a href="/member/company/question" ><span>常见问题</span></a>');
    	$("#li-company").show();
	 }
	 else
	 {
		$("#li-companyUserInfo").html('');
    	$("#li-companyOrder").html('');
    	$("#li-companyOrderList").html('');
    	$("#li-companyQues").html('');
    	$("#li-company").hide();
	 }
}
 

function changeO2OClass(O2OType)
{
//	if(O2OType.length<5)
//	 {
//		 $("#li-o2o").removeClass();
//	 }
//	 else
//	 {
//		 if(!$("#li-o2o").hasClass("hide"))
//		 {
//			 $("#li-o2o").addClass("hide")
//		 }
//	 }
}


function changeWechatClass(weChatInfo)
{
	if(weChatInfo=="" || weChatInfo==null){
		
	}
	else{
		if(weChatInfo.length<5)
		{
			var allCountWechat = ec.util.cookie.get("vmallOrderCountWechat");
			$("#li-order-small").show();
			if(allCountWechat==0){
				$("#li-order-small").html('<a href="/member/orderWeChat?t="'+ new Date().getTime() +' ><span>小程序订单</span></a>');
			}if(allCountWechat>0){
				$("#li-order-small").html('<a href="/member/orderWeChat?t='+ new Date().getTime() +'" ><span>小程序订单<em>('+ allCountWechat +')</em></span></a>');
			}
			
			 var allCount = ec.util.cookie.get("vmallOrderCount");
		 	if(allCount==0){
		 		$("#li-order span").html("我的订单");
		 	}else if(allCount>0){
		 		$("#li-order span").html("我的订单<em>("+ allCount +")</em>");
		 	}
		}
		else
		{
			$("#li-order-small").html('');
			$("#li-order-small").hide();
		}
	}
}




