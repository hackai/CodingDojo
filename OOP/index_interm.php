<?php
include('class_interm.php');

?>

<!doctype html>

<html>	
<head>
	<title></title>

</head>
<body>
	<?php
	$lion = new Animal('Anthoan');
	$lion->displayHealth();
	// var_dump($lion);

	$tiger = new Animal('Boris');
	$tiger->displayHealth();
	// var_dump($tiger);



	?>

</body>
</html>
