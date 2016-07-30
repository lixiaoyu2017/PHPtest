<?php
	//mysql  mysqli pdo
	//1:创建一个数据库连接 打开它
	$link=@mysqli_connect('localhost','root','') or die('数据库连接失败');
	
	
	//2：选中一个数据库
	@mysqli_select_db($link,'blogll') or die('选择数据库失败');
	
	
	
	//3:设定传输编码
	mysqli_set_charset($link,'UTF8');

?>