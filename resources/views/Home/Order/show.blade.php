@extends('Home.HomePublic.public')
@section('title','订单详情页')
@section('content')
<html>
 <head></head>
 <link rel="stylesheet" href="/static/homes/order/main.min.css">
 <link rel="stylesheet" href="/static/homes/order/ec.core.base.min.css">
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
       <li id="zxnav_0" data-id="0"> <a href="#" target="_blank"><span>手机</span></a> <input id="zxnav_0_flag" type="hidden" autocomplete="off" value="yes" /> <input id="zxnav_0_name" type="hidden" autocomplete="off" value="手机" /> </li> 
       <li id="zxnav_1" data-id="1"> <a href="#"" target="_blank"><span>笔记本 &amp; 平板</span></a> <input id="zxnav_1_flag" type="hidden" autocomplete="off" value="yes" /> <input id="zxnav_1_name" type="hidden" autocomplete="off" value="笔记本 &amp; 平板" /> </li> 
       <li id="zxnav_2" data-id="2"> <a href="#" target="_blank"><span>智能穿戴</span></a> <input id="zxnav_2_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_2_name" type="hidden" autocomplete="off" value="智能穿戴" /> </li> 
       <li id="zxnav_3" data-id="3"> <a href="#" target="_blank"><span>智能家居</span></a> <input id="zxnav_3_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_3_name" type="hidden" autocomplete="off" value="智能家居" /> </li> 
       <li id="zxnav_4" data-id="4"> <a href="#" target="_blank"><span>通用配件</span></a> <input id="zxnav_4_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_4_name" type="hidden" autocomplete="off" value="通用配件" /> </li> 
       <li id="zxnav_5" data-id="5"> <a href="#" target="_blank"><span>专属配件</span></a> <input id="zxnav_5_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_5_name" type="hidden" autocomplete="off" value="专属配件" /> </li> 
      </ul> 
     </div> 
    
  <div id="base_index" class=""> 
   <div class="hr-10"></div> 
   <div class="g"> 
    <!--面包屑 --> 
    <div class="breadcrumb-area fcn">
     <a href=/homeindex">首页</a>&nbsp;&gt;&nbsp;
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
       <h2><span>订单号：{{$order->order_number}}</span></h2> 
      </div> 
      <div class="fr"> 
       <div class="section-header-button"> 
        <!-- 增加正在配货状态下（19）可以取消订单 --> 
       </div> 
      </div> 
     </div> 　　 　　 
     <!-- 20141212-栏目-end --> 
     <!-- 20151208-防诈骗提示-start --> 
     <div class="order-pay-success-area" style="margin-top:-14px"> 
      <div class="b">
       <div class="prevention-fraud">
        <p class="prevention-fraud-tips">注意：华为商城不会以订单异常、系统升级为由，要求您点击任何链接进行退款！ 请谨防<span>钓鱼链接或诈骗电话</span>！</p>
       </div>
      </div> 
     </div> 
     <!-- 20151208-防诈骗提示-end --> 
     <!-- 非手机保险单独售卖需求 --> 
     <!-- 20141223-订单详情-订单状态-start --> 
  
     <!-- 20141223-订单详情-订单状态-end --> 
     <div class="hr-50"></div> 
     <!-- 20141223-订单详情-订单处理信息-end --> 
     <input type="hidden" value="detail" id="pageFlag" /> 
     <input type="hidden" value="1" id="isHisData" /> 
     <input type="hidden" value="vps" id="actionFlag" /> 
     <input type="hidden" value="11302530586" id="orderCode" /> 
     <input type="hidden" value="0" id="orderType" /> 
     <!-- 20141223-订单详情-收货信息-start --> 
     <div class="hr-50"></div> 
     <div class="order-detail-receive"> 
      <div class="h"> 
       <h3>收货信息</h3> 
      </div> 
      <div id="order-detail-loop" class="b swiper-container" style="height: 191px; overflow: visible;"> 
       <a id="leftLoop" class="receive-back" href="javascript:;" style="display: none;"></a> 
       <a id="rightLoop" class="receive-forward" href="javascript:;" style="display: none;"></a> 
       <div class="form-info-panels swiper-wrapper clearfix"> 
        <div class="receive-detail swiper-slide"> 
         <table border="0" cellpadding="0" cellspacing="0"> 
          <thead> 
           <tr> 
            <th>基本信息</th> 
           </tr> 
          </thead> 
          <tbody> 
           <!-- 非 手机保险单独售卖订单 --> 
           <tr> 
            <th>姓名：<span>{{$order->ucname}}</span></th> 
           </tr> 
           <tr> 
            <th>收货地址：<span class="span-190">{{$order->uccity}}</span></th> 
           </tr> 
           <tr> 
            <th>联系电话：<span>{{$order->ucphone}}</span></th> 
           </tr> 
           <tr> 
            <th>配送方式：<span>由默认快递公司配送</span></th> 
           </tr> 
           <!-- 非 手机保险单独售卖订单 --> 
          </tbody> 
         </table> 
        </div> 
        <div class="receive-detail swiper-slide"> 
         <!-- 普通发票 和 电子普票 --> 
         <table border="0" cellpadding="0" cellspacing="0"> 
          <thead> 
           <tr> 
            <th>发票信息</th> 
           </tr> 
          </thead> 
          <tbody> 
           <tr> 
            <th>发票类型：<span>电子普通发票</span></th> 
           </tr> 
           <tr> 
            <th>单位名称：<span class="span-190">个人</span> </th> 
           </tr> 
          </tbody> 
         </table> 
        </div> 
        <!-- 增值专用票 --> 
       </div> 
      </div> 
     </div> 
     <div class="hr-50"></div> 
     <!-- 已支付且已完成展示 --> 
     <!-- 已支付且已完成展示 --> 
     <!-- 20141223-订单详情-商品清单-start --> 
     <div class="order-detail-pro"> 
      <!-- 20141223-商品清单-商品列表-start --> 
      <div class="order-pro-record">  
       <div class="list-group-title"> 
        <table border="0" cellpadding="0" cellspacing="0"> 
         <thead> 
          <tr> 
           <th class="col-pro first">商品名称</th> 
           <th class="col-int">赠送积分</th> 
           <th class="col-price">单价/元</th> 
           <th class="col-quty">数量</th> 
           <th class="col-pay">小计/元</th> 
           <th class="col-state end">状态</th> 
          </tr> 
         </thead> 
        </table> 
       </div> 
       <div class="list-group"> 
        <div class="list-group-item"> 
         <div class="o-pro"> 
          <table border="0" cellpadding="0" cellspacing="0"> 
           <tbody> 
            @foreach($order->info as $v)
            <tr> 
             <td class="col-pro-img"> <p class="p-img"> <a title="{{$v->gname}}" href="/homegoodsinfo/{{$v->gid}}" target="_blank" > <img alt="{{$v->gname}}" src="{{$v->logo}}" /> </a> </p> </td> 
             <td class="col-pro-info"> <p class="p-name"> <a title="{{$v->gname}}" target="_blank" href="/homegoodsinfo/{{$v->gid}}">{{$v->gname}}</a> </p> </td> 
             <td class="col-int">0</td> 
             <td class="col-price"> <em>&yen;</em> <span>{{$v->sprice}}.00</span> </td> 
             <td class="col-quty">{{$v->quantity}}</td> 
             <td class="col-pay" rowspan="1"> <em>&yen;</em> <span>{{$v->quantity*$v->sprice}}.00</span> </td> 
             <td class="col-state end">
               @if($order->buy_status == '未付款' || $order->buy_status == '已取消')
                  {{$order->buy_status}}
                @else 
                  {{$order->order_status}}
                @endif
             </td> 
            </tr> 
             @endforeach
            <!--子商品对应的查询--> 
           </tbody> 
          </table> 
         </div> 
         <!-- 20141223-商品清单-赠品列表-start --> 
         <div class="order-pro-record"> 
          <div class="list-group"> 
          </div> 
         </div> 
         <!-- 20141223-商品清单-赠品列表-end --> 
        </div> 
       </div> 
      </div> 
      <!-- 20141223-商品清单-商品列表-end --> 
      <!-- 20141223-商品清单-合计-start --> 
      <div class="order-pro-total"> 
       <div class="order-pro-cost"> 
        <table border="0" cellpadding="0" cellspacing="0"> 
         <tbody> 
          <tr> 
           <th>商品金额总计：</th> 
           <td><em></em> &yen;<span id="totalOriginalPriceIDD">{{$order->total_price}}.00</span> </td> 
          </tr> 
          <tr> 
           <th>运费：</th> 
           <td><em>&yen;</em><span>0.00</span></td> 
          </tr> 
          <tr> 
           <th>使用优惠券：</th> 
           <td><em>-&nbsp;&yen;</em><span>0.00</span></td> 
          </tr> 
          <tr> 
           <th>使用积分：</th> 
           <td><em>-&nbsp;&yen;</em><span>0.00</span></td> 
          </tr> 
          <tr> 
           <th>使用花瓣：</th> 
           <td><em>-&nbsp;&yen;</em><span>0.00</span></td> 
          </tr> 
          <tr> 
           <th> &nbsp;商家活动： </th> 
           <td><em>-&nbsp;&yen;</em><span>00.00</span></td> 
          </tr> 
         </tbody> 
        </table> 
       </div> 
       <div class="order-pro-cost-total">
        合计（含运费）：
        <em></em> 
        <span> &yen;{{$order->total_price}}.00 </span> 
        <p class="pdt-10">可获得积分：<b class="fw-normal">{{ceil($order->total_price/10)}}</b></p> 
       </div> 
      </div> 
      <!-- 20141223-商品清单-合计-end --> 
     </div> 
     <!-- 20141223-订单详情-商品清单-end --> 
     <div class="hr-40"></div> 
     <div> 
     </div> 
     <!--20171117-花币卡查询验证框 start--> 
     <!-- 20171120-提示2-start --> 
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
            <!-- 新人抽奖开始 -->
            @if($timeout==1)
             <li>
                <h3 class="icon-mc-asset"><span><a href="/homeaward">新人抽奖</a></span></h3>
              </li>
            @endif
            <!-- 新人抽奖结束 -->

            <li>
                <h3 class="icon-mc-asset"><span>我的资产</span></h3>
                <ol>
                    <li id="li-newpoint"><a href="/userlike"><span>我的收藏</span></a></li>
                    <li id="li-coupon"><a href="/checklottery"><span>我的优惠券</span></a></li>
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