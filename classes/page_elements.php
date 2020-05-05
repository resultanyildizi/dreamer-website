<?php 
class PageElements {
	public static function get_header() {
		echo "<header>"  .
		 	 "<div class='container'>" .
				"<div class='clearfix'>" .
					"<nav>" .
						"<ul>" . 
							"<li><a href='#'>HOME</a></li>" .
							"<li><a href='#'>CITIES</a></li>" .
							"<li><a href='#'>RESERVATIONS</a></li>" .
							"<li><a href='#'>ABOUT</a></li>".
						"</ul>".
					"</nav>".
				"</div>".
			"</div>".
		"</header>";
	}


	public static function get_user_login() {
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
	}
}



?>