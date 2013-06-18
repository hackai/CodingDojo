<?php

// for($i=0; $i<100; $i++)
// {
// 	echo rand(0, 3);
// 	echo '<br>';
// }
function print_statement($array, $statement = "", $cars)
{
	foreach($array as $key => $value)
	{
		if($key != 'black')
		{
			echo $key .' '. $value;
			echo '<br>';
		}
		else
		{
			echo $key .' '. $value . ' is the best ninja';
			echo '<br>';
		}
	}

	if($statement)
	{
		echo $statement;
		echo '<br>';
	}

	foreach($cars as $car)
	{
		echo $car;
		echo '<br>';
	}
}

$array = array( 'black' => 'Randall', 
				'green' => 'Damon', 
				'white' => 'new guy', 
				'red' => 'Joe', 
				'yellow' => 'Gary'
				);
$sweet_cars = array('corvette', 'ferrari', 'austin martin', 'maserati');

print_statement($array, "here is a list of our ninjas and their belts", $sweet_cars);

?>