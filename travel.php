<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/travel.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php
		require_once("classes/data_access.php");
		require_once("classes/city.php");
		require_once("classes/page_elements.php");
		DataAccess::CreateTables();
        session_start();
    ?>

    <?php 
        if(isset($_SESSION["user_id"])) {
            $fullname = $_SESSION["user_fname"] ." ". $_SESSION["user_lname"];
            $picture_url = $_SESSION["picture_url"];
            
            $today = date('Y-m-d');
            $tomorrow = (new DateTime('tomorrow'))->format('Y-m-d');
            
            PageElements::get_header($fullname, $picture_url);

            if(isset($_GET["city"]))
            {
                $current_city = City::GetCity($_GET["city"]);
                if($current_city == null)
                    header("Location: index.php");
                else {
                    $city_name = $current_city["name"];
                    $city_country = $current_city["country"]; 
                    $city_pic = $current_city["back_picture_url"];
                    $city_price = $current_city["price"];
                }

            } else {
                header("Location: index.php");
            }
        } else {
            header("Location: index.php");
        }
    ?>
  </head>
  <body
    style="
      background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0)),
        url('<?php echo $city_pic; ?>');
    "
  >
    <section>
      <div class="container">
        <h1 class="title-1">Make a Reservation</h1>
        <hr />

        <div class="travel-area">
          <div class="travel-city-area">
            <h1><?php echo $city_name . ' - ' . $city_country ?></h1>
            <p class="half-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Et,
              officia porro. Non, nostrum illum! Maiores repellat dolores culpa
              impedit error ut dolorum. Sunt eligendi repellendus tempora
              dolores suscipit. Esse, quibusdam? Lorem ipsum dolor, sit amet
              consectetur adipisicing elit. Ratione laudantium nisi accusantium
              porro dolorum error rerum ab hic at. Temporibus!
            </p>
          </div>
          <div class="travel-form-area">
            <form action="includes/reservate.inc.php?<?php echo "city=" . $_GET['city'] . "&" . "price=" . $city_price?>" name="reservation_form" method="post" onsubmit="return validate_reservation();">
              <h2>Traveller's,</h2>
              <div class="input-area">
                <div class="clearfix">
                  <div class="label-field">
                    <label>Name:</label>
                  </div>
                  <div class="input-field">
                    <input
                      type="text"
                      name="traveller_name"
                      value="<?php echo $_SESSION['user_fname'];?>"
                      readonly
                    />
                  </div>
                </div>
                <div class="clearfix">
                  <div class="label-field">
                    <label>Surname:</label>
                  </div>
                  <div class="input-field">
                    <input
                      type="text"
                      name="traveller_lname"
                      value="<?php echo $_SESSION['user_lname'];?>"
                      readonly
                    />
                  </div>
                </div>
                <div class="clearfix">
                  <div class="label-field">
                    <label>Email:</label>
                  </div>
                  <div class="input-field">
                    <input
                      type="text"
                      name="traveller_email"
                      value="<?php echo $_SESSION['user_email'];?>"
                      readonly
                    />
                  </div>
                </div>
                <div class="clearfix">
                  <div class="label-field">
                    <label>Credit Card Number:</label>
                  </div>
                  <div class="input-field">
                    <input
                      type="text"
                      name="traveller_credit"
                      placeholder="9999999999999999";
                      value=""
                      pattern="[0-9]{12}" title="Credit Card Number"
                    />
                  </div>
                </div>
              </div>
              <h2>Passengers,</h2>
              <div class="input-area">
                <div class="clearfix">
                  <div class="label-field">
                    <label>Count:</label>
                  </div>
                  <div class="input-field">
                    <input
                      id="people-count"
                      type="number"
                      value="1"
                      min="1"
                      max="6"
                      name="traveller_count"
                      autocomplete="off"
                      onchange="set_dates(<?php echo $city_price;?>);"

                    />
                  </div>
                </div>
              </div>
              <h2>Travel's</h2>
              <div class="input-area">
                <div class="clearfix">
                  <div class="label-field">
                    <label>City:</label>
                  </div>
                  <div class="input-field">
                    <input
                      type="text"
                      name="traveller_city"
                      value="<?php echo $city_name . "-" . $city_country;?>"
                      readonly
                    />
                  </div>
                </div>
                <div class="clearfix">
                  <div class="label-field">
                    <label>Start Date:</label>
                  </div>
                  <div class="input-field">
                    <input
                      id="start-date-picker"
                      type="date"
                      name="traveller_sdate"
                      value="<?php echo $today;?>"
                      min="<?php echo $today;?>"
                      onchange="set_dates(<?php echo $city_price;?>);"
                    />
                  </div>
                </div>

                <div class="clearfix">
                  <div class="label-field">
                    <label>End Date:</label>
                  </div>
                  <div class="input-field">
                    <input
                      id="end-date-picker"
                      type="date"
                      name="traveller_edate"
                      value="<?php echo $today; ?>"
                      min="<?php echo $today;?>"
                      onchange="set_dates(<?php echo $city_price;?>);"
                    />
                  </div>
                </div>
                <div class="clearfix">
                  <div class="label-field">
                    <label>Days:</label>
                  </div>
                  <div class="input-field">
                    <input id="days-count" type="number" min="1" value="1" name="traveller_days" readonly />
                  </div>
                </div>
              </div>

              <hr />

              <div class="clearfix">
                  <input type="submit" name="reservation_form" value="PURCHASE">
                <p id="total-price">Total: <?php echo $city_price; ?>$</p>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="js/general.js"></script>
  </body>
</html>
