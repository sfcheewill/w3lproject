/**
 * PC帮助中心
 * 修复：登录状态改变问题{"version":"1.2.16","time":"2018.03.07 16:15:56","author":"wwx355727/Ling"}
 */
(function(window, $, undefined){
    var uid = Tool.cookie.get('uid');
    var dispalyName = Tool.cookie.get('displayName') || Tool.cookie.get('name') || Tool.cookie.get('user') || Tool.cookie.get('ac_lmi');

    //在装修系统下，不改变状态
    if (window.shopdcmode == "DESIGN") {
        uid = null;
    }

    //读取缓存，获取用户名
    if (uid !== null) {
        $('.unlogin').hide();
        $('.login').show();
        $('.loginName').text(dispalyName);
    } else {
        $('.unlogin').show();
        $('.login').hide();
        $('.loginName').text('');
    }

    //退出登录
    $('.signout').click(function() {
        window.location.href = domainMain + "/account/logout";
    });
})(window,jQuery);

