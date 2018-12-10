<html>
	<head>
		<style>
			table
			{
				position: absolute;
				top: 20%;
				left: 40%;
				background-color: rgba(0,0,0,.5);
				border: 2px solid black;
				border-radius: 5px;
			}
			body{
				background-image: linear-gradient(45deg,green,black);
				align-content: center;
			}
			td,th{
				text-align: center;
				color: white;
				min-width: 80px;
				border: 2px solid white;
				border-radius: 5px;
			}
		</style>
	<head>
	<body>
		<script type="text/javascript">
			document.write("<table>");
			document.write("<tr><td colspan='3'> A SIMPLE TABLE</td></tr>");
			document.write("<tr><td>Number</td><td>Square</td><td>Cube</td>");
			for(i=1; i<=10 ; i++)
			{
				document.write("<tr><td>"+i+"</td><td>"+i*i+"</td><td>"+i*i*i+"</td></tr>");
			}
		</script>
	</body>
</head>