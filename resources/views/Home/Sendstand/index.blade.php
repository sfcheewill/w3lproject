@extends('Home.HomePublic.public')
@section('title','站内信')
@section('content')
<html>
 <head>
	<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="/static/homes/sendstand/ec.core.base.min.css" rel="stylesheet" type="text/css">

<link href="/static/homes/sendstand/main.min.css" rel="stylesheet" type="text/css">
<script src="/static/homes/sendstand/jsapi.js" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="/static/homes/sendstand/jquery-1.4.4.min.js"></script>
<script src="/static/homes/sendstand/ec.core.js"></script> 
<script src="/static/homes/sendstand/ec.business.min.js"></script> 
<script src="/static/homes/sendstand/base.min.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="/static/homes/sendstand/box-min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("ec.box/box-min.js","complete");})();</script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="/static/homes/sendstand/XSSUtils.min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("/aes/XSSUtils.min.js","complete");})();</script><script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="/static/homes/sendstand/esapi.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader2');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader2 fail!');} return; }ol._setLoadStatus("/aes/esapi.js","complete");})();</script><script id="jsapi_loader3" loadtype="insert" type="text/javascript" src="/static/homes/sendstand/Base.esapi.properties.min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader3');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader3 fail!');} return; }ol._setLoadStatus("/aes/resources/Base.esapi.properties.min.js","complete");})();</script>
<!--<script src="//webpublic.vmall.com/csrftoken.js?20180824"></script>-->
<script src="/static/homes/sendstand/slider.min.js"></script>
<script src="/static/homes/sendstand/swiper.min.js"></script>
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
     ﻿
     <!-- 20141212-栏目-start --> 
     <div class="section-header"> 
      <div class="fl"> 
       <h2><span>消息中心</span></h2> 
      </div> 
     </div>
     <!-- 20141212-栏目-end --> 
     <div class="myOrder-cate"> 
      <ul> 
       <li class="current"><a href="javascript:;" onclick="ec.member.msg.check(this,'msg');"><span>站内信<em></em></span></a></li> 
       <li><a href="javascript:;" onclick="ec.member.msg.check(this,'inmsg');"><span>互动消息</span></a></li> 
      </ul> 
     </div> 
     <!-- 20141218-站内信-列表-start --> 
     <div class="myMail-record"> 
      <div class="list-group-title" id="list-group-title"> 
       <table border="0" cellpadding="0" cellspacing="0"> 
        <thead> 
         <tr> 
          <th class="col-type">类型</th> 
          <th class="col-title">标题</th> 
          <th class="col-date">时间</th> 
          <th class="col-operate">操作</th> 
         </tr> 
        </thead> 
       </table> 
      </div> 
      <div class="list-group" id="list-group"> 
       <div class="list-group-item read"> 
        <table border="0" cellpadding="0" cellspacing="0"> 
         <tbody>
          @foreach($sendstand as $v)
          <tr> 
           <td class="col-type"> <i></i> <span>{{$v->type}}</span> </td> 
           <td class="col-title"> <a href="/homestand/{{$v->id}}" title="" target="_blank">{{$v->title}}</a> </td> 
           <td class="col-date">{{date('Y-m-d',$v->sendtime)}}</td> 
           <td class="col-operate"><a class="del" href="javascript:void(0);" title="{{$v->id}}"><span>删除</span></a></td> 
          </tr> 
          @endforeach
         </tbody> 
        </table> 
       </div> 
      </div> 
      <!--分页 --> 
      <div class="list-group-page hide"> 
       <div class="pager" id="list-pager"></div> 
      </div> 
      <!--20121213-关注-start --> 
      <div class="attention-area"> 
       <em>更多精彩内容，请关注：</em> 
       <a class="atte-tsina" title="新浪微博" href="http://e.weibo.com/shophuawei" target="_blank"><span>新浪微博</span></a> 
       <a class="atte-tqq" title="腾讯微博" href="http://e.t.qq.com/shophuawei" target="_blank"><span>腾讯微博</span></a> 
      </div>
      <!--20121213-关注-end --> 
     </div> 
     <div id="ec_ui_confirm" class="popup-area popup-define-area hide" style="display: none;"> 
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
     <div class="hr-75"></div> 
     <input type="hidden" id="msgType" value="msg" /> 
     <script src="/static/homes/sendstand/list.min.js"></script>
     <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181205/js/common/ec.pager/pager-min.js" charset="gbk"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("ec.pager/pager-min.js","complete");})();</script>
     <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="/static/homes/sendstand/pager-min.js" charset="gbk"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("ec.pager/pager-min.js","complete");})();</script> 
     <script>
ec.load("ec.pager");
ec.mediaPath = "https://res.vmallres.com/pimages/";
</script>
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
     <script src="/static/homes/sendstand/leftMenu.js"></script>
     <script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181205/js/common/base/jquery.form-2.49.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script>
     <script id="jsapi_loader6" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181205/js/common/base/ajax.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader6');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader6 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script>
     <script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="/static/homes/sendstand/jquery.form-2.49.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script>
     <script id="jsapi_loader6" loadtype="insert" type="text/javascript" src="/static/homes/sendstand/ajax.js" charset="utf-8"></script>
     <script>(function(){var time = 0,el = document.getElementById('jsapi_loader6');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader6 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script> 
    </div> 
   </div> 
   <div class="hr-80"></div> 
  </div>
 </body>
 <script src="/static/jquery-1.7.2.min.js"></script>
 <script>
 	$('.del').click(function(){

 		// 保存当前对象内容
 		id = $(this).attr('title');
 		// ajax删除
 		// 保存当前对象
 		s=$(this).parents("tr");
 		$.get('/delstand',{id:id},function(data){

 			if (data==1) {
 				s.remove();
 			}	
 		})
 	
 	})
 </script>
</html>
@endsection