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
});