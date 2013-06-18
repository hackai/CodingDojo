<?php
	require("connection_sql.php");
	$first_name = "Joe";
	$last_name = "Choi";

	$query = "INSERT INTO users (first_name, last_name, created_at) VALUES ('{$first_name}', '{$last_name}', NOW())"; 
	
	mysql_query($query);

	$query = "DELETE FROM users WHERE id = 6";
	mysql_query($query);


	$query= "SELECT * FROM users ORDER BY id DESC";

	$users = fetch_all($query);

	foreach($users as $user) 
	{
		echo $user['id']. "-". $user['first_name']. " " . $user['last_name']. "<br />";
	}

?>
