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
		echo 	"<div class='brand-area'>".
					"<h1>DREAMER</h1>".
				"</div>".
				"<div class='login-area'>".
					"<form action='' autocomplete='off'>".
						"<div class='login-user-text'>".
							"<input  type='text' placeholder='Email' autocomplete='off'>".
						"</div>".
						"<div class='login-user-text'>".
							"<input  type='password' placeholder='Password' autocomplete='off'>".
						"</div>".
						"<div class='login-user-button'>".
							"<input  type='submit' name='signin' value='Sign In'>".
							"<input  type='button' onclick='go_to_register()' value='Register'>".
						"</div>".
					"</form>".
				"</div>";
	}
}



?>