/**
 * PC端上报
 * 优化：支持?和#{"version":"1.2.20","time":"2017.12.14 10:04:26","author":"cwx408876/Ben"}
 * 新增：写入cps_track_id到cookie{"version":"1.2.20","time":"2017.12.15 16:54:11","author":"cwx408876/Ben"}
 * 修改：上报域名https://datacollect.vmall.com:18443/webv1改成https://metrics1.data.hicloud.com:6447/webv1{"time":"2018.08.14 17:51:56","author":"Ben"}
 * 修改：https://metrics1.data.hicloud.com:6447/webv1改成https://metrics-drcn.dt.hicloud.com:6447/webv1{"time":"2018.08.30 11:39:27","author":"Ben"}
 */
window.ce = {};
ce._cache = {};
ce.isIE6 = false;
ce.isIE7 = false;

ce.util = {
    isFunction: function (a) {
        return Object.prototype.toString.call(a) === "[object Function]"
    },
    addScriptTag: function (src, fn) {
        if (!src) {
            return
        }
        with (document) {
            0[(getElementsByTagName("head")[0] || body)
                .appendChild(createElement("script")).src = src]
        }
        if (fn && ce.util.isFunction(fn)) {
            setTimeout(fn, 100)
        }
    },
    cookie: {
        get: function (m) {
            var g = null;
            if (document.cookie && document.cookie != "") {
                var j = document.cookie.split(";");
                for (var k = 0; k < j.length; k++) {
                    var l = (j[k] || "").replace(
                        /^(\s|\u00A0)+|(\s|\u00A0)+$/g, "");
                    if (l.substring(0, m.length + 1) == (m + "=")) {
                        var h = function (c) {
                            c = c.replace(/\+/g, " ");
                            var a = '()<>@,;:\\"/[]?={}';
                            for (var b = 0; b < a.length; b++) {
                                if (c.indexOf(a.charAt(b)) != -1) {
                                    if (c.startWith('"')) {
                                        c = c.substring(1)
                                    }
                                    if (c.endWith('"')) {
                                        c = c.substring(0, c.length - 1)
                                    }
                                    break
                                }
                            }
                            return decodeURIComponent(c)
                        };
                        g = h(l.substring(m.length + 1));
                        break
                    }
                }
            }
            return g
        },
        set: function (e, g, c) {
            c = c || {};
            if (g === null) {
                g = "";
                c.expires = -1
            }
            var a = "";
            if (c.expires && (typeof c.expires == "number" || c.expires.toUTCString)) {
                var b;
                if (typeof c.expires == "number") {
                    b = new Date();
                    b.setTime(b.getTime() + (c.expires * 24 * 60 * 60 * 1000))
                } else {
                    b = c.expires
                }
                a = "; expires=" + b.toUTCString()
            }
            var r = "; path=" + (c.path || "/");
            var s = ".vmall.com";
            var f = "; domain=" + s;
            var h = c.secure ? "; secure" : "";
            document.cookie = [e, "=", encodeURIComponent(g), a, r, f, h]
                .join("")
        }
    },
    countdown: function (q, o) {
        var p = ce._cache[q + o.startTime],
            m = o.now - new Date().getTime(),
            n = 0,
            k = function () {
                n = Math.round((o.startTime - new Date().getTime() - m) / 1000);
                n = n <= 0 ? 0 : n
            },
            r = function () {
                k();
                if (n <= 0) {
                    n = 0
                }
                return (n <= 0) ? false : true
            };
        k();
        clearInterval(p);
        if (!r()) {
            if (o.callback) {
                o.callback(o)
            }
            return
        }
        p = setInterval(function () {
            if (!r()) {
                if (o.callback) {
                    o.callback(o)
                }
                clearInterval(p)
            }
        }, 1000);
        ce._cache[q + o.startTime] = p
    },
    hrefSetStart: function () {
        var _el = document.getElementsByTagName("a");
        for (var i = 0; i < _el.length; i++) {
            var startHref = _el[i].getAttribute("startHref");
            if (startHref != undefined && startHref != null && startHref != '') {
                _el[i].href = startHref;
            }
        }
    }
};

ce.url = {
    // 获取主机名
    getHost: function () {
        return document.location.hostname;
    },
    // 获取当前相对路径
    getPath: function () {
        return document.location.pathname;
    },
    // 获取URL参数
    getUrlParam: function (p) {
        var reg = new RegExp("(^|&)" + p + "=([^&]*)(&|$)");
        // Ben优化：兼容?和#
        var r = (window.location.hash || window.location.search).substr(1).match(reg);
        return r ? unescape(r[2]) : '';
    }
};

ce.time = function (b, a) {
    ce.util.countdown(
        "countdown", {
            now: b.getTime(),
            startTime: a.getTime(),
            callback: function (c) {
                ce.util.hrefSetStart();
                delete ce._cache["countdown" + a.getTime()];
            }
        });
};

utils.getTID = function () {
    var c = ce.util.cookie.get("uid");
    var b = ce.util.cookie.get("deviceid");
    if (c != "" && c != null) {
        return b + "_" + c;
    } else {
        return b;
    }
};

utils.getTime = function () {
    var e = new Date();
    var k = e.getFullYear();
    var b = e.getMonth() + 1;
    b = b < 10 ? ("0" + b) : b;
    var j = e.getDate();
    j = j < 10 ? ("0" + j) : j;
    var f = e.getHours();
    f = f < 10 ? ("0" + f) : f;
    var i = e.getMinutes();
    var c = e.getSeconds();
    i = i < 10 ? ("0" + i) : i;
    c = c < 10 ? ("0" + c) : c;
    var g = "" + k + b + j + f + i + c;
    return g;
};

window._paq = [];

ce.analytics = function (c) {
    // DMP
    var j = "https://nebula-collector.huawei.com/api/2.0/vmallcn-min.js";
    ce.util.addScriptTag(j);

    // baidu
    if (c.bd) {
        var key = '';
        switch (ce.url.getHost()) {
            case 'www.vmall.com':
                key = 'a08b68724dd89d23017170634e85acd8';
                break;
            case 'sale.vmall.com':
                key = '82d2186024cf7459f80be3ff94bea77f';
                break;
            case 'mm.vmall.com':
                key = 'f66330cfa6f95a043c2ecd5324e0477a';
                break;
            default:
                key = 'a08b68724dd89d23017170634e85acd8';
                break;
        }
        var a = "https://hm.baidu.com/h.js?" + key;
        ce.util.addScriptTag(a)
    }

    // bi
    if (c.bi) {
        _paq.push(["setTrackerUrl", "https://metrics-drcn.dt.hicloud.com:6447/webv1"]);
        _paq.push(["setSiteId", (ce.url.getHost() || "sale.vmall.com")]);
        _paq.push(["setCustomVariable", 1, "cid", (ce.util.cookie.get("cps_id") || ""), "page"]);
        _paq.push(["setCustomVariable", 2, "direct", (ce.util.cookie.get("cps_direct") || ""), "page"]);
        _paq.push(["setCustomVariable", 4, "wi", (ce.util.cookie.get("cps_wi") || ""), "page"]);
        _paq.push(["trackPageView"]);
        var b = "https://res.vmallres.com/bi/hianalytics.js";
        ce.util.addScriptTag(b);
    }
};

(function () {
    // 开发环境不上报
    if (window.location.host == 'shopdcportal.vmall.com:28081') {
        return false;
    }

    // 海外暂时不上报数据
    if (window.pageConfig.locale != 'zh-CN') {
        return false;
    }

    var cid = ce.url.getUrlParam('cid');
    var wi = ce.url.getUrlParam('wi');
    var cps_track_id = new Date().getTime() + '_' + Math.random().toString(36).slice(2);

    if (cid) {
        ce.util.cookie.set("cps_id", cid, {
            expires: 1,
            domain: ".vmall.com"
        });
    }

    if (wi) {
        ce.util.cookie.set("cps_wi", wi, {
            expires: 1,
            domain: ".vmall.com"
        });
    }

    // 写入cps_track_id
    ce.util.cookie.set("cps_track_id", cps_track_id, {
        expires: 1,
        domain: ".vmall.com"
    });

    // 执行上报
    ce.analytics({"bd": true, "bi": true});

    // 数据上报
    $('.J_mod,body').on('click', '[data-track]', function (event) {
        var $itemEl = $(this);
        var itemPos = $itemEl.index() + 1;
        var $modEl = $(event.delegateTarget);
        var modPos = $modEl.index() + 1;
        var modAnalytics = $modEl.data('analytics') || {};
        var vaData = {
            TID: utils.getTID(),
            TIME: utils.getTime(),
            CONTENT: {
                pageURL: location.href, // 当前页面链接
                publishTime: utils.getPublishTime(), // 页面发布时间
                line: modPos, // 行编号
            }
        };

        ce.util.cookie.get('uid') == null ? vaData.UID = "" : vaData.UID = ce.util.cookie.get('uid');

        // 商品列表数据上报
        if ($modEl.hasClass('mod-productList')) {
            var modAnalytics = $modEl.data('analytics');
            var itemCount = modAnalytics.itemCount.replace('style-', '');
            var eventID = 301000301; // key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.row = Math.ceil(itemPos / itemCount); // 商品在组件中的行
            vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
            vaData.CONTENT.SKUCode = $itemEl.data('sbomCode'); // SKU编码
            vaData.CONTENT.linkURL = $itemEl.find('a').attr('href'); // 跳转的URL
            vaData.CONTENT.click = "1";
        }

        // style领券组件数据上报
        if ($modEl.hasClass('mod-couponStyle')) {
            var $itemEl = $(this).parent();
            var itemPos = $itemEl.index() + 1;
            var styleBatch = $(this).data('couponstyleconfig');
            var itemCount = $(this).parents('[data-num]').data('num');
            var eventID = 301000501; // 组件key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.couponBatch = styleBatch.batchCode; // 券批次号
            vaData.CONTENT.row = Math.ceil(itemPos / itemCount); // 券的行
            vaData.CONTENT.column = itemPos % itemCount || itemCount; // 券的列
            vaData.CONTENT.click = "1";
        }

        // 轮播图组件点击数据上报
        if (modAnalytics.Id == "6") {
            var eventID = 301000601; // 组件key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.location = $itemEl.parents('li').index() + 1; // 帧数
            vaData.CONTENT.linkURL = $itemEl.attr('href');//跳转url
            vaData.CONTENT.ADID = $itemEl.children('img').attr('src'); // 当前图片地址
            vaData.CONTENT.click = "1";
        }

        // 图模块组件点击数据上报
        if ($modEl.hasClass('mod-pic')) {
            var eventID = 301000201; // 组件key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.top = $itemEl.css('top'); // 上边距
            vaData.CONTENT.left = $itemEl.css('left'); // 左边距
            vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转url
            vaData.CONTENT.click = "1";
            if ($itemEl.hasClass('J_anchor')) {
                var modHeight = parseInt($itemEl.parent().prev().css('height'));
                var itemHeight = parseInt($itemEl.css('top'));
                vaData.CONTENT.number = Math.ceil(itemHeight / modHeight); // 当前图片在组件中的行位置
            } else {
                vaData.CONTENT.number = $itemEl.parent().index() + 1;
            }
        }

        // pic领券组件点击数据上报
        if ($modEl.hasClass('mod-coupons')) {
            if ($itemEl.hasClass('anchor-hotList')) { // 领券中商品点击
                var eventID = 301000401; // 组件key

                // 准备组件数据
                vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
                vaData.CONTENT.name = modAnalytics.name; // 组件名称
                vaData.CONTENT.top = $itemEl.css('top'); // 上边距
                vaData.CONTENT.left = $itemEl.css('left'); // 左边距
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.click = "1";
            } else if ($itemEl.hasClass('anchor-otherHotList')) { // 领券点击
                var styleBatch = $itemEl.data('couponpicconfig');
                var eventID = 301000402; // 组件key

                // 准备组件数据
                vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
                vaData.CONTENT.name = modAnalytics.name; // 组件名称
                vaData.CONTENT.couponBatch = styleBatch.batchCode; // 券批次号
                vaData.CONTENT.top = $itemEl.css('top'); // 上边距
                vaData.CONTENT.left = $itemEl.css('left'); // 左边距
                vaData.CONTENT.click = "1";
            }
        }

        // 多商品预约组件点击数据上报
        if ($modEl.hasClass('mod-reserve')) {
            var eventID = 301001001; // 组件key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.type = $itemEl.data('track'); // 种类
            vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
            vaData.CONTENT.click = "1";
            if (vaData.CONTENT.type == "1") {
                vaData.CONTENT.ADID = $modEl.css("background-image").slice(5, -2);
            }
            if (vaData.CONTENT.type != "1") {
                vaData.CONTENT.linkName = $itemEl.html();
            }
        }

        // 单商品预约组件点击数据上报
        if ($modEl.hasClass('mod-reserve-single')) {
            var eventID = 301001201; // 组件key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.type = $itemEl.data('track'); // 种类
            vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
            vaData.CONTENT.click = "1";
            vaData.CONTENT.linkName = $itemEl.html(); // 链接名称
        }

        // 商品预约组件弹出框点击数据上报
        if ($itemEl.parent().data('analytics')) {
            var modAnalytics = $itemEl.parent().data('analytics');
            if (modAnalytics.Id == "37") { // 多商品预约
                var eventID = 301001001; // 组件key
                vaData.CONTENT.line = "";
                vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
                vaData.CONTENT.name = modAnalytics.name; // 组件名称
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.type = $itemEl.data('track'); // 种类
                vaData.CONTENT.click = "1";
                if (vaData.CONTENT.type == "5") {
                    vaData.CONTENT.linkName = $itemEl.data('title'); // 链接名称
                    vaData.CONTENT.ADID = $itemEl.data('img') // 当前图片地址
                } else {
                    vaData.CONTENT.linkName = $itemEl.html();
                }
            } else if (modAnalytics.Id == "45") { // 单商品预约
                var eventID = 301001201; // 组件key
                vaData.CONTENT.line = "";
                vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
                vaData.CONTENT.name = modAnalytics.name; // 组件名称
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.type = $itemEl.data('track'); // 种类
                vaData.CONTENT.click = "1";
                if (vaData.CONTENT.type == "5") {
                    vaData.CONTENT.linkName = $itemEl.data('title'); // 链接名称
                    vaData.CONTENT.ADID = $itemEl.data('img') // 当前图片地址
                }
            }
        }

        // 1期产品列表组件点击数据上报
        if ($modEl.hasClass('mod-prohotlist')) {
            var modAnalytics = $modEl.data('analytics');
            var itemCount = modAnalytics.num;
            var itemPos = $itemEl.parents('.item-con').index() + 1;
            var eventID = 301001502; // 点领券key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.SKUCode = $itemEl.data('sbomcode'); // 领券获取sku
            vaData.CONTENT.click = "1";
            if (!$itemEl.hasClass('get_coupons')) {
                var eventID = 301001501; // 点商品或购买key
                vaData.CONTENT.linkURL = $itemEl.parents('a').attr('href'); // 跳转的URL
                vaData.CONTENT.type = $itemEl.data('track'); // 点击类型
                vaData.CONTENT.row = Math.ceil(itemPos / itemCount); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
                if ($itemEl.data('track') == "1") {
                    vaData.CONTENT.SKUCode = $itemEl.find('[data-sbomcode]').data('sbomcode'); // 点击图片获取SKU编码
                    vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL`
                }
            }
        }

        // 1期图片领券组件点击数据上报
        if ($modEl.hasClass('mod-bfyiqmcoupon')) {
            var styleBatch = $itemEl.data('coupongroupconfig');
            var eventID = 301001601; // 组件key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.coupon = styleBatch.batchCode; // 优惠券编号
            vaData.CONTENT.activityCode = styleBatch.activityCode; // 活动编号
            vaData.CONTENT.top = $itemEl.css('top'); // 上边距
            vaData.CONTENT.left = $itemEl.css('left'); // 左边距
            vaData.CONTENT.click = "1";
        }

        // 318横向产品+划过特效图
        if (modAnalytics.Id == "32") {
            var eventID = 301001701; // 组件key
            var itemCount = modAnalytics.num;
            var itemPos = $itemEl.parents('.item').index() + 1;

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.row = Math.ceil(itemPos / itemCount); // 商品在组件中的行
            vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
            vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转url
            vaData.CONTENT.click = "1";
        }

        // 1期左大图列表组件点击数据上报
        if ($modEl.hasClass('mod-probleft')) {
            var eventID = 301001801; // 左大图key
            var itemCount = 2;
            var itemPos = $itemEl.parents('.col-6').index() + 1;
            var sku = $itemEl.parent().siblings().last().find('[data-sbomcode]');
            var sku2 = $itemEl.siblings().first().find('[data-sbomcode]');
            var num = $itemEl.data('track');

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            if (num === 1 || num === 2) {
                var eventID = 301001802; // 点图片或购买key
                vaData.CONTENT.row = Math.ceil(itemPos / itemCount); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.type = num;
                if (num === 1) {
                    vaData.CONTENT.SKUCode = sku.data('sbomcode'); // SKU编码
                } else {
                    vaData.CONTENT.SKUCode = sku2.data('sbomcode'); // SKU编码
                }
                if (itemPos > 3) {
                    itemPos -= 3;
                    vaData.CONTENT.row = Math.ceil(itemPos / itemCount) + 2; // 商品在组件中的行
                    vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
                } else if (itemPos == 3) {
                    vaData.CONTENT.row = "2"; // 商品在组件中的行
                    vaData.CONTENT.column = "2"; // 商品在组件中的列
                }
            }
            if ($itemEl.hasClass('get_coupons')) {
                var eventID = 301001803; // 点领券key
                vaData.CONTENT.SKUCode = $itemEl.data('sbomcode'); // sku编码
            }
            if ($itemEl.hasClass('ads')) {
                vaData.CONTENT.ADID = $itemEl.children('img').attr('src'); // 图片地址
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转链接
            }
            vaData.CONTENT.click = "1";
        }

        // 1期产品轮播组件点击数据上报
        if ($modEl.hasClass('mod-prohotone')) {
            var eventID = 301001902; // 点领券key
            var num = $itemEl.parents('.list-ad-item').data('num');
            var kind = $itemEl.data('track');

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.location = num; // 帧数
            vaData.CONTENT.SKUCode = $itemEl.data('sbomcode'); // sku编码
            vaData.CONTENT.click = "1";
            if (kind === 1 || kind === 2) {
                var eventID = 301001901; // 点图片或购买key
                vaData.CONTENT.type = kind; // 类型
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转url
            }
        }

        // 3TAB产品列表组件点击数据上报
        if (modAnalytics.Id == "35") {
            var eventID = 301002001; // 点分类key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.location = $itemEl.parent().index() + 1; // 分类的位置
            vaData.CONTENT.categoryName = $itemEl.text(); // 分类的名称
            vaData.CONTENT.click = "1";
            if ($itemEl.hasClass('shadowa')) {
                var eventID = 301002002; // 点图片或购买key
                var modStyle = $itemEl.data('style');
                var itemCount = parseInt(modStyle.itemCount.replace('zq', ''));
                var type = ".zq" + itemCount;
                var itemPos = $itemEl.parents(type).prevAll(type).length + 1;
                var sku = $itemEl.next().find('span');

                vaData.CONTENT.location = itemCount + 1; // 分类的位置
                vaData.CONTENT.categoryName = $($itemEl.parents('.tab-list').prev().children()[itemCount]).children('a').text(); // 分类的名称
                vaData.CONTENT.row = Math.ceil(itemPos / 4); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % 4 || 4; // 商品在组件中的列
                vaData.CONTENT.SKUCode = sku.data('sbomcode'); // sku编码
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转url
            }
            if ($itemEl.hasClass('get_coupons')) {
                var eventID = 301002003; // 点领券key
                var modStyle = $itemEl.parent().prev().data('style');
                var itemCount = parseInt(modStyle.itemCount.replace('zq', ''));

                vaData.CONTENT.SKUCode = $itemEl.data('sbomcode'); // sku编码
                vaData.CONTENT.location = itemCount + 1; // 分类的位置
                vaData.CONTENT.categoryName = $($itemEl.parents('.tab-list').prev().children()[itemCount]).children('a').text(); // 分类的名称
            }
        }

        // 2期左图右商品列表
        if ($modEl.hasClass('mod-styleleftimg')) {
            var eventID = 301002101; // 点大图key
            var num = $itemEl.data('track');
            var itemCount = 2;
            var itemPos = $itemEl.parents('.prodct').index() + 1;

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.click = "1";

            if (num == "1") {
                vaData.CONTENT.ADID = $itemEl.children().attr('src'); // 图片的URL
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
            }
            if (num == "2" || num == "4") {
                var eventID = 301002102; // 点商品key
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
                vaData.CONTENT.row = Math.ceil(itemPos / itemCount); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
                if (itemPos > 3) {
                    itemPos -= 3;
                    vaData.CONTENT.row = Math.ceil(itemPos / itemCount) + 2; // 商品在组件中的行
                    vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
                } else if (itemPos == 3) {
                    vaData.CONTENT.row = "2"; // 商品在组件中的行
                    vaData.CONTENT.column = "2"; // 商品在组件中的列
                }
                if (num == "4") {
                    vaData.CONTENT.linkURL = $itemEl.attr('onclick').slice(13, -3)
                }
            }
            if (num == "3") {
                var eventID = 301002103; // 点领券key
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
            }
        }

        // 	2期商品列表1(购买按钮浮)点击数据上报
        if ($modEl.hasClass('mod-mobile-box')) {
            var kind = $itemEl.data('track');

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.click = "1";

            if (kind == "0") {
                var eventID = 301002201; // 点大图key
                vaData.CONTENT.ADID = $itemEl.children().attr('src'); // 图片的URL
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
            }
            if (kind == "1") {
                var eventID = 301002202; // 点商品key
                var itemCount = 3;
                var itemPos = $itemEl.parents('.prodct').index() + 1;
                vaData.CONTENT.row = Math.ceil(itemPos / itemCount); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
            }
            if (kind == "2") {
                var eventID = 301002202; // 点商品key
                var itemCount = 4;
                var itemPos = $itemEl.parents('.prodct').index() + 1;
                vaData.CONTENT.row = Math.ceil(itemPos / itemCount) + 1; // 商品在组件中的行
                vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
            }
            if (kind == "3") {
                var eventID = 301002203; // 点领券key
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
            }
        }

        // 2期商品列表2组件数据上报
        if ($modEl.hasClass('mod-hotsale-product')) {
            var itemCount = 3;
            var itemPos = $itemEl.parents('.prodct').index() + 1;
            var kind = $itemEl.data('track');
            var eventID = 301002302; // 点领券key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
            vaData.CONTENT.click = "1";

            if (kind == "1" || kind == "2") {
                var eventID = 301002301; // 点商品图或者价格key
                vaData.CONTENT.row = Math.ceil(itemPos / itemCount); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.type = kind; // 类型
            }
        }

        // 	2期评论商品列表组件数据上报
        if ($modEl.hasClass('mod-discuss-product')) {
            var itemCount = 4;
            var itemPos = $itemEl.parents('.prodct').index() + 1;
            var kind = $itemEl.data('track');
            var eventID = 301002401; // 组件key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.row = Math.ceil(itemPos / itemCount); // 商品在组件中的行
            vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
            vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
            vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
            vaData.CONTENT.type = kind; // 类型
            vaData.CONTENT.click = "1";
        }


        // 2期上下翻页商品列表
        if ($modEl.hasClass('mod-portraitcarousel')) {
            var eventID = 301002501; // 点分类key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.column = $itemEl.data('track'); // 组件内商品的所属列表
            vaData.CONTENT.row = $itemEl.parent().data('swiper-slide-index') + 1; // 组件内商品在所属列表的行
            vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
            vaData.CONTENT.linkURL = $itemEl.attr('onclick').slice(13, -3); // 跳转的URL
            vaData.CONTENT.click = "1";
        }

        // 3期限时抢购区
        if ($modEl.hasClass('mod-seckill')) {
            var eventID = 301002601; // 点分类key
            var kind = $itemEl.data('track');

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.click = "1";

            if (kind == "1") {
                vaData.CONTENT.location = $itemEl.index() + 1; // 分类的位置
                vaData.CONTENT.categoryName = $itemEl.data('config').title; // 分类的名称
                vaData.CONTENT.strTime = $itemEl.data('config').strTime; // 活动开始时间
                vaData.CONTENT.endTime = $itemEl.data('config').endTime; // 活动结束时间
            }
            if ($itemEl.data('track') == "2") {
                var eventID = 301002602; // 点商品key
                var modStyle = $itemEl.data('style');
                var itemCount = parseInt(modStyle.replace('zq', ''));
                var type = ".zq" + itemCount;
                var itemPos = $itemEl.prevAll(type).length + 1;

                vaData.CONTENT.location = itemCount + 1; // 分类的位置
                vaData.CONTENT.categoryName = $($itemEl.parents('.seckill-ct').siblings('.seckill-tab').children()[itemCount]).data('config').title; // 分类的名称
                vaData.CONTENT.row = Math.ceil(itemPos / 3); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % 3 || 3; // 商品在组件中的列
                vaData.CONTENT.skuCode = $itemEl.children().data('config').sbomCode; // sku编码
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转url
            }
        }

        // 3期评论商品列表
        if ($modEl.hasClass('mod-goodsbox')) {
            var eventID = 301002701; // 点商品key
            var kind = $itemEl.data('track');

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.click = "1";

            if (kind == "1") {
                vaData.CONTENT.location = $itemEl.parent().data('swiper-slide-index') + 1; // 商品的位置
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
            }
            if (kind == "2") {
                var eventID = 301002702; // 点领券key
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
                vaData.CONTENT.activityCode = $itemEl.data('couponpicconfig').activityCode; // 活动编号
                vaData.CONTENT.batchCode = $itemEl.data('couponpicconfig').batchCode; // 券码批次号
            }
        }

        // 3期TAB推荐列表
        if ($modEl.hasClass('mod-hotmodrec')) {
            var eventID = 301002801; // 点大图热区key
            var kind = $itemEl.data('track');
            var itemPos = $itemEl.parents('.mobile-product').index() + 1;

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.click = "1";

            if (kind == "1") {
                vaData.CONTENT.top = $itemEl.css('top'); // 上边距
                vaData.CONTENT.left = $itemEl.css('left'); // 左边距
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转url
            }
            if (kind == "2") {
                var eventID = 301002802; // 点分类key
                var modStyle = $itemEl.data('zq');

                vaData.CONTENT.location = parseInt(modStyle.replace('zq', '')) + 1; // 分类的位置
                vaData.CONTENT.categoryName = $itemEl.text(); // 分类的名称
            }
            if (kind == "3") {
                var eventID = 301002803; // 点商品key

                vaData.CONTENT.row = Math.ceil(itemPos / 4); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % 4 || 4; // 商品在组件中的列
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
            }
            if (kind == "4") {
                var eventID = 301002804; // 点领券key

                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
                vaData.CONTENT.activityCode = $itemEl.data('couponpicconfig').activityCode; // 活动编号
                vaData.CONTENT.batchCode = $itemEl.data('couponpicconfig').batchCode; // 券码批次号
            }
        }

        // 3期商品列表
        if ($modEl.hasClass('mod-hotmod')) {
            var eventID = 301002901; // 点商品key
            var kind = $itemEl.data('track');
            var itemPos = $itemEl.parents('.hotmod-product').index() + 1;

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.click = "1";

            if (kind == "1") {
                vaData.CONTENT.row = Math.ceil(itemPos / 3); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % 3 || 3; // 商品在组件中的列
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
            }
            if (kind == "2") {
                var eventID = 301002902; // 点领券key
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
                vaData.CONTENT.activityCode = $itemEl.data('couponpicconfig').activityCode; // 活动编号
                vaData.CONTENT.batchCode = $itemEl.data('couponpicconfig').batchCode; // 券码批次号
            }
        }

        // 3期固定样式领券
        if ($modEl.hasClass('mod-couponbox')) {
            var eventID = 301003001; // 点领券key
            var itemPos = $itemEl.parents('.coupon-c').index() + 1;

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.row = Math.ceil(itemPos / 3); // 商品在组件中的行
            vaData.CONTENT.column = itemPos % 3 || 3; // 商品在组件中的列
            vaData.CONTENT.activityCode = $itemEl.data('couponpicconfig').activityCode; // 活动编号
            vaData.CONTENT.batchCode = $itemEl.data('couponpicconfig').batchCode; // 券码批次号
            vaData.CONTENT.click = "1";
        }

        // 4期3D轮播图
        if ($modEl.hasClass('mod-siqmbfproscroll3d')) {
            var eventID = 301003101; // 点商品key
            var num = $itemEl.data('track');
            var itemPos = $itemEl.parents('.swiper-slide').data('swiper-slide-index');

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码

            if (num == "1") {
                vaData.CONTENT.ADID = $itemEl.find('img').attr('src'); // 当前图片地址
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.location = $itemEl.parents('.goods-item').index() + 1 + itemPos * 3; // 商品的位置
            }
            if (num == "2") {
                var eventID = 301003102; // 点购买key
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.type = $itemEl.data('track'); // 按钮的类型
                vaData.CONTENT.location = $itemEl.parents('.goods-item').index() + 1 + itemPos * 3; // 商品的位置
            }
            if (num == "3") {
                var eventID = 301003103; // 点加入购物车key
                vaData.CONTENT.type = $itemEl.data('track'); // 按钮的类型
                vaData.CONTENT.location = $itemEl.parents('.goods-item').index() + 1 + itemPos * 3; // 商品的位置
            }
            if (num == "4") {
                var eventID = 301003104; // 点领券key
                vaData.CONTENT.activityCode = $itemEl.data('couponpicconfig').activityCode; // 活动编号
                vaData.CONTENT.batchCode = $itemEl.data('couponpicconfig').batchCode; // 券码批次号
            }
            vaData.CONTENT.click = "1";
        }

        // 4期热销排行榜
        if ($modEl.hasClass('mod-hotproduct')) {
            var eventID = 301003201; // 点商品key

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.location = $itemEl.data('track'); // 分类的位置
            vaData.CONTENT.categoryName = $itemEl.parents('.swiper-container').siblings('h1').text(); // 分类名称
            vaData.CONTENT.row = $itemEl.parent('.swiper-slide').data('swiper-slide-index') + 1; // 商品的行
            vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
            vaData.CONTENT.linkURL = $itemEl.attr('onclick').slice(13, -3); // 跳转的URL
            vaData.CONTENT.click = "1";
        }

        // 4期图片领券
        if (modAnalytics.Id == "90") {
            var eventID = 301003301; // 点领券key
            var itemPos = $itemEl.parents('.getCoupon').index() + 1;
            var itemCount = $itemEl.data('track');

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.row = Math.ceil(itemPos / itemCount); // 商品在组件中的行
            vaData.CONTENT.column = itemPos % itemCount || itemCount; // 商品在组件中的列
            vaData.CONTENT.activityCode = $itemEl.parents('.getCoupon').data('couponpicconfig').activityCode; // 活动编号
            vaData.CONTENT.batchCode = $itemEl.parents('.getCoupon').data('couponpicconfig').batchCode; // 券码批次号
            vaData.CONTENT.click = "1";
        }

        // 4期不规则推荐位
        if ($modEl.hasClass('mod-recommend')) {
            var eventID = 301003401; // 点商品key
            var num = $itemEl.data('track');
            var kind = $itemEl.parent().attr('class');

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.skuCode = $itemEl.data('sbomcode');

            if (num == "1") {
                vaData.CONTENT.location = kind.substr(kind.length - 1, 1); // 商品位置
                vaData.CONTENT.ADID = $itemEl.parent().css('background-image').slice(5, -2); // 当前图片地址
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转URL
            }
            if (num == "2") {
                var eventID = 301003402; // 点领券key
                vaData.CONTENT.activityCode = $itemEl.data('couponpicconfig').activityCode; // 活动编号
                vaData.CONTENT.batchCode = $itemEl.data('couponpicconfig').batchCode; // 券码批次号
            }
            vaData.CONTENT.click = "1";
        }

        // 4期TAB商品列表
        if ($modEl.hasClass('mod-siqmbfprdtab')) {
            var eventID = 301003501; // 点分类key
            var num = $itemEl.data('track');
            var modStyle = $itemEl.parents('.goods-item').data('zq');
            var type = "." + modStyle;
            var itemPos = $itemEl.parents(type).prevAll(type).length + 1;

            // 准备组件数据
            vaData.CONTENT.Id = modAnalytics.Id; // 组件ID
            vaData.CONTENT.name = modAnalytics.name; // 组件名称
            vaData.CONTENT.click = "1";

            if (num == "1") {
                vaData.CONTENT.location = $itemEl.index() + 1;
                vaData.CONTENT.categoryName = $itemEl.children('i').text();
            }
            if (num == "2") {
                var eventID = 301003502; // 点商品key
                var itemCount = parseInt(modStyle.replace('zq', ''));

                vaData.CONTENT.location = parseInt(modStyle.replace('zq', '')) + 1; // 分类的位置
                vaData.CONTENT.categoryName = $($itemEl.parents('.tab-container').prev().children()[itemCount]).children('i').text(); // 分类的名称
                vaData.CONTENT.row = Math.ceil(itemPos / 4); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % 4 || 4; // 商品在组件中的列
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
            }
            if(num == "3"){
                var eventID = 301003503; // 点加入购物车key
                var itemCount = parseInt(modStyle.replace('zq', ''));

                vaData.CONTENT.location = parseInt(modStyle.replace('zq', '')) + 1; // 分类的位置
                vaData.CONTENT.categoryName = $($itemEl.parents('.tab-container').prev().children()[itemCount]).children('i').text(); // 分类的名称
                vaData.CONTENT.row = Math.ceil(itemPos / 4); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % 4 || 4; // 商品在组件中的列
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
                vaData.CONTENT.type = "3";
            }
            if(num == "4"){
                var eventID = 301003504; // 点购买key
                var itemCount = parseInt(modStyle.replace('zq', ''));

                vaData.CONTENT.location = parseInt(modStyle.replace('zq', '')) + 1; // 分类的位置
                vaData.CONTENT.categoryName = $($itemEl.parents('.tab-container').prev().children()[itemCount]).children('i').text(); // 分类的名称
                vaData.CONTENT.row = Math.ceil(itemPos / 4); // 商品在组件中的行
                vaData.CONTENT.column = itemPos % 4 || 4; // 商品在组件中的列
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
                vaData.CONTENT.linkURL = $itemEl.attr('href'); // 跳转的URL
                vaData.CONTENT.type = "4";
            }
            if(num == "5"){
                var eventID = 301003505; // 点购买key

                vaData.CONTENT.activityCode = $itemEl.data('couponpicconfig').activityCode; // 活动编号
                vaData.CONTENT.batchCode = $itemEl.data('couponpicconfig').batchCode; // 券码批次号
                vaData.CONTENT.skuCode = $itemEl.data('sbomcode'); // SKU编码
            }
        }

        // console.log(vaData, eventID);

        _paq.push(["trackPageView"]);
        _paq.push(['trackLink', eventID, 'link', vaData]); // 上报数据
    });
})();
