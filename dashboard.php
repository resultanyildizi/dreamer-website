<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/admin.css" />
    <script
      src="https://kit.fontawesome.com/445d2804ca.js"
      crossorigin="anonymous"
    ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php
      require_once("classes/data_access.php");
      require_once("classes/city.php");
      require_once("classes/admin.php");
    ?>
  
  <?php 
    session_start();
    if(isset($_SESSION["admin_id"])) {
      $admin_name = $_SESSION["admin_fname"];
      $admin_surname = $_SESSION["admin_lname"];
      $picture_url = $_SESSION["admin_picture_url"];
    } else {
      header("Location: login.php");
    }
  
  ?>
</head>
  <body>
    <div class="clearfix">
      <div class="menu-side">
        <div class="profile-menu">
          <div class="clearfix">
            <a href="admin_profile.php"
              ><img src="<?php echo 'resources/admin_images/'.$picture_url;?>" alt="profile_pic"
            /></a>
            <div class="profile-text">
              <a class="name" href="admin_profile.php"><?php echo $admin_name; ?></a>
              <a class="name" href="admin_profile.php"><?php echo $admin_surname; ?></a>
              <a class="logout" href="includes/admin.logout.inc.php">Logout</a>
            </div>
          </div>
        </div>

        <nav class="admin-navbar">
          <ul>
            <li id="current-page">
              <a  href="dashboard.php"><i class="fas fa-city"></i><label>Cities</label></a>
            </li>
            <li>
              <a href="admin_profile.php"
                ><i class="fas fa-user-alt"></i><label>Profile</label></a
              >
            </li>
          </ul>
        </nav>
      </div>

      <div class="content">
        <div class="title">
          <h2>Cities</h2>
        </div>

        <div class="main-content">
          <div class="table-area">
            <?php echo City::TShowAllCities(); ?>
          </div>

          <div class="city-input-area">
            <div class="small-title">
              <h3>Add New City</h3>
            </div>

            <div class="city-area">
              <form
                action="includes/city-add.inc.php"
                class="city-form-area"
                name="city_form_area"
                method="post"
                enctype="multipart/form-data"
                onsubmit="return validate_city()"
              >
                <div class="clearfix">
                  <div class="city-add-area">
                    <div class="city-row">
                      <div class="clearfix">
                        <div class="city-label">
                          <label for="name">NAME:</label>
                        </div>
                        <div class="city-textB">
                          <input type="text" id="name" name="name" value="<?php if(isset($_GET['c_name'])) echo $_GET['c_name'];?>"/>
                        </div>
                        <div class="error">
                          <p id="e_c_name">*City name is required</p>
                        </div>
                      </div>
                    </div>
                    <div class="city-row">
                      <div class="clearfix">
                        <div class="city-label">
                          <label for="country">COUNTRY:</label>
                        </div>
                        <div class="city-textB">
                          <input type="text" id="country" name="country" value="<?php if(isset($_GET['c_country'])) echo $_GET['c_country'];?>"/>
                        </div>
                        <div class="error">
                          <p id="e_c_country">*Country name is required</p>
                        </div>
                      </div>
                    </div>
                    <div class="city-row">
                      <div class="clearfix">
                        <div class="city-label">
                          <label for="cost">COST:</label>
                        </div>
                        <div class="city-textB">
                          <input type="text" id="cost" name="cost"  value="<?php if(isset($_GET['c_price'])) echo $_GET['c_price'];?>"/>
                        </div>
                        <div class="error">
                          <p id="e_c_cost">*Costname is required</p>
                        </div>
                      </div>
                    </div>
                    <div class="city-row">
                      <div class="clearfix">
                        <div class="city-label">
                          <label for="small_text">SMALL TEXT:</label>
                        </div>
                        <div class="city-textB">
                          <input
                            type="text"
                            id="small_text"
                            name="small_text"
                            value="<?php if(isset($_GET['smtxt'])) echo $_GET['smtxt'];?>"
                          />
                        </div>
                        <div class="error">
                          <p id="e_c_small_text">*Small text is required</p>
                        </div>
                      </div>
                    </div>
                    <div class="city-row">
                      <div class="clearfix">
                        <div class="city-label">
                          <label for="deatails">DETAILS:</label>
                        </div>
                        <div class="city-textB">
                          <textarea id="details" name="details" rows="4" ><?php if(isset($_GET['details'])) echo $_GET['details'];?>
                          </textarea>
                        </div>
                        <div class="error">
                          <p id="e_c_details">*Details are required</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="city-row">
                      <div class="clearfix">
                        <div style="height: 20px" class="city-label">
                          
                        </div>
                        <div class="add-button">
                          <input type="submit" name="city_form_area" value="ADD" />
					              </div>
                        <div class="error">
                          <p></p>
                        </div>
                      </div>
                    </div>

                    
              </div>

                  <div class="city-pic-area">
                    <div class="clearfix">
                      <div class="small-img-field">
                        <div id="city_small_img" class="small-img"  style="background-image: url('resources/undefined_image.jpg')"></div>
                          <input id="small_img_inp" type="file" name="small_img"/>
                          <div class="error">
                            <p><?php if(isset($_GET["error"])) echo "*Error has occured. One of the pictures has invalid image format"?></p>
                          </div>
                      </div>
                      <div class="back-img-field" >
                        <div id="city_back_img" class="back-img"  style="background-image: url('resources/undefined_image.jpg')"></div>
                        <input id="back_img_inp" type="file" name="back_img"  />
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/general.js"></script>
    <script> image_preview(); </script>
  </body>
</html>
