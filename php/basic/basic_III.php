<!DOCTYPE HTML">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>

<h1>Coin Toss</h1>
<p>starting the program...</p>


<?php
	$coin_toss =0;
	$number_of_tosses = 5000;
	$heads = 0;
	$tails = 0;

	for ($i = 0; $i < 5000; $i++)
	{
		$coin = rand(1,2);


		if ($coin == 1)
		{
			$result = "head";
			$heads++;
		}
		else
		{
			$result = "tial";
			$tails++;
			echo "Attemp #". ($i+1).": Throwing a coin... It's a ". $result."! ... Got ". $heads." head(s) so far and ".$tails." tial(s) so far.<br>";
		}	
	}

				
?>
<h3>Thank you for playing!</h3>
<p>Ending the program</p>	
</body>
</html>