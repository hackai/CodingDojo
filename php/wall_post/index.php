<html>
	<head>
		<title>Wall Forum Page</title>
		<!--Java scrip is loaded from codingdojo web site -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript">

		// $(document).ready(function(){
		// 	alert ('hi');
		});
		</script>

	</head>
	<body>
		<h2>Global D-wall</h2>

		<form action="process.php" method="post">
			<input type="hidden" name="action" value="message"/>
			<textarea name="content"></textarea>
			<input type="submit" name="submit" value="Post a message"/>
		</form>
	</body>
</html>