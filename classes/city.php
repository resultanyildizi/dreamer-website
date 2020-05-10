<?php 
    require_once("data_access.php");   
    class City {
 
        public static function CShowAllCities() {
            $query = "select id, name, country, price, small_picture_url, small_text from city";
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
			$_smallpic = "resources/city_images/" . $city["small_picture_url"];
			$_small_text = $city["small_text"];
			$_style = 'background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8)), url("' . $_smallpic. '"); ';

			$html_current_city = "<a class='card-link' href='travel.php?city=$_id'>" . 
								 "<div class='city-card' style='$_style'>" .
								 "<h3 class='city-card-country'>$_country</h3>" .
								 "<h1 class='city-card-title'>$_name</h1>" .
								 "<p  class='city-card-p'>$_small_text</p>" .
								 "<h2 class='city-card-price'>$_price$</h2>" .
								 "<a class='city-card-purchase' href='travel.php?city=$_id'>Travel</a>" .
								 "</div></a>" ;

			return $html_current_city;
		}

		public function TShowAllCities() {
			$query = "select id, name, country, price, small_picture_url, back_picture_url, small_text,
			 details, reg_date from city";
			$result = DataAccess::ExecuteQuery($query);
			
			$html_city_table = "<table>
								<thead>
									<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Country</th>
									<th>Price</th>
									<th>Small Picture</th>
									<th>Back Picture</th>
									<th>Small Text</th>
									<th>Details</th>
									<th>Reg. Date</th>
									<th>Action</th>
									</tr>
								</thead>
								<tbody>";

				for($i = 1; $i <= sizeof($result); $i++) {
					if($i % 2 == 0)
						$class = "even";
					else
						$class = "odd";

					$current = $result[$i-1];
					$id = $current["id"];

					$html_city_table .= "<tr class='$class'>" .
											"<td>" . $current['id'] . "</td>" .
											"<td>" . $current['name'] . "</td>" .
											"<td>" . $current['country'] . "</td>" .
											"<td>". $current['price'] ."</td>" .
											"<td>" . $current['small_picture_url'] . "</td>" .
											"<td>" . $current['back_picture_url'] . "</td>" .
											"<td>" . substr($current['small_text'],0, 30) . "..."  . "</td>" .
											"<td>". substr($current['details'], 0, 30) . "..." . "</td>" .
											"<td>". substr($current['reg_date'], 0, 10) . "</td>" .
											"<td id='action'><a style='color: black; text-decoration: none;' href='includes/city-delete.inc.php?city=$id'><i class='fas fa-trash-alt'></i></a></td>" . 
										"</tr>";
				}
                
				$html_city_table .= "</tbody></table>";

				return $html_city_table;
		}
		
		public static function GetCity($id) {
			$query = "select * from city where id = '$id'";
			$result = DataAccess::ExecuteQuery($query);

			if(sizeof($result) > 0)
				return $result[0];
			else
				return null;
		}

        public static function InsertCity($name,$country,$price,$small_text,$details){
            
            $insert_query="insert into city(name,country,price,small_picture_url, back_picture_url,small_text,details)".
            "values ('$name','$country','$price','unknown', 'unknown', '$small_text','$details')";
 
            $result = DataAccess::ExecuteNonQuery($insert_query);
			return $result;
		}
 
       	public static function DeleteCity($id){
            $query = "delete from city where id=".$id;
            $result= DataAccess::ExecuteNonQuery($query);
            
		}
	

		public static function UpdateCity($id, $name, $country, $price, $small_pic, $back_pic, $small_text, $details) {
			
			$update_query = "update city set name='$name'," . 
							"country='$country', price='$price'," .
							"small_picture_url='$small_pic', back_picture_url='$back_pic', " .
							"small_text='$small_text', details='$details' where id='$id' ";
	
			DataAccess::ExecuteNonQuery($update_query);
		}
	
	
	}