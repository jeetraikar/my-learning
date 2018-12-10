<!DOCTYPE html>
<html>
	<head>
		<style>
			p{
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
			}
			body
			{
				background-color: black;
			}
		</style>
	</head>
	<body>
		<p id="demo"></p>
		<script>
			var val1 = setInterval(inTimer,1000);
			var fs=5;
			var ids= document.getElementById("demo");
			function inTimer()
			{
				ids.innerHTML = "TEXT GROWING";
				ids.setAttribute('style',"font-size:"+fs+"px; color: red;");
				fs+=5
				if(fs>=50)
				{
					clearInterval(val1);
					var val2 = setInterval(deTimer,1000);
				}
			}
			function deTimer()
			{
				ids.innerHTML = "TEXT SHRINKING";
				fs-=5;
				ids.setAttribute('style',"font-size:"+fs+"px; color:blue;");
				if(fs<5)
				{
					clearInterval(val2);
				}
			}
		</script>
	</body>
</html>