<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dreamer - Admin Login</title>
	<link rel="stylesheet" href="css/admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
		require_once("classes/data_access.php");
		require_once("classes/admin.php");

		session_start();
	?>
</head>
<body>
	<?php

	$error_msg = "";

			
			if(isset($_GET["login"]) && $_GET["login"] == "error") {
				$error_msg = "*Wrong email or password";
			}

			?>
			
			
				<div class='brand-area-login'>
					<h1>DREAMER</h1>
					<h3>Admin</h3>
				</div>

				<div class='login-area'>

					<form name='admin_login_form' action='includes/admin.login.in.php' method='post' onsubmit="return validate_admin_login()">

						<div class='login-admin-text'>
							<input  type='text' placeholder='Email' name='login_email_admin' >
							<p id="e_email">*Email is required</p>
						</div>

						<div class='login-admin-text'>
							<input  type='password' placeholder='Password' name='login_password_admin'>
							<p id="e_password">*Password is required</p>
							<?php echo "<p style='visibility: visible; color: white'>$error_msg</p>"; ?>
						</div>

						<div class='login-admin-button'>
							<input  type='submit' name='admin_login_form' value='Login'>
						</div>


					</form>
				</div>

		} 
	

	<script type="text/javascript" src="js/general.js"></script>
</body>
</html>