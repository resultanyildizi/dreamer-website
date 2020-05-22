<?php
    require_once("../classes/city.php");
    session_start();
    if(!isset($_SESSION["admin_id"])) {
        header("Location: ../login.php");
    }



    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["city_form_area"])) {
     
        $name = $_POST["name"];
        $country = $_POST["country"];
        $price=$_POST["cost"];
        $small_text=$_POST["small_text"];
        $details=$_POST["details"];


       $result = City::InsertCity($name,$country,$price,$small_text,$details);
       $small_picture_url = validate_picture($_FILES["small_img"], $result, $name,  $country, $price, $small_text, $details, 0);
       $back_picture_url = validate_picture($_FILES["back_img"], $result, $name,  $country, $price, $small_text, $details, "big");

       City::UpdateCity($result, $name, $country, $price, $small_picture_url, $back_picture_url, $small_text, $details);
       header("Location: ../dashboard.php?add=successful&small=$small_picture_url&back=$back_picture_url");
       exit();
    } else {
        header("Location: ../dashboard.php");
        exit();
    }
    



    // Uploading picture into server with city's unique ID
    function validate_picture($file, $id, $name, $country, $price, $small_text, $details, $type) {
        $file_name = $file["name"];
        $file_tmp_name = $file["tmp_name"];
        $file_size = $file["size"];
        $file_error = $file["error"]; 
        $file_temp_ext = explode('.', $file_name);   
        $file_ext = strtolower(end($file_temp_ext));

        $allowed = array("jpg", "jpeg", "png", "pdf");

        if(in_array($file_ext, $allowed)) {
            if($file_error === 0) {
                $target_dir = "../resources/city_images/";
                if($type === 0)
                    $target_name =  $id . "." . $file_ext;
                else
                    $target_name = $id . "-back." . $file_ext;

                move_uploaded_file($file_tmp_name, $target_dir . $target_name);
                chmod($target_dir . $target_name, 0755);
                return $target_name;
            } else {
                City::DeleteCity($id);
                header("Location: ../dashboard.php?error=upload_error&c_name=$name&c_country=$country&c_price=$price&smtxt=$small_text&details=$details");
                exit();

            }
        } else {
            City::DeleteCity($id);
            header("Location: ../dashboard.php?error=upload_error&c_name=$name&c_country=$country&c_price=$price&smtxt=$small_text&details=$details");
            exit();
        }
    }
?>