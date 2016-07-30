<a href="add.php">添加文章</a>&nbsp;&nbsp;

<?php
	if(isset($_COOKIE['id'])){
		$id=$_COOKIE['id'];
		echo "<a href='./admin/admin.php'>".$_COOKIE['name']."</a>"."已登录";
		echo "<a href=logout.php?id=$id>注销</a>";
	}else{
		echo "<a href='login.php'>未登录</a>";
	}
?>
<br /><br />
<form action="index.php" method="GET">
	<input type="text" name="search">
	<input type="submit" name="sub" value="搜索">
</form>

<?php
	include "conn.php";
	
	if(isset($_GET['sub'])){
		//搜索的sql语句
		$se=$_GET['search'];
		$e="title like '%$se%'";
	}else{
		echo 123;
		$e=1;
	}
	
	$sql='select * from blog where '.$e.' order by blogid desc limit 10';
	//echo $sql;
	//die();
	$result=mysqli_query($link,$sql);
	
	//var_dump($result);
	//$rs=mysqli_fetch_array($result);
	//$a=reset($rs);
	//var_dump($a);
	//die();
	//$rs=mysqli_fetch_array($result);
	
	while($rs=mysqli_fetch_array($result)){
	//var_dump($rs);
	

?>
<h2><a href="view.php?id=<?php echo $rs['blogid']?>">标题:<?php echo $rs['title']?></a> |<a href="edit.php?id=<?php echo $rs['blogid']?>">编辑 </a>|<a href="del.php?id=<?php echo $rs['blogid']?>">删除</a></h2>
<li><?php echo $rs['time']?></li>
<p><?php echo iconv_substr($rs['content'],0,2);?>...</p>
<hr />
<?php 
	}
?>