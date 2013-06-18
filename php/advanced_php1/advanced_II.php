<!Doctype HTML>
<html>
	<head>
		<title>Checkbord in PHP</title>
		<link rel="stylesheet" type="text/css" href="checkbord.css"/>
	</head>
	<body>

		
		
<?php
	echo "<table>";

	for($i=0; $i < 8; $i++)
	{
		echo '<tr>';	
		for($j=0; $j < 8; $j++)
			{
				if (($i+$j) % 2 == 0)
			{
				echo "<td class = 'even'>";
			}
				else
			{
				echo "<td class = 'odd'>";
			}			
			}
		echo '</tr>';
	}
	echo "</table>";
?>	
	</body>
</html>