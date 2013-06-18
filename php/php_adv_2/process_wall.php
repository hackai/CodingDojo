<?php
require_once('wall_conntn.php');

$sql = "INSERT INTO(name, content, created_at, updated_at) VALUES('");

foreach($_POST as $name = $value)
{
	if(strlen($value)>0)
	{
		$sql.= $value."'"
	}
	else
	{
		$_SESSION['error'])$name) = $name."cannot be empty";
	}

}


?>