<?php
    
    require_once("../classes/admin.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login_admin"])) {

        $email = $_POST["login_email_admin"];
        $pwd = $_POST["login_password_admin"];

        $admin = Admin::Login($email, $pwd);

        if($admin == null) {
            header("Location: ../admin.php?login=error");
            exit();
        } else {
            session_start();

            $_SESSION["admin_email"] = $user["email"];

            header("Location: ../admin.php?login=success");
            exit();
        }

    }




?>