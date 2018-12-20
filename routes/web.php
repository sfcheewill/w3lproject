<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//加载前台首页
Route::resource('/homeindex','Home\IndexController');
//加载前台公告
Route::resource('/homenotice','Home\NoticeController');
//前台用户注册
Route::resource('/homeregister','Home\RegisterController');
//验证码
Route::get('/code','Home\RegisterController@code');
//短信验证码
Route::get('/phone','Home\RegisterController@phone');
//检测短信验证码
Route::get('/checkcode','Home\RegisterController@checkcode');
//检测邮箱
Route::get('/checkemail','Home\RegisterController@checkemail');
//检测手机号码
Route::get('/checkphone','Home\RegisterController@checkphone');
//前台登录
Route::resource('/homelogin','Home\LoginController');
//邮件激活账号
Route::get('/homestatus','Home\LoginController@status');
//加载忘记密码
Route::get('forget','Home\LoginController@forget');
//检测账号
Route::get('/checkAccount','Home\LoginController@checkAccount');
//检测图形验证码
Route::get('/checkvcode','Home\LoginController@checkvcode');
//加载检测邮箱验证码
Route::post('/emailcode','Home\LoginController@emailcode');
//发送邮箱验证码
Route::get('/sendEmailCode','Home\LoginController@sendEmailCode');
//检测邮箱验证码
Route::get('/checkemailcode','Home\LoginController@checkemailcode');
//加载设置新密码
Route::post('/newPass','Home\LoginController@newPass');
//设置新密码
Route::post('/setNewPass','Home\LoginController@setNewPass');
//前台友情链接页面
Route::resource('/homelink','Home\LinkController');
//检测友情链接网站名
Route::get('/linkname','Home\LinkController@linkname');
//检测友情链接网址
Route::get('/linkurl','Home\LinkController@linkurl');
//检测友情链接邮箱
Route::get('/linkemail','Home\LinkController@linkemail');
//商品列表
Route::get('/homegoodslist/{id}','Home\IndexController@goodslists');
//商品详情
Route::get('/homegoodsinfo/{id}','Home\IndexController@goodsinfo');
//商品详情选择商品颜色
Route::get('/goodscolor','Home\IndexController@goodscolor');
//商品详情选择商品版本
Route::get('/specinfo','Home\IndexController@specinfo');
//商品详情增加商品数量
Route::get('/goodsadd','Home\IndexController@goodsadd');
//加入购物车
Route::get('/addshopcart','Home\CartController@addshopcart');
//购物车页面
Route::resource('/homeshopcart','Home\CartController');
//购物车页面输入值修改商品数量
Route::get('/shopcartedit','Home\CartController@shopcartedit');
//增加购物车商品数量
Route::get('/cartplus','Home\CartController@cartplus');
//减少购物车商品数量
Route::get('/cartminus','Home\CartController@cartminus');
//删除购物车商品
Route::get('/cartdel','Home\CartController@cartdel');

//前台需要登录的模块组
Route::group(['middleware'=>'homelogin'],function(){
	// 个人中心
	Route::resource('/person','Home\PersonController');
	// ajax修改性别
	Route::get('/ajaxsex','Home\PersonController@sex');
	// ajax修改昵称
	Route::get('/nickname','Home\PersonController@nickname');
	// ajax地址显示
	Route::get('/address','Home\PersonController@address');
	// ajax地址保存
	Route::get('/addreset','Home\PersonController@addreset');
	// ajax修改生日
	Route::get('/birthday','Home\PersonController@birthday');
 	//购物车结算
	Route::get('/settleaccount/{gids}','Home\CartController@settleAccount');
	//前台会员地址添加
	Route::resource('/usercity','Home\UsercityController');
	//获取地址列表
	Route::get('/district','Home\UsercityController@district');
});


//后台登录
Route::resource('/adminlogin','Admin\AdminloginController');

//后台管理路由组
Route::group(['middleware'=>'adminlogin'],function(){
	//后台分类管理
	Route::resource('/admincate','Admin\CateController');
	//后台管理员
	Route::resource('/adminuser','Admin\AdminuserController');
	//加载后台首页
	Route::resource('/admin','Admin\AdminsController');
	//角色分配
	Route::get('/adminrole/{id}','Admin\AdminuserController@rolelist');
	//保存角色
	Route::post('/saverole','Admin\AdminuserController@saverole');
	//角色列表
	Route::resource('/adminrolelist','Admin\RolelistController');
	//修改角色状态
	Route::get('/roleedit','Admin\RolelistController@roleedit');
	//分配权限
	Route::get('/adminauth/{id}','Admin\RolelistController@auth');
	//保存权限
	Route::post('/saveauth','Admin\RolelistController@saveauth');
	//权限列表
	Route::resource('adminnodelist','Admin\NodelistController');
	//修改权限状态
	Route::get('/nodeedit','Admin\NodelistController@nodeedit');
	//公告管理
	Route::resource('/adminnotice','Admin\NoticeController');
	//批量删除公告
	Route::get('/noticedel','Admin\NoticeController@del');
	//商品管理
	Route::resource('/admingoods','Admin\GoodsController');
	//添加规格
	Route::get('/admingoods/{id}/spec','Admin\GoodsController@spec');
	//保存规格
	Route::post('/adminsavespec','Admin\GoodsController@savespec');
	//商品规格管理
	Route::resource('/admingoodsspec','Admin\GoodsspecController');
	//添加规格详情
	Route::get('/admingoodsspec/{id}/addinfo','Admin\GoodsspecController@addinfo');
	//保存商品规格详情
	Route::post('/adminsavespecinfo','Admin\GoodsspecController@saveinfo');
	//商品规格详情管理
	Route::resource('/adminspecinfo','Admin\GoodsspecinfoController');
	//会员管理
	Route::resource('/adminusers','Admin\UsersController');
	//会员地址管理
	Route::get('/Usercity/{id}','Admin\UsersController@Usercity');
	//友情链接管理
	Route::resource('/adminlink','Admin\LinkController');
	//Ajax修改状态
	Route::get('/links','Admin\LinkController@links');
	//轮播图管理
	Route::resource('/adminslideshow','Admin\SlideshowController');
	//广告图片管理
	Route::resource('/advertising','Admin\AdvertisingController');
});