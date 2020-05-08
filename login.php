<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Dreamer - Admin Login</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

    <div class="container">
      <div class="login-box">
        <div class="brand-area-login">
          <h1>DREAMER</h1>
          <h4>Admin</h4>
        </div>

        <div class="input-area-login">
          <form
            name="admin_login_form"
            action="includes/admin.login.inc.php"
            method="post"
            onsubmit="return validate_admin_login()"
          >
            <div class="input-field">
              <input type="email" placeholder="Email" name="login_email_admin" value="<?php if(isset($_GET['email'])) echo $_GET['email'];?>"/>
              <p id="e_email">*Email is required</p>
            </div>

            <div class="input-field">
              <input
                type="password"
                placeholder="Password"
                name="login_password_admin"
              />
              <p
                id="e_password"
                style="<?php if(isset($_GET['login']) && $_GET['login'] == 'error') echo 'visibility: visible';?>"
              >
                <?php if(isset($_GET["login"]) && $_GET["login"] == "error") echo "*Wrong email or password";?>
              </p>
            </div>

            <div class="input-field">
              <input type="submit" name="admin_login_form" value="LOGIN" />
            </div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/general.js"></script>
  </body>
</html>
