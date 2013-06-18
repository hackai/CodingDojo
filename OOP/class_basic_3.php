
<?php

$array1 = array(array('first_name'=> 'Michael', 'last_name'=>'Choi', 'nick_name'=> 'Sensei', 'program_proficiency'=>'Any'),
				array('first_name'=> 'Michael', 'last_name'=>'Choi', 'nick_name'=> 'Sensei', 'program_proficiency'=>'Any'),
				array('first_name'=> 'Michael', 'last_name'=>'Choi', 'nick_name'=> 'Sensei', 'program_proficiency'=>'Any')
				);

class HTML_Helper
{
	function print_table($array)
	{
		echo'<table border = "1px" width ="250px">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Nick Name</th>
				<th>Program Level</th>
			</tr>
		</thead>
		<tbody>';

		foreach ($array as $key=> $name) 
		{
			echo '<tr>';
			foreach($name as $key=>$value)
			{
				
				echo '<td>'.$value.'</td>';
				
			}
			echo '</tr>';
		}
		echo '</tbody>
		</table>';
	}
}

$table = new HTML_Helper();
$table->print_table($array1);
?>