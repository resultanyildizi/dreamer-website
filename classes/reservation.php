<?php
require_once("data_access.php");
class Reservation{
	 public static function InsertReservation($_peopleCount,$_cityId,$_userId,$_startDate,$_endDate,$_price){
       
         $insert_query="insert into reservations(people_count,city_id,user_id,start_date,end_date,price) ".
            "values('$_peopleCount','$_cityId','$_userId','$_startDate','$_endDate','$_price)";
        
        echo $insert_query;
          
        DataAccess::ExecuteNonQuery($insert_query);

        }

	
}
?>