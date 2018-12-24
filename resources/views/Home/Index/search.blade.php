@extends('Home.HomePublic.public')
@section('title','商品搜索')
@section('content')
  <html>
 <head></head>
 <link rel="stylesheet" href="/static/homes/search/ec.core.base.min.css">
 <link rel="stylesheet" href="/static/homes/search/main.min.css">
 <body>
  <div class="header"> 
   <div class="layout"> 
    <div class="left"> 
     <!-- 2017-02-15-logo-start --> 
     <div class="logo"> 
      <a href="/homeindex" title="Vmall.com - 华为商城"><img src="/static/homes/search/x9a6U8WW0bhrA7u0FIlY.png" alt="Vmall.com - 华为商城" /></a> 
     </div> 
     <!-- 2017-02-15-logo-end --> 
     <!-- 2017-06-19-导航-start --> 
     <div class="naver"> 
      <ul id="naver" class="clearfix"> 
       <li id="zxnav_0" data-id="0"> <a href="https://www.vmall.com/list-36" target="_blank"><span>手机</span></a> <input id="zxnav_0_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_0_name" type="hidden" autocomplete="off" value="手机" /> </li> 
       <li id="zxnav_1" data-id="1"> <a href="https://www.vmall.com/list-40" target="_blank"><span>笔记本 &amp; 平板</span></a> <input id="zxnav_1_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_1_name" type="hidden" autocomplete="off" value="笔记本 &amp; 平板" /> </li> 
       <li id="zxnav_2" data-id="2"> <a href="https://www.vmall.com/list-59" target="_blank"><span>智能穿戴</span></a> <input id="zxnav_2_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_2_name" type="hidden" autocomplete="off" value="智能穿戴" /> </li> 
       <li id="zxnav_3" data-id="3"> <a href="https://www.vmall.com/list-43" target="_blank"><span>智能家居</span></a> <input id="zxnav_3_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_3_name" type="hidden" autocomplete="off" value="智能家居" /> </li> 
       <li id="zxnav_4" data-id="4"> <a href="https://www.vmall.com/list-54" target="_blank"><span>通用配件</span></a> <input id="zxnav_4_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_4_name" type="hidden" autocomplete="off" value="通用配件" /> </li> 
       <li id="zxnav_5" data-id="5"> <a href="https://www.vmall.com/list-47" target="_blank"><span>专属配件</span></a> <input id="zxnav_5_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_5_name" type="hidden" autocomplete="off" value="专属配件" /> </li> 
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
      <div class="search-bar-key" id="search-bar-key" style="display: none;"> 
       <div class="searchBar-key">
       </div> 
      </div> 
      <div id="search-history" class="search-bar-history hide"> 
       <p> <label>历史记录</label><span id="cleanUp" class="search-history-btn">清除</span> </p> 
       <ul id="search-history-list"></ul> 
      </div> 
      <div id="AutocompleteContainter_d1cff" "="" style="top: 94px; left: 1230.5px;"> 
       <div class="autocomplete-w1"> 
        <div class="autocomplete" id="Autocomplete_d1cff" style="display: none; width: 290px; max-height: 400px;"></div> 
       </div> 
      </div> 
     </div> 
     <!-- 2017-02-15-搜索条-end --> 
    </div> 
   </div> 
  </div> 
  <!-- 2017-02-15-头部-end --> 
  <script>
$("body").addClass("wide");
</script> 
  <div class="search" style="background: #F5F5F5"> 
   <div class="layout"> 
    <!-- 20171023-错词转义处理-start --> 
    <!-- 20171023-错词转义处理-end --> 
    <!-- 20170118-搜索提示-start --> 
    <div class="pro-cate-tips"> 
     <h2>搜索&nbsp;&nbsp;<span class="red f14">[{{$goodsname}}]</span>&nbsp;&nbsp;共找到商品<span id="record-totalRow">{{count($goods)}}</span>件</h2> 
    </div> 
    <!-- 20170118-搜索提示-end --> 
    <!-- 20140726-商品类别-start --> 
    <div class="pro-cate-area"> 
     <!-- 20140726-商品类别-排序-start --> 
     <div class="pro-cate-sort clearfix"> 
      <div class="p-title">
        排序： 
      </div> 
      <!--<div class="p-default">
                    <ul class="clearfix">
                        <li id="sort-register_date" class="sort-desc selected" onclick="ec.search.sort('register_date')"><a href="javascript:;" class="sort-added" title="最新">最新<s></s></a></li>
                    </ul>
                </div>--> 
      <!-- 20170218 临时去掉最新（综合） 选项， p-values 添加fl类，style="margin-left=30px;"  --> 
      <div class="p-values fl" style="margin-left:30px;"> 
       <div class="p-expand"> 
        <ul class="clearfix" id="sort-type"> 
         <!-- 升序选择（从低到高）： sort-asc selected   降序选择（从高到低）： sort-desc selected --> 
         <li id="sort-overAll" class="selected" onclick="ec.search.sort('overAll','sort-overAll')"><a href="javascript:;" title="综合">综合 
           <s></s></a></li> 
         <li id="sort-register_date" onclick="ec.search.sort('register_date','sort-register_date')"><a href="javascript:;" title="最新">最新 
           <s></s></a></li> 
         <li id="sort-sale" class="" onclick="ec.search.sort('sale_number','sort-sale')"><a href="javascript:;" title="热度">热度 
           <s></s></a></li> 
         <li id="sort-price" class="" onclick="ec.search.sort('price','sort-price')"><a href="javascript:;" class="sort-price" title="价格从低到高">价格 
           <s></s></a></li> 
        </ul> 
       </div> 
      </div> 
     </div> 
     <!-- 20140726-商品类别-排序-end --> 
    </div> 
    <!-- 20140726-商品类别-end --> 
    <div class="hr-20"></div> 
    <!-- 20140726-频道-列表-start --> 
    <div class="channel-list"> 
     <!-- 20140727-商品列表-start --> 
     <div class="pro-list"> 
      <ul class=" clearfix" id="pro-list"> 
      @foreach($goods as $g)
       <li> 
        <!-- 鼠标悬停追加ClassName：hover --> 
        <div class="pro-panels "> 
         <input type="hidden" id="cmmdtyIndex" name="cmmdtyIndex" value="0" /> 
         <input type="hidden" id="itemdata_0" skuid="10086431508342" itemid="10086785341226" itemname="荣耀10" /> 
         <a href="/homegoodsinfo/{{$g->id}}" target="_blank"> <p class="p-img"><img src="{{$g->logo}}" alt="{{$g->name}}" /></p> <p class="p-name" title="{{$g->name}}">{{$g->name}}</p> <p class="p-price"><b>&yen;{{$g->price}}</b><span>多配置可选</span></p> 
          <s class="p-tag"> 
           <img src="{{$g->logo}}" /> 
          </s> </a> 
        </div> </li> 
       @endforeach
      </ul> 
     </div> 
     <!-- 20140727-商品列表-end --> 
     <!-- 分页-start --> 
     <div id="search-pager" class="pager"> 
      {{$goods->render()}} 
     </div> 
     <!-- 分页-end --> 
     <div class="hr-20"></div> 
    </div> 
    <!-- 20140726-频道-列表-end --> 
   </div> 
  </div> 
 </body>
</html>
@endsection