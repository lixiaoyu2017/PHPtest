<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		//1:拼SQL语句字符串
		$sql="insert into blog(blogid,title,content,time) values(null,'$title','$con',now())";
		//2:运行SQL语句  string->resource
		$result=mysqli_query($link,$sql);
		if($result){
			echo "<script>alert('添加成功')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			echo "添加失败";
		}
	}
?>

<form action="add.php" method="post">
	标题:<input type="text" name="title"><br />
	内容:<textarea rows=10 cols=30 name="con"></textarea><br />
	<input type="submit" name="sub" value="发表">
</form>