<?php 
	$redis = new Redis();
	$redis->connect('localhost',6379);
	//获取订单id,修改订单状态
	$order_id = $redis->get('moviepayid');

	$static = 0;	//订单状态
	$buy_time = time();	//付款时间
	//使用pdo操作
	$pdo = new PDO('mysql:host=localhost;dbname=dy','root','123456');
	$pdo->exec('set names utf8');

	$sql = "update morder set static='{$static}',buy_time='{$buy_time}' where id={$order_id}";

	//执行
	$row = $pdo->exec($sql);

	if($row > 0){
		echo '<h1>支付成功</h1><a href="../index.php">回到首页</a>';
	}