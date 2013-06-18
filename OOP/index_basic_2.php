<?php
class Car
{
	var $price;
	var $speed;
	var $fuel;
	var $mileage;
	var $tax;

	function __construct($price, $speed, $fuel, $mileage)
	{
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;

		if($price > 10000)
		{
			$this->tax = 0.15;
		}

		else
		 {
		 	$this->tax = 0.12;
		 }
		$this->displayInfo();	 
	}

	function displayInfo()
	{
		echo 'Price:'.$this->price.'<br>';
		echo  'Speed:'.$this->speed.'<br>';
		echo  'Fuel:'.$this->fuel.'<br>';
		echo  'Mileage:'.$this->mileage.'<br>';
		echo  'tax:'.$this->tax.'<br></br>';
	}

}
	$car1 = new Car(100001, 35, 'Fuel', 15);

	$car2 = new Car(2000, 5, 'Not Fuel', 105);

	$car3 = new Car(2000, 15, 'King of Fuel', 15);

	$car4 = new Car(2000, 25, 'Full', 25);

	$car5 = new Car(2000, 35, 'Empty', 15);

?>