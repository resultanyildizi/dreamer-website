<?php 
class PageElements {
	public static function get_header($fullname, $picture_url) {
		echo "<header>"  .
		 	 "<div class='container'>" .
				"<div class='clearfix'>" .
					"<div class='profile-area'>" . 
					"<a href='profile.php'><img src='resources/user_images/$picture_url' alt='profile_pic'></a>" .
					"<a class='name' href='profile.php'>$fullname</a>".
					"<a class='logout' href='includes/logout.inc.php'>Logout</a>" .
					"</div>" . 
					"<nav>" .
						"<ul>" . 
							"<li><a href='index.php'>HOME</a></li>" .
							"<li><a href='user-reservations.php'>MY RESERVATIONS</a></li>" .
							"<li><a href='profile.php'>PROFILE</a></li>" .
						"</ul>".
					"</nav>".
				"</div>".
			"</div>".
		"</header>";
	}


	/*public static function get_user_login() {
		return 	"<div class='brand-area'>".
					"<h1>DREAMER</h1>".
				"</div>".
				"<div class='login-area'>".
					"<form action='login.inc.php' method='post' autocomplete='off'>".
						"<div class='login-user-text'>".
							"<input  type='text' placeholder='Email' name='login_email_user' autocomplete='off'>".
						"</div>".
						"<div class='login-user-text'>".
							"<input  type='password' placeholder='Password' name='login_password_user' autocomplete='off'>".
							"<p>*Error</p>".
						"</div>".
						"<div class='login-user-button'>".
							"<input  type='submit' name='login_user' value='Login'>".
							"<input  type='button' onclick='go_to_register()' value='Register'>".
						"</div>".
					"</form>".
				"</div>";
	}*/
}



?>