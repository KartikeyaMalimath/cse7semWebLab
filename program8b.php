<?php

	echo "<h3>Matrix</h3><br>";
	$m = array(
		array(1,2,3),
		array(4,5,6),
		array(7,8,9)
	);
	for($i = 0; $i<3;$i++){
		for($j=0; $j<3;$j++){
			echo $m[$i][$j]." ";
		}
		echo "<br>";
	}
	echo "<h3>Transpose Matrix</h3><br>";
	
	for($i=0; $i<3; $i++){
		for($j=0; $j<3; $j++) {
			echo $m[$j][$i]." ";
		}
		echo "<br>";
	}

?>