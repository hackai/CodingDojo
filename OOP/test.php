<?php

$cars = array(
			array('Name'=>'Maybach', 'Model'=>'z500', 'Make'=>'Mercedes', 'Price'=>560000),
			array('Name'=>'Grand Coup', 'Model'=>'6350', 'Make'=>'BMW', 'Price'=>75000),
			array('Name'=>'ZX60', 'Model'=>'Hawck', 'Make'=>'FORD Lincoln', 'Price'=>140000),
			array('Name'=>'Roadstar', 'Model'=>'Sports', 'Make'=>'Audi', 'Price'=>120000),
			array('Name'=>'ZX60', 'Model'=>'Hawck', 'Make'=>'FORD Lincoln', 'Price'=>140000),
			array('Name'=>'ZX60', 'Model'=>'Hawck', 'Make'=>'FORD Lincoln', 'Price'=>140000),
			array('Name'=>'Maybach', 'Model'=>'z500', 'Make'=>'Mercedes', 'Price'=>560000),
			array('Name'=>'Maybach', 'Model'=>'z500', 'Make'=>'Mercedes', 'Price'=>560000),
			array('Name'=>'Maybach', 'Model'=>'z500', 'Make'=>'Mercedes', 'Price'=>560000),
			array('Name'=>'ZX60', 'Model'=>'Hawck', 'Make'=>'FORD Lincoln', 'Price'=>140000),
			array('Name'=>'ZX60', 'Model'=>'Hawck', 'Make'=>'FORD Lincoln', 'Price'=>140000),
			array('Name'=>'ZX60', 'Model'=>'Hawck', 'Make'=>'FORD Lincoln', 'Price'=>140000),
			array('Name'=>'ZX60', 'Model'=>'Hawck', 'Make'=>'FORD Lincoln', 'Price'=>140000),
			);
echo "<pre>"; 
var_dump($cars);
echo "</pre>";

$count =1;
foreach($cars as $car)
{
	echo 'car'.$count.'<br>';
	$count++;

	foreach($car as $key=> $car_item)
	{

	echo "The ".$key. " is ". $car_item.'<br>';

	}

	foreach($car as $group)
	{
		echo $car['Name'];
	}
	
}
?>

