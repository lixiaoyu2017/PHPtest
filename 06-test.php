<?php
	if(isset($_POST['sub'])){
		$sfile=$_FILES['sfile'];
		
		$tmp=$sfile['tmp_name'];
		$mp="C:\\xampp"."\\htdocs"."\\phpi"."\\day2"."\\upload"."1.jpg";
		$m=move_uploaded_file ($tmp,$mp);
		if($m){
			echo 'ok';
		}else{
			echo 'error';
		}
		
		/*
		echo "<pre>";
		var_dump($sfile);
		echo "</pre>";*/
	}
?>

<form action='06-test.php' method="post" enctype="multipart/form-data">
	上传文件<input type="file" name="sfile">
	<input type="submit" name="sub" value="上传">
</form>