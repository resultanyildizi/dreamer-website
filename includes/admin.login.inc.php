<?php
    
    require_once("../classes/admin.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["admin_login_form"])) {

        $email = $_POST["login_email_admin"];
        $pwd = $_POST["login_password_admin"];

        $admin = Admin::Login($email, $pwd);

        if($admin == null) {
            header("Location: ../login.php?login=error&email=" . $email);
            exit();
        } else {
            session_start();

            $_SESSION["admin_email"] = $admin["email"];

            header("Location: ../login.php?login=success");
            exit();
        }

    }




?>