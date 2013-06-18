<html>
	<head>
		<title>Color For Multitable</title>
		
	<link rel="stylesheet" type = "text/css" href="colorsheem.css" media="screen">
	</head>

</html>

<?php 

	$array_1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$array_2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	
	echo '<table border="3">';
	echo "<thead class = 'header'>";	
	echo '<th></th>';
	for($i = 1; $i <= 9; $i++)
	{
		echo '<th>';
		echo $i;
		echo '</th>';
	}
	
	for($i = 0; $i < count($array_1); $i++)
	{
		echo '<tr>';
		echo '<th>';
		echo $array_1[$i];
		echo '</th>';
		for($j = 0; $j < count($array_2); $j++)
		{
			
			// {
			// echo "<td class='black'>".$i."</td>";
			// }
			echo "<td class = 'class'>";
			echo $array_1[$i] * $array_2[$j];
			echo '</td>';
		}	

	}
		echo '</th>';
		echo '</tr>';
			
		echo '</th>';
		echo '</thead>';
		echo '</table>';
?>
