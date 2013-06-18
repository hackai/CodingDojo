<?php
	session_start();


	// var_dump($_SESSION);
	// die();

	$_SESSION['testing'] = "Hi";
?>

<html>
	<head>
		<title>Form Exercise</title>
	</head>

	<body> 
<?php
	if(isset($_SESSION['message']))
	{
		echo "<div class='error' style='border:1px solid red; padding:13 px'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}


?>


		<form action="process.php" method="post">

			Email: <input type="text" name="email" placeholder="enter email"/><br><br>	
			Password: <input type="password" name="password" placeholder="password"/><br><br>
			<input type="submit" value="Login"/>
		</form>




	</body>
</html>