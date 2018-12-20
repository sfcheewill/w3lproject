@extends('Home.HomePublic.public')
@section('title','购物车')
@section('content') 
<html>
 <head></head>
 <link rel="stylesheet" href="/static/homes/shopcart/app.ee7a1ed.css">
 <script src="/static/jquery-1.7.2.min.js"></script>
 <body>
 <div id="app">
 <div class="sc">
  <div class="header order-header"> 
   <div class="layout"> 
    <div class="left"> 
     <div class="logo logo-word"> 
      <a href="/homeindex" title="华为商城"><img src="/static/homes/shopcart/20170703105852645577.png" alt="华为商城" /></a> 
      <span>我的购物车</span> 
     </div> 
    </div> 
    <div class="right"> 
     <div class="progress-area progress-area-3"> 
      <div id="progress-cart" class="progress-sc-area">
        我的购物车 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="layout "> 
  @if(!session('username')) 
     <div class="login-prompt">
       您还没有登录！登录后可查看之前加入的商品 
      <a href="/homelogin/create" rel="nofollow">登录</a> 
     </div>
    @endif
   <!----> 
   <!----> 
   <div class="hr-20"></div> 
   <div class="sc-list"> 
    <div class="sc-pro-title clearfix"> 
     <label class="checkbox"><input readonly="readonly" class="vam checked" /> 全选</label> 
     <ul class="clearfix"> 
      <li>商品</li> 
      <li>单价</li> 
      <li>数量</li> 
      <li>小计</li> 
      <li>操作</li> 
     </ul> 
    </div> 
    <form id="cart-form" autocomplete="off" method="post" action="/shopcart"> 
     <div class="sc-pro"> 
     @foreach($cart as $c)
      <div data-id="{{$c->gid}}"> 
       <div class="sc-pro-list clearfix"> 
        <label class="checkbox"><input readonly="readonly" type="checkbo" class="vam checked" /> </label> 
        <div class="sc-pro-area"> 
         <div class="sc-pro-main clearfix"> 
          <a href="/homegoodsinfo/{{$c->gid}}" target="_blank" class="p-img"><img src="{{$c->pic}}" alt="{{$c->name}}" /></a> 
          <div class="tips-1 p-stock-tips" style="display: none;">
            限购件 
          </div> 
          <ul title="{{$c->gid}}"> 
           <li><a href="/homegoodsinfo/{{$c->gid}}" target="_blank" title="{{$c->name}}" class="p-name"> 
             <!---->{{$c->name}}</a> 
            <!----> 
            <!----></li> 
           <li> 
            <div class="p-price"> 
             <span>&yen;&nbsp;{{$c->price}}.00</span> 
             <!----> 
            </div></li> 
           <li> 
            <div class="p-stock"> 
             <div class="p-stock-area"> 
              <input type="number" class="p-stock-text" value="{{$c->quantity}}" /> 
              <p class="p-stock-btn"><a href="javascript:;" class="">+</a> <a href="javascript:;" class="disabled">−</a></p> 
             </div> 
            </div></li> 
           <li class="p-price-total">&yen;&nbsp;<span class="prices">{{$c->price*$c->quantity}}</span>.00 
            <!----></li> 
           <li><a href="javascript:;" seed="cart-item-del" class="p-del">删除</a></li> 
          </ul> 
         </div> 
         <div class="sc-pro-parts"> 
          <!----> 
          <!----> 
          <!----> 
          <!----> 
          <!----> 
         </div> 
        </div> 
       </div>
       <input type="hidden" name="gids[]" value=""> 
       <!----> 
      </div> 
      @endforeach
     </div> 
    </form> 
   </div> 
   <div id="total_tool"></div> 
   <div class=""> 
    <div class="sc-total-tool layout clearfix "> 
     <div class="sc-total-control"> 
      <label class="checkbox"><input readonly="readonly" class="vam checked" /> 全选</label> 
      <a href="javascript:;">删除</a> 
     </div> 
     <div class="sc-total-btn "> 
      <a href="javascript:;">立即结算</a> 
     </div> 
     <div class="sc-total-price"> 
      <p><label>总计：</label> <span>&yen;&nbsp; {{$sum}}.00</span> <em><b>不含运费</b></em></p> 
      <div class="total-choose">
        已选择 
       <em>1</em>件商品，优惠： 
       <span>&yen;&nbsp;0.00</span> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div id="invalidItemList" style="display: none;"> 
    <div class="box-errors"> 
     <span>以下商品暂不可购买</span> 
    </div> 
    <div class="order-no-list"></div> 
   </div> 
   <!----> 
   <!----> 
  </div>
  </div>
  </div> 
 </body>
 <script>
    //加减控制数量
    $('.p-stock-btn a').click(function(){
      var obj = $(this);
      var val = $(this).html();
      var gid = $(this).parents('ul').attr('title');

      switch(val){
        case '+':
          var sum = parseInt($(obj).parent().prev().val()) + 1;
          // 控制最大不能超过库存
          $.get('/goodsadd',{sum:sum,gid:gid},function(data){
            if(data == 'success'){
              $(obj).removeClass('disabled');
              $(obj).parent().prev().val(sum);
              if($(obj).parent().prev() > 1){
                $(obj).next('a').removeClass('disabled');
              }
            }else {
              $(obj).addClass('disabled');
            }
            //ajax修改数量
            var quantity = $(obj).parent().prev().val();
            $.get('/cartplus',{gid:gid,quantity:quantity},function(data){
              obj.parents('ul').find('li[class="p-price-total"]').children('span').html(data);
              totalprice();
            });
          });
          break;
        case '−':
          var sum = parseInt($(obj).parent().prev().val()) - 1;
          if(sum == 0){
            $(obj).addClass('disabled');
          }else {
            $(obj).removeClass('disabled');
            $(obj).parent().prev().val(sum);
            $(obj).prev('a').removeClass('disabled');
          }
          //ajax修改数量
          var quantity = $('.p-stock-text').val();
          $.get('/cartminus',{gid:gid,quantity:quantity},function(data){
           obj.parents('ul').find('li[class="p-price-total"]').children('span').html(data);
           totalprice();
          });
          break;
      }

    });

    //输入值控制数量
    $('.p-stock-text').change(function(){
      var quantity = $(this).val();
      var gid = $(this).parents('ul').attr('title');
      var o = $(this);
      if(quantity < 1){
        $(this).val(1);
      }
      //Ajax
      $.get('/shopcartedit',{gid:gid,quantity:quantity},function(data){
        o.parents('ul').find('li[class="p-price-total"]').children('span').html(data);
        totalprice();
      })
    });

    //删除商品
    $('.p-del').click(function(){
      var s = confirm('确定要删除商品吗?');
      var gid = $(this).parents('ul').attr('title');
      var div = $(this).parents("div[data-id='"+gid+"']");
      if(s){
        //Ajax删除商品
        $.get('/cartdel',{gid:gid},function(data){
          if(data == 'success'){
            //删除成功,删除对应数据
            div.remove();
            totalprice();
          }else if(data == 'empty'){
            location.href="/homeshopcart";
          }
        })
      }
    });

    //计算总价跟商品
    function totalprice(){
      //商品总数
      var n = 0;
      //商品总价
      var m = 0;
      $('ul[title]').each(function(i){
        n += parseInt($(this).find('.p-stock-text').val());
        m += parseInt($(this).find('li[class="p-price-total"]').children('span').html());
      });
      //修改
      $('.sc-total-price').find('span:first').html('&yen;&nbsp; '+m+'.00');
      $('.total-choose em').html(n);
    }

    totalprice();

    //全选/全不选
    // function choose(){

    // }
    // $('.sc-total-control input').click(choose);
    // $('.sc-pro-title input').click(choose);

    //结算
  $('.sc-total-btn a').click(function(){
    //存储商品id
    var gids = [];
    //获取所有选中的商品id
    $('div[data-id]').each(function(i){
      var obj = $(this);
      if($(this).find('label').children('input').hasClass('checked')){
        gids.push($(obj).attr('data-id'));
        $(this).find
      }
    });
    //检测是否为空
    if(gids.length == 0){
      alert('未选中商品');
      return ;
    }else {
      gids = JSON.stringify(gids);
      location.href="/settleaccount/" + gids;
    }
  });
 </script>
</html>
@endsection