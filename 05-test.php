<meta charset="UTF-8">
<a href="05-test.php">单击生成新的号码</a><br />
<?php
	$arr[]=array();
	for($i=1;$i<=5;$i++){
		echo "第".$i."注:";
		echo "<br />";
		for($j=1;$j<=7;$j++){
			$num=mt_rand(1,31);
			$arr[$i][]=array();
			//$arr[i][]=$num;
			if(in_array($num,$arr[$i])){
				$j--;
				continue;
			}else{
				if($j<7){
					$arr[$i][$j]=$num.",";
				}else{
					$arr[$i][$j]=$num;
				}
				
				echo $arr[$i][$j];
				
			}
		}
		echo "<br />";
	}
	

?>

<script>
	var name=navigator.appName;
	//alert(name);
	if(name=="Netscape"){
		window.location.reload(true);
	}else{
		history.go(0);
	}
	
</script>
