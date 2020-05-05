<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Dreamer - Register</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/city.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <div class='brand-area-register'>
            <h1>DREAMER</h1>
        </div>     
                   <div class='login-area'>
                   <h3>Register</h3>
				   <form action='' name='register_form' autocomplete='off' onsubmit="return validate_user_register()">
           
                       <div class='login-user-text'>
							<input  type='text' name='fname' placeholder='First Name' autocomplete='off'>
							<p id="e_fname">*First name is required</p>
						</div>
						<div class='login-user-text'>
							<input  type='text' name='lname' placeholder='Last Name' autocomplete='off'>
							<p id="e_lname">*Last name is required</p>
						</div>
		             	<div class='login-user-text'>
							<input  type='text' name='email' placeholder='Email' autocomplete='off'>
							<p id="e_email">*Email is required</p>
						</div>
						<div class='login-user-text'>
							<input  type='password' name='password' placeholder='Password' autocomplete='off'>
							<p id="e_password">*Password is required</p>
						</div>
						<div class='login-user-text'>
							<input  type='password' name='cpassword' placeholder='Confirm Password' autocomplete='off'>
							<p id="e_cpassword">*Confirm the password</p>
						</div>
						<div class='login-user-text'>
							<input  type='text' name='picture_url' placeholder='Picture URL' autocomplete='off'>
							<p id="e_picture_url">*Confirm the password</p>
						</div>

						<div class='login-user-button'>
							<input  type='submit' name='reset' value='Reset'>
							<input  type='submit' name='register_form' value='Register'>
						</div>
                       

					</form>
				</div>;
<script type="text/javascript" src="js/general.js"></script>


</body>
</html>