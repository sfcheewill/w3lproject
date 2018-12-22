@extends('Home.HomePublic.public')
@section('title','订单页')
@section('content')
<html>
 <head></head>
 <link rel="stylesheet" href="/static/homes/order/ec.core.base.min.css">
 <link rel="stylesheet" href="/static/homes/order/main.min.css">
 <body>
  <div class="header"> 
   <div class="layout"> 
    <div class="left"> 
     <!-- 2017-02-15-logo-start --> 
     <div class="logo">
      <a href="/homeindex" title="Vmall.com - 华为商城"><img src="/static/homes/order/x9a6U8WW0bhrA7u0FIlY.png" alt="Vmall.com - 华为商城" /></a>
     </div> 
     <!-- 2017-02-15-logo-end --> 
     <!-- 2017-06-19-导航-start --> 
     <div class="naver"> 
      <ul id="naver" class="clearfix"> 
       <li id="zxnav_0" data-id="0"> <a href="#" target="_blank"><span>手机</span></a> <input id="zxnav_0_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_0_name" type="hidden" autocomplete="off" value="手机" /> </li> 
       <li id="zxnav_1" data-id="1"> <a href="#" target="_blank"><span>笔记本 &amp; 平板</span></a> <input id="zxnav_1_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_1_name" type="hidden" autocomplete="off" value="笔记本 &amp; 平板" /> </li> 
       <li id="zxnav_2" data-id="2"> <a href="#" target="_blank"><span>智能穿戴</span></a> <input id="zxnav_2_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_2_name" type="hidden" autocomplete="off" value="智能穿戴" /> </li> 
       <li id="zxnav_3" data-id="3"> <a href="#" target="_blank"><span>智能家居</span></a> <input id="zxnav_3_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_3_name" type="hidden" autocomplete="off" value="智能家居" /> </li> 
       <li id="zxnav_4" data-id="4"> <a href="#" target="_blank"><span>通用配件</span></a> <input id="zxnav_4_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_4_name" type="hidden" autocomplete="off" value="通用配件" /> </li> 
       <li id="zxnav_5" data-id="5"> <a href="#" target="_blank"><span>专属配件</span></a> <input id="zxnav_5_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_5_name" type="hidden" autocomplete="off" value="专属配件" /> </li> 
      </ul> 
     </div> 
     <!-- 2017-06-19-导航-end --> 
    </div> 
    <div class="right"> 
     <!-- 2017-02-15-搜索条-焦点为search-form增加className:hover -start --> 
     <div class="search-bar relative" id="searchBar-area"> 
      <div class="search-bar-form" id="search-bar-form"> 
       <form method="get" onsubmit="return search(this)"> 
        <input type="text" class="text" maxlength="200" id="search-kw" autocomplete="off" /> 
        <input type="submit" class="button" value="搜索" /> 
        <input type="hidden" id="channelType" name="channelType" value="0" /> 
        <input type="hidden" id="default-search" value="nova 3i|荣耀 Note10" /> 
       </form> 
      </div> 
      <div class="search-bar-key" id="search-bar-key"> 
       <div class="searchBar-key"> 
       </div> 
      </div> 
      <div id="search-history" class="search-bar-history hide"> 
       <p> <label>历史记录</label><span id="cleanUp" class="search-history-btn">清除</span> </p> 
       <ul id="search-history-list"></ul> 
      </div> 
      <div id="AutocompleteContainter_51b96" "="" style="top: 94px; left: 1230.5px;">
       <div class="autocomplete-w1">
        <div class="autocomplete" id="Autocomplete_51b96" style="display: none; width: 290px; max-height: 400px;"></div>
       </div>
      </div>
     </div> 
     <!-- 2017-02-15-搜索条-end --> 
    </div> 
   </div> 
  </div>
  <!-- 2017-02-15-头部-end --> 
  <div id="base_index" class=""> 
   <div class="hr-10"></div> 
   <div class="g"> 
    <!--面包屑 --> 
    <div class="breadcrumb-area fcn">
     <a href="https://www.vmall.com/">首页</a>&nbsp;&gt;&nbsp;
     <em id="personCenter"><a href="/homeindex">我的商城</a></em>
     <em id="pathPoint">&nbsp;&gt;&nbsp;</em>
     <span id="pathTitle">我的订单</span>
    </div> 
   </div> 
   <div class="hr-10"></div> 
   <div class="g"> 
    <div class="fr u-4-5">
     <!-- 20141212-栏目-start --> 
     <div class="section-header"> 
      <div class="fl"> 
       <h2><span>我的订单</span></h2> 
      </div> 
      <div class="fr"> 
       <div class="ec-tab" id="ec-tab"> 
        <ul> 
         <li class="current"><a href="javascript:;" onclick="ec.member.orderList.seltime(this,1);"><span>最近六月内订单<em id="count-seltime-0">1</em></span></a></li> 
         <li><a href="javascript:;" onclick="ec.member.orderList.seltime(this,0);"><span>六个月前订单<em id="count-seltime-1" style="display: none;">0</em></span></a></li> 
        </ul> 
        <div class="ec-tab-arrow" style="width: 136px; left: 0px;"></div> 
       </div> 
      </div> 
     </div> 
     <!-- 20141212-栏目-end --> 
     <!-- 20141222-我的订单-订单类别-start --> 
     <div class="myOrder-cate" id="myOrder-cate"> 
      <ul> 
       <li class="current"><a href="javascript:;" onclick="ec.member.orderList.check(this,'all');"><span>全部有效订单<em></em></span></a></li> 
       <li> <a href="javascript:;" onclick="ec.member.orderList.check(this,'unpaid');"> <span> 待支付 <em id="count-seltime-2" data-num="1"> 1 </em> </span> </a> </li> 
       <em id="count-seltime-2-wechat" style="display:none"> 0 </em> 
       <em id="count-seltime-3-wechat" style="display:none"> 0 </em> 
       <li><a href="javascript:;" onclick="ec.member.orderList.check(this,'nocomment');"><span>待评价<em id="nocommentNum" data-num="0" data-his="0" style="display: none;">0</em></span></a></li> 
       <li><a href="javascript:;" onclick="ec.member.orderList.check(this,'send');"><span>待收货<em id="count-seltime-3" class="hide" data-num="0">0</em></span></a></li> 
       <li><a href="javascript:;" onclick="ec.member.orderList.check(this,'finished');"><span>已完成</span></a></li> 
       <li><a href="javascript:;" onclick="ec.member.orderList.check(this,'canceled');"><span>已取消</span></a></li> 
      </ul> 
     </div> 
     <!-- 20141222-我的订单-订单类别-end --> 
     <!-- 20141222-我的订单-列表-start --> 
     <div class="myOrder-record" id="myOrders-list-content"> 
      <!-- 20141222-我的订单-列表-订单合并-start --> 
      <div class="myOrder-control" id="myOrder-control-bottom-up" style="display: none;"> 
       <label class="inputbox" for="checkAllBox"> <input class="checkbox" type="checkbox" id="checkAllBox" name="checkAllBox" /><span>全选</span> </label> 
       <a href="javascript:;" class="button-operate-merge-pay" id="topButton" onclick="ec.member.orderList.mergePay();"><span>合并支付</span></a> 
      </div> 
      <!-- 20141222-我的订单-列表-订单合并-end --> 
      <div class="list-group-title"> 
       <table border="0" cellpadding="0" cellspacing="0"> 
        <thead> 
         <tr> 
          <th class="col-pro">商品</th> 
          <th class="col-price">单价/元</th> 
          <th class="col-quty">数量</th> 
          <th class="col-pay">实付款/元</th> 
          <th class="col-operate">订单状态及操作</th> 
         </tr> 
        </thead> 
       </table> 
      </div> 
      <div class="list-group" id="list-group"> 
      @foreach($order as $r)
       <div class="list-group-item"> 
        <div class="o-info"> 
         <div class="col-info"> 
          <input type="checkbox" class="checkbox" name="payCheck" value="28150260702" paymentstatus="2" clearorder="false" /> 
          <!-- 奖品订单 --> 
          <span class="o-date">{{date('Y-m-d H:i',$r->order_time)}}</span> 
          <span class="o-no">订单号：<a href="https://www.vmall.com/member/order-28150260702" title="28150260702">{{$r->order_number}}</a></span> 
         </div> 
         <div class="col-state">
           订单已确认&nbsp;|&nbsp; @if($r->buy_status == 1) 未支付 @else 已支付 @endif 
         </div> 
        </div> 
        <div class="o-pro"> 
         <table border="0" cellpadding="0" cellspacing="0"> 
          <tbody> 
           <!-- 普通商品列表 -->
           @foreach($r->info as $key=>$rr)
           <tr> 
            <td class="col-pro-img"> <p class="p-img"> <a title="{{$rr->gname}} {{$rr->sdesc}}" href="/homegoodsinfo/{{$rr->gid}}" target="_blank"> <img alt="{{$rr->gname}} {{$rr->sdesc}}" src="{{$rr->logo}}"/> </a> </p> </td> 
            <td class="col-pro-info"> <p class="p-name"> <a title="{{$rr->gname}} {{$rr->sdesc}}" target="_blank" href="/homegoodsinfo/{{$rr->gid}}">{{$rr->gname}} {{$rr->sdesc}}</a> </p> </td> 
            <td class="col-price"> <em>&yen;</em> <span>{{$rr->sprice}}.00</span> </td> 
            <td class="col-quty">{{$rr->quantity}}</td> 
            @if($key == 0)
            <td rowspan="{{count($r->info)}}" class="col-pay"> <p> <em>&yen;</em> <span>{{$r->total_price}}.00</span> </p> </td> 
            <td rowspan="{{count($r->info)}}" class="col-operate"> <p class="p-button"> <a class="button-operate-pay" href="https://www.vmall.com/payment/order-28150260702" target="_blank"> <span> 立即支付 </span> </a></p> <p class="p-link"><a href="https://www.vmall.com/member/updateToOrder-28150260702">修改订单</a></p> <p class="p-link"><a href="javascript:;" data-ordercode="28150260702" onclick="ec.member.orderList.cancel(this, 2,0);">取消订单</a></p> <p class="p-link"><a href="https://www.vmall.com/member/order-28150260702">订单详情</a></p> </td>
            @endif 
           </tr> 
           @endforeach
           <!--子商品对应的查询--> 
           <!--商品级别的优惠券使用--> 
           <!--订单级别的优惠券--> 
           <!-- 普通商品列表 end --> 
          </tbody> 
         </table> 
        </div> 
       </div> 
      @endforeach
      </div> 
      <!-- 20141222-我的订单-列表-订单合并-start --> 
      <div class="myOrder-control " id="myOrder-control-bottom" style="display: none;"> 
       <label class="inputbox" id="bottomCheckBoxDiv" name="bottomCheckBoxDiv"> 
        <!-- 20140819-我的订单-合并付款-start --> <input type="checkbox" class="checkbox" id="bottomCheckAllBox" name="bottomCheckAllBox" /><span>全选</span> 
        <!-- 20140819-我的订单-合并付款-end --> </label> 
       <a href="javascript:;" class="button-operate-merge-pay" id="bottomButton" onclick="ec.member.orderList.mergePay();"><span>合并支付</span></a> 
      </div> 
      <!-- 20141222-我的订单-列表-订单合并-end --> 
      <div class="list-group-page"> 
       <div class="pager" id="list-pager"></div> 
      </div> 
     </div> 
     <!-- 20141222-我的订单-列表-end --> 
     <input type="hidden" id="colid" value="1" /> 
     <input type="hidden" id="checkid" value="all" /> 
     <input type="hidden" id="cancelReson" value="" /> 
     <form action="https://www.vmall.com/member/order?t=1543818683037timestamp#" method="get" id="gotoUrl"></form>  
     <form id="clearPay"> 
      <input name="ips" id="clear-Ips" type="hidden" /> 
     </form> 

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
    </div> 
   </div> 
   <div class="hr-80"></div> 
  </div> 
 </body>
</html>
@endsection