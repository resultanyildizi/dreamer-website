<?php
    session_start();
    if(!isset($_SESSION["admin_id"]))  {
        header("Location: ../login.php");
    }
    require_once("../classes/city.php");


    if(isset($_GET["city"])) {
        $id = $_GET["city"];
        City::DeleteCity($id);
        header("Location: ../dashboard.php?delete=successful");
    } else {
        header("Location: ../login.php");
    }

?>