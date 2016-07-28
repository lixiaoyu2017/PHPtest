<?php
	echo "<table align='center' border='1' width='800'>";
	echo "<caption>隔行换色</caption>";
	for($i=1;$i<=100;$i++){
		echo "<tr onmouseover=lrow(this) onmouseout=drow(this)>";
		for($j=1;$j<=10;$j++){
			echo "<td>";
			echo $i;
			echo "</td>";
		}
		echo "</tr>";
	}
	
	echo "</table>";

?>

<script>
	var ys="";
	function lrow(obj){
		ys=obj.bgColor;
		obj.bgColor='red';
	}
	
	function drow(obj){
		obj.bgColor=ys;
	}
</script>







