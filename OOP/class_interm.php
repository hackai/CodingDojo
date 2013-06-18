<?php
//method belongs to the class.
class Animal
{
	var $name;
	var $health;

	function __construct($new_name)
	{
		$this->name =$new_name;
		$this->health =100;
	}
//called method (it's a function in a class)
	function walk()
	{
		$this->health = $this->health - 1;
		echo 'Walk <br>';
	}

	function run()
	{
		$this->health = $this->health - 5;
		echo 'Run <br>';

	}

	function displayHealth()
	{
		echo $this->name.'<br>';
		echo $this->health.'<br>';
	}
}

$lion = new Animal('Anthoan');
for($i= 0; $i<2; $i++)
{
	$lion->run();
}

for($i= 0; $i<3; $i++)
{
	$lion->walk();
}

class Dog extends Animal
{
	function __construct()
	{
		$this->name =$new_name;
		$this->health =150;
	}

	function pet()
	{
		$this->health = $this->health + 5;
		echo $this->health.'<br>';

	}
}
?>