<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //关联表
    protected $table = 'role';
    //自动维护时间戳
    public $timestamps = false;
    //设置可以赋值的值
    protected $fillable = ['id','name','status','remark'];

    //修改器
    public function getStatusAttribute($value){
    	$status = [1=>'激活',2=>'禁用'];
    	return $status[$value];
    }
}
