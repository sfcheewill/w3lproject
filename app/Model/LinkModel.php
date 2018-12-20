<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LinkModel extends Model
{
    //与模型相关的数据表
    protected $table = 'link';
    //该模型是否被自动维护时间戳
    public $timestamps = false;
    //主键
   	protected $primaryKey = 'id';
    //可以被赋值的属性
    protected $fillable = ['name','url','email','present','status'];

    //修改器的方法
    public function getStatusAttribute($value){
    	$status = ['1'=>'审核中','2'=>'同意','3'=>'拒绝'];
    	return $status[$value];
    }
}
