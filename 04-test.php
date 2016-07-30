<?php
	
	//1:使用循环把五个不重复的随机数取出来放到新数组里面
	//2:循环新数组 一个一个字母取出来拼空格
	//3:输出
	$start=0;
	$end=9;
	$conn=0;
	$result=5;
	while($conn<$result){
		$arr[]=rand($start,$end);
		//for($i=0;$i<count())
		$arr=array_unique($arr);
		$conn=count($arr);
	}  
	
	foreach($arr as $v){
		//echo $v." "
		$str.=$v." ";
	} 
	
	echo "随机数:".$str;

?>