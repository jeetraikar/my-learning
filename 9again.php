<?php
	$states = "Mississipi Texas Alabama Kansas Masachussets";
	$statesArray = [];
	$states1 = explode(' ',$states);
	echo "Original array is<br>";
	foreach($states1 as $i => $value)
		echo "STATES[$i] : $value<br>";
	foreach($states1 as $states)
	{
		if(preg_match('/xas$/',($states)))
			$statesArray[0]=$states;
		if(preg_match('/^k.*s$/i',($states)))
			$statesArray[1]=$states;
		if(preg_match('/^M.*s$/',($states)))
			$statesArray[2]=$states;
		if(preg_match('/a$/',($states)))
			$statesArray[3]=$states;
	}
	foreach ( $statesArray as $array => $value )
	print("STATES[$array]=$value<br>");
?>