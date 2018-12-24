/**
 * PC样式领券66
 * 待转测{"version":"1.2.16","time":"2017.11.28 09:42:17","author":"wwx355727/Ling"}
 * 修复：新人频道模板即将开始状态展示问题{"version":"1.2.16","time":"2017.12.08 15:49:11","author":"wwx355727/Ling"}
 * 修复：描述兼容主流浏览器文字过长省略号截断{"version":"1.2.16","time":"2017.12.22 15:43:49","author":"wwx355727/Ling"}
 * 修复：‘被领完’文案改成‘已抢光’{"version":"1.2.16","time":"2018.01.29 14:26:33","author":"wwx355727/Ling"}
 * 修复：省略号展示临界值问题{"version":"1.2.16","time":"2018.06.07 11:29:36","author":"wwx355727/Ling"}
 */
(function(window, $, undefined) {
    var i18n =  window.locale.couponStyle;

    // 处理优惠券的显示状态
    function handleCouponState(data) {
        var $target = $('a[data-couponstyleconfig=\'{"activityCode":"' + data.activityCode + '","batchCode":"' + data.batchCode + '"}\']');
        var text = '';
        var className = '';

        if (data.receiveStates == -1) {
            text = i18n["btn.empty"];
            className = 'disabled';
        } else if (data.receiveStates == 1) { // 正常状态不操作
            return false;
        } else if (data.receiveStates == 2) {
            text = i18n["btn.had"];
            className = 'receive';
        } else if (data.receiveStates == 3) {
            text = i18n["btn.begin"];
            className = 'begin';
            $target.find('.new-state').html(text);
        } else if (data.receiveStates == 4) {
                text = i18n["btn.over"];
                className = 'over';
        }
        $target.find('.coupon-state').html(text);
        $target.attr('class', className);
    }

    // 事件委托所有优惠券超链接的点击事件
    $('.mod-couponStyle').on('click', '[data-couponstyleconfig]', function(event) {
        var $target = $(this);
        var config = $target.data('couponstyleconfig');

        // 只有正常状态的优惠券才可以领取
        if ($target.attr('class') == 'button-vip-benefit-get') {
            utils.getCoupon(config, handleCouponState);
        } else {
            return false;
        }
    });

    var arrCouponParam = [];

    $('a[data-couponstyleconfig]').each(function(index, el) {
        arrCouponParam.push($(el).data('couponstyleconfig'));
    });

    utils.queryCouponState(arrCouponParam, handleCouponState);

    var initObj = {
        // 初始化
        init: function(els) {
            function Ellipsis($el) {
                this.$dom = $el;
                this.$descHeight = $el.get(0).offsetHeight;
                this.$descHtml = $el.html();
                this.$spanHeight = $el.find('.limit').height();
                this.$pHeight = $el.height();
                this.getEllipsis();

            }
            Ellipsis.prototype.getEllipsis = function() {
                for (var i = 0;i < this.$descHtml.length; i ++) {
                    this.$dom.html(this.$descHtml.substr(0, i+1));
                    if (this.$descHeight < this.$dom[0].scrollHeight) {
                        this.$dom.css('overflow','hidden');
                        this.$dom.html(this.$descHtml.substr(0, i-2) + '...');
                        break;
                    }
                    this.$dom.html(this.$descHtml.substr(0, i+1));

                }

                //判断存在新人频道优惠券时，时间和描述展示做跟随
                if ($('.mod-couponStyle .new-content').length) {
                    if (this.$spanHeight > 0 && this.$spanHeight < this.$pHeight) {
                        this.$dom.addClass('sigle');
                    } else {
                        return false;
                    }
                }
            };

            $('.ellipsis').each(function() {
                // 实例化每一个el
                new Ellipsis($(this));

            });
        }
    };

    DC.defineModule('coupon-style', initObj);

    initObj.init('.mod-couponStyle');
})(window, jQuery);
