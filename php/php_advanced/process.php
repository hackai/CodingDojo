<?php

	session_start();
	
	if($_POST['email'] != '' AND $_POST['password'] != '')
	{
		$_SESSION['message'] = "Logging you in";
	}
	else
	{
		$_SESSION['message'] = "Error. Email and Password cannot be empty";
 	}
 	header("Location: exercise.php");



?>
<!-- our info is being stored in $_POST