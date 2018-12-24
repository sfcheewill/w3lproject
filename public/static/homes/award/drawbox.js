(function(window, $, undefined) {
    // 国际化
    var i18n = window.locale.prize;

    function Drwabox($el) {
        this.$btn = $el.find('.lottery-abtn');
        this.config = $el.data("config");
        this.box = {};
        this.$el = $el;
        this.click = false;
        this.luckDraw = $el.data("luckdraw");
        this.lottery = {
            index: -1, //当前转动到哪个位置，起点位置
            count: 0, //总共有多少个位置
            timer: 0, //setTimeout的ID，用clearTimeout清除
            speed: 100, //初始转动速度
            times: 0, //转动次数
            cycle: 50, //转动基本次数：即至少需要转动多少次再进入抽奖环节
            prize: -1, //中奖位置
            init: function() {
                if ($el.find(".lottery-unit").length > 0) {
                    $lottery = $el;
                    $units = $lottery.find(".lottery-unit");
                    this.obj = $lottery;
                    this.count = $units.length;
                    $lottery.find(".lottery-unit-" + this.index).addClass("active");
                };
            },
            roll: function() {
                var index = this.index;
                var count = this.count;
                var lottery = this.obj;
                $(lottery).find(".lottery-unit-" + index).removeClass("active");
                index += 1;
                if (index > count - 1) {
                    index = 0;
                };
                $(lottery).find(".lottery-unit-" + index).addClass("active");
                this.index = index;
                return false;
            },
            stop: function(index) {
                this.prize = index;
                return false;
            }
        };
        this.lottery.init();
        this.handerClick();
    }

    // 点击事件处理
    Drwabox.prototype.handerClick = function() {
        var _this = this;
        _this.$btn.click(function() {
            if (_this.click == false) {
                _this.click = true;
                Tool.share.shareType = _this.config;
                _this.getPrize(_this.config.activityCode);
            }
        });
    };

    // 抽奖方法
    Drwabox.prototype.getPrize = function($el) {
        var _this = this;
        var _callback = function(json) {
            var data = null;
            if (json && json.success) {
                _this.box.text = (json.pcPrizeTip || json.pcNotPrizeTip) + i18n["prompt.have"] + json.limit + i18n["prompt.chance"];
                if (json.pcNotPrizeTip) {
                    _this.box.icon = '<s></s>';
                    var noLuckDrawId = [];
                    if (_this.luckDraw) {
                        for (var j = 0; j < _this.luckDraw.length; j++) {
                            if (_this.luckDraw[j].isTkJoin == "true")
                                noLuckDrawId.push(j);
                        }
                    }
                    var noLuckDrawIdLength = noLuckDrawId.length;
                    var noLuckDrawIndex = noLuckDrawId[Math.random() * (noLuckDrawIdLength) | 0];
                    //抽奖结果
                    _this.lottery.prize = noLuckDrawIndex;

                } else {
                    var name = json.name;
                    _this.box.icon = '<i></i>';
                    if (typeof _this.luckDraw != 'undefined') {
                        for (var i = 0; i < _this.luckDraw.length; i++) {
                            if (name == _this.luckDraw[i].prizeName) {
                                _this.lottery.prize = i;
                                break;
                            }
                        }
                    }
                }
                _this.box.btn = i18n["btn.confirm"];
                _this.box._class = 'dialog-button-yes';


                //_this.bright(0);
                if (_this.lottery.prize == -1) {
                    Tool.pcTipShow(_this.box.icon, _this.box.text, _this.box._class, _this.box.btn); /**/
                } else {
                    setTimeout(function() {
                        _this.roll(_this);
                    }, 100);
                }
            } else {
                // 如果是未登录，显示表单配置的文案
                if (json.code == 9006) {
                    json.msg = _this.config.loginTips;
                }

                data = Md.prize.messageTip(json.code, json.msg, json.isSupportShare, json.isShared);
                _this.box.icon = '<s></s>';
                _this.box.text = data.text;
                _this.box.btn = data.btn;
                _this.box._class = data._class;
                _this.click = false;
                Tool.pcTipShow(_this.box.icon, _this.box.text, _this.box._class, _this.box.btn); /**/
                //$(_this.$btn).removeAttr('disabled');
            }
        };

        var formData = new FormData();
        formData.append("activityCode", _this.config.activityCode);
        $.ajax({
            type: 'post',
            url: window.amsDomain + '/prizeActivity/commonNewPrize.json?t=' + new Date().getTime(),
            contentType: false,
            processData: false,
            data: formData,
            dataType: 'json',
            xhrFields: {
                withCredentials: true
            },
            success: function(res) {
                _callback(res);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown, data) {
                alert('网络异常，请稍候再试');
            }
        });
    };

    Drwabox.prototype.roll = function(_this) {
        _this.lottery.times += 1;
        _this.lottery.roll();
        if (_this.lottery.times > _this.lottery.cycle + 10 && _this.lottery.prize == _this.lottery.index) { //停止转动
            clearTimeout(_this.lottery.timer);
            _this.lottery.prize = -1;
            _this.lottery.times = 0;
            _this.lottery.speed = 100;
            _this.click = false;
            Tool.pcTipShow(_this.box.icon, _this.box.text, _this.box._class, _this.box.btn);
        } else {
            if (_this.lottery.times < _this.lottery.cycle) {
                _this.lottery.speed -= 10;
            } else {
                if (_this.lottery.times > _this.lottery.cycle + 10 && ((_this.lottery.prize == 0 && _this.lottery.index == 7) || _this.lottery.prize == _this.lottery.index + 1)) {
                    _this.lottery.speed += 110;
                } else {
                    _this.lottery.speed += 20;
                }
            }
            if (_this.lottery.speed < 40) {
                _this.lottery.speed = 40;
            }
            _this.lottery.timer = setTimeout(function() {
                _this.roll(_this);
            }, _this.lottery.speed); //循环调用
        }
        return false;
    }
    // 调用定义组件的函数
    $('.mod-sqdrawbox').each(function() {
        // 实例化每一个el
        new Drwabox($(this));
    });
})(window, jQuery);
