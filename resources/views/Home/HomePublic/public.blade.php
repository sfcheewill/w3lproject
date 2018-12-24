<!DOCTYPE html>
<!-- saved from url=(0022)https://www.vmall.com/ -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="Content-Language" content="zh-cn" /> 
  <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />  -->
  <script src="/static/homes/index/push.js"></script>
  <script>

// var domainYY   = '//yy.vmall.com';
// var domainRush = '//buy.vmall.com';

var domainEdit = 'https://customization.vmall.com';

var domainMain = 'https://www.vmall.com';
var domainWap = 'https://m.vmall.com';
// var domainCart = '//cart.vmall.com';
// var domainRemark = '//remark.vmall.com';
var domainRms = 'https://rms.vmall.com';
var domainShoppingConfig = '//addr.vmall.com';
var imagePath = 'https://res.vmallres.com/20181122/images';
// var domainAccount = '//www.vmall.com';
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


// var pmsHttpDomain = '//product.vmall.com/';
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
      <li><a href="/homeindex">首页</a></li> 
      <li><a href="#">华为官网</a></li> 
      <li><a href="#">荣耀官网</a></li> 
      <li><a href="#">花粉俱乐部</a></li> 
      <li><a href="#">V码(优购码)</a></li> 
      <li><a href="#">企业购</a></li> 
      <li class="s-hwep hide" id="li-enterprise-preferential"></li> 
      <li><a href="#">Select Region</a></li> 
     </ul> 
    </div> 
    <div class="s-main "> 
     <img src="/static/homes/index/bg71.png" class="hide" /> 
     <ul>
     @if(empty(session('username'))) 
      <li id="unlogin_status"> 
       <div id="top_unlogin" class="header-toolbar"> 
        <!-- 2017-02-15-头部-工具栏-焦点为header-toolbar-item增加ClassName:hover --> 
        <div class="header-toolbar-item"> 
         <div class="i-login"> 
          <div class="h"> 
           <div class=""> 
            <a id="top-index-loginUrl" href="/homelogin/create">请登录</a> 
            <a href="/homeregister">&nbsp;&nbsp;注册</a> 
           </div> 
          </div> 
         </div> 
        </div> 
       </div> </li>
      @else 
      <li id="login_status" class="hide" style="display: list-item;"> 
       <div id="top_login" class="header-toolbar"> 
        <div class="s-dropdown"> 
         <div class="h h-wide" id="up_loginName-hover"> 
          <a class="icon-dropdown" href="/person"><span id="up_loginName">{{session('username')}}</span></a>&nbsp; 
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
                <div id="canvas-left" style="transform: rotateZ(-125deg); background: -webkit-gradient(linear, 0 100%, 0 0, from(rgb(240, 92, 32)), to(rgb(245, 133, 85)));"></div>
               </div> 
               <div class="canvas-right">
                <div id="canvas-right" style="transform: rotateZ(-180deg);"></div>
               </div> 
              </div> 
             </div> 
             <img src="/static/homes/index/bg71.png" class="user-img-shade" /> 
             <p class="user-img"> <a href="/person" rel="nofollow" timetype="timestamp" target="_blank"> <img id="customerPic" src="{{$users_info->pic}}" alt="默认头像"/> </a> </p> 
            </div> 
            <div class="user-info fl"> 
             <a href="/person" rel="nofollow" target="_blank"> 
              <div class="user-info-name" id="up_loginName_info">
               {{session('username')}}
              </div> </a> 
             <div class="user-info-detail clearfix" id="vip-info"> 
              <a id="authentication_y" class="icon-realname hide" style="display: none;">已实名</a> 
              <a id="authentication_n" href="#" rel="nofollow" class="icon-realname disabled hide" style="display: inline;">未实名</a> 
              <a class="icon-mail" href="/homestand" rel="nofollow" timetype="timestamp">消息中心 <span id="top-newMsgCount" class="hide">0</span></a> 
             </div> 
            </div> 
           </div> 
           <div class="i-mall-uc"> 
            <dl class="clearfix"> 
             <dt>
              <span class="fl">我的订单</span>
              <a class="fr" href="/homeorder" timetype="timestamp">更多&gt;</a>
             </dt> 
            </dl> 
            <div class="i-mall-uc-con"> 
             <dl class="clearfix"> 
              <dd>
               <a href="#" timetype="timestamp">待支付</a>
              </dd> 
              <dd>
               <a href="#" timetype="timestamp">待收货</a>
              </dd> 
              <dd>
               <a href="#" timetype="timestamp">待评价</a>
              </dd> 
              <dd>
               <a href="#" timetype="timestamp">退换货</a>
              </dd> 
              <dd>
               <a href="#" timetype="timestamp">旧机回收</a>
              </dd> 
             </dl> 
            </div> 
           </div> 
           <div class="i-mall-huaban"> 
            <ul class="clearfix"> 
             <li> <p class="p-img"> <a href="#" target="_blank" id="point"> <span class="img01"></span> </a> </p> <p class="p-dec">积分</p> <p class="p-price"><span id="userPointBalance">5</span>分</p> </li> 
             <li> <p class="p-img"> <a href="#" rel="nofollow" target="_blank"> <span class="img02"></span> </a> </p> <p class="p-dec">优惠券</p> <p class="p-price"><span id="top-couponCount">5</span>张</p> </li> 
             <li> <p class="p-img"> <a href="#" rel="nofollow" target="_blank"> <span class="img03"></span> </a> </p> <p class="p-dec">代金券</p> <p class="p-price"><span id="balanceAmount">0.00</span>元</p> </li> 
            </ul> 
           </div> 
           <div class="i-out"> 
            <a href="/homelogin" rel="nofollow">退出登录</a> 
           </div> 
          </div> 
          <!-- 2017-06-19-个人信息-end --> 
         </div> 
        </div> 
       </div> </li>
       @endif 
      <!-- <li><a href="https://www.vmall.com/member/order?t=1543818343940timestamp" timeType="timestamp" onclick = "pushMyOrderMsg()">我的订单</a></li>--> 
      <li><a href="/homeorder" timetype="timestamp">我的订单</a></li> 
      <li> 
       <div class="s-dropdown s-dropdown-link"> 
        <div class="h"> 
         <a class="icon-dropdown">客户服务</a> 
        </div> 
        <div class="b"> 
         <div class="dropdown-more"> 
          <dl> 
           <dt>
            <a href="#" target="_blank">帮助中心</a>
           </dt> 
           <dt>
            <a href="#" target="_blank">联系客服</a>
           </dt> 
          </dl> 
         </div> 
        </div> 
       </div> </li> 
      <li> 
       <div class="s-dropdown"> 
        <div class="h"> 
         <a href="#" target="_blank" class="icon-dropdown">网站导航</a> 
        </div> 
        <div class="b"> 
         <div class="dropdown-navs clearfix"> 
          <p><a href="#"></a></p>
          <div class="dropdown-navs-icon">
           <a href="#">商城首页</a>
          </div>
          <p><br /></p>
          <dl>
           <dt>
            频道
           </dt>
           <dd>
            <div class="item">
             <a href="#" target="_blank">华为专区</a>
            </div>
            <div class="item">
             <a href="#" target="_blank">荣耀专区</a>
            </div>
            <div class="item">
             <a href="#" target="_blank">企业购</a>
            </div>
           </dd>
          </dl>
          <dl>
           <dt>
            产品
           </dt>
           <dd>
            <div class="item">
             <a href="#" target="_blank">手机</a>
            </div>
            <div class="item">
             <a href="#" target="_blank">智能家居</a>
            </div>
            <div class="item">
             <a href="#" target="_blank">平板&amp;笔记本</a>
            </div>
            <div class="item">
             <a href="#" target="_blank">通用配件</a>
            </div>
            <div class="item">
             <a href="#" target="_blank">智能穿戴</a>
            </div>
            <div class="item">
             <a href="#" target="_blank">专属配件</a>
            </div>
           </dd>
          </dl>
          <dl>
           <dt>
            增值服务
           </dt>
           <dd>
            <div class="item">
             <a href="#" target="_blank">以旧换新</a>
            </div>
            <div class="item">
             <a href="#" target="_blank">礼品包装</a>
            </div>
            <div class="item">
             <a href="#" target="_blank">补购保障</a>
            </div>
           </dd>
          </dl>
          <dl>
           <dt>
            会员
           </dt>
           <dd>
            <div class="item">
             <a href="#" target="_blank">会员频道</a>
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
         <a href="/homeshopcart" class="icon-minicart" rel="nofollow" timetype="timestamp" target="blank"> <span>购物车(<span id="header-cart-total">0</span>)</span> </a> 
        </div> 
        <div class="b" id="header-toolbar-minicart-content"> 
         <!-- 2017-06-19-迷你购物车-start --> 
         <div class="dropdown-minicart"> 
          <div class="minicart-pro-empty minicart-pro-empty-index" id="minicart-pro-empty"> 
           <p><span class="icon-minicart"></span></p> 
           <p id="cartInfo">您的购物车是空的，赶紧选购吧~</p> 
          </div> 
          <div class="minicart-pro-list minicart-pro-list-scroll hide" id="minicart-pro-list-block"> 
           <ul class="minicart-pro-list" id="minicart-goods-list">
            <!-- 迷你购物车 -->
             <!-- <li class="minicart-pro-item "> 
             <div class="pro-info clearfix"> 
              <div class="p-choose"> 
               <i class="icon-choose" id="icon-choose-0IQ-S0-1201010004002" onclick="ec.minicart.click(this)" value="348824011" type="S0" data-itemid="0IQ.S0.1201010004002"></i> 
               <input class="hide" name="skuIds" id="checkbox-0IQ-S0-1201010004002" value="348824011" data-scode="1201010004002" data-itemid="0IQ.S0.1201010004002" type="checkbox" checked="checked" /> 
              </div> 
              <input class="hide" id="quantity-348824011" value="1" data-type="S0" type="text" checked="checked" /> 
              <div class="p-img"> 
               <a href="/product/241920871.html#348824011" title="" target="_blank" onclick="pushCartProMsg('#348824011','/product/241920871.html#348824011','1')"> <img src="https://res.vmallres.com/pimages//product/6901443143566/78_78_1473405520524mp.jpg" alt="华为平板 M3 4GB+64GB  LTE版（日晖金）" /> </a> 
              </div> 
              <div class="p-name"> 
               <a href="/product/241920871.html#348824011" title="华为平板 M3 4GB+64GB  LTE版（日晖金）" target="_blank" onclick="pushCartProMsg('#348824011','/product/241920871.html#348824011','1')">华为平板 M3 4GB+64GB LTE版（日晖金）</a> 
              </div> 
              <div class="p-dec"> 
               <span class="p-slogan"> </span> 
              </div> 
              <div class="p-status"> 
               <div class="p-price"> 
                <b>&yen;&nbsp;2688.00</b>
                <strong><em>x</em><span>1</span></strong> 
               </div> 
              </div> 
             </div> 
             </li> -->
           </ul> 
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
  
  <!-- 2017-02-15-头部-start --> 
  @section('content')
  @show
  <!--口号-20121025 --> 
  <div class="slogan-container"> 
   <div class="slogan"> 
    <ul> 
     <li class="s1"><a target="_blank" href="#" rel="nofollow"><i></i>百强企业&nbsp;品质保证</a></li> 
     <li class="s2"><a target="_blank" href="#" rel="nofollow"><i></i>7天退货&nbsp;15天换货</a></li> 
     <li class="s3"> <a target="_blank" href="#" rel="nofollow"><i></i> <span>48元起免运费</span> </a> </li> 
     <li class="s4"><a target="_blank" href="#" rel="nofollow"><i></i>1000家维修网点&nbsp;全国联保</a></li> 
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
        <li><a target="_blank" href="#">购物指南</a></li> 
        <li><a target="_blank" href="#">配送方式</a></li> 
        <li><a target="_blank" href="#">支付方式</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">常见问题</a></li> 
       </ol> 
      </dd> 
     </dl> 
     <dl class="s2"> 
      <dt> 
       <p class="title">保修与退换货</p> 
      </dt> 
      <dd> 
       <ol> 
        <li><a target="_blank" href="#" rel="nofollow">保修政策</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">退换货政策</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">退换货流程</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">保修状态查询</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">配件防伪查询</a></li> 
       </ol> 
      </dd> 
     </dl> 
     <dl class="s3"> 
      <dt> 
       <p class="title">维修与技术支持</p>
      </dt> 
      <dd> 
       <ol> 
        <li><a target="_blank" href="#" rel="nofollow">售后网点</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">预约维修</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">手机寄修</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">备件价格查询</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">上门服务</a></li> 
       </ol> 
      </dd> 
     </dl> 
     <dl class="s4"> 
      <dt> 
       <p class="title">特色服务</p>
      </dt> 
      <dd> 
       <ol> 
        <li><a target="_blank" href="#" rel="nofollow">防伪查询</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">补购保障</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">以旧换新</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">礼品包装</a></li> 
       </ol> 
      </dd> 
     </dl> 
     <dl class="s5"> 
      <dt> 
       <p class="title">关于我们</p>
      </dt> 
      <dd> 
       <ol> 
        <li><a target="_blank" href="#" rel="nofollow">公司介绍</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">华为商城简介</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">华为线下门店</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">荣耀线下门店</a></li> 
        <li><a target="_blank" href="#" rel="nofollow">诚征英才</a></li> 
        <li><a href="#" title="意见反馈">意见反馈</a></li> 
       </ol> 
      </dd> 
     </dl> 
     <dl class="s6" id="serverlink"> 
      <dt class="relative"> 
       <p class="title"><a href="/homelink">友情链接</a></p> 
       <p class="button"><span class="btn btn-prev disabled"> &lt; </span><span class="btn btn-next"> &gt; </span></p> 
      </dt> 
      <dd class=""> 
       <div class="service-list clearfix" style="width: 1431px;">
        <ol>
        @foreach($link as $row)
        <li><a target="_blank" href="http://{{$row->url}}" rel="nofollow">{{$row->name}}</a></li>    
        @endforeach
       
        </ol>
       </div>
       
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
    <a target="_blank" href="/homeshopcart" timetype="timestamp" class="hungBar-cart" title="购物车"><span style="display:none;"></span><i>购物车</i></a> 
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
</script> 
 </body>
</html>