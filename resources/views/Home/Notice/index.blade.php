@extends('Home.HomePublic.public')
@section('title','商城公告')
@section('content')
<html>
 <head>
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
<!--[if lt IE 9]><script src="https://res9.vmallres.com/20181122/js/common/html5shiv.js"></script> <![endif]-->
 </head>
 <body>
  <div class="wide"> 
   <div class="header"> 
    <div class="layout"> 
     <div class="left"> 
      <!-- 2017-02-15-logo-start --> 
      <div class="logo">
       <a href="https://www.vmall.com/index.html" title="Vmall.com - 华为商城" onclick="pushLogoClickMsg('https://res.vmallres.com/pimages//sale/2018-11/x9a6U8WW0bhrA7u0FIlY.png','https://www.vmall.com/index.html')"><img src="/static/homes/notice/x9a6U8WW0bhrA7u0FIlY.png" alt="Vmall.com - 华为商城" /></a>
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
      <div class="naver-sub"> 
       <div id="naverSub00" class="naver-sub-wrap hide"> 
        <div class="p-title clearfix"> 
         <div class="s1 fl"> 
          <a href="https://www.vmall.com/list-36" target="_blank" class="">全部手机&gt;</a> 
         </div> 
         <div class="s2 fl clearfix"> 
          <input id="child_name" type="hidden" value="荣耀" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-75" target="_blank" class="fl">荣耀</a> 
          <input id="child_name" type="hidden" value="HUAWEI P系列" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-285" target="_blank" class="fl">HUAWEI P系列</a> 
          <input id="child_name" type="hidden" value="荣耀畅玩系列" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-77" target="_blank" class="fl">荣耀畅玩系列</a> 
          <input id="child_name" type="hidden" value="HUAWEI Mate系列" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-76" target="_blank" class="fl">HUAWEI Mate系列</a> 
          <input id="child_name" type="hidden" value="HUAWEI nova系列" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-277" target="_blank" class="fl">HUAWEI nova系列</a> 
          <input id="child_name" type="hidden" value="华为畅享系列" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-275" target="_blank" class="fl">华为畅享系列</a> 
          <input id="child_name" type="hidden" value="HUAWEI 麦芒系列" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-81" target="_blank" class="fl">HUAWEI 麦芒系列</a> 
          <input id="child_name" type="hidden" value="移动4G+专区" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-38" target="_blank" class="fl">移动4G+专区</a> 
         </div> 
         <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>--> 
        </div> 
        <ul id="zxnav_0_prolist" class="grid-list clearfix"> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086915330134.html" onclick="pushNaverCategoryMsg(0,'/product/10086915330134.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI P20
           </div> <p class="grid-price">&yen;3388.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086785341226.html" onclick="pushNaverCategoryMsg(1,'/product/10086785341226.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀10
           </div> <p class="grid-price">&yen;2599.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086568474763.html" onclick="pushNaverCategoryMsg(2,'/product/10086568474763.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI nova 3
           </div> <p class="grid-price">&yen;2799.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086286769025.html" onclick="pushNaverCategoryMsg(3,'/product/10086286769025.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀8X
           </div> <p class="grid-price">&yen;1399.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086885129494.html" onclick="pushNaverCategoryMsg(4,'/product/10086885129494.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI Mate 20
           </div> <p class="grid-price">&yen;3999.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086393052224.html" onclick="pushNaverCategoryMsg(5,'/product/10086393052224.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI Mate 20 Pro
           </div> <p class="grid-price">&yen;5399.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086789934944.html" onclick="pushNaverCategoryMsg(6,'/product/10086789934944.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀10青春版
           </div> <p class="grid-price">&yen;1399.00</p> </a> </li> 
         <!--通过添加current 来实现 hover效果--> 
         <input id="name_10086511497719" type="hidden" value="HUAWEI Mate 20" /> 
         <input id="name_10086431508342" type="hidden" value="荣耀10" /> 
         <input id="name_10086002115494" type="hidden" value="HUAWEI Mate 20 Pro" /> 
         <input id="name_10086772693857" type="hidden" value="荣耀10青春版" /> 
         <input id="name_10086795400652" type="hidden" value="HUAWEI nova 3" /> 
         <input id="name_10086339328421" type="hidden" value="荣耀8X" /> 
         <input id="name_10086425688564" type="hidden" value="HUAWEI P20" /> 
        </ul> 
        <input id="zxnav_0_skuIds" type="hidden" value="10086511497719,10086431508342,10086002115494,10086772693857,10086795400652,10086339328421,10086425688564," /> 
       </div> 
       <div id="naverSub01" class="naver-sub-wrap hide"> 
        <div class="p-title clearfix"> 
         <div class="s1 fl"> 
          <a href="https://www.vmall.com/list-40" target="_blank" class="">全部笔记本 &amp; 平板&gt;</a> 
         </div> 
         <div class="s2 fl clearfix"> 
          <input id="child_name" type="hidden" value="平板电脑" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-41" target="_blank" class="fl">平板电脑</a> 
          <input id="child_name" type="hidden" value="笔记本电脑" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-42" target="_blank" class="fl">笔记本电脑</a> 
          <input id="child_name" type="hidden" value="笔记本配件" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-317" target="_blank" class="fl">笔记本配件</a> 
         </div> 
         <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>--> 
        </div> 
        <ul id="zxnav_1_prolist" class="grid-list clearfix"> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/405225095.html" onclick="pushNaverCategoryMsg(0,'/product/405225095.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀畅玩平板2 9.6英寸
           </div> <p class="grid-price">&yen;999.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/21046116.html" onclick="pushNaverCategoryMsg(1,'/product/21046116.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI MateBook D
           </div> <p class="grid-price">&yen;5188.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086527872485.html" onclick="pushNaverCategoryMsg(2,'/product/10086527872485.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀平板5
           </div> <p class="grid-price">&yen;1399.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086749611489.html" onclick="pushNaverCategoryMsg(3,'/product/10086749611489.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为畅享平板
           </div> <p class="grid-price">&yen;1299.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086893318670.html" onclick="pushNaverCategoryMsg(4,'/product/10086893318670.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为平板 M5 青春版
           </div> <p class="grid-price">&yen;1899.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086000689735.html" onclick="pushNaverCategoryMsg(5,'/product/10086000689735.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI MateBook X Pro
           </div> <p class="grid-price">&yen;7988.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086350349834.html" onclick="pushNaverCategoryMsg(6,'/product/10086350349834.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀MagicBook
           </div> <p class="grid-price">&yen;5699.00</p> </a> </li> 
         <!--通过添加current 来实现 hover效果--> 
         <input id="name_10086514290855" type="hidden" value="HUAWEI MateBook X Pro" /> 
         <input id="name_10086165908070" type="hidden" value="荣耀MagicBook" /> 
         <input id="name_10086612323957" type="hidden" value="华为平板 M5 青春版" /> 
         <input id="name_10086466203116" type="hidden" value="荣耀平板5" /> 
         <input id="name_777872533" type="hidden" value="HUAWEI MateBook D" /> 
         <input id="name_887012722" type="hidden" value="荣耀畅玩平板2 9.6英寸" /> 
         <input id="name_10086567817541" type="hidden" value="华为畅享平板" /> 
        </ul> 
        <input id="zxnav_1_skuIds" type="hidden" value="10086514290855,10086165908070,10086612323957,10086466203116,777872533,887012722,10086567817541," /> 
       </div> 
       <div id="naverSub02" class="naver-sub-wrap hide"> 
        <div class="p-title clearfix"> 
         <div class="s1 fl"> 
          <a href="https://www.vmall.com/list-59" target="_blank" class="">全部智能穿戴&gt;</a> 
         </div> 
         <div class="s2 fl clearfix"> 
          <input id="child_name" type="hidden" value="手环" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-241" target="_blank" class="fl">手环</a> 
          <input id="child_name" type="hidden" value="手表" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-247" target="_blank" class="fl">手表</a> 
          <input id="child_name" type="hidden" value="VR" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-329" target="_blank" class="fl">VR</a> 
         </div> 
         <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>--> 
        </div> 
        <ul id="zxnav_2_prolist" class="grid-list clearfix"> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086127035863.html" onclick="pushNaverCategoryMsg(0,'/product/10086127035863.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI WATCH GT
           </div> <p class="grid-price">&yen;1488.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086653392602.html" onclick="pushNaverCategoryMsg(1,'/product/10086653392602.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为儿童手表 3 Pro
           </div> <p class="grid-price">&yen;988.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086268042691.html" onclick="pushNaverCategoryMsg(2,'/product/10086268042691.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀手表
           </div> <p class="grid-price">&yen;899.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086572258093.html" onclick="pushNaverCategoryMsg(3,'/product/10086572258093.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为手环 B5
           </div> <p class="grid-price">&yen;999.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086686072684.html" onclick="pushNaverCategoryMsg(4,'/product/10086686072684.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀手环4 标准版
           </div> <p class="grid-price">&yen;199.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086913521308.html" onclick="pushNaverCategoryMsg(5,'/product/10086913521308.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀手环4 Running版
           </div> <p class="grid-price">&yen;99.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/922041175.html" onclick="pushNaverCategoryMsg(6,'/product/922041175.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI VR 2
           </div> <p class="grid-price">&yen;1999.00</p> </a> </li> 
         <!--通过添加current 来实现 hover效果--> 
         <input id="name_10086253509221" type="hidden" value="荣耀手表" /> 
         <input id="name_10086354651877" type="hidden" value="华为儿童手表 3 Pro" /> 
         <input id="name_10086455419044" type="hidden" value="荣耀手环4 标准版" /> 
         <input id="name_10086119759478" type="hidden" value="HUAWEI WATCH GT" /> 
         <input id="name_10086949141018" type="hidden" value="荣耀手环4 Running版" /> 
         <input id="name_10086972979696" type="hidden" value="华为手环 B5" /> 
         <input id="name_86471537" type="hidden" value="HUAWEI VR 2" /> 
        </ul> 
        <input id="zxnav_2_skuIds" type="hidden" value="10086253509221,10086354651877,10086455419044,10086119759478,10086949141018,10086972979696,86471537," /> 
       </div> 
       <div id="naverSub03" class="naver-sub-wrap hide"> 
        <div class="p-title clearfix"> 
         <div class="s1 fl"> 
          <a href="https://www.vmall.com/list-43" target="_blank" class="">全部智能家居&gt;</a> 
         </div> 
         <div class="s2 fl clearfix"> 
          <input id="child_name" type="hidden" value="路由器" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-45" target="_blank" class="fl">路由器</a> 
          <input id="child_name" type="hidden" value="电视盒子" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-46" target="_blank" class="fl">电视盒子</a> 
          <input id="child_name" type="hidden" value="照明" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-371" target="_blank" class="fl">照明</a> 
          <input id="child_name" type="hidden" value="清洁" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-421" target="_blank" class="fl">清洁</a> 
          <input id="child_name" type="hidden" value="子母/分布式路由" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-263" target="_blank" class="fl">子母/分布式路由</a> 
          <input id="child_name" type="hidden" value="电力猫/wifi放大器" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-44" target="_blank" class="fl">电力猫/wifi放大器</a> 
          <input id="child_name" type="hidden" value="随行wifi" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-97" target="_blank" class="fl">随行wifi</a> 
          <input id="child_name" type="hidden" value="节能" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-423" target="_blank" class="fl">节能</a> 
          <input id="child_name" type="hidden" value="环境" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-373" target="_blank" class="fl">环境</a> 
          <input id="child_name" type="hidden" value="安防" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-379" target="_blank" class="fl">安防</a> 
          <input id="child_name" type="hidden" value="健康" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-403" target="_blank" class="fl">健康</a> 
          <input id="child_name" type="hidden" value="厨电" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-377" target="_blank" class="fl">厨电</a> 
          <input id="child_name" type="hidden" value="影音" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-407" target="_blank" class="fl">影音</a> 
          <input id="child_name" type="hidden" value="卫浴" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-375" target="_blank" class="fl">卫浴</a> 
          <input id="child_name" type="hidden" value="其他" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-381" target="_blank" class="fl">其他</a> 
         </div> 
         <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>--> 
        </div> 
        <ul id="zxnav_3_prolist" class="grid-list clearfix"> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/3053.html" onclick="pushNaverCategoryMsg(0,'/product/3053.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀路由Pro
           </div> <p class="grid-price">&yen;328.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/310439420.html" onclick="pushNaverCategoryMsg(1,'/product/310439420.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为随行WiFi 2
           </div> <p class="grid-price">&yen;499.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086500145070.html" onclick="pushNaverCategoryMsg(2,'/product/10086500145070.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为路由 Q2
           </div> <p class="grid-price">&yen;799.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086958063836.html" onclick="pushNaverCategoryMsg(3,'/product/10086958063836.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀路由2S
           </div> <p class="grid-price">&yen;199.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086007028117.html" onclick="pushNaverCategoryMsg(4,'/product/10086007028117.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀路由 X2
           </div> <p class="grid-price">&yen;149.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086423109158.html" onclick="pushNaverCategoryMsg(5,'/product/10086423109158.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为 AI 音箱
           </div> <p class="grid-price">&yen;399.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086203472371.html" onclick="pushNaverCategoryMsg(6,'/product/10086203472371.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            欧普读写台灯
           </div> <p class="grid-price">&yen;169.00</p> </a> </li> 
         <!--通过添加current 来实现 hover效果--> 
         <input id="name_10086094709326" type="hidden" value="荣耀路由 X2" /> 
         <input id="name_10086794601109" type="hidden" value="华为 AI 音箱" /> 
         <input id="name_10086943604110" type="hidden" value="荣耀路由2S" /> 
         <input id="name_10086061866500" type="hidden" value="华为路由 Q2" /> 
         <input id="name_7219" type="hidden" value="荣耀路由Pro" /> 
         <input id="name_190047935" type="hidden" value="华为随行WiFi 2" /> 
         <input id="name_10086231514149" type="hidden" value="欧普读写台灯" /> 
        </ul> 
        <input id="zxnav_3_skuIds" type="hidden" value="10086094709326,10086794601109,10086943604110,10086061866500,7219,190047935,10086231514149," /> 
       </div> 
       <div id="naverSub04" class="naver-sub-wrap hide"> 
        <div class="p-title clearfix"> 
         <div class="s1 fl"> 
          <a href="https://www.vmall.com/list-54" target="_blank" class="">全部通用配件&gt;</a> 
         </div> 
         <div class="s2 fl clearfix"> 
          <input id="child_name" type="hidden" value="移动电源" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-56" target="_blank" class="fl">移动电源</a> 
          <input id="child_name" type="hidden" value="耳机" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-229" target="_blank" class="fl">耳机</a> 
          <input id="child_name" type="hidden" value="音箱" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-55" target="_blank" class="fl">音箱</a> 
          <input id="child_name" type="hidden" value="自拍杆/支架" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-231" target="_blank" class="fl">自拍杆/支架</a> 
          <input id="child_name" type="hidden" value="充电器/线材" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-58" target="_blank" class="fl">充电器/线材</a> 
          <input id="child_name" type="hidden" value="U盘/存储卡" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-83" target="_blank" class="fl">U盘/存储卡</a> 
          <input id="child_name" type="hidden" value="摄像机/镜头" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-235" target="_blank" class="fl">摄像机/镜头</a> 
          <input id="child_name" type="hidden" value="智能硬件" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-239" target="_blank" class="fl">智能硬件</a> 
          <input id="child_name" type="hidden" value="生活周边" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-237" target="_blank" class="fl">生活周边</a> 
          <input id="child_name" type="hidden" value="取卡针" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-568" target="_blank" class="fl">取卡针</a> 
         </div> 
         <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>--> 
        </div> 
        <ul id="zxnav_4_prolist" class="grid-list clearfix"> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/706470980.html" onclick="pushNaverCategoryMsg(0,'/product/706470980.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为10000mAh 移动电源 充电宝
           </div> <p class="grid-price">&yen;159.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/875753311.html" onclick="pushNaverCategoryMsg(1,'/product/875753311.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀xSport运动蓝牙耳机
           </div> <p class="grid-price">&yen;249.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/194128141.html" onclick="pushNaverCategoryMsg(2,'/product/194128141.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀体脂秤
           </div> <p class="grid-price">&yen;169.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086072295004.html" onclick="pushNaverCategoryMsg(3,'/product/10086072295004.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            Momax 精英3合1编织线
           </div> <p class="grid-price">&yen;98.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086335437779.html" onclick="pushNaverCategoryMsg(4,'/product/10086335437779.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀FlyPods无线耳机
           </div> <p class="grid-price">&yen;799.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086576602689.html" onclick="pushNaverCategoryMsg(5,'/product/10086576602689.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为主动降噪耳机3
           </div> <p class="grid-price">&yen;399.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/936223974.html" onclick="pushNaverCategoryMsg(6,'/product/936223974.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为智能体脂秤
           </div> <p class="grid-price">&yen;169.00</p> </a> </li> 
         <!--通过添加current 来实现 hover效果--> 
         <input id="name_937100113" type="hidden" value="华为10000mAh 移动电源  充电宝" /> 
         <input id="name_10086738650172" type="hidden" value="荣耀FlyPods无线耳机" /> 
         <input id="name_534967719" type="hidden" value="华为智能体脂秤" /> 
         <input id="name_189161731" type="hidden" value="荣耀xSport运动蓝牙耳机" /> 
         <input id="name_10086097429247" type="hidden" value="华为主动降噪耳机3" /> 
         <input id="name_553811697" type="hidden" value="荣耀体脂秤" /> 
         <input id="name_10086281411409" type="hidden" value="Momax 精英3合1编织线" /> 
        </ul> 
        <input id="zxnav_4_skuIds" type="hidden" value="937100113,10086738650172,534967719,189161731,10086097429247,553811697,10086281411409," /> 
       </div> 
       <div id="naverSub05" class="naver-sub-wrap hide"> 
        <div class="p-title clearfix"> 
         <div class="s1 fl"> 
          <a href="https://www.vmall.com/list-47" target="_blank" class="">全部专属配件&gt;</a> 
         </div> 
         <div class="s2 fl clearfix"> 
          <input id="child_name" type="hidden" value="保护壳" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-48" target="_blank" class="fl">保护壳</a> 
          <input id="child_name" type="hidden" value="保护套" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-49" target="_blank" class="fl">保护套</a> 
          <input id="child_name" type="hidden" value="贴膜" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-50" target="_blank" class="fl">贴膜</a> 
          <input id="child_name" type="hidden" value="盒子专属配件" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-223" target="_blank" class="fl">盒子专属配件</a> 
          <input id="child_name" type="hidden" value="表带" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-225" target="_blank" class="fl">表带</a> 
          <input id="child_name" type="hidden" value="触控笔" /> 
          <input id="child_status" type="hidden" value="1" /> 
          <input id="child_type" type="hidden" value="1" /> 
          <a href="https://www.vmall.com/list-397" target="_blank" class="fl">触控笔</a> 
         </div> 
         <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>--> 
        </div> 
        <ul id="zxnav_5_prolist" class="grid-list clearfix"> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086668532068.html" onclick="pushNaverCategoryMsg(0,'/product/10086668532068.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI nova 3 硅胶保护壳
           </div> <p class="grid-price">&yen;69.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086974424499.html" onclick="pushNaverCategoryMsg(1,'/product/10086974424499.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI P20 Pro 星钻保护壳
           </div> <p class="grid-price">&yen;199.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086773631824.html" onclick="pushNaverCategoryMsg(2,'/product/10086773631824.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀8X Max带指环扣PC壳
           </div> <p class="grid-price">&yen;49.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/862627470.html" onclick="pushNaverCategoryMsg(3,'/product/862627470.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            荣耀V10 PU磁吸保护套
           </div> <p class="grid-price">&yen;119.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086251302060.html" onclick="pushNaverCategoryMsg(4,'/product/10086251302060.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            华为平板 M5 8.4英寸 翻盖保护套
           </div> <p class="grid-price">&yen;129.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/10086842712245.html" onclick="pushNaverCategoryMsg(5,'/product/10086842712245.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            HUAWEI Mate 20 智能视窗保护套
           </div> <p class="grid-price">&yen;299.00</p> </a> </li> 
         <li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)"> <a class="thumb" target="_blank" href="https://www.vmall.com/product/100667556.html" onclick="pushNaverCategoryMsg(6,'/product/100667556.html')"> <p class="grid-img">&nbsp;</p> 
           <div class="grid-title">
            FKM氟橡胶表带
           </div> <p class="grid-price">&yen;149.00</p> </a> </li> 
         <!--通过添加current 来实现 hover效果--> 
         <input id="name_10086600968203" type="hidden" value="HUAWEI Mate 20 智能视窗保护套" /> 
         <input id="name_10086869662905" type="hidden" value="荣耀8X Max带指环扣PC壳" /> 
         <input id="name_10086229642128" type="hidden" value="HUAWEI P20 Pro 星钻保护壳" /> 
         <input id="name_780670805" type="hidden" value="荣耀V10 PU磁吸保护套" /> 
         <input id="name_10086280278904" type="hidden" value="华为平板 M5 8.4英寸 翻盖保护套" /> 
         <input id="name_10086233654524" type="hidden" value="HUAWEI nova 3 硅胶保护壳" /> 
         <input id="name_249481832" type="hidden" value="FKM氟橡胶表带" /> 
        </ul> 
        <input id="zxnav_5_skuIds" type="hidden" value="10086600968203,10086869662905,10086229642128,780670805,10086280278904,10086233654524,249481832," /> 
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
         <input type="text" class="text" maxlength="200" id="search-kw" autocomplete="off" /> 
         <input type="submit" class="button" value="搜索" /> 
         <input type="hidden" id="channelType" name="channelType" value="0" /> 
         <input type="hidden" id="default-search" value="nova 3i|荣耀 Note10" /> 
        </form> 
       </div> 
       <div class="search-bar-key" id="search-bar-key"> 
        <div class="searchBar-key"> 
         <a href="https://www.vmall.com/search?keyword=%E8%8D%A3%E8%80%80Magic2" target="_blank" rel="nofollow">荣耀Magic2</a> 
         <a href="https://www.vmall.com/search?keyword=HUAWEI%20Mate%2020" target="_blank" rel="nofollow">HUAWEI Mate 20</a> 
        </div> 
       </div> 
       <div id="search-history" class="search-bar-history hide"> 
        <p> <label>历史记录</label><span id="cleanUp" class="search-history-btn">清除</span> </p> 
        <ul id="search-history-list"></ul> 
       </div> 
       <div id="AutocompleteContainter_2c758" "="" style="top: 94px; left: 1230.5px;">
        <div class="autocomplete-w1">
         <div class="autocomplete" id="Autocomplete_2c758" style="display: none; width: 290px; max-height: 400px;"></div>
        </div>
       </div>
      </div> 
      <!-- 2017-02-15-搜索条-end --> 
     </div> 
    </div> 
   </div>
   <!-- 2017-02-15-头部-end --> 
   <div id="searchHotWordList" style="display:none;">
    [{&quot;id&quot;:216,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-2,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:2,&quot;word&quot;:&quot;华为畅享9 Plus&quot;},{&quot;id&quot;:226,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-3,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:2,&quot;word&quot;:&quot;HUAWEI Mate 20&quot;},{&quot;id&quot;:47,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-6,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:3,&quot;word&quot;:&quot;荣耀Magic2&quot;},{&quot;id&quot;:195,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-10,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:3,&quot;word&quot;:&quot;荣耀10&quot;},{&quot;activityUrl&quot;:&quot;&quot;,&quot;fontColor&quot;:&quot;&quot;,&quot;id&quot;:250,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-11,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:3,&quot;word&quot;:&quot;荣耀10青春版&quot;},{&quot;id&quot;:83,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-24,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:1,&quot;word&quot;:&quot;荣耀Magic2&quot;},{&quot;id&quot;:224,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-25,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:1,&quot;word&quot;:&quot;HUAWEI Mate 20&quot;}]
   </div> 
 
   <script>
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
                {
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
                        .slideUp(300)
                } else {
                    timer = setTimeout(function () {
                        $naverSubItem.unbind('mouseenter');
                        $naverSub
                            .children()
                            .slideUp(300)
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
                    _this.slideUp(200);
                }, 200)
            }
        }
    })();
</script>
   <div class="hr-10"></div> 
   <div class="g"> 
    <!--面包屑 --> 
    <div class="breadcrumb-area fcn">
     <a href="/homeindex" title="首页">首页</a>&nbsp;&gt;&nbsp;
     <span>商城公告</span>
    </div> 
   </div> 
   <div class="hr-15"></div> 
   <div class="g"> 
    <div class="fr u-4-5"> 
     <!--栏目 --> 
     <div class="part-area clearfix"> 
      <div class="fl"> 
       <div class="part-area-title ce-title">
        <span>商城公告</span>
       </div> 
      </div> 
      <div class="fl news-search"> 
      <form action="/homenotice" method="get">
       <input id="searchKey" type="text" name="keyword" value="{{$keyword or ''}}" placeholder="请输入标题关键词" /> 
       <button style="font-size: 16px;font-family: 隶书;background: #ccc;">搜索</button> 
       </form>
      </div> 
     </div> 
     <div class="hr-2"></div> 
     <!--新闻-列表 --> 
     <div class="news-list" id="news-list-ul"> 
      <ul class="clearfix">
      @foreach($data as $row) 
       <li> <span class="fl"><a href="/homenotice/{{$row->id}}" title="{{$row->title}}">{{$row->title}}</a><em class="icon-news">热</em></span> <span class="fr">{{date('Y-m-d',$row->addtime)}}&nbsp;&nbsp;{{date('H:i:s',$row->addtime)}}</span> </li> 
       @endforeach
      </ul> 
     </div> 
     <div class="hr-25"></div> 
     <!--分页 --> 
     <div class="pager" id="list-pager">
      {{$data->appends($request)->render()}}
     </div> 
    </div> 
    <div class="fl u-1-5">
     <!--左边菜单 --> 
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
     <div class="ad ad179">
      <p><br /></p>
      <p><a title="G520" href="https://www.vmall.com/recycle" target="_blank"><img src="/static/homes/notice/DhB80q45Y7RvVbaGkxkC.png" title="179x403.png" style="float:none;" width="179" height="403" /></a></p>
      <p><br /></p>
      <p><br /></p>
     </div> 
     <script>
(function(){
	var path = location.pathname.split("-");
		if(path.length > 0)
		{
			$("#menu-"+path[0].substring(1)).addClass("current").siblings().removeClass("current");
		}
})();
</script>
    </div> 
   </div> 
   <div class="hr-60"></div> 
   <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="/static/homes/notice/pager-min.js" charset="gbk"></script>
   <script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("ec.pager/pager-min.js","complete");})();</script>
   <!--口号-20121025 --> 
  </div>
 </body>
</html>
@endsection 