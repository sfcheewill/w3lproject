@extends('Home.HomePublic.public')
@section('title','商品详情')
@section('content')
<html>
 <head></head>
  <link rel="stylesheet" href="/static/homes/goodsinfo/ec.core.base.min.css">
  <link rel="stylesheet" href="/static/homes/goodsinfo/main.min(1).css">
  <link rel="stylesheet" href="/static/homes/goodsinfo/main.min.css">
 <body>
  <div class="header"> 
   <div class="layout"> 
    <div class="left"> 
     <!-- 2017-02-15-logo-start --> 
     <div class="logo">
      <a href="/homeindex" title="Vmall.com - 华为商城"><img src="/static/homes/goodsinfo/x9a6U8WW0bhrA7u0FIlY.png" alt="Vmall.com - 华为商城" /></a>
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
         <input id="child_name" type="hidden" value="HUAWEI 麦芒系列" /> 
         <input id="child_status" type="hidden" value="1" /> 
         <input id="child_type" type="hidden" value="1" /> 
         <a href="https://www.vmall.com/list-81" target="_blank" class="fl">HUAWEI 麦芒系列</a> 
         <input id="child_name" type="hidden" value="华为畅享系列" /> 
         <input id="child_status" type="hidden" value="1" /> 
         <input id="child_type" type="hidden" value="1" /> 
         <a href="https://www.vmall.com/list-275" target="_blank" class="fl">华为畅享系列</a> 
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
       <form method="get" action="/searchgoods"> 
        <input type="text" class="text" name="goodsname" maxlength="200" id="search-kw" autocomplete="off" /> 
        <input type="submit" class="button" value="搜索" /> 
       </form> 
      </div> 
      <div class="search-bar-key" id="search-bar-key"> 
       <div class="searchBar-key"> 
<!--         <a href="https://www.vmall.com/search?keyword=%E8%8D%A3%E8%80%80Magic2" target="_blank" rel="nofollow">荣耀Magic2</a> 
        <a href="https://www.vmall.com/search?keyword=HUAWEI%20Mate%2020" target="_blank" rel="nofollow">HUAWEI Mate 20</a>  -->
       </div> 
      </div> 
      <div id="search-history" class="search-bar-history hide"> 
       <p> <label>历史记录</label><span id="cleanUp" class="search-history-btn">清除</span> </p> 
       <ul id="search-history-list"></ul> 
      </div> 
      <div id="AutocompleteContainter_f9c95" "="" style="top: 94px; left: 1230.5px;">
       <div class="autocomplete-w1">
        <div class="autocomplete" id="Autocomplete_f9c95" style="display: none; width: 290px; max-height: 400px;"></div>
       </div>
      </div>
     </div> 
     <!-- 2017-02-15-搜索条-end --> 
    </div> 
   </div> 
  </div>
  <!-- 2017-02-15-头部-end --> 
<!--   <div id="searchHotWordList" style="display:none;">
   [{&quot;id&quot;:216,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-2,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:2,&quot;word&quot;:&quot;华为畅享9 Plus&quot;},{&quot;id&quot;:226,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-3,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:2,&quot;word&quot;:&quot;HUAWEI Mate 20&quot;},{&quot;id&quot;:47,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-6,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:3,&quot;word&quot;:&quot;荣耀Magic2&quot;},{&quot;id&quot;:195,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-10,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:3,&quot;word&quot;:&quot;荣耀10&quot;},{&quot;activityUrl&quot;:&quot;&quot;,&quot;fontColor&quot;:&quot;&quot;,&quot;id&quot;:250,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-11,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:3,&quot;word&quot;:&quot;荣耀10青春版&quot;},{&quot;id&quot;:83,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-24,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:1,&quot;word&quot;:&quot;荣耀Magic2&quot;},{&quot;id&quot;:224,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-25,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:1,&quot;word&quot;:&quot;HUAWEI Mate 20&quot;}]
  </div> --> 

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
  <script>
$("body").addClass("wide detail");
//console.log('mozilla/5.0 (windows nt 6.1; win64; x64) applewebkit/537.36 (khtml, like gecko) chrome/70.0.3538.110 safari/537.36');
</script> 
  <div class="hr-10"></div> 
  <div class="g"> 
   <!--面包屑 --> 
   <div class="breadcrumb-area fcn">
    <a href="/homeindex" title="首页">首页</a>&nbsp;&gt;&nbsp;
    @foreach($crumbs as $c)
    <a href="/homegoodslist/{{$c['cate_id']}}" title="{{$c['cate_name']}}">{{$c['cate_name']}}</a>&nbsp;&gt;&nbsp;
    @endforeach
    <!-- <a href="https://www.vmall.com/list-40" title="笔记本 &amp; 平板">笔记本 &amp; 平板</a>&nbsp;&gt;&nbsp; -->
    <!-- <a href="https://www.vmall.com/list-41" title="平板电脑">平板电脑</a>&nbsp;&gt;&nbsp;  -->
    <span id="bread-pro-name">{{$goods->name}} {{$info[0]->desc}}</span>
   </div> 
  </div> 
  <div class="hr-10"></div> 
  <!-- 20170519-弹出层-优惠卷-start --> 
  <textarea class="hide" id="pro-roll-textarea"> &lt;div class=&quot;product-roll hide&quot; id=&quot;pro-roll-page&quot; &gt; &lt;div id=&quot;pro-roll-list&quot; class=&quot;product-roll-list&quot;&gt; &lt;ul class=&quot;clearfix&quot;&gt; &lt;li class=&quot;product-roll-detail&quot;&gt; &lt;/li&gt; &lt;/ul&gt; &lt;/div&gt; &lt;/div&gt; &lt;p id=&quot;pro-roll-message&quot; class=&quot;product-layer-tips&quot; style=&quot;min-height:18px; padding:10px 20px;&quot;&gt;&lt;/p&gt; </textarea> 
  <!-- 20170519-弹出层-优惠卷-end --> 
  <div id="pro-gift-box" class="hide"> 
   <div class="product-partscolor-layer" id="pro-gift-list-detail"> 
   </div> 
  </div> 
  <!-- 20170519-弹出层-加入购物车-start --> 
  <!--高保真未提供，用公用的弹框--> 
  <div class="product-shoppingcart hide"> 
  </div> 
  <!-- 20170519-弹出层-加入购物车-end --> 
  <div class="product clearfix"> 
   <div class="left"> 
    <!-- 20170518-商品图片-start --> 
    <div class="product-gallery"> 
     <div class="relative"> 
      <div class="product-gallery-img" id="pic-container"> 
       <div id="wrap" style="position:relative;">
        <!-- 大图 -->
        <a id="product-img" href="#" class="cloud-zoom" rel="adjustX: 10, adjustY:0, zoomWidth:400 , zoomHeight:400" style="position: relative; display: block;"> <img src="{{$spec[0]->pic[0]}}" alt="华为平板 M3" style="display: block;" /> </a>
        <!-- <div class="mousetrap" style="background-image: url(&quot;about:blank&quot;); z-index: 999; position: absolute; width: 450px; height: 450px; left: 0px; top: 0px; cursor: move;"></div> -->
        <!-- <div class="mousetrap" style="background-image: url(&quot;about:blank&quot;); z-index: 999; position: absolute; width: 450px; height: 450px; left: 0px; top: 0px; cursor: move;"></div> -->
       </div> 
      </div> 
     </div> 
     <div class="product-gallery-nav"> 
      <a href="javascript:;" class="product-gallery-back" onclick="ec.product.imgSlider.prev()"></a>
      <!--不可点击添加class="disabled"--> 
      <div class="product-gallery-thumbs"> 
       <ul id="pro-gallerys" style="left: 0px;">
       @foreach($spec[0]->pic as $p)
        <li class=""><a href="javascript:;"><img src="{{$p}}" alt="{{$info[0]->desc}}" /></a></li>
        @endforeach
        <!-- <li><a href="javascript:;"><img src="/static/homes/goodsinfo/78_78_1473405479575.jpg" alt="华为平板 M3 4GB+64GB LTE版（日晖金）" /></a></li>
        <li><a href="javascript:;"><img src="/static/homes/goodsinfo/78_78_1473405490107.jpg" alt="华为平板 M3 4GB+64GB LTE版（日晖金）" /></a></li>
        <li class="current"><a href="javascript:;"><img src="/static/homes/goodsinfo/78_78_1473405512942.jpg" alt="华为平板 M3 4GB+64GB LTE版（日晖金）" /></a></li>
        <li><a href="javascript:;"><img src="/static/homes/goodsinfo/78_78_1473405516447.jpg" alt="华为平板 M3 4GB+64GB LTE版（日晖金）" /></a></li> -->
       </ul> 
       <script>
          //显示大图
          $('#pro-gallerys li').live('click',function(){
            $('#product-img img').attr('src',$(this).find('img').attr('src'));
          });
       </script>
      </div> 
      <a href="javascript:;" class="product-gallery-forward" onclick="ec.product.imgSlider.next()"></a> 
     </div> 
    </div> 
    <!-- 20170518-商品图片-end --> 
   </div> 
   <div class="right relative"> 
    <div id="pro-add-success-mask" style="visibility:hidden;font-size:18px;width:348px;position: absolute;"></div> 

    <!-- 20130913-弹出层-购买延保-end --> 
    <!--弹出层-提示信息 --> 
    <!-- 20170518-商品简介-start --> 
    <div class="product-property clearfix relative" style="min-height: 462px; height: auto; padding-bottom: 104px;"> 
     <div id="product-property-recommand"> 
      <!-- 20170518-商品简介-商品信息-start --> 
      <div class="product-meta"> 
       <h1 id="pro-name">{{$goods->name}} {{$info[0]->desc}}</h1> 
       <input class="hide" value="348824011" id="product_sku" /> 
       <input class="hide" value="241920871" id="product_productId" /> 
       <div class="product-slogan" id="skuPromWord" style="display: -webkit-box;">
        <a href="javascript:;" class="product-slogan-btn" style="display: none;"></a> 
       </div> 
      </div> 
      <div class="product-info"> 
       <div class="product-info-list clearfix"> 
        <label>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格</label> 
        <div class="product-price clearfix"> 
         <div class="product-price-info"> 
          <span id="pro-price-label" class="f24" style="display: none;"></span> 
          <span id="pro-price" class="f24"><em>&yen;</em>{{$info[0]->price}}.00</span> 
          <input type="hidden" id="pro-price-hide" value="{{$info[0]->price}}.00" /> 
        </div> 
       </div> 
       <div class="product-info-list clearfix hide" id="couponBtn" style="display: none;"> 
        <label>优&nbsp;&nbsp;惠&nbsp;&nbsp;券</label> 
        <div class="clearfix" id="couponTag"> 
        </div> 
       </div> 
       <!-- 20170518-商品简介促销消息-start --> 
       <div class="product-info-list clearfix" id="product-info-list-new" 0="" style=""> 
        <label>促&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;销</label> 
        <div class="product-prom fl  show" id="product-prom-all"> 
         <div class="product-prom-item clearfix product-parts" id="pro-match-gift" style="display: none;"> 
          <em class="tag">赠品</em> 
          <div class="product-prom-con"> 
           <div class="product-parts-list" id="pro-gift-list-select"> 
           </div> 
           <a href="javascript:;" class="product-partscolor" onclick="ec.product.giftshow()">选择&nbsp;&gt;</a> 
          </div> 
         </div> 
         <div class="product-prom-item clearfix" style="display: block;">
          <em class="tag">赠送积分</em>
          <div class="product-prom-con">
           购买即赠商城积分，积分可抵现~
          </div>
         </div>
        </div> 
       </div> 
       <!-- 20170518-商品简介促销消息-end --> 
      </div> 
      <!-- 20180206-商品简介-end --> 
      <div class="hr-20"></div> 
      <!-- 20170518-商品简介-服务说明-start --> 
      <div class="product-pulldown clearfix" id="product-pulldown1"> 
       <label>服务说明</label> 
       <div class="fl"> 
        <!-- 20160914-商品详情-预计送达-start --> 
        <div class="product-address clearfix hidden" id="pro-predict" style="display: block;"> 
         <div class="product-pulldown-main relative"> 
          <div class="fl" id="address"> 
           <a href="https://www.vmall.com/product/241920871.html#" class="product-pulldown-btn">广东&nbsp;&gt;&nbsp;深圳&nbsp;&gt;&nbsp;龙岗区</a> 
          </div> 
          <div class="product-pulldown-detail"> 
           <div class="product-pulldown-detailmain"> 
            <div class="product-address-choose"> 
             <div class="product-address-normal" id="address_normal_effective_time"> 
              <dl class="clearfix" id="in_common_use_address"> 
              </dl> 
              <div class="tips hide" id="deatilAddress"></div> 
             </div> 
             <div class="product-address-new" id="newAddress"> 
              <dl class="clearfix" id="provice_info">
               <dt>
                选择新地址
               </dt>
               <dd id="provice" level-value="1" data-value="" class="current">
                广东
               </dd>
               <dd id="city" level-value="2" data-value="">
                请选择
               </dd>
               <dd id="district" level-value="3" data-value="">
                请选择
               </dd>
              </dl> 
             </div> 
             <div class="product-address-table" id="address_table" style="min-height: 180px;">
              <table style="min-height=180px;" width="100%" border="0" cellpadding="0" cellspacing="0">
               <tbody>
                <tr>
                 <td id="3510" addrtype="1">北京</td>
                 <td id="3511" addrtype="1">安徽</td>
                 <td id="3656" addrtype="1">福建</td>
                 <td id="3751" addrtype="1">甘肃</td>
                </tr>
                <tr>
                 <td id="3853" addrtype="1">广东</td>
                 <td id="4035" addrtype="1">广西</td>
                 <td id="4158" addrtype="1">贵州</td>
                 <td id="4261" addrtype="1">海南</td>
                </tr>
                <tr>
                 <td id="4304" addrtype="1">河北</td>
                 <td id="4489" addrtype="1">河南</td>
                 <td id="4672" addrtype="1">黑龙江</td>
                 <td id="4814" addrtype="1">湖北</td>
                </tr>
                <tr>
                 <td id="4935" addrtype="1">湖南</td>
                 <td id="5073" addrtype="1">吉林</td>
                 <td id="5147" addrtype="1">江苏</td>
                 <td id="5285" addrtype="1">江西</td>
                </tr>
                <tr>
                 <td id="5399" addrtype="1">辽宁</td>
                 <td id="5516" addrtype="1">内蒙古</td>
                 <td id="5630" addrtype="1">宁夏</td>
                 <td id="5662" addrtype="1">青海</td>
                </tr>
                <tr>
                 <td id="5714" addrtype="1">山东</td>
                 <td id="5873" addrtype="1">山西</td>
                 <td id="6008" addrtype="1">陕西</td>
                 <td id="6126" addrtype="1">上海</td>
                </tr>
                <tr>
                 <td id="6147" addrtype="1">四川</td>
                 <td id="6349" addrtype="1">天津</td>
                 <td id="6370" addrtype="1">西藏</td>
                 <td id="6451" addrtype="1">新疆</td>
                </tr>
                <tr>
                 <td id="6565" addrtype="1">云南</td>
                 <td id="6711" addrtype="1">浙江</td>
                 <td id="6819" addrtype="1">重庆</td>
                </tr>
               </tbody>
              </table>
             </div> 
            </div> 
           </div> 
          </div> 
         </div> 
         <div class="product-address-prompt"> 
          <span><span class="red">现货</span>，今天23:59前付款，预计12月4日（明天）送达</span>
          <em></em> 
          <p class="hide" id="expectTimeDesc">”预计送达时间”功能处于试运营，可能会略有偏差，最终以实际到货时间为准，如有疑问请您联系商城客服。感谢您对华为商城的支持和理解！</p> 
         </div> 
        </div> 
        <!-- 20160914-商品详情-预计送达-end --> 
        <script>
$(function() {
    //控制动态显示、隐藏详细地址信息
    $("#address_normal_effective_time").find("dl>dd").hover(function() {
        //鼠标经过显示详细地址信息
        alert($(this).attr("id")) ;
        $(".tips").show() ;
    },

    function() {
        //鼠标离开详细地址信息
        alert($(this).attr("id")) ;
        $(".tips").hide() ;
    });
    
     /*
     *
     * 地址提示
     *
    * */
    $('.product-address-prompt em').hover(function(){
        $(this).parent().children('p').addClass('show');
    }, function(){
        $(this).parent().children('p').removeClass('show');
    }); 
});
</script> 
        <div class="product-description clearfix"> 
         <p>已满48元已免运费<em></em> 由华为商城负责发货，并提供售后服务</p> 
        </div> 
       </div> 
      </div> 
      <!-- 20170518-商品简介-服务说明-end --> 
      <!-- 20171024-商品简介-商品编码-start --> 
      <div class="product-description clearfix"> 
       <label>商品编码</label> 
       <div class="fl" id="pro-sku-code2">
        {{$info[0]->code}}
       </div> 
      </div> 
      <!-- 20171024-商品简介-商品编码-end --> 
      <div class="hr-5"></div> 
      <div class="line"></div> 
      <div class="hr-16"></div> 
      <div id="pro-skus" class="">
       <dl class="product-choose clearfix  product-choosepic">
        <label>选择颜色</label>
        <div class="product-choose-detail ">
         <ul>
         @foreach($spec as $s)
          <li class="attr1 @if($spec[0]->id==$s->id) selected @endif" data-attrname="颜色" data-attrcode="152138" data-attrid="{{$s->id}}" data-skuid="348824011">
           <div class="sku">
            <a href="javascript:;" title="{{$s->color}}"><img src="{{$s->pic[0]}}" alt="{{$s->color}}" /><p><span>{{$s->color}}</span></p></a>
           </div></li>
            @endforeach
         </ul>
        </div>
       </dl>
       <dl class="product-choose clearfix ">
        <label>选择版本</label>
        <div class="product-choose-detail ">
         <ul id="version">
         @foreach($info as $i)
          <li class="attr2 @if($info[0]->id==$i->id) selected @endif" data-attrname="版本" data-attrcode="733605" data-attrid="{{$i->id}}" data-skuid="348824011">
           <div class="sku">
            <a href="javascript:;" title="{{$i->version}}"><p><span>{{$i->version}}</span></p></a>
           </div></li>
           @endforeach
         </ul>
        </div>
       </dl>
       <script>
          //颜色和版本
          
       </script>
      <!--  <dl class="product-choose clearfix ">
        <label>选择容量</label>
        <div class="product-choose-detail ">
         <ul>
          <li class="attr3 selected" data-attrname="容量" data-attrcode="583366" data-attrid="3" data-skuid="348824011">
           <div class="sku">
            <a href="javascript:;" title="4GB+64GB"><p><span>4GB+64GB</span></p></a>
           </div></li>
         </ul>
        </div>
       </dl> -->
       <dl class="product-choose clearfix" id="bundlePackage">
        <label>选择套餐</label>
        <div class="product-choose-detail  relative" id="bundlePackageSelect">
         <ul>
          <li class="attr4 selected" data-attrname="套餐" data-attrcode="323374" data-attrid="4" data-skuid="348824011">
           <div class="sku">
            <a href="javascript:;" title="官方标配"><p><span>官方标配</span></p></a>
           </div></li>
         </ul>
         <div id="giftPackageList" class="hide"></div>
        </div>
       </dl>
      </div> 
      <!--联通合约机套餐--> 
      <div id="contractLst" class="hide"> 
       <dl class="product-choose clearfix"> 
        <label>合约机</label> 
        <div class="product-choose-detail"> 
         <ul id="contractList-ol"> 
         </ul> 
        </div> 
       </dl> 
       <form action="https://www.vmall.com/contract/choose-%7Bid%7D" id="contractForm" class="hide"> 
        <input type="hidden" value="" id="gifts" name="gifts" /> 
       </form> 
      </div> 
      <!-- 20170518-商品简介-保障服务-start --> 
      <div class="product-pulldown clearfix hide" id="pro-service" style="display: none;"> 
       <label>保障服务</label> 
       <!-- 延保 --> 
       <div class="product-service"> 
        <span class="hide" id="extendSelect" skuid="" data-scode="" interest-price=""></span> 
        <div class="product-service-detail"> 
         <div class="product-service-list" id="extendProtected"> 
          <ul></ul> 
         </div> 
        </div> 
       </div> 
       <!-- 意外保 --> 
       <div class="product-service"> 
        <span class="hide" id="accidentSelect" skuid="" data-scode="" interest-price=""></span> 
        <div class="product-service-detail"> 
         <div class="product-service-list" id="accidentProtected"> 
          <ul></ul> 
         </div> 
        </div> 
       </div> 
      </div> 
      <!-- 20170518-商品简介-保障服务-end --> 
      <input type="hidden" value="" id="interestOrderNow" /> 
      <!-- 20181026-商品简介-分期免息-start --> 

      <!-- 20181026-商品简介-分期免息-end --> 
      <!-- 20170518-商品简介-物流现货-start --> 
      <!-- 20170518-商品简介-物流现货-end --> 
      <!-- 推荐-start --> 
<!--       <div id="Recommend" class="clearfix"> 
       <label>推荐</label> 
       <div class="product-choose-relation"> 
        <ul class="clearfix"> 
         <li><a href="https://www.vmall.com/product/926900459.html" target="_blank" onclick="pushProRelationMsg(926900459,1)">AKG H300耳机</a></li> 
         <li><a href="https://www.vmall.com/product/142312570.html" target="_blank" onclick="pushProRelationMsg(142312570,2)">华为平板 M3 青春版 8英寸</a></li> 
        </ul> 
       </div> 
      </div> --> 
      <!-- 推荐-end --> 
      <div class="product-operation-main product-operation-location"> 
       <!-- 20170518-商品简介-已选择商品-start --> 
       <div class="product-description clearfix"> 
        <label>已选择商品:</label> 
        <div id="pro-select-sku" class="product-selected">
         {{$spec[0]->color}} / {{$info[0]->version}} / 官方标配 
        </div> 
       </div> 
       <!-- 20170518-商品简介-已选择商品-end --> 
       <!-- 20170518-商品简介-提示-end --> 
       <div id="product-tips" class="product-tips hide" style="display: none;"></div> 
       <!-- 20170518-商品简介-提示-end --> 
       <!-- 20170518-商品简介-提交操作-start --> 
       <div id="product-operation" class="product-operation relative" style="display: block;"> 
        <div class="clearfix"> 
         <!-- 20170518-商品简介-购买数量-start --> 
         <div class="product-stock" id="pro-quantity-area"> 
          <input id="pro-quantity" type="text" class="product-stock-text" placeholder="1" value="1" />
          <p class="product-stock-btn"><a id="pro-quantity-plus" href="javascript:;" onclick="quantity(this,'+')">+</a><a id="pro-quantity-minus" href="javascript:;" class="disabled" onclick="quantity(this,'-')">−</a></p> 
         </div> 
         <div class="product-stock hide" id="pro-quantity-area-nochange" style="display: none;"> 
          <input type="text" class="product-stock-text" placeholder="1" value="1" disabled="disabled" /> 
          <p class="product-stock-btn"><a href="javascript:;" class="disabled">+</a><a href="javascript:;" class="disabled">−</a></p> 
         </div> 
         <!-- 20170518-商品简介-购买数量-end --> 
         <div class="product-buttonmain"> 
          <!-- 20170518-商品简介-按钮-start --> 
          <div id="pro-operation" class="product-button clearfix" style="visibility: visible;">
           <a href="javascript:;" onclick="addCart()" class="product-button01"><span>加入购物车</span></a>
           @if(empty($collec[0]))
           <a href="javascript:;" class="product-button02 " style="background:#de4c4c;" ><span id="colls" infos="1">收藏</span></a>
           @else
           <a href="javascript:;" class="product-button02 " style="background:#de4c4c;" ><span id="colls" infos="2">已收藏</span></a>
           @endif
          </div> 
          <!-- 20170518-商品简介-按钮-end --> 
          <!-- 20170518-商品简介-协议-start --> 
          <div class="product-agreement hide" id="product-deposit-agreement-area"> 
           <input type="checkbox" id="pro-agreement-area-check" checked="" /> 
           <span>同意<a href="javascript:;" onclick="ec.product.showDepositAgreement()">订金支付协议</a></span> 
          </div> 
          <!-- 20170518-商品简介-协议-end --> 
          <!-- 20180212-商品简介-游客购买-start --> 
          <!-- 20180212-商品简介-游客购买-end --> 
         </div> 
        </div> 
        <div class="product-tips02 " id="goAddressId" style="display:none"> 
         <lable>
          温馨提示
         </lable> 
         <p> 提前设置<a href="https://www.vmall.com/member/myAddress?t=453453454353" target="_blank" onclick="ec.product.pushAddress()">默认收货地址</a>，购买更顺利~ </p> 
        </div> 
       </div> 
       <div class="product-deposit clearfix" id="buyProcessIDD" style="display:none"> 
        <h2>购买流程</h2> 
        <ul> 
         <li>1.&nbsp;&nbsp;&nbsp;支付订金（<span id="startDateIDD">提前锁定购买资格</span>）</li> 
         <li>2.&nbsp;&nbsp;&nbsp;支付尾款（<span id="balanceStartDateIDD">暂无</span>）</li> 
         <li>3.&nbsp;&nbsp;&nbsp;等待发货（按支付尾款时间顺序发货）</li> 
        </ul> 
       </div> 
       <div class="gallery-scroll-bottom"></div> 
      </div> 
      <!-- 20170518-商品简介-提交操作-end --> 
      <!-- 20170518-商品简介-按钮-start --> 
      <div class="product-support"> 
       <ul> 
        <li> <a href="https://www.vmall.com/recycle" target="_blank" class="product-button-oldnew"></a> 
         <div class="product-support-detial product-oldnew-detail hide"> 
          <div class="product-support-detialmain"> 
           <p><label>以旧换新，</label><a href="https://www.vmall.com/recycle" target="_blank" style="color:red">最高送1300元购机立减券</a></p> 
          </div> 
         </div> </li> 
        <li> <a class="product-button-code"></a> 
         <div class="product-support-detial product-code-detail hide"> 
          <div class="product-support-detialmain"> 
           <p>用手机扫码进行购买</p> 
           <div id="product_wap">
            <canvas width="118" height="118"></canvas>
           </div> 
          </div> 
         </div> </li> 
       </ul> 
      </div> 
      <!-- 20170518-商品简介-按钮-end --> 
     </div> 
    </div> 
    <!-- 20170518-商品简介-属性-end --> 
   </div> 
  </div>
  <script>
    //处理页面数据
    //选择颜色
    $('.attr1').click(function(){
      var cindex = $(this).index();
      //改变样式
      $('.attr1').each(function(i){
        if(i == cindex){
          $(this).addClass('selected');
        }else{
          $(this).removeClass('selected');
        }
      });
      //获取选中的版本的索引
      $('.attr2').each(function(){
        if($(this).hasClass('selected')){
          vindex = $(this).index();
        }
      });
      //获取id
      var cid = $(this).attr('data-attrid');
      //Ajax
      $.get('/goodscolor',{cid:cid},function(data){
         //修改图片
         $('#pro-gallerys').empty();
         // 创建图片
         for(var i = 0; i < data.pic.length; i++){
            var s = $('<li class=""><a href="javascript:;"><img src="'+data.pic[i]+'" alt="data.color" /></a></li>');
            //添加到ul中
            $('#pro-gallerys').append(s);
         }

        //修改版本数据
        $('#version').empty();
        //创建版本
        for(var i = 0; i < data.info.length; i++){
          var li = $('<li class="attr2" data-attrname="版本" data-attrcode="733605" data-attrid="'+data.info[i].id+'" data-skuid="348824011"></li>');
          if(i == vindex){
            li.addClass('selected');
          }
          var div = $('<div class="sku"><a href="javascript:;" title="'+data.info[i].version+'"><p><span>'+data.info[i].version+'</span></p></a></div>');
          li.append(div);
          $('#version').append(li);
        }
        //修改面包屑
        $('#bread-pro-name').html(data.info[vindex].gname);
        //修改标题
        $('#pro-name').html(data.info[vindex].gname);
        //修改已选择商品
        $('#pro-select-sku').html(data.color + " /" + data.info[vindex].version + " /" + "官方标配");
      },'json');
    });

    //选择版本
    $('.attr2').live('click',function(){
      //改变样式
      var v = $(this).index();
      $('.attr2').each(function(i){
        if(v == i){
          $(this).addClass('selected');
        }else {
          $(this).removeClass('selected');
        }
      });
      //获取id
      var vid = $(this).attr('data-attrid');
      //ajax
      $.get('/specinfo',{vid:vid},function(data){
        //修改面包屑
        $('#bread-pro-name').html(data.gname);
        //修改标题
        $('#pro-name').html(data.gname);
        //修改已选择商品
        $('#pro-select-sku').html(data.color + " /" + data.version + " /" + "官方标配");
        //修改价格
        $('#pro-price').html('<em>&yen;</em>'+data.price+".00");
      },'json');
    });
  </script>
  <!-- 收藏按钮 ==================================================================================================-->
  <script>
     //获取商品id
    sid = {{$shoid}};
    $('#colls').click(function(){
      //当前状态码 
      status = $('#colls').attr("infos");
      //Ajax
      $.get('/infocollect',{id:sid,status:status},function(data){
        if (data == 1) {
          $('#colls').html('已收藏');
          $('#colls').attr('infos','2');
        }else if(data == 2){
          $('#colls').html('收藏');
          $('#colls').attr('infos','1');
        }else{
          location.href="/homelogin/create";
        }       
      });
    });
  </script>
  <div class="hr-20"></div> 
  <div class="line"></div> 
  <div class="layout"> 
   <!-- 20180130-推荐搭配-start --> 
   <div class="product-recommend" id="product-recommend-all" style="display: none;"> 
   </div> 
   <!-- 20180130-推荐搭配-end --> 
  </div> 
  <!-- 20170519-商品详情-书签-start --> 
  <div class="product-tab" id="product-tab">
   <!--移到顶部的时候添加class="product-tab-top"--> 
   <div class="layout relative" id="layoutRelative"> 
    <p> <a href="javascript:;" id="pro-tab-feature" class="selected">商品详情<em></em></a>
     <!--选中 a 添加 class="selected"--> <a href="javascript:;" id="pro-tab-parameter">规格参数<em></em></a> <a href="javascript:;" id="pro-tab-package-service" style="display: inline;">包装与售后<em></em></a> <a href="javascript:;" id="pro-tab-evaluate">用户评价<em></em><span>(16335)</span></a> </p> 
    <div class="product-tab-btn" style="display: none;"> 
     <a href="javascript:;" id="tab-addcart-button" onclick="ec.product.addComb();return false;" class="product-button02" style="display: inline-block;">加入购物车</a> 
     <a href="javascript:;" id="tab-notice-button" onclick="ec.product.arrival();return false;" class="product-button02" style="display: none;">到货通知</a> 
    </div> 
   </div> 
  </div> 
  <!-- 20170519-商品详情-书签-end --> 
  <!-- 20170519-商品详情-start --> 
   
    <!-- 20180117-没有评论-end --> 
    <!-- 20170519-评论分页-start --> 
    <div class="product-page"> 
     <div id="evaluatePageNumber" class="product-page-info"></div> 
     <div id="pro-msg-pager" class="pager">
      <ul>
       <li class="pgNext link first first-empty">|&lt;</li>
       <li class="pgNext link pre pre-empty">&lt;</li>
       <span class="qpages"><li class="page-number link pgCurrent">1</li><li class="page-number link">2</li><li class="page-number link">3</li><li class="page-number link">4</li><li class="page-number link">5</li><li class="page-number link">6</li><li class="page-number link">7</li><li class="page-number link">8</li><li class="page-number link">9</li><li class="page-number link">10</li><li class="text">...</li><li class="page-number link page-number-last">17</li></span>
       <li class="pgNext link next">&gt;</li>
       <li class="pgNext link last">&gt;|</li>
       <li class="text quickPager"><span class="fl">第</span>
        <div id="chatpage">
         <input id="quickPager" class="pagenum fl" value="1" style="width:20px;" />
         <a id="enter" class="enter fl" href="javascript:void(0)"></a>
        </div><span class="fl">&nbsp;/17&nbsp;页</span></li>
      </ul>
     </div> 
    </div> 
    <!-- 20170519-分页-end --> 
   </div> 
  </div> 
  <!-- 20170519-评价-end --> 
  <!-- 20170519-购买咨询等工具-start --> 

  <!-- 20170519-购买咨询等工具-end --> 
  <!-- 20170519-咨询表单-start --> 

  <!-- 20170519-咨询表单-end --> 
  <!-- 20150331-咨询提交成功提示-start --> 

  <!-- 20170519-热销榜单-start --> 
  <div class="layout"> 
   <div id="product-history-area" class="product-link"> 
    <h2 class="product-title01">浏览记录<em></em></h2> 
    <div id="pro-link-main" class="product-link-main relative"> 
     <a href="javascript:;" class="product-link-back btn-prev swiper-button-prev disabled" style="display: none;"></a>
     <!--不可点击添加class="disabled"--> 
     <div class="product-link-thumbs swiper-container" id="product-history-scroll"> 
      <ul id="product-history-list" class="grid-list swiper-wrapper" style="height: 268px;"> 
      </ul> 
     </div> 
     <a href="javascript:;" class="product-link-forward btn-next swiper-button-next" style="display: none;"></a>
     <!--不可点击添加class="disabled"--> 
    </div> 
   </div> 
  </div> 
  <!-- 20170519-热销榜单-end --> 
  <!--end pro-meta-area--> 
  <!--后壳定制商品提交操作cover--> 
  <form id="order-cover-form" method="post" class="hide" action="https://customization.vmall.com/uidesign/edit"></form> 
  <!--商品简介-提交操作 --> 
  <form id="order-confirm-form" method="post" class="hide" action="https://www.vmall.com/order/nowConfirmcart"></form> 
  <form id="easybuy-confirm-form" method="post" class="hide" action="https://www.vmall.com/order/confirmEasybuy"></form> 
  <!--延保单独购买提交form --> 
  <form id="order-confirm-extend-form" method="post" class="hide" action="https://www.vmall.com/order/extendConfirm"></form> 
  <form id="order-shoppingCart-form" method="get" class="hide" action="https://www.vmall.com/cart2"></form> 
  <!--预付订金form --> 
  <form id="order-confirm-deposit-form" method="post" class="hide" action="https://www.vmall.com/order/confirmDeposit"></form> 
  <input id="isPriority" name="isPriority" type="hidden" value="0" /> 
  <!--商品简介-提交操作 --> 
  <div id="pro-fixed-action-area" class="pro-fixed-action hide"> 
   <div class="hr-20"></div> 
   <div id="pro-select-sku" class="pro-selected"></div> 
   <div id="pro-operation" class="pro-action-area"></div> 
   <div class="pro-agreement-area hide" id="pro-agreement-area"> 
    <input class="vam" checked="" type="checkbox" id="pro-agreement-area-check" />
    <label for="" class="vam">同意</label>&nbsp;
    <a href="javascript:;" class="vam" onclick="ec.product.showDepositAgreement()">订金支付协议</a> 
   </div> 
  </div> 
  <div id="pro-operation-msg" class="pro-tips-area hide"></div> 
  <!--弹出层-成功添加到购物车 --> 

  <!-- 20130913-弹出层-购买延保-end --> 
  <form action="https://www.vmall.com/product/241920871.html#" id="gotourl" method="get"></form> 
 </body>
</html>
<script>
  // 数量增加修改
  function quantity(obj,m){
    //获取商品id
    $('.attr2').each(function(){
      if($(this).hasClass('selected')){
        gid = $(this).attr('data-attrid');
      }
    });

    switch(m){
      case '+':
        var sum = parseInt($('#pro-quantity').val()) + 1;
        // 控制最大不能超过库存
        $.get('/goodsadd',{sum:sum,gid:gid},function(data){
          if(data == 'success'){
            $(obj).removeClass('disabled');
            $('#pro-quantity').val(sum);
            if($('#pro-quantity').val() > 1){
              $('#pro-quantity-minus').removeClass('disabled');
            }
          }else {
            $(obj).addClass('disabled');
          }
        });
        break;
      case '-':
        var sum = parseInt($('#pro-quantity').val()) - 1;
        if(sum == 0){
          $(obj).addClass('disabled');
        }else {
          $(obj).removeClass('disabled');
          $('#pro-quantity').val(sum);
          $('#pro-quantity-plus').removeClass('disabled');
        } 
        break;
    }
  }     

  //添加购物车
  function addCart(){
    //获取商品id
    $('.attr2').each(function(){
      if($(this).hasClass('selected')){
        gid = $(this).attr('data-attrid');
      }
    });
    //获取商品数量
    var quantity = $('#pro-quantity').val();
    //Ajax
    $.get('/addshopcart',{gid:gid,quantity:quantity},function(data){
      if(data == 'success'){
        //添加成功
        var s = confirm('加入购物车成功,是否去结算');
        if(s){
          //跳转到购物车页面
          location.href="/homeshopcart";
        }
      }
    });

  }
</script>
@endsection