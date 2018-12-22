@extends('Home.HomePublic.public')
@section('title','站内信')
@section('content')
<html>
 <head>
 <script src="/static/homes/standdesc/push.js"></script><script>

var domainYY   = '//yy.vmall.com';
var domainRush = '//buy.vmall.com';

var domainEdit = 'https://customization.vmall.com';

var domainMain = 'https://www.vmall.com';
var domainWap = 'https://m.vmall.com';
var domainCart = '//cart.vmall.com';
var domainRemark = '//remark.vmall.com';
var domainRms = 'https://rms.vmall.com';
var domainShoppingConfig = '//addr.vmall.com';
var imagePath = 'https://res.vmallres.com/20181205/images';
var domainAccount = '//www.vmall.com';
var isUseAccount = 'false';
var upBindPhoneAddr = 'https://hwid1.vmall.com/oauth2/userCenter/bindAccount/bindMobileAccount_1.jsp?lang=zh-cn&amp;themeName=cloudTheme&amp;reqClientType=26';
var dominWapRecycle ='https://coop.aihuishou.com/huawei?app=false';
var domainCds = 'https://cds.vmall.com';
var domainIps = 'https://cashier.vmall.com/cashier/voucher';
var scriptPath = 'https://res9.vmallres.com/20181205/js';
var domainAms ='https://act.vmall.com';
var domainUc ='https://member.vmall.com';
var openApiDomain='https://openapi.vmall.com';
var addressFrontRegex = '[A-Za-z0-9０-９ａ-ｚＡ-Ｚ一-龥.?!,。？！，、；：＇＂（）［］｛｝;:&#039;&#034;()\\[\\]{}──·····．《》〈〉＜＞.《》〈〉&lt;&gt;·—＿＿＿＿＊____*□=／\/▲●～~……→＠＃@#￥％＆＊%&amp;*\\\\——－＝＼　 -]{1,}';
var easeBuyDomain = 'https://easy.vmall.com';
var scriptPaths = 'https://res10.vmallres.com/20181205/js';
var dapDomain='https://dap.vmall.com';


var pmsHttpDomain = '//product.vmall.com/';
</script>
<script>
(function(){
	try
	{
		cookieGet=function(a){var f=null;if(document.cookie&&document.cookie!=""){var d=document.cookie.split(";");for(var c=0;c<d.length;c++){var b=(d[c]||"").replace(/^(\s|\u00A0)+|(\s|\u00A0)+$/g,"");if(b.substring(0,a.length+1)==(a+"=")){var e=function(i){i=i.replace(/\+/g," ");var h='()<>@,;:\\"/[]?={}';for(var g=0;g<h.length;g++){if(i.indexOf(h.charAt(g))!=-1){if(i.startWith('"')){i=i.substring(1)}if(i.endWith('"')){i=i.substring(0,i.length-1)}break}}return decodeURIComponent(i)};f=e(b.substring(a.length+1));break}}}return f};
		var uri = location.href;
			//增加产品详情页判断 
			var prodReg = /\/\d+\.html/;
			var isProDetail = prodReg.test(uri);
			var isHonor = uri.indexOf(".com/honor") >0;
			var isHuawei = uri.indexOf(".com/huawei")>0;
			var isRecyle = uri.indexOf(".com/recycle")>0;
			var isNotice = uri.indexOf(".com/notice")>0;		
			var isList = uri.indexOf(".com/list")>0; //列表页
			if (uri == domainMain || uri == (domainMain + "/index.html")
					|| uri == (domainMain + "/") || isProDetail|| isHonor || isHuawei||isRecyle|| isNotice||isList) {
				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i
						.test(navigator.userAgent)) {
					var redirectWap = cookieGet("redirectWap");
					if (!redirectWap == "1" && !isProDetail) {
						if (isHonor) {
							window.location.href = domainWap + "/honor";
						} else if (isHuawei) {
							window.location.href = domainWap + "/huawei";
						} else if (isRecyle) {
							window.location.href = dominWapRecycle;
						} else if (isNotice) {
							var wapUri = domainWap
							+ uri.substring(uri.indexOf("/notice"));
							window.location.href = wapUri;
						} else if (isList) {
							var wapUri = domainWap + "/category/detail"
			                   + uri.substring(uri.indexOf("/list")+5)
			                   + uri.substring(uri.indexOf("/list")+5);
			                window.location.href = wapUri;
                        } else {
							window.location.href = domainWap;
						}
					} else if (!redirectWap == "1" && isProDetail) {
						var wapUri = domainWap + '/product/' + uri.match(/\/(\d+)\.html/)[1] + '.html';
						window.location.href = wapUri;
					}
				}
			}
	}catch (err){}
})();
</script>
<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="/static/homes/standdesc/ec.core.base.min.css" rel="stylesheet" type="text/css">

<link href="/static/homes/standdesc/main.min.css" rel="stylesheet" type="text/css">
<script src="/static/homes/standdesc/jsapi.js.下载" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="/static/homes/standdesc/jquery-1.4.4.min.js"></script>
<script src="/static/homes/standdesc/ec.core.js"></script> 
<script src="/static/homes/standdesc/ec.business.min.js"></script> 
<script src="/static/homes/standdesc/base.min.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="/static/homes/standdesc/box-min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("ec.box/box-min.js","complete");})();</script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="/static/homes/standdesc/XSSUtils.min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("/aes/XSSUtils.min.js","complete");})();</script><script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="/static/homes/standdesc/esapi.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader2');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader2 fail!');} return; }ol._setLoadStatus("/aes/esapi.js","complete");})();</script><script id="jsapi_loader3" loadtype="insert" type="text/javascript" src="/static/homes/standdesc/Base.esapi.properties.min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader3');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader3 fail!');} return; }ol._setLoadStatus("/aes/resources/Base.esapi.properties.min.js","complete");})();</script>
<!--<script src="//webpublic.vmall.com/csrftoken.js?20180824"></script>-->
<script src="/static/homes/standdesc/slider.min.js"></script>
<script src="/static/homes/standdesc/swiper.min.js"></script>
 </head>
 <body>
  <div id="base_index" class=""> 
   <div class="hr-10"></div> 
   <div class="g"> 
    <!--面包屑 --> 
    <div class="breadcrumb-area fcn">
     <a href="https://www.vmall.com/">首页</a>&nbsp;&gt;&nbsp;
     <em id="personCenter"><a href="https://www.vmall.com/member/">我的商城</a></em>
     <em id="pathPoint">&nbsp;&gt;&nbsp;</em>
     <span id="pathTitle">站内信</span>
    </div> 
   </div> 
   <div class="hr-10"></div> 
   <div class="g"> 
    <div class="fr u-4-5">
     <!-- 20141212-栏目-start --> 
     <div class="section-header"> 
      <div class="fl"> 
       <h2><span>站内信</span></h2> 
      </div> 
     </div> 
     <!-- 20141212-栏目-end --> 
     <div class="hr-20"></div> 
     <!-- 20141218-站内信-内容-start --> 
     <div class="myMail-detail"> 
      <div class="h"> 
       <div class="mail-soure">
        <label>发信人：<span>{{$standdesc->sendperson}}</span></label>
        <label>发送时间：<span>{{date('Y-m-d',$standdesc->sendtime)}}</span></label>
       </div> 
       <h1>{{$standdesc->title}}</h1> 
      </div> 
      <div class="b">
        {!!$standdesc->content!!} 
      </div> 
     </div> 
     <input type="hidden" id="isread" value="1" /> 
     <input type="hidden" id="msg_type" value="3" /> 
     <!-- 20141218-站内信-内容-end --> 
     <script>
ec.ready(function(){
	$("#li-msg").css("color","#ca141d");
	$("#li-msg em").css("color","#ca141d");
	$("#pathTitle").html("站内信");
	var isread = $("#isread").val();
	var msg_type = $("#msg_type").val();
	//未读状态且为评价或互动时未读数量减一
	if(isread == 0){
		if(msg_type == 3 || msg_type == 4){
			var oldCount = ec.util.cookie.get("vmallMyCenterMsg");
			var newCount =parseInt(oldCount)-1;
			if(newCount > 0 ){
				$("#li-msg em").text("("+(newCount)+")");
			}else{
				$("#li-msg em").text("");
			}
			ec.util.cookie.set("vmallMyCenterMsg",newCount);
		}
	}
});
</script>
    </div> 
    <div class="fl u-1-5"> 
     <!-- 20170823-左边菜单-start --> 
     <div class="mc-menu-area"> 
      <div class="h">
       <a href="https://www.vmall.com/member?t=1545358241400"><span>我的商城</span></a>
      </div> 
      <div class="b"> 
       <ul> 
        <li> <h3 class="icon-mc-mail"><a href="https://www.vmall.com/member/msg?t=1545358241400"><span id="li-msg" style="color: rgb(202, 20, 29);">消息中心<em style="color: rgb(202, 20, 29);"></em></span></a></h3> </li> 
        <li> <h3 class="icon-mc-help"><a href="https://www.vmall.com/help/index.html" target="_blank"><span>帮助中心</span></a></h3> </li> 
        <li> <h3 class="icon-mc-order"><span>订单中心</span></h3> 
         <ol> 
          <li id="li-order"><a href="https://www.vmall.com/member/order?t=1545358241400"><span>我的订单</span></a></li> 
          <li id="li-order-small" style="display: none;"></li> 
          <li id="li-exchange"><a href="https://www.vmall.com/member/exchange?t=1545358241400"><span>我的退换货</span></a></li> 
          <li id="li-refunds"><a href="https://www.vmall.com/member/refunds?t=1545358241400"><span>我的退款</span></a></li> 
          <li id="li-recover"><a href="https://www.vmall.com/member/recycle/index/aihuishou?t=1545358241400"><span>我的回收单</span></a></li> 
          <li id="li-prdRemark"><a href="https://www.vmall.com/member/prdRemarkView?t=1545358241400"><span>商品评价</span></a></li> 
         </ol> </li> 
        <li> <h3 class="icon-mc-asset"><span>我的资产</span></h3> 
         <ol> 
          <li id="li-newpoint"><a href="https://www.vmall.com/member/newpoint?t=1545358241400"><span>我的积分</span></a></li> 
          <li id="li-coupon"><a href="https://www.vmall.com/member/coupon?t=1545358241400"><span>我的优惠券</span></a></li> 
          <li id="li-balance"><a href="https://www.vmall.com/member/balance?t=1545358241400"><span>我的代金券</span></a></li> 
          <li id="li-petal"><a href="https://www.vmall.com/member/petal?t=1545358241400"><span>我的花瓣</span></a></li> 
          <li id="li-point"><a href="https://www.vmall.com/member/point?t=1545358241400"><span>等级与特权</span></a></li> 
         </ol> </li> 
        <li> <h3 class="icon-mc-support"><span>购买支持</span></h3> 
         <ol> 
          <li id="li-myAddress"><a href="https://www.vmall.com/member/myAddress?t=1545358241400"><span>收货地址管理</span></a></li> 
          <li id="li-authentication"><a href="https://www.vmall.com/authmember/accesstoken?t=1545358241400"><span>实名认证</span></a></li> 
          <li id="li-myAppointment"><a href="https://www.vmall.com/member/myAppointment?t=1545358241400"><span>我的预约</span></a></li> 
          <li id="li-notification"><a href="https://www.vmall.com/member/notification?t=1545358241400"><span>到货通知</span></a></li> 
          <li id="li-myeasybuy"><a href="https://www.vmall.com/member/myeasybuy?t=1545358241400"><span>我的优享购</span></a></li> 
          <li id="li-enterprise" class="hide"></li>
          <!-- 优惠内购 --> 
          <li id="li-o2o" class="hide"><a href="https://www.vmall.com/o2o?t=1545358241400"><span>O2O商城</span></a></li> 
         </ol> </li> 
        <li id="li-company" class="hide" style="display: none;"> <h3 class="icon-mc-business"><span>企业购</span></h3> 
         <ol> 
          <li id="li-companyUserInfo"></li> 
          <li id="li-companyOrder"></li> 
          <li id="li-companyOrderList"></li> 
          <li id="li-companyQues"></li> 
         </ol> </li> 
       </ul> 
      </div> 
     </div> 
     <!-- 20170823-左边菜单-end --> 
     <script src="/static/homes/standdesc/leftMenu.js"></script>
     <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181205/js/common/base/jquery.form-2.49.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script>
     <script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181205/js/common/base/ajax.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script>
     <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="/static/homes/standdesc/jquery.form-2.49.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script>
     <script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="/static/homes/standdesc/ajax.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script> 
    </div> 
   </div> 
   <div class="hr-80"></div> 
  </div>
 </body>
</html>
@endsection