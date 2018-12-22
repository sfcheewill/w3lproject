//ajax开始结束时

var Server = window.location.href.substr(0,window.location.href.lastIndexOf("/")+1);//服务器接口地址
// var Server = 'http://weblink01-ts.huawei.com/cashier_core/';


/*var hwaJsUrl,hwaSiteId;
hwaJsUrl = document.paramForm.hwaJsUrl.value;
hwaSiteId = document.paramForm.hwaSiteId.value;

var hwaIpUrl = document.paramForm.hwaIpUrl.value;
var hwaRefuse = 1;*/


//解析url参数 方法1
function GetQueryString(name)
{
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null)
        return decodeURIComponent(r[2]);
    return null;
}

//解析url参数方法2
 function GetRequest(){
            var url = location.search;
            var theRequest = new Object();
            if(url.indexOf("?")!=-1){
                var str = url.substr(1);
                strs = str.split("&");
                for(var i=0;i<strs.length;i++){
                    theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
                }
            }
            return theRequest;
        }
 function getRequestAttr(name){
     var Request=GetRequest();
     var value=Request[name];
     if (!value){
         value="";
     }
     return value;
 }


//判断弹窗按钮类型
Handlebars.registerHelper("xif", function (v1, v2, options) {
    return v1 == v2 ? options.fn(this) : options.inverse(this);
});


//解析url参数 方法3
function getUrlParam(name){
				var reg = new RegExp("(^|&)"+name+"=([^&]*)(&|$)");//构造一个含有目标参数的正则表达式对象
				var r = window.location.search.substr(1).match(reg);//匹配目标参数
				if(r!=null) return unescape(r[2]);
				return null;//返回参数值
			}

/**
 * 生成url中带以下字段的参数
 * @param productType
 * @param region
 * @param lan
 */
function getCommonParams(productType,region,lan) {

    return "&product_type="+productType+"&region="+region+"&lan="+lan;
}


//GetDateDiff(start, end, "day")
/*
 * 获得时间差,时间格式为 年-月-日 小时:分钟:秒 或者 年/月/日 小时：分钟：秒
 * 其中，年月日为全格式，例如 ： 2010-10-12 01:00:00
 * 返回精度为：秒，分，小时，天
 */
function GetDateDiff(startTime, endTime, diffType) {
	//将xxxx-xx-xx的时间格式，转换为 xxxx/xx/xx的格式
	startTime = startTime.replace(/-/g, "/");
	endTime = endTime.replace(/-/g, "/");
	//将计算间隔类性字符转换为小写
	diffType = diffType.toLowerCase();
	var sTime = new Date(startTime); //开始时间
	var eTime = new Date(endTime); //结束时间
	//作为除数的数字
	var divNum = 1;
	switch(diffType) {
		case "second":
			divNum = 1000;
			break;
		case "minute":
			divNum = 1000 * 60;
			break;
		case "hour":
			divNum = 1000 * 3600;
			break;
		case "day":
			divNum = 1000 * 3600 * 24;
			break;
		default:
			break;
	}
	return parseInt((eTime.getTime() - sTime.getTime()) / parseInt(divNum)); //17jquery.com
}

//获取当前时间
function getNowFormatDate() {
	var d = new Date()

	var seperator1 = "-";
	var seperator2 = ":";

	var vYear = d.getFullYear()
	var vMon = d.getMonth() + 1
	var vDay = d.getDate()
	var h = d.getHours();
	var m = d.getMinutes();
	var se = d.getSeconds();
	s = vYear + seperator1 + (vMon < 10 ? "0" + vMon : vMon) + seperator1 + (vDay < 10 ? "0" + vDay : vDay) + " " + (h < 10 ? "0" + h : h) + seperator2 + (m < 10 ? "0" + m : m) + seperator2 + (se < 10 ? "0" + se : se);
	return s;
}

Handlebars.registerHelper("compare", function(v1, v2, options) {
    if(v1 > v2) {
//满足添加继续执行
        return options.fn(this);
    } else {
//不满足条件执行{{else}}部分
        return options.inverse(this);
    }
});


Handlebars.registerHelper("nif", function(v1, v2 ,v3, v4, options) {
    if(v1 || v2 || v3 || v4) {
//满足添加继续执行
        return options.fn(this);
    } else {
//不满足条件执行{{else}}部分
        return options.inverse(this);
    }
});
//        获取事件
function getEvent(){
    if(window.event)    {return window.event;}
    func=getEvent.caller;
    while(func!=null){
        var arg0=func.arguments[0];
        if(arg0){
            if((arg0.constructor==Event || arg0.constructor ==MouseEvent
                || arg0.constructor==KeyboardEvent)
                ||(typeof(arg0)=="object" && arg0.preventDefault
                && arg0.stopPropagation)){
                return arg0;
            }
        }
        func=func.caller;
    }
    return null;
}
//阻止冒泡
function cancelBubble()
{
    var e=getEvent();
    if(window.event){
        //e.returnValue=false;//阻止自身行为
        e.cancelBubble=true;//阻止冒泡
    }else {
        //e.preventDefault();//阻止自身行为
        e.stopPropagation();//阻止冒泡
    }
}

/*function stopBubble(){
	 var e= arguments.callee.caller.arguments[0] || event;  
     if(e && e.stopPropagation){  
       e.stopPropagation();  
     }else if(window.event){  
       window.event.cancelBubble = true;  
     }
}*/

/** * 对list排序 * @param {boolean} flag [正逆序标记] * @param {JQ dom} $domlist [参与排序的列表] * @return {JQ dom} [返回重新排序过的列表] */
var sortDom = function(flag, $domlist) {
	var $item = $domlist.find('.item');
	var $newList = Array.prototype.sort.call($item, function(a, b) {
		return flag ? ($(a).find('.item-count').html() - 0) - ($(b).find('.item-count').html() - 0) : ($(b).find('.item-count').html() - 0) - ($(a).find('.item-count').html() - 0)
	});
	return$newList;
}


