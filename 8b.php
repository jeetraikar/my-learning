<?php
$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
$b = array(array(7,8,9),array(4,5,6),array(1,2,3));
$m = count($a);
$n = count($a[2]);
$p = count($b);
$q = count($b[2]);

echo "Matrix 1 is<br>";
for( $i=0 ; $i<$m ; $i++)
{
	for( $j=0 ; $j<$n ; $j++)
		echo "  ".$a[$i][$j];
	echo "<br>";
}
echo "Matrix 2 is<br>";
for( $i=0 ; $i<$p ;$i++)
{
	for( $j=0 ; $j<$q ; $j++)
		echo "  ".$b[$i][$j];
	echo "<br>";
}
echo "Transpose of the first matrix<br>";
for( $i=0 ; $i<$m ; $i++)
{
	for( $j=0 ; $j<$n ; $j++)
		echo "  ".$a[$j][$i];
	echo "<br>";
}
echo "Sum of the two matrices<br>";
if($m==$p and $n==$q)
{
	for($i=0 ; $i<$m ; $i++)
	{
		for($j=0 ;$j<$n ; $j++)
			echo " ".($a[$i][$j]+$b[$i][$j]);
		echo "<br>";
	}
}
echo "Product of the two matrices<br>";
if($n == $p)
{
	for($i=0 ; $i<$m ; $i++)
	{
		for($j=0 ;$j<$q ; $j++)
		{
			$result[$i][$j]=0;
			for($k=0 ; $k<$n ; $k++)
				$result[$i][$j]+=$a[$i][$k]*$b[$k][$j];
		}
	}
	for( $i=0 ; $i<$m ; $i++)
	{
		for( $j=0 ; $j<$q ; $j++)
			echo "  ".$result[$i][$j];
		echo "<br>";
	}
}
?>