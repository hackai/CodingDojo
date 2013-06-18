<!DOCTYPE HTML">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>

<h1>Coin Toss</h1>
<p>starting the program...</p>

<?php

	/* Here we set values to our variables which we will be using later. Giving $coin_toss a value
	* of 0 is just standard, we are reset its value on every run to zero. $num_of_tosses can be
	* changed depending of how many times you want the coins to be tossed. $heads_count and
	* $tails_count is also standard, this is just to reset their values at every execution.
	*/
	$coin_toss = 0;
	$num_of_tosses = 5000;
	$heads_count = 0;
	$tails_count = 0;

	/* In order for us to have multiple random results for our coin tosses, we create a for loop.
	* We use $num_of_tosses as condition so that we will loop through coin tosses 5000 times.
	*/
	for ($counter=1; $counter<=$num_of_tosses; $counter++)
	{
		/* Here we use PHP's rand() function to get random values between 1 and two and store it in 
		* $coin_toss variable. Since we are inside a loop, $coin_toss will have different values
		* for every loop. 
		*/
		$coin_toss = rand(1,2);

		/* We then check if the value of $coin_toss is equal to 1, if it is then it is a Heads.
		* We then increment the $heads_count variable by one and echo out the current heads and
		* tails count.
		*/
		if ($coin_toss == 1)
		{
			$heads_count++;
			echo "Attempt ".$counter."...&lt;tosses coin&gt; - You got Heads!&nbsp;<b>Heads: ". $heads_count .", Tails: ". $tails_count ."</b><br />";
		}
		/* If $coin_toss is not equal to one, then its a Tails. We increment the $tails_count
		* variable by one and echo out the current heads and tails count.
		*/
		else
		{
			$tails_count++;
			echo "Attempt". $counter .":&lt;tosses coin&gt; - You got Tails!&nbsp;<b>Heads: ". $heads_count .", Tails: ". $tails_count ."</b><br />";
		}
	}

?>

<!-- When the loop ends, it will display this thank you message -->
<h3>Thank you for playing!</h3>
<p>end program</p>	
</body>
</html>

