<?php
	session_start();
	require('connection1.php');
	if(isset($_SESSION['logged_in']))
	{
		header('Location: .php');
	}

?>

<!doctype html>
<html>
<head>
	<title>Login/Register Exercise by Borislav Parov</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript"></script>

</head>
<body>
	<h2>Login</h2>
	<form action="process1.php" method="post">
		<input type="hidden" name="action" value="login" />
		<input type="text" name="email" placeholder="Email address"/>
		<input type="password" name="password" placeholder="Password" />
		<input type="submit" value="Login" />
	</form>

	<h2>Registration</h2>
	<form action="process1.php" method="post">
		<input type="hidden" name="action" value="register"/>
		<input type="text" name="first_name" placeholder="First_Name"/><br />
		<input type="text" name="last_name" placeholder="Last_Name" /><br/>
		<input type="text" name="email" placeholder="Email address" /><br/>
		<input type="password" name="password" placeholder="Password" /><br/>
		<input type="password" name="confirm_password" placeholder="Confrim Password" /><br/>
		<input type="submit" value="Register" />
	</form>

</body>

	
</html>