<?php
	$allstates = "Mississippi Alabama Texas Massachusets Kansas";
	$statesArr = [];
	$states = explode(' ', $allstates);
	$i = 0;
	//a
	foreach($states as $state) {
		if(preg_match('/xas$/',($state))) {
			$statesArr[$i] = ($state);
			$i += 1;
			print "State ending with xas : ".$state;
		}
	}	
	echo "<br>";
	//start k end s
	foreach($states as $state) {
		if(preg_match('/^k.*s$/i',($state))) {
			$statesArr[$i] = ($state);
			$i += 1;
			print "State starting K ending with s : ".$state;
		}
	}	
	echo "<br>";
	//start M end S
	foreach($states as $state) {
		if(preg_match('/^M.*s$/i',($state))) {
			$statesArr[$i] = ($state);
			$i += 1;
			print "State starting with M ending with s : ".$state;
		}
	}
	echo "<br>";
	//end abs
	foreach($states as $state) {
		if(preg_match('/a$/i',($state))) {
			$statesArr[$i] = ($state);
			$i += 1;
			print "State ending with a : ".$state;
		}
	}	
?>