@extends('Home.HomePublic.public')
@section('title','收货地址_个人中心')
@section('content')
<!-- <link rel="shortcut icon" href="https://www.vmall.com/favicon.ico"> -->
<link href="/static/homes/city/ec.core.base.min.css" rel="stylesheet" type="text/css">
<link href="/static/homes/city/main.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/static/homes/ali_font/iconfont.css">
<script type="text/javascript" src = /static/jquery-1.7.2.min.js></script>
<body class="wide">
<div id="base_index" class="">
  
<div class="hr-10"></div>
<div class="g">
  <!--面包屑 -->
<!-- <div class="breadcrumb-area fcn"><a href="">首页</a>&nbsp;&gt;&nbsp;<em id="personCenter"><a href="">我的商城</a></em><em id="pathPoint">&nbsp;&gt;&nbsp;</em><span id="pathTitle">收货地址管理</span></div> 
</div> -->
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
                              <input type="text" name="name" class="text span-130"><span id="nspan"></span>
                            </td>
                        </tr>
                        <tr>
                            <th><span class="required">*</span>手机号码：</th>
                            <td>
                                <input type="text" name="phone" class="text span-130" placeholder="请输入11位手机号码"><span id="pspan"></span>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="2" class="selecte-vat">
                              <span class="required">*</span>收货地址：</th>
                            <td class="relative">
                <!--20170627  收货地址 start-->
                    <!--以下内容隐藏时添加class="hide"，显示去掉class="hide"-->
<div class="form-address">
    <div id="current-address" class="form-address-detail open" >
      选择省-市-区-街道
      <a href="javascript:void(0)" style="position: relative;left: 440px;top: 1px"><i class="iconfont icon-xiala1"></i></a>
    </div><!--有内容时添加class="form-address-detailcon"-->
</div><span id="cspan"></span>
<div id="address-tab" class="form-address selected ok" style="display: none;">
    <!-- 关闭地址选项 -->
    <a href="javascript:void(0)" id="guanbi" style="display: block;position:relative;left: 570px;top: 10px"><i class="iconfont icon-guanbi"></i></a>

    <div id="form-address-choose-normal" class="form-address-choose">
        <div class="form-address-name">
            <div id="provice_info dd" class="form-address-name-tab clearfix"><!--已选择内容时添加class="current"-->
              <a id="provice" level-value="1" data-value="">请选择</a>
              <a id="city" level-value="2" data-value="">请选择</a>
              <a id="district" level-value="3" data-value="">请选择</a>
              <a id="street" level-value="4" class="hide" data-value=""></a>
            </div>
            <div id="address_table" class="form-address-name-con" style="min-height: 180px;">
            </div>
        </div>
    </div>
</div>
<label id="myAddress-msg"></label>
              </td>
                        </tr>
                        <tr class="tr-rel">
                            <td>
                              <div class="inline-block relative">
                                <textarea name="city" id="citygg" class="textarea span-574" style="z-index: 1;" placeholder="如选择不到您的地区，请在此处详细描述"></textarea><span id="tspan"></span>
                              </div>
                              <!-- <label class="vat" id="address-msg"></label> -->
                            </td>
                        </tr>
                        <tr>
                            <th><label for="zipCode-add">邮编：</label></th>
                            <td>
                              <input type="text" class="text span-130 ime-disabled" name="code" id="code" placeholder="北京 100000"><span id="yspan"></span>
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
<!-- 地址管理 和 表单检测 -->
<script type="text/javascript">
  flage = false;
  //获取收货人 绑定失去焦点事件
  $("input[name='name']").blur(function(){
    //获取收货人
    n = $(this).val();
    //正则判断
    if (n == '') {
      //错误
      $('#nspan').css('color','red').html('*收货人不能为空');
      flage = false;
    }else if(n.match(/^[\d\w\u4e00-\u9fa5,]{2,15}$/)==null){
      $('#nspan').css('color','red').html('*收货人长度为2-15个字符,且不能使用特殊字符');
      flage = false;
    }else{
      $('#nspan').css('color','green').html('*收货人名可用');
      flage = true;
    }
  });

  //获取手机号 绑定失去焦点事件
  $("input[name='phone']").blur(function(){
    //获取收货人
    p = $(this).val();
    //正则判断
    if (p == '') {
      //错误
      $('#pspan').css('color','red').html('*手机号码不能为空');
      flage = false;
    }else if(p.match(/^1[34578]\d{9}$/)==null){
      $('#pspan').css('color','red').html('*手机号码格式错误');
      flage = false;
    }else{
      $('#pspan').css('color','green').html('*手机号码可用');
      flage = true;
    }
  });

  //获取地址  绑定失去焦点事件
  $("#citygg").blur(function(){
    //详细地址
    t = $(this).val();
    //获取地址下拉框
    c = $('.open').html();
    //判断有没有选择地址
    if (c != '选择省-市-区-街道') {
      $('#cspan').css('color','red').html('*请选择完整的信息地区');
      flage = false;
    }else{
      $('#cspan').removeAttr('class').html('');
      flage = true;
    }
    //判断有没有填写详细的信息
    if (t == '') {
      $('#tspan').css('color','red').html('*请填写详细地址');
      flage = false;
    }else if (t.match(/^[\d\w\u4e00-\u9fa5,]{4,50}$/)==null) {
      $('#tspan').css('color','red').html('*详细地址为4-50字段');
      flage = false;
    }else{
      $('#tspan').removeAttr('style').html('');
      flage = true;
    }
  });
  
  //获取邮编 绑定失去焦点事件
  $("#code").blur(function(){
    var y = $(this).val();
    if(y != ''){
      if (y.match(/^[0-9]{6}$/)==null) {
        $('#yspan').css('color','red').html('邮编为6位数字,请注意格式');
      }
    }else{
      $('#yspan').removeAttr('class').html('').prev('#code').attr('placeholder','邮编可不填');
    }
  })
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
        //消除三级城市的样式  添加四级城市的内容
        $('#district').attr('data-value',id).html(name).removeAttr('class');
        $('#address_table').empty();        
      break;
      case 4:
        $('#street').attr('data-value',id).html(name).removeAttr('class');
        $('#address_table').empty();
      break;  
    }
    // 获取二级地址sss
      $.get('/district',{upid:id},function(sulefu){
        if (sulefu != '') {
          //得到数组内容  遍历数组
          for (var i = 0; i < sulefu.length ; i++) {
            // console.log(sulefu[i].name);
            //将我们获取到的数据写入到div中
            var info = $('<li id="'+sulefu[i].id+'" value="'+sulefu[i].level+'"  style="list-style:none"><a href="javascript:void(0)">'+sulefu[i].name+'</a></li>');
            //将写好的数据放置页面
            $('#address_table').append(info);
          }
        }else{
            //获取各级地址 s=>省  si=>市 x=>县 z=>镇
            var s = $('#provice').html();
            var si = $('#city').html();
            var x = $('#district').html();
            var z = $('#street').html();
            //拼接地址
            var url= s + '-' + si +'-'+ x + z;
            //将上边地址栏的内容修改掉           
            $('#current-address').html(url).addClass('form-address-detailcon').attr('value','1');
          //删除之前修改的样式
            $('.ok').css('display','none');
            $('#provice').removeAttr('class').html('请选择');
            $('#city').removeAttr('class').html('请选择');
            $('#district').removeAttr('class').html('请选择');
            $('#street').attr('class','hide').empty();
          //删除之前的内容
           $('#address_table').empty();
        }
          // console.log(sulefu);
      },'json');
  });
  //点击叉叉隐藏地址界面  并消除内容
  $('#guanbi').click(function(){
    //隐藏地址栏
    $('.ok').css('display','none');
    //清空选中的地址内容
    $('#address_table').empty();
    $('#provice').removeAttr('class').html('请选择');
    $('#city').removeAttr('class').html('请选择');
    $('#district').removeAttr('class').html('请选择');
    $('#street').attr('class','hide').empty();
  });
</script>


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
<!-- <script src="/static/homes/city/csrftoken.js(1).下载"></script> -->
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
</div>
@endsection