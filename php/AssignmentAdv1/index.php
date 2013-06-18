<!DOCTYPE html>
<html>
	<head>

		<link rel="stylesheet" href="css/stylesheet.css">
	</head>
	<body>
		<?php
			$users = array( 
		   array('first_name' => 'Michael', 'last_name' => ' Choi '),
		   array('first_name' => 'John', 'last_name' => 'Supsupin'),
		   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
		   array('first_name' => 'KB', 'last_name' => 'Tonel'),
		   array('first_name' => 'David', 'last_name' => 'Lee'),
		   array('first_name' => 'Clark', 'last_name' => 'Kent'),
		   array('first_name' => 'Peter', 'last_name' => 'Parker'),
		   array('first_name' => 'Bruce', 'last_name' => 'Wayne'),
		   array('first_name' => 'Tony', 'last_name' => 'Stark'),
		   array('first_name' => 'Michael', 'last_name' => 'Jordan'),
		   array('first_name' => 'Scottie', 'last_name' => 'Pippen'),
		   array('first_name' => 'Dennis', 'last_name' => 'Rodman'),
		   array('first_name' => 'Ron', 'last_name' => 'Harper'),
		   array('first_name' => 'Steve', 'last_name' => 'Kerr'),
			); 

			echo "<h3>for Loop</h3>";
		?>
		<table>
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
					for($i = 0; $i < count($users); $i++) {
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
		<table>
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
					echo "<h3>foreach Loop</h3>";
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