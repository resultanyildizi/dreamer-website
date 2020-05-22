<?php
    require_once("../classes/user.php");
    session_start();
    if(isset($_SESSION["user_id"])) {
       header("Location: ../index.php");
       exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register_form"])) {
     
        $_firstname=$_POST["fname"];
        $_lastname=$_POST["lname"];
        $_email=$_POST["email"];
        $_password=$_POST["password"]; 

        // Böyle bir email olup olmadığını kontrol et
        $email_exists = User::EmailKontrol($_email);

        if($email_exists == true) {
            header("Location: ../register.php?error=email_exists");
            exit();
        }

       $result = User::InsertUser($_firstname,$_lastname,$_password,$_email);
       $_picture_url = validate_picture($_FILES["picture_upload"], $result, $_firstname,  $_lastname, $_email);
       User::UpdateUser($result, $_firstname, $_lastname, $_password, $_email, $_picture_url);
       header("Location: ../index.php?register=successful");
       exit();
    } else {
        header("Location: ../register.php");
        exit();
    }  

    function validate_picture($file, $id, $firstname, $lastname, $email) {
        $file_name = $file["name"];
        $file_tmp_name = $file["tmp_name"];
        $file_size = $file["size"];
        $file_error = $file["error"]; 
        $file_temp_ext = explode('.', $file_name);   
        $file_ext = strtolower(end($file_temp_ext));

        $allowed = array("jpg", "jpeg", "png", "pdf");

        if(in_array($file_ext, $allowed)) {
            if($file_error === 0) {
                $target_dir = "../resources/user_images/";
                $target_name =  $id . "." . $file_ext;
                move_uploaded_file($file_tmp_name, $target_dir . $target_name);
                chmod($target_dir . $target_name, 0755);
                return $target_name;
            } else {
                User::DeleteUser($id);
                header("Location: ../register.php?error=upload_error&fname=$firstname&lname=$lastname&email=$email");
                exit();

            }
        } else {
            User::DeleteUser($id);

            header("Location: ../register.php?error=invalid_file_format&fname=".$firstname."&lname=".$lastname."&email=".$email);

            exit();
        }
    }
?>