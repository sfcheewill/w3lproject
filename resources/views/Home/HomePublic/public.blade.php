<!DOCTYPE html>
<!-- saved from url=(0022)https://www.vmall.com/ -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="Content-Language" content="zh-cn" /> 
  <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />  -->
  <script src="/static/homes/index/push.js"></script>
  <script>

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
  <title>@yield('title')</title> 
  <meta name="description" content="华为商城是华为旗下面向全国服务的电子商务平台官网，我们提供正品华为手机(华为P20、荣耀V10、华为Mate10、荣耀Note10、荣耀Play、华为nova3、荣耀9i等)、平板电脑、配件等全新华为产品，品质保证！" /> 
  <meta name="keywords" content="华为商城,华为官网,华为手机官网,华为平板电脑,华为笔记本" /> 
  <meta name="mobile-agent" content="format=xhtml;url=http://m.vmall.com/" /> 
  <meta property="wb:webmaster" content="f62bd8cc2f7d9778" /> 
  <link rel="shortcut icon" href="https://www.vmall.com/favicon.ico" /> 
  <link href="/static/homes/index/ec.core.base.min.css" rel="stylesheet" type="text/css" /> 
  <link href="/static/homes/index/index.min.css" rel="stylesheet" type="text/css" /> 
  <script src="/static/homes/index/saved_resource" namespace="ec"></script>
  <!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]-->
  <!--[if IE 7]><script>ol.isIE7=true;</script><![endif]-->
  <!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
  <script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="/static/homes/index/XSSUtils.min.js" charset="utf-8"></script>
  <script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("/aes/XSSUtils.min.js","complete");})();</script>
  <script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="/static/homes/index/esapi.js" charset="utf-8"></script>
  <script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("/aes/esapi.js","complete");})();</script>
  <script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="/static/homes/index/Base.esapi.properties.min.js" charset="utf-8"></script>
  <script>(function(){var time = 0,el = document.getElementById('jsapi_loader2');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader2 fail!');} return; }ol._setLoadStatus("/aes/resources/Base.esapi.properties.min.js","complete");})();</script> 
  <!--[if lt IE 9]><script src="https://res9.vmallres.com/20181122/js/common/html5shiv.js"></script> <![endif]--> 
 </head> 
 <body class="wide" style="min-width: 1200px; overflow-x: hidden;"> 
  <div class="top-banner" id="top-banner-block"> 
   <!-- 顶部banner --> 
   <div class="top-banner-max hide" id="top-banner-max" style="overflow: hidden;"> 
    <div class="top-banner-img"> 
     <a title="折叠" href="javascript:;" class="button-top-banner-min" id="top-banner-max-toggle">-</a> 
    </div> 
   </div> 
   <!-- 顶部banner end --> 
  </div> 
  <img src="/static/homes/index/icon-common.png" class="hide" /> 
  <!-- 20130605-qq-彩贝-start --> 
  <div class="qq-caibei-bar hide" id="caibeiMsg"> 
   <div class="layout"> 
    <div class="qq-caibei-bar-tips" id="HeadShow"></div> 
    <div class="qq-caibei-bar-userInfo" id="ShowMsg"></div> 
   </div> 
  </div> 
  <!-- 20130605-qq-彩贝-end --> 
  <div class="shortcut"> 
   <div class="layout"> 
    <div class="s-sub"> 
     <ul> 
      <li><a href="https://www.vmall.com/" onclick="pushHeaderMsg('首页','https://www.vmall.com')">首页</a></li> 
      <li><a href="http://consumer.huawei.com/cn/" target="_blank" onclick="pushHeaderMsg('华为官网','http://consumer.huawei.com/cn/')">华为官网</a></li> 
      <li><a href="http://www.honor.cn/" target="_blank" onclick="pushHeaderMsg('荣耀官网','http://www.honor.cn/')">荣耀官网</a></li> 
      <li><a href="http://club.huawei.com/" target="_blank" onclick="pushHeaderMsg('花粉俱乐部','http://club.huawei.com')">花粉俱乐部</a></li> 
      <li><a href="javascript:;" rel="nofollow" onclick="pushHeaderMsgPriority('V码(优购码)','https://www.vmall.com/priority')">V码(优购码)</a></li> 
      <li><a href="https://www.vmall.com/company" target="_blank">企业购</a></li> 
      <li class="s-hwep hide" id="li-enterprise-preferential"></li> 
      <li><a href="javascript:;" onclick="showSelectRegion();pushHeaderMsg('Select Region','')">Select Region</a></li> 
     </ul> 
    </div> 
    <div class="s-main "> 
     <img src="/static/homes/index/bg71.png" class="hide" /> 
     <ul> 
      <li id="unlogin_status"> 
       <div id="top_unlogin" class="header-toolbar"> 
        <!-- 2017-02-15-头部-工具栏-焦点为header-toolbar-item增加ClassName:hover --> 
        <div class="header-toolbar-item"> 
         <div class="i-login"> 
          <div class="h"> 
           <div class=""> 
            <a id="top-index-loginUrl" href="javascript:;" rel="nofollow" onclick="pushLoginMsgInfoPerson('登录','')">请登录</a> 
            <a href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&amp;loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn" rel="nofollow" onclick="pushLoginMsg('注册','')">&nbsp;&nbsp;注册</a> 
           </div> 
          </div> 
         </div> 
        </div> 
       </div> </li> 
      <li id="login_status" class="hide"> 
       <div id="top_login" class="header-toolbar hide"> 
        <div class="s-dropdown"> 
         <div class="h h-wide" id="up_loginName-hover"> 
          <a class="icon-dropdown" href="https://www.vmall.com/member?t=1543818343940" rel="nofollow" target="_blank" onclick="pushLoginMsg('已登录','用户名')"><span id="up_loginName"></span></a>&nbsp; 
         </div> 
         <div class="b"> 
          <!-- 2017-06-19-个人信息-start --> 
          <div class="dropdown-i-mall"> 
           <div class="i-mall-prompt clearfix"> 
            <div class="user-head fl"> 
             <div class="user-canvas "> 
              <span id="user-vip-level-tips" class="icon-vip-level-0"></span> 
              <div class="canvas-bg"> 
               <div class="canvas-left">
                <div id="canvas-left" style="transform: rotateZ(-121deg);"></div>
               </div> 
               <div class="canvas-right">
                <div id="canvas-right"></div>
               </div> 
              </div> 
             </div> 
             <img src="/static/homes/index/bg71.png" class="user-img-shade" /> 
             <p class="user-img"> <a href="https://www.vmall.com/member?t=15438183439401543818506616" rel="nofollow" timetype="timestamp" target="_blank" onclick="pushLoginMsg('已登录','头像')"> <img id="customerPic" src="/static/homes/index/img_not_logged_in.png" alt="默认头像" imgpath="https://res.vmallres.com/20181122/images" /> </a> </p> 
            </div> 
            <div class="user-info fl"> 
             <a href="https://www.vmall.com/member?t=1543818343940timestamp" rel="nofollow" target="_blank" onclick="pushLoginMsg('已登录','用户名')"> 
              <div class="user-info-name" id="up_loginName_info"></div> </a> 
             <div class="user-info-detail clearfix" id="vip-info"> 
              <a id="authentication_y" class="icon-realname hide">已实名</a> 
              <a id="authentication_n" href="https://www.vmall.com/authmember/accesstoken" rel="nofollow" class="icon-realname disabled hide" onclick="pushLoginMsg('已登录','未实名')">未实名</a> 
              <a class="icon-mail" href="https://www.vmall.com/member/msg?t=15438183439401543818506616" rel="nofollow" timetype="timestamp" onclick="pushLoginMsg('已登录','消息中心')">消息中心 <span id="top-newMsgCount" class="hide">0</span></a> 
             </div> 
            </div> 
           </div> 
           <div class="i-mall-uc"> 
            <dl class="clearfix"> 
             <dt>
              <span class="fl">我的订单</span>
              <a class="fr" href="https://www.vmall.com/member/order?t=15438183439401543818506616" timetype="timestamp" onclick="pushLoginMsg('已登录','更多')">更多&gt;</a>
             </dt> 
            </dl> 
            <div class="i-mall-uc-con"> 
             <dl class="clearfix"> 
              <dd>
               <a href="https://www.vmall.com/member/order?t=15438183439401543818506616&amp;tab=unpaid" timetype="timestamp" onclick="pushLoginMsg('已登录','待支付')">待支付</a>
              </dd> 
              <dd>
               <a href="https://www.vmall.com/member/order?t=15438183439401543818506616&amp;tab=send" timetype="timestamp" onclick="pushLoginMsg('已登录','待收货')">待收货</a>
              </dd> 
              <dd>
               <a href="https://www.vmall.com/member/order?t=15438183439401543818506616&amp;tab=nocomment" timetype="timestamp" onclick="pushLoginMsg('已登录','待评价')">待评价</a>
              </dd> 
              <dd>
               <a href="https://www.vmall.com/member/exchange?t=15438183439401543818506616" timetype="timestamp" onclick="pushLoginMsg('已登录','退换货')">退换货</a>
              </dd> 
              <dd>
               <a href="https://www.vmall.com/member/recycle/index/aihuishou?t=15438183439401543818506616" timetype="timestamp" onclick="pushLoginMsg('已登录','旧机回收')">旧机回收</a>
              </dd> 
             </dl> 
            </div> 
           </div> 
           <div class="i-mall-huaban"> 
            <ul class="clearfix"> 
             <li> <p class="p-img"> <a href="https://www.vmall.com/member/newpoint?t=1543818343940" target="_blank" id="point" onclick="pushLoginMsg('已登录','积分')"> <span class="img01"></span> </a> </p> <p class="p-dec">积分</p> <p class="p-price"><span id="userPointBalance">--&nbsp;</span>分</p> </li> 
             <li> <p class="p-img"> <a href="https://www.vmall.com/member/coupon?t=1543818343940" rel="nofollow" target="_blank" onclick="pushLoginMsg('已登录','优惠券')"> <span class="img02"></span> </a> </p> <p class="p-dec">优惠券</p> <p class="p-price"><span id="top-couponCount">--&nbsp;</span>张</p> </li> 
             <li> <p class="p-img"> <a href="https://www.vmall.com/member/balance?t=1543818343940" rel="nofollow" target="_blank" onclick="pushLoginMsg('已登录','代金券')"> <span class="img03"></span> </a> </p> <p class="p-dec">代金券</p> <p class="p-price"><span id="balanceAmount">--&nbsp;</span>元</p> </li> 
            </ul> 
           </div> 
           <div class="i-out"> 
            <a href="https://www.vmall.com/account/logout" rel="nofollow">退出登录</a> 
           </div> 
          </div> 
          <!-- 2017-06-19-个人信息-end --> 
         </div> 
        </div> 
       </div> </li> 
      <!-- <li><a href="https://www.vmall.com/member/order?t=1543818343940timestamp" timeType="timestamp" onclick = "pushMyOrderMsg()">我的订单</a></li>--> 
      <li><a href="javascript:;" timetype="timestamp" onclick="pushMyOrderMsg()">我的订单</a></li> 
      <li> 
       <div class="s-dropdown s-dropdown-link"> 
        <div class="h"> 
         <a class="icon-dropdown">客户服务</a> 
        </div> 
        <div class="b"> 
         <div class="dropdown-more"> 
          <dl> 
           <dt>
            <a href="https://www.vmall.com/help/index.html" target="_blank">帮助中心</a>
           </dt> 
           <dt>
            <a href="http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&amp;configID=10&amp;location=B_002&amp;chatfrom=web&amp;channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af" target="_blank">联系客服</a>
           </dt> 
          </dl> 
         </div> 
        </div> 
       </div> </li> 
      <li> 
       <div class="s-dropdown"> 
        <div class="h"> 
         <a href="https://www.vmall.com/#" target="_blank" class="icon-dropdown">网站导航</a> 
        </div> 
        <div class="b"> 
         <div class="dropdown-navs clearfix"> 
          <p><a href="https://www.vmall.com/"></a></p>
          <div class="dropdown-navs-icon">
           <a href="https://www.vmall.com/">商城首页</a>
          </div>
          <p><br /></p>
          <dl>
           <dt>
            频道
           </dt>
           <dd>
            <div class="item">
             <a href="https://www.vmall.com/huawei" target="_blank">华为专区</a>
            </div>
            <div class="item">
             <a href="https://www.vmall.com/honor" target="_blank">荣耀专区</a>
            </div>
            <div class="item">
             <a href="http://company.vmall.com/client.html" target="_blank">企业购</a>
            </div>
           </dd>
          </dl>
          <dl>
           <dt>
            产品
           </dt>
           <dd>
            <div class="item">
             <a href="https://www.vmall.com/list-36" target="_blank">手机</a>
            </div>
            <div class="item">
             <a href="https://www.vmall.com/list-43" target="_blank">智能家居</a>
            </div>
            <div class="item">
             <a href="https://www.vmall.com/list-40" target="_blank">平板&amp;笔记本</a>
            </div>
            <div class="item">
             <a href="https://www.vmall.com/list-54" target="_blank">通用配件</a>
            </div>
            <div class="item">
             <a href="https://www.vmall.com/list-59" target="_blank">智能穿戴</a>
            </div>
            <div class="item">
             <a href="https://www.vmall.com/list-47" target="_blank">专属配件</a>
            </div>
           </dd>
          </dl>
          <dl>
           <dt>
            增值服务
           </dt>
           <dd>
            <div class="item">
             <a href="https://www.vmall.com/recycle" target="_blank">以旧换新</a>
            </div>
            <div class="item">
             <a href="https://www.vmall.com/product/10086344499475.html#10086230774569" target="_blank">礼品包装</a>
            </div>
            <div class="item">
             <a href="https://www.vmall.com/order/tcsProductIndex" target="_blank">补购保障</a>
            </div>
           </dd>
          </dl>
          <dl>
           <dt>
            会员
           </dt>
           <dd>
            <div class="item">
             <a href="https://www.vmall.com/privilege" target="_blank">会员频道</a>
            </div>
           </dd>
          </dl> 
         </div> 
        </div> 
       </div> </li> 
      <li class="downloadApp"> 
       <div class="s-dropdown"> 
        <div class="h"> 
         <a class="icon-dropdown">手机版</a> 
        </div> 
        <div class="b">
         <div class="dropdown-code">
          <div class="clearfix dropdown-code-detail"> 
           <a href="https://www.vmall.com/appdownload" target="_blank" onclick="pushHeaderMsg('下载客户端img','https://www.vmall.com/appdownload')"> <img src="/static/homes/index/7C2wVZ9IJnVbMLzAFd4m.png" class="code-img" /> </a>
           <div class="code-info">
            <h2>华为商城APP</h2>
            <p class="red">新人专享好礼<br />最高获5000积分</p> 
            <span class="icon-andrid"></span> 
           </div> 
          </div> 
          <div class="clearfix dropdown-code-detail"> 
           <a> <img src="/static/homes/index/20181029165608251.png" class="code-img" /> </a> 
           <div class="code-info"> 
            <h2>华为商城公众号</h2>
            <p>微信扫一扫</p> 
            <span class="icon-wechat"></span> 
           </div> 
          </div> 
         </div> 
        </div> 
       </div> </li> 
      <li> 
       <div class="s-dropdown s-dropdown-minicart"> 
        <div class="h h-wide" id="header-toolbar-minicart"> 
         <a href="https://www.vmall.com/cart2?t=15438183439401543818506616" class="icon-minicart" rel="nofollow" timetype="timestamp" target="blank" onclick="pushMyCartMsg()"> <span>购物车(<span id="header-cart-total">0</span>)</span> </a> 
        </div> 
        <div class="b" id="header-toolbar-minicart-content"> 
         <!-- 2017-06-19-迷你购物车-start --> 
         <div class="dropdown-minicart"> 
          <div class="minicart-pro-empty minicart-pro-empty-index" id="minicart-pro-empty"> 
           <p><span class="icon-minicart"></span></p> 
           <p id="cartInfo">您的购物车是空的，赶紧选购吧~</p> 
          </div> 
          <div class="minicart-pro-list minicart-pro-list-scroll hide" id="minicart-pro-list-block"> 
           <ul class="minicart-pro-list" id="minicart-goods-list"></ul> 
           <div class="minicart-pro-settleup" id="minicart-pro-settleup"> 
            <p> <span>总计：</span> <span><b id="micro-cart-totalPrice">&yen;&nbsp;0</b>
              <s id="micro-cart-totalOriginPrice">
               &yen;&nbsp;0
              </s></span> </p> 
            <a class="button-minicart" id="button-minicart-go2confirm" href="javascript:;" onclick="ec.minicart.confirm()">结算</a> 
            <a class="button-minicart disabled" id="disbutton-minicart-go2confirm" style="display:none;">结算</a> 
           </div> 
          </div> 
         </div> 
         <!-- 2017-06-19-迷你购物车-end --> 
        </div> 
       </div> </li> 
     </ul> 
    </div> 
   </div> 
  </div> 
  <!-- 2017-06-19-捷径栏-end --> 
  <textarea id="selectRegion-tips" style="display: none;">&lt;!-- 20151105-全球语言弹出框-width:910px-start --&gt; &lt;div class=&quot;box-content&quot;&gt;&lt;div class=&quot;box-lan-choose&quot;&gt;&lt;dl&gt;&lt;dt&gt;Asia Pacific&lt;/dt&gt;&lt;dd class=&quot;box-button&quot;&gt;&lt;a class=&quot;box-choose&quot; href=&quot;http://www.vmall.hk/&quot;&gt;香港&lt;/a&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.hihonor.com/in/&quot;&gt;India&lt;/a&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.hihonor.com/my/&quot;&gt;Malaysia&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;dl class=&quot;box-lan-choose-area&quot;&gt;&lt;dt&gt;The United States&lt;/dt&gt;&lt;dd class=&quot;box-button&quot;&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.hihonor.com/us/&quot;&gt;United States&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;dl class=&quot;box-lan-choose-area&quot;&gt;&lt;dt&gt;Europe&lt;/dt&gt;&lt;dd class=&quot;box-button&quot;&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.honor.ru/&quot;&gt;Россия&lt;/a&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.hihonor.com/fr/&quot;&gt;France&lt;/a&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.hihonor.com/de&quot;&gt;Deutschland&lt;/a&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.hihonor.com/it/&quot;&gt;Italia&lt;/a&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.hihonor.com/es/&quot;&gt;Espa&ntilde;a&lt;/a&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.hihonor.com/uk/&quot;&gt;UK&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;dl class=&quot;box-lan-choose-area&quot;&gt;&lt;dt&gt;Middle East&lt;/dt&gt;&lt;dd class=&quot;box-button&quot;&gt;&lt;a href=&quot;http://www.vmall.hk/&quot; target=&quot;_self&quot; textvalue=&quot;Saudi Arabia&quot;&gt;&lt;/a&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.hihonor.com/ae-en/&quot;&gt;United Arab Emirates&lt;/a&gt;&lt;a class=&quot;box-choose&quot; href=&quot;https://www.hihonor.com/sa-en/&quot;&gt;Saudi Arabia&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;/div&gt;&lt;/div&gt; &lt;!-- 20151105-全球语言弹出框-width:910px-end --&gt; </textarea> 
  <input type="hidden" value="" id="context" /> 
  <input type="hidden" value="https://member.vmall.com" id="domainUc" /> 
  <input type="hidden" value="vmall_index" id="vmall_index" /> 
  <script type="text/javascript">
 
function pushLoginMsg(name,subName)
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
			"name":name,   
  			"subName":subName ,       
  			"click":"1"
  			}
	};
	ec.account.dapPushMsg("300000201",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000201", "link", value]);
}
function pushLoginMsgInfoPerson(name,subName)
{
	ec.account.afterLogin(function(){});
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
			"name":name,   
  			"subName":subName ,       
  			"click":"1"
  			}
	};
	ec.account.dapPushMsg("300000201",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000201", "link", value]);
}
function pushHeaderMsgPriority(name,url)
{
	ec.account.afterLogin(function(){window.location.href="https://www.vmall.com/priority";});
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
			"name":name,
			"URL":url,
			"click":"1",
			}
	};
	ec.account.dapPushMsg("300000101",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000101", "link", value]);
}
 
function pushHeaderMsg(name,url)
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
			"name":name,
			"URL":url,
			"click":"1",
			}
	};
	ec.account.dapPushMsg("300000101",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000101", "link", value]);
}
 

checkIEVersion();
ec.mediaPath = "https://res.vmallres.com/pimages/";
//document.write('<script src="/account/status?'+(new Date()).getTime()+'"></s' + 'cript>');
</script> 
  <textarea id="micro-cart-tpl" class="hide">&lt;!--#macro microCartList data--&gt; &lt;!--#list data.itemInfos as item--&gt; &lt;!--#var classChoose='';--&gt; &lt;!--#var skuId='#'+item.skuId;--&gt; &lt;!--#if (item.subItems &amp;&amp; item.subItems.length &gt; 0)--&gt; &lt;!--#list item.subItems as sub--&gt; &lt;!--#if ((classChoose) &amp;&amp; (classChoose != &quot;true&quot;) )--&gt; &lt;!--#var classChoose='false';--&gt; &lt;!--/#if--&gt; &lt;!--#if (sub.itemType == 'S1' || sub.itemType == 'S6')--&gt; &lt;!--#var classChoose='true';--&gt; &lt;!--#else--&gt; &lt;!--/#if--&gt; &lt;!--#if (sub.itemType == 'G' )--&gt; &lt;!--#var gGift='true';--&gt; &lt;!--/#if--&gt; &lt;!--#if (sub.itemType == 'J' )--&gt; &lt;!--#var jBuy='true';--&gt; &lt;!--/#if--&gt; &lt;!--/#list--&gt; &lt;!--/#if--&gt; &lt;!--#if (classChoose == 'true' )--&gt; &lt;li class=&quot;minicart-pro-item minicart-pro-item-suit &lt;!--#if ( (item.show))--&gt;disabled&lt;!--/#if--&gt;&quot;&gt; &lt;!--#else--&gt; &lt;li class=&quot;minicart-pro-item &lt;!--#if ( (item.show)) --&gt;disabled&lt;!--/#if--&gt;&quot;&gt; &lt;!--/#if--&gt; &lt;div class=&quot;pro-info clearfix&quot;&gt; &lt;!--#if (item.itemType=='B')--&gt; &lt;!--#if (item.invalidCauseReason == 0) --&gt; &lt;div class=&quot;p-choose&quot;&gt;&lt;i class=&quot;&lt;!--#if (item.selected)--&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;&quot; id=&quot;icon-choose-{#item.itemkd}&quot; onclick=&quot;ec.minicart.click(this)&quot; value=&quot;{#item.itemCode}&quot; type=&quot;{#item.itemType}&quot; data-itemId=&quot;{#item.itemId}&quot;&gt;&lt;/i&gt;&lt;/div&gt; &lt;input class=&quot;hide&quot; id=&quot;checkbox-{#item.itemkd}&quot; name=&quot;bundleIds&quot; value=&quot;{#item.itemCode}&quot; data-itemId=&quot;{#item.itemId}&quot; type=&quot;checkbox&quot; &lt;!--#if (item.selected)--&gt;checked=&quot;checked&quot;&lt;!--/#if--&gt; /&gt; &lt;input class=&quot;hide&quot; id=&quot;quantity-{#item.itemCode}&quot; value=&quot;{#item.qty}&quot; data-type=&quot;{#item.itemType}&quot; type=&quot;text&quot; &lt;!--#if (item.selected)--&gt;checked=&quot;checked&quot;&lt;!--/#if--&gt; /&gt; &lt;!--#elseif ((item.invalidCauseReason == 7)&amp;&amp;( !item.numblimit )&amp;&amp;(!item.show) )--&gt; &lt;div class=&quot;p-choose&quot;&gt;&lt;i class=&quot;&lt;!--#if (item.selected)--&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;&quot; id=&quot;icon-choose-{#item.itemkd}&quot; onclick=&quot;ec.minicart.click(this)&quot; value=&quot;{#item.itemCode}&quot; type=&quot;{#item.itemType}&quot; data-itemId=&quot;{#item.itemId}&quot;&gt;&lt;/i&gt;&lt;/div&gt; &lt;input class=&quot;hide&quot; id=&quot;checkbox-{#item.itemkd}&quot; name=&quot;bundleIds&quot; value=&quot;{#item.itemCode}&quot; data-itemId=&quot;{#item.itemId}&quot; type=&quot;checkbox&quot; &lt;!--#if (item.selected)--&gt;checked=&quot;checked&quot;&lt;!--/#if--&gt; /&gt; &lt;input class=&quot;hide&quot; id=&quot;quantity-{#item.itemCode}&quot; value=&quot;{#item.qty}&quot; data-type=&quot;{#item.itemType}&quot; type=&quot;text&quot; &lt;!--#if (item.selected)--&gt;checked=&quot;checked&quot;&lt;!--/#if--&gt; /&gt; &lt;!--#else--&gt; &lt;div class=&quot;p-choose&quot;&gt;&lt;i class=&quot;icon-choose-normal&quot; id=&quot;icon-choose-{#item.itemCode}&quot;&gt;&lt;/i&gt;&lt;/div&gt; &lt;input class=&quot;hide&quot; id=&quot;checkbox-{#item.itemCode}&quot; name=&quot;bundleIds&quot; value=&quot;{#item.itemCode}&quot; type=&quot;checkbox&quot; /&gt; &lt;input class=&quot;hide&quot; id=&quot;quantity-{#item.itemCode}&quot; value=&quot;{#item.qty}&quot; data-type=&quot;{#item.itemType}&quot; type=&quot;text&quot; /&gt; &lt;!--/#if--&gt; &lt;div class=&quot;p-img&quot;&gt; &lt;a href=&quot;/product/{#item.photoId}.html{#skuId}&quot; title=&quot;&quot; target=&quot;_blank&quot; onclick = &quot;pushCartProMsg('{#skuId}','/product/{#item.photoId}.html{#skuId}','{#item_index+1}')&quot;&gt; &lt;img src=&quot;https://res.vmallres.com/pimages/{#item.photoPath}78_78_{#item.photoName}&quot; alt=&quot;{#item.itemName}&quot; /&gt; &lt;/a&gt; &lt;/div&gt; &lt;div class=&quot;p-name&quot;&gt; &lt;a href=&quot;/product/{#item.photoId}.html{#skuId}&quot; title=&quot;{#item.itemName}&quot; target=&quot;_blank&quot; onclick = &quot;pushCartProMsg('{#skuId}','/product/{#item.photoId}.html{#skuId}','{#item_index+1}')&quot;&gt;{#item.itemName}&lt;/a&gt; &lt;/div&gt; &lt;!--#else--&gt; &lt;!--#if ((item.invalidCauseReason == 0) &amp;&amp;(!item.bnumblimit) &amp;&amp;(!item.numblimit)) --&gt; &lt;div class=&quot;p-choose&quot;&gt; &lt;!--#if (item.itemType == &quot;P&quot;) --&gt; &lt;i class=&quot;&lt;!--#if (item.selected) --&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;&quot; id=&quot;icon-choose-{#item.itemkd}&quot; onclick=&quot;ec.minicart.click(this)&quot; value=&quot;{#item.skuId}&quot; type=&quot;{#item.itemType}&quot; data-itemId=&quot;{#item.itemId}&quot;&gt;&lt;/i&gt; &lt;input class=&quot;hide&quot; name=&quot;skuIds&quot; id=&quot;checkbox-{#item.itemkd}&quot; value=&quot;{#item.skuId}&quot; data-scode=&quot;{#item.itemCode}&quot; data-itemId=&quot;{#item.itemId}&quot; type=&quot;checkbox&quot; &lt;!--#if (item.selected)--&gt;checked=&quot;checked&quot;&lt;!--/#if--&gt;&gt; &lt;!--#else--&gt; &lt;i class=&quot;&lt;!--#if (item.selected) --&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;&quot; id=&quot;icon-choose-{#item.itemkd}&quot; onclick=&quot;ec.minicart.click(this)&quot; value=&quot;{#item.skuId}&quot; type=&quot;{#item.itemType}&quot; data-itemId=&quot;{#item.itemId}&quot;&gt;&lt;/i&gt; &lt;input class=&quot;hide&quot; name=&quot;skuIds&quot; id=&quot;checkbox-{#item.itemkd}&quot; value=&quot;{#item.skuId}&quot; data-scode=&quot;{#item.itemCode}&quot; data-itemId=&quot;{#item.itemId}&quot; type=&quot;checkbox&quot; &lt;!--#if (item.selected)--&gt;checked=&quot;checked&quot;&lt;!--/#if--&gt;&gt; &lt;!--/#if--&gt; &lt;/div&gt; &lt;input class=&quot;hide&quot; id=&quot;quantity-{#item.skuId}&quot; value=&quot;{#item.qty}&quot; data-type=&quot;{#item.itemType}&quot; type=&quot;text&quot; &lt;!--#if (item.selected)--&gt;checked=&quot;checked&quot;&lt;!--/#if--&gt; /&gt; &lt;!--#elseif ((item.invalidCauseReason == 7)&amp;&amp;( !item.numblimit )&amp;&amp;(!item.show) )--&gt; &lt;div class=&quot;p-choose&quot;&gt; &lt;!--#if (item.itemType == &quot;P&quot;) --&gt; &lt;i class=&quot;&lt;!--#if (item.selected) --&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;&quot; id=&quot;icon-choose-{#item.itemkd}&quot; onclick=&quot;ec.minicart.click(this)&quot; value=&quot;{#item.skuId}&quot; type=&quot;{#item.itemType}&quot; data-itemId=&quot;{#item.itemId}&quot;&gt;&lt;/i&gt; &lt;input class=&quot;hide&quot; name=&quot;skuIds&quot; id=&quot;checkbox-{#item.itemkd}&quot; value=&quot;{#item.skuId}&quot; data-scode=&quot;{#item.itemCode}&quot; data-itemId=&quot;{#item.itemId}&quot; type=&quot;checkbox&quot; &lt;!--#if (item.selected)--&gt;checked=&quot;checked&quot;&lt;!--/#if--&gt;&gt; &lt;!--#else--&gt; &lt;i class=&quot;&lt;!--#if (item.selected) --&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;&quot; id=&quot;icon-choose-{#item.itemkd}&quot; onclick=&quot;ec.minicart.click(this)&quot; value=&quot;{#item.skuId}&quot; type=&quot;{#item.itemType}&quot; data-itemId=&quot;{#item.itemId}&quot;&gt;&lt;/i&gt; &lt;input class=&quot;hide&quot; name=&quot;skuIds&quot; id=&quot;checkbox-{#item.itemkd}&quot; value=&quot;{#item.skuId}&quot; data-scode=&quot;{#item.itemCode}&quot; data-itemId=&quot;{#item.itemId}&quot; type=&quot;checkbox&quot; &lt;!--#if (item.selected)--&gt;checked=&quot;checked&quot;&lt;!--/#if--&gt;&gt; &lt;!--/#if--&gt; &lt;/div&gt; &lt;input class=&quot;hide&quot; id=&quot;quantity-{#item.skuId}&quot; value=&quot;{#item.qty}&quot; data-type=&quot;{#item.itemType}&quot; type=&quot;text&quot; &lt;!--#if (item.selected)--&gt;checked=&quot;checked&quot;&lt;!--/#if--&gt; /&gt; &lt;!--#else--&gt; &lt;div class=&quot;p-choose&quot;&gt;&lt;i class=&quot;icon-choose-normal&quot; id=&quot;icon-choose-{#item.skuId}&quot;&gt;&lt;/i&gt;&lt;/div&gt; &lt;input class=&quot;hide&quot; name=&quot;skuIds&quot; id=&quot;checkbox-{#item.skuId}&quot; value=&quot;{#item.skuId}&quot; type=&quot;checkbox&quot; /&gt; &lt;input class=&quot;hide&quot; id=&quot;quantity-{#item.skuId}&quot; value=&quot;{#item.qty}&quot; data-type=&quot;{#item.itemType}&quot; type=&quot;text&quot; /&gt; &lt;!--/#if--&gt; &lt;!--#if ((item.attrsMap)&amp;&amp;(item.attrsMap.package_code)) --&gt; &lt;input class=&quot;hide&quot; name=&quot;newBundle&quot; id=&quot;bundle-{#item.itemkd}&quot; value=&quot;{#item.attrsMap.package_code}&quot; data-scode=&quot;&lt;!--#list item.subItems as sku--&gt;&lt;!--#if ((sku.itemType=='B')||(sku.itemType=='P'))--&gt;{#sku.itemCode},&lt;!--/#if--&gt;&lt;!--/#list--&gt;&quot; type=&quot;checkbox&quot; /&gt; &lt;!--/#if--&gt; &lt;div class=&quot;p-img&quot;&gt; &lt;a href=&quot;/product/{#item.productId}.html{#skuId}&quot; title=&quot;&quot; target=&quot;_blank&quot; onclick = &quot;pushCartProMsg('{#skuId}','/product/{#item.productId}.html{#skuId}','{#item_index+1}')&quot;&gt; &lt;img src=&quot;https://res.vmallres.com/pimages/{#item.photoPath}78_78_{#item.photoName}&quot; alt=&quot;{#item.itemName}&quot; /&gt; &lt;/a&gt; &lt;/div&gt; &lt;div class=&quot;p-name&quot;&gt; &lt;a href=&quot;/product/{#item.productId}.html{#skuId}&quot; title=&quot;{#item.itemName}&quot; target=&quot;_blank&quot; onclick = &quot;pushCartProMsg('{#skuId}','/product/{#item.productId}.html{#skuId}','{#item_index+1}')&quot;&gt;{#item.itemName}&lt;/a&gt; &lt;/div&gt; &lt;!--/#if--&gt; &lt;div class=&quot;p-dec&quot;&gt; &lt;span class=&quot;p-slogan&quot;&gt; &lt;/span&gt; &lt;/div&gt; &lt;div class=&quot;p-status&quot;&gt; &lt;!--#if (gGift == &quot;true&quot;) --&gt; &lt;!--#list item.subItems as gif--&gt; &lt;!--#if (gif.itemType==&quot;G&quot;)--&gt; &lt;input type=&quot;checkbox&quot; name=&quot;giftId&quot; class=&quot;hide&quot; value=&quot;{#gif.itemCode}&quot; /&gt; &lt;!--/#if--&gt; &lt;!--/#list--&gt; &lt;!--/#if--&gt; &lt;!--#if ( (item.showP)&amp;&amp;( (item.invalidCauseReason==0) || ( (item.invalidCauseReason==7) &amp;&amp; ( !item.numblimit ) ) ) ) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品已失效&lt;/div&gt; &lt;!--#else--&gt; &lt;!--#if (item.invalidCauseReason == 1) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品已失效&lt;/div&gt; &lt;!--#elseif (item.invalidCauseReason == 2) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品已失效 &lt;/div&gt; &lt;!--#elseif (item.invalidCauseReason == 3) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品已失效 &lt;/div&gt; &lt;!--#elseif (item.invalidCauseReason == 4) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品已失效 &lt;/div&gt; &lt;!--#elseif (item.invalidCauseReason == 5) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品暂不可购买 &lt;/div&gt; &lt;!--#elseif (item.invalidCauseReason == 6) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品暂时缺货 &lt;/div&gt; &lt;!--#elseif (item.invalidCauseReason == 7) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品限购{#item.invalidCauseLeftValue}件&lt;/div&gt; &lt;!--#elseif (item.invalidCauseReason == 8) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品已失效 &lt;/div&gt; &lt;!--#elseif (item.invalidCauseReason == 9) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品不在本渠道销售&lt;/div&gt; &lt;!--#elseif (item.invalidCauseReason == 10) --&gt; &lt;div class=&quot;p-tags&quot;&gt;此商品已失效 &lt;/div&gt; &lt;!--/#if--&gt; &lt;!--/#if--&gt; &lt;div class=&quot;p-price&quot;&gt; &lt;!--#if (item.salePrice != item.originalPrice) --&gt;&lt;s&gt;&yen;&nbsp;{#item.originalPrice.toFixed(2)}&lt;/s&gt;&nbsp;&nbsp;&lt;!--/#if--&gt; &lt;b&gt;&yen;&nbsp;{#item.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#item.qty}&lt;/span&gt;&lt;/strong&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;!--#if ((item.itemType=='B')||(item.itemType=='P'))--&gt; &lt;div class=&quot;p-pack &lt;!--#if (item.show) --&gt;disabled&lt;!--/#if--&gt;&quot;&gt; &lt;span class=&quot;p-mini-tag-suit&quot;&gt;套餐&lt;/span&gt; &lt;a href=&quot;javascript:;&quot; title=&quot;&lt;!--#list item.subItems as sku--&gt;&lt;!--#if ((sku.itemType=='B')||(sku.itemType=='P'))--&gt;{#sku.itemName}x{#sku.qty}&lt;!--/#if--&gt;&lt;!--/#list--&gt;&quot;&gt; &lt;!--#list item.subItems as sku--&gt; &lt;!--#if ((sku.itemType=='B')||(sku.itemType=='P'))--&gt; &lt;span&gt; {#sku.itemName}&lt;em&gt;x{#sku.qty}&lt;/em&gt; &lt;/span&gt; &lt;!--/#if--&gt; &lt;!--/#list--&gt; &lt;/a&gt; &lt;/div&gt; &lt;!--/#if--&gt; &lt;!--#if ((classChoose=='true') || (jBuy=='true'))--&gt; &lt;div class=&quot;pro-other clearfix&quot; id={#classChoose}&gt; &lt;ol&gt; &lt;!--#list item.subItems as sub--&gt; &lt;!--#if (sub.itemType == &quot;S1&quot;) --&gt; &lt;li class=&quot;&lt;!--#if (sub.invalidCauseReason != 0) --&gt;disabled&lt;!--/#if--&gt;&quot;&gt; &lt;div class=&quot;p-title&quot;&gt; &lt;span class=&quot;p-mini-tag-long&quot;&gt;延保&lt;/span&gt;{#sub.itemName} &lt;/div&gt; &lt;input class=&quot;hide&quot; name=&quot;extendIds&quot; value=&quot;{#sub.skuId}&quot; data-scode=&quot;{#sub.itemCode}&quot; type=&quot;checkbox&quot; data-id=&quot;{#sub.itemId}&quot; /&gt; &lt;div class=&quot;p-price&quot;&gt;&lt;b&gt;&yen;&nbsp;{#sub.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#item.qty}&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt; &lt;/li&gt; &lt;!--/#if--&gt; &lt;!--/#list--&gt; &lt;!--#list item.subItems as sub--&gt; &lt;!--#if (sub.itemType == &quot;S6&quot;) --&gt; &lt;li class=&quot;&lt;!--#if (sub.invalidCauseReason != 0) --&gt;disabled&lt;!--/#if--&gt;&quot;&gt; &lt;div class=&quot;p-title&quot;&gt; &lt;span class=&quot;p-mini-tag-extend&quot;&gt;碎屏保&lt;/span&gt;{#sub.itemName} &lt;/div&gt; &lt;input class=&quot;hide&quot; name=&quot;accidentIds&quot; value=&quot;{#sub.skuId}&quot; data-scode=&quot;{#sub.itemCode}&quot; data-id=&quot;{#sub.itemId}&quot; type=&quot;checkbox&quot; /&gt; &lt;div class=&quot;p-price&quot;&gt;&lt;b&gt;&yen;&nbsp;{#sub.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#item.qty}&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt; &lt;/li&gt; &lt;!--/#if--&gt; &lt;!--/#list--&gt; &lt;!--#if (jBuy==&quot;true&quot;)--&gt; &lt;input type=&quot;hidden&quot; id=&quot;preferIds_{#item.skuId}&quot; value=&quot;&lt;!--#list item.subItems as ea--&gt;&lt;!--#if (ea.itemType == &quot;J&quot;) --&gt;{#ea.itemCode},&lt;!--/#if--&gt;&lt;!--/#list--&gt;&quot; skuids=&quot;&lt;!--#list item.subItems as ea--&gt;&lt;!--#if (ea.itemType == &quot;J&quot;) --&gt;{#ea.skuId},&lt;!--/#if--&gt;&lt;!--/#list--&gt;&quot; newId=&quot;&lt;!--#list item.subItems as ea--&gt;&lt;!--#if (ea.itemType == &quot;J&quot;) --&gt;{#ea.itemId},&lt;!--/#if--&gt;&lt;!--/#list--&gt;&quot; /&gt; &lt;!--/#if--&gt; &lt;!--#list item.subItems as sub--&gt; &lt;!--#if (sub.itemType == &quot;J&quot;) --&gt; &lt;li class=&quot;&lt;!--#if ((sub.Jlost)||(sub.invalidCauseReason!=0)) --&gt;disabled&lt;!--/#if--&gt;&quot;&gt; &lt;div class=&quot;p-title p-add&quot;&gt; &lt;span class=&quot;p-mini-tag-extend&quot;&gt;加价购&lt;/span&gt;{#sub.itemName} &lt;/div&gt; &lt;div class=&quot;p-price&quot;&gt; &lt;!--#if (sub.salePrice != sub.originalPrice) --&gt;&lt;s&gt;&yen;&nbsp;{#sub.originalPrice.toFixed(2)}&lt;/s&gt;&nbsp;&nbsp;&lt;!--/#if--&gt; &lt;b&gt;&yen;&nbsp;{#sub.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#sub.qty}&lt;/span&gt;&lt;/strong&gt; &lt;/div&gt; &lt;/li&gt; &lt;!--/#if--&gt; &lt;!--/#list--&gt; &lt;/ol&gt; &lt;/div&gt; &lt;!--/#if--&gt; &lt;!--#if (gGift==&quot;true&quot;)--&gt; &lt;input type=&quot;hidden&quot; id=&quot;gift_sbomCodes_{#item.skuId}&quot; value=&quot;&lt;!--#list item.subItems as gift--&gt;&lt;!--#if (gift.itemType == &quot;G&quot;) --&gt;{#gift.skuId},&lt;!--/#if--&gt;&lt;!--/#list--&gt;&quot; /&gt; &lt;div class=&quot;p-pack&quot;&gt; &lt;span class=&quot;p-mini-tag-suit&quot;&gt;配&lt;/span&gt; &lt;a href=&quot;javascript:;&quot; style=&quot;cursor: default;&quot; title=&quot;&lt;!--#list item.subItems as gift--&gt;&lt;!--#if (gift.itemType == &quot;G&quot;) --&gt;{#gift.itemName}x{#gift.qty*item.qty},&lt;!--/#if--&gt;&lt;!--/#list--&gt;&quot;&gt; &lt;!--#list item.subItems as gift--&gt;&lt;!--#if (gift.itemType == &quot;G&quot;) --&gt; &lt;span class=&quot;&lt;!--#if (gift.invalidCauseReason != 0) --&gt;disabled&lt;!--/#if--&gt;&quot;&gt; {#gift.itemName}&lt;em&gt;x{#gift.qty*item.qty}&lt;/em&gt; &lt;/span&gt; &lt;!--/#if--&gt; &lt;!--/#list--&gt; &lt;/a&gt; &lt;/div&gt; &lt;!--/#if--&gt; &lt;/li&gt; &lt;!--/#list--&gt; &lt;!--/#macro--&gt; </textarea> 
  <textarea class="hide" id="ec-binding-phone"> &lt;div id=&quot;ec-binding-phone-1&quot; class=&quot;ec-binding-phone-box hide&quot;&gt; &lt;!-- 20141011-绑定安全手机号提示-start --&gt; &lt;div class=&quot;box-phone01&quot;&gt; &lt;div class=&quot;h&quot;&gt; &lt;i&gt;&lt;/i&gt; &lt;/div&gt; &lt;div class=&quot;b&quot;&gt; &lt;p class=&quot;title&quot;&gt;绑定手机号码&lt;/p&gt; &lt;p&gt;为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号，&lt;em class=&quot;red&quot;&gt;不绑定将不能提交订单。&lt;/em&gt;&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; &lt;div class=&quot;box-button&quot;&gt; &lt;a class=&quot;box-ok&quot; href=&quot;javascript:;&quot; id=&quot;ec-binding-phone-url-1&quot;&gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt;&lt;/a&gt; &lt;/div&gt; &lt;!-- 20141011-绑定安全手机号提示-end --&gt; &lt;/div&gt; &lt;div id=&quot;ec-binding-phone-2&quot; class=&quot;ec-binding-phone-box hide&quot;&gt; &lt;!-- 20141424-绑定安全手机号提示-start --&gt; &lt;div class=&quot;box-phone01&quot;&gt; &lt;div class=&quot;h&quot;&gt; &lt;i&gt;&lt;/i&gt; &lt;/div&gt; &lt;div class=&quot;b&quot;&gt; &lt;p class=&quot;title&quot;&gt;绑定手机号码&lt;/p&gt; &lt;p&gt;请您在新打开的页面中完成绑定安全手机号操作，完成绑定后请根据您的情况点击下面的按钮。&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; &lt;div class=&quot;box-button&quot;&gt; &lt;a class=&quot;box-cancel&quot; href=&quot;javascript:;&quot; id=&quot;ec-binding-phone-url-2&quot;&gt;&lt;span&gt;重新绑定&lt;/span&gt;&lt;/a&gt; &lt;a class=&quot;box-ok&quot; href=&quot;javascript:;&quot; onclick=&quot;ec.binding.resetShow()&quot;&gt;&lt;span&gt;绑定成功&lt;/span&gt;&lt;/a&gt; &lt;/div&gt; &lt;!-- 20141424-绑定安全手机号提示-end --&gt; &lt;/div&gt; &lt;div id=&quot;ec-binding-phone-3&quot; class=&quot;ec-binding-phone-box hide&quot;&gt; &lt;!-- 20141424-安全手机号绑定提示失败-start --&gt; &lt;div class=&quot;box-phone01&quot;&gt; &lt;div class=&quot;h&quot;&gt; &lt;i&gt;&lt;/i&gt; &lt;/div&gt; &lt;div class=&quot;b&quot;&gt; &lt;p class=&quot;title&quot;&gt;对不起，您未成功绑定手机号&lt;/p&gt; &lt;p&gt;为了您在商城正常购物、保护您的权益，请您绑定一个手机号码以享受华为商城的所有服务。&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; &lt;div class=&quot;box-button&quot;&gt; &lt;a href=&quot;javascript:;&quot; class=&quot;box-ok&quot; onclick=&quot;ec.binding.showOk()&quot; id=&quot;ec-binding-phone-url-3&quot; &gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt; &lt;/div&gt; &lt;!-- 20141424-安全手机号绑定提示失败-end --&gt; &lt;/div&gt; &lt;div id=&quot;ec-binding-phone-4&quot; class=&quot;ec-binding-phone-box hide&quot;&gt; &lt;!-- 20150824-手机号绑定未绑定-start --&gt; &lt;div class=&quot;box-phone01&quot;&gt; &lt;div class=&quot;h&quot;&gt; &lt;i&gt;&lt;/i&gt; &lt;/div&gt; &lt;div class=&quot;b&quot;&gt; &lt;p class=&quot;title&quot;&gt;绑定手机号码&lt;/p&gt; &lt;p&gt;为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号；&lt;em class=&quot;red&quot;&gt;自&lt;/em&gt;&lt;em id=&quot;bindEndDate4State4&quot; class=&quot;red&quot;&gt;&lt;/em&gt;&lt;em class=&quot;red&quot;&gt;号起，若不绑定将不能提交订单。&lt;/em&gt;&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; &lt;div class=&quot;box-button&quot;&gt; &lt;a class=&quot;box-cancel&quot; href=&quot;javascript:;&quot; onclick=&quot;ec.binding.closeState4();&quot;&gt;&lt;span&gt;下次再说&lt;/span&gt;&lt;/a&gt; &lt;a class=&quot;box-ok&quot; href=&quot;javascript:;&quot; id=&quot;ec-binding-phone-url-4&quot;&gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt; &lt;/div&gt; &lt;!-- 20150824-安全手机号绑定提示失败-end --&gt; &lt;/div&gt; &lt;div id=&quot;ec-binding-phone-5&quot; class=&quot;ec-binding-phone-box hide&quot;&gt; &lt;!-- 20141424-安全手机号绑定提示失败-start --&gt; &lt;div class=&quot;box-phone01&quot;&gt; &lt;div class=&quot;h&quot;&gt; &lt;i&gt;&lt;/i&gt; &lt;/div&gt; &lt;div class=&quot;b&quot;&gt; &lt;p class=&quot;title&quot;&gt;绑定手机号码&lt;/p&gt; &lt;p&gt;您输入的手机已被注册，您可以选择使用手机号重新登录或者重新绑定手机！&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; &lt;div class=&quot;box-button&quot;&gt; &lt;a class=&quot;box-cancel&quot; href=&quot;https://www.vmall.com/account/login&quot; id=&quot;ec-binding-phone-reLogin-5&quot;&gt;&lt;span&gt;重新登录&lt;/span&gt;&lt;/a&gt;') &lt;a class=&quot;box-ok&quot; href=&quot;javascript:;&quot; id=&quot;ec-binding-phone-url-5&quot;&gt;&lt;span&gt;重新绑定&lt;/span&gt;&lt;/a&gt; &lt;/div&gt; &lt;!-- 20141424-安全手机号绑定提示失败-end --&gt; &lt;/div&gt; </textarea>
  <!-- 2017-02-15-头部-start --> 
  @section('content')
  @show
  <!--口号-20121025 --> 
  <div class="slogan-container"> 
   <div class="slogan"> 
    <ul> 
     <li class="s1"><a target="_blank" href="https://www.vmall.com/help/faq-934.html" rel="nofollow" onclick="pushFootAdvertMsg('公司介绍','https://www.vmall.com/help/faq-934.html')"><i></i>百强企业&nbsp;品质保证</a></li> 
     <li class="s2"><a target="_blank" href="https://www.vmall.com/help/faq-834.html" rel="nofollow" onclick="pushFootAdvertMsg('退换货政策','https://www.vmall.com/help/faq-834.html')"><i></i>7天退货&nbsp;15天换货</a></li> 
     <li class="s3"> <a target="_blank" href="https://www.vmall.com/help/faq-4367.html" rel="nofollow" onclick="pushFootAdvertMsg('物流帮助','https://www.vmall.com/help/faq-4367.html')"><i></i> <span>48元起免运费</span> </a> </li> 
     <li class="s4"><a target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm" rel="nofollow" onclick="pushFootAdvertMsg('服务中心','http://consumer.huawei.com/cn/support/service-center/index.htm')"><i></i>1000家维修网点&nbsp;全国联保</a></li> 
    </ul> 
   </div> 
  </div>
  <!--口号-end --> 
  <!-- 2017-02-15-服务-start --> 
  <div class="service-container"> 
   <div class="service"> 
    <div class="service-l fl"> 
     <dl class="s1"> 
      <dt> 
       <p class="title">购物相关</p> 
      </dt> 
      <dd> 
       <ol> 
        <li><a target="_blank" href="https://www.vmall.com/help/faq-4355.html" rel="nofollow">购物指南</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/help/faq-4367.html" rel="nofollow">配送方式</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/help/faq-4357.html" rel="nofollow">支付方式</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/help/category-16.html" rel="nofollow">常见问题</a></li> 
       </ol> 
      </dd> 
     </dl> 
     <dl class="s2"> 
      <dt> 
       <p class="title">保修与退换货</p> 
      </dt> 
      <dd> 
       <ol> 
        <li><a target="_blank" href="https://www.vmall.com/help/faq-833.html" rel="nofollow">保修政策</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/help/faq-834.html" rel="nofollow">退换货政策</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/help/faq-5259.html" rel="nofollow">退换货流程</a></li> 
        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/warranty-query/index.htm" rel="nofollow">保修状态查询</a></li> 
        <li><a target="_blank" href="http://c-ver.huawei.com/web/" rel="nofollow">配件防伪查询</a></li> 
       </ol> 
      </dd> 
     </dl> 
     <dl class="s3"> 
      <dt> 
       <p class="title">维修与技术支持</p>
      </dt> 
      <dd> 
       <ol> 
        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm" rel="nofollow">售后网点</a></li> 
        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/reservation/index.htm" rel="nofollow">预约维修</a></li> 
        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/express-repair/index.htm" rel="nofollow">手机寄修</a></li> 
        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/sparepart-price/index.htm" rel="nofollow">备件价格查询</a></li> 
        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/door-to-door-service/" rel="nofollow">上门服务</a></li> 
       </ol> 
      </dd> 
     </dl> 
     <dl class="s4"> 
      <dt> 
       <p class="title">特色服务</p>
      </dt> 
      <dd> 
       <ol> 
        <li><a target="_blank" href="https://consumer.huawei.com/cn/support/distinguish/" rel="nofollow">防伪查询</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/order/tcsProductIndex" rel="nofollow">补购保障</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/recycle" rel="nofollow">以旧换新</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/product/10086344499475.html#10086230774569" rel="nofollow">礼品包装</a></li> 
       </ol> 
      </dd> 
     </dl> 
     <dl class="s5"> 
      <dt> 
       <p class="title">关于我们</p>
      </dt> 
      <dd> 
       <ol> 
        <li><a target="_blank" href="https://www.huawei.com/cn/about-huawei/corporate-information" rel="nofollow">公司介绍</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/help/faq-939.html" rel="nofollow">华为商城简介</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/offshop/hwshoplist" rel="nofollow">华为线下门店</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/offshop/shoplist" rel="nofollow">荣耀线下门店</a></li> 
        <li><a target="_blank" href="https://www.vmall.com/job" rel="nofollow">诚征英才</a></li> 
        <li><a href="javascript:;" title="意见反馈" onclick="ec.survery.open();pushRightHelpMsg('意见反馈')">意见反馈</a></li> 
       </ol> 
      </dd> 
     </dl> 
     <dl class="s6" id="serverlink"> 
      <dt class="relative"> 
       <p class="title">友情链接</p> 
       <p class="button"><span class="btn btn-prev disabled"> &lt; </span><span class="btn btn-next"> &gt; </span></p> 
      </dt> 
      <dd class=""> 
       <div class="service-list clearfix" style="width: 1431px;">
        <ol>
         <li><a onclick="jump_link('http://www.huawei.com/cn/')">华为集团</a></li>
         <li><a href="https://consumer.huawei.com/cn/" target="_blank" textvalue="华为CBG官网">华为CBG官网</a></li>
         <li><a onclick="jump_link('http://www.honor.cn/')">荣耀官网</a></li>
         <li><a onclick="jump_link('http://club.huawei.com/')" textvalue="花粉俱乐部">花粉俱乐部</a></li>
         <li><a href="https://www.vmall.com/shopdc/sitemap.html" target="_blank">网站地图</a><br /></li>
        </ol>
        <ol>
         <li><a onclick="jump_link('http://www.hwtrip.com/')">爱旅官网</a></li>
         <li><a onclick="jump_link('http://app.vmall.com/')">华为应用市场</a></li>
         <li><a onclick="jump_link('http://www.wbiao.cn/')">万表网</a></li>
         <li><a onclick="jump_link('http://www.askci.com/')">中商情报网</a></li>
         <li><a onclick="jump_link('http://www.shuame.com/')">刷机精灵</a></li>
        </ol>
        <ol>
         <li><a onclick="jump_link('https://www.vmall.com')" textvalue="华为手机">华为手机</a></li>
         <li><a onclick="jump_link('http://www.17ugo.com/')">优购物官网</a></li>
         <li><a onclick="jump_link('http://www.znds.com/')">智能电视</a></li>
         <li> <a onclick="jump_link('http://www.uc.cn/')">UC浏览器</a></li>
         <li><a onclick="jump_link('http://www.zol.com/')">中关村商城</a></li>
        </ol>
        <ol>
         <li><a onclick="jump_link('http://www.kugou.com/')">酷狗音乐</a></li>
         <li><a onclick="jump_link('http://www.958shop.com/')">百信手机网</a></li>
         <li><a onclick="jump_link('http://www.cardbaobao.com/')">卡宝宝网</a></li>
         <li><a onclick="jump_link('http://www.duote.com/')" textvalue="多特软件下载">多特软件下载</a></li>
        </ol>
        <ol>
         <li><a onclick="jump_link('http://www.tongbu.com/')">同步助手</a></li>
         <li><a onclick="jump_link('http://www.fengniao.com/')">蜂鸟摄影网</a></li>
         <li><a onclick="jump_link('http://www.7po.com/')">奇珀论坛</a></li>
         <li><a onclick="jump_link('http://www.homekoo.com/')">家具商城</a></li>
         <li><a onclick="jump_link('http://www.paixie.net/')">拍鞋网商城</a></li>
        </ol>
        <ol>
         <li><a onclick="jump_link('http://www.obolee.com/')">欧宝丽珠宝</a></li>
         <li><a onclick="jump_link('http://www.xungou.com/')">寻购网</a></li>
         <li><a onclick="jump_link('http://www.yzmg.com/')">亿智蘑菇</a></li>
         <li><a onclick="jump_link('http://www.wandoujia.com/')">安卓市场</a></li>
         <li><a onclick="jump_link('http://baike.1688.com/')">阿里巴巴生意经</a></li>
        </ol>
        <ol>
         <li><a onclick="jump_link('http://product.cnmo.com/')">手机大全</a></li>
         <li><a onclick="jump_link('http://www.anzow.com/')">安卓软件园</a></li>
         <li><a onclick="jump_link('http://www.dashi.com/')">卓大师刷机</a></li>
         <li><a onclick="jump_link('http://www.wpxap.com/')">智机论坛</a></li>
         <li><a onclick="jump_link('http://www.eepw.com.cn/')">电子产品世界</a></li>
        </ol>
        <ol>
         <li><a onclick="jump_link('http://www.liqucn.com/')">历趣网</a></li>
         <li><a onclick="jump_link('http://www.51bi.com/')">网购返利</a></li>
         <li><a title="Apple110" onclick="jump_link('http://www.apple110.com/')">Apple110</a></li>
         <li><a onclick="jump_link('http://www.91.com/')" textvalue="91手机门户网">91手机门户网</a></li>
         <li><a onclick="jump_link('http://www.ydss.cn/')">移动叔叔</a></li>
        </ol>
        <ol>
         <li><a onclick="jump_link('http://www.outlets365.com/')">奥特莱斯</a></li>
         <li><a onclick="jump_link('https://www.vmall.com')">荣耀Magic</a></li>
         <li><a onclick="jump_link('http://car.ctrip.com/')">携程租车</a></li>
        </ol>
       </div>
       <script>
	jump_link = function(url)
	{
		var win = window.open(url,"_blank") ;
		win.opener = null ;
	};
	if((typeof  ec.product.productshopName) != 'undefined'){
	
	
	
ec.product.getFeature = function(skuId) {
    //后台已经带过来的skudetail 则不再调接口获取
     if(ec.product.getSkuForFeature(skuId) != undefined || $("#pro-detail-content-"+skuId).length > 0){
         $("#pro-tab-parameter").removeClass("selected");
         $("#pro-tab-feature").addClass("selected").show();
         $("#pro-detail-contents").show();
         $('#pro-detail-content-' + (ec.product.setSkuId || skuId)).show().siblings().hide();
        //处理视频播放
         if(playerDetailVideo){
        	 playerDetailVideo.dispose();
            }
//       $("#video-box").remove();
         ec.product.payVideo();
         return ;
     }
    // 请求商品详情
    new ec.ajax().get({
        url : "/product/querySkuDetailFeature/"+ec.product.getSku()+".json",
        /*data : {
             skuId : ec.product.getSku()
        },*/
        timeout : 10000,
        timeoutFunction : function() {
            $("#pro-detail-contents > div:first-child").html("正在加载...");
        },
        successFunction : function(json) {
            if (!json.success) {
                $("#pro-tab-feature").removeClass("selected").hide();
                $("#pro-tab-parameter").addClass("selected");
                $("#pro-detail-contents").hide();
                return;
            }
            if(json.length==0){
                $("#pro-tab-feature").removeClass("selected").hide();
                $("#pro-tab-parameter").addClass("selected");
                $("#pro-tab-feature").hide();
                $("#pro-detail-contents").hide();
                return;
            }
            $("#pro-tab-parameter").removeClass("selected");
            $("#pro-tab-feature").addClass("selected");
            $("#pro-tab-feature").show();
            $("#pro-detail-contents").show();
            ec.product.setSkuForFeature(skuId);
            var content = [];
            content.push('<div id="pro-detail-content-' + json.id + '" class="pro-detail-see">');
            
            content.push('<div id="kindPicture-'+json.id+'">');
            content.push(json.detail);
            content.push('</div>');
            
            content.push('<div id="detail-content-button-'+json.id +'" class="product-shade hide"><p>');
            content.push('<a id="pro-detail-down-btn-'+json.id+'" class="product-detail-btn">');
            content.push('查看全部产品详情</a></p></div>');
            content.push('<a href="javascript:;" id="pro-detail-up-btn-'+json.id+'" class="product-detail-btnup hide">收起全部产品详情</a>');
            content.push('</div>');
            var feature = $("#pro-tab-feature-content > div:first-child");
            feature.prepend(content.join(''));
            
            
            //<video id="player-container-id" preload="auto" width="1920" height="1080" playsinline webkit-playinline x5-playinline src=""></video>//处理视频播放
            if(playerDetailVideo){
                setTimeout(function(){
                	playerDetailVideo.dispose();
                },300)
            }
//          $("#video-box").remove();
            ec.product.payVideo();
            
            $('#pro-detail-content-' + (ec.product.setSkuId || skuId)).show().siblings().hide();
            var imgHeight = 0;
            $('#pro-detail-content-' + (ec.product.setSkuId || skuId)+' img').each(function(index){
                $(this).load(function(){
                    imgHeight = imgHeight +$(this).height();
                    if(imgHeight>=2000){
                            $('#pro-detail-content-'+json.id).height('2000');
                            $('#detail-content-button-'+json.id).show();
                            $("#pro-detail-down-btn-"+json.id).click(function(){
                                $('#pro-detail-content-'+json.id).height($('#kindPicture-' + json.id).height()+$('#pro-detail-up-btn-'+json.id).height()+40);
                                $('#detail-content-button-'+json.id).hide();
                                $("#pro-detail-up-btn-"+json.id).css("display","block");
                                upDownButton = "true";
                            });
                            
                            $("#pro-detail-up-btn-"+json.id).click(function(){
                                $('#pro-detail-content-'+json.id).height('2000');
                                $('#detail-content-button-'+json.id).show();
                                $("#pro-detail-up-btn-"+json.id).css("display","none");
                                upDownButton = "false";
                                $("body,html").animate({
                                    scrollTop : tit1+1575
                                }, 0);
                            });
                        return false        
                    }
                });
            });
            if(imgHeight<2000){
                $('#detail-content-button-'+json.id).hide();
            }
        },
        errorFunction : function() {
            $("#pro-tab-feature").removeClass("selected").hide();
            $("#pro-tab-parameter").addClass("selected");
            $("#pro-detail-contents").hide();
        },
        timeoutFunction : function() {                      
            $("#pro-tab-feature").removeClass("selected").hide();
            $("#pro-tab-parameter").addClass("selected");
            $("#pro-detail-contents").hide();
        }
    });

};
//视频播放器实例
var playerDetailVideo;
ec.product.payVideo = function() {
//	$("#video-box").remove();
	var skuId = ec.product.getSku();
	//处理视频播放
	var video = $("#pro-detail-content-" + skuId).find(".J_videoTrigger");
	$("#player-container-id").remove();
	if (video) {
		//video标签是否存在
		if(!$("#pro-detail-content-" + skuId).find("video") || $("#pro-detail-content-" + skuId).find("video").length == 0){
			var videoUrl = video.attr("data-video");
			var videoPic = video.attr("data-video-poster");
			if (videoUrl && videoUrl !="") {
				video.append("<span class='video-btn'></span>");
				var playerContainerId = "player-container-id-"+skuId;
				//video.prepend('<video id="' + playerContainerId + '" preload="auto" width="'+ width +'" height="' + height + '" playsinline webkit-playinline x5-playinline src="'+ videoUrl +'"></video>');
				
				
				video.click(function(){
					videoUrl = $(this).attr("data-video");
					var videoHtml = '<video id="' + playerContainerId + '" preload="auto"  playsinline webkit-playinline x5-playinline src="'+ videoUrl +'"></video>';
					var videoBox = new ec.box(videoHtml,{
	                    boxid:"video-box",
	                    boxclass:'ol_box_4 video-detail',
	                    width:800,
	                    height:450,
	                    draggable:false,
	                    showButton: false,
	                    zIndex:700,
	                    onclose:function(dom){
	                    	playerDetailVideo.dispose();
//	                    	$("#video-box").remove();
	                    }
	                 }).open();					
					playerDetailVideo = TCPlayer(playerContainerId, {
				        autoplay: true 
				    });
				});
			}
		}
	}
}
	};
 </script> 
       <script type="text/javascript">
jump_link = function(url)
{
var win = window.open(url,"_blank") ;
win.opener = null ;
}
$(document).ready(function(){
// 在这里写你的代码...
var easebuyurl = window.location.href;
if (easebuyurl.indexOf("easebuy") > 0) {
ec.code.addService({showService : true , showTools : true , live800Url4Web : "http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&configID=10&location=B_002&chatfrom=web&channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af"});
$("#tools-nav-service-robotim-button").attr("href" , "http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&configID=10&location=B_002&chatfrom=web&channelType=Vmall商城电脑端&enterurl="+encodeURIComponent(window.location.href)+"&k=1&remark=").css("display", "block");
}
});
</script> 
      </dd> 
     </dl> 
    </div> 
    <div class="service-r fl"> 
     <dl class="s7"> 
      <dt> 
       <p class="title">400-088-6888</p>
      </dt> 
      <dd> 
       <ol> 
        <li><a>7x24小时客服热线（仅收市话费）</a></li> 
       </ol> 
      </dd> 
      <dd> 
       <a id="tools-nav-service-robotim-button" rel="nofollow" class="service-btn btn-line-primary" href="http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&amp;configID=10&amp;location=B_002&amp;chatfrom=web&amp;channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af&amp;enterurl=https%3A%2F%2Fwww.vmall.com%2F&amp;k=1&amp;remark=" target="_blank" style="display: block;"><i class=""></i> 在线客服</a> 
      </dd> 
     </dl> 
     <div class="service-code clearfix"> 
      <h2>关注Vmall：</h2> 
      <ul class="clearfix"> 
       <li class="service-code-wechat">
        <div class="service-code-img">
         <img src="/static/homes/index/20181116180507506.jpg" />
        </div></li> 
       <li class="service-code-toutiao"> <a target="_blank" href="https://www.toutiao.com/c/user/52373534151/#mid=52586950033" rel="nofollow" style="display:block; width:20px; height:20px;"></a></li> 
       <li class="service-code-sina"><a target="_blank" href="https://weibo.com/shophuawei" rel="nofollow" style="display:block; width:20px; height:20px;"></a></li> 
       <li class="service-code-vmall"><a target="_blank" href="https://club.huawei.com/" rel="nofollow" style="display:block; width:20px; height:20px;"></a></li> 
      </ul> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 2017-02-15-服务-end --> 
  <!--确认对话框--> 
  <div id="ec_ui_confirm" class="popup-area popup-define-area hide"> 
   <div class="b"> 
    <p id="ec_ui_confirm_msg"></p> 
    <div class="popup-button-area">
     <a id="ec_ui_confirm_yes" href="javascript:;" class="button-action-yes"><span>是</span></a>
     <a id="ec_ui_confirm_no" href="javascript:;" class="button-action-no"><span>否</span></a>
    </div> 
   </div> 
   <div class="f">
    <s class="icon-arrow-down"></s>
   </div> 
  </div> 
  <!--新确认对话框--> 
  <div id="ec_ui_confirm_new" class="popup-area-new hide"> 
   <div class="b"> 
    <p id="ec_ui_confirm_new_msg"></p> 
    <div class="popup-button-area">
     <a id="ec_ui_confirm_new_yes" href="javascript:;" class="box-button-style-1"><span>是</span></a>
     <a id="ec_ui_confirm_new_no" href="javascript:;" class="box-button-style-1"><span>否</span></a>
    </div> 
   </div> 
   <div class="f">
    <s class="icon-arrow-down-new"></s>
   </div> 
  </div> 
  <!--提示对话框--> 
  <div id="ec_ui_tips" class="popup-area popup-define-area hide"> 
   <div class="b"> 
    <p id="ec_ui_tips_msg" class="tac"></p> 
    <div class="popup-button-area tac">
     <a id="ec_ui_tips_yes" href="javascript:;" class="button-action-yes" title="确定"><span>确定</span></a>
    </div> 
   </div> 
   <div class="f">
    <s class="icon-arrow-down"></s>
   </div> 
  </div> 
  <!-- 2018-10-26-悬浮工具栏-start --> 
  <div class="hungBar j-hungBar"> 
   <div class="hungBar-content"> 
    <a target="_blank" onclick="pushMyCartMsg()" href="https://www.vmall.com/cart2" timetype="timestamp" class="hungBar-cart" title="购物车"><span style="display:none;"></span><i>购物车</i></a> 
    <a target="_blank" id="tools-nav-service-robotim" onclick="pushRightHelpMsg('在线客服')" href="http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&amp;configID=10&amp;location=B_002&amp;chatfrom=web&amp;channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af&amp;enterurl=https%3A%2F%2Fwww.vmall.com%2F&amp;k=1&amp;remark=" class="hungBar-service" title="在线客服" style="display: block;"><i>在线客服</i></a> 
    <a id="tools-nav-survery" onclick="ec.survery.open();pushRightHelpMsg('意见反馈')" href="javascript:;" class="hungBar-feedback" title="意见反馈" style="display: block;"><i>意见反馈</i></a> 
    <a href="javascript:;" class="hungBar-top" title="返回顶部" id="hungBar-top" style="display: none;"><i>返回顶部</i></a> 
   </div> 
  </div> 
  <!-- 2018-10-26-悬浮工具栏-end --> 
  <!--意见反馈box--> 
  <div id="survery-box" class="ol_box_4 hide" style="width:600px;"> 
   <div class="box-ct"> 
    <div class="box-header"> 
     <div class="box-tl"></div> 
     <div class="box-tc"> 
      <div class="box-tc1"></div> 
      <div class="box-tc2">
       <a class="box-close" title="关闭" onclick="ec.survery.close();" href="javascript:;"></a>
       <span class="box-title">意见反馈</span>
      </div> 
     </div> 
     <div class="box-tr"></div> 
    </div> 
    <table width="100%" cellspacing="0" cellpadding="0" border="0"> 
     <tbody> 
      <tr> 
       <td class="box-cl"></td> 
       <td class="box-cc"> 
        <div class="box-content"> 
         <!-- -表单-意见反馈-start --> 
         <div class="form-feedback-area"> 
          <div class="b"> 
           <div class="form-edit-area"> 
            <form autocomplete="off" id="form-feedback"> 
             <div class="form-edit-table"> 
              <table cellspacing="0" cellpadding="0" border="0"> 
               <tbody> 
                <tr> 
                 <td> <select name="type" id="surverytype"> <option>请选择疑问类型</option> <option>商品质量（手机、平板等软、硬件质量）</option> <option>商品缺货</option> <option>物流发货（发货快慢、发错货、送件人态度等）</option> <option>售后服务（服务网点、维修、退换货、客服）</option> <option>网站问题（商城功能失效、不好用等）</option> <option>其他问题</option> </select> </td> 
                </tr> 
                <tr> 
                 <td> <b>您的问题与建议</b><span id="errMsg"></span> </td> 
                </tr> 
                <tr> 
                 <td><textarea name="content" id="surveryContent" type="textarea" class="textarea"></textarea></td> 
                </tr> 
                <tr> 
                 <td><b>您的联系方式</b></td> 
                </tr> 
                <tr> 
                 <td><input type="text" name="contact" id="surveryContact" /></td> 
                </tr> 
                <tr> 
                 <td> 
                  <div class="fl"> 
                   <input type="text" maxlength="4" class="identify" name="code" id="surveryVerify" onkeyup="if(this.value.length==4){ec.survery.validate();}" />&nbsp;&nbsp;
                   <img id="surveryVerifyImg" onclick="ec.survery.reloadCode()" class="vam" alt="验证码" />&nbsp;&nbsp;&nbsp;&nbsp;
                   <span class="vam"><a class="u" href="javascript:;" onclick="ec.survery.reloadCode();">换一张</a></span> 
                  </div> 
                  <div class="fr"> 
                   <a href="javascript:;" onclick="ec.survery.submit();" class="button-action-yes"><span>提交</span></a> 
                  </div> </td> 
                </tr> 
               </tbody> 
              </table> 
             </div> 
            </form> 
           </div> 
          </div> 
         </div> 
         <!-- -表单-意见反馈-end --> 
        </div> </td> 
       <td class="box-cr"></td> 
      </tr> 
     </tbody> 
    </table> 
    <div class="box-bottom"> 
     <div class="box-bl"></div> 
     <div class="box-bc"></div> 
     <div class="box-br"></div> 
    </div> 
   </div> 
  </div> 
  <div id="globleParameter" class="hide" context="" stylepath="https://res8.vmallres.com/20181122/css" scriptpath="https://res9.vmallres.com/20181122/js" imagepath="https://res.vmallres.com/20181122/images" mediapath="https://res.vmallres.com/pimages/"></div> 
  <!-- 2017-02-15-底部-start --> 
  <div class="footer-container"> 
   <div class="footer"> 
    <div class="footer-warrant-area clearfix">
     <p class="footer-warrant-logo fl"><a href="https://www.vmall.com/"><img src="/static/homes/index/HBHfAUYHLA0u5qMS8Nkr.png" title="vmall.png" style="float:none;" /></a></p>
     <div class="fl">
      <ul class="footer-warrant-link">
       <li><a href="https://www.huawei.com/cn/">华为集团</a></li>
       <li><a href="https://consumer.huawei.com/cn/">华为CBG官网</a></li>
       <li><a href="http://www.honor.cn/">荣耀官网</a></li>
       <li><a href="https://club.huawei.com/">花粉俱乐部</a></li>
       <li><a href="http://appstore.huawei.com/">华为应用市场</a></li>
       <li><a href="https://emui.huawei.com/cn/">EMUI</a></li>
       <li><a href="https://cloud.huawei.com/">华为终端云空间</a></li>
       <li><a href="https://developer.huawei.com/cn/">开发者联盟</a></li>
       <li><a href="https://m.vmall.com/">华为商城手机版</a></li>
       <li><a href="https://www.vmall.com/shopdc/sitemap.html">网站地图</a></li>
      </ul>
      <a href="https://www.vmall.com/help/faq-2635.html" target="_blank" title="隐私声明" rel="nofollow">隐私声明</a>
      <a href="https://www.vmall.com/help/faq-778.html" target="_blank" title="服务协议" rel="nofollow"> 服务协议</a> Copyright &copy; 2012-2018 华为软件技术有限公司 版权所有 保留一切权利
      <br />公安备案 
      <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32011402010009" target="_blank" rel="nofollow">苏公网安备32011402010009号</a>
      <em> | </em>
      <a target="_blank" href="http://www.miitbeian.gov.cn/" rel="nofollow">苏ICP备17040376号-6</a>
      <br /> 增值电信业务经营许可证：苏B2-20130048号
      <em>| </em>
      <a href="http://sq.ccm.gov.cn/ccnt/sczr/service/business/emark/toDetail/2E50AF12E8B14A8B9721D1548FC0CDD2" target="_blank">网络文化经营许可证：苏网文[2015] 1599-026号</a>
      <br />
     </div>
     <p class="fr footer-warrant-img"><a class="fl" href="http://privacy.truste.com/privacy-seal/validation?rid=81be9ca0-c821-4e2c-ad4b-ff7cff98f75f&amp;lang=zh-cn" target="_blank" rel="nofollow"><img src="/static/homes/index/20180522101715775.jpg" alt="TRUSTe隐私认证" title="TRUSTe隐私认证" /></a> <a class="fl" href="https://res.vmallres.com/pimages//sale/2018-06/20180615181402966.jpg" target="_blank" rel="nofollow"><img src="/static/homes/index/20160226162415360.png" alt="电子营业执照" title="电子营业执照" /></a> <a class="fl" href="https://ss.knet.cn/verifyseal.dll?sn=e13010932010038497pwz6000000&amp;trustKey=dn&amp;trustValue=vmall.com" target="_blank" rel="nofollow"><img src="/static/homes/index/20160226162521265.png" title="可信网站" alt="可信网站" /></a> </p> 
     <p><br /></p>
    </div>
    <script type="text/javascript">
	$(function(){
		$("title").html($("title").text());
	});
	ec.code.addAnalytics({dmp:true});
</script> 
   </div> 
  </div> 
  <!-- 2017-02-15-底部-end --> 
  <!--<script src="https://res9.vmallres.com/20181122/js/echannel/slider.min.js?20170426"></script>--> 
  <!--<script src="https://res9.vmallres.com/20181122/js/echannel/swiper.min.js?20170426"></script>--> 
  <script>
    new Slider({//友情链接
        objid: '#serverlink',
        listname: '.service-list',
        listitem: 'ol',
        shownum: 1
    }).init();
</script> 
  <script type="text/javascript">
ec.load("ec.box" , {loadType : "lazy"});
/**
*功能：给鼠标移动到s-dropdown上面的时候，记得给他多添加一个hover类样式
*目的是兼容ie6
*@author 李峰
*/
$(function(){
    $(".s-dropdown").hover(function(){
        $(this).addClass("hover");
    },function(){
        $(this).removeClass("hover");
    });
    var maxcolor=$('.top-banner-max').find('p').children('a').css("background-color");
    var mincolor=$('.top-banner-min').find('p').children('a').css("background-color");
    
    $('.top-banner-max').css({"background-color":maxcolor,overflow:"hidden"});
    $('.top-banner-min').css({"background-color":mincolor,overflow:"hidden"});
});

//显示全球导航选择层
function showSelectRegion()
{
    var box = new ec.box($("#selectRegion-tips").val(),
    {
            boxid : "region-select-box",
            boxclass : "ol_box_4",
            title : "Please select your country or region",
            width : 700,            
            showButton : false,
            autoPosition:false,
            onopen: function(box){
            },
            onok : function(box){
            },
            oncancel : function(box){
                box.close();
                $(".ol_box_mask").remove();
            },   
            onclose : function(box){
                $(".ol_box_mask").remove();
            }
        });    

        box.open();
                
        $(".box-title").css("font-size","24px");
        $("#region-select-box").css("height","auto");
        $(".ol_box_mask").click(function(){box.close();});
        
        $(".box-header").unbind("mousemove");
        $(".box-header").unbind("mousedown");
        
        var divTop=document.getElementById("region-select-box").offsetTop;
        $("#region-select-box").mousedown(function (e) 
        {
            var e=e||window.event;
            var region = document.getElementById("region-select-box");
                                
            var leftX = e.clientX - region.offsetLeft;
            var topY = e.clientY - region.offsetTop;
            $("#region-select-box").mousemove(function (event) 
            {
              var e=event||window.event;
              var left=    e.clientX - leftX;
              var top=e.clientY - topY;
               
              if(e.clientX - leftX<20-region.offsetWidth){
              left=20-region.offsetWidth;
              }
              if(e.clientY - topY<20-region.offsetHeight){
              top=20-region.offsetHeight;
              }    
             
             if(e.clientY - topY+20>=$(window).height()){
              top=$(window).height() - 20;
              }
              if(e.clientX - leftX+20>=$(window).width()){
              left=$(window).width() - 20;
              }
              $("#region-select-box").css({"left": left, "top": top});
              divTop=top;
                
            });
        });
        $("#region-select-box").mouseup(function () {
        $("#region-select-box").unbind("mousemove");
        });
        $(window).scroll(function () {
            $("#region-select-box").offset({ top: divTop });
        });
}
</script> 
  <script type="text/javascript">
ec.load("ec.slider", {
   loadType : "lazy", 
   callback : function() {
        $("#ec-erweima").slider({
                 width:     91, //必须
                 height:     96, //必须
                 style : 1,                    //1显示分页，2只显示左右箭头,3两者都显示
                 pause : 120000,           //间隔时间
                 auto : true
        });
   }
});

ec.ready(function(){
    try
    {
        	ec.minicart.readyContent();
        	ec.minicart.microCartTpl = new ec.template($('#micro-cart-tpl').val());
            var $miniCart = $('#header-toolbar-minicart-content');
            $('#header-toolbar-minicart').hover(function ()
            {
                if(ec.checkBrowerIE())
                {
                    var act = document.activeElement.id;
                    if(act=='search-kw')
                    {
                        $("#search-kw").blur();
                    }
                }
                
                $(this).unbind("mouseenter");
                ec.minicart.content();
            }, function () 
            {
                $(this).bind("mouseenter",function()
                {
                    if(ec.checkBrowerIE())
                    {
                        var act = document.activeElement.id;
                        if(act=='search-kw')
                        {
                            $("#search-kw").blur();
                        }
                    }
                    
                    $(this).unbind("mouseenter");
                    ec.minicart.content();
                });
            });
        
        $('#up_loginName-hover').hover(function ()
        {
            if(ec.checkBrowerIE())
            {
                var act = document.activeElement.id;
                if(act=='search-kw')
                {
                    $("#search-kw").blur();
                }
            }
            
            $(this).unbind("mouseenter");
        }, function () 
        {
            $(this).bind("mouseenter",function()
            {
                if(ec.checkBrowerIE())
                {
                    var act = document.activeElement.id;
                    if(act=='search-kw')
                    {
                        $("#search-kw").blur();
                    }
                }
                
                $(this).unbind("mouseenter");
            });
        });
        
}
catch (err)
{
    // console.log(err);
}

});
// 更新购物车数字
$(function(){
    ec.minicart.updateMiniCartNum();
    $('.j-hungBar .hungBar-cart').hover(function(){
        ec.minicart.updateMiniCartNum();
    });
});
</script> 
  <script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https'){
   bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
  }
  else{
  bp.src = 'http://push.zhanzhang.baidu.com/push.js';
  }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script> 
  <iframe src="/static/homes/index/saved_resource.html" style="display: none;"></iframe>
  <script src="/static/homes/index/dmpa-min.js" async="" id="dmpa"></script>
  <script>


function pushMyOrderMsg()
{
	ec.account.afterLogin(function(){
		window.location.href="https://www.vmall.com/member/order?t=1543818343957timestamp";
	});
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"click":"1"
  			}
	};
	ec.account.dapPushMsg("300000301",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000301", "link", value]);
}

function pushMyCartMsg()
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"click":"1"
  			}
	};
	ec.account.dapPushMsg("300000401",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000401", "link", value]);
}


function pushCartProMsg(skuId,url,location)
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"SKUID":skuId ,
  			"URL":url, 
  			"location":location,          
   			"click":"1"
   			}
	};
	ec.account.dapPushMsg("300000402",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000402", "link", value]);
}

function pushFootAdvertMsg(name,url)
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
    		{
  			"name":name ,
  			"URL":url,            
   			"click":"1"
   			}
	};
	ec.account.dapPushMsg("300000501",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000501", "link", value]);
}


$(".fl").find("dd").find("a").bind("click",function(){
	var HREF = "";
	HREF = this.href;
	var name = this.innerHTML;
	if(HREF==null || HREF == "")
	{
		return;
	}
	if(this.id=="tools-nav-service-robotim-button")
	{
		name = "在线客服";
	}
	if(this.className=="service-btn btn-report")
	{
		name = "不良信息举报";
	}
	pushFootAdvertMsg(name,HREF);
});


$(".footer-warrant-area.clearfix").find("p").find("a").click(function()
{	
	var url = $(this).attr("href");
	var value  = {};
	if(url != "" && url != null)
	{
		if($(this).attr("class")=="fl")
		{
			value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"ADID":$(this).find("img").attr("src"),
  			"URL":url,
   			"click":"1"
   			}
			};
		}
		else
		{
			value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"name":$(this).html(),
  			"URL":url,
   			"click":"1"
   			}
			};
		}
		ec.account.dapPushMsg("300000502",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300000502", "link", value]);
		
	}
	else
	{
		return;
	}
});

function pushRightHelpMsg(buttonName)
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"buttonName":buttonName,
  			"click":"1"
  			}
	};
	ec.account.dapPushMsg("300000601",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000601", "link", value]);
}


jump = function(url,obj)
{	
	if(typeof(obj.html()) != "undefined" && obj.html() != null && obj.html() != "")
	{
		pushFootAdvertMsg($(this).html(),url);
	}
	var win = window.open(url,"_blank") ;
	win.opener = null ;
}
 
function pushProRelationMsg(productId,column)
    {
    	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"productId":productId, 
  			"row":"1",
  			"column":column,
  			"click":"1"
  			}
		};
		ec.account.dapPushMsg("300020601",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300020601", "link", value]);
    	
    }
    
    function pushProHotMsg(skuCode)
    {
    	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"SKUCode":skuCode ,
  			"click":"1"
  			}
		};
		ec.account.dapPushMsg("300020701",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300020701", "link", value]);
    	
    }
</script> 
 </body>
</html>