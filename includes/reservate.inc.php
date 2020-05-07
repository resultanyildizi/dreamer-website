<?php
    session_start();
    if(isset($_SESSION["user_id"]) && isset($_GET["city"]) && isset($_POST["reservation_form"])) {
        $user_id = $_SESSION["user_id"];
        $city_id = $_GET["city"];
        $people_count = $_POST["traveller_count"];
        $start_date = $_POST["traveller_sdate"];
        $end_date = $_POST["traveller_edate"];
        $days = $_POST["traveller_days"];
        $price = (int)$people_count * (int)$days * (int)$_GET["price"];;

        echo "Successful";
        header("Location: ../index.php");

    } else {
        header("Location: ../index.php");
    }



?>