<?php
	echo "<h2>Refresh the page</h2>";
	$name = "counter1.txt";
	$file = fopen($name, 'r');
	$hits = fscanf($file , '%d');
	fclose($file);
	$hits[0]++;
	$file = fopen($name, 'w');
	fprintf($file, '%d', $hits[0]);
	fclose($file);
	echo "<p>Number of visits = ".$hits[0];
?>