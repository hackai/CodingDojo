<?php
session_start();
require_once('conn.php');

$sql = "INSERT INTO questions (name, content, created_at, updated_at) VALUES('";

$valid = true;

$count = 0;
foreach($_POST as $name => $value)
{
	if(strlen($value) > 0 && $name !="submit")
	{
		if($count == 0)
		{
			$sql .= $value."'";
		}
		else
		{
			$sql .= ", '".$value."'";
		}
	}	
	else
	{
		if($name != "submit")
		{
			$valid = false;
			$_SESSION['error'][$name] = $name." cannot be empty";
		}
		else
		{
			$sql .=", NOW(), NOW())";
		}
	}
	$count++;
}
if($valid == true)
{
	mysql_query($sql);	
}

header('location: wall_q.php');

?>