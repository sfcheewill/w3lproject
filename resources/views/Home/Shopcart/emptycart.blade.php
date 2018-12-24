 @extends('Home.HomePublic.public')
 @section('title','购物车')
 @section('content')
<html>
 <head></head>
 <link rel="stylesheet" href="/static/homes/shopcart/app.5952337.css">
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
     <div> 
      <div class="hr-20"></div> 
      <div class="sc-empty"> 
       <span class="icon-minicart"></span> 
       <p>您的购物车里什么也没有哦~</p> 
       <a href="/homeindex">去逛逛</a> 
      </div> 
      <!----> 
      <div class="hr-60"></div> 
     </div> 
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection