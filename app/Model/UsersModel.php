<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    //关联表
    protected $table = 'users';
    //设置时间戳维护
    public $timestamps = true;
    //设置可以赋值的字段
    protected $fillable = ['username','password','email','status','token','phone'];

    //修改器
    public function getStatusAttribute($value){
    	$status = [1=>'未激活',2=>'已激活'];
    	return $status[$value];
    }
}
