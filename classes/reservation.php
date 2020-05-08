<?php
require_once("data_access.php");
class Reservation{
	 public static function InsertReservation($_peopleCount,$_cityId,$_userId,$_startDate,$_endDate,$_price){
       
         $insert_query="insert into reservations(people_count,city_id,user_id,start_date,end_date,price) ".
            "values('$_peopleCount','$_cityId','$_userId','$_startDate','$_endDate','$_price')";
        
        echo $insert_query;
          
        DataAccess::ExecuteNonQuery($insert_query);

    }

    public static function DeleteReservation($id) {
      $delete_query = "delete from reservations where id = $id";

      DataAccess::ExecuteNonQuery($delete_query);
    }

    public static function ShowReservations($user_id) {
        $query = "select reservations.id, users.firstname, users.surname, users.email, city.country, city.name as 'city_name', reservations.start_date, reservations.end_date, reservations.price, reservations.people_count, reservations.reg_date from reservations inner join users on reservations.user_id = users.id inner join city on reservations.city_id = city.id where users.id =" . $user_id;

        $reservations = DataAccess::ExecuteQuery($query);

        if(sizeof($reservations) > 0) {

            $html_reservation_cards = '<div class="reservation-cards-row">' .
                                      '<div class="clearfix">';

            for($i = 0; $i < sizeof($reservations); $i++) {
                if($i % 2 == 0 && $i != 0) {
                    $html_reservation_cards .= '</div></div>';
                    $html_reservation_cards .= '<div class="reservation-cards-row">' .
                                               '<div class="clearfix">';
                }
                $current = $reservations[$i];

                $rsvid = $current["id"];
                $fname = $current["firstname"];
                $lname = $current["surname"];
                $email = $current["email"];
                $sdate = $current["start_date"];
                $edate = $current["end_date"];
                $price = $current["price"];
                $count = $current["people_count"];
                $rdate = $current["reg_date"];
                $cntry = $current["country"];
                $city  = $current["city_name"];

                $rdate = substr($rdate, 0, 10);


                $html_reservation_cards .=   
                '<div class="reservation-card" style="">' .
                '<div class="clearfix">'.
                  '<p class="rsv-id">Reservation ID: '. $rsvid . '</p>'.
                  '<p class="rsv-reg-date">Registeration Date:'. $rdate .'</p>'.
                '</div>'.
                '<hr/>'.
                '<div class="clearfix">'.
                  '<p class="rsv-label">Name:</p>'.
                  '<p class="rsv-val">' . $fname .'</p>'.
                '</div>'.
                '<div class="clearfix">'.
                  '<p class="rsv-label">Surname:</p>'.
                  '<p class="rsv-val">'. $lname . '</p>'.
                '</div>'.
                '<div class="clearfix">'.
                  '<p class="rsv-label">Email:</p>'.
                  '<p class="rsv-val">'. $email .'</p>'.
                '</div>'.
                '<div class="clearfix">'.
                  '<p class="rsv-label">People Count:</p>'.
                  '<p class="rsv-val">'. $count . '</p>'.
                '</div>'.
                '<hr/>'.
                '<div class="clearfix">'.
                  '<p class="rsv-label">Country:</p>'.
                  '<p class="rsv-val">'. $cntry .'</p>'.
                '</div>'.
                '<div class="clearfix">'.
                  '<p class="rsv-label">City:</p>'.
                  '<p class="rsv-val">'. $city . '</p>'.
                '</div>'.
                '<div class="clearfix">'.
                  '<p class="rsv-label">Start Date:</p>'.
                  '<p class="rsv-val">'. $sdate .'</p>'.
                '</div>'.
                '<div class="clearfix">'.
                  '<p class="rsv-label">End Date:</p>'.
                  '<p class="rsv-val">'. $edate .'</p>'.
                '</div>'.
                '<div class="clearfix">'.
                  '<p class="rsv-label">Total Price:</p>'.
                  '<p class="rsv-val">'. $price .'$</p>'.
                '</div>'.
                '<a href="includes/cancel.inc.php?rsv='. $rsvid. '" onclick="return confirm_cancel_reservation();">Cancel Reservation</a>'.
                '</div>';
            }

            $html_reservation_cards .= '</div></div>';
            return $html_reservation_cards;
        } else {

        }
    }

	
}
?>

