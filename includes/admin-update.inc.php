<?php 

  


?>


<?php
    require_once("../classes/admin.php");
    session_start();
    if(!isset($_SESSION["admin_id"])) {
       header("Location: ../login.php");
       exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["a_name"]) && isset($_POST["a_surname"]) && isset($_POST["a_password"])) {

        $_admin_id = $_SESSION["admin_id"];
        $_firstname= $_POST["a_name"];
        $_lastname= $_POST["a_surname"];
        $_password= $_POST["a_password"]; 

       $_picture_url = validate_picture($_FILES["a_picture_upload"], $_admin_id, $_firstname,  $_lastname);
       Admin::UpdateAdmin($_admin_id, $_firstname, $_lastname, $_password, $_picture_url);

       $_SESSION["admin_fname"] = $_firstname;
       $_SESSION["admin_lname"] = $_lastname;
       $_SESSION["admin_picture_url"] =  $_picture_url;
       header("Location: ../admin_profile.php?update=successful");
       exit();
    } else {
        header("Location: ../admin_profile.php");
        exit();
    }  

    // Uploading picture into server with admin's unique ID

    function validate_picture($file, $id, $firstname, $lastname) {
        $file_name = $file["name"];
        $file_tmp_name = $file["tmp_name"];
        $file_size = $file["size"];
        $file_error = $file["error"]; 
        $file_temp_ext = explode('.', $file_name);   
        $file_ext = strtolower(end($file_temp_ext));

        $allowed = array("jpg", "jpeg", "png", "pdf");

        if(in_array($file_ext, $allowed)) {
            if($file_error === 0) {
                $target_dir = "../resources/admin_images/";
                $target_name =  $id . "." . $file_ext;
                move_uploaded_file($file_tmp_name, $target_dir . $target_name);
                chmod($target_dir . $target_name, 0755);
                return $target_name;
            } else {
                header("Location: ../admin_profile.php?error=upload_error&a_name=$firstname&a_surname=$lastname");
                exit();

            }
        } else {
            header("Location: ../admin_profile.php?error=invalid_file_format&a_name=".$firstname."&a_surname=".$lastname);
            exit();
        }
    }
?>