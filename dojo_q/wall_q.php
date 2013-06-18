<?php
session_start();
require_once('conn.php');
date_default_timezone_set('America/Los_Angeles');

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<h1>Dojo Question Asker</h1>
	<h2>Please put your name and question below!</h2>
	<form action="process.php" method="post">
		<?php
		if(isset($_SESSION['error']['name']))
		{
			echo '<h5 class="error">'.$_SESSION['error']['name'].'</h5>';
		}
		?>
		<input type="text" name="name" placeholder="put your name here">
		<?php
		if(isset($_SESSION['error']['content']))
		{
			echo '<h5>'.$_SESSION['error']['content'].'</h5>';
		}
		?>
		<textarea name="content" placeholder="enter question"></textarea>
		<input type="submit" name="submit" value="post question">
	</form>
	<?php

		$sql = "SELECT name, content, created_at FROM questions ORDER BY created_at DESC";
		$rows = fetch_all($sql);
		foreach($rows as $row)
		{
			echo '<h5>'.$row['name'].' wrote a question on '.date('D, M n, G:i', strtotime($row['created_at'])).'</h5>';
			echo '<h4>'.$row['content'].'</h4>';
		}
		
	?>
</body>
</html>
<?php 
session_unset();
?>