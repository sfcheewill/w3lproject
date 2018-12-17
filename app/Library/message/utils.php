<?php
	//调用短信验证码
	function sendsphone($p){
		//通过接口给手机号发短信
		//初始化必填
		//填写在开发者控制台首页上的Account Sid
		$options['accountsid']='3fe864d935fef5b0cbaf375fec120141';
		//填写在开发者控制台首页上的Auth Token
		$options['token']='29458237482e3b84a564e190e06f1fff';

		//初始化 $options必填
		$ucpass = new Ucpaas($options);

		$appid = "b3e62b2b86ee49f0befb14e089f65161";	//应用的ID，可在开发者控制台内的短信产品下查看
		$templateid = "408792";    //可在后台短信产品→选择接入的应用→短信模板-模板ID，查看该模板ID
		//验证码
		$param = mt_rand(100000,999999); //多个参数使用英文逗号隔开（如：param=“a,b,c”），如为参数则留空
		//将验证码存储在cookie中,过期时间60秒
		// setcookie('fcode',$param,time()+60);
		\Cookie::queue('fcode',$param,1);
		//手机号
		$mobile = $p;
		$uid = "";

		//70字内（含70字）计一条，超过70字，按67字/条计费，超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。

		return $ucpass->SendSms($appid,$templateid,$param,$mobile,$uid);
	}