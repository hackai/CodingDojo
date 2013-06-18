<?php	
	// class person{

	// 	var name;  //this variables inside a class is called 'properties'.
	// var-when declaring the propertie 'var', is is 'public'.
	// 	//'set' & 'get' methods are used in (Java & Ruby)
	// 	function set_name($new_name){
	// 		$this->name = $new_name;
	// 	}
	// 	function get_name(){
	// 		return $this->name;
	// 	}
	// } instantiation
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-
1" /> 
<title>OOP in PHP</title> 

<?php include("class_lib.php"); ?> 

</head> 

<body> 
<?php
// 	$stefan = new person("Stefan"); 
// 	$jimmy = new person("Nick");

// 	$stefan->set_name("Stefan Mischok");
// 	$jimmy->set_name("Nick Waddles");

// 	echo "Stefan's full name:" . $stefan->get_name();
// 	echo "Nick's full name:" . $jimmy->get_name();

// 	// directly accessing properties in a class is a no-no. 
// 	// echo "Stefan's full name: " . $stefan->name; 

// 	//Constructors-special built-in method. Allows us to initialise your object's properiteis.
// 	//declaring a property with 'var' keyword is considered public
// class person{
// 	var $name;

// 	function __construct($persons_name){
// 		$this->name = $persons_name;
// 	}

// 	function set_name($new_name){
// 		$this->name = $new_name;
// 	}

// 	function get_name(){
// 		return $this->name;
// 	}

// }
// 	//Functions = methods
// 	//Variables = properties

// 	$stefan = new person("Stefan Mischook"); 
// 	echo "Stefan's full name: " . $stefan->get_name();

	//Encapsulation-main fundamental principal in OOP (create cleaner code)
	//'access modifiers': 1. Public (default modifier), 2. Private, 3. Protected

	// class person
	// {
	// 	var $name;

	// 	public $height;
	// 	protected $social_insurance;
	// 	private $spinn_number;

	// 	function __construct ($persons_name)
	// 	{
	// 		$this->name = $persons_name;
	// 	}
	// 	function set_name($new_name)
	// 	{
	// 		$this->name = $new_name;
	// 	}

	// 	function get_name()
	// 	{
	// 		return $this->name;
	// 	}
	// }

	// class person
	// {
	// 	var $name;
	// 	function __construct($persons_name)
	// 	{
	// 		$this->name = $persons_name;
	// 	}

	// 	public function get_name()
	// 	{
	// 		return $this->name;
	// 	}

	// 	protected function set_name($new_name)
	// 	{
	// 		if (name != "Jimmy Two Guns")
	// 		{
	// 			$this->name = strtoupper($new_name);
	// 		}
	// 	}


	// }

?>

<?php

// class Dojo{
// 	var $health;
// 	var $x;
// 	var $y;

// 	var $name;

// 	function create_ninjas()
// 	{
// 		echo "creating ninjas";
// 	}
// 	function create_dragons()
// 	{
// 		echo "create dragons";
// 	}
// }

class Bike
{
	var $price;
	var $max_speed;
	var $miles;

	function __construct($price, $max_speed)
	{
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
	}


	function displayInfo()
	{
		echo 'Price: '.$this->price.'<br>';
		echo 'Maximum Speed: '.$this->max_speed.'<br>';
		echo 'Total Miles: '.$this->miles.'<br>';
	}
	function drive()
	{
		$this->miles += 10;
		echo "driving".'<br>';
	}

	function reverse()
	{
		$this->miles-= 5;
		echo "Reversing <br>";
	}
}
setlocale(LC_MONETARY, 'en_US');
//$new_bike is an instance
$new_bike = new Bike(money_format('%i', 1000000), '280mph');

for($i=0; $i<3; $i++)
{
	$new_bike->drive();
}
$new_bike->reverse();
$new_bike->displayInfo();

$new_bike2 = new Bike(money_format('%i', 220000), '320mph');

for($i=0; $i<2; $i++)
{
	$new_bike2->drive();
}

for($i=0; $i<2; $i++)
{
	$new_bike2->reverse();
}
$new_bike2->displayInfo();


$new_bike3 = new Bike(money_format('%i', 180000), '380mph');

for($i=0; $i<3; $i++)
{
	$new_bike3->reverse();
}
$new_bike3->displayInfo();


?>

</body> 
</html>