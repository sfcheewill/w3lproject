<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    //关联表
    protected $table = 'node';
    //自动维护时间
    public $timestamps = false;
    //设置可以赋值的数据
    protected $fillable = ['id','name','mname','aname','status'];

    //修改器
    public function getStatusAttribute($value){
    	$status = [1=>'激活',2=>'禁用'];
    	return $status[$value];
    }
    
}
