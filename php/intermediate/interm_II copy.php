<?php
	
	$array_1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$array_2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	
	for($i = 0; $i < count($array_1); $i++){
		for($j = 0; $j < count($array_2); $j++){
			echo $array_1[$i] * $array_2[$j];

		}
		echo '<br>';	
	}
?>