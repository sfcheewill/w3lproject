@extends('Home.HomePublic.public')
@section('title','商品列表')
@section('content')
<html>
 <head></head>
 <link rel="stylesheet" href="/static/homes/goodslist/ec.core.base.min.css">
 <link rel="stylesheet" href="/static/homes/goodslist/index.min.css">
 <link rel="stylesheet" href="/static/homes/goodslist/main.min.css">
 <body>
  <div class="header"> 
   <div class="layout"> 
    <div class="left"> 
     <!-- 2017-02-15-logo-start --> 
     <div class="logo">
      <a href="/homeindex" title="Vmall.com - 华为商城" onclick="pushLogoClickMsg('https://res.vmallres.com/pimages//sale/2018-11/x9a6U8WW0bhrA7u0FIlY.png','https://www.vmall.com/index.html')"><img src="/static/homes/goodslist/x9a6U8WW0bhrA7u0FIlY.png" alt="Vmall.com - 华为商城" /></a>
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
      <div id="AutocompleteContainter_2a390" "="" style="top: 94px; left: 1230.5px;">
       <div class="autocomplete-w1">
        <div class="autocomplete" id="Autocomplete_2a390" style="display: none; width: 290px; max-height: 400px;"></div>
       </div>
      </div>
     </div> 
     <!-- 2017-02-15-搜索条-end --> 
    </div> 
   </div> 
  </div>
  <!-- 2017-02-15-头部-end --> 
  <div class="hr-10"></div> 
  <div class="g"> 
   <!--面包屑 --> 
   <div class="breadcrumb-area fcn"> 
    <a href="/homeindex" title="首页">首页</a>&nbsp;&gt;&nbsp; 
    <span>{{$info->name}}</span> 
   </div> 
  </div> 
  <div class="hr-10"></div> 
  <!-- 20180620-广告位-start --> 
  <!-- 20180620-广告位-end --> 
  <div class="layout"> 
   <!-- 20140726-商品类别-start --> 
   <div class="pro-cate-area"> 
    <!-- 20140726-商品类别-属性-start --> 
    <div class="pro-cate-attr clearfix"> 
     <div class="p-title">
      分类：
     </div> 
     <div class="p-default"> 
      <ul> 
       <li id="first-category" @if($info->pid=='0') class="selected" @endif><a href="/homegoodslist/{{$info->pids}}">全部</a></li> 
       <!--<li class="selected"><a href="javascript:;">全部</a></li>--> 
      </ul> 
     </div> 
     <!-- 二级虚拟分类 --> 
     <div class="p-values"> 
      <div class="p-operate" style="display: none;"> 
       <!-- 追加ClassName： more-expand more-drop --> 
       <a href="javascript:;" onclick="ec.product.more(this)" class="more more-expand">更多
        <s></s></a> 
      </div> 
      <!-- 一行的高度为30px,显示n行，p-expand的高度为nx30 --> 
      <div class="p-expand"> 
       <ul class="clearfix"> 
       @foreach($cate as $c)
        <li  @if($info->id==$c->id) class="selected" @endif><a href="/homegoodslist/{{$c->id}}">{{$c->name}}</a></li> 
       @endforeach
       </ul> 
      </div> 
     </div> 
    </div>
    <!-- 20140726-商品类别-属性-end --> 
    <!-- 20140726-商品类别-属性-start --> 
    <!-- 20140726-商品类别-属性-end --> 
    <!-- 20140726-商品类别-排序-start --> 
    <div class="pro-cate-sort clearfix"> 
     <div class="p-title">
      排序：
     </div> 
     <div class="p-values" style="margin-left:95px;"> 
      <div class="p-expand"> 
       <ul class="clearfix"> 
        <!-- 升序选择（从低到高）： sort-asc selected   降序选择（从高到低）： sort-desc selected --> 
        <li id="sort-3" class="sort-desc selected"><a href="javascript:;" class="sort-added" onclick="ec.product.sort('3')">上架时间
          <s></s></a></li> 
        <li id="sort-1"><a href="javascript:;" class="sort-price" onclick="ec.product.sort('1')">价格
          <s></s></a></li> 
        <li id="sort-2"><a href="javascript:;" class="sort-eval" onclick="ec.product.sort('2')">评价数
          <s></s></a></li> 
       </ul> 
      </div> 
     </div> 
    </div>
    <!-- 20140726-商品类别-排序-end --> 
    <form id="listForm" method="post"> 
     <input type="hidden" id="sortField" name="sortField" value="" /> 
     <input type="hidden" id="sortType" name="sortType" value="" /> 
     <input type="hidden" id="prdAttrList" name="prdAttrList" value="" /> 
    </form> 
   </div>
   <!-- 20140726-商品类别-end --> 
   <div class="hr-20"></div> 
  </div> 
  <!--到货通知弹出框--> 
<!--   <textarea id="product-arrival-html" class="hide"> &lt;div class=&quot;arrival-remind-area&quot;&gt; &lt;ul class=&quot;clearfix&quot;&gt; &lt;li id=&quot;arrival-email&quot;&gt; &lt;p class=&quot;a-title&quot;&gt;邮件通知&lt;/p&gt; &lt;p id=&quot;account-email&quot; class=&quot;a-txt&quot;&gt;xxxxxxxxxxxxxxxxxxxx@huawei.com&lt;/p&gt; &lt;s&gt;&lt;/s&gt; &lt;/li&gt; &lt;li id=&quot;arrival-mobile&quot;&gt; &lt;p class=&quot;a-title&quot;&gt;短信通知&lt;/p&gt; &lt;p id=&quot;account-mobile&quot; class=&quot;a-txt&quot;&gt;185&nbsp;6644&nbsp;5856&lt;/p&gt; &lt;s&gt;&lt;/s&gt; &lt;/li&gt; &lt;/ul&gt; &lt;/div&gt; &lt;div class=&quot;box-button&quot;&gt; &lt;input type=&quot;submit&quot; class=&quot;box-ok&quot; value=&quot;提交&quot;/&gt; &lt;/div&gt; &lt;div id=&quot;arrival-error&quot; class=&quot;box-form-tips hide&quot;&gt; &lt;span class=&quot;icon-error&quot;&gt;输入有误&lt;/span&gt; &lt;/div&gt; </textarea>  -->
  <script src="/static/homes/goodslist/new_list.min.js"></script>
  <div class="layout"> 
   <!-- 20140726-频道-列表-start --> 
   <div class="channel-list"> 
    <!-- 20140727-商品列表-start --> 
    <div class="pro-list clearfix"> 
     <ul>
     @foreach($data as $row)
      <li> 
       <div class="pro-panels"> 
        <p class="p-img"><a target="_blank" href="/homegoodsinfo/{{$row->gid}}" title="{{$row->gname}}"><img alt="{{$row->gname}}" src="{{$row->glogo}}" /></a></p> 
        <p class="p-name"> <a target="_blank" href="/homegoodsinfo/{{$row->gid}}" title="{{$row->gname}}"> <span>{{$row->gname}}</span> <span class="red"></span> </a> </p> 
        <p class="p-price"><b>&yen;{{$row->gprice}}</b></p> 
        <div class="p-button clearfix"> 
         <table colspan="0" border="0" rowspan="0"> 
          <tbody> 
           <tr> 
            <td><a target="_blank" href="/homegoodsinfo/{{$row->gid}}" class="p-button-cart"><span>选购</span></a></td> 
            <td><label class="p-button-score"><span>16335人评价</span></label></td> 
           </tr> 
          </tbody> 
         </table> 
        </div> 
       </div> </li>
       @endforeach 
     </ul> 
    </div> 
    <!-- 20140727-商品列表-end --> 
    <!-- 分页-start --> 
    <div id="list-pager-40" class="pager"> 
     <!-- <input id="pageTotal" value="2" type="hidden" /> 
     <ul id="page_ul"> 
      <li class="pgNext link first first-empty">|&lt;</li> 
      <li class="pgNext link pre pre-empty">&lt;</li> 
      <a id="page_1" href="https://www.vmall.com/list-40-1-3-0" title="第1页"> <li class="page-number link pgCurrent">1</li> </a> 
      <a id="page_2" href="https://www.vmall.com/list-40-2-3-0" title="第2页"> <li class="page-number link">2</li> </a> 
      <li class="pgNext link next">&gt;</li> 
      <li class="pgNext link last">&gt;|</li> 
      <li class="text quickPager"><select id="pageChecked"><option value="1" selected="">1</option><option value="2">2</option></select></li> 
     </ul> --> 
      <!-- 分页 -->
    </div> 
   </div>
   <!-- 20140726-频道-列表-end --> 
  </div> 
 </body>
</html>
<script>

</script>
@endsection