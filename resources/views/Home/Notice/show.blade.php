@extends('Home.HomePublic.public')
@section('title','商城公告')
@section('content')
<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="/static/homes/notice/ec.core.base.min.css" rel="stylesheet" type="text/css">

<link href="/static/homes/notice/main.min.css" rel="stylesheet" type="text/css">
 
<script src="/static/homes/notice/jsapi.js" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="/static/homes/notice/jquery-1.4.4.min.js"></script>
<script src="/static/homes/notice/ec.core.js"></script> 
<script src="/static/homes/notice/ec.business.min.js"></script> 
<script src="/static/homes/notice/base.min.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="/static/homes/notice/box-min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("ec.box/box-min.js","complete");})();</script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="/static/homes/notice/XSSUtils.min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("/aes/XSSUtils.min.js","complete");})();</script><script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="/static/homes/notice/esapi.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader2');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader2 fail!');} return; }ol._setLoadStatus("/aes/esapi.js","complete");})();</script><script id="jsapi_loader3" loadtype="insert" type="text/javascript" src="/static/homes/notice/Base.esapi.properties.min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader3');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader3 fail!');} return; }ol._setLoadStatus("/aes/resources/Base.esapi.properties.min.js","complete");})();</script>
<!--<script src="//webpublic.vmall.com/csrftoken.js?20180824"></script>-->
<script src="/static/homes/notice/slider.min.js"></script>
<script src="/static/homes/notice/swiper.min.js"></script>
<!--[if lt IE 9]><script src="https://res9.vmallres.com/20181205/js/common/html5shiv.js"></script> <![endif]-->
<div class="wide">
<div class="header">
    <div class="layout">
        <div class="left">
            <!-- 2017-02-15-logo-start -->
            <div class="logo"><a href="https://www.vmall.com/index.html" title="Vmall.com - 华为商城" onclick="pushLogoClickMsg(&#39;https://res.vmallres.com/pimages//sale/2018-11/x9a6U8WW0bhrA7u0FIlY.png&#39;,&#39;https://www.vmall.com/index.html&#39;)"><img src="/static/homes/notice/x9a6U8WW0bhrA7u0FIlY.png" alt="Vmall.com - 华为商城"></a></div>
            <!-- 2017-02-15-logo-end -->
            
            <!-- 2017-06-19-导航-start --> 
                <div class="naver">
    <ul id="naver" class="clearfix">
                    <li id="zxnav_0" data-id="0">
                  <a href="https://www.vmall.com/list-36" target="_blank"><span>手机</span></a>
                  <input id="zxnav_0_flag" type="hidden" autocomplete="off" value="yes">
              <input id="zxnav_0_name" type="hidden" autocomplete="off" value="手机">
                </li>
              <li id="zxnav_1" data-id="1">
                  <a href="https://www.vmall.com/list-40" target="_blank"><span>笔记本 &amp; 平板</span></a>
                  <input id="zxnav_1_flag" type="hidden" autocomplete="off" value="yes">
              <input id="zxnav_1_name" type="hidden" autocomplete="off" value="笔记本 &amp; 平板">
                </li>
              <li id="zxnav_2" data-id="2">
                  <a href="https://www.vmall.com/list-59" target="_blank"><span>智能穿戴</span></a>
                  <input id="zxnav_2_flag" type="hidden" autocomplete="off" value="yes">
              <input id="zxnav_2_name" type="hidden" autocomplete="off" value="智能穿戴">
                </li>
              <li id="zxnav_3" data-id="3">
                  <a href="https://www.vmall.com/list-43" target="_blank"><span>智能家居</span></a>
                  <input id="zxnav_3_flag" type="hidden" autocomplete="off" value="yes">
              <input id="zxnav_3_name" type="hidden" autocomplete="off" value="智能家居">
                </li>
              <li id="zxnav_4" data-id="4">
                  <a href="https://www.vmall.com/list-54" target="_blank"><span>通用配件</span></a>
                  <input id="zxnav_4_flag" type="hidden" autocomplete="off" value="yes">
              <input id="zxnav_4_name" type="hidden" autocomplete="off" value="通用配件">
                </li>
              <li id="zxnav_5" data-id="5">
                  <a href="https://www.vmall.com/list-47" target="_blank"><span>专属配件</span></a>
                  <input id="zxnav_5_flag" type="hidden" autocomplete="off" value="no">
              <input id="zxnav_5_name" type="hidden" autocomplete="off" value="专属配件">
                </li>
    </ul>
</div>
<div class="naver-sub" style="display: none;">
            <div id="naverSub00" class="naver-sub-wrap hide" style="display: none;">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-36" target="_blank" class="">全部手机&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
                  <input id="child_name" type="hidden" value="荣耀">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-75" target="_blank" class="fl">荣耀</a>   
                  <input id="child_name" type="hidden" value="HUAWEI P系列">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-285" target="_blank" class="fl">HUAWEI P系列</a>  
                  <input id="child_name" type="hidden" value="荣耀畅玩系列">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-77" target="_blank" class="fl">荣耀畅玩系列</a>   
                  <input id="child_name" type="hidden" value="HUAWEI Mate系列">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-76" target="_blank" class="fl">HUAWEI Mate系列</a>  
                  <input id="child_name" type="hidden" value="HUAWEI nova系列">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-277" target="_blank" class="fl">HUAWEI nova系列</a>   
                  <input id="child_name" type="hidden" value="华为畅享系列">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-275" target="_blank" class="fl">华为畅享系列</a>  
                  <input id="child_name" type="hidden" value="HUAWEI 麦芒系列">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-81" target="_blank" class="fl">HUAWEI 麦芒系列</a>  
                  <input id="child_name" type="hidden" value="移动4G+专区">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-38" target="_blank" class="fl">移动4G+专区</a>  
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_0_prolist" class="grid-list clearfix"><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086885129494.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1539230426520mp.png">          </p>          <div class="grid-title">HUAWEI Mate 20</div>          <p class="grid-price">¥3999</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086785341226.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1535358175728mp.jpg">          </p>          <div class="grid-title">荣耀10</div>          <p class="grid-price">¥2199</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086393052224.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1539222514790mp.png">          </p>          <div class="grid-title">HUAWEI Mate 20 Pro</div>          <p class="grid-price">¥5399</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086789934944.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1542706656249mp.png">          </p>          <div class="grid-title">荣耀10青春版</div>          <p class="grid-price">¥1399</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086568474763.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1542768440287mp.png">          </p>          <div class="grid-title">HUAWEI nova 3</div>          <p class="grid-price">¥2799</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086286769025.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1536628129335mp.jpg">          </p>          <div class="grid-title">荣耀8X</div>          <p class="grid-price">¥1399</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086915330134.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1542765557433mp.png">          </p>          <div class="grid-title">HUAWEI P20</div>          <p class="grid-price">¥3388</p>       </a>  </li></ul>
                <input id="zxnav_0_skuIds" type="hidden" value="10086511497719,10086431508342,10086002115494,10086772693857,10086795400652,10086339328421,10086425688564,">
            </div>
            <div id="naverSub01" class="naver-sub-wrap hide" style="display: none;">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-40" target="_blank" class="">全部笔记本 &amp; 平板&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
                  <input id="child_name" type="hidden" value="平板电脑">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-41" target="_blank" class="fl">平板电脑</a>   
                  <input id="child_name" type="hidden" value="笔记本电脑">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-42" target="_blank" class="fl">笔记本电脑</a>  
                  <input id="child_name" type="hidden" value="笔记本配件">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-317" target="_blank" class="fl">笔记本配件</a>   
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_1_prolist" class="grid-list clearfix"><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086000689735.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1539915415114mp.png">          </p>          <div class="grid-title">HUAWEI MateBook X Pro</div>          <p class="grid-price">¥7988</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086350349834.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1538989328772mp.png">          </p>          <div class="grid-title">荣耀MagicBook</div>          <p class="grid-price">¥5699</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086893318670.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1539856424056mp.png">          </p>          <div class="grid-title">华为平板 M5 青春版</div>          <p class="grid-price">¥1899</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086527872485.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1539243364035mp.png">          </p>          <div class="grid-title">荣耀平板5</div>          <p class="grid-price">¥1299</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/21046116.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1542768417288mp.png">          </p>          <div class="grid-title">HUAWEI MateBook D</div>          <p class="grid-price">¥5188</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/405225095.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1539913210943mp.png">          </p>          <div class="grid-title">荣耀畅玩平板2 9.6英寸</div>          <p class="grid-price">¥999</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086749611489.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1539854934680mp.png">          </p>          <div class="grid-title">华为畅享平板</div>          <p class="grid-price">¥1299</p>       </a>  </li></ul>
                <input id="zxnav_1_skuIds" type="hidden" value="10086514290855,10086165908070,10086612323957,10086466203116,777872533,887012722,10086567817541,">
            </div>
            <div id="naverSub02" class="naver-sub-wrap hide" style="display: none;">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-59" target="_blank" class="">全部智能穿戴&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
                  <input id="child_name" type="hidden" value="手环">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-241" target="_blank" class="fl">手环</a>  
                  <input id="child_name" type="hidden" value="手表">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-247" target="_blank" class="fl">手表</a>  
                  <input id="child_name" type="hidden" value="VR">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-329" target="_blank" class="fl">VR</a>  
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_2_prolist" class="grid-list clearfix"><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086268042691.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1540544249192mp.png">          </p>          <div class="grid-title">荣耀手表</div>          <p class="grid-price">¥899</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086653392602.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1542266481382mp.png">          </p>          <div class="grid-title">华为儿童手表 3 Pro</div>          <p class="grid-price">¥988</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086686072684.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1540628828647mp.png">          </p>          <div class="grid-title">荣耀手环4 标准版</div>          <p class="grid-price">¥199</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086127035863.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1543910730389mp.png">          </p>          <div class="grid-title">HUAWEI WATCH GT</div>          <p class="grid-price">¥1488</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086913521308.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1542767861497mp.png">          </p>          <div class="grid-title">荣耀手环4 Running版</div>          <p class="grid-price">¥99</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086572258093.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1539569436793mp.png">          </p>          <div class="grid-title">华为手环 B5</div>          <p class="grid-price">¥999</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/922041175.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1542613671009mp.png">          </p>          <div class="grid-title">HUAWEI VR 2</div>          <p class="grid-price">¥1899</p>       </a>  </li></ul>
                <input id="zxnav_2_skuIds" type="hidden" value="10086253509221,10086354651877,10086455419044,10086119759478,10086949141018,10086972979696,86471537,">
            </div>
            <div id="naverSub03" class="naver-sub-wrap hide" style="display: none;">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-43" target="_blank" class="">全部智能家居&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
                  <input id="child_name" type="hidden" value="路由器">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-45" target="_blank" class="fl">路由器</a>  
                  <input id="child_name" type="hidden" value="电视盒子">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-46" target="_blank" class="fl">电视盒子</a>   
                  <input id="child_name" type="hidden" value="照明">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-371" target="_blank" class="fl">照明</a>  
                  <input id="child_name" type="hidden" value="清洁">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-421" target="_blank" class="fl">清洁</a>  
                  <input id="child_name" type="hidden" value="子母/分布式路由">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-263" target="_blank" class="fl">子母/分布式路由</a>  
                  <input id="child_name" type="hidden" value="电力猫/wifi放大器">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-44" target="_blank" class="fl">电力猫/wifi放大器</a>  
                  <input id="child_name" type="hidden" value="随行wifi">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-97" target="_blank" class="fl">随行wifi</a>   
                  <input id="child_name" type="hidden" value="节能">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-423" target="_blank" class="fl">节能</a>  
                  <input id="child_name" type="hidden" value="环境">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-373" target="_blank" class="fl">环境</a>  
                  <input id="child_name" type="hidden" value="安防">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-379" target="_blank" class="fl">安防</a>  
                  <input id="child_name" type="hidden" value="健康">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-403" target="_blank" class="fl">健康</a>  
                  <input id="child_name" type="hidden" value="厨电">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-377" target="_blank" class="fl">厨电</a>  
                  <input id="child_name" type="hidden" value="影音">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-407" target="_blank" class="fl">影音</a>  
                  <input id="child_name" type="hidden" value="卫浴">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-375" target="_blank" class="fl">卫浴</a>  
                  <input id="child_name" type="hidden" value="其他">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-381" target="_blank" class="fl">其他</a>  
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_3_prolist" class="grid-list clearfix"><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086007028117.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1539912533064mp.png">          </p>          <div class="grid-title">荣耀路由 X2</div>          <p class="grid-price">¥149</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086423109158.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1541666262523mp.png">          </p>          <div class="grid-title">华为 AI 音箱</div>          <p class="grid-price">¥399</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086958063836.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1542765330080mp.png">          </p>          <div class="grid-title">荣耀路由2S</div>          <p class="grid-price">¥199</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086500145070.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1542787177523mp.png">          </p>          <div class="grid-title">华为路由 Q2</div>          <p class="grid-price">¥799</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/3053.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1538970367098mp.png">          </p>          <div class="grid-title">荣耀路由Pro</div>          <p class="grid-price">¥328</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/310439420.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1495075512638mp.jpg">          </p>          <div class="grid-title">华为随行WiFi 2</div>          <p class="grid-price">¥499</p>       </a>  </li><li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086203472371.html">         <p class="grid-img">             <img alt="" src="/static/homes/notice/142_142_1540952549939mp.png">          </p>          <div class="grid-title">欧普读写台灯</div>          <p class="grid-price">¥159</p>       </a>  </li></ul>
                <input id="zxnav_3_skuIds" type="hidden" value="10086094709326,10086794601109,10086943604110,10086061866500,7219,190047935,10086231514149,">
            </div>
            <div id="naverSub04" class="naver-sub-wrap hide" style="display: block;">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-54" target="_blank" class="">全部通用配件&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
                  <input id="child_name" type="hidden" value="移动电源">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-56" target="_blank" class="fl">移动电源</a>   
                  <input id="child_name" type="hidden" value="耳机">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-229" target="_blank" class="fl">耳机</a>  
                  <input id="child_name" type="hidden" value="音箱">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-55" target="_blank" class="fl">音箱</a>   
                  <input id="child_name" type="hidden" value="自拍杆/支架">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-231" target="_blank" class="fl">自拍杆/支架</a>  
                  <input id="child_name" type="hidden" value="充电器/线材">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-58" target="_blank" class="fl">充电器/线材</a>   
                  <input id="child_name" type="hidden" value="U盘/存储卡">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-83" target="_blank" class="fl">U盘/存储卡</a>   
                  <input id="child_name" type="hidden" value="摄像机/镜头">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-235" target="_blank" class="fl">摄像机/镜头</a>  
                  <input id="child_name" type="hidden" value="智能硬件">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-239" target="_blank" class="fl">智能硬件</a>  
                  <input id="child_name" type="hidden" value="生活周边">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-237" target="_blank" class="fl">生活周边</a>  
                  <input id="child_name" type="hidden" value="取卡针">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-568" target="_blank" class="fl">取卡针</a>   
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_4_prolist" class="grid-list clearfix">
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/706470980.html" onclick="pushNaverCategoryMsg(0,&#39;/product/706470980.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">华为10000mAh 移动电源  充电宝</div>
                <p class="grid-price">¥159.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/875753311.html" onclick="pushNaverCategoryMsg(1,&#39;/product/875753311.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">荣耀xSport运动蓝牙耳机</div>
                <p class="grid-price">¥249.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/194128141.html" onclick="pushNaverCategoryMsg(2,&#39;/product/194128141.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">荣耀体脂秤</div>
                <p class="grid-price">¥169.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086072295004.html" onclick="pushNaverCategoryMsg(3,&#39;/product/10086072295004.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">Momax 精英3合1编织线</div>
                <p class="grid-price">¥98.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086335437779.html" onclick="pushNaverCategoryMsg(4,&#39;/product/10086335437779.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">荣耀FlyPods无线耳机</div>
                <p class="grid-price">¥799.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086576602689.html" onclick="pushNaverCategoryMsg(5,&#39;/product/10086576602689.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">华为主动降噪耳机3</div>
                <p class="grid-price">¥399.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/936223974.html" onclick="pushNaverCategoryMsg(6,&#39;/product/936223974.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">华为智能体脂秤</div>
                <p class="grid-price">¥169.00</p>
              </a>
            </li>
                  <!--通过添加current 来实现 hover效果-->
                          <input id="name_937100113" type="hidden" value="华为10000mAh 移动电源  充电宝">
                          <input id="name_10086738650172" type="hidden" value="荣耀FlyPods无线耳机">
                          <input id="name_534967719" type="hidden" value="华为智能体脂秤">
                          <input id="name_189161731" type="hidden" value="荣耀xSport运动蓝牙耳机">
                          <input id="name_10086097429247" type="hidden" value="华为主动降噪耳机3">
                          <input id="name_553811697" type="hidden" value="荣耀体脂秤">
                          <input id="name_10086281411409" type="hidden" value="Momax 精英3合1编织线">
                </ul>
                <input id="zxnav_4_skuIds" type="hidden" value="937100113,10086738650172,534967719,189161731,10086097429247,553811697,10086281411409,">
            </div>
            <div id="naverSub05" class="naver-sub-wrap hide" style="display: none;">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="https://www.vmall.com/list-47" target="_blank" class="">全部专属配件&gt;</a>
                    </div>
                    <div class="s2 fl clearfix">
                  <input id="child_name" type="hidden" value="保护壳">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-48" target="_blank" class="fl">保护壳</a>  
                  <input id="child_name" type="hidden" value="保护套">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-49" target="_blank" class="fl">保护套</a>  
                  <input id="child_name" type="hidden" value="贴膜">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-50" target="_blank" class="fl">贴膜</a>   
                  <input id="child_name" type="hidden" value="盒子专属配件">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-223" target="_blank" class="fl">盒子专属配件</a>  
                  <input id="child_name" type="hidden" value="表带">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-225" target="_blank" class="fl">表带</a>  
                  <input id="child_name" type="hidden" value="触控笔">
                  <input id="child_status" type="hidden" value="1">
                  <input id="child_type" type="hidden" value="1">
                  <a href="https://www.vmall.com/list-397" target="_blank" class="fl">触控笔</a>   
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_5_prolist" class="grid-list clearfix">
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086668532068.html" onclick="pushNaverCategoryMsg(0,&#39;/product/10086668532068.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">HUAWEI nova 3 硅胶保护壳</div>
                <p class="grid-price">¥69.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086974424499.html" onclick="pushNaverCategoryMsg(1,&#39;/product/10086974424499.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">HUAWEI P20 Pro 星钻保护壳</div>
                <p class="grid-price">¥199.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086773631824.html" onclick="pushNaverCategoryMsg(2,&#39;/product/10086773631824.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">荣耀8X Max带指环扣PC壳</div>
                <p class="grid-price">¥49.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/862627470.html" onclick="pushNaverCategoryMsg(3,&#39;/product/862627470.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">荣耀V10 PU磁吸保护套</div>
                <p class="grid-price">¥119.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086251302060.html" onclick="pushNaverCategoryMsg(4,&#39;/product/10086251302060.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">华为平板 M5 8.4英寸 翻盖保护套</div>
                <p class="grid-price">¥129.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086842712245.html" onclick="pushNaverCategoryMsg(5,&#39;/product/10086842712245.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">HUAWEI Mate 20 智能视窗保护套</div>
                <p class="grid-price">¥299.00</p>
              </a>
            </li>
                    <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">
              <a class="thumb" target="_blank" href="https://www.vmall.com/product/100667556.html" onclick="pushNaverCategoryMsg(6,&#39;/product/100667556.html&#39;)">
                <p class="grid-img">&nbsp;</p>
                <div class="grid-title">FKM氟橡胶表带</div>
                <p class="grid-price">¥149.00</p>
              </a>
            </li>
                  <!--通过添加current 来实现 hover效果-->
                          <input id="name_10086600968203" type="hidden" value="HUAWEI Mate 20 智能视窗保护套">
                          <input id="name_10086869662905" type="hidden" value="荣耀8X Max带指环扣PC壳">
                          <input id="name_10086229642128" type="hidden" value="HUAWEI P20 Pro 星钻保护壳">
                          <input id="name_780670805" type="hidden" value="荣耀V10 PU磁吸保护套">
                          <input id="name_10086280278904" type="hidden" value="华为平板 M5 8.4英寸 翻盖保护套">
                          <input id="name_10086233654524" type="hidden" value="HUAWEI nova 3 硅胶保护壳">
                          <input id="name_249481832" type="hidden" value="FKM氟橡胶表带">
                </ul>
                <input id="zxnav_5_skuIds" type="hidden" value="10086600968203,10086869662905,10086229642128,780670805,10086280278904,10086233654524,249481832,">
            </div>
</div>
<script>
  function pushNaverCategoryMsg(index,url)
  {
    var skuids = $("#zxnav_"+index+"_skuIds").val().split(",");
    var skuid = skuids[index]; 
    var value = {
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
        {
      "SKUID":skuid,
        "URL":url,
        "click":"1"
        }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300020202", "link", value]);
  }
</script>
            <!-- 2017-06-19-导航-end -->
        </div>
        
        <div class="right">
            <!-- 2017-02-15-搜索条-焦点为search-form增加className:hover -start -->
            <div class="search-bar relative" id="searchBar-area">
                <div class="search-bar-form" id="search-bar-form">
                   <form method="get" onsubmit="return search(this)">
                        <input type="text" class="text" maxlength="200" id="search-kw" autocomplete="off">
                        <input type="submit" class="button" value="搜索">
                            <input type="hidden" id="channelType" name="channelType" value="0">
                        <input type="hidden" id="default-search" value="nova 3i|荣耀 Note10">
                    </form>
                </div>
                <div class="search-bar-key" id="search-bar-key">
                    <div class="searchBar-key">
                        <a href="javascript:void(0);" onclick="searchFunc(&#39;荣耀Magic2&#39;); return false;" rel="nofollow">荣耀Magic2</a>
                        <a href="javascript:void(0);" onclick="searchFunc(&#39;HUAWEI Mate 20&#39;); return false;" rel="nofollow">HUAWEI Mate 20</a>
                      </div>
                </div>
                 <div id="search-history" class="search-bar-history hide">
                  <p>
                        <label>历史记录</label><span id="cleanUp" class="search-history-btn">清除</span>
                    </p>
                    <ul id="search-history-list"></ul>
                </div>
            <div id="AutocompleteContainter_d5eba" "="" style="top: 94px; left: 1230.5px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_d5eba" style="display: none; width: 290px; max-height: 400px;"></div></div></div></div>
            <!-- 2017-02-15-搜索条-end -->
        </div>
    </div>
</div><!-- 2017-02-15-头部-end -->
<div id="searchHotWordList" style="display:none;">[{"id":216,"inSearchBox":0,"isActivityWords":0,"priority":-2,"saleChannel":1,"tagType":0,"type":2,"word":"华为畅享9 Plus"},{"id":226,"inSearchBox":0,"isActivityWords":0,"priority":-3,"saleChannel":1,"tagType":0,"type":2,"word":"HUAWEI Mate 20"},{"id":47,"inSearchBox":0,"isActivityWords":0,"priority":-6,"saleChannel":1,"tagType":0,"type":3,"word":"荣耀Magic2"},{"id":195,"inSearchBox":0,"isActivityWords":0,"priority":-10,"saleChannel":1,"tagType":0,"type":3,"word":"荣耀10"},{"activityUrl":"","fontColor":"","id":250,"inSearchBox":0,"isActivityWords":0,"priority":-11,"saleChannel":1,"tagType":0,"type":3,"word":"荣耀10青春版"},{"id":83,"inSearchBox":0,"isActivityWords":0,"priority":-24,"saleChannel":1,"tagType":0,"type":1,"word":"荣耀Magic2"},{"id":224,"inSearchBox":0,"isActivityWords":0,"priority":-25,"saleChannel":1,"tagType":0,"type":1,"word":"HUAWEI Mate 20"}]</div>
<script type="text/javascript">
   ec.load("ec.slider", {
   loadType : "lazy", 
   callback : function() {
        $("#ec-erweima").slider({
                 width:     91, //必须
                 height:     96, //必须
                 style : 1, //1显示分页，2只显示左右箭头,3两者都显示
                 pause : 120000, //间隔时间
                 auto : true
        });
   }
});
function searchFunc(word){
window.open("/search?keyword="+encodeURIComponent(word));
}
ec.ready(function(){
ec.search.searchArr = JSON.parse($("#searchHotWordList").text());
    $("#search-kw").val('');
    if (typeof (topSearchKeyword) != "undefined") {
        var keyword = topSearchKeyword;
        if (keyword != null && keyword != "") {
            $("#search-kw").val(ec.freemarkerDecode(keyword));
            $("#search-bar-key").css("display", "none");
        }
    }
   
    $('#search-history').bind({
        mouseover:function(){
            $("#search-history").show();
        },
        mousedown:function(e){
            $("#search-kw").blur();
            $("#search-bar-key").hide();
            $("#search-history").show();
            if($(e.target)[0].nodeName=='A'){
                $("#search-kw").val(decodeURIComponent($(e.target).attr('data-value')));
                //如果是IE浏览器，则需要重新执行跳转
                if (ec.checkBrowerIE()) {
                    window.location.href=$(e.target).attr('href');
                }
            } else if($(e.target)[0].nodeName == 'SPAN'){
                ec.search.deleteSearchHistory();
                $("#search-history").hide();
            }
        }
    
    });
    
    $("#search-kw").bind({
        focus:function() {
            $("#search-bar-key").hide();
            //隐藏搜索历史
            $("#search-history").hide();
            if ($("#search-kw").val().trim() == '') {
                //查询用户搜索历史
                ec.search.querySearchHistory();
               if($("#search-history").is(':visible')||$(".autocomplete").is(':visible')){$("#search-bar-form").addClass("hover")}else{$("#search-bar-form").removeClass("hover")};
            }
        },
        blur:function() {
            if ($("#search-kw").val().trim() == '') {
                $("#search-bar-key").show();
            } else {
                $("#search-bar-key").hide();
            }
            //隐藏搜索历史
            $("#search-history").hide();
            $("#search-bar-form").removeClass("hover");
        },
        keydown:function(){
            //隐藏搜索历史
            $("#search-history").hide();
      $("#search-bar-form").removeClass("hover");
        },
        keyup:function(){
            if ($("#search-kw").val().trim() == '') {
                ec.search.querySearchHistory();
            } else {
                //隐藏搜索历史
                $("#search-history").hide();
            }
        }
        
    });
});
ec.code.addService({showService : true , showTools : true , live800Url4Web : "http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&configID=10&location=B_002&chatfrom=web&channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af"});

//头部logo点击上报
function pushLogoClickMsg(adid,url)
{
  var value = {
    "UID":ec.util.cookie.get("uid"),
    "TID":getPtid(),
    "TIME":getTime(),
    "CONTENT":
    {
    "ADID":adid,
      "URL":url,
      "click":"1"
      }
  };
  ec.account.dapPushMsg("300020101",value,"click");
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300020101", "link", value]);
}

//类别横向点击上报
$("#naver").find("li").find("a").click(function(){
  var url = $(this).attr("href");
  var name  =$(this).find("span").html();
  var value = {
    "UID":ec.util.cookie.get("uid"),
    "TID":getPtid(),
    "TIME":getTime(),
    "CONTENT":
    {
    "name":name,
      "URL":url,
      "click":"1"
      }
  };
  ec.account.dapPushMsg("300020201",value,"click");
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300020201", "link", value]);
});

$(".s1.fl").find("a").click(function(){
  var url = $(this).attr("href");
  var name = $(this).html().substring(0,$(this).html().length-1);
  var value = {
    "UID":ec.util.cookie.get("uid"),
    "TID":getPtid(),
    "TIME":getTime(),
    "CONTENT":
    {
    "name":name,
      "URL":url,
      "click":"1"
      }
  };
  ec.account.dapPushMsg("300020201",value,"click");
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300020201", "link", value]);
});

$(".s2.fl.clearfix").find("a").click(function(){
  var url = $(this).attr("href");
  var name = $(this).html();
  var value = {
    "UID":ec.util.cookie.get("uid"),
    "TID":getPtid(),
    "TIME":getTime(),
    "CONTENT":
    {
    "name":name,
      "URL":url,
      "click":"1"
      }
  };
  ec.account.dapPushMsg("300020201",value,"click");
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300020201", "link", value]);
});

$(".grid-list.clearfix").find("li").find("a").live("click",function(){
    var num = $(this).parent().parent().attr("id").substring(6,7);
    var index = $("#zxnav_"+num+"_prolist li").index($(this).parent());
    var skuid = $("#zxnav_"+num+"_skuIds").val();
    var skuids = skuid.split(",");
    var skuId = skuids[index];
    var value = {
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
      {
        "SKUID":skuId ,
          "URL":this.href,
          "click":"1"
        }
    };
    ec.account.dapPushMsg("300020202",value,"click");
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300020202", "link", value]);
});
</script><script>
//显示导航下拉菜单商品数据
function showProList(id){
     //查询标志
    var flag=$("#"+id+"_flag").val();
     var skuIds=$("#"+id+"_skuIds").val();
     
     var mediaPath = "https://res.vmallres.com/pimages/";
     //未查询过且有商品时才能执行
     if(skuIds!="" && flag=="no"){
         skuIds=skuIds.substring(0,skuIds.length-1);
         var skuIdArr=skuIds.split(",");

        skuIdArr=removeDuplicatedItem(skuIdArr);
        
         //标记标志位
         $("#"+id+"_flag").val("yes");
         $.ajax({
            url :  "/querySbomInfo.json?skuIdsStr="+skuIds,
            async:true,//使用异步的Ajax请求
            type : "GET",
            dataType : "json",
            timeout : 10000,
            success : function(json){
                if(json.success){
                    var infoMap=json.sbomInfoMap;
                    var html = '';
                    for(var i=0;i<skuIdArr.length;i++){
                        var skuId=skuIdArr[i];
                        var sbomInfo=json.sbomInfoMap[skuId];
                        if(sbomInfo!=null){
                             //商品图片URL
                            var imgPath = mediaPath + sbomInfo.photoPath+"142_142_"+sbomInfo.photoName;
                            //商品URL
                            var urlPath = "/product/"+sbomInfo.disPrdId+".html";
                            //商品名称
                            //var proName = sbomInfo.sbomName;
                            var proName = $('#name_' + skuId).val();
                            var price;
                            //取得价格显示方式
                            var priceMode = sbomInfo.priceMode;
                            if (priceMode == 2 || sbomInfo.price == 0) {
                                price = "<span>暂无报价</span>";
                            } else {
                                price = "&yen;" + sbomInfo.price;
                            }
                            //一级分类导航名称
                            var oneNavName=$("#"+id+"_name").val();
                            var onShowName="分类导航_"+oneNavName+"_"+sbomInfo.sbomCode;
                            //var clickContent="_paq.push(['trackLink','"+onShowName+"', 'link', ' ']);ec.code.addAnalytics({hicloud:true});";
                            html += '<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)" >';
                            html += '     <a class="thumb" target="_blank" href="'+urlPath+'">';
                            html += '         <p class="grid-img">';
                            html += '             <img alt="" src="' + imgPath + '">';
                            html += '          </p>';
                            html += '          <div class="grid-title">' + proName + '</div>';
                            html += '          <p class="grid-price">' + price + '</p>';
                            html += '       </a>';
                            html += '  </li>';
                        }
                    }
                    $("#"+id+"_prolist").html(html);
                }
            },
            error : function() {
                
            }
        }); 
     }
 };
 
 //定位当前推荐商品
 function fixCurrent(obj){
    $(obj).addClass('current');
 }
 
  //离开当前推荐商品
 function leaveCurrent(obj){
     $(obj).removeClass('current');
 }
 //去重
 function removeDuplicatedItem(ar) {
    var ret = [];
    for (var i = 0, j = ar.length; i < j; i++) {
        if (ret.indexOf(ar[i]) === -1) {
            ret.push(ar[i]);
        }
    }
    return ret;
}
(function () {
 /*
         *   专区导航下拉列表
         *   @version 1.2.0
         *   @update 2017-05-08
         *
         * */
        var $nav =                          $('.naver li'),
            $naverSub =                     $('.naver-sub'),
            navLen =                        $nav.length,
            navWidth =                      $nav.width(),
            navListCount =                  null,
            timer =                         null;

        $nav.bind({
            mouseenter: function () {
                    var count =             $(this).attr('data-id') || null,
                        $naverSubItem =     $('#naverSub0' + count),
                        $this =             $(this),
                        openItem =          null;

                    if ($naverSubItem.length <= 0) {
                        $naverSub
                            .children()
                            .slideUp(200);
                        clearTimeout(timer);
                        return;
                    }
                    navListCount = count;

                    $naverSub
                        .children()
                        .each(function (index, item) {
                            if ($(this).css('display') == 'block') {
                                openItem = true;
                            }
                        });

                    if (timer) clearTimeout(timer);

                    if (openItem) {
                        showProList('zxnav_' + count);
                        $naverSub.show();
                        $naverSubItem
                            .show()
                            .unbind('mouseenter')
                            .mouseleave(function (e) {
                                itemsLeave.call(this, e , $naverSubItem);
                            })
                            .siblings()
                            .hide();

                    } else {
                        showProList('zxnav_' + count);
                        timer = setTimeout(function () {
                            $naverSub
                                .show();
                            $naverSubItem
                                .slideDown(200)
                                .unbind('mouseenter')
                                .mouseleave(function (e) {
                                    itemsLeave.call(this, e , $naverSubItem);
                                })
                            ;
                        }, 200);
                    }
            },
            mouseleave: function (e) {
                var $target =               $(e.target),
                    eX =                    e.pageX,
                    eY =                    e.pageY,
                    oX =                    $target.offset().left,
                    oY =                    $target.offset().top,
                    yy =                    oY-eY,
                    xx =                    oX - eX,
                    xx2 =                   eX - (oX + navWidth),
                    index =                 $nav.index(this),
                    $naverSubItem =         $('#naverSub0' + navListCount);

                if (timer) clearTimeout(timer);

                $naverSubItem.mouseenter(function () {
                    if (timer) clearTimeout(timer);
                });

                //确认上划//第一个左滑动时//最后一个右滑动时
                if (yy <= 10 && yy > 0 || (xx <= 10 && xx > 0 && index == 0) || (xx2 <= 10 && xx2 > 0 && index == navLen - 1 )) {
                    $naverSubItem.unbind('mouseleave');
                    $naverSub
                        .children()
                        .slideUp(300, function () {
                            $naverSub.hide();
                        })
                } else {
                    timer = setTimeout(function () {
                        $naverSubItem.unbind('mouseenter');
                        $naverSub
                            .children()
                            .slideUp(300, function () {
                                $naverSub.hide();
                            })
                    }, 200)
                }
            }
        });
        function itemsLeave(e , obj) {
            var $target =                   $(e.target),
                eX =                        e.pageX,
                eY =                        e.pageY,
                oX =                        $target.offset().left,
                oY =                        $target.offset().top,
                _this =                     $(this);

            clearTimeout(timer);
            //确认上划 并保证上划区域排除logo区域
            if ((oY - eY) <= 10 && (oY - eY) > 0 && (eX - oX) > 300) {
                _this
                    .show();
            } else {
                timer = setTimeout(function () {
                    _this.slideUp(200, function () {
                        $naverSub.hide();
                    });
                }, 200)
            }
        }
    })();
</script><div class="hr-10"></div>
<div class="g">
  <!--面包屑 -->
<div class="breadcrumb-area fcn"><a href="/homeindex" title="首页">首页</a>&nbsp;&gt;&nbsp;<a href="/homenotice" title="商城公告">商城公告</a>&nbsp;&gt;&nbsp;<span>{{$data->title}}</span></div>
</div>
<div class="hr-15"></div>
<div class="g">
    <div class="fr u-4-5">
        <!--新闻-详情 -->
        <div class="news-area">
          <div class="h">
              <h1>{{$data->title}}</h1>
                <div class="news-extra-area clearfix">
                  <div class="fl">更新时间：{{date('Y-m-d H:i:s',$data->addtime)}}</div>
        </div>
            </div>
            <div class="b">{!!$data->content!!}</div>
        </div>
    </div>
  <div class="fl u-1-5"><!--左边菜单 -->
<div class="news-menu-area">
  <div class="h">
  <s></s>
  <b></b>
    </div>
    <div class="b">
  <ul class="clearfix">
    <li id="menu-media"><a href="https://www.vmall.com/media-list" title="媒体评测"><span>媒体评测</span></a></li>
      <li id="menu-notice" style="background: #aaa;" class="current"><a href="/homenotice" title="商城公告"><span>商城公告</span></a></li>
      <li id="menu-news"><a href="https://www.vmall.com/news-list" title="新闻资讯"><span>新闻资讯</span></a></li>
  </ul>
    </div>
</div>
<div class="hr-15"></div>
<div class="ad ad179"><p><br></p><p><a title="G520" href="https://www.vmall.com/recycle" target="_blank"><img src="/static/homes/notice/DhB80q45Y7RvVbaGkxkC.png" title="179x403.png" style="float:none;" width="179" height="403"></a></p><p><br></p><p><br></p></div>
<script>
(function(){
  var path = location.pathname.split("-");
    if(path.length > 0)
    {
      $("#menu-"+path[0].substring(1)).addClass("current").siblings().removeClass("current");
    }
})();
</script></div>
</div>
<div class="hr-60"></div><!--口号-20121025 -->
<div class="slogan-container">
    <div class="slogan">
        <ul>
            <li class="s1"><a target="_blank" href="https://www.vmall.com/help/faq-934.html" rel="nofollow" onclick="pushFootAdvertMsg(&#39;公司介绍&#39;,&#39;https://www.vmall.com/help/faq-934.html&#39;)"><i></i>百强企业&nbsp;品质保证</a></li>
            <li class="s2"><a target="_blank" href="https://www.vmall.com/help/faq-834.html" rel="nofollow" onclick="pushFootAdvertMsg(&#39;退换货政策&#39;,&#39;https://www.vmall.com/help/faq-834.html&#39;)"><i></i>7天退货&nbsp;15天换货</a></li>
            <li class="s3">
                <a target="_blank" href="https://www.vmall.com/help/faq-4367.html" rel="nofollow" onclick="pushFootAdvertMsg(&#39;物流帮助&#39;,&#39;https://www.vmall.com/help/faq-4367.html&#39;)"><i></i>
                    <span>48元起免运费</span>
                </a>
            </li>
            <li class="s4"><a target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm" rel="nofollow" onclick="pushFootAdvertMsg(&#39;服务中心&#39;,&#39;http://consumer.huawei.com/cn/support/service-center/index.htm&#39;)"><i></i>1000家维修网点&nbsp;全国联保</a></li>
        </ul>
    </div>
</div>
@endsection