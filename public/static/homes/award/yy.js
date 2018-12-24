/**
 * 抽奖活动防黄牛数据
 * 引用地址：http://res.vmallres.com/20150723/js/common/activity/yy.js
 */

window.YY || (window.YY = {});

YY.cookie = {
    get: function(key) {
        var f = null;
        if (document.cookie && document.cookie != "") {
            var cookies = document.cookie.split(";");
            for (var idx = 0; idx < cookies.length; idx++) {
                var cookie = (cookies[idx] || "").replace(/^(\s|\u00A0)+|(\s|\u00A0)+$/g, "");
                if (cookie.substring(0, key.length + 1) == (key + "=")) {
                    var e = function(j) {
                        j = j.replace(/\+/g, " ");
                        var h = '()<>@,;:\\"/[]?={}';
                        for (var g = 0; g < h.length; g++) {
                            if (j.indexOf(h.charAt(g)) != -1) {
                                if (j.startWith('"')) {
                                    j = j.substring(1);
                                }
                                if (j.endWith('"')) {
                                    j = j.substring(0, j.length - 1);
                                }
                                break;
                            }
                        }
                        return decodeURIComponent(j);
                    };
                    f = e(cookie.substring(key.length + 1));
                    break;
                }
            }
        }
        return f;
    },
    set: function(key, val, c) {
        c = c || {};
        if (val === null) {
            val = "";
            c.expires = -1;
        }
        var expires = "";
        if (c.expires && (typeof c.expires == "number" || c.expires.toUTCString)) {
            var now;
            if (typeof c.expires == "number") {
                now = new Date();
                now.setTime(now.getTime() + (c.expires * 24 * 60 * 60 * 1000));
            } else {
                now = c.expires;
            }
            expires = "; expires=" + now.toUTCString();
        }
        var path = "; path=" + (c.path || "/");
        var domain = c.domain ? "; domain=" + (c.domain) : ".vmall.com";
        var secure = c.secure ? "; secure=" : "";
        document.cookie = [key, "=", encodeURIComponent(val), expires, path, domain, secure].join("");
    },
    remove: function(key) {
        this.set(key, null);
    }
};

YY.util = {
    toHtml: function(a) {
        return a.replace(/[<>&"']/g,
        function(b) {
            return "&#x" + b.charCodeAt(0).toString(16) + ";"
        })
    },
    isFunction: function(b) {
        return Object.prototype.toString.call(b) === "[object Function]"
    },
    getParamObj: function(b) {
        var a = {},
        b = (typeof b === "string") ? b: "";
        b.replace(/([^?=&#]+)=([^&]*)/g,
        function(e, c, d) {
            a[c] = d
        });
        return a
    },
    addScriptTag: function(src, fn) {
        if (!src) {
            return
        }
        with(document) {
            0[(getElementsByTagName("head")[0] || body).appendChild(createElement("script")).src = src]
        }
        if (fn && ec.util.isFunction(fn)) {
            setTimeout(fn, 100)
        }
    },
    ajax: {
        xhr: function() {
            if (window.location.protocol !== "file:") {
                try {
                    return new XMLHttpRequest()
                } catch(b) {}
                try {
                    return new ActiveXObject("Msxml2.XMLHTTP")
                } catch(b) {
                    return new ActiveXObject("Microsoft.XMLHTTP")
                }
            }
        },
        getJson: function(b) {
            if (b.funName) {
                window[b.funName] = b.success
            }
            //引入url所对应的文件
            YY.util.addScriptTag(b.url)
        }
    }
};

YY.validate = function(uid){
    var method = "callbackqueue";
    YY.util.ajax.getJson({
        url: 'https://yy.vmall.com/ivy/isqueue.jsp' + "?uid=" + uid + "&qid=0&t=" + new Date().getTime() + '&callback=' +  method,
        funName: method,
        success: function(json) {
            try {
                delete window[method]
            } catch(b) {
                window[method] = null
            }
            if(json){
                if(json.isqueue && json.queueSign){
                    var exp = new Date();
                    exp.setTime(exp.getTime() + 24 * 60 * 60 * 1000); //1天过期
                    var e = {path:"/", domain:".vmall.com",expires:exp};
                    YY.cookie.set("isqueue-prize", json.isqueue,e);
                    YY.cookie.set("queueSign-prize", json.queueSign,e);
                }
            }
        }
    });
};

$(function() {
    var uid = YY.cookie.get('uid'),
        isQueue = YY.cookie.get('isqueue-prize');
    if ((null == uid || '' == uid) && (null != isQueue && '' != isQueue)) {
        var exp = new Date();
        exp.setTime(exp.getTime() + 24 * 60 * 60 * 1000); //1天过期
        var e = { path: "/", domain: ".vmall.com", expires: exp };
        YY.cookie.set("isqueue-prize", null, e);
        YY.cookie.set("queueSign-prize", null, e);
    }
    if (null != uid && '' != uid && (null == isQueue || '' == isQueue)) {
        YY.validate(uid);
    }
});
