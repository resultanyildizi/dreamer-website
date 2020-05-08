<?php 
    class City {
 
        public static function CShowAllCities() {
            $query = "select id, name, country, price, small_picture_url, details from city";
            $result = DataAccess::ExecuteQuery($query);
 
            $html_city_cards =  "<div class='city-cards-row'>" ."<div class='clearfix'>";
								

			for($i = 0; $i < sizeof($result); $i++) {
				
				if($i != 0 &&  $i % 3 == 0) {
					$html_city_cards = $html_city_cards . "</div></div>";
					$html_city_cards = $html_city_cards . "<div class='city-cards-row'>" . 
														  "<div class='clearfix'>";
														  
				}
				
				$current_city = $result[$i];
				$html_city_cards = $html_city_cards . City::createCityCard($current_city);

			}

			$html_city_cards = $html_city_cards . "</div></div>";
			return $html_city_cards;
		}
		 
		
		
		private function createCityCard($city) {
			$_id = $city["id"];
			$_name = $city["name"];
			$_country = $city["country"];
			$_price = $city["price"];
			$_smallpic = $city["small_picture_url"];
			$_details = $city["details"];
			$_style = 'background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8)), url("' . $_smallpic. '"); ';

			$html_current_city = "<div class='city-card' style='$_style'>" .
								"<h3 class='city-card-country'>$_country</h3>" .
								"<h1 class='city-card-title'>$_name</h1>" .
								"<p  class='city-card-p'>$_details</p>" .
								"<h2 class='city-card-price'>$_price$</h2>" .
								"<a class='city-card-purchase' href='travel.php?city=$_id'>Travel</a>" .
								"</div>" ;

			return $html_current_city;
		}
		
		public static function GetCity($id) {
			$query = "select * from city where id = '$id'";
			$result = DataAccess::ExecuteQuery($query);

			if(sizeof($result) > 0)
				return $result[0];
			else
				return null;
		}

        public static function InsertCity(){
 
            $insert_query="insert into city(name,country,price,small_picture_url,back_picture_url,details)".
            "values ('izmir','Turkiye','4444','resources/city_images/tablo.jpg','asdf','amazing city ' )";
 
            DataAccess::ExecuteNonQuery($insert_query);
        }
 
       public static function DeleteCity($id){
            $query = "delete from city where id=".$id;
            $result= DataAccess::ExecuteNonQuery($query);
            
            if($result==0){
            	echo "hata!";
            }
      





		}
	
	
	}