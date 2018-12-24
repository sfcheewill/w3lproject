// 主站配置
var domainYY = '//yy.vmall.com';
var domainRush = '//buy.vmall.com';
var domainEdit = 'https://customization.vmall.com';
var domainMain = 'https://www.vmall.com';
var domainWap = 'https://m.vmall.com';
var domainCart = '//cart.vmall.com';
var domainRemark = '//remark.vmall.com';
var domainRms = 'https://rms.vmall.com';
var domainShoppingConfig = '//addr.vmall.com';
var imagePath = 'https://res.vmallres.com/20180112/images';
var domainAccount = '//www.vmall.com';
var isUseAccount = 'false';
var upBindPhoneAddr = 'https://hwid1.vmall.com/CAS/portal/bindPhoneAccount.html?lang=zh-cn&amp;themeName=cloudTheme&amp;reqClientType=26';
var dominWapRecycle = 'https://mobile.huishoubao.com/?pid=1056';
var domainCds = 'https://cds.vmall.com';
// var domainIps = 'https://cashier.vmall.com/cashier/channel'; // 旧版代金券
var domainIps = 'https://cashier.vmall.com/cashier/voucher'; // 新版代金券
var scriptPath = 'https://res9.vmallres.com/20180202/js';
var domainAms = "https://act.vmall.com"; // 活动
var domainUc = 'https://member.vmall.com'; // 用户中心
var pmsHttpDomain = '//product.vmall.com/';
var mediaPath = 'https://res.vmallres.com/pimages/';
var openapiDomain = 'https://openapi.vmall.com';


// 活动页面
var prebookDomain = "https://mm.vmall.com"; // 预约
var facebookAppId = '370515210122879'; // Facebook应用ID
var ifmLogin = 'https://hwid1.vmall.com/CAS/portal/ifmLogin.html'; // UP登录

// 多国配置
(function(window) {
    var locale = window.pageConfig.locale;
    var config = {
        domainMain: {
            "zh-CN": "https://www.vmall.com",
            "en-US": "https://www.hihonor.com/us",
            "en-GB": "https://www.hihonor.com/uk",
            "es-ES": "https://www.hihonor.com/es",
            "de-DE": "https://www.hihonor.com/de",
            "fr-FR": "https://www.hihonor.com/fr",
            "it-IT": "https://www.hihonor.com/it",
            "en-IN": "https://www.hihonor.com/in",
            "en-MY": "https://www.hihonor.com/my",
            "en-MYHW": "https://shop.huawei.com/my",
            "ru-RUHW": "https://shop.huawei.ru",
            "cz-CZHW": "",
            "pl-PLHW": "",
        },
        remoteLoginUrl: {
            "zh-CN": 'https://hwid1.vmall.com/CAS/remoteLogin',
            "en-US": 'https://hwid7.vmall.com/CAS/remoteLogin',
            "en-GB": 'https://hwid7.vmall.com/CAS/remoteLogin',
            "es-ES": 'https://hwid7.vmall.com/CAS/remoteLogin',
            "de-DE": 'https://hwid7.vmall.com/CAS/remoteLogin',
            "fr-FR": 'https://hwid7.vmall.com/CAS/remoteLogin',
            "it-IT": 'https://hwid7.vmall.com/CAS/remoteLogin',
            "en-IN": 'https://hwid5.vmall.com/CAS/remoteLogin',
            "en-MY": 'https://hwid5.vmall.com/CAS/remoteLogin',
            "en-MYHW": 'https://hwid5.vmall.com/CAS/remoteLogin',
            "ru-RUHW": 'https://hwid8.vmall.com/CAS/remoteLogin',
            "cz-CZHW": "",
            "pl-PLHW": "",
        },
        registerUrl: {
            "zh-CN": 'https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?loginChannel=26000000&reqClientType=26&lang=zh-CN&countryCode=cn',
            "en-US": 'https://hwid7.vmall.com/CAS/portal/userRegister/regbyphone.html?loginChannel=26000109&reqClientType=26&lang=en-gb&countryCode=us',
            "en-GB": 'https://hwid7.vmall.com/CAS/portal/userRegister/regbyphone.html?loginChannel=26000702&reqClientType=26&lang=en-gb&countryCode=gb',
            "es-ES": 'https://hwid7.vmall.com/CAS/portal/userRegister/regbyphone.html?loginChannel=26000705&reqClientType=26&lang=es-es&countryCode=es',
            "de-DE": 'https://hwid7.vmall.com/CAS/portal/userRegister/regbyphone.html?loginChannel=26000704&reqClientType=26&lang=de-de&countryCode=de',
            "fr-FR": 'https://hwid7.vmall.com/CAS/portal/userRegister/regbyphone.html?loginChannel=26000703&reqClientType=26&lang=fr-fr&countryCode=fr',
            "it-IT": 'https://hwid7.vmall.com/CAS/portal/userRegister/regbyphone.html?loginChannel=26000701&reqClientType=26&lang=it-it&countryCode=it',
            "en-IN": 'https://hwid5.vmall.com/CAS/portal/userRegister/regbyemail.html?loginChannel=26000000&reqClientType=26&lang=en-in&countryCode=in',
            "en-MY": 'https://hwid5.vmall.com/CAS/portal/userRegister/regbyemail.html?loginChannel=26003800&reqClientType=26&lang=en-gb&countryCode=my&themeName=blue',
            "en-MYHW": 'https://hwid5.vmall.com/CAS/portal/userRegister/regbyemail.html?loginChannel=26003850&reqClientType=26&lang=en-gb&countryCode=my',
            "ru-RUHW": 'https://hwid8.vmall.com/CAS/portal/userRegister/regbyphone.html?loginChannel=26000008&reqClientType=26&lang=ru-RU&countryCode=ru',
            "cz-CZHW": "",
            "pl-PLHW": "",
        },
        infoLink: {
            "zh-CN": 'https://hwid1.vmall.com/CAS/portal/userCenter/info.html?loginChannel=26000000&reqClientType=26&lang=zh-CN&countryCode=cn',
            "en-US": 'https://www.hihonor.com/us/member/myInformation',
            "en-GB": 'https://www.hihonor.com/uk/member/myInformation',
            "es-ES": 'https://www.hihonor.com/fr/member/myInformation',
            "de-DE": 'https://www.hihonor.com/de/member/myInformation',
            "fr-FR": 'https://www.hihonor.com/es/member/myInformation',
            "it-IT": 'https://www.hihonor.com/it/member/myInformation',
            "en-IN": 'https://www.hihonor.com/in/member/myInformation',
            "en-MY": 'https://www.hihonor.com/my/member/myInformation',
            "en-MYHW": 'https://hwid1.vmall.com/CAS/portal/userCenter/index.html',
            "ru-RUHW": "",
            "cz-CZHW": "",
            "pl-PLHW": "",
        },
        amsDomain: {
            "zh-CN": 'https://act.vmall.com',
            "en-US": "https://amsfront-us.hihonor.com",
            "en-GB": "https://amsfront-it.hihonor.com",
            "es-ES": "https://amsfront-it.hihonor.com",
            "de-DE": "https://amsfront-it.hihonor.com",
            "fr-FR": "https://amsfront-it.hihonor.com",
            "it-IT": "https://amsfront-it.hihonor.com",
            "en-IN": "https://amsfront-sg.hihonor.com",
            "en-MY": 'https://amsfront-sg.hihonor.com',
            "en-MYHW": 'https://shop-ams.huawei.com/sg',
            "ru-RUHW": "",
            "cz-CZHW": "",
            "pl-PLHW": "",
        },
        domainCart: {
            "zh-CN": "//cart.vmall.com",
            "en-US": "//cart-us.hihonor.com",
            "en-GB": "//cart-gb.hihonor.com",
            "es-ES": "//cart-es.hihonor.com",
            "de-DE": "//cart-de.hihonor.com",
            "fr-FR": "//cart-fr.hihonor.com",
            "it-IT": "//cart-it.hihonor.com",
            "en-IN": "//cart-sg.hihonor.com",
            "en-MY": "//cart-sg.hihonor.com",
            "en-MYHW":"//shop-cart.huawei.com/sg",
            "ru-RUHW": "",
            "cz-CZHW": "",
            "pl-PLHW": "",
        },
        domainYY: {
            "zh-CN": '//yy.vmall.com',
            "en-US": '',
            "en-GB": '',
            "es-ES": '',
            "de-DE": '',
            "fr-FR": '',
            "it-IT": '',
            "en-IN": '//rushyy.hihonor.com/in',
            "en-MY": '',
            "en-MYHW": '',
            "ru-RUHW": "",
            "cz-CZHW": "",
            "pl-PLHW": "",
        },
        loginLink: {
            "zh-CN": '',
            "en-US": '',
            "en-GB": '',
            "es-ES": '',
            "de-DE": '',
            "fr-FR": '',
            "it-IT": '',
            "en-IN": '',
            "en-MY": '',
            "en-MYHW": '',
            "ru-RUHW": "",
            "cz-CZHW": "",
            "pl-PLHW": "",
        },
        registerLink: {
            "zh-CN": '',
            "en-US": '',
            "en-GB": '',
            "es-ES": '',
            "de-DE": '',
            "fr-FR": '',
            "it-IT": '',
            "en-IN": '',
            "en-MY": '',
            "en-MYHW": '',
            "ru-RUHW": "",
            "cz-CZHW": "",
            "pl-PLHW": "",
        },
        timeZone: {
            "zh-CN": 8,
            "en-US": -5,
            "en-GB": 1,
            "es-ES": 2,
            "de-DE": 2,
            "fr-FR": 2,
            "it-IT": 2,
            "en-IN": 5.5,
            "en-MY": 8,
            "en-MYHW": 8,
            "ru-RUHW": 3,
            "cz-CZHW": 1,
            "pl-PLHW": 1,
        }
    };
    var serviceUrl;
    if(locale == 'zh-CN'){
        serviceUrl = encodeURIComponent(config.domainMain[locale] + "/account/caslogin");
    }else{
        serviceUrl = encodeURIComponent(config.domainMain[locale] + "/account/acaslogin");
    }

    // 登录
    config.loginLink[locale] = config.domainMain[locale] + '/account/login?url=' + encodeURIComponent(window.location.href);
    // 注册
    config.registerLink[locale] = config.registerUrl[locale] + '&service=' + serviceUrl;

    for (x in config) {
        window[x] = config[x][locale];
    }

    delete window.registerUrl;
})(window);
