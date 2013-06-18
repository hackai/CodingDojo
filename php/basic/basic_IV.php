<?php 
	

	function get_max_and_min($number)
	{
			$max = 0;
			$min = 0;

		for($counter =0; $counter < count($number);$counter++)
		{
			$current_number = $number[$counter];
		
			if($counter ==0 or $max < $current_number)
			{
			$max = $current_number;
			}

			if($counter == 0 or $min > $current_number)
			{
				$mix = $current_number;
			}
			}
							
			$min_max = array('min' => $min, 'max'=> $max);
			return $min_max;
				
	}
	$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
	$output = get_max_and_min($sample); 
	var_dump($output); 
	//$output should be equal to array('max' => 332, 'min' => 1.02);
	?> 