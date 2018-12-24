@extends('Home.HomePublic.public')
@section('title','我的收藏')
@section('content')
<html>
 <head></head>
 <link rel="stylesheet" href="/static/homes/order/ec.core.base.min.css">
 <link rel="stylesheet" href="/static/homes/order/main.min.css">
 <link rel="stylesheet" href="/bootstrap-3.3.7/css/bootstrap.min.css">
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
       <form method="get" action="/searchgoods"> 
        <input type="text" class="text" name="goodsname" maxlength="200" id="search-kw" autocomplete="off" /> 
        <input type="submit" class="button" value="搜索" /> 
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
     <div class="section-header"> 
      
       <h2 style="margin: 3px;"><span>我的收藏</span></h2> 
     
     </div> 
    <div class="myOrder-record" id="myOrders-list-content"> 
      <div class="list-group" id="list-group"> 
        <div class="pager" id="list-pager">
          
        </div> 
      </div> 
      <div class="list-group-page"> 
        <div class="channel-list"> 
          <div class="pro-list clearfix"> 
            <ul class="img-item-list J_FavList clearfix">
            @foreach($shopcollec as $value)
              <li  data-id="{{$value->id}}"> 
               <div class="pro-panels"> 
                <p class="p-img"><a target="_blank" href="/homegoodsinfo/{{$value->id}}" title="荣耀10青春版"><img alt="荣耀10青春版" src="{{$value->logo}}"></a></p> 
                <p class="p-name" style=" height: 21px;"> <a target="_blank" href="/homegoodsinfo/{{$value->id}}" title="荣耀10青春版"> <span>荣耀10青春版</span> <span class="red"></span> </a> </p> 
                <p class="p-price"><b>¥{{$value->price}}</b></p> 
                <div class="p-button clearfix"> 
                 <table colspan="0" border="0" rowspan="0"> 
                  <tbody> 
                   <tr> 
                    <td><a target="_blank" href="/homegoodsinfo/{{$value->id}}" class="p-button-cart"><span>选购</span></a></td> 
                   <td><a target="_blank" href="javascript:;" class="p-button-cart" onclick="ff({{$value->id}})"><span>取消收藏</span></a></td>
                   </tr> 
                  </tbody> 
                 </table> 
                </div> 
               </div> 
              </li>
            @endforeach
           </ul> 
          </div> 
        </div>
      </div> 
    </div> 
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
  </div> 
 </body>
 <script>
 //ajax 取消收藏
  function ff(sid){
   ss = confirm('是否要删除??');
   if (ss) {
      $.get('/nolike',{id:sid},function(data){
        if(data == 1){
          alert('删除成功');
          $('li').each(function(){
            if($(this).attr('data-id') == sid){
              $(this).remove();
            }
          });
         
        }else if(data ==2){
          alert('删除失败');
        }else{
           location.href="/homelogin/create";
        }
      });
   }
  }
 </script>
</html>
@endsection