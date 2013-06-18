<?php
	session_start();

	require("connection_exam2.php");

	if(isset($_SESSION['add_application']))
	{
		header("Location: wall.php");
	}
	// echo "<pre>";
	// var_dump($_SESSION);
	// echo "</pre>";

?>

<html>
	<head>
		<title>Application</title>
		<!--Java scrip is loaded from codingdojo web site -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript"></script>

	</head>
	<body>
		<!-- <h2>Add Application</h2> -->
		<div id='wrapper'>
			<div id='header'>
				<p>Name:<p><form action="process.php" method="post">
				<textarea name="action" value="content"></textarea>
				<input type="submit" value="Add Application" />
				</form>
			</div>
			<!-- <h2>Search</h2> -->
			<div class='left_nav'>
				Name:<form action="process.php" method="post">
				<textarea name="action" value="content"></textarea>
				<input type="submit" value="Search" />
				</form>
			</div>
		</div>

		<table border='1px' width='700px'>
			<thead>
			  <tr>
	            <th>Name</th>
	            <th>Number of Shortcut Keys</th>
	            <th>Created Date</th>
            </tr>
			</thead>
			<tbody>
				<tr>
	             	<td><h4><a href="">Apple<a></h4></td>
            		<td>3</td>
            		<td>June 1, 2013</td>
            	</tr>
            	<tr>
            		<td><h4><a href="">Windows<a></h4></td></td>
            		<td>1</td>
            		<td>June 2, 2013</td>
            	</tr>
            	<tr>
            		<td><h4><a href="">Linux<a></h4>
            		<td>10</td>
            		<td>June 3, 2013</td>
            	</tr>

			</tbody>
		</table>
	</body>
</html>

