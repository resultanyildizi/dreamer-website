<?php
    
    require_once("../classes/user.php");
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login_user"])) {
        $email = $_POST["login_email_user"];
        $pwd = $_POST["login_password_user"];

        $user = User::Login($email, $pwd);

        if($user == null) {
            header("Location: ../index.php?login=error");
            exit();
        } else {
            session_start();

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_fname"] = $user["firstname"];
            $_SESSION["user_lname"] = $user["surname"];
            $_SESSION["user_email"] = $user["email"];
            $_SESSION["picture_url"] = $user["picture_url"];

            header("Location: ../index.php?login=success");
            exit();
        }

    }




?>