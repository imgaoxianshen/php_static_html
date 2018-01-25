<?php

//如果存在这个文件并且最近修改时间来判断是否生成静态文件
if(is_file('index.html')&&(time()-filemtime('index.html'))<300){
	//显示
	require_once('index.html');
}else{
	//生成且显示


	$connect = new mysqli('localhost','root','','edu');
	//设置字符集
	$sql = "select * from user ";

	$result = $connect->query($sql);

	while($row = $result->fetch_assoc()){

		$list[]= $row;

	}


	ob_start();
	require_once('static.html');

	/*if(file_put_contents('index.html',ob_get_clean())){
		echo 'success';
	}else{
		echo 'error';
	}*/

	file_put_conents('index.html',ob_get_contents());
}