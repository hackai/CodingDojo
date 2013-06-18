<!DOCTYPE HTML>
<html>
	<head>
		
		<title>Excersize 1</title>
	</head>
	<body>
		<?php
		$states = array("CA", "WA", "VA", "UT","AZ");
		?>
		<form>
			<select>
				<?php
				for($i=0; $i<=count($states); $i++)
				{
				echo '<option value="' . $states[$i] .'">' . $states[$i]. "</option>";
				}
				
			  ?>

			</select>
		</form>

<?php

	$states = array("CA", "WA", "VA", "UT","AZ");
	?>
		<form>
				<select>
					<?php
					foreach ($states as $state)
					{
					echo '<option value ="' . $state .'">' . $state. "</option>";	# code...
					}
					
				  ?>

				</select>
			</form>		

<?php

	$states = array("CA", "WA", "VA", "UT","AZ", "NJ","NY", "DE");
	?>
		<form>
				<select>
					<?php
					foreach ($states as $state)
					{
					echo '<option value ="' . $state .'">' . $state. "</option>";	# code...
					}
					
				  ?>

				</select>
			</form>		
	</body>
</html>


	




