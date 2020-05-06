<?php
    require_once("../classes/user.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register_form"])) {
     
              $_firstname=$_POST["fname"];
              $_lastname=$_POST["lname"];
              $_email=$_POST["email"];
              $_password=$_POST["password"]; 

       User::InsertUser($_firstname,$_lastname,$_password,$_email);

       header("Location: ../index.php");
    }    
?>