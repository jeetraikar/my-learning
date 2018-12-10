<htnl>
<head>
	<style>
		body{
			background-image: radial-gradient(red,black);
			background-repeat: no-repeat;
			align-content: center;
			color: white;
		}
		td, th{
			background-color: rgba(0,0,0, 0.3);
			padding: 5px 5px 5px 5px;
			border: 2px solid red;
			border-radius: 10px
		}
		h2{
			color: black;
		}
		table{
			position: absolute;
			top: 25%;
			left: 33%;
		}
		#sub{
			background-color: rgba(0,0,0,.5);
			color: white;
			border: 2px solid white;
			border-radius: 10px;
			height: 60px;
		}
	</style>
	<body>
	<form method="post">
		<table>
			<tr colspan="3"><caption><h2>SIMPLE CALCULATOR</h2></caption></tr>
			<tr><td><p>Number 1</p></td><td><input type="number" name="num1"></td><td rowspan="2"><input id="sub" type="submit" placeholder="calculate" name="submit"></td></tr>
			<tr><td><p>Number 2</p></td><td><input type="number" name="num2"></td></tr>
	</form>
	<?php
		if(isset($_POST['submit']))
		{
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			if(is_numeric($num1) && is_numeric($num2))
			{

				echo "<tr><td>Addition</td><td colspan='2'><p>".($num1+$num2)."</p></td></tr>";
				echo "<tr><td>Subtraction</td><td colspan='2'><p>".($num1-$num2)."</p></td></tr>";
				echo "<tr><td>Multiplication</td><td colspan='2'><p>".($num1/$num2)."</p></td></tr>";
				echo "<tr><td>Division</td><td colspan='2'><p>".($num1/$num2)."</p></td></tr>";
				echo "</table>";
			}
						else
			{
				echo"<script type='text/javascript' > alert(' ENTER VALID NUMBER');</script>";
			}
		}
	?>
	</body>
</html>