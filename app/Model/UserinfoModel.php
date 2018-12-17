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

}
