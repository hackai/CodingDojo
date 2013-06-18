<?php

	function parse_file($file_name)
	{
		$file_to_be_parsed = file($file_name);
		foreach($file_to_be_parsed as $line){
	
		$line_items = explode(',', $line);
		echo $line_items [0];
		echo $line_items [1];
		}
	}
		
		parse_file('data.csv');
		
	

?>