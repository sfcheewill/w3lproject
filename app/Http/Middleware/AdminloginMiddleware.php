<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class AdminloginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('name')){
            //已登录
            //权限检测
            //获取访问的控制器和名字
            $actions = explode('\\',\Route::current()->getActionName());
            //模块名
            $modelName = $actions[count($actions)-2] == 'Controllers'?null : $actions[count($actions)-2];
            $func = explode('@',$actions[count($actions)-1]);
            //控制器名字
            $controller = $func[0];
            //方法名字
            $actionName = $func[1];
            //获取权限信息
            $nodelist = session('nodelist');
            //和权限列表做对比
            if(empty($nodelist[$controller]) || !in_array($actionName, $nodelist[$controller])){
                return back()->with('error','抱歉,您没有访问该模块的权限,请联系管理员');
            }
            //检测该模块是否被禁用
            if($controller != 'AdminsController' && $actionName != 'store' && $actionName != 'update'){
                if(DB::table('node')->where('mname','=',$controller)->where('aname','=',$actionName)->value('status') != 1){
                    return back()->with('error','该模块已被禁用,请联系管理员');
                }   
            }
            return $next($request);
        }else {
            //未登录
            return redirect('/adminlogin/create');
        }
    }
}
