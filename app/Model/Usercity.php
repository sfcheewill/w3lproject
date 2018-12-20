<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usercity extends Model
{
    //关联表  user_city 会员地址表
    protected $table = 'user_city';
    //设置时间戳维护
    public $timestamps = false;
    //主键
    public $primaryKey = "id";
    //设置可以赋值的字段
    protected $fillable = ['name','uid','phone','city','code','status'];

    //修改器
    public function getStatusAttribute($value){
    	$status = [1=>'默认地址'];
    	return $status[$value];
    }
}
