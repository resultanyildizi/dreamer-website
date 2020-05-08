<?php
    
    require_once("../classes/admin.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["admin_login_form"])) {

        $email = $_POST["login_email_admin"];
        $pwd = $_POST["login_password_admin"];

        $admin = Admin::Login($email, $pwd);

        if($admin == null) {
            header("Location: ../login.php?login=error");
            exit();
        } else {
            session_start();

            $_SESSION["admin_email"] = $admin["email"];
            $_SESSION["admin_id"] = $admin["id"];
            $_SESSION["admin_fname"] = $admin["firstname"];
            $_SESSION["admin_lname"] = $admin["surname"];
            $_SESSION["picture_url"] = $admin["picture_url"];
            $_SESSION["reg_date"] = $admin["reg_date"];


            header("Location: ../dashboard.php?login=success");
            exit();
        }

    }




?>