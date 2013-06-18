<!Doctype HTML>
<html>
	<head>
		<title>HTML Table in PHP</title>
		<link rel="stylesheet" type="text/css" href="table.css"/>
	</head>
	<body>
		<h3>User class<h3>
<?php
		$users = array( 
			array('first_name' => 'Michael', 'last_name' => ' Choi '),
			array('first_name' => 'John', 'last_name' => 'Supsupin'),
			array('first_name' => 'Mark', 'last_name' => ' Guillen'),
		  	array('first_name' => 'KB', 'last_name' => 'Tonel'), 
			array('first_name' => 'Dobre', 'last_name' => 'Monk'),
			array('first_name' => 'Peter', 'last_name' => 'Back'),
			array('first_name' => 'Michell', 'last_name' => 'Whites'),
			array('first_name' => 'Tonny', 'last_name' => 'Aspen'),
			array('first_name' => 'Chris', 'last_name' => 'Corel'),
			array('first_name' => 'BMW', 'last_name' => 'Eva'),
			array('first_name' => 'Mona', 'last_name' => 'Eves'),
			array('first_name' => 'David', 'last_name' => 'Ponef'),
			array('first_name' => 'Hung', 'last_name' => 'Sork'),
			array('first_name' => 'Andrew', 'last_name' => 'Trone'),
			array('first_name' => 'Toby', 'last_name' => 'Morel'),);

			echo "<h3>For Loop</h3>";

?>
		<table border="1">
			<thead>
				<tr>
					<th>User #</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Full Name</th>
					<th>Ful Name in upper case</th>
					<th>Length of name</th>
				</tr>
			</thead>
			<tbody>
<?php 	//we need to begin with for loop, 
		//$i=0, 1 etc. a number we want to begin our table
				for($i = 0; $i < count($users); $i++)
				{
					$user = $users[$i];
					$fullName = trim($user["first_name"])." ".trim($user["last_name"]);
					echo "<tr>";
					echo "<td>".($i+1)."</td>";
					echo "<td>".$user["first_name"]."</td>";
					echo "<td>".$user["last_name"]."</td>";
					echo "<td>".$fullName."</td>";
					echo "<td>".strtoupper($fullName)."</td>";
					echo "<td>".strlen($fullName)."</td>";
					echo "</tr>";
				}
?>
			</tbody>
		</table>
		<table border = "1">
			<thead>
				<tr>
					<th>User #</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Full Name</th>
					<th>Full Name in upper case</th>
					<th>Length of name</th>
				</tr>
			</thead>
			<tbody>
				<?php
					echo "<h3>Foreach Loop</h3>";
					$i = 1;
					foreach($users as $user) {
						$fullName = trim($user["first_name"])." ".trim($user["last_name"]);
						echo "<tr>";
						echo "<td>".$i."</td>";
						echo "<td>".$user["first_name"]."</td>";
						echo "<td>".$user["last_name"]."</td>";
						echo "<td>".$fullName."</td>";
						echo "<td>".strtoupper($fullName)."</td>";
						echo "<td>".strlen($fullName)."</td>";
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
		</table>
	</body>
</html>