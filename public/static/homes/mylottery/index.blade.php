@extends('Home.HomePublic.public')
@section('title','我的优惠券')
@section('content')
<html>
 <head>
	
<title>优惠券_个人中心_华为商城</title>
<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="/static/homes/mylottery/ec.core.base.min.css" rel="stylesheet" type="text/css">

<link href="/static/homes/mylottery/main.min.css" rel="stylesheet" type="text/css">


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
     <span id="pathTitle">我的优惠券</span>
    </div> 
   </div> 
   <div class="hr-10"></div> 
   <div class="g"> 
    <div class="fr u-4-5">
     <!-- 20141212-栏目-start --> 
     <div class="section-header"> 
      <div class="fl"> 
       <h2><span>我的优惠券</span></h2> 
      </div> 
      <div class="fr"> 
       <!--
        	width = 鼠标定位的li宽度
        	left = 鼠标定位的li的前面兄弟节点宽度和
        --> 
       <div class="ec-tab" id="ec-tab"> 
        <ul> 
         <li class="current"><a href="javascript:;" onclick="ec.member.cuopon.catelog(this,1);"><span>未使用</span></a></li> 
         <li><a href="javascript:;" onclick="ec.member.cuopon.catelog(this,2);"><span>已使用</span></a></li> 
         <li><a href="javascript:;" onclick="ec.member.cuopon.catelog(this,3);"><span>已过期</span></a></li> 
        </ul> 
        <div class="ec-tab-arrow" style="width: 68px; left: 0px; overflow: hidden;"></div> 
       </div> 
      </div> 
     </div> 
     <!-- 20141212-栏目-end --> 
     <div class="my-change clearfix" id="my-change-box" style=""> 
      <input id="my-change-code" type="text" maxlength="32" placeholder="请输入兑换码" onkeyup="ec.member.cuopon.inputchange(this)" class="my-change-input" /> 
      <a href="javascript:;" id="my-change-buttom" onclick="ec.member.cuopon.check();" class="my-change-btn disabled">兑换</a> 
     </div> 
     <!-- 20171222-优惠券-列表-start --> 
     <div class="my-cuopon-record" id="list-group"> 
      <!--class="my-cuopon-detail"为优惠卷， 选中时添加class="current", 不可选添加class="disabled"--> 
      <!--class="my-cuopon-detail my-cuopon-discount"为折扣卷， 选中时添加class="current", 不可选添加class="disabled"--> 
      <!--class="my-cuopon-detail my-cuopon-type"为免邮卷， 选中时添加class="current", 不可选添加class="disabled"--> 
      <div class="list-group"> 
       <div class="list-group-empty">
        您暂时没有相关记录。
       </div> 
      </div> 
     </div> 
     <div id="pro-add-success-mask" style="visibility:hidden;font-size:18px;width:348px;position: absolute;"></div> 
     <!-- 20171222-优惠券-列表-end --> 
     <script>
   document.write("<script type='text/javascript' src='https://openapi.vmall.com/csrftoken.js?random="+new Date().getTime()+"'></s"+"cript>");
</script>
     <script type="text/javascript" src="https://openapi.vmall.com/csrftoken.js?random=1545632787496"></script>
     <script type="text/javascript" src="/static/homes/mylottery/csrftoken.js.下载"></script> 
     <script src="/static/homes/mylottery/cuopon.min.js.下载"></script>
     <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181222/js/common/jquery.movebar/movebar.min.js"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("jquery.movebar/movebar.min.js","complete");})();</script>
     <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="/static/homes/mylottery/movebar.min.js"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("jquery.movebar/movebar.min.js","complete");})();</script> 
     <script>
/*
ec.load("ec.pager");
*/
</script>
    </div> 
    <div class="fl u-1-5"> 
     <!-- 20170823-左边菜单-start --> 
     <div class="mc-menu-area"> 
      <div class="h">
       <a href="https://www.vmall.com/member?t=1545632646492"><span>我的商城</span></a>
      </div> 
      <div class="b"> 
       <ul> 
        <li> <h3 class="icon-mc-mail"><a href="https://www.vmall.com/member/msg?t=1545632646492"><span id="li-msg">消息中心<em></em></span></a></h3> </li> 
        <li> <h3 class="icon-mc-help"><a href="https://www.vmall.com/help/index.html" target="_blank"><span>帮助中心</span></a></h3> </li> 
        <li> <h3 class="icon-mc-order"><span>订单中心</span></h3> 
         <ol> 
          <li id="li-order"><a href="https://www.vmall.com/member/order?t=1545632646492"><span>我的订单</span></a></li> 
          <li id="li-order-small" style="display: none;"></li> 
          <li id="li-exchange"><a href="https://www.vmall.com/member/exchange?t=1545632646492"><span>我的退换货</span></a></li> 
          <li id="li-refunds"><a href="https://www.vmall.com/member/refunds?t=1545632646492"><span>我的退款</span></a></li> 
          <li id="li-recover"><a href="https://www.vmall.com/member/recycle/index/aihuishou?t=1545632646492"><span>我的回收单</span></a></li> 
          <li id="li-prdRemark"><a href="https://www.vmall.com/member/prdRemarkView?t=1545632646492"><span>商品评价</span></a></li> 
         </ol> </li> 
        <li> <h3 class="icon-mc-asset"><span>我的资产</span></h3> 
         <ol> 
          <li id="li-newpoint"><a href="https://www.vmall.com/member/newpoint?t=1545632646492"><span>我的积分</span></a></li> 
          <li id="li-coupon" class="current"><a href="https://www.vmall.com/member/coupon?t=1545632646492"><span>我的优惠券</span></a></li> 
          <li id="li-balance"><a href="https://www.vmall.com/member/balance?t=1545632646492"><span>我的代金券</span></a></li> 
          <li id="li-petal"><a href="https://www.vmall.com/member/petal?t=1545632646492"><span>我的花瓣</span></a></li> 
          <li id="li-point"><a href="https://www.vmall.com/member/point?t=1545632646492"><span>等级与特权</span></a></li> 
         </ol> </li> 
        <li> <h3 class="icon-mc-support"><span>购买支持</span></h3> 
         <ol> 
          <li id="li-myAddress"><a href="https://www.vmall.com/member/myAddress?t=1545632646492"><span>收货地址管理</span></a></li> 
          <li id="li-authentication"><a href="https://www.vmall.com/authmember/accesstoken?t=1545632646492"><span>实名认证</span></a></li> 
          <li id="li-myAppointment"><a href="https://www.vmall.com/member/myAppointment?t=1545632646492"><span>我的预约</span></a></li> 
          <li id="li-notification"><a href="https://www.vmall.com/member/notification?t=1545632646492"><span>到货通知</span></a></li> 
          <li id="li-myeasybuy"><a href="https://www.vmall.com/member/myeasybuy?t=1545632646492"><span>我的优享购</span></a></li> 
          <li id="li-enterprise" class="hide"></li>
          <!-- 优惠内购 --> 
          <li id="li-o2o" class="hide"><a href="https://www.vmall.com/o2o?t=1545632646492"><span>O2O商城</span></a></li> 
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
     <script src="/static/homes/mylottery/leftMenu.js"></script>
     <script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181222/js/common/base/jquery.form-2.49.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script>
     <script id="jsapi_loader6" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181222/js/common/base/ajax.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader6');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader6 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script>
     <script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="/static/homes/mylottery/jquery.form-2.49.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script>
     <script id="jsapi_loader6" loadtype="insert" type="text/javascript" src="/static/homes/mylottery/ajax.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader6');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader6 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script> 
    </div> 
   </div> 
   <div class="hr-80"></div> 
  </div>
 </body>
</html>
@endsection