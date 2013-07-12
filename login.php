<?php
	session_start();
	include_once 'include/class.user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
	        // Registration Success
	       header("location:home.php");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>OOP Login Module</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<script language="javascript" type="text/javascript"> 
            
            function submitlogin() {
                var form = document.login;
				if(form.emailusername.value == ""){
					alert( "Enter email or username." );
					return false;
				}
				else if(form.password.value == ""){
					alert( "Enter password." );
					return false;
				}	 
			}
		</script>
	</head>

	<body>
		<div id="container" class="container">
			<h1>Login Here</h1>
			<form action="" method="post" name="login">
				<table class="table " width="400">
					<tr>
						<th>UserName or Email:</th>
						<td><input type="text" name="emailusername" required></td>
					</tr>
					<tr>
						<th>Password:</th>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input class="btn" type="submit" name="submit" value="Login" onclick="return(submitlogin());"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><a href="registration.php">Register new user</a></td>
					</tr>
					
				</table>
			</form>
		</div>
	</body>
</html>