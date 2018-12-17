@extends('Home.HomePublic.public')
@section('title','商城首页')
@section('content')
  <div class="header"> 
   <div class="layout"> 
    <div class="left"> 
     <!-- 2017-02-15-logo-start --> 
     <div class="logo">
      <a href="#" title="Vmall.com - 华为商城"><img src="/static/homes/index/SXppnESYv4K11DBxDFc2.png" alt="Vmall.com - 华为商城" /></a>
     </div> 
     <!-- 2017-02-15-logo-end --> 
     <!-- 2017-06-19-导航-start --> 
     <div class="naver"> 
      <ul class="clearfix"> 
       <ul id="naver-list"> 
        <li class="img" id="huawei"> <a href="#" target="_blank"> <img src="/static/homes/index/GrguiqzHENWVYHYWyHBM.png" /> </a> </li> 
        <li class="img" id="honor"> <a href="#" target="_blank"> <img src="/static/homes/index/AHwTUFRpDSQyuIZ7tLJz.png" /> </a> </li> 
        <li id="huawei"> <a href="#" target="_blank"> <span>Mate 20系列</span> </a> </li> 
        <li id="honor"> <a href="#" target="_blank"> <span>荣耀10</span> </a> </li> 
        <li id="huawei"> <a href="#" target="_blank"> <span>P20系列</span> </a> </li> 
        <li id="honor"> <a href="#" target="_blank"> <span>荣耀V10</span> </a> </li> 
       </ul> 
       <script>
	$(function () {
		$('#naver-list li').hover(function () {
			$(this).addClass('hover');
		},function () {
			$(this).removeClass('hover');
		});

	});
</script> 
      </ul> 
     </div> 
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
       </div> 
      </div> 
      <div id="search-history" class="search-bar-history hide"> 
       <p> <label>历史记录</label><span id="cleanUp" class="search-history-btn">清除</span> </p> 
       <ul id="search-history-list"></ul> 
      </div> 
      <div id="AutocompleteContainter_3b7f3" "="" style="top: 184px; left: 1230.5px;">
       <div class="autocomplete-w1">
        <div class="autocomplete" id="Autocomplete_3b7f3" style="display: none; width: 290px; max-height: 400px;"></div>
       </div>
      </div>
     </div> 
     <!-- 2017-02-15-搜索条-end --> 
    </div> 
   </div> 
  </div>
  <!-- 2017-02-15-头部-end --> 
  
  <!-- 导航 --> 
  <div class="naver-main"> 
   <div class="layout"> 
    <!-- 20130909-导航-start --> 
    <!-- 20130909-导航-end --> 
    <!-- 20140823-分类-start --> 
    <div class="category category-index" id="category-block"> 
     <!-- 20170223-分类-start --> 
     <div class="b"> 
      <ol class="category-list"> 
       <!-- 鼠标悬停增加ClassName： hover --> 
       @foreach($cate as $value)
       <li id="zxnav_0" class="category-item "> <input id="zxnav_0_flag" type="hidden" autocomplete="off" value="no" /> <input id="zxnav_0_name" type="hidden" autocomplete="off" value="{{$value->name}}" /> 
        <div class="category-info"> 
         <div class="category-title"> 
          <a href="/homegoodslist/{{$value->id}}" target="_blank"> <span>{{$value->name}}</span> </a> 
         </div> 
         <a href="/homegoodslist/{{$value->dev[0]->id}}" target="_blank"> <span>{{$value->dev[0]->name}}</span> </a> 
         <a href="/homegoodslist/{{$value->dev[1]->id}}" target="_blank"> <span>{{$value->dev[1]->name}}</span> </a> 
         <i class=""></i> 
        </div> 
        <div class="category-panels category-panels-3 none"> 
         <ul class="subcate-list clearfix">
         @foreach($value->dev as $row)
          <li class="subcate-item"> <input id="child_name" type="hidden" value="{{$row->name}}" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="/homegoodslist/{{$row->id}}" target="_blank"> <img src="{{$row->pic}}" /> <span>{{$row->name}}</span> </a> </li>
         @endforeach
         </ul>
         <!-- <ul class="subcate-list clearfix">
          <li class="subcate-item"> <input id="child_name" type="hidden" value="HUAWEI nova系列" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-277" target="_blank"> <img src="/static/homes/index/J2QE96ECQK8Xw0mIaefD.png" /> <span>HUAWEI nova系列</span> </a> </li>
          <li class="subcate-item"> <input id="child_name" type="hidden" value="HUAWEI 麦芒系列" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-81" target="_blank"> <img src="/static/homes/index/usfhLiCRcgRXM4azHFxx.png" /> <span>HUAWEI 麦芒系列</span> </a> </li>
          <li class="subcate-item"> <input id="child_name" type="hidden" value="华为畅享系列" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-275" target="_blank"> <img src="/static/homes/index/rA6iuzqgYG8yBiYy16gs.png" /> <span>华为畅享系列</span> </a> </li>
          <li class="subcate-item"> <input id="child_name" type="hidden" value="移动4G+专区" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-38" target="_blank"> <img src="/static/homes/index/KJrjsCp9tWK5cb69sqPZ.png" /> <span>移动4G+专区</span> </a> </li>
         </ul> -->
         <ul class="subcate-list clearfix">
          <li class="subcate-btn"> <a href="/homegoodslist/{{$value->id}}" target="_blank">查看全部</a> </li>
         </ul>
        </div> </li> 
        @endforeach
      </ol> 
     </div> 
     <!-- 20170223-分类-end --> 
     <!-- 20140823-分类-end --> 
    </div> 
   </div> 
  </div> 
  <script>
(function () {
	// 重置首页导航为纵向排列
    $('.category-panels').each(function () {
        var panel = $(this);
        var olis = panel.find('ul.subcate-list li');
        var cols = Math.ceil(olis.length / 4);
        panel.children().remove();
        panel.addClass('category-panels-'+cols);
        for (var i = 0; i < cols; i++) {
            var newUl = $('<ul class="subcate-list clearfix"></ul>');
            var j = i * 4;
            var max = j + 4;
            if (max > olis.length) {
                max = olis.length;
            }
            for (j; j < max; j++) {
                newUl.append($(olis[j]));
            }
            panel.append(newUl);
        }
    });

    //获取二级菜单元素
    var $panels = $(".category-panels");
    //判断鼠标是否进入二级菜单
    var mouseInPanels = false;
    //用于存储鼠标移动过程中,开始位置和结束位置的数组
    var mouseTrach = [];
    var activeRow,  //选中的一级菜单
        activeMenu, //对应的右侧二级菜单
        timer;      //延时器
   
    $panels.live("mouseenter",function() {
            mouseInPanels = true;
        }).live("mouseleave",function() {
            mouseInPanels = false;
        });
    
    var moveHandler = function(e) {
        mouseTrach.push({
            x: e.pageX,
            y: e.pageY
        });
        if (mouseTrach.length > 2) {
            mouseTrach.shift();
        }
    };
    $('.category-item').each(function(){
        $(this).find('.category-panels').addClass('none');
    })
    $('.category-list').live('mouseenter',function(){
        $(document).bind("mousemove", moveHandler);
    }).live('mouseleave',function(){
        if (activeRow) {
            activeRow.removeClass("active");
            activeRow.parent().removeClass("active");
            activeRow = null;
        }
        if (activeMenu) {
            activeMenu.addClass("none");
            activeMenu = null;
        }
        $(document).unbind("mousemove", moveHandler);
    });
    //鼠标进入每个li
    $('.category-item ').live('mouseenter',function(e){
        if (!activeRow) {
            activeRow = $(this).addClass("active");
            $(this).parent().addClass("active");
            activeMenu = $(this).find('.category-panels');
            activeMenu.removeClass("none");
        }
        if (timer) {
            clearTimeout(timer);
        }
        //当前鼠标位置坐标
        var curMouse = mouseTrach[mouseTrach.length - 1];
        //前面鼠标位置坐标
        var prevMouse = mouseTrach[mouseTrach.length - 2];
        var delay = needDelay($('.category-list'), curMouse, prevMouse);
        if (delay) {
            var $this = $(this);
            timer = setTimeout(function() {
                if (mouseInPanels) {
                    return
                }
                if (activeRow&&activeRow.hasClass('active')) {
                	activeRow.removeClass("active");
                	activeRow.parent().removeClass("active");
                }
                if (activeMenu) {
                	activeMenu.addClass("none");
                }
                activeRow = $this;
                activeRow.addClass("active");
                activeRow.parent().addClass("active");
                activeMenu = $this.find('.category-panels');
                activeMenu.removeClass("none");
                timer = null;
            },500);
        } else {
            var prevActiveRow = activeRow;
            var prevActiveMenu = activeMenu;
            activeRow =$(this);
            activeMenu = $(this).find('.category-panels');
            prevActiveRow.removeClass("active");
            prevActiveRow.parent().removeClass("active");
            prevActiveMenu.addClass("none");
			activeRow.addClass("active");
			activeRow.parent().addClass("active");
            activeMenu.removeClass("none");
        }
    });
	
	//所有分类显示隐藏控制
	var isIndex =  true ,
		categoryBlock = gid('category-block');
		
	if(isIndex) return;
	
	$("#category-block").hover(function(){
		$(this).addClass("category-hover");
	},function(){
		$(this).removeClass("category-hover");
	});
	
	/*categoryBlock.onmouseover = function () {
		categoryBlock.className = 'category category-hover';
	};
	categoryBlock.onmouseout = function () {
		categoryBlock.className = 'category';
	};*/
	
}());

/**
*功能：给鼠标移动到category-list li上面的时候，记得给他多添加一个hover类样式
*目的是兼容ie6,以及调整二级分类的弹出框的位置。
*@author 李峰
*/
/**
$(function(){
	$(".category-item").hover(function(){
		$(this).addClass("hover");
		//1.二级分类的top值
		var childrenTop = $(this).offset().top;
		//2.一级分类的top值
		var parentTop = $(".category-list").offset().top;
		//3.二级分类到一级分类顶部的距离
		var top = childrenTop - parentTop;
		//4.二级分类的弹出层的高度
		var childrenHeight = $(this).find(".category-panels").innerHeight();
		//5.一级分类容器的总高度
		var totalHeight = $(".category-list").height();
		alert("childrenTop:"+childrenTop+";parentTop:"+parentTop+";top:"+top+";childrenHeight:"+childrenHeight+";totalHeight:"+totalHeight) ;

		//6.如果二级分类.category-panels的内容高度大于总容量totalHeight,那么.category-panels置顶，然后多余的自动往下延续
		//如果二级分类childrenHeight内容高度(childrenHeight + top )大于totalHeight,那么.category-panels往上移动childrenHeight + top -totalHeight
		if((top + childrenHeight) > totalHeight)
		{
			if(childrenHeight > totalHeight)
			{
				$(this).find(".category-panels").css("top",-top);
			}else{
				//上移动
				var topX = (childrenHeight+top) - totalHeight;
				$(this).find(".category-panels").css("top",-topX);
				
			}
			
		}
		
	},function(){
		$(this).removeClass("hover");
	});

});
 */
 
 //显示导航右侧商品数据
/* function showProList(id){
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
 		new ec.ajax().get({
			url :  "/querySbomInfo.json?skuIdsStr="+skuIds,
			async:true,//使用异步的Ajax请求
			timeout : 10000,
			successFunction : function(json){
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
								price = "暂无报价";
							} else {
								price = "&yen;" + sbomInfo.price;
							}
							//一级分类导航名称
							var oneNavName=$("#"+id+"_name").val();
							var onShowName="分类导航_"+oneNavName+"_"+sbomInfo.sbomCode;
							//var clickContent="_paq.push(['trackLink','"+onShowName+"', 'link', ' ']);ec.code.addAnalytics({hicloud:true});";
							html += '<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)" >';
							html += '     <a class="thumb" target="_blank" href="'+urlPath+'" onclick = "pushNavIndexProImgMsg(\''+skuId+'\',\''+urlPath+'\')">';
							html += '         <p class="grid-img">';
							html += '         	<img alt="" src="' + imgPath + '">';
							html += '          </p>';
							html += '          <div class="grid-title">' + proName + '</div>';
							html += '          <p class="grid-price">' + price + '</p>';
							//html += '          <p class="grid-tips"><img src="" alt=""></p>';
							html += '       </a>';
							html += '  </li>';
					    }
					}
					$("#"+id+"_prolist").html(html);
				}
				
			}
		}); 
 	}
 };
 */
function vector(a, b) {
    return {
        x: b.x - a.x,
        y: b.y - a.y
    }
}

function vectorPro(v1, v2) {
    return v1.x * v2.y - v1.y * v2.x;
}

/**
 *功能:判断两个值是否同正负
 *入参:两个number类型的值
 *出参:布尔值,同正负返回true,反之false
*/ 
function sameSign(a, b) {
    return (a ^ b) >= 0;
}

/**
 *功能:判断p是否在三角形abc内
 *入参:p, a, b, c;p是需要判断的点，a,b,c是三角形的三个点，如果p在三角形内部，那么pa,pb,pc两个向量之间的差乘应该符号相同。（同正负）
 *出参:布尔值。如果p在a,b,c构成的三角形内,返回true,反之false
*/

function isPoint(p, a, b, c) {
    var pa = vector(p, a);
    var pb = vector(p, b);
    var pc = vector(p, c);

    var t1 = vectorPro(pa, pb);
    var t2 = vectorPro(pb, pc);
    var t3 = vectorPro(pc, pa);

    return sameSign(t1, t2) && sameSign(t2, t3);
}

/**
 *功能:判断是正常切换一级菜单，还是需要延时
 *入参:鼠标滑入的DOM元素
 *出参:布尔值。需要延时返回true,正常切换一级菜单返回false
*/ 
function needDelay(ele, curMouse, prevMouse) {
    if (!curMouse || !prevMouse) {
        return
    }
    var offset = ele.offset();
    var topleft = {
        x: offset.left+240,
        y: offset.top
    };
    var leftbottom = {
        x: offset.left+240,
        y: offset.top + ele.height()
    };
    return isPoint(curMouse, prevMouse, topleft, leftbottom);
}

 
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

//商品分类纵向导航数据上报
function pushNavIndexProMsg(name,url)
{
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
		ec.account.dapPushMsg("300010501",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300010501", "link", value]);
}
//商品分类纵向导航数据上报(图片)
function pushNavIndexProImgMsg(skuId,url)
{
	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"SKUID":skuId,
  			"URL":url,
  			"click":"1"
  			}
		};
		ec.account.dapPushMsg("300010601",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300010601", "link", value]);
}

$("#category-block .category-info").find("a").click(function(){
	var name = $(this).find("span").html().trim();
	var url = $(this).attr("href");
	pushNavIndexProMsg(name,url);
});

$("#category-block .category-panels.relative").find("a").each(function(){$(this).bind('click','a',function(){
	var name = "";
	var src = "";
	var url = this.href;
	if($(this).hasClass("clearfix"))
	{
		name = $(this).find(".fl").html().trim();
		pushNavIndexProMsg(name,url);
	}
	if($(this).parent().attr("class")=="subcate-item")
	{
		name = $(this).find("span").html().trim();
		pushNavIndexProMsg(name,url);
	}
})});


</script>
  <style>
@charset "UTF-8";html{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;color:#3a3a3a;background:#fff}html,body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td,hr,button,article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}audio,canvas,video{display:inline-block;*display:inline;*zoom:1}body,button,input,select,textarea{font:12px/1.5 "Helvetica Neue",Helvetica,Arial,"Microsoft Yahei","Hiragino Sans GB","Heiti SC","WenQuanYi Micro Hei",sans-serif}input,select,textarea{font-size:100%}table{border-collapse:collapse;border-spacing:0}th{text-align:inherit}fieldset,img,a img{border:0 none}iframe{display:block}abbr,acronym{border:0;font-variant:normal}del{text-decoration:line-through}address,caption,cite,code,dfn,em,th,var{font-style:normal;font-weight:400}ol,ul{list-style:none}caption,th{text-align:left}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:400}q:before,q:after{content:''}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}ins,a{text-decoration:none;color:#3a3a3a}a{cursor:pointer}a:hover{text-decoration:none}:focus{outline:0}.layout:before,.layout:after{content:"";display:table}.layout:after{clear:both}.layout{*zoom:1;width:1200px;margin:0 auto}.clearfix:before,.clearfix:after{content:" ";display:table}.clearfix:after{clear:both}.clearfix{*zoom:1}.fl,.left,.left-area{float:left}.fr,.right,.right-area{float:right}.hide,.hidden{display:none}.relative{position:relative}.home-recommend-goods{width:1200px}.home-recommend-goods .h{position:relative}.home-recommend-goods .h .title{color:#3a3a3a;font-size:22px;margin:0;padding:30px 0 15px 0;line-height:1}.button-top-banner-min,.button-top-banner-close{background:transparent url(https://res.vmallres.com/20181122/images/echannel/icon/icon1.png) scroll no-repeat}.user-head span{background:url(https://res.vmallres.com/20181122/images/echannel/index/icon12.png) no-repeat}.hot-board-index .mask span{background:url(https://res.vmallres.com/20181122/images/echannel/bg/bg-slide.png) no-repeat}.minicart-pro-empty .icon-minicart,.hungBar a,.shortcut .dropdown-code .code-info span,.i-mall-huaban li .p-img span,.minicart-pro-item .p-choose i,.search-bar .search-bar-form .button,.search-bar .search-bar-key a .icon-fire,.hot-board-index .ec-slider-middle .button-slider-prev,.hot-board-index .ec-slider-middle .button-slider-next,.home-recommend-goods .special-title .title,.shortcut .s-dropdown .icon-minicart:before,.shortcut .dropdown-navs .dropdown-navs-icon:before,.i-mall-prompt .user-info .user-info-detail a:before,.minicart-pro-item .p-tags:before{background:url(https://res.vmallres.com/20181122/images/echannel/icon/icon-header.png) no-repeat}.top-banner a:hover{text-decoration:none}.top-banner-img{width:1200px;margin:0 auto;position:relative}.top-banner-img img{vertical-align:top}.button-top-banner-max,.button-top-banner-min,.button-top-banner-close{position:absolute;right:0;top:10px;width:24px;height:24px;color:#FFF;overflow:hidden}.button-top-banner-max{font-size:16px;font-weight:700;line-height:36px}.button-top-banner-min{text-indent:100%;white-space:nowrap;background-position:0 -409px}.button-top-banner-close{text-indent:100%;white-space:nowrap;background-position:0 -385px}.hungBar{position:fixed;right:6px;bottom:20px;height:166px;z-index:500}.hungBar .hungBar-content{width:38px;padding:1px 0}.hungBar a{width:38px;height:41px;display:block;position:relative;background-color:rgba(255,255,255,0.9)}.hungBar a span{position:absolute;background:#ca141d;color:#fff;height:18px;min-width:14px;padding:0 2px;border-radius:10px;text-align:center;line-height:18px;left:19px;font-size:12px;top:2px}.hungBar a i{position:absolute;display:none;width:76px;height:36px;line-height:36px;text-align:center;color:#777;background:#fff;border-radius:2px;box-shadow:0 2px 36px 0 rgba(0,0,0,0.07);left:-84px;top:0;font-style:normal}.hungBar a i:after{content:"";width:0;height:0;display:block;border-top:5px solid transparent;border-bottom:5px solid transparent;border-left:6px solid #fff;position:absolute;top:13px;right:-6px}.hungBar a:hover i{display:block}.hungBar a.hungBar-cart{background-position:-215px -122px}.hungBar a.hungBar-cart:hover{background-position:-253px -122px}.hungBar a.hungBar-service{background-position:-291px -122px}.hungBar a.hungBar-service:hover{background-position:-329px -122px}.hungBar a.hungBar-feedback{background-position:-367px -122px}.hungBar a.hungBar-feedback:hover{background-position:-405px -122px}.hungBar a.hungBar-top{background-position:-443px -122px}.hungBar a.hungBar-top:hover{background-position:-481px -122px}.user-head{width:90px;height:90px;position:relative}.user-head span{width:20px;height:20px;display:block;position:absolute;z-index:20;left:3px;bottom:1px}.user-head .icon-vip-level-0{background-position:0 0}.user-head .icon-vip-level-1{background-position:0 -23px}.user-head .icon-vip-level-2{background-position:0 -46px}.user-head .icon-vip-level-3{background-position:0 -69px}.user-head .icon-vip-level-4{background-position:0 -92px}.user-head .icon-vip-level-5{background-position:0 -115px}.user-head .user-img-shade{width:90px;height:90px;position:absolute;top:0;left:0;z-index:9}.user-head .user-img{width:90px;height:90px;position:absolute;top:0;left:0;z-index:10}.user-head .user-img img{width:70px;height:70px;border-radius:50%;position:absolute;top:10px;left:10px}.user-canvas{width:90px;height:90px;border-radius:50%;position:absolute;top:0;left:0}.user-canvas .canvas-bg{width:90px;height:90px;display:block}.user-canvas .canvas-left,.user-canvas .canvas-right{width:45px;height:90px;overflow:hidden;position:relative;float:left;z-index:4;background:#dfdfdf}.user-canvas .canvas-left{border-radius:45px 0 0 45px}.user-canvas .canvas-right{border-radius:0 45px 45px 0}.user-canvas .canvas-left div,.user-canvas .canvas-right div{content:"";position:absolute;display:block;width:45px;height:90px;border-radius:45px 0 0 45px;background:#f05c20;background:-webkit-gradient(linear,0 0,right 0,from(#f05c20),to(#f58555));background:-moz-linear-gradient(left,#f05c20,#f58555);transform:rotate(-180deg);transform-origin:right center;-ms-transform:rotate(-180deg);-ms-transform-origin:right center;-webkit-transform:rotate(-180deg);-webkit-transform-origin:right center;-moz-transform:rotate(-180deg);-moz-transform-origin:right center;-o-transform:rotate(-180deg);-o-transform-origin:right center}.user-canvas .canvas-right div{border-radius:0 45px 45px 0;background:-webkit-gradient(linear,0 0,right 0,from(#f58555),to(#f05c20));background:-moz-linear-gradient(left,#f58555,#f05c20);transform:rotate(-180deg);transform-origin:left center;-ms-transform:rotate(-180deg);-ms-transform-origin:left center;-webkit-transform:rotate(-180deg);-webkit-transform-origin:left center;-moz-transform:rotate(-180deg);-moz-transform-origin:left center;-o-transform:rotate(-180deg);-o-transform-origin:left center}.shortcut{min-width:1200px;height:40px;line-height:40px;background-color:#f9f9f9;font-family:"Helvetica Neue",Helvetica,Arial,"Microsoft Yahei","Hiragino Sans GB","Heiti SC","WenQuanYi Micro Hei",sans-serif;position:relative;z-index:411}.shortcut a{color:#a4a4a4}.shortcut a:hover{color:#ca151d}.shortcut li{float:left;padding:0 8px;position:relative}.shortcut li:before{content:"";width:1px;height:10px;display:block;position:absolute;top:15px;left:0;background:#d3d3d3}.shortcut li:first-child{padding-left:0}.shortcut li:first-child:before{display:none}.shortcut .s-sub{float:left}.shortcut .s-main{float:right;margin-right:-18px}.shortcut .s-main li:first-child+li:before{display:none}.shortcut .s-main-no-minicart{margin-right:-9px}.shortcut .s-dropdown{position:relative;z-index:310;margin:0 -9px;height:40px}.shortcut .s-dropdown .icon-minicart{position:relative;padding-left:18px}.shortcut .s-dropdown .icon-minicart:before{content:"";width:14px;height:14px;display:block;position:absolute;top:-1px;left:0}.shortcut .s-dropdown .icon-dropdown{position:relative;padding-right:10px}.shortcut .s-dropdown .icon-dropdown:before{content:"";width:0;height:0;display:block;border-left:4px solid transparent;border-right:4px solid transparent;border-top:4px solid #777;position:absolute;top:5px;right:-5px}.shortcut .s-dropdown .h{position:relative;padding:0 12px 0 10px;height:40px}.shortcut .s-dropdown:hover{margin:0 -9px;box-shadow:0 2px 36px 0 rgba(0,0,0,0.07);z-index:311}.shortcut .s-dropdown:hover .icon-dropdown:before{border-bottom:4px solid #cb242b;border-top:0}.shortcut .s-dropdown:hover .h{background:#fff;z-index:100}.shortcut .s-dropdown:hover .h a{position:relative;color:#cb242b}.shortcut .s-dropdown:hover .b{display:block}.shortcut .s-dropdown .b{display:none;position:absolute;top:40px;right:0;background:#fff;box-shadow:0 2px 36px 0 rgba(0,0,0,0.07);border-radius:8px 0 8px 8px}.shortcut .s-dropdown-link .b{border-radius:0 0 8px 8px}.shortcut .s-dropdown-minicart{background:#f2f2f2}.shortcut .dropdown-more{width:80px;padding:3px 0 10px 0;text-align:center;line-height:32px}.shortcut .dropdown-more a{color:#3a3a3a}.shortcut .dropdown-more a:hover{color:#ca151d}.shortcut .dropdown-code{padding:20px 0 20px 0;width:244px}.shortcut .dropdown-code .dropdown-code-detail{padding-left:24px}.shortcut .dropdown-code .dropdown-code-detail:first-child{padding-bottom:20px;border-bottom:1px solid #e5e5e5;margin-bottom:20px}.shortcut .dropdown-code .dropdown-code-detail:last-child a{cursor:default}.shortcut .dropdown-code .code-img{width:90px;height:90px;float:left;margin-right:12px}.shortcut .dropdown-code .code-info{float:left;line-height:18px}.shortcut .dropdown-code .code-info h2{font-size:14px;font-weight:bold;margin-bottom:2px}.shortcut .dropdown-code .code-info p{color:#777}.shortcut .dropdown-code .code-info span{width:32px;height:32px;display:block;margin-top:5px}.shortcut .dropdown-code .code-info span.icon-andrid{background-position:-484px 0}.shortcut .dropdown-code .code-info span.icon-wechat{background-position:-518px 0}.shortcut .dropdown-code .code-info .red{color:#cb242b!important;line-height:16px}.shortcut .dropdown-minicart{color:#3a3a3a}.shortcut .dropdown-i-mall{width:340px;color:#3a3a3a}.shortcut .dropdown-navs{width:893px;line-height:20px;color:#777}.shortcut .dropdown-navs .dropdown-navs-icon{float:left;width:50px;text-align:center;margin:37px 46px 0 49px;color:#777}.shortcut .dropdown-navs .dropdown-navs-icon:before{content:"";width:50px;height:50px;display:block;margin-bottom:3px;background-position:-41px 0}.shortcut .dropdown-navs dl{float:left;width:185px;margin-top:22px;margin-bottom:20px}.shortcut .dropdown-navs dl dt{font-size:16px;color:#333;font-weight:bold;margin-bottom:8px}.shortcut .dropdown-navs dl dd{*zoom:1}.shortcut .dropdown-navs dl dd:before,.shortcut .dropdown-navs dl dd:after{content:"";display:table}.shortcut .dropdown-navs dl dd:after{clear:both}.shortcut .dropdown-navs dl .item{float:left;width:80px;margin-bottom:4px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.shortcut .dropdown-navs dl a{color:#777}.shortcut .dropdown-navs dl a:hover{color:#cb242b}.i-mall-prompt{padding:14px 20px 0 16px;color:#3a3a3a}.i-mall-prompt .user-info{padding-left:20px;width:188px;overflow:hidden}.i-mall-prompt .user-info .user-info-name{font-size:16px}.i-mall-prompt .user-info .user-info-detail{margin-top:13px;width:196px}.i-mall-prompt .user-info .user-info-detail a{width:88px;height:28px;line-height:28px;text-align:center;font-size:12px;border:1px solid #eaeaea;float:left;margin-right:8px;position:relative;text-indent:25px;color:#717171}.i-mall-prompt .user-info .user-info-detail a:before{content:"";width:20px;height:16px;display:block;position:absolute;top:6px;left:6px}.i-mall-prompt .user-info .user-info-detail .icon-realname:before{background-position:-23px -77px}.i-mall-prompt .user-info .user-info-detail .icon-realname.disabled:before{background-position:0 -77px}.i-mall-prompt .user-info .user-info-detail .icon-mail:before{background-position:0 -96px}.i-mall-uc{width:340px;padding:32px 0 0;overflow:hidden;line-height:1}.i-mall-uc dl{overflow:hidden}.i-mall-uc dt,.i-mall-uc dd{float:left}.i-mall-uc dt{width:300px;font-size:14px;border-bottom:1px solid #eaeaea;padding:0 20px 13px}.i-mall-uc .i-mall-uc-con{width:300px;margin:0 auto;border-bottom:1px solid #eaeaea}.i-mall-uc .i-mall-uc-con dl{width:319px;padding:16px 0 12px}.i-mall-uc .i-mall-uc-con a{color:#3a3a3a}.i-mall-uc .i-mall-uc-con dd{border-left:1px solid #e4e4e4;padding:0 13px}.i-mall-uc .i-mall-uc-con dd:first-child{border-left:none;padding-left:0}.i-mall-uc dt a{font-size:12px;color:#a4a4a4}.i-mall-uc dt a:hover,.i-mall-uc dd a:hover{text-decoration:none;color:#ca151d}.i-mall-uc li{float:left;width:98px;line-height:14px;border-right:1px solid #eee;margin-bottom:26px;overflow:hidden;text-align:center}.i-mall-huaban{text-align:center;padding:9px 0 8px}.i-mall-huaban ul{margin-left:2px}.i-mall-huaban li{float:left;height:108px;border-left:1px solid #eaeaea;width:99px;padding:0 6px}.i-mall-huaban li:before{display:none}.i-mall-huaban li:first-child{border-left:none;padding:0 6px}.i-mall-huaban li .p-img{margin:0 auto;height:58px;width:58px}.i-mall-huaban li .p-img span{width:50px;height:50px;display:block}.i-mall-huaban li .p-img span.img01{background-position:-375px -75px}.i-mall-huaban li .p-img span.img02{background-position:-435px -75px}.i-mall-huaban li .p-img span.img03{background-position:-494px -75px}.i-mall-huaban li .p-price,.i-mall-huaban li .p-dec{line-height:1;font-size:12px}.i-mall-huaban li .p-dec{color:#a4a4a4}.i-mall-huaban li .p-price{color:#717171;padding:3px 0 10px;color:#3a3a3a;font-size:16px}.i-out{height:39px;line-height:39px;background:#f4f4f4;text-align:center;border-radius:0 0 8px 8px}.i-out a{color:#717171}.i-out a:hover{color:#ca151d}.shortcut .s-dropdown .minicart-pro-empty .icon-minicart:before{display:none}.shortcut .minicart-pro-empty .icon-minicart{padding-left:0}.minicart-pro-empty{width:460px;text-align:center;color:#3a3a3a;padding:20px 0;line-height:1;font-size:14px;color:#a4a4a4}.minicart-pro-empty a{width:148px;height:38px;line-height:38px;display:block;margin:0 auto;color:#ca141d;border-radius:2px;border:1px solid #a4a4a4;color:#3a3a3a;margin-top:20px}.minicart-pro-empty a:hover{border-color:#ca141d;color:#ca141d}.minicart-pro-empty .icon-minicart{width:100px;height:100px;display:block;margin:0 auto;margin-bottom:16px;background-position:0 -166px}.minicart-pro-empty-index{padding:50px 0 50px}.minicart-pro-empty-index a{display:none}.minicart-pro-list{width:460px;margin-bottom:60px;min-height:168px}.minicart-pro-list li{padding:20px 20px 0 20px;float:none}.minicart-pro-list li:first-child{padding:20px 20px 0 20px}.minicart-pro-list li:before{display:none}.minicart-pro-list-scroll{width:477px;max-height:458px;overflow-x:hidden;overflow-y:auto}.minicart-pro-item{vertical-align:top;position:relative;border-bottom:1px solid #eaeaea}.minicart-pro-item .pro-info{padding-bottom:20px}.minicart-pro-item .pro-tags{position:absolute;top:-25px;left:-1px;width:50px;height:22px;border-radius:0 0 16px 0;color:#666;font-size:14px;text-align:center;background:#f6f6f6;border:1px solid #eaeaea}.minicart-pro-item .pro-tips{top:66px;left:42px;font-size:12px;color:#ca151d;width:60px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.minicart-pro-item .pro-tips:hover{width:auto}.minicart-pro-item .p-choose{float:left;width:14px;height:14px;margin:23px 22px 0 12px}.minicart-pro-item .p-choose i{display:block;width:14px;height:14px;cursor:pointer}.minicart-pro-item .p-choose i.icon-choose{background-position:0 -129px}.minicart-pro-item .p-choose i.icon-choose-normal{background-position:-18px -129px}.minicart-pro-item .p-img{float:left;width:64px;height:64px}.minicart-pro-item .p-img img{vertical-align:top;width:64px;height:64px}.minicart-pro-item .p-name{float:left;width:298px;padding:0 0 0 9px}.minicart-pro-item .p-name a{display:block;font-size:14px;line-height:22px;color:#3a3a3a;width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.minicart-pro-item .p-name a:hover{text-decoration:none;color:#ca151d}.minicart-pro-item .p-dec{float:left;width:298px;padding:0 0 0 9px;height:20px;line-height:20px;color:#a4a4a4;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.minicart-pro-item .p-status{float:left;width:298px;padding-left:9px}.minicart-pro-item .p-price{float:right;line-height:19px;font-size:14px;text-align:right}.minicart-pro-item .p-price s{color:#a4a4a4;display:inline-block}.minicart-pro-item .p-price b{font-weight:400;color:#333;margin-left:7px;margin-right:7px;display:inline-block;min-width:64px}.minicart-pro-item .p-price em{color:#3a3a3a;margin:0 2px 0 0}.minicart-pro-item .p-price span{color:#3a3a3a}.minicart-pro-item .p-price strong{font-weight:normal;min-width:32px;display:inline-block}.minicart-pro-item .p-tags{float:left;line-height:19px;color:#ca141d;position:relative;padding-left:17px}.minicart-pro-item .p-tags:before{content:"";width:12px;height:12px;display:block;position:absolute;top:4px;left:0;background-position:-28px -99px}.minicart-pro-item .p-pack{margin-top:6px;margin-bottom:10px;padding-top:4px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;position:relative;padding-left:50px;line-height:16px}.minicart-pro-item .p-pack .p-mini-tag-suit{display:block;border-radius:2px;background:#c29a70;color:#fff;width:40px;height:16px;line-height:16px;text-align:center;position:absolute;left:0;top:4px}.minicart-pro-item .p-pack a{color:#3a3a3a;cursor:default}.minicart-pro-item .p-pack a:hover{color:#3a3a3a!important}.minicart-pro-item .p-pack span.disabled{color:#a4a4a4}.minicart-pro-item .p-pack.disabled,.minicart-pro-item .p-pack.disabled a{color:#a4a4a4}.minicart-pro-item .p-pack.disabled:hover,.minicart-pro-item .p-pack.disabled a:hover{color:#a4a4a4!important}.minicart-pro-item .pro-other{margin-top:5px;margin-bottom:10px}.minicart-pro-item .pro-other li{overflow:hidden;*zoom:1;padding:0;margin-top:5px}.minicart-pro-item .pro-other li:before,.minicart-pro-item .pro-other li:after{content:"";display:table}.minicart-pro-item .pro-other li:after{clear:both}.minicart-pro-item .pro-other li.disabled .p-title{color:#a4a4a4}.minicart-pro-item .pro-other li.disabled .p-title span{color:#e58a8f;border-color:#e58a8f}.minicart-pro-item .pro-other li.disabled .p-price b,.minicart-pro-item .pro-other li.disabled .p-price em,.minicart-pro-item .pro-other li.disabled .p-price span{color:#a4a4a4}.minicart-pro-item .pro-other .p-title{color:#3a3a3a;position:relative;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;width:210px;padding-left:50px;line-height:16px;float:left}.minicart-pro-item .pro-other .p-title span{height:14px;width:38px;display:block;border-radius:2px;line-height:14px;background:#fff;border:1px solid #ca141d;color:#ca141d;text-align:center;position:absolute;left:0;top:0}.minicart-pro-item .pro-other .p-title-wide{width:368px}.minicart-pro-item .pro-other .p-title-wide a{color:#3a3a3a;cursor:default}.minicart-pro-item .pro-other .p-price{float:right;line-height:16px;font-size:12px}.minicart-pro-item .pro-other .p-add{width:180px}.minicart-pro-item.disabled .p-name a{color:#a4a4a4}.minicart-pro-item.disabled .p-name a:hover{color:#a4a4a4!important}.minicart-pro-item.disabled .p-price b,.minicart-pro-item.disabled .p-price em,.minicart-pro-item.disabled .p-price span{color:#a4a4a4}.minicart-pro-item.disabled .pro-other .p-title{color:#a4a4a4}.minicart-pro-item.disabled .pro-other .p-title span{color:#e58a8f;border-color:#e58a8f}.minicart-pro-item.disabled .p-pack{color:#a4a4a4}.minicart-pro-item.disabled .p-pack a{color:#a4a4a4}.minicart-pro-item.disabled .p-pack a:hover{color:#a4a4a4!important}.minicart-pro-item.disabled i.icon-choose,.minicart-pro-item.disabled i.icon-choose-normal{background-position:-18px -115px;cursor:not-allowed}.minicart-pro-settleup{background:#f0f0f0;position:absolute;bottom:0;height:60px;width:100%;border-radius:0 0 8px 8px}.minicart-pro-settleup p{color:#3a3a3a;font-size:14px;float:left;margin-left:23px;margin-top:10px}.minicart-pro-settleup span{display:block;line-height:1.2}.minicart-pro-settleup b{color:#ca141d;font-size:24px;font-weight:normal;margin-right:12px}.minicart-pro-settleup s{color:#3a3a3a;font-size:14px;position:relative;top:-4px}.minicart-pro-settleup .button-minicart{float:right;color:#FFF;background-color:#ca151e;font-size:14px;width:150px;height:40px;text-align:center;line-height:40px;border-radius:2px;margin:10px 20px 0 0}.minicart-pro-settleup .button-minicart:hover{background:#d5444b;color:#fff}.minicart-pro-settleup .button-minicart.disabled{background:#e5aeb0;cursor:not-allowed}.header{min-width:1200px;height:41px;padding:18px 0 15px 0;background:#fff;position:relative;font-family:"Helvetica Neue",Helvetica,Arial,"Microsoft Yahei","Hiragino Sans GB","Heiti SC","WenQuanYi Micro Hei",sans-serif;line-height:1.5;box-shadow:0 0 46px rgba(0,0,0,0.03)}.order-header{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}.logo{float:left;margin-right:34px}.logo img{height:36px}.logo a{float:left}.naver{float:left;max-width:560px;height:40px;overflow:hidden}.naver li{float:left;margin-right:24px}.naver li.img{margin-top:7px}.naver li.img a.current:before,.naver li.img a:hover:before{display:none}.naver li.img img{display:block;height:24px}.naver a{font-size:16px;color:#333;position:relative;line-height:40px;display:block}.naver a.current,.naver a:hover{color:#ca141d}.naver a.current:before,.naver a:hover:before{content:"";height:2px;width:100%;display:block;background:#ca141d;position:absolute;bottom:2px}.header .right .naver li{margin-left:30px;margin-right:0}.search-bar{margin-top:5px;background:#fff;border-radius:16px 16px 0 0}.search-bar .search-bar-form{line-height:1;width:320px;height:30px;background:#fff;border:1px solid #fff;border-radius:15px;position:relative;z-index:310}.search-bar .search-bar-form .text{border:0;color:#3a3a3a;width:290px;text-indent:15px;height:30px;line-height:30px;padding-right:30px;background:#f5f5f5;border-radius:15px;float:left}.search-bar .search-bar-form .text::-ms-clear{display:none}.search-bar .search-bar-form .button{width:30px;height:30px;border-radius:15px;cursor:pointer;border:0;text-indent:-9999px;overflow:hidden;position:absolute;right:1px;top:0;background-position:0 -21px;background-color:#666}.search-bar .search-bar-form.hover{border:1px solid #e5e5e5;border-bottom:0;border-radius:15px 15px 0 0}.search-bar .search-bar-key{position:absolute;max-width:260px;right:31px;bottom:6px;z-index:311;white-space:nowrap;overflow:hidden}.search-bar .search-bar-key a{color:#999;font-size:12px;margin-right:14px}.search-bar .search-bar-key a .icon-fire{width:17px;height:19px;display:inline-block;background-position:0 -56px;position:relative;top:4px;margin-left:2px}.search-bar .search-bar-key a:hover{color:#333}.search-bar-history{background:#fff;width:320px;border:1px solid #e5e5e5;border-radius:0 0 15px 15px;border-top:0;position:absolute;top:31px;line-height:26px;z-index:10;box-shadow:0 2px 36px 0 rgba(0,0,0,0.07);z-index:306}.search-bar-history p{text-indent:15px;height:30px;line-height:30px}.search-bar-history label{font-size:13px;color:#888}.search-bar-history .search-history-btn{float:right;margin-right:17px;cursor:pointer;font-size:13px;color:#888}.search-bar-history ul{text-indent:15px}.search-bar-history ul li{padding-right:17px}.search-bar-history ul li a{display:block;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;font-size:13px;color:#333;height:30px;line-height:30px}.search-bar-history ul li:hover{background:#ebebeb}.search-bar-history ul li:last-child{border-radius:0 0 15px 15px}.autocomplete-w1{position:absolute;top:31px;left:0;z-index:306}.autocomplete-w1 .autocomplete{background:#fff;box-shadow:0 2px 36px 0 rgba(0,0,0,0.07);width:320px!important;border:1px solid #e5e5e5;border-radius:0 0 15px 15px;border-top:0}.autocomplete-w1 .autocomplete div{width:288px;height:30px;line-height:30px;white-space:nowrap;overflow:hidden;color:#333;padding:0 17px 0 15px;text-overflow:ellipsis}.autocomplete-w1 .autocomplete div:last-child{border-radius:0 0 15px 15px}.autocomplete-w1 .autocomplete div:hover{background:#ebebeb}.autocomplete-w1 .autocomplete .selected{background:#fafafa;cursor:pointer}.autocomplete-w1 .autocomplete strong{font-weight:400;color:#ff6a6e}.autocomplete-w1 .autocomplete em{color:#ff6a6e}.hot-board-index{position:relative}.hot-board-index .mask{text-align:center;width:100%;min-width:1200px;height:72px;display:block;position:absolute;bottom:0;z-index:1}.hot-board-index .mask span{width:100%;min-width:1200px;height:72px;display:block;background-size:100% 72px}.hot-board-index .ec-slider{height:550px!important}.hot-board-index .ec-slider>ul{position:absolute;height:550px!important}.hot-board-index .ec-slider>ul li{height:550px!important}.hot-board-index .ec-slider-middle{width:1200px;margin:0 auto;position:relative;height:0}.hot-board-index .ec-slider-middle .ec-slider-nav-1{bottom:auto;left:auto;right:0;top:448px;text-align:right}.hot-board-index .ec-slider-middle .ec-slider-nav-1 span{margin-left:7px}.hot-board-index .ec-slider-middle .button-slider-prev,.hot-board-index .ec-slider-middle .button-slider-next{margin-top:0;width:80px;height:80px;position:relative;display:block!important}.hot-board-index .ec-slider-middle .button-slider-prev:before,.hot-board-index .ec-slider-middle .button-slider-next:before{display:none}.hot-board-index .ec-slider-middle .button-slider-prev{left:204px;top:199px;background-position:-340px 0}.hot-board-index .ec-slider-middle .button-slider-prev:hover{background-position:-260px 0}.hot-board-index .ec-slider-middle .button-slider-next{left:1132px;top:119px;background-position:-100px 0}.hot-board-index .ec-slider-middle .button-slider-next:hover{background-position:-180px 0}.naver-main{min-width:1200px;background-color:#FFF}.naver-main .layout{position:relative;z-index:410}.category{position:absolute;left:0;top:18px;width:200px}.category .category-list{position:relative;height:440px;box-shadow:0 0 46px rgba(0,0,0,0.03)}.category .category-list.active .category-item:first-child{border-radius:10px 0 0 0}.category .category-list.active .category-item:last-child{border-radius:0 0 0 10px}.category .category-item{background:rgba(255,255,255,0.9)}.category .category-item:after{content:"";width:150px;height:1px;background:rgba(0,0,0,0.06);display:block;margin-left:25px}.category .category-item:first-child{border-radius:10px 10px 0 0;height:74px}.category .category-item:first-child .category-info{height:48px;border-radius:10px 0 0 0}.category .category-item:first-child.active .category-info:before{display:none}.category .category-item:first-child.active .category-info:after{height:73px}.category .category-item:last-child{border-radius:0 0 10px 10px}.category .category-item:last-child:after{display:none}.category .category-item:last-child .category-info{height:49px;border-radius:0 0 0 10px}.category .category-item:last-child.active .category-info:after{height:74px}.category .category-item.active{background:#fff}.category .category-item.active:after{background:#fff}.category .category-item.active .category-info{box-shadow:0 0 46px rgba(0,0,0,0.1);background:#fff}.category .category-item.active .category-info:before{content:"";width:200px;height:1px;background:#fff;position:absolute;top:-1px;left:0;z-index:2}.category .category-item.active .category-info:after{content:"";width:60px;height:72px;background:#fff;position:absolute;top:0;right:0;z-index:2;display:block}.category .category-item.active .category-info a{color:#333;position:relative;z-index:3}.category .category-item.active .category-title{position:relative;z-index:3}.category .category-item.active .category-title a{color:#d3454b}.category .category-info{padding:12px 0 13px 25px;margin:0;height:47px;position:relative}.category .category-info a{color:#a6a6a6;margin-right:9px;font-size:14px}.category .category-info .category-title{margin-bottom:2px}.category .category-info .category-title a{font-size:16px;color:#848484}.category .category-panels{position:absolute;left:200px;height:416px;max-width:1020px;background:#FFF;padding:24px 22px 0 28px;border-radius:0 10px 10px 0;box-shadow:0 0 46px rgba(0,0,0,0.1);top:0;z-index:1;overflow:hidden}.category .category-panels.none{display:none}.category .category-panels.category-panels-1{width:204px}.category .category-panels.category-panels-2{width:408px}.category .category-panels.category-panels-3{width:612px}.category .category-panels.category-panels-4{width:816px}.category .category-panels.category-panels-5{width:1020px}.category .category-panels.category-panels-6{width:1020px}.category .category-panels.category-panels-7{width:1020px}.category .category-panels.category-panels-8{width:1020px}.category .subcate-list{width:204px;margin:0;float:left}.category .subcate-list .subcate-item{float:left;margin-bottom:24px}.category .subcate-list .subcate-item a{display:block;width:204px;height:80px;font-size:14px;border-radius:10px;margin-right:0}.category .subcate-list .subcate-item a:hover{background:#f6f6f6}.category .subcate-list .subcate-item a img{width:56px;height:56px;float:left;margin:12px 6px 0 6px}.category .subcate-list .subcate-item a span{float:left;color:#777;font-size:13px;margin-top:30px;width:120px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.category .subcate-list .subcate-btn{float:left}.category .subcate-list .subcate-btn a{width:112px;height:42px;line-height:42px;margin-top:18px;margin-left:36px;border:1px solid #f2f2f2;border-radius:0 22px 22px 0;font-size:13px;color:#a7a7a7;display:block;position:relative;text-indent:34px}.category .subcate-list .subcate-btn a:before{content:"";width:42px;height:42px;background:#fff;border:1px solid #f2f2f2;display:block;border-radius:22px;position:absolute;top:-1px;left:-22px}.category .subcate-list .subcate-btn a:after{content:"";width:0;height:0;display:block;border-bottom:5px solid transparent;border-top:5px solid transparent;border-left:5px solid #c0c0c0;position:absolute;top:16px;left:-1px}.i-mall-prompt .w-name{width:72px;height:72px}.i-mall-prompt .w-name img{width:72px;height:72px;border-radius:50%}.i-mall-prompt .w-info{text-align:left;color:#999}.home-channel-main{position:relative;top:-72px;height:34px}.home-channel-list{background:#FFF;text-align:center;border-top:0 none;width:1200px;height:88px;border-radius:10px;box-shadow:0 2px 26px rgba(0,0,0,0.07);position:absolute;z-index:2}.home-channel-list li{float:left;position:relative}.home-channel-list li.s1{width:270px;height:55px;margin-top:17px;border-right:1px solid #ededed}.home-channel-list li.s1 .i-mall-prompt{padding:0;padding-left:26px;text-align:left}.home-channel-list li.s1 .i-mall-prompt .w-reg{margin-top:1px;font-size:14px;color:#999}.home-channel-list li.s1 .i-mall-prompt .w-reg a{color:#333}.home-channel-list li.s1 .i-mall-prompt .w-reg a:hover{color:#cb242b}.home-channel-list li.s1 .i-mall-prompt .w-reg a:first-child{margin-left:12px}.home-channel-list li.s1 .i-mall-prompt .w-reg span{color:#333}.home-channel-list li.s1 .i-mall-prompt .w-btn{margin-top:6px}.home-channel-list li.s1 .i-mall-prompt .w-btn a{display:inline-block;width:68px;height:22px;text-align:center;line-height:22px;background:#595454;color:#fde4b3;border-radius:5px;font-size:13px}.home-channel-list li.s1 .i-mall-prompt .w-btn a:hover{background:#333}.home-channel-list li.s1 .i-mall-prompt .w-btn a.new{width:66px;height:20px;line-height:20px;background:#fff;border:1px solid #e47b7f;color:#de5b60;margin-right:8px}.home-channel-list li.s1 .i-mall-prompt .w-btn a.new:hover{color:#fff;background:#de5b60;border-color:#de5b60}.home-channel-list li.s1 .i-mall-prompt .w-name{width:52px;height:52px;margin-right:17px}.home-channel-list li.s1 .i-mall-prompt .w-name img{width:52px;height:52px}.home-channel-list li.s1 .i-mall-prompt .w-info{margin-top:1px;font-size:14px}.home-channel-list li.s1 .i-mall-prompt .w-info a{color:#999;margin-left:5px}.home-channel-list li.s1 .i-mall-prompt .w-info a:hover{color:#cb242b;text-decoration:none}.home-channel-list li.s2{width:660px;margin-top:17px}.home-channel-list li.s2 ul{display:table;width:100%}.home-channel-list li.s2 li{text-align:center;display:table-cell;float:none;width:104px}.home-channel-list li.s2 li a{text-align:center;display:block;width:100%;min-width:48px;max-width:84px;margin:0 auto}.home-channel-list li.s2 li:hover .p-dec{color:#cb242b}.home-channel-list li.s2 li .p-img{width:40px;height:40px;margin:0 auto;overflow:hidden;position:relative}.home-channel-list li.s2 li .p-img img{position:absolute;width:auto;height:auto}.home-channel-list li.s2 li .p-img .img0{left:0}.home-channel-list li.s2 li .p-img .img1{left:-40px}.home-channel-list li.s2 li .p-img .img2{left:-80px}.home-channel-list li.s2 li .p-img .img3{left:-120px}.home-channel-list li.s2 li .p-img .img4{left:-160px}.home-channel-list li.s2 li .p-img .img5{left:-200px}.home-channel-list li.s2 li .p-dec{line-height:20px;width:100%;text-align:center;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;color:#777}.home-channel-img8 .s2 .img6{left:-240px}.home-channel-img8 .s2 .img7{left:-280px}.home-channel-img8 .s3 .img0{left:-320px}.home-channel-img8 .s3 .img1{left:-340px}.home-channel-img8 .s3 .img2{left:-360px}.home-channel-img7 .s2 .img6{left:-240px}.home-channel-img7 .s3 .img0{left:-280px}.home-channel-img7 .s3 .img1{left:-300px}.home-channel-img7 .s3 .img2{left:-320px}.home-channel-img6 .s2 .img6{left:-240px}.home-channel-img6 .s3 .img0{left:-240px}.home-channel-img6 .s3 .img1{left:-260px}.home-channel-img6 .s3 .img2{left:-280px}.home-channel-list li.s3{width:266px;height:88px;border-left:1px solid #ededed}.home-channel-list li.s3 .p-notice{height:43px;border-bottom:1px solid #e5e5e5}.home-channel-list li.s3 .icon-notice{display:block;font-size:14px;font-weight:bold;margin:10px 8px 0 17px}.home-channel-list li.s3 .icon-notice a{color:#777}.home-channel-list li.s3 .p-notice-content{height:43px;overflow:hidden;text-align:left;width:190px;position:relative}.home-channel-list li.s3 .p-notice-content li{width:190px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;height:43px;line-height:43px;font-size:12px}.home-channel-list li.s3 .p-notice-content li a{color:#6f6f6f}.home-channel-list li.s3 .p-notice-content li a:hover{text-decoration:none;color:#cb242b}.home-channel-list li.s3 .p-info li{height:42px;line-height:42px;width:89px}.home-channel-list li.s3 .p-info li:last-child{border:0;width:88px}.home-channel-list li.s3 .p-info li a{display:block;color:#666}.home-channel-list li.s3 .p-info li a span{margin-right:2px;display:inline-block;position:relative;width:20px;height:20px;top:5px;overflow:hidden}.home-channel-list li.s3 .p-info li a span img{width:auto;height:auto;position:absolute}.home-channel-list li.s3 .p-info li a:hover{color:#cb242b}.home-recommend-goods .special-title{padding-top:27px}.home-recommend-goods .special-title .title{width:108px;height:28px;float:left;padding:0!important;text-indent:-9999px;overflow:hidden;margin-right:30px;background-position:-219px -85px}.home-recommend-goods .special-title .time{color:#333;line-height:16px;float:left;font-size:13px;font-weight:bold;margin-top:1px}.home-recommend-goods .special-title .time .label{display:inline-block;position:relative;top:2px}.home-recommend-goods .special-title .time p{display:inline-block;margin-left:6px;font-size:28px;position:relative;top:5px;font-weight:normal}.home-promo-list{margin-bottom:13px}.home-promo-list li{float:left;margin-left:13px;width:290px;height:200px;border-radius:20px;-webkit-transition:all .2s linear 0s;-moz-transition:all .2s linear 0s;-ms-transition:all .2s linear 0s;-o-transition:all .2s linear 0s;transition:all .2s linear 0s}.home-promo-list li:first-child{margin:0 1px 0 0}.home-promo-list li:hover{box-shadow:0 12px 36px rgba(0,0,0,0.1)}.home-promo-list li a{display:block;height:200px}.home-promo-list img{width:290px;height:200px;border-radius:10px}.index-channel-floor .h .title{font-size:26px;color:#333;padding:27px 0 13px 0}
</style> 
  <!--双12 header增加背景图的 字体颜色改变--> 
  <!-- 20130904-热门板-start --> 
  <div class="hot-board hot-board-index"> 
   <!--ads start--> 
   <div class="ec-slider" id="index_slider" style="width: 100%; height: 550px;"> 
    <ul style="width: 100%; height: 550px;"> 
     <li id="firstImg" style="background: url('https://res.vmallres.com/pimages//sale/2018-12/8m9QINvYnQPiDDW0GsR0.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: block; position: absolute;" class="ec-slider-item">
      <div style="width:100%;" class="ec-slider-item-img">
       <a style="width:100%;height:550px;display:block;" href="https://sale.vmall.com/1212.html" target="_blank" onclick="pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/8m9QINvYnQPiDDW0GsR0.jpg','https://sale.vmall.com/1212.html','1')"></a>
      </div></li> 
     <li class="ec-slider-item" style="background: url(&quot;https://res.vmallres.com/pimages//sale/2018-12/OUyqwkqoyWw95hVxeZF1.jpg&quot;) 50% 0px no-repeat; width: 100%; height: 550px; position: absolute; display: none;">
      <div style="width:100%;" class="ec-slider-item-img">
       <a style="width:100%;height:550px;display:block;" href="https://sale.vmall.com/huawei.html" target="_blank" onclick="pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/OUyqwkqoyWw95hVxeZF1.jpg','https://sale.vmall.com/huawei.html',2);"></a>
      </div></li>
     
    </ul> 
    <div class="ec-slider-middle">
     <div class="ec-slider-nav-1">
      <span class=""></span>
      <span class=""></span>
      <span class=""></span>
      <span class=""></span>
      <span class=""></span>
      <span class=""></span>
      <span class=""></span>
      <span class="current"></span>
      <span></span>
     </div>
     <a class="button-slider-prev button-slider-prev-high" href="javascript:;"></a>
     <a class="button-slider-next button-slider-next-high" href="javascript:;"></a>
    </div>
   </div> 
   <ul></ul>
   <ul></ul> 
   <div class="mask">
    <span></span>
   </div> 
   <!--ads end--> 
  </div>
  <!-- 20130904-热门板-end --> 
  <!--//20161123 弹出框--> 
  <!-- 2017-02-15-菜单栏-start --> 
  <div class="home-channel-menu"> 
   <div class="layout relative"> 
    <div class="channel-floor-0 relative"> 
     <div class="h"> 
      <div class="home-channel-main"> 
       <ul class="home-channel-list clearfix home-channel-img6"> 
        <li class="fl s1">
        @if(session('username'))
         <div id="gg_login" class="i-mall-prompt clearfix"> 
          <div class="relative fl w-name"> 
           <a href="#" rel="nofollow" timetype="timestamp"> <img id="gg_customerPic" src="/static/homes/index/img_not_logged_in.png" alt="" /> </a> 
          </div> 
          <div class="fl"> 
           <div class="w-info">
            您好！
            <span id="gg_loginName">{{session('username')}}</span>。
           </div> 
           <div class="w-btn"> 
            <a id="oldPeople" style="display:none" class="new" href="#">消息中心</a> 
            <a id="newPeople" class="new" href="#" target="_blank">新人福利</a> 
            <a class="" href="#" target="_blank" >会员频道</a> 
           </div> 
          </div> 
         </div>
         @else 
         <div id="gg_unlogin" class="i-mall-prompt clearfix"> 
          <div class="relative fl w-name"> 
           <img src="/static/homes/index/img_not_logged_in.png" alt="" /> 
          </div> 
          <div class="fl"> 
           <div id="gg_login_url" class="w-reg">
             您好！请 
            <a href="/homelogin/create">登录</a> 
            <span>&nbsp;/&nbsp;</span> 
            <a href="/homeregister">注册</a> 
           </div> 
           <div class="w-btn"> 
            <a class="new" href="#" target="_blank">新人福利</a> 
            <a class="" href="#" target="_blank">会员频道</a> 
           </div> 
          </div> 
         </div>
        @endif
        </li> 
        <li class="fl s2"> 
         <ul class="clearfix"> 
          <li> <a href="#/" target="_blank"> 
            <div class="p-img"> 
             <img class="img0" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="企业购特惠" /> 
            </div> 
            <div class="p-dec">
             企业购特惠
            </div></a> </li> 
          <li> <a href="#e" target="_blank"> 
            <div class="p-img"> 
             <img class="img1" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="以旧换新" /> 
            </div> 
            <div class="p-dec">
             以旧换新
            </div></a> </li> 
          <li> <a href="#e" target="_blank"> 
            <div class="p-img"> 
             <img class="img2" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="会员领券" /> 
            </div> 
            <div class="p-dec">
             会员领券
            </div></a> </li> 
          <li> <a href="#l" target="_blank"> 
            <div class="p-img"> 
             <img class="img3" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="优选配件" /> 
            </div> 
            <div class="p-dec">
             优选配件
            </div></a> </li> 
          <li> <a href="#" target="_blank"> 
            <div class="p-img"> 
             <img class="img4" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="新品上市" /> 
            </div> 
            <div class="p-dec">
             新品上市
            </div></a> </li> 
          <li> <a href="#" target="_blank"> 
            <div class="p-img"> 
             <img class="img5" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="优享购" /> 
            </div> 
            <div class="p-dec">
             优享购
            </div></a> </li> 
         </ul> </li> 
        <li class="fl s3"> 
         <div class="p-notice clearfix"> 
          <div class="icon-notice fl"> 
           <a href="/homenotice" title="商城公告"> <span>公告</span> </a> 
          </div> 
          <!-- 公告开始 -->
          <div class="p-notice-content" id="notice"> 
           <ul class="p-notice-list fl" style="height: 215px; margin-top: -129px;"> 
           @foreach($notices as $row)
            <li><a href="/homenotice/{{$row->id}}" target="_blank">{{$row->title}}</a></li>
            @endforeach 
           </ul> 
          </div> 
          <!-- 公告结束 -->
         </div> 
         <div class="p-info"> 
          <ul class="clearfix"> 
           <li> <a href="#" target="_blank" rel="nofollow"> <span><img class="img0" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="优购码" /></span>优购码 </a> </li> 
           <li> <a href="#" target="_blank" rel="nofollow"> <span><img class="img1" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="实名认证" /></span>实名认证 </a> </li> 
           <li> <a href="#" target="_blank" rel="nofollow"> <span><img class="img2" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="补购保障" /></span>补购保障 </a> </li> 
          </ul> 
         </div> </li> 
       </ul> 
      </div> 
      <div class=""> 
       <ul class="home-promo-list clearfix"> 
        <li><a target="_blank" href="#" class="item"><img alt="荣耀" src="/static/homes/index/EuEf79zv7sVlkzmy4Cp5.png" /></a></li> 
        <li><a target="_blank" href="#" class="item"><img alt="华为" src="/static/homes/index/TYINij3F0AvmoQLINPCm.png" /></a></li> 
        <li><a target="_blank" href="#" class="item"><img alt="荣耀" src="/static/homes/index/Aj213tCMQtvhyx6PYF4J.png" /></a></li> 
        <li><a target="_blank" href="#" class="item"><img alt="华为" src="/static/homes/index/gBdo0tNWlFFTBKmbeOqA.png" /></a></li> 
       </ul> 
      </div> 
     </div> 
     <div class="b"> 
      <!--20170222 限时特惠 start--> 
      <!--20170222 限时特惠 end--> 
     </div> 
     <div class="b"> 
      <!--20170222 热销单品 start--> 
      <!-- 20170222-首页--热销单品-start --> 
      <div class="home-recommend-goods home-hot-goods index-channel-floor"> 
       <div class="h"> 
        <h2 class="title change-title">热销单品</h2> 
       </div> 
       <div class="b clearfix"> 
        <div class="span-232 fl"> 
         <ul class="grid-promo-list clearfix"> 
          <input type="hidden" id="contengID" value="0-6" /> 
          <li class="grid-items grid-items-sm"> <a class="thumb" href="#" target="_blank" > <img alt="" src="/static/homes/index/Yh5fuX848ga4dUHJqUV2.png" /> </a> </li> 
         </ul> 
        </div> 
        <div class="span-968 fl"> 
         <ul class="grid-list clearfix"> 
          <!--通过添加current 来实现 hover效果--> 
          @foreach($hotgoods as $v)
          <li class="grid-items "> <a class="thumb" href="/homegoodsinfo/{{$v->gid}}" target="_blank"> <p class="grid-img"> <img alt="{{$v->sdesc}}" src="{{$v->glogo}}" /> </p> 
            <div class="grid-title">
             {{$v->gname}}
            </div> <p class="grid-desc">幻彩渐变 享更多权益&nbsp; </p> <p class="grid-price">&yen;{{$v->gprice}}</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          @endforeach
         </ul> 
        </div> 
       </div> 
      </div> 
      <!-- 20170222-首页-热销单品-end --> 
      <script>
	function pushHomeHotGoodsAdvertMsg(adid,url)
	{
		var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"ADID":adid,
  			"URL":url,
  			"location":"1", 
  			"click":"1"
  			}
		};
		ec.account.dapPushMsg("300011301",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300011301", "link", value]);
	}
	
	function pushHomeHotGoodsMsg(obj,location,skuId)
	{
		var row;
		var column;
		if(location<6)
		{
			row = "1";
			column = location;
		}
		else if(location<10)
		{
			row = "2";
			column = location-4;
		}
		var url = obj.href;
		var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"SKUID":skuId ,
  			"URL":url,
  			"location":location, 
  			"row":row,
  			"column ":""+column,
  			"click":"1"
  			}
		};
		ec.account.dapPushMsg("300011401",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300011401", "link", value]);
	}
</script> 
      <!--20170222 热销单品 end--> 
     </div> 
     <div class="b"> 
      <!--20170223 精品推荐 start--> 
      <!-- 20170223-首页-精品推荐-start --> 
      <div class="home-recommend-goods index-channel-floor"> 
       <div class="h"> 
        <h2 class="title-1">精品推荐</h2> 
       </div> 
       <div class="b"> 
        <div id="goodsRecommend-recommend" class="goods-rolling swiper-container relative"> 
         <ul id="" class="grid-list swiper-wrapper clearfix" style="width: 10648px; height: 295px;"> 
          <li class="grid-items swiper-slide swiper-slide-visible swiper-slide-active"> <a class="thumb" href="#" target="_blank" > 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="#" alt="荣耀手表魔法系列（熔岩黑）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">时尚轻薄 强劲续航&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀手表魔法系列
            </div> <p class="grid-price">&yen;888</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">免息</span> </em> </p> </a> </li> 
         </ul> 
         <div class="grid-btn swiper-button-prev btn-prev disabled">
          <span></span>
         </div> 
         <div class="grid-btn swiper-button-next btn-next">
          <span></span>
         </div> 
        </div> 
       </div> 
      </div> 
      <!-- 20170223-首页-精品推荐-end --> 
      <!-- <script>
	function pushGoodsRecommendMsg(skuid,obj,location)
	{
		var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"SKUID":skuid ,
  			"URL":obj.href,  
  			"location":location,
  			"click":"1"
  			}
	};
	ec.account.dapPushMsg("300011501",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300011501", "link", value]);
	}
</script>  -->
      <!--20170223 精品推荐 end--> 
     </div> 
     <div></div> 
    </div> 
   </div> 
  </div> 
  <!-- 2017-02-15-菜单栏-end --> 
  <!-- 20160812 首页轮播图下方 end --> 
  <div class="channel-floor index-channel-floor"> 
   <div class="layout"> 
    <!-- 2017-02-15-banner-1200*110-start --> 
    <div class="home-banner"> 
     <!-- 2017-02-15-banner-图片轮换-start --> 
     <div class="home-banner-slideshow"> 
      <!-- 20130903-ad-图片轮换-start --> 
      <div class="banner-slideshow"> 
       <div class="hr-27"></div> 
       <div id="m-banner" class="ec-slider" style="width: 1200px; height: 120px;"> 
        <ul class="ec-slider-list" style="width: 1200px; height: 120px;"> 
         <li class="ec-slider-item" style="width: 1200px; height: 120px; position: absolute; display: none;">
          <div class="ec-slider-item-img">
           <a href="https://sale.vmall.com/hw-company.html" onclick="_paq.push(['trackLink','首页中间通栏广告第1位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/static/homes/index/clCNgq5AgKhwJbfmbq70.jpg" /></a>
          </div></li> 
         <li class="ec-slider-item" style="width: 1200px; height: 120px; position: absolute; display: none;">
          <div class="ec-slider-item-img">
           <a href="https://sale.vmall.com/honorsmart.html" onclick="_paq.push(['trackLink','首页中间通栏广告第2位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/static/homes/index/20181112222838612.jpg" /></a>
          </div></li> 
         <li class="ec-slider-item" style="width: 1200px; height: 120px; position: absolute; display: none;">
          <div class="ec-slider-item-img">
           <a href="https://sale.vmall.com/hwpj.html" onclick="_paq.push(['trackLink','首页中间通栏广告第3位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/static/homes/index/20181123094256369.jpg" /></a>
          </div></li> 
         <li class="ec-slider-item" style="width: 1200px; height: 120px; position: absolute;">
          <div class="ec-slider-item-img">
           <a href="https://sale.vmall.com/vmallsmarthome.html" onclick="_paq.push(['trackLink','首页中间通栏广告第4位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/static/homes/index/2018101511224361.jpg" /></a>
          </div></li> 
         <li class="ec-slider-item" style="width: 1200px; height: 120px; display: none; position: absolute;">
          <div class="ec-slider-item-img">
           <a href="https://www.vmall.com/product/10086789934944.html" onclick="_paq.push(['trackLink','首页中间通栏广告第5位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/static/homes/index/AuKg3CGqddQaeP6nvcTS.jpg" /></a>
          </div></li> 
         <li class="ec-slider-item" style="width: 1200px; height: 120px; display: none; position: absolute;">
          <div class="ec-slider-item-img">
           <a href="https://sale.vmall.com/smarthome.html" onclick="_paq.push(['trackLink','首页中间通栏广告第6位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/static/homes/index/0SMvRKQRvOwOVxIMfYnM.png" /></a>
          </div></li> 
        </ul> 
        <div class="ec-slider-middle">
         <div class="ec-slider-nav">
          <span class=""></span>
          <span class=""></span>
          <span class=""></span>
          <span class="current"></span>
          <span></span>
          <span></span>
         </div>
         <a class="button-slider-prev" href="javascript:;" style="display: none;"></a>
         <a class="button-slider-next" href="javascript:;" style="display: none;"></a>
        </div>
       </div> 
       <div class="hr-13"></div> 
       <script>
		ec.load("ec.slider", {
			loadType : "lazy",
			callback : function() { 
				$("#m-banner").slider({
					width: 1200, //　必须
					height: 120, //　必须
					style : 1, //　1显示分页，2只显示左右箭头,3两者都显示
					pause : 5000, 	//间隔时间
                    auto : true
				});
			}
		});
		
	</script> 
      </div> 
     </div>
     <!-- 2017-02-15-banner-图片轮换-end --> 
    </div>
    <!-- 2017-02-15-banner-1200*110-end --> 
   </div> 
  </div> 
  <div class="event-float-layout index-channel-floor" style="height: 329px; top: 308px;"> 
   <!--添加 fixed  position: fixed !important;top: 20px;z-index: 500;--> 
   <div class="event-float"> 
    <div> 
     <ul class="hover-list"> 
      <li><a data-id="0" href="javascript:;" onclick="pushMsg('手机');">手机</a></li>
      <li><a data-id="1" href="javascript:;" onclick="pushMsg('笔记本电脑');">笔记本电脑</a></li>
      <li><a data-id="2" href="javascript:;" onclick="pushMsg('精品平板');">精品平板</a></li>
      <li><a data-id="3" href="javascript:;" onclick="pushMsg('智能穿戴');">智能穿戴</a></li>
      <li><a data-id="4" href="javascript:;" onclick="pushMsg('智能家居');">智能家居</a></li>
      <li><a data-id="5" href="javascript:;" onclick="pushMsg('热销配件');">热销配件</a></li>
      <li><a data-id="6" href="javascript:;" onclick="pushMsg('品牌配件');">品牌配件</a></li>
     </ul> 
    </div> 
   </div> 
  </div> 
  <!-- 2017-05-12-HOME right side navigation -start --> 
  <!-- 2017-05-12-HOME right side navigation -end --> 
  <!-- 2017-02-15-HOME GOOGLIST-start --> 
  <div class="home-channel-container relative index-channel-floor "> 
   <!-- 初始值 --> 
   <!-- 分列式 march-past 计算显示商品数量--> 
   <!-- 商品是否为4的倍数 --> 
   <!-- 优先填充第一行数据 --> 
   <!-- 排除非4倍数的商品 --> 
   <!-- 非对称式 asym_array -->
   <!-- 手机开始 -->
   @foreach($cate as $row)
   <div class="layout" id="lc_617972"> 
    <div class="home-channel-floor"> 
     <div class="h"> 
      <h2 class="channel-title fl">{{$row->name}}</h2> 
      <ul class="channel-nav fl"> 
      @foreach($row->dev as $rows)
       <li><a href="/homegoodslist/{{$rows->id}}" target="_blank" >{{$rows->name}}</a></li> 
      @endforeach
      </ul> 
      <div class="channel-more fr">
       <span></span>
       <span></span>
       <span></span> 
       <a href="/homegoodslist/{{$row->id}}" target="_blank">查看更多</a> 
      </div> 
     </div> 
     <div class="b"> 
      <div class="goods-list"> 
       <ul class="grid-list clearfix"> 
        <li class="grid-items grid-items-md "> <a class="thumb" href="#" target="_blank" > <img alt="" src="/static/homes/index/mask.png" /> </a> </li>
        @foreach($goods as $g)
        @if($g->cid == $row->id)
        <li class="grid-items">
          <a class="thumb" href="/homegoodsinfo/{{$g->gid}}" target="_blank">
          <div class="grid-info">
            <p class="grid-img">
                  <img data-lazy-src="{{$g->glogo}}" alt="{{$g->gname}}" src="{{$g->glogo}}">
            </p>
            </div>
            <div class="grid-title">{{$g->gname}}</div>
            <!-- <p class="grid-desc">保时捷设计&nbsp;</p> -->
            <p class="grid-price">¥{{$g->gprice}}</p>
          </a>
        </li> 
        @endif
        @endforeach
       </ul> 
      </div> 
     </div> 
    </div> 
   </div>
    <!-- 手机结束 -->
   <!--20170222 中通 start--> 
   <div class="hr-27"></div>
   @endforeach 
 
   <!--20170222 中通 end--> 
   
  <div class="channel-floor index-channel-floor"> 
   <div class="layout"> 
    <!-- 20130903-ad-762*132-start -->
    <div class="ad fl">
     <a target="_blank" href="https://sale.vmall.com/welcome.html"><img src="/static/homes/index/2018091216573212.jpg" title="新人频道" style="float:none;" /></a>
    </div>
    <!-- 20130903-ad-762*132-end --> 
   </div> 
   <div class="hr-60"></div> 
  </div> 
  <!-- 2017-02-15-top-banner-start --> 
    <!-- 2017-02-15-top-banner-end --> 
  <!-- 2017-09-21-bottom-banner-start --> 
  <!-- 2017-09-21-bottom-banner-end --> 
  <script>
 // 改为异步调用
 // document.write('<script src="/serverTime.jsp?'+ new Date().getTime() +'"></' + 'script>');
</script> 
  <!-- <script>
ec.load("ajax");
ec.pkg("ec.index");
ec.index.clickHref = function (a) {
	window.open(a)
};
ec.index.sales = function (e) {};
ec.index.salesStatus = [];
ec.index.salesCallBack = function (h, k) {
	var f,
	d = [],
	b = new Date();
	b.setTime(ec.index.now.parseDate("yyyy-MM-dd HH:mm:ss"));
	var a = function (i, o) {
		var n = $(o),
		l = n.attr("data-skutype"),
		m = $(".channel-button", n);
		switch (parseInt(i, 10)) {
		case 0:
			m.html("\u9a6c\u4e0a\u5f00\u59cb").attr("title", "\u9a6c\u4e0a\u5f00\u59cb");
			if (l == 3 || l == 4) {
				m.attr("class", "channel-button-begin")
			}
			break;
		case 1:
			if (l == 3) {
				m.html("\u53bb\u770b\u770b").attr("title", "\u53bb\u770b\u770b")
			} else {
				m.html("\u7acb\u5373\u62a2\u8d2d").attr("title", "\u7acb\u5373\u62a2\u8d2d")
			}
			m.attr("class", "channel-button");
			break;
		case 2:
			m.html("\u6d3b\u52a8\u7ed3\u675f").attr("title", "\u6d3b\u52a8\u7ed3\u675f");
			if (l == 2 || l == 3) {
				m.attr("class", "channel-button-end")
			}
			break
		}
	};
	for (var c = 0; c < k.infoList.length; c += 1) {
		f = h[c];
		d = k.infoList[c];
		$(".channel-button", f).css("visibility", "");
		if (!d || !d.id) {
			continue
		}
		if (d.status == 1) {
			if (d.startTime && d.startTime >= b) {
				d.status = 0
			}
			if (d.endTime && d.endTime <= b) {
				d.status = 2
			}
		}
		a(d.status, f);
		if (d.startTime || d.endTime || d.limitAmount > 0) {
			$(".p-countdown", f).show()
		}
		if (d.limitAmount > 0) {
			$(".p-quantity", f).html("\u9650<b>" + d.limitAmount + "</b>\u53f0").show()
		}
		var e = parseFloat($(f).attr("data-price"), 10);
		if (d.price > 0) {
			if (parseInt(d.price) == d.price) {
				$(".p-sale-price span, .p-price span", f).html((d.price));
				if (parseInt(e) == e) {
					$(".economize", f).html(e - d.price)
				} else {
					$(".economize", f).html((e - d.price).toFixed(2))
				}
			} else {
				$(".p-sale-price span, .p-price span", f).html((d.price).toFixed(2));
				if (e - d.price == 0) {
					$(".economize", f).html("0")
				} else {
					$(".economize", f).html((e - d.price).toFixed(2))
				}
			}
		}
		$(".sale-quantity", f).html(d.saleAmount);
		if (d.status != 2 && (d.startTime || d.endTime)) {
			var g = ($(f).attr("data-block") == "slider") ? true : false,
			j = [];
			if (d.startTime) {
				j.push(new Date(d.startTime).format("yyyy-MM-dd HH:mm:ss"))
			}
			if (d.endTime) {
				j.push(new Date(d.endTime).format("yyyy-MM-dd HH:mm:ss"))
			}
			ec.index.salesStatus[c] = d.status;
			ec.ui.countdown($(".p-time", f), {
				html : "<b>" + (g ? "" : "\u5269\u4f59") + "</b><ins><i>{#hours}</i><s></s></ins><em>\u65f6</em><ins><i>{#minutes}</i><s></s></ins><em>\u5206</em><ins><i>{#seconds}</i><s></s></ins><em>\u79d2</em>",
				now : b,
				times : j,
				index : c,
				callback : function (i) {
					ec.index.salesStatus[i.index]++;
					a(ec.index.salesStatus[i.index], h[i.index])
				}
			})
		}
	}
};
ec.ready(function () {

	var skuids = $("#recommendSkuIds").val();
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"SKUID":skuids ,
  		"load":"1"
  		}
	}
	ec.account.dapPushMsg("300011501",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300011501", "link", value]);
	//首页加载上报
	ec.account.dapPushMsg('','','view');
	//_paq.push(['setTrackerUrl', openApiDomain + '/dap/report']);
	//_paq.push([ "trackPageView" ]);
	
	if (ec.account.isLogin()) {
		$("#cust_login_info").hide()
	}
	var a = ec.index.bigAd,
	g = ec.index.smallAd,
	f = ec.index.bigadShowTime,
	e,
	b,
	c = function () {
		var j = b.innerHeight();
		var i = e.innerHeight();
		var k = $("#search-bar-form").offset().top - i + j;
		var h = $("#search-bar-form").innerHeight();
		$(".autocomplete-w1").parent().hide();
		e.slideUp(1000, function () {
			if (g) {
				b.show()
			}
			$(".autocomplete-w1").parent().css({
				top : (k + h + "px")
			});
			$(".autocomplete-w1").parent().show();
			ec.index.SCROLL_GET = ec.index.getscrollLayout()
		});
		if (d) {
			clearTimeout(d)
		}
	},
	d;
	$("#top-banner-block").html(gid("top-banner").value);
	e = $("#top-banner-max");
	b = $("#top-banner-min");
	$("#top-banner-min-close").click(function () {
		$("#top-banner-block").hide();
		ec.index.SCROLL_GET = ec.index.getscrollLayout()
	});
	if (a) {
		e.show();
		ec.index.SCROLL_GET = ec.index.getscrollLayout();
		$("#top-banner-max-toggle").click(c);
		d = setTimeout(c, f)
	}
	if (g && !a) {
		b.show();
		ec.index.SCROLL_GET = ec.index.getscrollLayout()
	}
	if (!g && !a) {
		ec.index.SCROLL_GET = ec.index.getscrollLayout()
	}
	$("body .layout .channel-pro-item").hover(function () {
		$(this).addClass("pro-info-hover")
	}, function () {
		$(this).removeClass("pro-info-hover")
	});
	ec.index.sales("#main-sale-list .activity-list, #slider-sale-list .activity-list");
	ec.index.floatLayout()
});
ec.index.SCROLL_GET = {};
ec.index.getscrollLayout = function () {
	var b = $(".home-channel-container .layout .channel-title").closest('.layout'),
	d = $(".event-float-layout"),
	a = [],
	c = [];
	if (b.length == 0 || d.length == 0) {
		return false
	}
	b.each(function (e, f) {
		c.push($(this).offset().top);
		a.push($(this).outerHeight())
	});
	return {
		scrollListHeight : a,
		scrollList : c,
		top : d.offset().top
	}
};
ec.index.floatLayout = function () {
	var a = $(".event-float-layout");
	if (a.length == 0 || ec.index.SCROLL_GET === false) {
		return false
	}
	$("body").css({
		"min-width" : "1200px",
		"overflow-x" : "hidden"
	});
	var d = $(".event-float"),
	n = $(".hungBar-top"),
	h = $(".home-channel-container .layout .channel-title").closest('.layout'),
	p = $(".home-channel-container"),
	m = $(".home-channel-container .layout .channel-title"),
	l = "";
	a.find("ul").children().remove();
	function f(i) {
		return $("<span/>").text(i).html()
	}
	h.each(function (i, q) {
	var name = f(m.eq(i).text());
		l += '<li><a data-id="' + i + '" href="javascript:;" onclick = "pushMsg(\''+name+'\');">' + name + "</a></li>"
	});
	a.find("ul").append(l);
	a.bind("click", function (r) {
		var q = $(r.target);
		if (q[0].nodeName.toLowerCase() === "a") {
			var i = parseInt(q.attr("data-id"));
			q.parent().addClass("hover").siblings().removeClass("hover");
			$("html,body").animate({
				scrollTop : ec.index.SCROLL_GET.scrollList[i] + "px"
			}, 400)
		}
	});
	var o = a.outerHeight(),
	e = d.offset(),
	c = e.left,
	b = $(window).height(),
	k = b / 2 - (o / 2),
	j = h.length,
	g = true;
	a.css({
		height : j * 47 + "px",
		top : k + "px"
	});
	if (document.body.clientWidth <= 1400) {
		a.hide();
		g = false
	}
	if ($.browser.msie && parseInt($.browser.version) <= 9) {
		a.hide()
	}
	if ($.browser.msie && parseInt($.browser.version) <= 7) {
		g = false
	} else {
		$(window).scroll(function () {
			if (!g) {
				return
			}
			var i = $(window).scrollTop();
			if (i >= b) {
				n.fadeIn(80)
			} else {
				n.fadeOut(80)
			}
			if (i >= ec.index.SCROLL_GET.scrollList[0] - k) {
				a.css({
					top : k + "px"
				}).addClass("tool-Fixed");
				if ($.browser.msie && parseInt($.browser.version) >= 8 && parseInt($.browser.version) <= 9) {
					a.show()
				}
				$.each(ec.index.SCROLL_GET.scrollList, function (q, r) {
					if (i >= r - ec.index.SCROLL_GET.scrollListHeight[q] / 2) {
						a.find("li").eq(q).addClass("hover").siblings().removeClass("hover")
					}
				});
				if (i >= (ec.index.SCROLL_GET.scrollList[j - 1] + 200)) {
					a.removeClass("tool-Fixed");
					if ($.browser.msie && parseInt($.browser.version) >= 8 && parseInt($.browser.version) <= 9) {
						a.hide()
					}
				}
			} else {
				a.removeClass("tool-Fixed");
				if ($.browser.msie && parseInt($.browser.version) >= 8 && parseInt($.browser.version) <= 9) {
					a.hide()
				}
			}
		}, 200)
	}
	$(window).resize(function () {
		if (document.body.clientWidth > 1400) {
			a.show();
			g = true;
			return
		}
		a.hide();
		g = false;
		$("body").css({
			"min-width" : "1200px",
			"overflow-x" : "auto"
		})
	}, 200);
	if ($(window).scrollTop() > 0) {
		$(window).trigger("scroll")
	}
};
$(document).ready(function () {
  function initSwiper(xpath, num) {
    var jobj = $(xpath);
    var liNum =  jobj.find('.swiper-slide').length;
    if (liNum > num) {
      jobj.find('.swiper-button-next').removeClass('disabled');
    } else {
      jobj.find('.swiper-button-prev').addClass('disabled');
    	jobj.find('.swiper-button-next').addClass('disabled');
    }
    var mySwiper = new Swiper(xpath, {
      slidesPerView: num,
      slidesPerGroup: num
    });
    jobj.find('.btn-prev').click(function() {
      mySwiper.swipePrev();
    });
    jobj.find('.btn-next').click(function() {
      mySwiper.swipeNext();
    });
  }
  $('.goods-rolling').each(function() {
    var xpathId = $(this).attr('id');
    if (xpathId.startWith('goodsContent')) {
      initSwiper('#'+xpathId, 6);
    } else {
      initSwiper('#'+xpathId, 5);
    }
  });

	new Slider({
		objid : "#notice",
		listname : ".p-notice-list",
		shownum : 1,
		type : 2,
		autoplay : true
	}).init();
	var b = $(".bottomImage");
	if (b.attr("src")) {
		b.show().bind("click", function () {
			var f = $("#adsArearLink").val();
			if (f != null && f.trim() != "") {
				var g = window.open(f, "_blank");
				g.opener = null
			}
		})
	}
	
})


</script> -->
<script>
  var e = $(".grid-list .grid-items,.grid-promo-list .grid-items");
  e.hover(function () {
    $(this).addClass("current")
  }, function () {
    $(this).removeClass("current")
  });
</script>
  <script id="jsapi_loader3" loadtype="insert" type="text/javascript" src="/static/homes/index/jquery.form-2.49.js" charset="utf-8"></script>
  <script>(function(){var time = 0,el = document.getElementById('jsapi_loader3');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader3 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script>
  <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="/static/homes/index/ajax.js" charset="utf-8"></script>
  <script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script> 
  <script>
"use strict";var Slider=function(a){this.i=0;this.objid=a.objid||null;this.preclassname=a.preclassname||".btn-prev";this.nextclassname=a.nextclassname||".btn-next";this.listname=a.listname||".grid-list";this.listitem=a.listitem||"li";this.shownum=a.shownum||5.5;this.type=a.type||1;this.autoplay=a.autoplay||false};Slider.prototype={init:function(){var b=this;var a=b.set();if(b.autoplay){b.auto(a)}else{b.next(a);b.pre(a)}},auto:function(e){var d=this,c=null;$(d.listname).find(d.listitem).eq(0).clone().appendTo(d.listname);e.len+=1;var b=(e.itemHeight)*(e.len-1),a=function(){d.i++;if(Math.abs(parseInt(e.$grid.css("margin-top")))==b){e.$grid.css("margin-top",0);d.i=1}e.$grid.animate({"margin-top":"-"+(d.i*e.itemHeight*d.shownum)+"px"},500)};if(d.autoplay){c=setInterval(a,2000);e.$grid.hover(function(){clearInterval(c)},function(){c=setInterval(a,2000)})}},set:function(){var d=this,g=$(d.objid+" "+d.listitem),i=$(d.objid+" "+d.listname),h=$(d.objid+" "+d.preclassname),b=$(d.objid+" "+d.nextclassname),e=g.length,f=g.outerWidth(),a=g.outerHeight(),c=Math.ceil(e/d.shownum);switch(d.type){default:case 1:i.css("width",(f+1)*e+"px");break;case 2:i.css("height",(a)*e+"px");break}return{$item:g,$grid:i,$pre:h,$next:b,len:e,itemWidth:f,itemHeight:a,num:c}},pre:function(b){var a=this;b.$pre.bind("click",function(){if($(this).hasClass("disabled")){return}a.i--;if(a.i-1<0){b.$pre.addClass("disabled")}b.$next.removeClass("disabled");switch(a.type){default:case 1:b.$grid.animate({"margin-left":a.i==0?0:parseInt(b.$grid.css("margin-left"))+(b.itemWidth*a.shownum)+"px"},500);break;case 2:b.$grid.animate({"margin-top":a.i==0?0:parseInt(b.$grid.css("margin-top"))+(b.itemHeight*a.shownum)+"px"},500)}})},next:function(b){var a=this;b.$next.bind("click",function(){if($(this).hasClass("disabled")){return}a.i++;b.$pre.removeClass("disabled");switch(a.type){default:case 1:if(a.shownum>1){if(a.i+1==b.num){var d=parseInt(b.$grid.css("margin-left"));var c=(b.len-((a.i)*parseInt(a.shownum))-1/2)*b.itemWidth;b.$grid.animate({"margin-left":d-c+"px"},500)}else{b.$grid.animate({"margin-left":"-"+(a.i*b.itemWidth*parseInt(a.shownum))+"px"},500)}}else{b.$grid.animate({"margin-left":"-"+(a.i*b.itemWidth*a.shownum)+"px"},500)}break;case 2:b.$grid.animate({"margin-top":"-"+(a.i*b.itemHeight*a.shownum)+"px"},500);break}if(a.i+1==b.num){b.$next.addClass("disabled")}})}};
</script> 
  <script>
(function (_ec) {
//顶部banner
	_ec.bigAd = false;
	_ec.smallAd = true;
	_ec.bigadShowTime = 8000;
	_ec.now = new Date().format('yyyy-MM-dd HH:mm:ss');
	
	_ec.configNowTime = function(){
		if(_serverTime)
		{
			_ec.now = new Date(_serverTime).format('yyyy-MM-dd HH:mm:ss');
		}
	}
	
	//ec.load({
	//	url : "/serverTime.jsp?"+(new Date()).getTime(),
	//	type : "js",
	//	loadType:"lazy",
	//	onload : _ec.configNowTime
	//});
	
})(ec.index);


/*
 *
 * 首页左浮动位置
 *
 * */ 
(function($){
     function floatShow(){
        function getScrollTop(){
            var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
            return scrollTop;
        }
        if(getScrollTop()>1080){
	        if( $(".leftfloat")){
	           $(".leftfloat").addClass('leftfloat-show');
	           }
        }else{
	         if( $(".leftfloat")){
	           $(".leftfloat").removeClass('leftfloat-show');
	           }
        }
    };
    floatShow();
    
     
    
    window.onscroll=function(){
        floatShow();
    }; 
    function floatPosition() {
	    if( $(".leftfloat")){
	        var floatLeft =($(window).width()-1200)/2-$('.leftfloat').width()-10,
	            floatTop =$(window).height()/2 - $('.leftfloat').height()/2;
	        $(".leftfloat").css('left',floatLeft);
	        $(".leftfloat").css('top',floatTop);
	        setTimeout(floatPosition,100);
	        }
    };
    floatPosition();
    window.onresize=function(){
        floatPosition();
    }; 
    /*
     *
     * 首页底部浮动位置
     *
     * */ 
     var $top = $('.home-channel-container .layout').eq(0).offset().top,
     	 $height = $('.bottom-banner').height();
     $(window).scroll(function (){
     	var bottomV = $height*(-1);
     	$(".bottom-banner").css("bottom",bottomV+"px");
     	var scrollTop = $(window).scrollTop();
     	if(scrollTop>=($top-$height)){
        	$(".footer-container").css("padding-bottom",$height+"px");
     		$(".bottom-banner").addClass('bm-0');
     	}else{
     		 $(".bottom-banner").removeClass('bm-0');
           	 $(".footer-container").css("padding-bottom","0");
     	}
     })
    
})(jQuery);

//会员频道点击上报
function pushMemberMsg(name,url)
{
	if(url.indexOf("privilege")!=-1 || url.indexOf("welcome.html")!=-1){
	}else if(name.indexOf("注册")!=-1){
	}else{
		ec.account.afterLogin(function(){});
	}
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
	ec.account.dapPushMsg("300010801",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300010801", "link", value]);
}

//中通广告数据上报
function pushBannerMsg(adid,url)
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
	ec.account.dapPushMsg("300011601",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300011601", "link", value]);
	
}

$(".home-banner-slideshow").find("li").find("a").click(function(){
	var adid = $(this).find("img").attr("src");
	var url = $(this).attr("href");
	pushBannerMsg(adid,url);
});
//商品楼层更多点击上报
function pushFoolMsg(index,category,url){
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"index":index ,
  		"category":category,
  		"URL":url, 
  		"click":"1"
  		}
	};
	ec.account.dapPushMsg("300011703",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300011703", "link", value]);
}
//商品楼层商品楼层子分类点击上报
function pushFoolChildrenMsg(index,category,subCategory,url){
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"index":index ,
  		"category":category,
  		"subCategory":subCategory,
  		"URL":url, 
  		"click":"1"
  		}
	};
	ec.account.dapPushMsg("300011701",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300011701", "link", value]);
}

//底部通栏广告数据上报
$(".ad.fl").find("a").click(function(){
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"name":$(this).find("img").attr("src") ,
  		"URL":$(this).attr("href"),            
   		"click":"1"
   		}
	};
	ec.account.dapPushMsg("300011801",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300011801", "link", value]);
});

//楼层广告数据上报
function pushFoolAdvertMsg(index,category,adid,url)
{
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"index":index, 
  		"category":category,             
  		"ADID":adid,
  		"URL":url,
   		"click":"1"
   		}
	};
	ec.account.dapPushMsg("300011702",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300011702", "link", value]);
}

//右浮动导航数据上报
$(".hover-list").find("li").find("a").click(function(){
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"buttonName":$(this).html(), 
  		"click":"1"
  		}
	};
	ec.account.dapPushMsg("300010001",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300010001", "link", value]);
});

//首页弹窗数据上报
$("#web_popup_ads").find("a").click(function(){
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"ADID":$(this).find("img").attr("src"),
  		"URL":$(this).attr("href"),
  		"click":"1"
  		}
	};
	ec.account.dapPushMsg("300010002",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300010002", "link", value]);
});

//楼层商品点击上报
function pushFoolGoodsMsg(obj,location,index,category,skuId,type)
	{
		var row;
		var column;
		if(type == "13")
		{
			var num = (location)/4;
			row = parseInt(num)+1;
			if(row == 1 )
			{
					column = location+1;
			}
			else
			{
				column = parseInt((location)%4)+1;
			}
		}
		else if(type == "12")
		{
			row = parseInt((location-1)/4)+1;
			column = parseInt((location-1)%4)+1;
		}
		
		
		var url = obj.href;
		var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"index":index ,
  			"category":category,
  			"SKUID":skuId,
  			"URL" : url,
  			"row":""+row,
  			"column ":""+column,
  			"click":"1"
  			}
		};
		ec.account.dapPushMsg("300011704",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300011704", "link", value]);
	}
	
/*	$(".bottom-banner").find("a").click(function(){
		var url = $(this).attr("href");
		var src = $(this).find("img").attr("src");
		var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"ADID":src,
  			"URL":url,
  			"type":"1",
   			"click":"1"
   			}
		};
		ec.account.dapPushMsg("300010102",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300010102", "link", value]);
	});
*/	
	$(".top-banner-min").find("a").live("click",function(){
		var name = $(this).attr("title");
		var type;
		var src;
		var url;
		if($(this).attr("class")=="undefined"||$(this).attr("class")==""||$(this).attr("class")==null)
		{
			type = "1";
			src = $(this).find("img").attr("src");
			url = $(this).attr("href");
		}
		else
		{
			type = "2";
			src = "";
			url = "";
		}
		
		var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"ADID":src,
  			"URL":url,
  			"type":type,
   			"click":"1"
   			}
		};
		ec.account.dapPushMsg("300010102",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300010102", "link", value]);
	});
	
	$(".top-banner-max").find("a").live("click",function(){
		var name = $(this).attr("title");
		var type;
		var src;
		var url;
		if($(this).attr("class")=="undefined"||$(this).attr("class")==""||$(this).attr("class")==null)
		{
			type = "1";
			src = $(this).find("img").attr("src");
			url = $(this).attr("href");
		}
		else
		{
			type = "2";
			src = "";
			url = "";
		}
		
		var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"ADID":src,
  			"URL":url,
  			"type":type,
   			"click":"1"
   			}
		};
		ec.account.dapPushMsg("300010101",value,"click");
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300010101", "link", value]);
	});
	
	function pushMsg(name) {
	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"buttonName":name,
			"click":"1"
			}

	};
	ec.account.dapPushMsg("300010001",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300010001", "link", value]);
};

function pushMsgMenu1(location,key,name,url){
	ec.account.afterLogin(function(){window.location.href="https://www.vmall.com/priority";});
	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"name":name ,
  			"URL":url,
  			"location":location,
  			"click":"1"
  			}

	};
	ec.account.dapPushMsg(key,value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink",key, "link", value]);
};
function pushMsgMenu(location,key,name,url){
	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"name":name ,
  			"URL":url,
  			"location":location,
  			"click":"1"
  			}

	};
	ec.account.dapPushMsg(key,value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink",key, "link", value]);
};

function pushMsgNotice(location){
	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
  			"location":location,
  			"click":"1"
  			}

	};
	ec.account.dapPushMsg("300011001",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300011001", "link", value]);
};

$('.home-promo-list.clearfix li a').click(function(){
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"ADID":$(this).parent().find('img').attr("src"),
  		"URL":$(this).attr('href'),
  		"locaion":$(this).parent().index()+1,   
   		"click":"1"
   		}
	};
	ec.account.dapPushMsg("300011201",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300011201", "link", value]);
});
</script> 
@endsection