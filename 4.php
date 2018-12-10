<!DOCTYPE html>
<html>
	<body>
		<script type="text/javascript">
			var val = prompt("Enter a value","");
			if(!isNaN(val))
			{
				var rev=0,remainder;
				var num= parseInt(val);
				while(num>0)
				{
					remainder= num%10;
					num= parseInt(num/10);
					rev=rev*10+remainder;
				}				
				alert("Reverse of "+val+" is "+rev);
			}
			else
			{
				var str= val;
				str= str.toUpperCase();
				for(i=0 ;i<str.length; i++)
				{
					if(str[i]=='A' || str[i]=='E' || str[i]=='I' || str[i]=='O' || str[i]=='U')
						break;
				}
				if(i<str.length)
					alert("First vowel found at position "+ (i+1));
				else
					alert("NO Vowels are present in the given string");
			}
		</script>
	</body> 
</html>