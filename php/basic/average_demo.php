<?php

	function average($array)
	{

		$total =0;

		foreach ($array as $key => $row)
		 {
		 	$total = $total+ $row;
		 	//first time this runs, it's going to run 
		 	//$total = 0 + 10;
		 	//second time this runs, it runs
		 	//$total =  10 + 3;
		}

		$num_of_rows = count($array);
		$average = $total/$num_of_rows;
		return $average;


	}

$sample = array(10, 3, 5, 8, 4, 2, 1, 32, 87, 333); 
$output = average($sample); 
echo $output; //this should print the average value

?>

<?php

	function reverse ($data)
	{	
		$newly_rearranged_array = array();
		for($i= count($data); $i> 0; $i= $i-1)
		{
			echo $data[$i] . " ";


		}

		return "hi"; 



	}
	$sample = array(10, 3, 5, "Coding", 8, 4, "Dojo", 2, 1, 333); 
	$output = reverse($sample); 
	var_dump($output); //this should print the array values in reverse order


?>