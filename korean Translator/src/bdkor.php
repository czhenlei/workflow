<?php
	require_once('workflows.php');
	$w = new Workflows();
	$url = "http://api.fanyi.baidu.com/api/trans/vip/translate?";
	$salt = "fdsafagfdgv43532ju76jM";
	$app_id = "20170829000078503";
	$key = "m83Zx7IlTjHLWWTtEmqv";
	$query = $argv[1];
	$sign = md5($app_id.$query.$salt.$key);
	$url = $url."q=".urlencode($query)."&from=auto&to=kor&appid=".$app_id."&salt=".$salt."&sign=".$sign;

	$suggestions = $w->request($url);
	$suggestions = json_decode($suggestions,true);
	
//	$w->result(round(1234567,10), $query, $suggestions['trans_result'][0]['dst'], $suggestions['from'], $icon);
//	echo $w->toxml();
	echo $suggestions['trans_result'][0]['dst'];
?>