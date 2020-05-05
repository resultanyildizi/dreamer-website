<?php
    
    require_once("../classes/user.php");
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login_user"])) {
        $email = $_POST["login_email_user"];
        $pwd = $_POST["login_password_user"];

        User::Login($email, $pwd);

    }




?>