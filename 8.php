<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form method="post">
			<table>
			<tr><td colspan="3"><h1> A STUPID CALCULATOR </h1></td></tr>
			<tr><td>First Number</td><td><input type='text' name="num1"></td><td rowspan="2"><input type="submit" name="submit"></td></tr>
			<tr><td>Second Number</td><td><input type='text' name="num2"></td></tr>
			</form>
			<?php
				if(isset($_POST['submit']))
				{
					$shit1 = $_POST['num1'];
					$shit2 = $_POST['num2'];
 					if(is_numeric($shit1) and is_numeric($shit2))
 					{
 						echo "<tr><td>Addition</td><td colspan='2'>".($shit1+$shit2);
 						echo "<tr><td>Subtraction</td><td colspan='2'>".($shit1-$shit2);
 						echo "<tr><td>Multiplication</td><td colspan='2'>".($shit1*$shit2);
 						echo "<tr><td>Division</td><td colspan='2'>".($shit1/$shit2);
 						echo "</table>";
 					}
 					else
 					{
 						echo "<script type='text/javascript'>alert('Enter a valid number you idiot');</script>";
 					}
				}
			?>
	</body>
</html>