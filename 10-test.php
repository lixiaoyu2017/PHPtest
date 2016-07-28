<?php
	if(isset($_GET['sub'])){
		$num1=$_GET['num1'];
		$num2=$_GET['num2'];
		$ysf=$_GET['ysf'];
		$sum=0;
		
		switch($ysf){
			case '+' :
				$sum=$num1+$num2;
				break;
			case '-' :
				$sum=$num1-$num2;
				break; 
			case '*' :
				$sum=$num1*$num2;
				break;
			case '/' :
				$sum=$num1/$num2;
				break;
			case '%' :
				$sum=$num1%$num2;
				break;
			default :
				echo "没有选择运算符";
				break;
		}
		
	}

?>

<form action="10-test.php" method="GET">
	<table align='center' border='1' width='500'>
		<tr>
			<td><input type="text" name="num1" value="<?php if(isset($_GET['num1'])) echo $_GET['num1'];?>"></td>
			<td>
				<select name='ysf'>
					<option value='+' <?php if($_GET['ysf']=='+') echo "selected"?>>+</option>
					<option value='-' <?php if($_GET['ysf']=='-') echo "selected"?>>-</option>
					<option value='*' <?php if($_GET['ysf']=='*') echo "selected"?>>×</option>
					<option value='/' <?php if($_GET['ysf']=='/') echo "selected"?>>/</option>
					<option value='%' <?php if($_GET['ysf']=='%') echo "selected"?>>%</option>
				</select>
			</td>
			<td><input type="text" name="num2"></td>
			<td><input type="submit" name="sub" value='计算'></td>
		</tr>
		<?php
			if(isset($_GET['sub'])){
				echo "<tr>";
				echo "<td colspan=4>";
				echo $sum;
				echo "</td>";
				echo "<tr>";
			}
		?>
	</table>
</form>