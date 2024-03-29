<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dreamer - Travelling Agency</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/city.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
		require_once("classes/data_access.php");
		require_once("classes/city.php");
		require_once("classes/page_elements.php");
		DataAccess::CreateTables();

		session_start();
	?>
</head>
<body>

	<?php
		if(isset($_SESSION["user_id"])) {
			$fullname = $_SESSION["user_fname"] ." ". $_SESSION["user_lname"];
			$picture_url = $_SESSION["picture_url"];
			PageElements::get_header($fullname, $picture_url);

			echo
				"<section>" .
					"<div class='container'>" .
						"<h1 class='title-1'>Explore & Travel</h1>" .
					"<hr>" .
					"<div class='blurred-area'>";
						 echo City::CShowAllCities();
			echo
					"</div>".
				"</div>" .
			"</section>"; 


		

		} else {
			$error_msg = "";
			$tmp_email = "";
			
if(isset($_GET["login"]) && $_GET["login"] == "error" && $_GET["tmp_email"]) {
				$error_msg = "*Wrong email or password";
				$tmp_email = $_GET["tmp_email"];
			}

		
			
			echo
				"<div class='brand-area'>".
					"<h1>DREAMER</h1>".
				"</div>".
				"<div class='login-area'>".
					"<form action='includes/login.inc.php' method='post' >".
						"<div class='login-user-text'>".
							"<input  type='text' placeholder='Email' name='login_email_user' value='$tmp_email'>".
						"</div>".
						"<div class='login-user-text'>".
							"<input  type='password' placeholder='Password' name='login_password_user' autocomplete='off'>".
							"<p style='visibility: visible; color: white'>$error_msg</p>".
						"</div>".
						"<div class='login-user-button'>".
							"<input  type='submit' name='login_user' value='Login'>".
							"<input  type='button' onclick='go_to_register()' value='Register'>".
						"</div>".
					"</form>".
				"</div>";

		} 
	?>

	<script type="text/javascript" src="js/general.js"></script>
</body>
</html>