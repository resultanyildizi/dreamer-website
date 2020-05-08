<?php
    require_once("../classes/reservation.php");
    session_start();
    
    if(isset($_SESSION["user_id"])) {
        if(isset($_GET["rsv"])) {
            $id = $_GET["rsv"];
            Reservation::DeleteReservation($id);
            header("Location: ../user-reservations.php?cancel=successful");
        } else {
            header("Location: ../user-reservations.php?cancel=error");
        }
    } else {
        header("Location: ../index.php");
    }

?>