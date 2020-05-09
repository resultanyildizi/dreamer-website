<?php
    
    require_once("../classes/city.php");
    

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["city_form_area"])) {

        $name = $_POST["name"];
        $country = $_POST["country"];
        $price=$_POST["cost"];
        $small_text=$_POST["small_text"];
        $details=$_POST["details"];

        City::InsertCity($name,$country,$price,$small_text,$details);
         echo  "aleykumselam";
        }

    




?>