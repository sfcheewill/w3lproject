@extends('Home.HomePublic.public')
@section('title','个人中心')
@section('content')
<html>
 <head>
<script src="/static/homes/person/push.js"></script><script>

var domainYY   = '//yy.vmall.com';
var domainRush = '//buy.vmall.com';

var domainEdit = 'https://customization.vmall.com';

var domainMain = 'https://www.vmall.com';
var domainWap = 'https://m.vmall.com';
var domainCart = '//cart.vmall.com';
var domainRemark = '//remark.vmall.com';
var domainRms = 'https://rms.vmall.com';
var domainShoppingConfig = '//addr.vmall.com';
var imagePath = 'https://res.vmallres.com/20181122/images';
var domainAccount = '//www.vmall.com';
var isUseAccount = 'false';
var upBindPhoneAddr = 'https://hwid1.vmall.com/oauth2/userCenter/bindAccount/bindMobileAccount_1.jsp?lang=zh-cn&amp;themeName=cloudTheme&amp;reqClientType=26';
var dominWapRecycle ='https://coop.aihuishou.com/huawei?app=false';
var domainCds = 'https://cds.vmall.com';
var domainIps = 'https://cashier.vmall.com/cashier/voucher';
var scriptPath = 'https://res9.vmallres.com/20181122/js';
var domainAms ='https://act.vmall.com';
var domainUc ='https://member.vmall.com';
var openApiDomain='https://openapi.vmall.com';
var addressFrontRegex = '[A-Za-z0-9０-９ａ-ｚＡ-Ｚ一-龥.?!,。？！，、；：＇＂（）［］｛｝;:&#039;&#034;()\\[\\]{}──·····．《》〈〉＜＞.《》〈〉&lt;&gt;·—＿＿＿＿＊____*□=／\/▲●～~……→＠＃@#￥％＆＊%&amp;*\\\\——－＝＼　 -]{1,}';
var easeBuyDomain = 'https://easy.vmall.com';
var scriptPaths = 'https://res10.vmallres.com/20181122/js';
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
						var wapUri = domainWap
								+ uri.substring(uri.indexOf("/product"));
						window.location.href = wapUri;
					}
				}
			}
	}catch (err){}
})();
</script>
<title>首页_个人中心_华为商城</title>
<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="/static/homes/person/ec.core.base.min.css" rel="stylesheet" type="text/css">

<link href="/static/homes/person/main.min.css" rel="stylesheet" type="text/css">
<script src="/static/homes/person/jsapi.js" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="/static/homes/person/jquery-1.4.4.min.js"></script>
<script src="/static/homes/person/ec.core.js"></script> 
<script src="/static/homes/person/ec.business.min.js"></script> 
<script src="/static/homes/person/base.min.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="/static/homes/person/box-min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("ec.box/box-min.js","complete");})();</script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="/static/homes/person/XSSUtils.min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("/aes/XSSUtils.min.js","complete");})();</script><script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="/static/homes/person/esapi.js.下载" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader2');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader2 fail!');} return; }ol._setLoadStatus("/aes/esapi.js","complete");})();</script><script id="jsapi_loader3" loadtype="insert" type="text/javascript" src="/static/homes/person/Base.esapi.properties.min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader3');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader3 fail!');} return; }ol._setLoadStatus("/aes/resources/Base.esapi.properties.min.js","complete");})();</script>
<!--<script src="//webpublic.vmall.com/csrftoken.js?20180824"></script>-->
<script src="/static/homes/person/slider.min.js"></script>
<script src="/static/homes/person/swiper.min.js"></script>
 </head>
 <body>
  <div id="base_index" class="mc-index"> 
   <div class="hr-10"></div> 
   <div class="g"> 
    <!--面包屑 --> 
    <div class="breadcrumb-area fcn">
     <a href="https://www.vmall.com/">首页</a>&nbsp;&gt;&nbsp;
     <em id="personCenter"><a href="https://www.vmall.com/member/">我的商城</a></em>
     <em id="pathPoint"></em>
     <span id="pathTitle"></span>
    </div> 
   </div> 
   <div class="hr-10"></div> 
   <div class="g"> 
    <div class="fr u-4-5"> 
     <div class="fl mc-middle"> 
      <!-- 20170824-我的商城-用户信息-start --> 
      <div class="mc-user"> 
       <div class="clearfix"> 
        <div class="mc-user-card fl"> 
         <div class="user-head fl"> 
          <div class="user-canvas "> 
           <!--未登录时添加class="hide"--> 
           <span class="icon-vip-level-0" id="levelIcon"></span> 
           <div class="canvas-bg"> 
            <div class="canvas-left">
             <div style="transform: rotateZ(-125deg); background: -webkit-gradient(linear, 0 100%, 0 0, from(rgb(240, 92, 32)), to(rgb(245, 133, 85)));"></div>
            </div>
            <!--起始度数-121deg为0%，增加度数到0deg时半圈结束--> 
            <div class="canvas-right">
             <div style="transform: rotateZ(-180deg);"></div>
            </div>
            <!--起始度数为为-180deg，增加度数到-59deg时为100%半圈结束--> 
           </div> 
          </div> 
          <p class="user-img"> <img src="{{session('upic')}}" /> </p> 
         </div> 
         <div class="mc-user-info fl "> 
          <div class="name">
           {{session('username')}}
          </div> 
          <a href="https://www.vmall.com/member/point" class="link">查看会员权益&nbsp;&gt;</a> 
          <a href="/person/create"  class="mc-user-btn">帐号中心</a> 
         </div> 
         <div class="mc-user-info fl hide">
          <!--未登录--> 
          <a href="https://www.vmall.com/member?t=15438183439401543818506616#" class="mc-user-login-btn">登录／注册</a> 
          <p>登陆后可查看您的会员权益</p> 
         </div> 
        </div> 
        <input type="hidden" id="myUserScores" value="0" /> 
        <input type="hidden" id="myGradeCode" value="0" /> 
        <input type="hidden" id="minScores" value="0" /> 
        <input type="hidden" id="nextNeedScores" value="100" /> 
        <div class="mc-user-huaban fl"> 
         <ul class="clearfix"> 
          <li> <a href="https://www.vmall.com/member/newpoint?t=1543818633251" class="p-icon p-icon-1"></a> <p class="p-dec">积分</p> <p class="p-price"><span id="balanceicon_myCenter" class="">0</span>分</p> </li> 
          <li> <a href="https://www.vmall.com/member/coupon?t=1543818633251" class="p-icon p-icon-2"></a> <p class="p-dec">优惠券</p> <p class="p-price"><span id="couponicon_myCenter">0</span>张</p> </li> 
          <li> <a href="https://www.vmall.com/member/balance?t=1543818633251" class="p-icon p-icon-3"></a> <p class="p-dec">代金券</p> <p class="p-price"><span id="balanceAmount_myCenter" class="">0.00</span>元</p> </li> 
         </ul> 
        </div> 
       </div> 
       <div class="hr-12"></div> 
       <div class="mc-user-portal"> 
        <ul class="clearfix"> 
         <li class="portal-icon-1"> <a href="https://www.vmall.com/member/order?t=1543818633251&amp;type=unpaid"><span id="un_payment"></span>待支付</a> <span id="un_payment_wechat" style="display:  none;"></span> </li> 
         <li class="portal-icon-2"> <a href="https://www.vmall.com/member/order?t=1543818633251&amp;type=send"><span id="un_received"></span>待收货</a> <span id="un_received_wechat" style="display:  none;"></span> </li> 
         <li class="portal-icon-3"> <a href="https://www.vmall.com/member/order?t=1543818633251&amp;type=nocomment"><span id="un_remark"></span>待评价</a> </li> 
         <li class="portal-icon-4"> <a href="https://www.vmall.com/member/exchange?t=1543818633251"><span></span>退换货</a> </li> 
         <li class="portal-icon-5"> <a href="https://www.vmall.com/member/recycle/index/aihuishou?t=1543818633251"><span></span>回收单</a> </li> 
        </ul> 
       </div> 
      </div> 
      <!-- 20170824-我的商城-用户信息-end --> 
      <!-- 20170822-我的商城-我的消息-start --> 
      <div class="mynews"> 
       <div class="hr-30"></div> 
       <div class="mc-title"> 
        <h3>我的消息</h3> 
       </div> 
       <div class="mynews-list">
        <!--1.到货通知 2.发货通知 3.待支付 4.左图右文 5.全图 6、电子发票提醒 其中4.5是系统消息--> 
        <!--全图--> 
        <div class="my_center"> 
         <input type="hidden" value="{&quot;wapUrl&quot;:&quot;https://msale.vmall.com/hwmate.html&quot;,&quot;webUrl&quot;:&quot;https://sale.vmall.com/hwmate.html&quot;,&quot;appUrl&quot;:&quot;https://asale.vmall.com/hwmate.html&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2018102703412076.png&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2018102703418474.png&quot;}" /> 
         <a href="https://sale.vmall.com/hwmate.html" class="banner " target="_blank" onclick="pushMyNewsProMsg(" ",this,1)=""> <img src="https://res0.vmallres.com/pimages//recommendmsg/2018102703412076.png" /> </a> 
        </div> 
        <!--全图--> 
        <div class="my_center"> 
         <input type="hidden" value="{&quot;wapUrl&quot;:&quot;https://m.vmall.com/product/10086983017283.html&quot;,&quot;webUrl&quot;:&quot;https://www.vmall.com/product/10086983017283.html&quot;,&quot;appUrl&quot;:&quot;https://mw.vmall.com/product/10086983017283.html?prdId=10086983017283&amp;page=productDetail&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2018111307461006.jpg&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2018111307469805.jpg&quot;}" /> 
         <a href="https://www.vmall.com/product/10086983017283.html" class="banner " target="_blank" onclick="pushMyNewsProMsg(" ",this,1)=""> <img src="https://res0.vmallres.com/pimages//recommendmsg/2018111307461006.jpg" /> </a> 
        </div> 
        <!--全图--> 
        <div class="my_center"> 
         <input type="hidden" value="{&quot;wapUrl&quot;:&quot;https://msale.vmall.com/smarthome.html&quot;,&quot;webUrl&quot;:&quot;https://sale.vmall.com/smarthome.html&quot;,&quot;appUrl&quot;:&quot;https://asale.vmall.com/smarthome.html&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/krh9hzlR3Wmk3fUbYH8G.png&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/ayHze8oWXcQvLUehh70H.png&quot;}" /> 
         <a href="https://sale.vmall.com/smarthome.html" class="banner " target="_blank" onclick="pushMyNewsProMsg(" ",this,1)=""> <img src="https://res0.vmallres.com/pimages//recommendmsg/krh9hzlR3Wmk3fUbYH8G.png" /> </a> 
        </div> 
        <!--左图右文--> 
        <div class="mynews-list-area my_center service_type_4 "> 
         <div class="m-image">
          <input type="hidden" value="{&quot;wapUrl&quot;:&quot;https://msale.vmall.com/hwpj.html&quot;,&quot;webUrl&quot;:&quot;https://sale.vmall.com/hwpj.html&quot;,&quot;appUrl&quot;:&quot;https://asale.vmall.com/hwpj.html&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2018102710179172.jpg&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2018102710172431.jpg&quot;}" />
          <img src="https://res0.vmallres.com/pimages//recommendmsg/2018102710179172.jpg" />
         </div> 
         <div class="m-title"> 
          <em class="m-info">华为车载充电器</em> 
          <em class="m-name">为你推荐</em> 
          <em class="m-time">2018-10-27 10:17</em> 
         </div> 
         <p class="m-detail">开车充电30分钟，从容一整天，晒单有机会赢3999携程礼品卡</p> 
         <a href="https://sale.vmall.com/hwpj.html" class="button-1 mynews-list-btn" target="_blank" onclick="pushMyNewsProMsg('华为车载充电器',this,0)">查看详情</a> 
        </div> 
        <!--左图右文--> 
        <div class="mynews-list-area my_center service_type_4 "> 
         <div class="m-image">
          <input type="hidden" value="{&quot;wapUrl&quot;:&quot;https://msale.vmall.com/hwpj.html&quot;,&quot;webUrl&quot;:&quot;https://sale.vmall.com/hwpj.html&quot;,&quot;appUrl&quot;:&quot;https://asale.vmall.com/hwpj.html&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2018102710162474.jpg&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2018102710168590.jpg&quot;}" />
          <img src="https://res0.vmallres.com/pimages//recommendmsg/2018102710162474.jpg" />
         </div> 
         <div class="m-title"> 
          <em class="m-info">华为无线充电器</em> 
          <em class="m-name">为你推荐</em> 
          <em class="m-time">2018-10-27 10:16</em> 
         </div> 
         <p class="m-detail">仅售99元起，支持HUAWEI Mate 20 pro 15W及iPhone系列 7.5W快充，晒单</p> 
         <a href="https://sale.vmall.com/hwpj.html" class="button-1 mynews-list-btn" target="_blank" onclick="pushMyNewsProMsg('华为无线充电器',this,0)">查看详情</a> 
        </div> 
        <div class="f"> 
         <a href="javascript:;" class="button-fold button-fold-shrink hide">收起我的消息</a>
         <!--展开class="button-fold-expand"--> 
         <a href="javascript:;" class="button-fold button-fold-expand hide">更多历史消息</a> 
        </div> 
       </div> 
      </div> 
      <!-- 20170822-我的商城-我的消息-end --> 
      <!-- 20170826-我的商城-最近浏览-start --> 
      <div class="mc-rolling" style="display: none;"> 
       <div class="mc-title"> 
        <h3>最近浏览</h3> 
       </div> 
       <div class="hr-20"></div> 
       <div class="goods-rolling relative swiper-container" id="mc-rolling-history"> 
        <ul class="grid-list clearfix swiper-wrapper"></ul> 
        <div class="grid-btn btn-prev swiper-button-prev disabled">
         <span></span>
        </div> 
        <div class="grid-btn btn-next swiper-button-next">
         <span></span>
        </div> 
       </div> 
      </div> 
      <!-- 20170825-我的商城-最近浏览-end --> 
     </div> 
     <div class="fr mc-right">
      <a href="https://sale.vmall.com/welcome.html" target="_blank"><img src="/static/homes/person/20180718165254411.jpg" title="新人见面礼.jpg" style="float:none;" /> </a>
      <div class="hr-20"></div>
      <div class="mc-title">
       <h3>会员推荐</h3>
      </div>
      <div class="hr-20"></div>
      <div class="mc-recommend-banner"> 
       <a href="https://www.vmall.com/privilege" target="_blank"><img src="/static/homes/person/20170922191552609.jpg" /></a>
       <a href="https://www.vmall.com/privilege" target="_blank"><img src="/static/homes/person/20170922191631928.jpg" /></a>
       <a href="https://www.vmall.com/privilege" target="_blank"><img src="/static/homes/person/2017092219165256.jpg" /></a>
       <a href="https://www.vmall.com/recycle?url=%3Fpid%3D1032" target="_blank"> <img src="/static/homes/person/20170922191711677.jpg" /></a>
      </div>
     </div> 
     <script>
var accountCenterUrl="https://hwid1.vmall.com/oauth2/userCenter/hwAccount?reqClientType=26&loginChannel=26000000&themeName=cloudTheme&lang=zh-cn";
ec.ready(function() {
	//加载最近浏览历史
	ec.product.history.load(function(list){
		var html = [], p;
		$(".fl.u-1-5").after($("#history-ftl").val());
		if(!list || list.length ==0)
		{
			$(".mc-rolling").hide();
			$(".mc-rolling ul").html("");
			return;
		}
		for(var i = 0 ; i < list.length ; i++)
		{
			p = list[i];
			html.push('<li class="grid-items swiper-slide"><a class="thumb" target="_blank" href="/product/'+p.id+'.html" title="'+p.briefName+'">');
            html.push('<p class="grid-img"><img src="'+ec.mediaPath+p.photoPath+'428_428_'+p.photoName+'" alt="'+p.briefName+'"/></p>');
            html.push('<h3 class="grid-title"><span>'+p.name+'</span></h3>');
            html.push('</a></li>');
		}
		$(".mc-rolling ul").html(html.join(""));
		$(".mc-rolling").show();
	   
	    var len = $('.swiper-slide').length;
	     if(len<=4){
	     	$('.swiper-button-next').addClass('disabled');
	     	$('.swiper-button-prev').addClass('disabled');
	     }else{
	     	$('.swiper-button-next').removeClass('disabled');
	     }
	      //是否需要左右滚动
			var mySwiper = new Swiper('.swiper-container', {
				slidesPerView: 4,
				slidesPerGroup: 4,
		    });
		    //	左边箭头
		    $('.swiper-button-prev').click(function(){
		//		插件向左切换效果
				mySwiper.swipePrev();
			})
		//	右边箭头
			$('.swiper-button-next').click(function(){
				mySwiper.swipeNext();
			})
    	
	} );
});
//遍历type=4 左图右文extendParam下面的值
$(".service_type_4 input").each(function(){
	var jsonStr_4=$(this).val();
	if(jsonStr_4 != ""){
		var obj_4 = JSON.parse(jsonStr_4);
		$(this).parent().parent().find(".m-image img").attr("src","https://res0.vmallres.com/pimages/"+obj_4.webPicUrl);
		$(this).parent().parent().children("a:last-child").attr("href",obj_4.webUrl);
	}
})
//遍历type=5 全图extendParam下面的值
$(".my_center input").each(function(){
	var jsonStr_5=$(this).val();
	if(jsonStr_5 != ""){
		var obj_5 = JSON.parse(jsonStr_5);
		$(this).parent().find("a img").attr("src","https://res0.vmallres.com/pimages/"+obj_5.webPicUrl);
		$(this).parent().find("a").attr("href",obj_5.webUrl);
	}
})

//遍历type=1 到货通知extendParam下面的值
$(".mynews-list-area-2 input").each(function(){
	var jsonStr_1=$(this).val();
	if(jsonStr_1 != ""){
		var obj_1 = JSON.parse(jsonStr_1);
		$(this).parent().children("a:last-child").attr("href","https://www.vmall.com/product/"+obj_1.prdId+".html");
	}
})
//遍历type=2 发货通知extendParam下面的值
$(".mynews-list-area-1 input").each(function(){
	var jsonStr_2=$(this).val();
	if(jsonStr_2 != ""){
		var obj_2 = JSON.parse(jsonStr_2);
		$(this).parent().children("a:last-child").attr("href","https://www.vmall.com/member/order-"+obj_2.orderCode);
	}
})
//遍历type=3 代付款extendParam下面的值
//$(".mynews-list-area-3 input").each(function(){
	//var jsonStr_3=$(this).val();
	//if(jsonStr_3 != ""){
		//var obj_3 = JSON.parse(jsonStr_3);
		//$(this).parent().children("a:last-child").attr("href","https://www.vmall.com/member/order-"+obj_3.orderCode);
	//}
//})
//遍历type=6 电子发票extendParam下面的值
$(".mynews-list-area-5 input").each(function(){
	var jsonStr_6=$(this).val();
	if(jsonStr_6 != ""){
		var obj_6 = JSON.parse(jsonStr_6);
		$(this).parent().children("a:last-child").attr("href","https://www.vmall.com/member/order-"+obj_6.orderCode);
	}
})

//  展开收起效果
	var mynewsLenth = $('.mynews-list .my_center').length;
	//  超过五个就隐藏掉
    if(mynewsLenth > 5){
    	$('.button-fold-expand').show();
    	overHide();
    }
    function overHide(){
     	for(var i=5;i<mynewsLenth;i++){
			$('.mynews-list .my_center').eq(i).hide();
		}
     }
	//  展开更多消息
    $('.button-fold-expand').click(function(){
    	$('.button-fold-expand').hide();
    	$('.mynews-list .my_center').show();
    	$('.button-fold-shrink').show();
    })
	//  收起更多消息
     $('.button-fold-shrink').click(function(){
    	$('.button-fold-shrink').hide();
    	$('.mynews-list .my_center').show();
    	$('.button-fold-expand').show();
    	overHide();
    })
    
    //为你推荐数据上报
    function pushMyNewsProMsg(name,dom,type)
    {	
    	var adid = "";
    	var url = "";
    	//左图右文：0,全图：1
    	if(type == 0)
    	{
    		adid = $(dom).parent().find(".m-image img").attr("src");
    		url = $(dom).parent().children("a:last-child").attr("href");
    	}
    	else if(type == 1)
    	{
    		adid = $(dom).find("a img").attr("src");
    		url = $(dom).find("a").attr("href");;
    	}
    	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
  			"name":name,
  			"ADID":adid,
  			"URL":url,
  			"click":"1"
  			}

		};
		ec.account.dapPushMsg("300140101",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300140101", "link", value]);
    }
    
</script> 
     <script src="/static/homes/person/index.min.js"></script>
     <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181122/js/common/base/jquery.form-2.49.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script>
     <script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181122/js/common/base/ajax.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script>
     <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="/static/homes/person/jquery.form-2.49.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script>
     <script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="/static/homes/person/ajax.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script> 
     <script src="/static/homes/person/zhima.min.js"></script> 
     <script src="/static/homes/person/swiper.min.js(1)"></script>
    </div> 
    <div class="fl u-1-5"> 
     <!-- 20170823-左边菜单-start --> 
     <div class="mc-menu-area">
  <div class="h"><a href=""><span>我的商城</span></a></div>
    <div class="b">
        <ul>
            <li>
                <h3 class="icon-mc-mail"><a href="/homestand"><span id="li-msg">消息中心<em></em></span></a></h3>
            </li>
            <li>
                <h3 class="icon-mc-help"><a href="" target="_blank"><span>帮助中心</span></a></h3>
            </li>
          <li>
                <h3 class="icon-mc-order"><span>订单中心</span></h3>
              <ol>
                  <li id="li-order"><a href="/homeorder"><span>我的订单</span></a></li>
                  <li id="li-order-small" style="display: none;"></li>
                  <li id="li-exchange"><a href=""><span>我的退换货</span></a></li>
                  <li id="li-refunds"><a href=""><span>我的退款</span></a></li>
                  <li id="li-recover"><a href=""><span>我的回收单</span></a></li>
                  <li id="li-prdRemark"><a href=""><span>商品评价</span></a></li>
                </ol>
            </li>
            <li>
                <h3 class="icon-mc-asset"><span>我的资产</span></h3>
                <ol>
                    <li id="li-newpoint"><a href="/userlike"><span>我的收藏</span></a></li>
                    <li id="li-coupon"><a href=""><span>我的优惠券</span></a></li>
                    <li id="li-balance"><a href=""><span>我的代金券</span></a></li>
                    <li id="li-petal"><a href=""><span>我的花瓣</span></a></li>
                    <li id="li-point"><a href=""><span>等级与特权</span></a></li>
                </ol>
            </li>
            <li>
                <h3 class="icon-mc-support"><span>购买支持</span></h3>
              <ol>
                    <li id="li-myAddress" class="current"><a href="/usercity"><span>收货地址管理</span></a></li>
                    <li id="li-authentication"><a href=""><span>实名认证</span></a></li>
                    <li id="li-myAppointment"><a href=""><span>我的预约</span></a></li>
                    <li id="li-notification"><a href=""><span>到货通知</span></a></li>
                    <li id="li-myeasybuy"><a href=""><span>我的优享购</span></a></li>
                    <li id="li-enterprise" class="hide"></li><!-- 优惠内购 -->
                    <li id="li-o2o" class="hide"><a href=""><span>O2O商城</span></a></li>
                </ol>
            </li>
            <li id="li-company" class="hide" style="display: none;">
              <h3 class="icon-mc-business"><span>企业购</span></h3>
              <ol>
                <li id="li-companyUserInfo"></li>
                <li id="li-companyOrder"></li>
                <li id="li-companyOrderList"></li>
                <li id="li-companyQues"></li>
              </ol>
            </li>
        </ul>
    </div>
</div> 
     <!-- 20170823-左边菜单-end --> 
     <script src="/static/homes/person/leftMenu.js"></script> 
    </div> 
   </div> 
   <div class="hr-80"></div> 
  </div>
 </body>
</html>
@endsection