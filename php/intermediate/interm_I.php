<?php
	
function draw_stars($array)
{
	
	foreach($array as $stars) 
	{
			
			echo '<br>';
	
		for($i=0; $i < $stars; $i++)
		{
			echo '*';
		}
			echo '<br>';
	}

}
$array = array(4, 6, 1, 3, 5, 7, 25);
draw_stars ($array);

$items = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

function list_name($array)
{
	foreach($array as $array_item) 
	{
			echo '<br>';
		if(is_numeric($array_item))
		{
		for($i=0; $i < $array_item; $i++)
		{
			echo '*';
		}
	
		}
		else
		{
	
			$items = $array_item[0];
			$lower_case = strtolower($items);
			echo str_repeat($lower_case, strlen($array_item));

		}
		echo '<br>';
		
	}
	
	

}
list_name ($items);


?>