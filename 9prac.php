<?php
	$states="Mississipi Texas Alabama Masachusets Kansas";
	$statearray= [];
	$states1= explode(' ', $states);
	echo "Original array is<br>";
	foreach($states1 as $i => $value)
		print("STATES[$i]= $value<br>");
	foreach($states1 as $state)
		if(preg_match('/xas$/', $state))
			echo "<br> $state<br>"
?>