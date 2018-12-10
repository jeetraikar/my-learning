<?php
$a = array(array(1,2,3) ,array(4,5,6), array(7,8,9));
$b = array(array(7,8,9) ,array(4,5,6), array(1,2,3));
$m = count($a);
$p = count($b);
$q = count($b[2]);
$n = count($a[2]);
echo "<p>The first matrix is</p>";
for($row=0; $row<$m ; $row++)
{
	for($col=0; $col<$n ; $col++)
		echo "  ".$a[$row][$col];
	echo "<br>";
}
echo "<p>The second matrix is</p>";
for ( $row=0 ; $row<$p ; $row++)
{
	for($col=0 ; $col<$q ;$col++)
		echo "  ".$b[$row][$col];
	echo "<br>";
}
echo "<p>Transpose of the first matrix</p>";
for($col=0 ; $col<$n ; $col++)
{
	for($row=0 ; $row<$m ; $row++)
		echo "  ".$a[$row][$col];
	echo "<br>";
}
echo "<p>Sum of the two matrices is</p>";
if($m==$p && $n==$q)
{
	for($row=0 ; $row<$m ; $row++)
	{
		for($col=0 ;$col<$n ; $col++)
			echo "  ".($a[$row][$col]+$b[$row][$col]);
		echo "<br>";
	}
}
echo "<p>Product of the two matrices</p>";
if($n==$p)
{
	$result=array();
	for($row=0 ; $row<$m ;$row++)
	{
		for($col=0 ; $col<$n ; $col++)
		{
			$result[$row][$col]=0;
			for($k=0 ;$k<$n ;$k++)
			{
				$result[$row][$col]+=$a[$row][$k]/////////$b[$k][$col];
			}
		}
	}
	for($i=0 ; $i<$m ;$i++)
	{
		for($j=0 ;$j<$q; $j++)
		{
			echo "  ".$result[$i][$j];
		}
		echo "<br>";
	}		
}
?>