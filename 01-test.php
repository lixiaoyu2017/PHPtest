<?php
	//多文件上传问题
	if(isset($_POST['sub'])){
		$sfile=$_FILES['sfile'];
		$a=0;
		for($i=0;$i<count($sfile[name]);$i++){
			$a=$a+1;
			echo "上传图片".$a."名字:".$sfile[name][$i];
			echo "<br />";
		}
		
		$str=$sfile[tmp_name][0];
		//echo $str;
		$str1=substr($str,8);
		echo $str1;
		
		/*
		echo "<pre>";
		var_dump($sfile);
		echo "</pre>";*/
		
	}

?>

<meta charset='UTF-8'>
<form action="01-test.php" method="post" enctype="multipart/form-data">
	文件1:<input type="file" name="sfile[]"><br />
	文件2:<input type="file" name="sfile[]"><br />
	<input type="submit" name="sub" value="上传">
</form>