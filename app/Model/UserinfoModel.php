<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserinfoModel extends Model
{
     //关联表
    protected $table = 'users_info';
    //设置时间戳维护
    public $timestamps = true;
    //设置可以赋值的字段
    protected $fillable = ['uid','nickname','sex','district','birthday','pic'];

   //修改器
    public function getSexAttribute($value){
    	$sex = [0=>'女',1=>'男',2=>'保密',''=>'未设置'];
    	return $sex[$value];
    }

}
