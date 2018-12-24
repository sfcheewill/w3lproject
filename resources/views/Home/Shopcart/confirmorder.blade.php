@extends('Home.HomePublic.public')
@section('title','确认订单')
@section('content')
<html>
 <head></head>
 <link rel="stylesheet" href="/static/homes/confirmorder/main.min.css">
 <link rel="stylesheet" href="/static/homes/confirmorder/ec.core.base.min.css">
 <script src="/static/jquery-1.7.2.min.js"></script>
 <body>
  <div class="header order-header"> 
   <div class="layout"> 
    <div class="left"> 
     <!-- 2017-06-19-logo-文字-start --> 
     <div class="logo logo-word"> 
      <a href="/homeindex" title="华为商城"><img src="/static/homes/confirmorder/WTDdguIWgNsNWtK0Q1Z3.png" alt="华为商城" /></a> 
      <span>确认订单</span> 
     </div> 
     <!-- 2017-06-19-logo-文字-end --> 
    </div> 
    <div class="right"> 
     <!--头部 --> 
     <!-- <div class="order-header">
                <div class="fr"> --> 
     <!--步骤条-三步骤 --> 
     <div class="progress-area progress-area-3"> 
      <!--我的购物车 --> 
      <div id="progress-cart" class="progress-sc-area hide">
       我的购物车
      </div> 
      <!--核对订单 --> 
      <div id="progress-confirm" class="progress-co-area hide" style="display: block;">
       填写核对订单信息
      </div> 
      <!--成功提交订单 --> 
      <div id="progress-submit" class="progress-sso-area hide">
       成功提交订单
      </div> 
     </div> 
     <!-- </div>
            </div> -->  
    </div> 
   </div> 
  </div> 
  <script type="text/javascript">$("#progress-confirm").show();</script> 
  <script type="text/javascript">window._to = { start: new Date() };</script> 
  <script type="text/javascript">document.body.className = "wide order";</script> 
  <div class="layout order"> 
   <!--订单-表单 --> 
   <form action="/homeorder" method="post" id="myOrder">
   <div> 
    <!--20170717-全局提示-start --> 
    <!--20170717-全局提示-end --> 
    <div class="hr-20" id="order-address-hr"></div> 
    <!-- 20170717-订单表单-地址-start --> 
    <div class="order-detail-area order-address" id="order-address-mod"> 
     <div class="h">
       收货地址 
      <a id="upAddAddressButton" href="/usercity" onclick="return confirm('是否去添加新地址')" class="address-add-btn" style="display: none;">新增收货地址</a> 
     </div> 
     <div class="order-address-list" id="order-address-list"> 
      <ul class="clearfix">
      	@foreach($user_city as $c)
       <li class="myAddress" index="{{$c->id}}">
        <div class="address-supplement hide">
         <a href="javascript:;" onclick="edit({{$c->id}})" class="address-add-btn">请完善街道信息</a>
        </div><span id="defaultAddress-62156008" class="address-status hide">默认地址</span>
        <div class="address-main" onclick="select({{$c->id}});">
         <p class="clearfix"><b id="consignee-name-{{$c->id}}">{{$c->name}}</b><span id="consignee-tel-{{$c->id}}">{{$c->phone}}</span></p>
         <div class="address-detail" id="address-detail-{{$c->id}}">
          {{$c->city}}
         </div>
        </div><input type="hidden" id="needL4Addr" value="false" /><input type="hidden" id="needModify" value="false" /><input type="hidden" name="streetName" value="前进街道" /><input type="hidden" name="myAddress" id="input-myAddress62156008" data-province="3853" data-city="3854" data-district="3856" data-id="62156008" value="62156008" />
        <div class="address-sub">
        </div></li>
        @endforeach
       <li id="address-empty">
        <div class="address-empty">
         <a href="/usercity" class="address-add-btn" onclick="return confirm('是否去添加新地址')">新增收货地址</a>
        </div></li>
      </ul> 
     </div> 
     <div class="f"> 
      <div id="address-more"> 
       <a href="javascript:;" class="address-expand hide" style="display: none;">查看全部地址</a>
       <!--收缩class="address-shrink"--> 
       <a href="javascript:;" class="address-shrink hide" style="display: none;">收起地址</a> 
      </div> 
     </div> 
     <input name="ordercity" id="ordercity" type="hidden" /> 
    </div> 
    <!--20170717-订单表单-地址-end --> 
    <div class="hr-10"></div> 
    <!--20170717-订单表单-发票信息-start --> 
   
    <!--20170717-订单表单-发票信息-end --> 
    <!--20170717-清分 --> 
   </div> 
   <div class="hr-10"></div> 
   <div class="order-detail-area"> 
    <div class="order-detail clearfix" id="order-pro-list"> 
     <div class="order-list">
     @foreach($orderdata as $o) 
      <div class="order-list-detail"> 
       <div class="order-main clearfix "> 
        <a style="cursor:default" ahref="/product/10086789934944.html#2601010083802" class="p-img" target="_blank"> <img alt="{{$o->gname}} {{$o->desc}}" src="{{$o->pic}}" /> </a> 
        <ul class=""> 
         <li> <a style="cursor:default" ahref="/product/10086789934944.html#2601010083802" class="p-name" title="{{$o->gname}} {{$o->desc}}" src="{{$o->pic}}" target="_blank" seed="item-name">{{$o->gname}} {{$o->desc}}" src="{{$o->pic}}</a> <input type="hidden" class="skuCodeQuanClass" value="1" id="2601010083802" /> </li> 
         <li>{{$o->quantity}}</li> 
         <input type="hidden" name="gids[]" value="{{$o->gid}}">
         <input type="hidden" name="quantitys[]" value="{{$o->quantity}}">
         <li class="p-price"> &yen;&nbsp;{{$o->price}} </li> 
        </ul> 
       </div> 
      </div>
      @endforeach  
      <!--自营订单-赠品-start--> 
      <!--自营订单-赠品-end--> 
 
     </div> 
     <div class="order-total">
      <!-- 20170718-订单结算-start --> 
      <!--TCS商品不展示快递方式--> 
      <div class="order-total-info"> 
       <p>商品由<span>华为商城</span>选择合作快递</p> 
       <p> <strong id="order_confirm_tipsMsg" style="display: none;"></strong> <em id="order_confirm_tips" class="hide" style="display: none;"><b>“预计送达时间”功能处于试运营，可能会略有偏差，最终以实际到货时间为准，如有疑问请您联系商城客服。感谢您对华为商城的支持和理解！</b></em> </p> 
      </div> 
      <div class="order-total-price"> 
       <div class="clearfix"> 
        <div class="order-price-detail"> 
         <ul> 
          <li><strong>商品总金额：</strong> <span> &yen;<em id="order-cost-area" data-oldval=" {{$sum}}.00">{{$sum}}.00</em> </span> </li> 
          <li><strong>运费：</strong> <span> &yen;<em id="order-deliveryCharge">0.00</em> </span> </li> 
          <li><strong>优惠金额：</strong> <span> -&yen;<em>0.00</em> </span> </li> 
          <li> <strong>结算金额：</strong> <span><b></b> <span><b>&yen;</b><b id="order-price-VMALL-HUAWEIDEVICE" data-oldval="{{$sum}}.00">{{$sum}}.00</b></span> </span> </li> 
         </ul> 
        </div> 
       </div> 
      </div> 
     </div>
     <!--20170718-订单结算-end--> 
    </div> 
    <!--201701227-礼品购-start --> 
    <!--20171227-礼品购-end --> 
    <!--展示代销商品 start--> 
    <!-- 代销商品展示结束 --> 
   </div> 
   {{csrf_field()}}
   </form>
   <div class="hr-10"></div> 
   <div class="order-detail-area clearfix"> 
    <div class="order-submit">
     <!-- 20170718-订单提交-start --> 
     <div class="order-submit-info"> 
      <div class="order-submit-price">
       应付总额：
       <b>&yen;<span id="payableTotal">{{$sum}}.00</span></b>
      </div> 
      <div class="order-submit-integral"> 
       <span id="isHidePoint"><em>可获得积分：<em id="canHavePoint">{{ceil($sum/10)}}</em></em></span> 
      </div> 
     </div> 
     <div class="order-submit-address" id="peopleTelAddressID" style="display: none;"> 
      <ul> 
       <li> <label>配送至：</label> <p id="deliveryAddress"><span id="addressID"></span></p> </li> 
       <li> <p><span id="peopleID"></span><span id="telID"></span></p> </li> 
      </ul> 
     </div> 
     <div class="clearfix hide" id="no-delivery-address-tips" style="display: block;">
      <div class="report-errors">
       <span id="no-choose-address">未选择收货地址不可下单</span>，
       <a href="#" id="link-choose-address">点击选择</a>
      </div>
     </div> 
     <div class="clearfix"> 
      <a href="javascript:;" id="checkoutSubmit" onclick="submit();" class="order-submit-btn" seed="checkout-submit"><span>提交订单</span></a> 
     </div> 
    </div>
    <!-- 20170718-订单提交-end --> 
   </div> 
   <textarea class="hide" id="unpay-order"></textarea> 
   <textarea class="hide" id="erroCompany"></textarea> 
  </div> 
  <div class="hr-45"></div> 
  
  <!--优惠活动列表 --> 
  <textarea id="order-promoPremiums-tpl" class="hide"> &lt;!--#macro promoPremiums data--&gt; &lt;table cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; border=&quot;0&quot;&gt; &lt;tbody&gt; &lt;!--#list data as lst--&gt; &lt;tr&gt; &lt;td class=&quot;tal&quot;&gt; &lt;dl&gt; &lt;dt&gt;{#lst.premiumsName}&lt;/dt&gt; &lt;dd&gt;商家活动：{#lst.promoCampaignName} &lt;/dd&gt; &lt;/dl&gt; &lt;/td&gt; &lt;td class=&quot;tr-span-3&quot;&gt;&lt;em&gt;1个&lt;/em&gt;&lt;/td&gt; &lt;td class=&quot;tr-span-4&quot;&gt;&nbsp;&lt;/td&gt; &lt;/tr&gt; &lt;!--/#list--&gt; &lt;/tbody&gt; &lt;/table&gt; &lt;!--/#macro--&gt; </textarea> 
 
 </body>
</html>
<script>
	//选择地址
	function select(cid){
		$('.myAddress').each(function(){
			if($(this).attr('index') == cid){
				$(this).addClass('current');
				$('#no-delivery-address-tips').css('display','none');
				var name = $('#consignee-name-'+cid).html();
				var phone = $('#consignee-tel-'+cid).html();
				var address = $('#address-detail-'+cid).html();
				$('#addressID').html(address);
				$('#peopleID').html(name);
				$('#telID').html(phone);
				$('#peopleTelAddressID').css('display','block');
				$($('#ordercity')).val(cid);
			}else{
				$(this).removeClass('current');
			}
		});
	}

	//默认地址
	// function setDetault(addressID){
	// 	$('.myAddress').each(function(){
	// 		if($(this).attr('index') == addressID){
	// 			$(this).find('.address-status').removeClass('hide');
	// 		}else{
	// 			$(this).find('.address-status').addClass('hide');
	// 		}
	// 	}
	// }
	
	//提交订单
	function submit(){
		if($('#ordercity').val() == ''){
			alert('请您选择收货地址');
			return false;
		}else {
			//触发表单提交
			$('#myOrder').submit();
		}
	}
</script>
@endsection