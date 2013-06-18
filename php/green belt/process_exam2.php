<?php
	require("connection_exam2.php");
	session_start();
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";

function addApplication()
{
	$errors = array();

	if(!(isset($_POST['app_name']) and is_string($_POST['app_name']) and strlen($_POST['app_name'])>0))
	{
		$errors[] = "application name is not valid!";
	}

	if(!(isset($_POST['number_short_key']) and is_string($_POST['number_short_key']) and strlen($_POST['last_name'])>0))
	{
		$errors[] = "short key number is not valid!";
	}

	if(!(isset($_POST['created_at']) and is_string($_POST['created_at']) and strlen($_POST['created_at'])>0))
	{
		$errors[] = "created date is not valid!";
	}
	if(count($errors)>0)
	{	
	$_SESSION['add_app_errors'] = $errors;
	header("Location: index_exam2.php");
	}
	else
	{
		$query = "SELECT * FROM applications WHERE = '{$_POST['app_name']}'";
		$users = fetch_all($query);
	}
	else
		{
			$query = "INSERT INTO applications (app_name, number_short_key, created_at, updated_at, searches_name) VALUES ('{$_POST['app_name']}','{$_POST['number_short_key_']}', '{$_POST['created_at']}', '{$_POST['updated_at']}', {$_POST['searches_name']}' NOW())";
			mysql_query($query);

			$_SESSION['message'] = "User was successfully created!";
			header("Location: index_exam2.php");
		}
}

// $a=array("a"=>"5","b"=>5,"c"=>"5");
// echo array_search(5, $a, true);
// var_dump();

?>