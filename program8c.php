<?php

	echo "<h3>Matrix Multiplication</h3><br>";
	$m = array(
		array(1,2,3),
		array(4,5,6),
		array(7,8,9)
	);
	$n = array(
		array(7,8,9),
		array(4,5,6),
		array(1,2,3)		
	);
	echo "<table><tr><th>Matrix A</th><th>Operation</th><th>Matrix B</th><th>Equals</th><th>Result</th></tr><tr><td>";
	for($i = 0; $i<3;$i++){
		for($j=0; $j<3;$j++){
			echo $m[$i][$j]." ";
		}
		echo "<br>";
	}
	echo "</td><td><center>*</center></td><td>";
	for($i = 0; $i<3;$i++){
		for($j=0; $j<3;$j++){
			echo $n[$i][$j]." ";
		}
		echo "<br>";
	}
	echo "</td><td><center>=</center></td><td>";
	for($i = 0; $i<3;$i++){
		for($j=0; $j<3;$j++){
			$temp = 0;
			for($k = 0; $k<3; $k++){
				$temp = $temp + $m[$i][$k]*$n[$k][$j];
			}
			echo $temp." ";
		}
		echo "<br>";
	}
	echo "</td></tr></table>";

?>

<style>
tr {
	border : 1px solid #ddd;
}
</style>