/**
 * PC招行图模块
 * 准备SDV1{"version":"1.3.12","time":"2018.06.25 10:10:34","author":"Ben"}
 * 修复：如果是往返缓存则刷新页面{"version":"1.3.12","time":"2018.07.03 15:20:31","author":"Ben"}
 * 修复：去掉通过cookies的uid判断登录状态，修正登录跳转{"version":"1.3.12","time":"2018.07.09 18:47:11","author":"Ben"}
 * 需求：只写thirdLoginFlag标识，去掉判断登录{"time":"2018.08.22 18:46:02","author":"Ben"}
 */
(function(window, $, undefined) {
    window.addEventListener('pageshow', function(event) {
        // event.persisted为true时，表示当前文档是从往返缓存中获取
        if (event.persisted) {
            location.reload();
        }
    });

    var $mod = $('.mod-pic');
    var config = $mod.data('config');

    // 普通图模块或者装修页面不监听
    if (config.moduleType == 'normal' || window.shopdcmode == "DESIGN") {
        return false;
    } else if (config.moduleType == 'cmb') {
        $mod.on('click', 'a', function(event) {
            utils.cookie.set('thirdLoginFlag', 0);
            // PC端
            // window.location.href = window.main + '/account/login?url=' + encodeURIComponent(window.location.href);
        });
    }
})(window, jQuery);
