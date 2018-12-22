<!DOCTYPE html>
<!-- saved from url=(0189)https://payment.vmall.com/cashier/web/index.htm?trade_order_no=20181221OD15622012256276696112&sign=3983f799ed818b55d739d695d3c19169a657125fd3611654759757afc7d37c2e&timestamp=20181221153756# -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <script src="/static/jquery-1.7.2.min.js"></script>
 </head>
 <body>
  <meta id="i18n_pay" content="lang" /> 
  <meta name="viewport" content="width=device-width" /> 
  <meta name="keywords" content="" /> 
  <meta name="description" content="" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <!--华为收银台  --> 
  <title name="title">华为收银台</title> 
  <link rel="stylesheet" href="/static/homes/orderbuy/bootstrap.min.css" /> 
  <link rel="stylesheet" href="/static/homes/orderbuy/cashierStyle.css" /> 
  <link href="https://res.vmallres.com/ips/pc/20181020/images/favicon.ico" rel="SHORTCUT ICON" type="image/x-icon" />    
  <div class="container" style=""> 
   <!--<div class="header clearfix"></div>--> 
   <div class="warp warp-content clearfix" style="min-height: 791px;"> 
    <div class="contentArea clearfix"> 
     <div class="logo_name clearfix"> 
      <a class="huawei_logo" href="/homeindex" src="undefinedVmall_red.png"><img class="logoImg" logoname="logoSrc" logoattr="flag" srcs="" alt="huawei" src="/static/homes/orderbuy/Vmall_red.png" /></a> 
      <span class="i18n" name="msg_Checkout">收银台</span> 
     </div> 
     <div class="cashier_order_area clearfix" id="cashierHome"> 
      <div class="cashier_orderInfo clearfix"> 
       <div class="orderInfo_img pull-left"> 
        <img src="/static/homes/orderbuy/success_icon.png" /> 
       </div> 
       <div class="orderInfo_words pull-left"> 
        <div class="orderInfo_words_01 clearfix"> 
         <div class="orderWords01 clearfix"> 
          <h4 class="pull-left" name="msg_prompt">订单提交成功，只差付款了~</h4> 
          <div class="orderNum pull-left"> 
           <span name="msg_orderNo">订单号：</span> 
           <span style="color: #da3232;">{{$data['order_number']}}</span> 
          </div> 
          <div class="payNum pull-right"> 
           <span class="pull-right"></span> 
           <span class="payNumAll pull-right">&yen;{{$data['total_price']}}.00</span> 
           <span class="payTitle pull-right">订单金额：</span> 
          </div> 
         </div> 
         <h5 class="clearfix"><span class="pleasePay" name="msg_ple">请您在</span><em class="dateDiff"> <span id="day" style="display: none;"></span><span name="day" style="display: none;">天</span><span id="hour" style="display: none;"></span><span name="hour" style="display: none;">小时</span><span id="minite" style="display: inline-block;">14</span><span name="minite" style="display: inline-block;">分</span><span id="second" style="display: inline-block;">29</span><span name="second" style="display: inline-block;">秒</span> </em><span class="orderWarn" name="msg_order_warn">内完成支付，否则本次支付将自动取消。</span> 
          <div class="orderInfo_show pull-right"> 
           <span class="pull-right" name="msg_orderInf">订单详情</span> 
           <img src="/static/homes/orderbuy/down arrow_icon.png" /> 
          </div> </h5> 
         <p class="inventory-warning clearfix" name="msg_warningPay" style="display: block;">订单含付款减库存商品，支付完成才会为您预留库存！</p> 
         <p class="sendTime clearfix"> <span>今天23:59前付款，预计（明天）送达（受付款完成时间等因素可能发生变化）</span></p> 
        </div> 
        <div class="orderDetails clearfix"> 
         <div class="orderDetails_words"> 
          <ul> 
           <li show=""><span name="msg_sendNomber">订单编号：</span> <span style="color: #da3232;">{{$data['order_number']}}</span> </li> 
           <li show=""> <span style="color: #da3232;">今天23:59前付款，预计（明天）送达（受付款完成时间等因素可能发生变化）</span></li> 
           <li show=""><span name="msg_takeInf">收货信息：</span><span>{{$data['address']->name}}</span><span>{{$data['address']->phone}}</span><span>{{$data['address']->city}}</span> </li> 
           <li show=""><span name="msg_goodsName">商品名称：</span><span>{{$data['gname']}}</span></li> 
           <li show=""><span name="msg_billInf">发票信息：</span><span>电子普通发票</span><span>个人</span> </li> 
           <li show=""><span name="msg_buyTime">购买时间：</span><span>{{date('Y-m-d H:i',$data['order_time'])}}</span></li> 
          </ul> 
         </div> 
        </div> 
       </div> 
      </div> 
      <ul class="nav nav-tabs" id="payTab">
       <li class="COMMON active" name="common_pay" sort="0"> <a href="#" name="msg_common_pay" data-toggle="tab">常用</a> </li>
       <li class="THIP" name="third_pay" sort="1"> <a href="#" name="msg_third_pay" data-toggle="tab">平台支付</a> </li>
       <li class="INST" name="hb_pay" sort="2"> <a href="#" name="msg_hb_pay" data-toggle="tab">分期支付</a> </li>
       <li class="NETB" name="nwchain_pay" sort="3"> <a href="#" name="msg_nwchain_pay" data-toggle="tab">网银支付</a> </li>
      </ul> 
      <div class="tab-content"> 
       <ul class="tab-pane fade in active" name="COMMON" id="common_pay"> 
        <li bankcode="ALIPAY" banktype="THIP" act="true" class="select"> 
         <div class="act-line"> 
          <i class="recomType">推荐</i> 
         </div> 
         <div class="pay_typeIco tooltip-test clearfix" bankcode="ALIPAY" banktype="THIP" data-toggle="tooltip" title="" data-original-title="支付宝"> 
          <img src="/static/homes/orderbuy/ALIPAY.png" alt="支付宝" /> 
          <i></i> 
         </div> 
         <div class="payTool-descr clearfix"></div> </li> 
       </ul> 
      </div> 
      <!--返回弹窗--> 
      <div class="return_history hint clearfix" style="display: none;"> 
       <h5><i class="close-btn" onclick="closehis();"></i></h5> 
       <div class="return-words clearfix"> 
        <p name="msg_prompt01">您还未完成付款，请确认是否返回。</p> 
       </div> 
       <div class="return-btn-area clearfix"> 
        <a class="to-buy-btn" name="msg_returnBuy" href="/homeindex">返回购物</a> 
        <em class="to-pay-btn" name="msg_goBuy" onclick="closehis();">继续支付</em> 
       </div> 
      </div> 
      <!--倒计时为0时弹窗--> 
     </div> 
     <ul class="payBtn clearfix">
     <form action="/orderpay" method="post">
     <input type="hidden" name="order_id" value="{{$data['order_id']}}">
     {{csrf_field()}}
      <li> <input type="submit" class="confirmPay pull-right" name="msg_payBtn" value="确认支付">
      </form> 
       <div id="cashCoupon"> 
       </div> </li> 
      <p class="disabled-btn-info clearfix" name="msg_selAlert">请在当前页面先选择支付方式</p> 
     </ul> 
    </div> 
   </div> 
   <footer> 
    <div class="warp clearfix" id="vmallFoot" style="padding: 26px 0 34px;"> 
     <div class="vmall_logo_01 pull-left"> 
      <img src="/static/homes/orderbuy/Vmall.png" alt="vmall_logo_01" /> 
     </div> 
     <div class="certification_info pull-left"> 
      <p> <a title="隐私声明" target="_blank" href="https://www.vmall.com/help/faq-2635.html">隐私声明</a> <a target="_blank" href="#">服务协议</a><span>Copyright &copy; 2012-2018 华为软件技术有限公司 版权所有 保留一切权利</span></p> 
      <p> <span style="margin-right:2px;">公安备案 </span> <a target="_blank" href="#">苏公网安备32011402010009号</a> | <a target="_blank" href="#" rel="nofollow">苏ICP备17040376号-6</a> | <span>增值电信业务经营许可证：苏B2-20130048号</span> | </p> 
     </div> 
     <div class="certification_ico pull-right"> 
      <a title="TRUSTe隐私认证" href="#" target="_blank" rel="nofollow"><img src="/static/homes/orderbuy/20180522101715775.jpg" class="i18n-title" type="tle" selectname="tleTitle_TRUSTe" selectattr="alt" alt="TRUSTe隐私认证" /></a> 
      <a title="电子营业执照" target="_blank" href="#"><img src="/static/homes/orderbuy/20160226162415360.png" class="i18n-title" type="tle" selectname="tleTitle_Electronic" selectattr="alt" alt="电子营业执照" /></a> 
      <a title="可信网站" target="_blank" href="#"><img class="i18n-title" type="tle" selectname="tleTitle_Reliable" selectattr="alt" alt="可信网站" src="/static/homes/orderbuy/20160226162521265.png" /></a> 
      <a title="网络文件经营许可证" href="#" target="_blank" rel="nofollow"><img src="/static/homes/orderbuy/20180626164548324.png" class="i18n-title" type="tle" selectname="tleTitle_ICP" selectattr="alt" alt="网络文件经营许可证" /></a> 
      <a id="___szfw_logo___" href="https://credit.szfw.org/CX20170724001650181088.html" target="_blank" rel="nofollow"><img src="/static/homes/orderbuy/20170725194955862.jpg" border="0" /></a> 
     </div> 
    </div> 
    <div class="warp clearfix" id="pmallFoot" style="padding: 20px 0px; text-align: right; color: rgb(180, 180, 180); display: none;">
      Copyright &copy; 2012-2018 华为软件技术有限公司 版权所有 保留一切权利 
    </div> 
   </footer> 
  </div> 
  </form> 
 </body>
 <script>
  // 离开页面事件
  // $(window).bind('beforeunload',function(){
  //   $('.return_history').css('display','block');
  //   return false;
  //   // if($('.return_history').css('display') == 'block'){
  //   // }
  // });

  function closehis(){
    $('.return_history').css('display','none');
  }

  //显示订单详情
  $('.orderInfo_show').toggle(function(){
    $('.orderDetails_words').show();
    $('.orderNum').hide();
    $('.inventory-warning').hide();
    $('.sendTime').hide();
  },function(){
    $('.orderDetails_words').hide();
    $('.orderNum').show();
    $('.inventory-warning').show();
    $('.sendTime').show();
  });
 </script>
</html>