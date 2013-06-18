<?php

	for($counter =0; $counter < 100; $counter++)
	{

		$score = rand(50, 100);

		if($score < 70)
		{
			echo "<h1>Your Score:" . $score . " /100<h1>";
			echo "<h2>Your Grade: D.</h2>";

		}
		else if($score > 70 & $score <= 80)
		{
			echo "<h1>Your Score:" . $score . " /100<h1>";
			echo "<h2>Your Grade: C.</h2>";

		}

		else if($score > 80 & $score <= 90)
		{
			echo "<h1>Your Score:" . $score . " /100<h1>";
			echo "<h2>Your Grade: B.</h2>";

		}
		else if($score > 90 & $score <= 100)
		{

			echo "<h1>Your Score:" . $score . " /100<h1>";
			echo "<h2>Your Grade: A.</h2>";

		}
		"<br />";

	}


?>