@extends('Home.HomePublic.public')
@section('title','收货地址_个人中心')
@section('content')
<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="/static/homes/city/ec.core.base.min.css" rel="stylesheet" type="text/css">
<link href="/static/homes/city/main.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/static/homes/ali_font/iconfont.css">
<script type="text/javascript" src = /static/jquery-1.7.2.min.js></script>
<body class="wide">
<div id="base_index" class="">
  
<div class="hr-10"></div>
<div class="g">
  <!--面包屑 -->
<div class="breadcrumb-area fcn"><a href="https://www.vmall.com/">首页</a>&nbsp;&gt;&nbsp;<em id="personCenter"><a href="https://www.vmall.com/member/">我的商城</a></em><em id="pathPoint">&nbsp;&gt;&nbsp;</em><span id="pathTitle">收货地址管理</span></div> 
</div>
<div class="hr-10"></div>

  <div class="g">
      <div class="fr u-4-5"><!-- 20141212-栏目-start -->
<div class="section-header">
    <div class="fl">
        <h2><span>收货地址管理</span></h2>
    </div>
</div><!-- 20141212-栏目-end -->
<div class="hr-20"></div>
<!-- 20141216-我的收货地址-表单-编辑地址-start -->
<div class="myAddress-edit" id="myAddress-edit">
    <div class="form-edit-panels" id="form-edit-panels">
    <!-- 发送数据表单 -->
      <form id="myAddress-form" action="/usercity" autocomplete="off" method="post" data-type="add">            
            <div class="form-edit-table">
                <table border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                        <tr>
                            <th><span class="required">*</span>收货人：</th>
                            <td>
                              <input type="text" name="name" class="text span-130">
                            </td>
                        </tr>
                        <tr>
                            <th><span class="required">*</span>手机号码：</th>
                            <td>
                                <input type="text" name="phone" class="text span-130">
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="2" class="selecte-vat">
                              <span class="required">*</span>收货地址：</th>
                            <td class="relative">
                <!--20170627  收货地址 start-->
                    <!--以下内容隐藏时添加class="hide"，显示去掉class="hide"-->
<div class="form-address">
    <div id="current-address" class="form-address-detail open" >选择省-市-区-街道</div><!--有内容时添加class="form-address-detailcon"-->
</div>
<div id="address-tab" class="form-address selected ok" style="display: none;">
    <!-- 关闭地址选项 -->
    <a href="javascript:void(0)" id="chacha" style="display: block;position:relative;left: 570px;top: 10px"><i class="iconfont icon-chacha"></i></a>

    <div id="form-address-choose-normal" class="form-address-choose">
        <div class="form-address-name">
            <div id="provice_info dd" class="form-address-name-tab clearfix"><!--已选择内容时添加class="current"-->
              <a id="provice" level-value="1" data-value="">请选择</a>
              <a id="city" level-value="2" data-value="">请选择</a>
              <a id="district" level-value="3" data-value="">请选择</a>
              <a id="street" level-value="4" class="hide" data-value="">请选择</a>
            </div>
            <div id="address_table" class="form-address-name-con" style="min-height: 180px;">
            </div>
        </div>
    </div>
</div>
<!-- 地址管理 -->
<script type="text/javascript">
  //第一层
  $('#current-address').click(function(){
    $('#address-tab').css('display','block');
    $('#provice').attr('class','current');
    // 获取一级地址sss
      $.get('/district',{upid:0},function(sulefu){
          //得到数组内容  遍历数组
          for (var i = 0; i < sulefu.length ; i++) {
            // console.log(sulefu[i].name);
            //将我们获取到的数据写入到div中
            var info = $('<li id="'+sulefu[i].id+'" value="'+sulefu[i].level+'"  style="list-style:none"><a href="javascript:void(0)">'+sulefu[i].name+'</a></li>');
            //将写好的数据放置页面
            $('#address_table').append(info);
          }
      },'json');
  });

  $('#address_table a').live('click',function(){
    var id = $(this).parent().attr('id');
    var name = $(this).html();
    var level = $(this).parent().attr('value');
    alert(level);
    switch(level){
      //二级城市名
      case 1:
        //添加二级城市的样式
        $('#city').attr('class','current');
        // 消除一级城市的样式     添加二级城市的内容
        $('#provice').attr('data-value',id).html(name).removeAttr('class');
        $('#address_table').empty();
      break;
      //三级城市名
      case 2:
        //添加三级城市样式
        $('#district').attr('class','current');
        //消除二级城市的样式   添加三级城市的内容
        $('#city').attr('data-value',id).html(name).removeAttr('class');
        $('#address_table').empty();
      break;
      case 3:
        //添加四级城市的样式
        $('#street').attr('class','current');
        //消除三级城市的样式  添加四级城市的样式
        $('#district').attr('data-value',id).html(name).removeAttr('class');
        $('#address_table').empty();
      break;     
      case 4:
      if (empty(level)) {
        //消除三级城市的样式  添加四级城市的样式并隐藏
        $('#street').attr('data-value',id).html(name).removeAttr('class');
        $('#address_table').empty();
        $('#address-tab').css('display','none');
      }
          
      break;
    }
    // 获取二级地址sss
      $.get('/district',{upid:id},function(sulefu){
          //得到数组内容  遍历数组
          for (var i = 0; i < sulefu.length ; i++) {
            // console.log(sulefu[i].name);
            //将我们获取到的数据写入到div中
            var info = $('<li id="'+sulefu[i].id+'" value="'+sulefu[i].level+'"  style="list-style:none"><a href="javascript:void(0)">'+sulefu[i].name+'</a></li>');
            //将写好的数据放置页面
            $('#address_table').append(info);
          }
          // console.log(sulefu);
      },'json');
  });

  //点击获取选择地址的界面
  // $('.open').click(function(){
  //   $('.ok').css('display','block');
  //   //获取一级地址
  //   $.get('/district',{upid:0},function(sulefu){
  //       //得到数组内容  遍历数组
  //       for (var i = 0; i < sulefu.length ; i++) {
  //         // console.log(sulefu[i].name);
  //         //将我们获取到的数据写入到div中
  //         var info = $('<li id="'+sulefu[i].id+'" value="'+sulefu[i].id+'"  style="list-style:none"><a href="javascript:void(0)">'+sulefu[i].name+'</a></li>');
  //         $('#provice').attr('class','current');
  //         //将写好的数据放置页面
  //         $('#address_table').append(info);
  //       }
  //   },'json');
  // });

  //点击叉叉隐藏地址界面  并消除内容
  $('#chacha').click(function(){
    $('#address_table').val();
    //隐藏地址栏
    $('.ok').css('display','none');
    //清空地址栏内容
    $('#address_table').empty();
  });


  // //事件委派  获取下一个级别
  // $('li').live('click',function(){
  //   //获取到时候 清空上一级的内容
  //   $('#address_table').empty();
  //   //将当前存储起来
  //   obj = $(this);
  //   id = $(this).attr('value');
  //   name = $(this).find('a').html();
  //   console.log(name);
  //   //将获取到的id和name  赋值到上边的选择中并将class样式去除
  //   $('#provice').attr('data-value',id).html(name).removeAttr('class');
  //   //根据当前id获取下一级内容
  //   $.get('/district',{upid:id},function(sulefu){
  //     // console.log(sulefu);
  //     // 遍历数据
  //     for (var i = 0; i < sulefu.length; i++) {
  //       // alert(level);
  //       var info = $('<li id="'+sulefu[i].id+'" value="'+sulefu[i].id+'"  style="list-style:none"><a href="javascript:void(0)">'+sulefu[i].name+'</a></li>');
  //         $('#city').attr('class','current');
  //         //将写好的数据放置页面
  //         $('#address_table').append(info);
  //       }
  //   },'json');
  // })
</script>
<label id="myAddress-msg"></label>
              </td>
                        </tr>
                        <tr class="tr-rel">
                            <td>
                              <div class="inline-block relative">
                                <textarea name="address" id="address" class="textarea span-574" validator="validator31545208750270" style="z-index: 1;"></textarea>
                              </div>
                              <!-- <label class="vat" id="address-msg"></label> -->
                            </td>
                        </tr>
                        <tr>
                            <th><label for="zipCode-add">邮编：</label></th>
                            <td>
                              <input maxlength="6" type="text" class="text span-130 ime-disabled" name="zipCode" id="zipCode" validator="validator41545208750270">
                            </td>
                        </tr>
                        
                        <tr>
                            <th>&nbsp;</th>
                            <td>
                              <label class="inputbox">
                                <input type="checkbox" class="checkbox" name="defaultFlag" value="1" id="myAddress-default">
                                <span>设为默认收货地址</span>
                              </label>
                            </td>
                        </tr>
                        <tr class="tr-action">
                          <th>&nbsp;</th>
                          <td>
                            <div id="form-edit-button">
                              <input type="submit" id="button-ok" class="button-action-ok" value="添加新地址">
                                <a href="javascript:;" id="button-cancel" class="button-action-cancel" >清&nbsp;&nbsp;空</a>
                            </div>
                          </td>
                        </tr>
                    </tbody>
                </table>
            </div>
      </form>
    </div>
</div>
<!-- 20141216-我的收货地址-表单-编辑地址-end -->
<div class="hr-30"></div>
<!-- 20141216-我的收货地址-列表-start -->
<!--表单-我的收货地址 -->
<div class="myAddress-record hide" id="myAddress-record" style="display: block;">
  <div class="list-group-title">
    <table border="0" cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th class="col-name">收货人</th>
          <th class="col-address">收货地址</th>
          <th class="col-zip">邮编</th>
          <th class="col-tel">手机/电话</th>
          <th class="col-operate">操作</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="list-group" id="list-group">
    <div class="list-group-item" id="myAddress-area-62983138">
      <table border="0" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td class="col-name">收货人</td>
            <td class="col-address">地址</td>
            <td class="col-zip">邮编</td>
            <td class="col-tel"><p>手机</p></td>
            <td class="col-operate">
              <p class="p-edit">
                <a class="" href="javascript:;" title="编辑">编辑</a>
              </p>
              <p class="p-del">
                <a class="" href="javascript:;" title="删除">删除</a>
              </p>
              <p class="p-state">
                <span class="default">默认地址</span>
              </p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<input type="hidden" id="gouldAddress" name="unionPaySwitch" value="1">
<script src="/static/homes/city/csrftoken.js(1).下载"></script></div>
    <div class="fl u-1-5">
<!-- 20170823-左边菜单-start -->
<div class="mc-menu-area">
  <div class="h"><a href="https://www.vmall.com/member?t=1545208827346"><span>我的商城</span></a></div>
    <div class="b">
        <ul>
            <li>
                <h3 class="icon-mc-mail"><a href="https://www.vmall.com/member/msg?t=1545208827346"><span id="li-msg">消息中心<em></em></span></a></h3>
            </li>
            <li>
                <h3 class="icon-mc-help"><a href="https://www.vmall.com/help/index.html" target="_blank"><span>帮助中心</span></a></h3>
            </li>
          <li>
                <h3 class="icon-mc-order"><span>订单中心</span></h3>
              <ol>
                  <li id="li-order"><a href="https://www.vmall.com/member/order?t=1545208827346"><span>我的订单</span></a></li>
                  <li id="li-order-small" style="display: none;"></li>
                    <li id="li-exchange"><a href="https://www.vmall.com/member/exchange?t=1545208827346"><span>我的退换货</span></a></li>
                  <li id="li-refunds"><a href="https://www.vmall.com/member/refunds?t=1545208827346"><span>我的退款</span></a></li>
          <li id="li-recover"><a href="https://www.vmall.com/member/recycle/index/aihuishou?t=1545208827346"><span>我的回收单</span></a></li>
                    <li id="li-prdRemark"><a href="https://www.vmall.com/member/prdRemarkView?t=1545208827346"><span>商品评价</span></a></li>
                </ol>
            </li>
            <li>
                <h3 class="icon-mc-asset"><span>我的资产</span></h3>
                <ol>
                    <li id="li-newpoint"><a href="https://www.vmall.com/member/newpoint?t=1545208827346"><span>我的积分</span></a></li>
                    <li id="li-coupon"><a href="https://www.vmall.com/member/coupon?t=1545208827346"><span>我的优惠券</span></a></li>
                    <li id="li-balance"><a href="https://www.vmall.com/member/balance?t=1545208827346"><span>我的代金券</span></a></li>
                    <li id="li-petal"><a href="https://www.vmall.com/member/petal?t=1545208827346"><span>我的花瓣</span></a></li>
                    <li id="li-point"><a href="https://www.vmall.com/member/point?t=1545208827346"><span>等级与特权</span></a></li>
                </ol>
            </li>
            <li>
                <h3 class="icon-mc-support"><span>购买支持</span></h3>
              <ol>
                    <li id="li-myAddress" class="current"><a href="https://www.vmall.com/member/myAddress?t=1545208827346"><span>收货地址管理</span></a></li>
                    <li id="li-authentication"><a href="https://www.vmall.com/authmember/accesstoken?t=1545208827346"><span>实名认证</span></a></li>
          <li id="li-myAppointment"><a href="https://www.vmall.com/member/myAppointment?t=1545208827346"><span>我的预约</span></a></li>
                    <li id="li-notification"><a href="https://www.vmall.com/member/notification?t=1545208827346"><span>到货通知</span></a></li>
                    <li id="li-myeasybuy"><a href="https://www.vmall.com/member/myeasybuy?t=1545208827346"><span>我的优享购</span></a></li>
                    <li id="li-enterprise" class="hide"></li><!-- 优惠内购 -->
                    <li id="li-o2o" class="hide"><a href="https://www.vmall.com/o2o?t=1545208827346"><span>O2O商城</span></a></li>
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


@endsection