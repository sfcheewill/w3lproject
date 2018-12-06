@extends('Home.HomePublic.public')
@section('title','商城首页')
@section('content')
  <div class="header"> 
   <div class="layout"> 
    <div class="left"> 
     <!-- 2017-02-15-logo-start --> 
     <div class="logo">
      <a href="https://www.vmall.com/index.html" title="Vmall.com - 华为商城" onclick="pushIndexLogoClickMsg('https://res.vmallres.com/pimages//common/config/logo/SXppnESYv4K11DBxDFc2.png','https://www.vmall.com/index.html')"><img src="/static/homes/index/SXppnESYv4K11DBxDFc2.png" alt="Vmall.com - 华为商城" /></a>
     </div> 
     <!-- 2017-02-15-logo-end --> 
     <!-- 2017-06-19-导航-start --> 
     <div class="naver"> 
      <ul class="clearfix"> 
       <ul id="naver-list"> 
        <li class="img" id="huawei"> <a href="https://www.vmall.com/huawei" target="_blank"> <img src="/static/homes/index/GrguiqzHENWVYHYWyHBM.png" /> </a> </li> 
        <li class="img" id="honor"> <a href="https://www.vmall.com/honor" target="_blank"> <img src="/static/homes/index/AHwTUFRpDSQyuIZ7tLJz.png" /> </a> </li> 
        <li id="huawei"> <a href="https://sale.vmall.com/hwmate.html" target="_blank"> <span>Mate 20系列</span> </a> </li> 
        <li id="honor"> <a href="https://www.vmall.com/product/10086785341226.html" target="_blank"> <span>荣耀10</span> </a> </li> 
        <li id="huawei"> <a href="https://sale.vmall.com/p20.html" target="_blank"> <span>P20系列</span> </a> </li> 
        <li id="honor"> <a href="https://www.vmall.com/product/570379791.html" target="_blank"> <span>荣耀V10</span> </a> </li> 
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
        <a href="https://www.vmall.com/search?keyword=%E8%8D%A3%E8%80%80Magic2" target="_blank" rel="nofollow">荣耀Magic2</a> 
        <a href="https://www.vmall.com/search?keyword=HUAWEI%20Mate%2020" target="_blank" rel="nofollow">HUAWEI Mate 20</a> 
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
  <div id="searchHotWordList" style="display:none;">
   [{&quot;id&quot;:216,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-2,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:2,&quot;word&quot;:&quot;华为畅享9 Plus&quot;},{&quot;id&quot;:226,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-3,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:2,&quot;word&quot;:&quot;HUAWEI Mate 20&quot;},{&quot;id&quot;:47,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-6,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:3,&quot;word&quot;:&quot;荣耀Magic2&quot;},{&quot;id&quot;:195,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-10,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:3,&quot;word&quot;:&quot;荣耀10&quot;},{&quot;activityUrl&quot;:&quot;&quot;,&quot;fontColor&quot;:&quot;&quot;,&quot;id&quot;:250,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-11,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:3,&quot;word&quot;:&quot;荣耀10青春版&quot;},{&quot;id&quot;:83,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-24,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:1,&quot;word&quot;:&quot;荣耀Magic2&quot;},{&quot;id&quot;:224,&quot;inSearchBox&quot;:0,&quot;isActivityWords&quot;:0,&quot;priority&quot;:-25,&quot;saleChannel&quot;:1,&quot;tagType&quot;:0,&quot;type&quot;:1,&quot;word&quot;:&quot;HUAWEI Mate 20&quot;}]
  </div> 
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
    
    ec.ui.hover("#searchBar-area" , {captureInput : true });
   
});
ec.code.addService({showService : true , showTools : true , live800Url4Web : "http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&configID=10&location=B_002&chatfrom=web&channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af"});
function pushIndexLogoClickMsg(adid,url)
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
	ec.account.dapPushMsg("300010201",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300010201", "link", value]);
}

$(".naver .clearfix").find("li").find("a").click(function(){
	var url = $(this).attr("href");
	var name =  $(this).find("span").html();
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
	ec.account.dapPushMsg("300010301",value,"click");
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300010301", "link", value]);
});
</script>
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
          <a href="https://www.vmall.com/list-36" target="_blank"> <span>{{$value->name}}</span> </a> 
         </div> 
         <a href="https://www.vmall.com/list-75" target="_blank"> <span>{{$value->dev[0]->name}}</span> </a> 
         <a href="https://www.vmall.com/list-285" target="_blank"> <span>{{$value->dev[1]->name}}</span> </a> 
         <i class=""></i> 
        </div> 
        <div class="category-panels category-panels-3 none"> 
         <ul class="subcate-list clearfix">
         @foreach($value->dev as $row)
          <li class="subcate-item"> <input id="child_name" type="hidden" value="{{$row->name}}" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-75" target="_blank"> <img src="{{$row->pic}}" /> <span>{{$row->name}}</span> </a> </li>
          <!-- <li class="subcate-item"> <input id="child_name" type="hidden" value="HUAWEI P系列" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-285" target="_blank"> <img src="/static/homes/index/wvyCBUM6yXIUejmJsUkv.png" /> <span>HUAWEI P系列</span> </a> </li>
          <li class="subcate-item"> <input id="child_name" type="hidden" value="荣耀畅玩系列" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-77" target="_blank"> <img src="/static/homes/index/rPzFyIRhovqmj0xTAHRJ.png" /> <span>荣耀畅玩系列</span> </a> </li>
          <li class="subcate-item"> <input id="child_name" type="hidden" value="HUAWEI Mate系列" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-76" target="_blank"> <img src="/static/homes/index/1jCsRl3lu5mrqD4Oy37d.png" /> <span>HUAWEI Mate系列</span> </a> </li> -->
         @endforeach
         </ul>
         <!-- <ul class="subcate-list clearfix">
          <li class="subcate-item"> <input id="child_name" type="hidden" value="HUAWEI nova系列" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-277" target="_blank"> <img src="/static/homes/index/J2QE96ECQK8Xw0mIaefD.png" /> <span>HUAWEI nova系列</span> </a> </li>
          <li class="subcate-item"> <input id="child_name" type="hidden" value="HUAWEI 麦芒系列" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-81" target="_blank"> <img src="/static/homes/index/usfhLiCRcgRXM4azHFxx.png" /> <span>HUAWEI 麦芒系列</span> </a> </li>
          <li class="subcate-item"> <input id="child_name" type="hidden" value="华为畅享系列" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-275" target="_blank"> <img src="/static/homes/index/rA6iuzqgYG8yBiYy16gs.png" /> <span>华为畅享系列</span> </a> </li>
          <li class="subcate-item"> <input id="child_name" type="hidden" value="移动4G+专区" /> <input id="child_status" type="hidden" value="1" /> <input id="child_type" type="hidden" value="1" /> <a href="https://www.vmall.com/list-38" target="_blank"> <img src="/static/homes/index/KJrjsCp9tWK5cb69sqPZ.png" /> <span>移动4G+专区</span> </a> </li>
         </ul> -->
         <ul class="subcate-list clearfix">
          <li class="subcate-btn"> <a href="https://www.vmall.com/list-36" target="_blank">查看全部</a> </li>
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
     <li class="ec-slider-item" style="background: url(&quot;https://res.vmallres.com/pimages//sale/2018-12/uUqHHyg8sVzQ3HRBHA1v.jpg&quot;) 50% 0px no-repeat; width: 100%; height: 550px; position: absolute; display: none;">
      <div style="width:100%;" class="ec-slider-item-img">
       <a style="width:100%;height:550px;display:block;" href="https://sale.vmall.com/honor.html" target="_blank" onclick="pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/uUqHHyg8sVzQ3HRBHA1v.jpg','https://sale.vmall.com/honor.html',3);"></a>
      </div></li>
     <li class="ec-slider-item" style="background: url(&quot;https://res.vmallres.com/pimages//sale/2018-12/hiSSloQYN8wR9EzUzM5O.jpg&quot;) 50% 0px no-repeat; width: 100%; height: 550px; position: absolute; display: none;">
      <div style="width:100%;" class="ec-slider-item-img">
       <a style="width:100%;height:550px;display:block;" href="https://sale.vmall.com/hwmate.html" target="_blank" onclick="pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/hiSSloQYN8wR9EzUzM5O.jpg','https://sale.vmall.com/hwmate.html',4);"></a>
      </div></li>
     <li class="ec-slider-item" style="background: url(&quot;https://res.vmallres.com/pimages//sale/2018-11/YhY3VF1tUzVEebcQNkjf.jpg&quot;) 50% 0px no-repeat; width: 100%; height: 550px; position: absolute; display: none;">
      <div style="width:100%;" class="ec-slider-item-img">
       <a style="width:100%;height:550px;display:block;" href="https://www.vmall.com/product/10086785341226.html" target="_blank" onclick="pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-11/YhY3VF1tUzVEebcQNkjf.jpg','https://www.vmall.com/product/10086785341226.html',5);"></a>
      </div></li>
     <li class="ec-slider-item" style="background: url(&quot;https://res.vmallres.com/pimages//sale/2018-12/srKrqJymOeUtOZUAI22e.jpg&quot;) 50% 0px no-repeat; width: 100%; height: 550px; position: absolute; display: none;">
      <div style="width:100%;" class="ec-slider-item-img">
       <a style="width:100%;height:550px;display:block;" href="https://www.vmall.com/product/10086550008459.html" target="_blank" onclick="pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/srKrqJymOeUtOZUAI22e.jpg','https://www.vmall.com/product/10086550008459.html',6);"></a>
      </div></li>
     <li class="ec-slider-item" style="background: url(&quot;https://res.vmallres.com/pimages//sale/2018-12/2NZCFuofzcrfK8ByeVfS.jpg&quot;) 50% 0px no-repeat; width: 100%; height: 550px; position: absolute; display: none;">
      <div style="width:100%;" class="ec-slider-item-img">
       <a style="width:100%;height:550px;display:block;" href="https://www.vmall.com/product/10086576787089.html" target="_blank" onclick="pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/2NZCFuofzcrfK8ByeVfS.jpg','https://www.vmall.com/product/10086576787089.html',7);"></a>
      </div></li>
     <li class="ec-slider-item" style="background: url(&quot;https://res.vmallres.com/pimages//sale/2018-11/lIL2MA4RFUuGgpB8VI6B.jpg&quot;) 50% 0px no-repeat; width: 100%; height: 550px; position: absolute; display: list-item;">
      <div style="width:100%;" class="ec-slider-item-img">
       <a style="width:100%;height:550px;display:block;" href="https://www.vmall.com/product/10086789934944.html" target="_blank" onclick="pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-11/lIL2MA4RFUuGgpB8VI6B.jpg','https://www.vmall.com/product/10086789934944.html',8);"></a>
      </div></li>
     <li class="ec-slider-item" style="background: url('https://res.vmallres.com/pimages//sale/2018-12/0m61xlcYbj6k5rpc9Xec.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: none; position: absolute;">
      <div style="width:100%;" class="ec-slider-item-img">
       <a style="width:100%;height:550px;display:block;" href="https://sale.vmall.com/hwsmh.html" target="_blank" onclick="pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/0m61xlcYbj6k5rpc9Xec.jpg','https://sale.vmall.com/hwsmh.html',9);"></a>
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
   <script>
ec.ready(function(){
			    var imgLi=document.createElement("li");
				imgLi.setAttribute("class","ec-slider-item");
				imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-12/OUyqwkqoyWw95hVxeZF1.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: none; position: absolute;");
				imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:550px;display:block;\" href=\"https://sale.vmall.com/huawei.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/OUyqwkqoyWw95hVxeZF1.jpg','https://sale.vmall.com/huawei.html',2);\"></a></div>";
			   $("#index_slider").children("ul").append(imgLi);
			    var imgLi=document.createElement("li");
				imgLi.setAttribute("class","ec-slider-item");
				imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-12/uUqHHyg8sVzQ3HRBHA1v.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: none; position: absolute;");
				imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:550px;display:block;\" href=\"https://sale.vmall.com/honor.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/uUqHHyg8sVzQ3HRBHA1v.jpg','https://sale.vmall.com/honor.html',3);\"></a></div>";
			   $("#index_slider").children("ul").append(imgLi);
			    var imgLi=document.createElement("li");
				imgLi.setAttribute("class","ec-slider-item");
				imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-12/hiSSloQYN8wR9EzUzM5O.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: none; position: absolute;");
				imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:550px;display:block;\" href=\"https://sale.vmall.com/hwmate.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/hiSSloQYN8wR9EzUzM5O.jpg','https://sale.vmall.com/hwmate.html',4);\"></a></div>";
			   $("#index_slider").children("ul").append(imgLi);
			    var imgLi=document.createElement("li");
				imgLi.setAttribute("class","ec-slider-item");
				imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-11/YhY3VF1tUzVEebcQNkjf.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: none; position: absolute;");
				imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:550px;display:block;\" href=\"https://www.vmall.com/product/10086785341226.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-11/YhY3VF1tUzVEebcQNkjf.jpg','https://www.vmall.com/product/10086785341226.html',5);\"></a></div>";
			   $("#index_slider").children("ul").append(imgLi);
			    var imgLi=document.createElement("li");
				imgLi.setAttribute("class","ec-slider-item");
				imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-12/srKrqJymOeUtOZUAI22e.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: none; position: absolute;");
				imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:550px;display:block;\" href=\"https://www.vmall.com/product/10086550008459.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/srKrqJymOeUtOZUAI22e.jpg','https://www.vmall.com/product/10086550008459.html',6);\"></a></div>";
			   $("#index_slider").children("ul").append(imgLi);
			    var imgLi=document.createElement("li");
				imgLi.setAttribute("class","ec-slider-item");
				imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-12/2NZCFuofzcrfK8ByeVfS.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: none; position: absolute;");
				imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:550px;display:block;\" href=\"https://www.vmall.com/product/10086576787089.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/2NZCFuofzcrfK8ByeVfS.jpg','https://www.vmall.com/product/10086576787089.html',7);\"></a></div>";
			   $("#index_slider").children("ul").append(imgLi);
			    var imgLi=document.createElement("li");
				imgLi.setAttribute("class","ec-slider-item");
				imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-11/lIL2MA4RFUuGgpB8VI6B.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: none; position: absolute;");
				imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:550px;display:block;\" href=\"https://www.vmall.com/product/10086789934944.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-11/lIL2MA4RFUuGgpB8VI6B.jpg','https://www.vmall.com/product/10086789934944.html',8);\"></a></div>";
			   $("#index_slider").children("ul").append(imgLi);
			    var imgLi=document.createElement("li");
				imgLi.setAttribute("class","ec-slider-item");
				imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-12/0m61xlcYbj6k5rpc9Xec.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: none; position: absolute;");
				imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:550px;display:block;\" href=\"https://sale.vmall.com/hwsmh.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/0m61xlcYbj6k5rpc9Xec.jpg','https://sale.vmall.com/hwsmh.html',9);\"></a></div>";
			   $("#index_slider").children("ul").append(imgLi);

ec.load("ec.slider", {
         callback : function() {
                            $("#index_slider").slider({
                                     width:     '100%', //必须
                                     height:     550, //必须
                                     style : 3,                    //1显示分页，2只显示左右箭头,3两者都显示
                                     pause : 5000,           //间隔时间
                                     auto : true,
								     minWidth : 1200,
                                     showNumber:false,
                                     circleBtn:true
                            });
         }
});

      setTimeout(function () { 
        $("#index_slider").children("ul").children("li").first().attr("class","ec-slider-item");
        $("#index_slider").children("ul").children("li").first().attr("style","background: url('https://res.vmallres.com/pimages//sale/2018-12/8m9QINvYnQPiDDW0GsR0.jpg') 50% 0px no-repeat; ; width: 100%; height: 550px; display: block; position: absolute;");
        $("#index_slider").children("ul").children("li").first().html("<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:550px;display:block;\" href=\"https://sale.vmall.com/1212.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-12/8m9QINvYnQPiDDW0GsR0.jpg','https://sale.vmall.com/1212.html','1')\"></a></div>");

    }, 7000);
});

//首页轮播数据上报
function pushSliderMsg(adid,url,location)
{
	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"ADID":adid,
  			"URL":url,
  			"location":location,
  			"click":"1"
  			}
		};
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300010701", "link", value]);
		ec.account.dapPushMsg("300010701",value,"click");
}
</script> 
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
         <div id="gg_login" class="i-mall-prompt clearfix hide"> 
          <div class="relative fl w-name"> 
           <a href="https://www.vmall.com/member?t=15438183439451543818506616" rel="nofollow" timetype="timestamp" onclick="pushMemberMsg('头像','/member?t=1543818343945timestamp')"> <img id="gg_customerPic" src="/static/homes/index/img_not_logged_in.png" alt="" /> </a> 
          </div> 
          <div class="fl"> 
           <div class="w-info">
            您好！
            <span id="gg_loginName"></span>。
           </div> 
           <div class="w-btn"> 
            <a id="oldPeople" style="display:none" class="new" href="https://www.vmall.com/member/msg?t=1543818343945timestamp" onclick="pushMemberMsg('消息中心','/member/msg?t=1543818343945timestamp">消息中心</a> 
            <a id="newPeople" class="new" href="https://sale.vmall.com/welcome.html" target="_blank" onclick="pushMemberMsg('新人福利','href=" https:="" sale.vmall.com="" welcome.html')"="">新人福利</a> 
            <a class="" href="https://www.vmall.com/privilege" target="_blank" onclick="pushMemberMsg('特权频道','/privilege')">会员频道</a> 
           </div> 
          </div> 
         </div> 
         <div id="gg_unlogin" class="i-mall-prompt clearfix"> 
          <div class="relative fl w-name"> 
           <img src="/static/homes/index/img_not_logged_in.png" alt="" /> 
          </div> 
          <div class="fl"> 
           <div id="gg_login_url" class="w-reg">
             您好！请 
            <script>document.write('<a href="javascript:;"  rel="nofollow"  onclick = "pushMemberMsg(\'登录\',\'https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&reqClientType=26&lang=zh-cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3D'+encodeURIComponent(encodeURIComponent(window.location.href))+'\')">登录</a>');</script>
            <a href="javascript:;" rel="nofollow" onclick="pushMemberMsg('登录','https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttps%253A%252F%252Fwww.vmall.com%252F')">登录</a> 
            <span>&nbsp;/&nbsp;</span> 
            <a href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&amp;loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn" rel="nofollow" target="_blank" onclick="pushMemberMsg('注册','https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&amp;loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn')">注册</a> 
           </div> 
           <div class="w-btn"> 
            <a class="new" href="https://sale.vmall.com/welcome.html" target="_blank" onclick="pushMemberMsg('新人福利','https://sale.vmall.com/welcome.html')">新人福利</a> 
            <a class="" href="https://www.vmall.com/privilege" target="_blank" onclick="pushMemberMsg('会员频道','/privilege')">会员频道</a> 
           </div> 
          </div> 
         </div> </li> 
        <li class="fl s2"> 
         <ul class="clearfix"> 
          <li> <a href="http://company.vmall.com/" target="_blank" onclick="pushMsgMenu(1,'300010901','PC首页功能导航_企业购特惠','http://company.vmall.com')"> 
            <div class="p-img"> 
             <img class="img0" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="企业购特惠" /> 
            </div> 
            <div class="p-dec">
             企业购特惠
            </div></a> </li> 
          <li> <a href="https://www.vmall.com/recycle" target="_blank" onclick="pushMsgMenu(2,'300010901','PC首页功能导航_以旧换新','https://www.vmall.com/recycle')"> 
            <div class="p-img"> 
             <img class="img1" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="以旧换新" /> 
            </div> 
            <div class="p-dec">
             以旧换新
            </div></a> </li> 
          <li> <a href="https://www.vmall.com/privilege" target="_blank" onclick="pushMsgMenu(3,'300010901','PC首页功能导航_会员领券','https://www.vmall.com/privilege')"> 
            <div class="p-img"> 
             <img class="img2" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="会员领券" /> 
            </div> 
            <div class="p-dec">
             会员领券
            </div></a> </li> 
          <li> <a href="https://sale.vmall.com/peijian.html" target="_blank" onclick="pushMsgMenu(4,'300010901','PC首页功能导航_优选配件','https://sale.vmall.com/peijian.html')"> 
            <div class="p-img"> 
             <img class="img3" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="优选配件" /> 
            </div> 
            <div class="p-dec">
             优选配件
            </div></a> </li> 
          <li> <a href="https://www.vmall.com/product/10086789934944.html" target="_blank" onclick="pushMsgMenu(5,'300010901','PC首页功能导航_新品上市','https://www.vmall.com/product/10086789934944.html')"> 
            <div class="p-img"> 
             <img class="img4" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="新品上市" /> 
            </div> 
            <div class="p-dec">
             新品上市
            </div></a> </li> 
          <li> <a href="https://sale.vmall.com/easybuy.html" target="_blank" onclick="pushMsgMenu(6,'300010901','PC首页功能导航_优享购','https://sale.vmall.com/easybuy.html')"> 
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
           <a href="https://www.vmall.com/notice-list" title="商城公告" onclick="pushMsgNotice('2')"> <span>公告</span> </a> 
          </div> 
          <div class="p-notice-content" id="notice"> 
           <ul class="p-notice-list fl" style="height: 215px; margin-top: -129px;"> 
            <li><a href="https://www.vmall.com/notice-6318" target="_blank" onclick="pushMsgNotice('1')">华为商城12.12年终购机惠 全场最高省1000元</a></li> 
            <li><a href="https://www.vmall.com/notice-6312" target="_blank" onclick="pushMsgNotice('1')">荣耀双十二嗨购 全场最高省1000元</a></li> 
            <li><a href="https://www.vmall.com/notice-6330" target="_blank" onclick="pushMsgNotice('1')">华为双十二欢乐盛典来袭</a></li> 
            <li><a href="https://www.vmall.com/notice-6336" target="_blank" onclick="pushMsgNotice('1')">12.12智能家居狂享惠</a></li> 
            <li><a href="https://www.vmall.com/notice-6342" target="_blank" onclick="pushMsgNotice('1')">华为企业购“年终企采季”</a></li> 
            <li><a href="https://www.vmall.com/notice-6318" target="_blank" onclick="pushMsgNotice('1')">华为商城12.12年终购机惠 全场最高省1000元</a></li>
           </ul> 
          </div> 
         </div> 
         <div class="p-info"> 
          <ul class="clearfix"> 
           <li> <a href="https://www.vmall.com/priority" target="_blank" rel="nofollow" onclick="pushMsgMenu(1,'300011101','PC首页功能导航_优购码','https://www.vmall.com/priority')"> <span><img class="img0" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="优购码" /></span>优购码 </a> </li> 
           <li> <a href="https://sale.vmall.com/smrz.html" target="_blank" rel="nofollow" onclick="pushMsgMenu(2,'300011101','PC首页功能导航_实名认证','https://sale.vmall.com/smrz.html')"> <span><img class="img1" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="实名认证" /></span>实名认证 </a> </li> 
           <li> <a href="https://www.vmall.com/order/tcsProductIndex" target="_blank" rel="nofollow" onclick="pushMsgMenu(3,'300011101','PC首页功能导航_补购保障','https://www.vmall.com/order/tcsProductIndex')"> <span><img class="img2" src="/static/homes/index/5e73f8040c63170985c79fd7bd11fedb.png" alt="补购保障" /></span>补购保障 </a> </li> 
          </ul> 
         </div> </li> 
       </ul> 
      </div> 
      <div class=""> 
       <ul class="home-promo-list clearfix"> 
        <li><a target="_blank" href="https://www.vmall.com/product/10086983017283.html" class="item"><img alt="荣耀" src="/static/homes/index/EuEf79zv7sVlkzmy4Cp5.png" /></a></li> 
        <li><a target="_blank" href="https://www.vmall.com/product/10086885129494.html" class="item"><img alt="华为" src="/static/homes/index/TYINij3F0AvmoQLINPCm.png" /></a></li> 
        <li><a target="_blank" href="https://www.vmall.com/product/10086286769025.html" class="item"><img alt="荣耀" src="/static/homes/index/Aj213tCMQtvhyx6PYF4J.png" /></a></li> 
        <li><a target="_blank" href="https://www.vmall.com/product/10086393052224.html" class="item"><img alt="华为" src="/static/homes/index/gBdo0tNWlFFTBKmbeOqA.png" /></a></li> 
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
          <li class="grid-items grid-items-sm"> <a class="thumb" href="https://www.vmall.com/product/10086211949427.html" target="_blank" onclick="pushHomeHotGoodsAdvertMsg('https://res0.vmallres.com/pimages//frontLocation/content/1289553/Yh5fuX848ga4dUHJqUV2.png','https://www.vmall.com/product/10086211949427.html')"> <img alt="" src="/static/homes/index/Yh5fuX848ga4dUHJqUV2.png" /> </a> </li> 
         </ul> 
        </div> 
        <div class="span-968 fl"> 
         <ul class="grid-list clearfix"> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items "> <a class="thumb" href="https://www.vmall.com/product/10086789934944.html" target="_blank" onclick="pushHomeHotGoodsMsg(this,2,'10086772693857')"> <p class="grid-img"> <img alt="荣耀10青春版 幻彩渐变 2400万AI自拍 6.21英寸高屏占比珍珠屏 全网通 4GB+64GB（渐变蓝）" src="/static/homes/index/428_428_1542706656249mp.png" /> </p> 
            <div class="grid-title">
             荣耀10青春版
            </div> <p class="grid-desc">幻彩渐变 享更多权益&nbsp; </p> <p class="grid-price">&yen;1399</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items "> <a class="thumb" href="https://www.vmall.com/product/10086471194207.html" target="_blank" onclick="pushHomeHotGoodsMsg(this,3,'10086587737324')"> <p class="grid-img"> <img alt="HUAWEI P20 Pro 6GB+128GB 全网通版（极光闪蝶）" src="/static/homes/index/428_428_1542767263318mp.png" /> </p> 
            <div class="grid-title">
             HUAWEI P20 Pro
            </div> <p class="grid-desc">享6期免息 限量好礼&nbsp; </p> <p class="grid-price">&yen;4988</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">爆款</span></em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items "> <a class="thumb" href="https://www.vmall.com/product/10086576787089.html" target="_blank" onclick="pushHomeHotGoodsMsg(this,4,'10086729542271')"> <p class="grid-img"> <img alt="荣耀Play 全网通 4GB+64GB 极光蓝 GT游戏加速 AI芯片 全面屏游戏手机 双卡双待" src="/static/homes/index/428_428_1541572039970mp.png" /> </p> 
            <div class="grid-title">
             荣耀Play
            </div> <p class="grid-desc">最高优惠700&nbsp; </p> <p class="grid-price">&yen;1699</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">爆款</span></em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items "> <a class="thumb" href="https://www.vmall.com/product/10086915330134.html" target="_blank" onclick="pushHomeHotGoodsMsg(this,5,'10086778773020')"> <p class="grid-img"> <img alt="HUAWEI P20 6GB+64GB 全网通版（极光闪蝶）" src="/static/homes/index/428_428_1542765018837mp.png" /> </p> 
            <div class="grid-title">
             HUAWEI P20
            </div> <p class="grid-desc">享6期免息 限量好礼&nbsp; </p> <p class="grid-price">&yen;3388</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items "> <a class="thumb" href="https://www.vmall.com/product/10086785341226.html" target="_blank" onclick="pushHomeHotGoodsMsg(this,6,'10086431508342')"> <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/4520161/1539566459947.png" alt="荣耀10" src="/static/homes/index/mask.png" /> </p> 
            <div class="grid-title">
             荣耀10
            </div> <p class="grid-desc">限时优惠500 积分翻倍&nbsp; </p> <p class="grid-price">&yen;2199</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">热卖</span></em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items "> <a class="thumb" href="https://www.vmall.com/product/10086568474763.html" target="_blank" onclick="pushHomeHotGoodsMsg(this,7,'10086525488984')"> <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443250394/428_428_1542768465057mp.png" alt="HUAWEI nova 3 6GB+64GB 全网通版（蓝楹紫）" src="/static/homes/index/mask.png" /> </p> 
            <div class="grid-title">
             HUAWEI nova 3
            </div> <p class="grid-desc">2400万海报级自拍&nbsp; </p> <p class="grid-price">&yen;2599</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items "> <a class="thumb" href="https://www.vmall.com/product/570379791.html" target="_blank" onclick="pushHomeHotGoodsMsg(this,8,'574239706')"> <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/1268791/1539657732130.png" alt="荣耀V10" src="/static/homes/index/mask.png" /> </p> 
            <div class="grid-title">
             荣耀V10
            </div> <p class="grid-desc">限时优惠1000 积分翻倍&nbsp; </p> <p class="grid-price">&yen;1999</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">爆款</span></em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items "> <a class="thumb" href="https://www.vmall.com/product/10086550008459.html" target="_blank" onclick="pushHomeHotGoodsMsg(this,9,'10086533608963')"> <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443263783/428_428_1542853206848mp.png" alt="华为畅享9 Plus 4GB+64GB 全网通版（极光紫）" src="/static/homes/index/mask.png" /> </p> 
            <div class="grid-title">
             华为畅享9 Plus
            </div> <p class="grid-desc">6+128GB版上市 全款预订中&nbsp; </p> <p class="grid-price">&yen;1499</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
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
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide swiper-slide-visible swiper-slide-active"> <a class="thumb" href="https://www.vmall.com/product/10086268042691.html" target="_blank" onclick="pushGoodsRecommendMsg('10086253509221',this,'1')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443267248/428_428_1540544249192mp.png" alt="荣耀手表魔法系列（熔岩黑）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">时尚轻薄 强劲续航&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀手表魔法系列
            </div> <p class="grid-price">&yen;888</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">免息</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide swiper-slide-visible"> <a class="thumb" href="https://www.vmall.com/product/10086372796926.html" target="_blank" onclick="pushGoodsRecommendMsg('10086612110602',this,'2')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443259571/428_428_1538278169451mp.png" alt="荣耀畅玩8C 全网通标配版 4GB+32GB（幻夜黑）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">4+32G版限时优惠130&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀畅玩8C
            </div> <p class="grid-price">&yen;999</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide swiper-slide-visible"> <a class="thumb" href="https://www.vmall.com/product/10086127035863.html" target="_blank" onclick="pushGoodsRecommendMsg('10086119759478',this,'3')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443260775/428_428_1542264886384mp.png" alt="HUAWEI WATCH GT 时尚款 （钢色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">稀缺货源 限量发售&nbsp; </p> 
            </div> 
            <div class="grid-title">
             HUAWEI WATCH GT
            </div> <p class="grid-price">&yen;1488</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide swiper-slide-visible"> <a class="thumb" href="https://www.vmall.com/product/10086291890006.html" target="_blank" onclick="pushGoodsRecommendMsg('10086565205556',this,'4')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/5449398/1542939442730.png" alt="荣耀9i" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">最高优惠200&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀9i
            </div> <p class="grid-price">&yen;1199</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">爆款</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide swiper-slide-visible"> <a class="thumb" href="https://www.vmall.com/product/973611543.html" target="_blank" onclick="pushGoodsRecommendMsg('328205796',this,'5')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443165582/428_428_1542767712417mp.png" alt="华为运动蓝牙耳机（红色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">专业降噪通话 待机10天&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为运动蓝牙耳机
            </div> <p class="grid-price">&yen;249</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">限时优惠50元</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086527872485.html" target="_blank" onclick="pushGoodsRecommendMsg('10086466203116',this,'6')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443265206/428_428_1539243364035mp.png" alt="荣耀平板5 10.1英寸 3GB+32GB WIFI标准版（苍穹灰）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">最高直降50&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀平板5
            </div> <p class="grid-price">&yen;1349</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086209439106.html" target="_blank" onclick="pushGoodsRecommendMsg('10086469441567',this,'7')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443265084/428_428_1542852832819mp.png" alt="华为畅享 MAX 4GB+64GB 全网通版（幻夜黑）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">大屏大视界&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为畅享 MAX
            </div> <p class="grid-price">&yen;1699</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086423109158.html" target="_blank" onclick="pushGoodsRecommendMsg('10086794601109',this,'8')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/5583540/1541036554232.png" alt="华为AI音箱" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">丹拿音质 声纹识别&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为AI音箱
            </div> <p class="grid-price">&yen;399</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086350349834.html" target="_blank" onclick="pushGoodsRecommendMsg('10086953522941',this,'9')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443233168/428_428_1538989229309mp.png" alt="荣耀MagicBook 锐龙版 14英寸轻薄笔记本电脑 Ryzen R5-2500U 8GB 256GB（冰河银）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">高性能金属轻薄本&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀MagicBook 锐龙版
            </div> <p class="grid-price">&yen;3999</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">免息</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/936223974.html" target="_blank" onclick="pushGoodsRecommendMsg('534967719',this,'10')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443207077/428_428_1542788291468mp.png" alt="华为智能体脂秤" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">健身减脂必备&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为智能体脂秤
            </div> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">爆款</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086893318670.html" target="_blank" onclick="pushGoodsRecommendMsg('10086612323957',this,'11')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/5583542/1540623612925.png" alt="华为平板 M5 青春版" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">智能声控 大屏娱乐&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为平板 M5 青春版
            </div> <p class="grid-price">&yen;1899</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086686072684.html" target="_blank" onclick="pushGoodsRecommendMsg('10086455419044',this,'12')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443262472/428_428_1540628828647mp.png" alt="荣耀手环4 标准版（陨石黑）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">触控大彩屏 实时心率检测&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀手环4
            </div> <p class="grid-price">&yen;199</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">爆款</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086335437779.html" target="_blank" onclick="pushGoodsRecommendMsg('10086528094626',this,'13')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443270880/428_428_1540524740371mp.png" alt="荣耀FlyPods无线耳机 标配版（铃兰白）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">高清音质/舒适佩戴&nbsp; </p> 
            </div> 
            <div class="grid-title">
             FlyPods无线耳机
            </div> <p class="grid-price">&yen;799</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#">购机赢好礼</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086572258093.html" target="_blank" onclick="pushGoodsRecommendMsg('10086972979696',this,'14')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443239160/428_428_1539569436793mp.png" alt="【新品首发】华为手环 B5 运动版（韵律黑）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">彩屏健康手环&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为手环 B5 运动版
            </div> <p class="grid-price">&yen;999</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">爆款</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086305784772.html" target="_blank" onclick="pushGoodsRecommendMsg('10086617332760',this,'15')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443253975/428_428_1542765208952mp.png" alt="荣耀Note10 全网通 6GB+64GB 幻影蓝 AMOLED全面屏手机 AI智能 GT游戏加速 双卡双待 长续航" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">赠价值248元豪华礼包&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀Note10
            </div> <p class="grid-price">&yen;2699</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">最高优惠300</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086733534868.html" target="_blank" onclick="pushGoodsRecommendMsg('10086212501655',this,'16')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443218660/428_428_1542853970320mp.png" alt="华为畅享8 3GB+32GB 全网通标配版（粉色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">赠配件大礼包&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为畅享8
            </div> <p class="grid-price">&yen;1099</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086194505402.html" target="_blank" onclick="pushGoodsRecommendMsg('10086572770021',this,'17')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443271146/428_428_1541122609057mp.png" alt="荣耀Waterplay 8英寸 防水影音平板 4GB+64GB WiFi版（皓月银）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">限时优惠50元&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀Waterplay 8英寸
            </div> <p class="grid-price">&yen;1449</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/194128141.html" target="_blank" onclick="pushGoodsRecommendMsg('553811697',this,'18')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443173129/428_428_1538985401864mp.png" alt="荣耀智能体脂秤（白色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">BIA测脂/高精准传感&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀智能体脂秤
            </div> <p class="grid-price">&yen;99</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">限时优惠70元</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086653392602.html" target="_blank" onclick="pushGoodsRecommendMsg('10086354651877',this,'19')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/5490164/1540538218158.png" alt="华为儿童手表 3 Pro" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">4G全网通 高清拍照&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为儿童手表 3 Pro
            </div> <p class="grid-price">&yen;988</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086749611489.html" target="_blank" onclick="pushGoodsRecommendMsg('10086567817541',this,'20')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/5583544/1540623928793.png" alt="华为畅享平板" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">10.1英寸大屏&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为畅享平板
            </div> <p class="grid-price">&yen;1299</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086007028117.html" target="_blank" onclick="pushGoodsRecommendMsg('10086094709326',this,'21')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443258871/428_428_1539912533064mp.png" alt="荣耀路由 X2（白色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">双核双千兆&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀路由X2
            </div> <p class="grid-price">&yen;149</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">首发</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086687727933.html" target="_blank" onclick="pushGoodsRecommendMsg('10086858982353',this,'22')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443259298/428_428_1540802820764mp.png" alt="华为无线充电器（Max 15W）白色" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">支持Mate 20 Pro及iPhone X系列充电&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为无线充电器
            </div> <p class="grid-price">&yen;99</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/417236260.html" target="_blank" onclick="pushGoodsRecommendMsg('557586395',this,'23')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443193592/428_428_1539914852328mp.png" alt="（华为）HUAWEI MateBook X 13英寸轻薄笔记本电脑 深空灰 （I7/8GB/512GB）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">2K高清屏&nbsp; </p> 
            </div> 
            <div class="grid-title">
             HUAWEI MateBook X
            </div> <p class="grid-price">&yen;8688</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">免息</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/889979598.html" target="_blank" onclick="pushGoodsRecommendMsg('530206332',this,'24')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443179152/428_428_1539767984482mp.png" alt="（华为）HUAWEI MateBook E 12英寸时尚二合一笔记本电脑 M3/4GB/128GB" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">2K高清触摸屏&nbsp; </p> 
            </div> 
            <div class="grid-title">
             HUAWEI MateBook E
            </div> <p class="grid-price">&yen;4288</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">免息</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086250287882.html" target="_blank" onclick="pushGoodsRecommendMsg('10086050080641',this,'25')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/5490166/1540623534179.png" alt="华为备咖存储" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">1T大容量&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为备咖存储
            </div> <p class="grid-price">&yen;699</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/993405255.html" target="_blank" onclick="pushGoodsRecommendMsg('419942774',this,'26')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443183524/428_428_1538991695890mp.png" alt="荣耀手环3 标准版（碳晶黑）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">50米防水 专业睡眠检测&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀手环3
            </div> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">特惠</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/369652507.html" target="_blank" onclick="pushGoodsRecommendMsg('532696479',this,'27')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443168712/428_428_1538991432470mp.png" alt="荣耀畅玩手环 A2（魔法黑）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">OLED大屏，防尘防水&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀畅玩手环 A2
            </div> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">限时优惠20元</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086958063836.html" target="_blank" onclick="pushGoodsRecommendMsg('10086943604110',this,'28')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443257485/428_428_1542765330080mp.png" alt="荣耀路由2S（白色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">限时直降20元&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀路由2S
            </div> <p class="grid-price">&yen;179</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/794044956.html" target="_blank" onclick="pushGoodsRecommendMsg('500647761',this,'29')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443192953/428_428_1542768089796mp.png" alt="华为全景相机（蓝色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">360度照片/视频&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为全景相机
            </div> <p class="grid-price">&yen;499</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">爆款</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/516255415.html" target="_blank" onclick="pushGoodsRecommendMsg('553104015',this,'30')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443204526/428_428_1542765833879mp.png" alt="荣耀Waterplay 防水影音平板 3GB+32GB WiFi版（皓月银）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">防水影音平板&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀WaterPlay
            </div> <p class="grid-price">&yen;1599</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/270976970.html" target="_blank" onclick="pushGoodsRecommendMsg('976288056',this,'31')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443204212/428_428_1542768153833mp.png" alt="HUAWEI WATCH 2 Pro华为新款智能手表 4G版（钛银灰）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">手机手表共享1个号码&nbsp; </p> 
            </div> 
            <div class="grid-title">
             HUAWEI WATCH 2 Pro
            </div> <p class="grid-price">&yen;2288</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/611513952.html" target="_blank" onclick="pushGoodsRecommendMsg('480239066',this,'32')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443197071/428_428_1542765947334mp.png" alt="荣耀路由2（白色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">双网双通 双频优选&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀路由2
            </div> <p class="grid-price">&yen;179</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">赠数据线</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086872833199.html" target="_blank" onclick="pushGoodsRecommendMsg('10086132726986',this,'33')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443231911/428_428_1538991969182mp.png" alt="荣耀心晴耳机 心率智能耳机（幻夜黑）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">心率智能耳机&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀心晴耳机
            </div> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">限时优惠30元</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086000689735.html" target="_blank" onclick="pushGoodsRecommendMsg('10086310737763',this,'34')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443241279/428_428_1539915278180mp.png" alt="（华为）HUAWEI MateBook X Pro 13.9英寸笔记本电脑 深空灰 I7/8GB/512GB 集显" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">部分版本享6期免息&nbsp; </p> 
            </div> 
            <div class="grid-title">
             HUAWEI MateBook X Pro
            </div> <p class="grid-price">&yen;10988</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086883263315.html" target="_blank" onclick="pushGoodsRecommendMsg('10086555041694',this,'35')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443218929/428_428_1538986607390mp.png" alt="荣耀畅玩7C 全网通标配版 3GB+32GB（极光蓝）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">优惠100&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀畅玩7C
            </div> <p class="grid-price">&yen;799</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/875753311.html" target="_blank" onclick="pushGoodsRecommendMsg('189161731',this,'36')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443174256/428_428_1542854411097mp.png" alt="荣耀xSport 运动蓝牙耳机（魅焰红）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">11h长续航 狂甩不掉&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀xSport 运动蓝牙耳机
            </div> <p class="grid-price">&yen;199</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">限时优惠50元</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086884483404.html" target="_blank" onclick="pushGoodsRecommendMsg('10086562084783',this,'37')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443238613/428_428_1542787251423mp.png" alt="华为路由器WS5102（白色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">新品上市&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为路由器WS5102
            </div> <p class="grid-price">&yen;159</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/538499714.html" target="_blank" onclick="pushGoodsRecommendMsg('874932810',this,'38')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443125050/428_428_1539569165157mp.png" alt="华为子母路由器 Q1 （黑色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">哪些信号不好插哪里&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为子母路由 Q1
            </div> <p class="grid-price">&yen;459</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086462400745.html" target="_blank" onclick="pushGoodsRecommendMsg('10086001798465',this,'39')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443249282/428_428_1542787558155mp.png" alt="华为随行WiFi 2 畅享版（白色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">新品首销 赠流量卡&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为随行WiFi 2 畅享版
            </div> <p class="grid-price">&yen;349</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#68BEFF">新品</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086029405648.html" target="_blank" onclick="pushGoodsRecommendMsg('10086943852365',this,'40')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443214174/428_428_1542856174725mp.png" alt="荣耀多口充电器SuperCharge快充版（白色）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">小巧精悍一个顶仨&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀多口充电器SuperCharge快充版
            </div> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">限时优惠20元</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086030735533.html" target="_blank" onclick="pushGoodsRecommendMsg('10086679949457',this,'41')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443215270/428_428_1542769173855mp.png" alt="华为平板 M5 8.4英寸 4GB+32GB WiFi版（香槟金）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">赠保护套&nbsp; </p> 
            </div> 
            <div class="grid-title">
             华为平板 M5 8.4英寸
            </div> <p class="grid-price">&yen;2088</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/21046116.html" target="_blank" onclick="pushGoodsRecommendMsg('906818151',this,'42')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443209422/428_428_1542768394394mp.png" alt="【新品】（华为）HUAWEI MateBook D（2018版）15.6英寸轻薄笔记本电脑 皓月银+I5/8GB/128GB/1TB" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">赠双肩包&nbsp; </p> 
            </div> 
            <div class="grid-title">
             HUAWEI MateBook D
            </div> <p class="grid-price">&yen;5488</p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/570379791.html" target="_blank" onclick="pushGoodsRecommendMsg('574239706',this,'43')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443210220/428_428_1511858765170mp.jpg" alt="荣耀V10 全网通高配版 6GB+64GB（魅丽红）" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">限时优惠800&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀V10
            </div> <p class="grid-price">&yen;1999</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">爆款</span> </em> </p> </a> </li> 
          <!--通过添加current 来实现 hover效果--> 
          <li class="grid-items swiper-slide"> <a class="thumb" href="https://www.vmall.com/product/10086576787089.html" target="_blank" onclick="pushGoodsRecommendMsg('10086729542271',this,'44')"> 
            <div class="grid-info"> 
             <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/6001804/1542696451354.png" alt="荣耀Play" src="/static/homes/index/mask.png" /> </p> 
             <p class="grid-desc">最高优惠400赠豪华礼包&nbsp; </p> 
            </div> 
            <div class="grid-title">
             荣耀Play
            </div> <p class="grid-price">&yen;1699</p> <p class="grid-tips"> <em class="thumb"> <span class="color01" style="background-color:#FF6A6E">爆款</span> </em> </p> </a> </li> 
         </ul> 
         <div class="grid-btn swiper-button-prev btn-prev disabled">
          <span></span>
         </div> 
         <div class="grid-btn swiper-button-next btn-next">
          <span></span>
         </div> 
         <input type="hide" value="10086253509221,10086612110602,10086119759478,10086565205556,328205796,10086466203116,10086469441567,10086794601109,10086953522941,534967719,10086612323957,10086455419044,10086528094626,10086972979696,10086617332760,10086212501655,10086572770021,553811697,10086354651877,10086567817541,10086094709326,10086858982353,557586395,530206332,10086050080641,419942774,532696479,10086943604110,500647761,553104015,976288056,480239066,10086132726986,10086310737763,10086555041694,189161731,10086562084783,874932810,10086001798465,10086943852365,10086679949457,906818151,574239706,10086729542271," id="recommendSkuIds" /> 
        </div> 
       </div> 
      </div> 
      <!-- 20170223-首页-精品推荐-end --> 
      <script>
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
</script> 
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
   <div class="layout" id="lc_617972"> 
    <div class="home-channel-floor"> 
     <div class="h"> 
      <h2 class="channel-title fl">手机</h2> 
      <ul class="channel-nav fl"> 
       <li><a href="https://www.vmall.com/list-75" target="_blank" onclick="pushFoolChildrenMsg('1','手机','荣耀','/list-75')">荣耀</a></li> 
       <li><a href="https://www.vmall.com/list-285" target="_blank" onclick="pushFoolChildrenMsg('1','手机','HUAWEI P系列','/list-285')">HUAWEI P系列</a></li> 
       <li><a href="https://www.vmall.com/list-77" target="_blank" onclick="pushFoolChildrenMsg('1','手机','荣耀畅玩系列','/list-77')">荣耀畅玩系列</a></li> 
       <li><a href="https://www.vmall.com/list-76" target="_blank" onclick="pushFoolChildrenMsg('1','手机','HUAWEI Mate系列','/list-76')">HUAWEI Mate系列</a></li> 
       <li><a href="https://www.vmall.com/list-277" target="_blank" onclick="pushFoolChildrenMsg('1','手机','HUAWEI nova系列','/list-277')">HUAWEI nova系列</a></li> 
       <li><a href="https://www.vmall.com/list-81" target="_blank" onclick="pushFoolChildrenMsg('1','手机','HUAWEI 麦芒系列','/list-81')">HUAWEI 麦芒系列</a></li> 
       <li><a href="https://www.vmall.com/list-275" target="_blank" onclick="pushFoolChildrenMsg('1','手机','华为畅享系列','/list-275')">华为畅享系列</a></li> 
       <li><a href="https://www.vmall.com/list-38" target="_blank" onclick="pushFoolChildrenMsg('1','手机','移动4G+专区','/list-38')">移动4G+专区</a></li> 
      </ul> 
      <div class="channel-more fr">
       <span></span>
       <span></span>
       <span></span> 
       <a href="https://www.vmall.com/list-36" target="_blank" onclick="pushFoolMsg('1','手机','/list-36')">查看更多</a> 
      </div> 
     </div> 
     <div class="b"> 
      <div class="goods-list"> 
       <ul class="grid-list clearfix"> 
        <li class="grid-items grid-items-md "> <a class="thumb" href="https://www.vmall.com/product/10086305784772.html" target="_blank" onclick="pushFoolAdvertMsg('1','手机','https://res0.vmallres.com/pimages//frontLocation/content/1268817/lWsD7OeoU0ZQj1ePgluB.png','lWsD7OeoU0ZQj1ePgluB.png','https://www.vmall.com/product/10086305784772.html')"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/1268817/lWsD7OeoU0ZQj1ePgluB.png" alt="" src="/static/homes/index/mask.png" /> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086737332641.html" target="_blank" onclick="pushFoolGoodsMsg(this,2,'1','手机','10086867345685','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443264780/428_428_1539244238246mp.png" alt="HUAWEI Mate 20 RS 保时捷设计 8GB+512GB 全网通版（玄黑）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI Mate 20 RS
          </div> <p class="grid-desc">保时捷设计&nbsp;</p> <p class="grid-price">&yen;12999</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/357339492.html" target="_blank" onclick="pushFoolGoodsMsg(this,3,'1','手机','346533524','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443203956/428_428_1542854771585mp.png" alt="HUAWEI Mate 10 Pro 6GB+128GB 全网通版（银钻灰）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI Mate 10 Pro
          </div> <p class="grid-desc">领券立减200+赠好礼&nbsp;</p> <p class="grid-price">&yen;3999</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086712964531.html" target="_blank" onclick="pushFoolGoodsMsg(this,4,'1','手机','10086906323992','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443256013/428_428_1538985711338mp.png" alt="荣耀8X Max 7.12英寸高屏占比珍珠屏 随身影院 5000mAh大电池 全网通 4GB+64GB（魅海蓝）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀8X Max
          </div> <p class="grid-desc">7.12英寸全面屏&nbsp;</p> <p class="grid-price">&yen;1499</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086883263315.html" target="_blank" onclick="pushFoolGoodsMsg(this,5,'1','手机','10086555041694','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443218929/428_428_1538986607390mp.png" alt="荣耀畅玩7C 全网通标配版 3GB+32GB（极光蓝）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀畅玩7C
          </div> <p class="grid-desc">优惠100&nbsp;</p> <p class="grid-price">&yen;799</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086209439106.html" target="_blank" onclick="pushFoolGoodsMsg(this,6,'1','手机','10086469441567','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443265084/428_428_1542852832819mp.png" alt="华为畅享 MAX 4GB+64GB 全网通版（幻夜黑）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为畅享 MAX
          </div> <p class="grid-desc">64GB下单减200&nbsp;</p> <p class="grid-price">&yen;1699</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/478362844.html" target="_blank" onclick="pushFoolGoodsMsg(this,7,'1','手机','922641893','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443204786/428_428_1538987437458mp.png" alt="荣耀畅玩7X 全网通标配版（铂光金）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀畅玩7X
          </div> <p class="grid-desc">最高优惠300&nbsp;</p> <p class="grid-price">&yen;999</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086283844446.html#10086647915138" target="_blank" onclick="pushFoolGoodsMsg(this,8,'1','手机','10086775247603','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443253609/428_428_1542767988227mp.png" alt="HUAWEI nova 3i 4GB+128GB 全网通版（蓝楹紫）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI nova 3i
          </div> <p class="grid-desc">6期免息 限量好礼&nbsp;</p> <p class="grid-price">&yen;1999</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">热卖</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/396602535.html" target="_blank" onclick="pushFoolGoodsMsg(this,9,'1','手机','616330979','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443200115/428_428_1539940821615mp.png" alt="HUAWEI Mate 10 4GB+64GB 全网通版（亮黑色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI Mate 10
          </div> <p class="grid-desc">领券减300+赠好礼&nbsp;</p> <p class="grid-price">&yen;3399</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/501317311.html" target="_blank" onclick="pushFoolGoodsMsg(this,10,'1','手机','13671525','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443211944/428_428_1538988657477mp.png" alt="荣耀9青春版 全网通标配版（海鸥灰）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀9青春版
          </div> <p class="grid-desc">尊享版降600&nbsp;</p> <p class="grid-price">&yen;999</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086733534868.html" target="_blank" onclick="pushFoolGoodsMsg(this,11,'1','手机','10086882678101','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443218707/428_428_1542854000960mp.png" alt="华为畅享8 4GB+64GB 全网通高配版（粉色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为畅享8
          </div> <p class="grid-desc">领券减100+赠配件好礼&nbsp;</p> <p class="grid-price">&yen;1299</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086576787089.html" target="_blank" onclick="pushFoolGoodsMsg(this,12,'1','手机','10086729542271','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/2601010042502/428_428_1541572039970mp.png" alt="荣耀Play 全网通 4GB+64GB 极光蓝 GT游戏加速 AI芯片 全面屏游戏手机 双卡双待" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀Play
          </div> <p class="grid-desc">&nbsp;</p> <p class="grid-price">&yen;1699</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">爆款</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086316198953.html" target="_blank" onclick="pushFoolGoodsMsg(this,13,'1','手机','10086905745003','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443258000/428_428_1540630399670mp.png" alt="HUAWEI 麦芒7 6GB+64GB 全网通版（亮黑色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI 麦芒7
          </div> <p class="grid-desc">限量赠豪华配件礼包&nbsp;</p> <p class="grid-price">&yen;2199</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086070385182.html" target="_blank" onclick="pushFoolGoodsMsg(this,14,'1','手机','10086232227906','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443225637/428_428_1542767443951mp.png" alt="荣耀畅玩7A 全网通标配版 2GB+32GB（极光蓝）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀畅玩7A
          </div> <p class="grid-desc">高配赠耳机+自拍杆&nbsp;</p> <p class="grid-price">&yen;699</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086157327552.html" target="_blank" onclick="pushFoolGoodsMsg(this,15,'1','手机','10086478125358','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res0.vmallres.com/pimages//product/6901443225804/428_428_1540630349573mp.png" alt="华为畅享8e 3GB+32GB 全网通版（金色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为畅享8e
          </div> <p class="grid-desc">领券立减60+赠好礼&nbsp;</p> <p class="grid-price">&yen;999</p> </a> </li> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!--20170222 中通 start--> 
   <div class="hr-27"></div> 
   <div class="channel-floor index-channel-floor"> 
    <div class="layout"> 
     <!-- 2017-02-15-banner-1200*110-start --> 
     <div class="home-banner"> 
      <!-- 2017-02-15-banner-图片轮换-start --> 
      <div class="home-banner-slideshow"> 
      </div>
      <!-- 2017-02-15-banner-图片轮换-end --> 
     </div>
     <!-- 2017-02-15-banner-1200*110-end --> 
    </div> 
   </div> 
   <div class="hr-13"></div> 
   <!--20170222 中通 end--> 
   <!-- 初始值 --> 
   <!-- 分列式 march-past 计算显示商品数量--> 
   <!-- 商品是否为4的倍数 --> 
   <!-- 优先填充第一行数据 --> 
   <!-- 非对称式 asym_array --> 
   <div class="layout" id="lc_617812"> 
    <div class="home-channel-floor"> 
     <div class="h"> 
      <h2 class="channel-title fl">笔记本电脑</h2> 
      <ul class="channel-nav fl"> 
       <li><a href="https://www.vmall.com/list-41" target="_blank" onclick="pushFoolChildrenMsg('2','笔记本电脑','平板电脑','/list-41')">平板电脑</a></li> 
       <li><a href="https://www.vmall.com/list-42" target="_blank" onclick="pushFoolChildrenMsg('2','笔记本电脑','笔记本电脑','/list-42')">笔记本电脑</a></li> 
       <li><a href="https://www.vmall.com/list-317" target="_blank" onclick="pushFoolChildrenMsg('2','笔记本电脑','笔记本配件','/list-317')">笔记本配件</a></li> 
      </ul> 
      <div class="channel-more fr">
       <span></span>
       <span></span>
       <span></span> 
       <a href="https://www.vmall.com/list-40" target="_blank" onclick="pushFoolMsg('2','笔记本电脑','/list-40')">查看更多</a> 
      </div> 
     </div> 
     <div class="b"> 
      <div class="goods-list"> 
       <ul class="grid-list clearfix"> 
        <li class="grid-items grid-items-md "> <a class="thumb" href="https://www.vmall.com/product/10086000689735.html" target="_blank" onclick="pushFoolAdvertMsg('2','笔记本电脑','https://res0.vmallres.com/pimages//frontLocation/content/1947317/Vmzo28tQ8aYSvrBJax6o.png','Vmzo28tQ8aYSvrBJax6o.png','https://www.vmall.com/product/10086000689735.html')"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/1947317/Vmzo28tQ8aYSvrBJax6o.png" alt="" src="/static/homes/index/mask.png" /> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086350349834.html" target="_blank" onclick="pushFoolGoodsMsg(this,2,'2','笔记本电脑','10086734411761','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res1.vmallres.com/pimages//product/6901443233182/428_428_1538989301892mp.png" alt="荣耀MagicBook 14英寸轻薄笔记本电脑 i5-8250U 8GB 256GB 独显（冰河银）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀MagicBook
          </div> <p class="grid-desc">购机享6期免息&nbsp;</p> <p class="grid-price">&yen;4999</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">免息</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/21046116.html" target="_blank" onclick="pushFoolGoodsMsg(this,3,'2','笔记本电脑','10086216582133','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res1.vmallres.com/pimages//product/6901443257812/428_428_1542768279883mp.png" alt="（华为）HUAWEI MateBook D（2018版）15.6英寸轻薄笔记本电脑 深空灰+I7/16GB/256GB" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI MateBook D
          </div> <p class="grid-desc">赠双肩包&nbsp;</p> <p class="grid-price">&yen;6488</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086786653860.html" target="_blank" onclick="pushFoolGoodsMsg(this,4,'2','笔记本电脑','10086953522941','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res1.vmallres.com/pimages//product/6901443233168/428_428_1538989229309mp.png" alt="荣耀MagicBook 锐龙版 14英寸轻薄笔记本电脑 Ryzen R5-2500U 8GB 256GB（冰河银）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀MagicBook 锐龙版
          </div> <p class="grid-desc">高性能金属轻薄本&nbsp;</p> <p class="grid-price">&yen;3999</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">免息</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/417236260.html" target="_blank" onclick="pushFoolGoodsMsg(this,5,'2','笔记本电脑','280075090','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res1.vmallres.com/pimages//product/6901443181223/428_428_1495008828667mp.jpg" alt="（华为）HUAWEI MateBook X 13英寸轻薄笔记本电脑 深空灰 （I5/4GB/256GB）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI MateBook X
          </div> <p class="grid-desc">6期分期免息+赠品配件礼包&nbsp;</p> <p class="grid-price">&yen;6188</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">免息</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086350349834.html" target="_blank" onclick="pushFoolGoodsMsg(this,6,'2','笔记本电脑','10086429894528','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res1.vmallres.com/pimages//product/6901443233205/428_428_1538989448083mp.png" alt="荣耀MagicBook 14英寸轻薄笔记本电脑 i5-8250U 8GB 256GB 独显（星云紫）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀MagicBook 星云紫
          </div> <p class="grid-desc">高颜值时尚轻薄本&nbsp;</p> <p class="grid-price">&yen;4999</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">免息</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/889979598.html" target="_blank" onclick="pushFoolGoodsMsg(this,7,'2','笔记本电脑','530206332','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res1.vmallres.com/pimages//product/6901443179152/428_428_1539767984482mp.png" alt="（华为）HUAWEI MateBook E 12英寸时尚二合一笔记本电脑 M3/4GB/128GB" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI MateBook E
          </div> <p class="grid-desc">享6期免息&nbsp;</p> <p class="grid-price">&yen;4288</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">免息</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086000689735.html" target="_blank" onclick="pushFoolGoodsMsg(this,8,'2','笔记本电脑','10086488837838','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res1.vmallres.com/pimages//product/6901443227815/428_428_1539915445299mp.png" alt="（华为）HUAWEI MateBook X Pro 13.9英寸笔记本电脑 深空灰 i5 8GB 256GB 独显" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI MateBook X Pro
          </div> <p class="grid-desc">享6期免息&nbsp;</p> <p class="grid-price">&yen;8688</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/21046116.html" target="_blank" onclick="pushFoolGoodsMsg(this,9,'2','笔记本电脑','648692702','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res1.vmallres.com/pimages//product/6901443211388/428_428_1542768446389mp.png" alt="【新品】（华为）HUAWEI MateBook D（2018版）15.6英寸轻薄笔记本电脑 皓月银+I5/8GB/256GB" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI MateBook D（2018版）
          </div> <p class="grid-desc">限量赠华为双肩包&nbsp;</p> <p class="grid-price">&yen;5188</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086786653860.html#10086071864012" target="_blank" onclick="pushFoolGoodsMsg(this,10,'2','笔记本电脑','10086071864012','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res1.vmallres.com/pimages//frontLocation/content/6029368/SIyYO8HzdWZ9Di1ymFBy.png" alt="荣耀MagicBook 锐龙触屏版" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀MagicBook 锐龙触屏版
          </div> <p class="grid-desc">touch触控 随心而动&nbsp;</p> <p class="grid-price">&yen;4599</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">免息</span></em> </p> </a> </li> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- 初始值 --> 
   <!-- 分列式 march-past 计算显示商品数量--> 
   <!-- 商品是否为4的倍数 --> 
   <!-- 优先填充第一行数据 --> 
   <!-- 排除非4倍数的商品 --> 
   <!-- 非对称式 asym_array --> 
   <div class="layout" id="lc_617814"> 
    <div class="home-channel-floor"> 
     <div class="h"> 
      <h2 class="channel-title fl">精品平板</h2> 
      <ul class="channel-nav fl"> 
       <li><a href="https://www.vmall.com/list-41" target="_blank" onclick="pushFoolChildrenMsg('3','精品平板','平板电脑','/list-41')">平板电脑</a></li> 
       <li><a href="https://www.vmall.com/list-42" target="_blank" onclick="pushFoolChildrenMsg('3','精品平板','笔记本电脑','/list-42')">笔记本电脑</a></li> 
       <li><a href="https://www.vmall.com/list-317" target="_blank" onclick="pushFoolChildrenMsg('3','精品平板','笔记本配件','/list-317')">笔记本配件</a></li> 
      </ul> 
      <div class="channel-more fr">
       <span></span>
       <span></span>
       <span></span> 
       <a href="https://www.vmall.com/list-40" target="_blank" onclick="pushFoolMsg('3','精品平板','/list-40')">查看更多</a> 
      </div> 
     </div> 
     <div class="b"> 
      <div class="goods-list"> 
       <ul class="grid-list clearfix"> 
        <li class="grid-items grid-items-md "> <a class="thumb" href="https://www.vmall.com/product/10086527872485.html" target="_blank" onclick="pushFoolAdvertMsg('3','精品平板','https://res0.vmallres.com/pimages//frontLocation/content/1948737/AfHFqnMAGx1QdlIHRVGP.png','AfHFqnMAGx1QdlIHRVGP.png','https://www.vmall.com/product/10086527872485.html')"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/1948737/AfHFqnMAGx1QdlIHRVGP.png" alt="" src="/static/homes/index/mask.png" /> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086893318670.html" target="_blank" onclick="pushFoolGoodsMsg(this,2,'3','精品平板','10086612323957','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res2.vmallres.com/pimages//frontLocation/content/5589540/J8Vafxx3G8FKxBZAgvD0.png" alt="华为平板 M5 青春版" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为平板 M5 青春版
          </div> <p class="grid-desc">智能语音平板&nbsp;</p> <p class="grid-price">&yen;1899</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/516255415.html" target="_blank" onclick="pushFoolGoodsMsg(this,3,'3','精品平板','553104015','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res2.vmallres.com/pimages//product/6901443204526/428_428_1542765833879mp.png" alt="荣耀Waterplay 防水影音平板 3GB+32GB WiFi版（皓月银）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀Waterplay
          </div> <p class="grid-desc">限时直降100元&nbsp;</p> <p class="grid-price">&yen;1599</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086030735533.html" target="_blank" onclick="pushFoolGoodsMsg(this,4,'3','精品平板','10086679949457','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res2.vmallres.com/pimages//product/6901443215270/428_428_1542769173855mp.png" alt="华为平板 M5 8.4英寸 4GB+32GB WiFi版（香槟金）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为平板 M5 8.4英寸
          </div> <p class="grid-desc">哈曼卡顿调音&nbsp;</p> <p class="grid-price">&yen;2088</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/405225095.html" target="_blank" onclick="pushFoolGoodsMsg(this,5,'3','精品平板','852174199','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res2.vmallres.com/pimages//product/6901443192458/428_428_1539913537863mp.png" alt="荣耀畅玩平板2 9.6英寸 WiFi高配版（苍穹灰）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀畅玩平板2 9.6英寸
          </div> <p class="grid-desc">护眼滤蓝光高清大屏&nbsp;</p> <p class="grid-price">&yen;1088</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086749611489.html" target="_blank" onclick="pushFoolGoodsMsg(this,6,'3','精品平板','10086567817541','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res2.vmallres.com/pimages//frontLocation/content/5589542/ivcZC1u56eRDWw1Gn8qh.png" alt="华为畅享平板" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为畅享平板
          </div> <p class="grid-desc">享3期分期免息&nbsp;</p> <p class="grid-price">&yen;1299</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086194505402.html" target="_blank" onclick="pushFoolGoodsMsg(this,7,'3','精品平板','10086572770021','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res2.vmallres.com/pimages//product/6901443271146/428_428_1541122609057mp.png" alt="荣耀Waterplay 8英寸 防水影音平板 4GB+64GB WiFi版（皓月银）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀Waterplay 8英寸
          </div> <p class="grid-desc">限时优惠50元&nbsp;</p> <p class="grid-price">&yen;1449</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086401979298.html" target="_blank" onclick="pushFoolGoodsMsg(this,8,'3','精品平板','10086241390721','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res2.vmallres.com/pimages//product/6901443228744/428_428_1542769503188mp.png" alt="华为平板 M5 Pro 4GB+64GB WiFi版（香槟金）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为平板 M5 Pro
          </div> <p class="grid-desc">赠平板支架&nbsp;</p> <p class="grid-price">&yen;3488</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086868573443.html" target="_blank" onclick="pushFoolGoodsMsg(this,9,'3','精品平板','10086385882893','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res2.vmallres.com/pimages//product/6901443223138/428_428_1542769691491mp.png" alt="华为平板 M5 10.8英寸 4GB+32GB WiFi版（香槟金）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为平板 M5 10.8英寸
          </div> <p class="grid-desc">2K高清屏&nbsp;</p> <p class="grid-price">&yen;2488</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/121879018.html" target="_blank" onclick="pushFoolGoodsMsg(this,10,'3','精品平板','729361012','12')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res2.vmallres.com/pimages//product/6901443192441/428_428_1538991053843mp.png" alt="荣耀畅玩平板2 8英寸 WiFi高配版（苍穹灰）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀畅玩平板2 8英寸
          </div> <p class="grid-desc">大电池长续航&nbsp;</p> <p class="grid-price">&yen;988</p> </a> </li> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- 初始值 --> 
   <!-- 分列式 march-past 计算显示商品数量--> 
   <!-- 非对称式 asym_array --> 
   <div class="layout" id="lc_617800"> 
    <div class="home-channel-floor"> 
     <div class="h"> 
      <h2 class="channel-title fl">智能穿戴</h2> 
      <ul class="channel-nav fl"> 
       <li><a href="https://www.vmall.com/list-241" target="_blank" onclick="pushFoolChildrenMsg('4','智能穿戴','手环','/list-241')">手环</a></li> 
       <li><a href="https://www.vmall.com/list-247" target="_blank" onclick="pushFoolChildrenMsg('4','智能穿戴','手表','/list-247')">手表</a></li> 
       <li><a href="https://www.vmall.com/list-329" target="_blank" onclick="pushFoolChildrenMsg('4','智能穿戴','VR','/list-329')">VR</a></li> 
      </ul> 
      <div class="channel-more fr">
       <span></span>
       <span></span>
       <span></span> 
       <a href="https://www.vmall.com/list-59" target="_blank" onclick="pushFoolMsg('4','智能穿戴','/list-59')">查看更多</a> 
      </div> 
     </div> 
     <div class="b"> 
      <div class="goods-list"> 
       <ul class="grid-list clearfix"> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items grid-items-lg"> <a class="thumb" href="https://www.vmall.com/product/10086268042691.html" target="_blank" onclick="pushFoolAdvertMsg('4','智能穿戴','https://res0.vmallres.com/pimages//frontLocation/content/2440103/mRLOJ5NoO8zLTR9uE4bb.png','mRLOJ5NoO8zLTR9uE4bb.png','https://www.vmall.com/product/10086268042691.html')"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/2440103/mRLOJ5NoO8zLTR9uE4bb.png" alt="" src="/static/homes/index/mask.png" /> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086127035863.html" target="_blank" onclick="pushFoolGoodsMsg(this,2,'4','智能穿戴','10086311663325','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//frontLocation/content/5591618/AEVU0KTOx18Edbt1llUQ.png" alt="HUAWEI WATCH GT" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI WATCH GT
          </div> <p class="grid-desc">稀缺货源 限量发售&nbsp;</p> <p class="grid-price">&yen;1288</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086572258093.html" target="_blank" onclick="pushFoolGoodsMsg(this,3,'4','智能穿戴','10086972979696','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443239160/428_428_1539569436793mp.png" alt="【新品首发】华为手环 B5 运动版（韵律黑）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为手环 B5
          </div> <p class="grid-desc">彩屏健康手环&nbsp;</p> <p class="grid-price">&yen;999</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">爆款</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086686072684.html" target="_blank" onclick="pushFoolGoodsMsg(this,4,'4','智能穿戴','10086455419044','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443262472/428_428_1540628828647mp.png" alt="荣耀手环4 标准版（陨石黑）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀手环4
          </div> <p class="grid-desc">触控大彩屏 实时心率检测&nbsp;</p> <p class="grid-price">&yen;199</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">爆款</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086653392602.html" target="_blank" onclick="pushFoolGoodsMsg(this,5,'4','智能穿戴','10086354651877','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//frontLocation/content/5491596/1540545226946.png" alt="华为儿童手表 3 Pro" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为儿童手表 3 Pro
          </div> <p class="grid-desc">4G全网通 高清拍照&nbsp;</p> <p class="grid-price">&yen;988</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/270976970.html" target="_blank" onclick="pushFoolGoodsMsg(this,6,'4','智能穿戴','976288056','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443204212/428_428_1542768153833mp.png" alt="HUAWEI WATCH 2 Pro华为新款智能手表 4G版（钛银灰）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI WATCH 2 Pro
          </div> <p class="grid-desc">赠充电底座&nbsp;</p> <p class="grid-price">&yen;2288</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086913521308.html" target="_blank" onclick="pushFoolGoodsMsg(this,7,'4','智能穿戴','10086949141018','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443262977/428_428_1542767861497mp.png" alt="荣耀手环4 Running版（肆意红）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀手环4 Running版
          </div> <p class="grid-desc">火热销售中~&nbsp;</p> <p class="grid-price">&yen;99</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/658947392.html" target="_blank" onclick="pushFoolGoodsMsg(this,8,'4','智能穿戴','354904425','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443197828/428_428_1540631328840mp.png" alt="HUAWEI WATCH 2 华为第二代智能运动手表 蓝牙版（碳晶黑）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI WATCH 2
          </div> <p class="grid-desc">赠充电底座&nbsp;</p> <p class="grid-price">&yen;1388</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/993405255.html" target="_blank" onclick="pushFoolGoodsMsg(this,9,'4','智能穿戴','636006496','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443183548/428_428_1538991773470mp.png" alt="荣耀手环3 标准版（活力橙）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀手环3
          </div> <p class="grid-desc">50米防水心率手环&nbsp;</p> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">特惠</span></em> </p> </a> </li> 
       </ul> 
      </div> 
      <div id="goodsContent3" class="goods-rolling swiper-container relative pdt-12"> 
       <ul class="grid-list swiper-wrapper clearfix" style="width: 1414px; height: 240px;"> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible swiper-slide-active" id="10"> <a class="thumb" href="https://www.vmall.com/product/874162621.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443204236/428_428_1542769762691mp.png" alt="PORSCHE DESIGN | HUAWEI Smartwatch 华为智能手表 保时捷联合设计（曜石黑）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为智能手表 保时捷联合设计
          </div> <p class="grid-desc">低调奢华 天生不凡&nbsp; </p> <p class="grid-price">&yen;4988</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="11"> <a class="thumb" href="https://www.vmall.com/product/121088789.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443197262/428_428_1542786877830mp.png" alt="华为手环B3 青春版（黑色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为手环B3 青春版
          </div> <p class="grid-desc">是手环 也是耳机&nbsp; </p> <p class="grid-price">&yen;499</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="12"> <a class="thumb" href="https://www.vmall.com/product/184868333.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//frontLocation/content/937161/1488161147740.png" alt="荣耀手表 S1" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀手表 S1
          </div> <p class="grid-desc">限时直降120元&nbsp; </p> <p class="grid-price">&yen;429</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="13"> <a class="thumb" href="https://www.vmall.com/product/798789671.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443190287/428_428_1536216808230mp.png" alt="华为运动手环 标准版（黑色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为运动手环
          </div> <p class="grid-desc">50米防水游泳&nbsp; </p> <p class="grid-price">&yen;298</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="14"> <a class="thumb" href="https://www.vmall.com/product/369652507.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443168712/428_428_1538991432470mp.png" alt="荣耀畅玩手环 A2（魔法黑）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀畅玩手环 A2
          </div> <p class="grid-desc">OLED大屏，防尘防水&nbsp; </p> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠20元</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="15"> <a class="thumb" href="https://www.vmall.com/product/495136506.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443203628/428_428_1539763327956mp.png" alt="华为儿童手表迪士尼系列 米奇款（奇幻蓝）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为儿童手表
          </div> <p class="grid-desc">高清通话，五重定位&nbsp; </p> <p class="grid-price">&yen;688</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="16"> <a class="thumb" href="https://www.vmall.com/product/922041175.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res3.vmallres.com/pimages//product/6901443209385/428_428_1542613671009mp.png" alt="HUAWEI VR 2" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           HUAWEI VR 2
          </div> <p class="grid-desc">适配HUAWEI P20系列，Mate 10系列&nbsp; </p> <p class="grid-price">&yen;1799</p> </a> </li> 
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
   </div> 
   <!-- 初始值 --> 
   <!-- 分列式 march-past 计算显示商品数量--> 
   <!-- 非对称式 asym_array --> 
   <div class="layout" id="lc_617806"> 
    <div class="home-channel-floor"> 
     <div class="h"> 
      <h2 class="channel-title fl">智能家居</h2> 
      <ul class="channel-nav fl"> 
       <li><a href="https://www.vmall.com/list-45" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','路由器','/list-45')">路由器</a></li> 
       <li><a href="https://www.vmall.com/list-263" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','子母/分布式路由','/list-263')">子母/分布式路由</a></li> 
       <li><a href="https://www.vmall.com/list-44" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','电力猫','/list-44')">电力猫</a></li> 
       <li><a href="https://www.vmall.com/list-97" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','随行wifi','/list-97')">随行wifi</a></li> 
       <li><a href="https://www.vmall.com/list-46" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','电视盒子','/list-46')">电视盒子</a></li> 
       <li><a href="https://www.vmall.com/list-371" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','照明','/list-371')">照明</a></li> 
       <li><a href="https://www.vmall.com/list-421" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','清洁','/list-421')">清洁</a></li> 
       <li><a href="https://www.vmall.com/list-423" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','节能','/list-423')">节能</a></li> 
       <li><a href="https://www.vmall.com/list-373" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','环境','/list-373')">环境</a></li> 
       <li><a href="https://www.vmall.com/list-379" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','安防','/list-379')">安防</a></li> 
       <li><a href="https://www.vmall.com/list-403" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','健康','/list-403')">健康</a></li> 
       <li><a href="https://www.vmall.com/list-377" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','厨电','/list-377')">厨电</a></li> 
       <li><a href="https://www.vmall.com/list-407" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','影音','/list-407')">影音</a></li> 
       <li><a href="https://www.vmall.com/list-375" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','卫浴','/list-375')">卫浴</a></li> 
       <li><a href="https://www.vmall.com/list-381" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','其他','/list-381')">其他</a></li> 
      </ul> 
      <div class="channel-more fr">
       <span></span>
       <span></span>
       <span></span> 
       <a href="https://www.vmall.com/list-43" target="_blank" onclick="pushFoolMsg('5','智能家居','/list-43')">查看更多</a> 
      </div> 
     </div> 
     <div class="b"> 
      <div class="goods-list"> 
       <ul class="grid-list clearfix"> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items grid-items-lg"> <a class="thumb" href="https://www.vmall.com/product/10086007028117.html" target="_blank" onclick="pushFoolAdvertMsg('5','智能家居','https://res0.vmallres.com/pimages//frontLocation/content/957167/ibBLBNFCKtbfjaOxBrcJ.png','ibBLBNFCKtbfjaOxBrcJ.png','https://www.vmall.com/product/10086007028117.html')"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/957167/ibBLBNFCKtbfjaOxBrcJ.png" alt="" src="/static/homes/index/mask.png" /> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086423109158.html" target="_blank" onclick="pushFoolGoodsMsg(this,2,'5','智能家居','10086794601109','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//frontLocation/content/5592706/1541854632069.png" alt="华为AI音箱" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为AI音箱
          </div> <p class="grid-desc">丹拿音质 声纹识别&nbsp;</p> <p class="grid-price">&yen;399</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086500145070.html" target="_blank" onclick="pushFoolGoodsMsg(this,3,'5','智能家居','10086061866500','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443219940/428_428_1542787177523mp.png" alt="华为子母路由 Q2（1母1子）（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为子母路由 Q2
          </div> <p class="grid-desc">哪里信号不好插哪里&nbsp;</p> <p class="grid-price">&yen;799</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086958063836.html" target="_blank" onclick="pushFoolGoodsMsg(this,4,'5','智能家居','10086943604110','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443257485/428_428_1542765330080mp.png" alt="荣耀路由2S（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀路由2S（白色）
          </div> <p class="grid-desc">限时直降20元&nbsp;</p> <p class="grid-price">&yen;179</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086250287882.html" target="_blank" onclick="pushFoolGoodsMsg(this,5,'5','智能家居','10086050080641','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//frontLocation/content/5494392/1540624063222.png" alt="华为备咖存储" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为备咖存储
          </div> <p class="grid-desc">新品上市 1T大容量&nbsp;</p> <p class="grid-price">&yen;699</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/611513952.html" target="_blank" onclick="pushFoolGoodsMsg(this,6,'5','智能家居','480239066','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443197071/428_428_1542765947334mp.png" alt="荣耀路由2（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀路由2
          </div> <p class="grid-desc">限时优惠20元 赠数据线&nbsp;</p> <p class="grid-price">&yen;179</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">赠数据线</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/129656917.html" target="_blank" onclick="pushFoolGoodsMsg(this,7,'5','智能家居','961348112','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443202461/428_428_1539914752799mp.png" alt="华为路由器WS5200（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为路由WS5200
          </div> <p class="grid-desc">真双频就是快&nbsp;</p> <p class="grid-price">&yen;269</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/3053.html" target="_blank" onclick="pushFoolGoodsMsg(this,8,'5','智能家居','7219','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//frontLocation/content/775339/1482233802925.png" alt="荣耀路由Pro" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀路由Pro
          </div> <p class="grid-desc">限时直降40元&nbsp;</p> <p class="grid-price">&yen;288</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">热卖</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/538499714.html" target="_blank" onclick="pushFoolGoodsMsg(this,9,'5','智能家居','477306982','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443135929/428_428_1539569068557mp.png" alt="华为子母路由器 Q1 （白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为子母路由器 Q1
          </div> <p class="grid-desc">大户型优选&nbsp;</p> <p class="grid-price">&yen;459</p> </a> </li> 
       </ul> 
      </div> 
      <div id="goodsContent4" class="goods-rolling swiper-container relative pdt-12"> 
       <ul class="grid-list swiper-wrapper clearfix" style="width: 2222px; height: 240px;"> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible swiper-slide-active" id="10"> <a class="thumb" href="https://www.vmall.com/product/1822.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//frontLocation/content/775335/1482233766254.png" alt="荣耀路由标准版" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀路由标准版
          </div> <p class="grid-desc">限时直降60元&nbsp; </p> <p class="grid-price">&yen;99</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">特惠</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="11"> <a class="thumb" href="https://www.vmall.com/product/10086884483404.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443238613/428_428_1542787251423mp.png" alt="华为路由器WS5102（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为路由器WS5102
          </div> <p class="grid-desc">真双频就是快&nbsp; </p> <p class="grid-price">&yen;159</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="12"> <a class="thumb" href="https://www.vmall.com/product/23860218.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443181803/428_428_1538985163609mp.png" alt="荣耀路由X1 增强版（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀路由X1 增强版
          </div> <p class="grid-desc">限时直降50元&nbsp; </p> <p class="grid-price">&yen;99</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">热卖</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="13"> <a class="thumb" href="https://www.vmall.com/product/886153777.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443139323/428_428_1542787396488mp.png" alt="华为路由器 A1（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为路由器 A1
          </div> <p class="grid-desc">千兆网口+千兆WiFi&nbsp; </p> <p class="grid-price">&yen;399</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="14"> <a class="thumb" href="https://www.vmall.com/product/690174055.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443135615/428_428_1538969920769mp.png" alt="荣耀盒子Pro （白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀盒子Pro
          </div> <p class="grid-desc">4K旗舰 2GB大内存&nbsp; </p> <p class="grid-price">&yen;399</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="15"> <a class="thumb" href="https://www.vmall.com/product/10086375378626.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443256150/428_428_1542787490763mp.png" alt="华为 WiFi 放大器 （白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为 WiFi 放大器
          </div> <p class="grid-desc">新品上市&nbsp; </p> <p class="grid-price">&yen;99</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="16"> <a class="thumb" href="https://www.vmall.com/product/202235028.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443202386/428_428_1542768241169mp.png" alt="荣耀分布式路由（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀分布式路由
          </div> <p class="grid-desc">限时直降140元&nbsp; </p> <p class="grid-price">&yen;759</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="17"> <a class="thumb" href="https://www.vmall.com/product/10086462400745.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443249282/428_428_1542787558155mp.png" alt="华为随行WiFi 2 畅享版（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为随行WiFi 2 畅享版
          </div> <p class="grid-desc">新品上市&nbsp; </p> <p class="grid-price">&yen;349</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="18"> <a class="thumb" href="https://www.vmall.com/product/3061.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//frontLocation/content/775349/1482233776849.png" alt="荣耀WiFi穿墙宝" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀WiFi穿墙宝
          </div> <p class="grid-desc">插座变热点 信号变满格&nbsp; </p> <p class="grid-price">&yen;248</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="19"> <a class="thumb" href="https://www.vmall.com/product/515922308.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443198368/428_428_1539763025755mp.png" alt="华为路由器WS5100（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为路由器WS5100
          </div> <p class="grid-desc">支持5G信号智能优先选择&nbsp; </p> <p class="grid-price">&yen;159</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="20"> <a class="thumb" href="https://www.vmall.com/product/10086059855192.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res4.vmallres.com/pimages//product/6901443233823/428_428_1542787881950mp.png" alt="【新品首发】华为4G路由 2（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为4G路由 2（白色）
          </div> <p class="grid-desc">千兆网口 一机两用&nbsp; </p> <p class="grid-price">&yen;389</p> </a> </li> 
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
   </div> 
   <!--20170222 中通 start--> 
   <div class="hr-27"></div> 
   <div class="channel-floor index-channel-floor"> 
    <div class="layout"> 
     <!-- 2017-02-15-banner-1200*110-start --> 
     <div class="home-banner"> 
      <!-- 2017-02-15-banner-图片轮换-start --> 
      <div class="home-banner-slideshow"> 
       <!-- 20130903-ad-图片轮换-start --> 
       <div class="banner-slideshow"> 
        <div id="web_index_ads_floor5" class="ec-slider" style="width: 1200px; height: 120px;"> 
         <ul class="ec-slider-list" style="width: 1200px; height: 120px;"> 
          <li class="ec-slider-item" style="width: 1200px; height: 120px;">
           <div class="ec-slider-item-img">
            <a href="https://sale.vmall.com/vmallsmarthome.html" onclick="_paq.push(['trackLink','首页中间通栏广告第1位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/static/homes/index/l9AMuQg1ooXC9SB9LND3.jpg" /></a>
           </div></li> 
         </ul> 
        </div> 
        <script>
		ec.load("ec.slider", {
			loadType : "lazy",
			callback : function() { 
				$("#web_index_ads_floor5").slider({
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
   <div class="hr-13"></div> 
   <!--20170222 中通 end--> 
   <!-- 初始值 --> 
   <!-- 分列式 march-past 计算显示商品数量--> 
   <!-- 非对称式 asym_array --> 
   <div class="layout" id="lc_617802"> 
    <div class="home-channel-floor"> 
     <div class="h"> 
      <h2 class="channel-title fl">热销配件</h2> 
      <ul class="channel-nav fl"> 
       <li><a href="https://www.vmall.com/list-56" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','移动电源','/list-56')">移动电源</a></li> 
       <li><a href="https://www.vmall.com/list-229" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','耳机','/list-229')">耳机</a></li> 
       <li><a href="https://www.vmall.com/list-58" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','充电器/线材','/list-58')">充电器/线材</a></li> 
       <li><a href="https://www.vmall.com/list-231" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','自拍杆/支架','/list-231')">自拍杆/支架</a></li> 
       <li><a href="https://www.vmall.com/list-55" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','音箱','/list-55')">音箱</a></li> 
       <li><a href="https://www.vmall.com/list-568" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','取卡针','/list-568')">取卡针</a></li> 
       <li><a href="https://www.vmall.com/list-83" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','U盘/存储卡','/list-83')">U盘/存储卡</a></li> 
       <li><a href="https://www.vmall.com/list-235" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','摄像机/镜头','/list-235')">摄像机/镜头</a></li> 
       <li><a href="https://www.vmall.com/list-239" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','智能硬件','/list-239')">智能硬件</a></li> 
       <li><a href="https://www.vmall.com/list-237" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','生活周边','/list-237')">生活周边</a></li> 
      </ul> 
      <div class="channel-more fr">
       <span></span>
       <span></span>
       <span></span> 
       <a href="https://www.vmall.com/list-54" target="_blank" onclick="pushFoolMsg('6','热销配件','/list-54')">查看更多</a> 
      </div> 
     </div> 
     <div class="b"> 
      <div class="goods-list"> 
       <ul class="grid-list clearfix"> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items grid-items-lg"> <a class="thumb" href="https://www.vmall.com/product/10086335437779.html" target="_blank" onclick="pushFoolAdvertMsg('6','热销配件','https://res0.vmallres.com/pimages//frontLocation/content/951979/rU7HOVPxR80laNI4oGa9.png','rU7HOVPxR80laNI4oGa9.png','https://www.vmall.com/product/10086335437779.html')"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/951979/rU7HOVPxR80laNI4oGa9.png" alt="" src="/static/homes/index/mask.png" /> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/936223974.html" target="_blank" onclick="pushFoolGoodsMsg(this,2,'6','热销配件','534967719','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443207077/428_428_1542788291468mp.png" alt="华为智能体脂秤" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为智能体脂秤
          </div> <p class="grid-desc">健身减脂必备&nbsp;</p> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">爆款</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086576602689.html" target="_blank" onclick="pushFoolGoodsMsg(this,3,'6','热销配件','10086097429247','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443221059/428_428_1542787970332mp.png" alt="华为主动降噪耳机3" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为主动降噪耳机3
          </div> <p class="grid-desc">3种降噪模式切换&nbsp;</p> <p class="grid-price">&yen;299</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/875753311.html" target="_blank" onclick="pushFoolGoodsMsg(this,4,'6','热销配件','189161731','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443174256/428_428_1542854411097mp.png" alt="荣耀xSport 运动蓝牙耳机（魅焰红）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀xSport 运动蓝牙耳机
          </div> <p class="grid-desc">10天待机，11小时续航&nbsp;</p> <p class="grid-price">&yen;199</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠50元</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/194128141.html" target="_blank" onclick="pushFoolGoodsMsg(this,5,'6','热销配件','553811697','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443173129/428_428_1538985401864mp.png" alt="荣耀智能体脂秤（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀智能体脂秤
          </div> <p class="grid-desc">科学指导减脂&nbsp;</p> <p class="grid-price">&yen;99</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠70元</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/602512743.html" target="_blank" onclick="pushFoolGoodsMsg(this,6,'6','热销配件','603420628','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443204694/428_428_1539762466042mp.png" alt="华为运动心率蓝牙耳机R1 Pro（红色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为运动心率蓝牙耳机R1 Pro
          </div> <p class="grid-desc">可测心理压力 提供放松训练&nbsp;</p> <p class="grid-price">&yen;599</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/15662504.html" target="_blank" onclick="pushFoolGoodsMsg(this,7,'6','热销配件','10086382647472','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443231478/428_428_1539762251938mp.png" alt="华为车载充电器QuickCharge快充版（Max 18W）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为车载充电器快充版
          </div> <p class="grid-desc">支持9V2A快充&nbsp;</p> <p class="grid-price">&yen;49</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">热卖</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/259735704.html#10086829950914" target="_blank" onclick="pushFoolGoodsMsg(this,8,'6','热销配件','10086829950914','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/1302020001109/428_428_1540007116330mp.png" alt="荣耀移动电源10000mAh快充版 （黑色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀移动电源10000mAh快充版
          </div> <p class="grid-desc">双向快充/锂聚合物电芯&nbsp;</p> <p class="grid-price">&yen;139</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠40元</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/794044956.html" target="_blank" onclick="pushFoolGoodsMsg(this,9,'6','热销配件','879733047','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443192946/428_428_1542768064250mp.png" alt="华为全景相机（灰色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为全景相机
          </div> <p class="grid-desc">360度无界视野&nbsp;</p> <p class="grid-price">&yen;499</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">爆款</span></em> </p> </a> </li> 
       </ul> 
      </div> 
      <div id="goodsContent5" class="goods-rolling swiper-container relative pdt-12"> 
       <ul class="grid-list swiper-wrapper clearfix" style="width: 3636px; height: 240px;"> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible swiper-slide-active" id="10"> <a class="thumb" href="https://www.vmall.com/product/812952235.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443105649/428_428_1539941134837mp.png" alt="荣耀引擎耳机2代（皓月银）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀引擎耳机2代
          </div> <p class="grid-desc">物理调音黑科技&nbsp; </p> <p class="grid-price">&yen;79</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠50元</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="11"> <a class="thumb" href="https://www.vmall.com/product/944393591.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443155439/428_428_1543030211833mp.png" alt="华为车载充电器SuperCharge快充版（Max 22.5W）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为车载充电器SuperCharge快充
          </div> <p class="grid-desc">4.5V5A车充&nbsp; </p> <p class="grid-price">&yen;149</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">爆款</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="12"> <a class="thumb" href="https://www.vmall.com/product/10086872833199.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443231911/428_428_1538991969182mp.png" alt="荣耀心晴耳机 心率智能耳机（幻夜黑）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀心晴耳机
          </div> <p class="grid-desc">心率智能耳机&nbsp; </p> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠30元</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="13"> <a class="thumb" href="https://www.vmall.com/product/20999181.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443177486/428_428_1542772477082mp.png" alt="华为三脚架自拍杆 无线版（黑色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为无线三脚架自拍杆
          </div> <p class="grid-desc">开启自拍新时代&nbsp; </p> <p class="grid-price">&yen;119</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">爆款</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="14"> <a class="thumb" href="https://www.vmall.com/product/3281.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443076543/428_428_1542854594365mp.png" alt="荣耀 AM116半入耳式耳机（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀 AM116半入耳式耳机
          </div> <p class="grid-desc">三键线控/高性价比&nbsp; </p> <p class="grid-price">&yen;49</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠40元</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="15"> <a class="thumb" href="https://www.vmall.com/product/10086747772894.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443250158/428_428_1542771794773mp.png" alt="华为全景相机酷玩版（星云蓝）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为全景相机酷玩版
          </div> <p class="grid-desc">360&deg;照片/视频/微博直播&nbsp; </p> <p class="grid-price">&yen;599</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="16"> <a class="thumb" href="https://www.vmall.com/product/10086262026261.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443218516/428_428_1542855247819mp.png" alt="荣耀魔声耳机2（深海蓝）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀魔声耳机2（深海蓝）
          </div> <p class="grid-desc">给您如临现场的音质体验&nbsp; </p> <p class="grid-price">&yen;199</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠50元</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="17"> <a class="thumb" href="https://www.vmall.com/product/583301172.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/3102020000901/428_428_1543022317597mp.png" alt="荣耀车载充电器（supercharge 快充版）（含Type C数据线）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀车载充电器（supercharge 快充版）（赠数据线）
          </div> <p class="grid-desc">赠5A Type C数据线&nbsp; </p> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#">买赠</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="18"> <a class="thumb" href="https://www.vmall.com/product/10086029405648.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443214174/428_428_1542856174725mp.png" alt="荣耀多口充电器SuperCharge快充版（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀多口充电器SuperCharge快充版
          </div> <p class="grid-desc">小巧精悍一个顶仨&nbsp; </p> <p class="grid-price">&yen;129</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠20元</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="19"> <a class="thumb" href="https://www.vmall.com/product/2247.html#7659" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443081622/428_428_1542855523115mp.png" alt="荣耀引擎耳机PLUS（香槟金）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀引擎耳机PLUS
          </div> <p class="grid-desc">好看好听好品质&nbsp; </p> <p class="grid-price">&yen;69</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠30元</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="20"> <a class="thumb" href="https://www.vmall.com/product/10086821090867.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443218554/428_428_1542771573813mp.png" alt="华为补光灯自拍杆（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为补光灯自拍杆
          </div> <p class="grid-desc">柔光自拍&nbsp; </p> <p class="grid-price">&yen;119</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="21"> <a class="thumb" href="https://www.vmall.com/product/200162339.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443211142/428_428_1542764207163mp.png" alt="荣耀音乐小巨蛋（红色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀音乐小巨蛋
          </div> <p class="grid-desc">便携式蓝牙音箱&nbsp; </p> <p class="grid-price">&yen;179</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠20元</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="22"> <a class="thumb" href="https://www.vmall.com/product/10086337265570.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443208838/428_428_1542771192974mp.png" alt="华为数字耳放（Type-C转3.5mm耳机孔）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           华为数字耳放
          </div> <p class="grid-desc">手机秒变Hi-Fi播放器&nbsp; </p> <p class="grid-price">&yen;599</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">新品</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="23"> <a class="thumb" href="https://www.vmall.com/product/927153142.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443154715/428_428_1542855370113mp.png" alt="荣耀车载充电器  快充版（含Type C数据线）黑色" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀车载充电器 快充版
          </div> <p class="grid-desc">5A快充4重保护&nbsp; </p> <p class="grid-price">&yen;79</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠20元</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="24"> <a class="thumb" href="https://www.vmall.com/product/430223039.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443184903/428_428_1542856234581mp.png" alt="荣耀三脚架自拍杆 无线版（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀三脚架自拍杆 无线版
          </div> <p class="grid-desc">蓝牙遥控 不止自拍&nbsp; </p> <p class="grid-price">&yen;89</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="25"> <a class="thumb" href="https://www.vmall.com/product/570114585.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443075201/428_428_1543022906890mp.png" alt="荣耀小天鹅蓝牙音箱（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀小天鹅蓝牙音箱
          </div> <p class="grid-desc">360&deg;高清环绕音箱/优雅外观&nbsp; </p> <p class="grid-price">&yen;79</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="26"> <a class="thumb" href="https://www.vmall.com/product/10086441148894.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443232499/428_428_1542856663333mp.png" alt="荣耀月光棒 柔光自拍杆（幻夜黑）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀月光棒 柔光自拍杆
          </div> <p class="grid-desc">暗光自拍也清晰靓丽&nbsp; </p> <p class="grid-price">&yen;119</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠20元</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="27"> <a class="thumb" href="https://www.vmall.com/product/10086643319817.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res5.vmallres.com/pimages//product/6901443257300/428_428_1542935118441mp.png" alt="荣耀经典耳机 USB Type-c版（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           荣耀经典耳机 USB Type-c版
          </div> <p class="grid-desc">Type-C接口，降噪升级&nbsp; </p> <p class="grid-price">&yen;79</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">限时优惠20元</span></em> </p> </a> </li> 
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
   </div> 
   <!-- 初始值 --> 
   <!-- 分列式 march-past 计算显示商品数量--> 
   <!-- 非对称式 asym_array --> 
   <div class="layout" id="lc_617966"> 
    <div class="home-channel-floor"> 
     <div class="h"> 
      <h2 class="channel-title fl">品牌配件</h2> 
      <ul class="channel-nav fl"> 
       <li><a href="https://www.vmall.com/list-56" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','移动电源','/list-56')">移动电源</a></li> 
       <li><a href="https://www.vmall.com/list-229" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','耳机','/list-229')">耳机</a></li> 
       <li><a href="https://www.vmall.com/list-58" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','充电器/线材','/list-58')">充电器/线材</a></li> 
       <li><a href="https://www.vmall.com/list-231" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','自拍杆/支架','/list-231')">自拍杆/支架</a></li> 
       <li><a href="https://www.vmall.com/list-55" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','音箱','/list-55')">音箱</a></li> 
       <li><a href="https://www.vmall.com/list-568" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','取卡针','/list-568')">取卡针</a></li> 
       <li><a href="https://www.vmall.com/list-83" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','U盘/存储卡','/list-83')">U盘/存储卡</a></li> 
       <li><a href="https://www.vmall.com/list-235" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','摄像机/镜头','/list-235')">摄像机/镜头</a></li> 
       <li><a href="https://www.vmall.com/list-239" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','智能硬件','/list-239')">智能硬件</a></li> 
       <li><a href="https://www.vmall.com/list-237" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','生活周边','/list-237')">生活周边</a></li> 
      </ul> 
      <div class="channel-more fr">
       <span></span>
       <span></span>
       <span></span> 
       <a href="https://www.vmall.com/list-54" target="_blank" onclick="pushFoolMsg('7','品牌配件','/list-54')">查看更多</a> 
      </div> 
     </div> 
     <div class="b"> 
      <div class="goods-list"> 
       <ul class="grid-list clearfix"> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items grid-items-lg"> <a class="thumb" href="https://www.vmall.com/product/10086312412951.html#10086619231827" target="_blank" onclick="pushFoolAdvertMsg('7','品牌配件','https://res0.vmallres.com/pimages//frontLocation/content/1268659/SzsULCGW8kXdTioyQBzn.jpg','SzsULCGW8kXdTioyQBzn.jpg','https://www.vmall.com/product/10086312412951.html#10086619231827')"> <img data-lazy-src="https://res0.vmallres.com/pimages//frontLocation/content/1268659/SzsULCGW8kXdTioyQBzn.jpg" alt="" src="/static/homes/index/mask.png" /> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086203472371.html" target="_blank" onclick="pushFoolGoodsMsg(this,2,'7','品牌配件','10086231514149','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150039901/428_428_1540952549939mp.png" alt="华为智选生态产品 欧普读写台灯（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           欧普读写台灯
          </div> <p class="grid-desc">用好光 才爱眼&nbsp;</p> <p class="grid-price">&yen;159</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086462944251.html" target="_blank" onclick="pushFoolGoodsMsg(this,3,'7','品牌配件','10086400304768','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102160015601/428_428_1541854778298mp.png" alt="北通G1手游游戏手柄-蓝牙版（黑色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           北通G1手游游戏手柄
          </div> <p class="grid-desc">专属游戏手柄&nbsp;</p> <p class="grid-price">&yen;269</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">首发</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/928391914.html" target="_blank" onclick="pushFoolGoodsMsg(this,4,'7','品牌配件','677125219','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150000501/428_428_1541383347891mp.png" alt="科沃斯（Ecovacs）地宝小睿 DW700 智能扫地机器人 规划扫地拖地一体（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           科沃斯地宝小睿扫地机器人
          </div> <p class="grid-desc">擦地 纤尘不染的奥秘&nbsp;</p> <p class="grid-price">&yen;849</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">热卖</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086305290078.html" target="_blank" onclick="pushFoolGoodsMsg(this,5,'7','品牌配件','10086074542484','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3101020003802/428_428_1540950427641mp.png" alt="M5 10.8、M5 Pro平板电脑皮套键盘（棕色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           M5 平板电脑皮套键盘
          </div> <p class="grid-desc">轻薄优雅 质感亲肤&nbsp;</p> <p class="grid-price">&yen;498</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086833471847.html" target="_blank" onclick="pushFoolGoodsMsg(this,6,'7','品牌配件','10086066461369','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150043501/428_428_1541644086994mp.png" alt="海雀智能摄像头H1 白色（支持HUAWEI HiLink）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           海雀智能摄像头H1
          </div> <p class="grid-desc">成就多样智慧生活方式&nbsp;</p> <p class="grid-price">&yen;259</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">热卖</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086701009465.html" target="_blank" onclick="pushFoolGoodsMsg(this,7,'7','品牌配件','10086433057592','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150002401/428_428_1539940731174mp.png" alt="720空气质量监测仪环境宝3 （白色）（支持HUAWEI HiLink）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           720空气质量监测仪环境宝3
          </div> <p class="grid-desc">保障居家健康&nbsp;</p> <p class="grid-price">&yen;449</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">热卖</span></em> </p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086045171328.html" target="_blank" onclick="pushFoolGoodsMsg(this,8,'7','品牌配件','10086740796176','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102160013002/428_428_1539941429103mp.png" alt="55度moscup智能降温杯（宇舶白）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           55度moscup智能降温杯
          </div> <p class="grid-desc">一分钟快速降温&nbsp;</p> <p class="grid-price">&yen;238</p> </a> </li> 
        <li class="grid-items"> <a class="thumb" href="https://www.vmall.com/product/10086412480473.html" target="_blank" onclick="pushFoolGoodsMsg(this,9,'7','品牌配件','10086850719814','13')"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102160016001/428_428_1540367360482mp.png" alt="海备思高清无线投屏器（黑色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           海备思高清无线投屏器
          </div> <p class="grid-desc">扫码投屏 4K高清&nbsp;</p> <p class="grid-price">&yen;225</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">首发</span></em> </p> </a> </li> 
       </ul> 
      </div> 
      <div id="goodsContent6" class="goods-rolling swiper-container relative pdt-12"> 
       <ul class="grid-list swiper-wrapper clearfix" style="width: 2626px; height: 240px;"> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible swiper-slide-active" id="10"> <a class="thumb" href="https://www.vmall.com/product/10086132466242.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150001201/428_428_1541761166239mp.png" alt="科沃斯（Ecovacs）地宝D36F 智能扫地机器人（支持HUAWEI HiLink）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           科沃斯地宝D36F 扫地机器人
          </div> <p class="grid-desc">净彩生活 不止优雅&nbsp; </p> <p class="grid-price">&yen;949</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#FF6A6E">直降</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="11"> <a class="thumb" href="https://www.vmall.com/product/10086934991610.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150017103/428_428_1543460970014mp.png" alt="西勒奇智能指纹锁SE201V（油墨古铜）（支持HUAWEI HiLink）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           西勒奇智能指纹锁SE201V
          </div> <p class="grid-desc">西勒奇百年传承&nbsp; </p> <p class="grid-price">&yen;3580</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="12"> <a class="thumb" href="https://www.vmall.com/product/10086541811502.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150042701/428_428_1539572631283mp.png" alt="极米无屏电视Z6X 黑色（支持HUAWEI HiLink）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           极米无屏电视Z6X
          </div> <p class="grid-desc">曜黑之作 智成光芒&nbsp; </p> <p class="grid-price">&yen;2999</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="13"> <a class="thumb" href="https://www.vmall.com/product/10086072295004.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102030004802/428_428_1526635727042mp.png" alt="Momax 精英3合1编织线（Micro转lightning转USB C-1m）（黑色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           Momax 精英3合1编织线
          </div> <p class="grid-desc">随时随地 快速切换&nbsp; </p> <p class="grid-price">&yen;88</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="14"> <a class="thumb" href="https://www.vmall.com/product/1840.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB10113050104001/428_428_1539746129534mp.png" alt="耐翔 NAENY 手机扩容U盘 安卓版 16GB存储（银色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           耐翔 手机扩容U盘 安卓版
          </div> <p class="grid-desc">手机轻松扩容，高效传输&nbsp; </p> <p class="grid-price"><span>暂无报价</span></p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide swiper-slide-visible" id="15"> <a class="thumb" href="https://www.vmall.com/product/10086386668533.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150040201/428_428_1540951957596mp.png" alt="华为智选生态产品 欧普香薰助眠灯（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           欧普香薰助眠灯（白色）
          </div> <p class="grid-desc">静谧时光 润色添香&nbsp; </p> <p class="grid-price">&yen;189</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="16"> <a class="thumb" href="https://www.vmall.com/product/898148996.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB1303110000305/428_428_1539596396537mp.png" alt="闪迪 SanDisk内存卡ClASS10高速存储TF卡读取速度98MB/秒16G（红灰色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           闪迪高速存储TF卡
          </div> <p class="grid-desc">海量存储 携带方便&nbsp; </p> <p class="grid-price">&yen;45.90</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="17"> <a class="thumb" href="https://www.vmall.com/product/10086547350250.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150024001/428_428_1541642627139mp.png" alt="Sengled生迪智能LED灯泡 暖光（支持HUAWEI HiLink）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           生迪智能LED灯泡 暖光
          </div> <p class="grid-desc">一款为花粉打造的智能灯泡&nbsp; </p> <p class="grid-price">&yen;45</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="18"> <a class="thumb" href="https://www.vmall.com/product/10086254407717.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150038801/428_428_1540951967494mp.png" alt="华为智选生态产品 三思全彩灯泡（白色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           三思全彩灯泡（白色）
          </div> <p class="grid-desc">耀.出彩&nbsp; </p> <p class="grid-price">&yen;89</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="19"> <a class="thumb" href="https://www.vmall.com/product/10086438110583.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102090002501/428_428_1539349622902mp.png" alt="Momax Tripod Pro 6精英三脚架（金色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           Momax 6精英三脚架
          </div> <p class="grid-desc">手机拍摄最佳拍档&nbsp; </p> <p class="grid-price">&yen;468</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="20"> <a class="thumb" href="https://www.vmall.com/product/10086130919562.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150047801/428_428_1539334065645mp.png" alt="BOW 大尺寸三折蓝牙背光键盘HB099B（黑色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           BOW 三折蓝牙背光键盘
          </div> <p class="grid-desc">多设备通用办公键盘&nbsp; </p> <p class="grid-price">&yen;299</p> <p class="grid-tips"> <em class="thumb"><span class="color01" style="background-color:#68BEFF">首发</span></em> </p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="21"> <a class="thumb" href="https://www.vmall.com/product/10086073364193.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150044301/428_428_1539221202270mp.PNG" alt="摩飞（Morphyrichards）MR9500便携式榨汁机 （蓝色）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           摩飞便携式榨汁机
          </div> <p class="grid-desc">超便捷的果蔬料理机&nbsp; </p> <p class="grid-price">&yen;298</p> </a> </li> 
        <!--通过添加current 来实现 hover效果--> 
        <li class="grid-items swiper-slide" id="22"> <a class="thumb" href="https://www.vmall.com/product/10086695633756.html" target="_blank"> 
          <div class="grid-info"> 
           <p class="grid-img"> <img data-lazy-src="https://res6.vmallres.com/pimages//product/GB3102150039601/428_428_1543481226191mp.png" alt="Sleepace享睡-享睡纽扣B501 白色（支持HUAWEI HiLink）" src="/static/homes/index/mask.png" /> </p> 
          </div> 
          <div class="grid-title">
           享睡 享睡纽扣
          </div> <p class="grid-desc">DOT享睡纽扣&nbsp; </p> <p class="grid-price">&yen;79</p> </a> </li> 
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
   </div> 
   <div class="hr-20"></div> 
  </div> 
  <!-- 2017-02-15-HOME GOOGLIST-end --> 
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
  <script>
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
	var e = $(".grid-list .grid-items,.grid-promo-list .grid-items");
	e.hover(function () {
		$(this).addClass("current")
	}, function () {
		$(this).removeClass("current")
	});
})


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