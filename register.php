<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dreamer - Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/city.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php 
		session_start();
		if(isset($_SESSION["user_id"]))
		{
			header("Location: index.php");
		}
	?>
</head>

<body>
    <div class='brand-area-register'>
        <h1>DREAMER</h1>
        <h3>Register</h3>
    </div>
    <div class='login-area'>

        <form action='includes/register.inc.php' name='register_form' method="post" enctype="multipart/form-data"
            onsubmit="return validate_user_register();">

            <div class='login-user-text'>
                <input type='text' name='fname' placeholder='First Name'
                    value='<?php if(isset($_GET["fname"])) echo $_GET["fname"];?>'>
                <p id="e_fname">*First name is required</p>
            </div>
            <div class='login-user-text'>
                <input type='text' name='lname' placeholder='Last Name'
                    value='<?php if(isset($_GET["lname"])) echo $_GET["lname"];?>'>
                <p id="e_lname">*Last name is required</p>
            </div>
            <div class='login-user-text'>
                <input type='text' name='email' placeholder='Email'
                    value='<?php if(isset($_GET["email"])) echo $_GET["email"];?>'>
                <p style="<?php if(isset($_GET["error"]) && $_GET["error"] == "email_exists") echo 'visibility:visible;'?>"
                    id="e_email">
                    <?php if(isset($_GET["error"]) && $_GET["error"] == "email_exists") echo "*Email exists in system"; ?>
                    !
                </p>
            </div>
            <div class='login-user-text'>
                <input type='password' name='password' placeholder='Password'>
                <p id="e_password">*Password is required</p>
            </div>
            <div class='login-user-text'>
                <input type='password' name='cpassword' placeholder='Confirm Password'>
                <p id="e_cpassword">*Confirm the password</p>
            </div>
            <div class='login-user-file'>
                <input type='file' name='picture_upload' value='Choose Picture' accept="image/*">
                <p id="e_picture_url" style="visibility:visible;">
                    <?php if(isset($_GET["error"])) echo '*Error occured when uploading the image. Try again.'; ?></p>
            </div>

            <div class='login-user-button'>
                <input type='reset' name='reset' value='Reset'>
                <input type='submit' name='register_form' value='Register'>
            </div>
        </form>
    </div>;
    <script type="text/javascript" src="js/general.js"></script>


</body>

</html>