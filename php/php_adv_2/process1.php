<?php
	require ("connection1.php");
	session_start();
	// echo "<pre>";
	// var_dump($_POST)
	// echo "</pre>";

	if(isset($_POST['action']) and $_POST['action'] == "login")
	{
	loginAction();
	}
	else if(isset($_POST['action']) and $_POST['action'] == "register")
	{
	registerAction();
	}
	else
	{
		//brings the user to index front page when it log off.
		session_destroy();
		header('Location: index1.php');
	}


function loginAction()
{
	$errors = array();
	if(!(isset($_POST['email']) and filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))) 
	{
		$errors[]= "email is not valid";
	}

	if(!(isset($_POST['password']) and strlen($_POST['password'])>=6))
	{
		$errors[] = "please double check your password (lenght must be > than 6)";
	}
	if(count($errors)>0)
	{
		$_SESSION['Login_errors'] = $errors;
		header('Location: index1.php');
	}
	else
	{
		$query ="SELECT * FROM user WHERE email = '{$_POST['email']}' AND password = '". md5($_POST['password'])."'";
		$users = fetch_all($query);

		if(count($users)>0)
		{
			$_SESSION['logged_in'] = true;
			$_SESSION['user']['id'] = $users[0]['id'];
			$_SESSION['user']['first_name'] = $users[0]['first_name'];
			$_SESSION['user']['last_name'] = $users[0]['last_name'];
			$_SESSION['user']['email'] = $users[0]['email'];
			header('Location: wall.php');
		}
		else
		{
			$errors[] = "Invalid login information";
			$_SESSION['Login_errors'] = $errors;
			header('Location: index1.php');
		}

	}

}

//=========================================================
function registerAction()
{
		$errors = array();
		if(!(isset($_POST['first_name']) and is_string($_POST['first_name']) and strlen($_POST['first_name'])>0))
		{
			$errors[] = 'first name is not valid!';
		}

		if(!(isset($_POST['last_name']) and is_string($_POST['last_name']) and strlen($_POST['last_name'])>0))
		{
			$errors[] = 'last name is not valid!';
		}

		if(!(isset($_POST['email']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
		{
			$errors[] = 'email is not valid!';
		}

		if(!(isset($_POST['password']) and strlen($_POST['password'])>=6))
		{
			$errors[] = 'please double check your password (lenght must be greater than 6)';
		}

		if(!(isset($_POST['confirm_password']) and isset($_POST['password']) and $_POST['password'] == $_POST['confirm_password']))
		{
			$errors[] = 'please confirm your password';
		}

		if(count($errors)>0)
		{
		$_SESSION['register_errors'] = $errors;
		header('Location: index1.php');
		}

		else
		{
		$query = "SELECT * FROM users WHERE email = '{$_POST['email']}'";
		$users = fetch_all($query);

		if(count($users)>0)
		{
			$errrors[] = 'someone already registred with this email address!';
			$_SESSION['register_errors'] = $errors;
			header('Location: index1.php');
		}

		else
		{
			$query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES ('{$_POST['first_name']}','{$_POST['last_name']}', '{$_POST['email']}', '".md5($_POST['password'])."', NOW())";
			mysql_query($query);
			$_SESSION['message'] = 'User was successfully created!';
			header('Location: index1.php');
			
		}
	}
}

?>

<?php
// 1. index.php-not always 'requare' connection
// 2. process.php-always needs 'requare'connection
// 3. connection.php
// 4. Database
// all of these need $_SESSION array to communicate
// * $_SESSION is the only way index & process communicate.
// * else(count) -always follows if statement.

// In each function i need 'if' statements and 'error' array checks

// 1.1 Login Form

// 1.2 Registration Form

// 2.1 Function v_login()
// 2.2 function v_registration() ->will be 'if' statements
// 2.3 f_name & l_name are strings
// 2.4 email is valid
// 2.5 password match

// 'isset'- has the person (user) put something in the field email etc.

// 'email'- is an associative array


?>