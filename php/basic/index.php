<!DOCTYPE HTML>
<html>
	<head>
		
		<title>Excersize 1</title>
	</head>
	<body>
		<h1>Heading 1</h1>
		<p>Paragraph</p>
<?php
	$x="Codingdojo";
	$y="Hello";

	 echo $y.' '. $x;

	 $first_name="Michael";
	 echo $first_name; //prints out "Michael"

	 $last_name="Choi";
	 echo $last_name; //prints out "Choi"

	 //use . to combine strings
	 echo $first_name . $last_name;//prints out "MichaelChoi"
	 echo $first_name . " " . $last_name; // prints out "Michael Choi"


	$x = 1;
	$x = $x+5; //compute $x+5 and store that value as $x 
	echo $x; //prints 6 on the screen 

	$x = $x+1; //compute $x+1 and store that value as $x 
	echo $x; //prints out 7 

	$x++; //does the same thing as $x = $x+1 or in other words, increase $x by 1 
	echo $x; //prints out 8 

	$y = "Students"; 
	$y = 7 . $y . " in the class"; 
	echo $y; //prints out "7Students in the class"; 

	//how would you change the code above to have it print out "7 students in the class"? 

?>
<h2>Example 2</h2>
 <?php
 	$x=1;
 	$x=$x+5 + $x+2;

 	echo "x value is:" .$x. "<br/>";
 	$y=10;
 	$x=$y*10+$y;

 	echo "x value is:". $x. "<br/>";

 	$x=$x+1;
 	echo "x value is:". $x;
 ?>
 ______________________________________
	<p>Paragraph</p>
	<?php

		$students = array();

		$students[]	= "John";
		$students[]	= "Michael";
		$students[]	= "Charles";

		echo "<h1>Students Array</h1>";
		echo "Student 0 is:" . $students[0]."<br />";
		echo "Student 1 is:" . $students[1]."<br />";	
		echo "Student 2 is:" . $students[2]."<br />";
		var_dump($students);

		$students2	= array("John", "Michael", "Chalres");

		echo "<h1>Students2 Array</h1>";
		echo "Student 0 is:" . $students2[0]."<br />";
		echo "Student 1 is:" . $students2[1]."<br />";
		echo "Student 2 is:" . $students2[2]."<br />";
		var_dump($students2);

	?>
	__________________________________
		<!-- Arrays -->
	<?php

		$shops	= array(
			array("rose", 1.25, 15),
			array("daisy", 1.25, 15),
			array("orchid", 1.25, 15)
			);
		
		echo $shops[0] [0]; //prints "rose". Index 0 of the first row "array"
		echo $shops[0] [1]; //prints out 1.25
		echo $shops[2] [2]; //prints out 15

		$shops	= array();

		$shops[] = array("rose", 1.25, 15);
		$shops[] = array("codingdojo", 1.1, 23);
		$shops[] = array("hi", 1.0, 20);
		
		var_dump($shops);
		?>
	______________________________________
	
	<?php
		$str = "Codingdojo";
		echo strlen($str)."<br />";	
		
		echo strtolower($str)."<br />";
		echo strtoupper($str)."<br />";

	?>
<!-- 	Function Purpose -->
<!-- //1.  To return a value
	 //2. To perform operation:
	-doesn't return value -->
<!-- 	syntact of a function:

	function	function_name()
	{
		//function code

	} -->

<?php
// 	function hello_world()
// 	{
// 		echo "hello world";
// }


?>
______________________________________
<!-- 7/4/13- If/else -->
______________________________________
<p>Paragraph</p>
<?php
	
	$x =5;

	if($x==10)
	{
		echo "x is really 10!";
	}

	else if ($x ==5)
	{
		echo "x is 5!";
	}
	else
	{
		echo "x is not 10! It's also not 5!";
	}
?>

______________________________________
<!-- 7/4/13- For loops -->
______________________________________
<p>Paragraph</p>
<?php
	$users = array("Boris", "Ashely", "Aiden", "Vesel");

	for($i=0; $i<count($users); $i++)
	{
		echo "<br />Row i:" . $i."<br />";
		for($j=0; $j<5; $j++)
		{
			echo $i . '-' . $j .',';
		}
		
	}
?>

______________________________________
<!-- 7/4/13- foreach with associative arrays (important) -->
______________________________________
<p>Paragraph</p>
<?php
	$users = array( 
   array("first_name" => "Michael", "last_name" => "Choi"), 
   array("first_name" => "John", "last_name" => "Supsupin"), 
   array("first_name" => "Mark", "Last_name" => "Guillen")); 

	foreach($users as $user) //fetch a new row in $users and store that in $user
	{
   foreach($user as $key=>$value)
   	 //go through each key/value pair for $user   
     {
     	echo $key . " : " . $value ."<br />"; 
  	 } 
 	var_dump($users);
 	}

?>

______________________________________
<!-- 7/4/13- Functions -->
______________________________________
<p>Paragraph</p>
<?php

	function return_random_name()
	{

		$random_names = array(
			"Michael",
			"John",
			"Aiden",
			"Ashely",
			"Mark",
		);

		$i = rand(0,3);
		return $random_names[$i];
		

	}

	$random_name = return_random_name();
	// var_dump($random_name);

	function check_user_name($name)
	{
		if($name == "Michael")
			return TRUE;
		else
			return FALSE;

	}
	$ret = check_user_name("Michael");
	var_dump($ret);

	// function basic ($max=7, $str="~")
	// {

	// 	for($i=0; $i<$max; $i++)
	// 	{
	// 		echo $str;	
	// 	}
			
		
	// 	echo "<br />";
	// }

	// basic(5, "@");
	// basic(10, "#");
	// basic(15, "$");
	// basic(20, "%");
	// basic(5, "^");
	// basic(3, "&");
	// basic(2, "*");
	// basic(50, "(");
	
	// basic();
?>
	</body>
</html>
