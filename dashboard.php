<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/admin.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
	  <div class="clearfix">
		<div class="menu-side">
		<div class="profile-menu">
			<div class="clearfix">
			<a href="#"
				><img src="resources/user_images/31.jpeg" alt="profile_pic"
			/></a>
			<div class="profile-text">
				<a class="name" href="#">Nurettin Resul</a>
				<a class="name	" href="#">Tanyıldızı</a>
				<a class="logout" href="includes/logout.inc.php">Logout</a>
			</div>
			</div>
		</div>
		</div>

		<div class="content">
			<div class='title'>
				<h2>Cities</h2>
			</div>

			<div class="main-content">

                 <div class='table-area'>

                 </div>

                 <div class='city-input-area'>

                 	<div class='city-small-tittle-area'>
                       <h3>Add New City</h3>
                 	</div>

                 	<div class='city-area'>
                       <form class='city-form-area' name='city_form_area'onclick='return validate_city()'>

                       <div class='city-add-area'>
         
                  <div class="row">
                    <div class="clearfix">
                      <div class="city-label">
                        <label for="name">NAME:</label>
                      </div>
                      <div class="city-textB">
                        <input type="text" id="name" name="name" />
                      </div>
                      <div class="error">
                          <p id="e_c_name">*City name is required</p>
                        </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="clearfix">
                      <div class="city-label">
                        <label for="country">COUNTRY:</label>
                      </div>
                      <div class="city-textB">
                        <input type="text" id="country" name="country" />
                      </div>
                      <div class="error">
                          <p id="e_c_country">*Country name is required</p>
                        </div>
                    </div>
                  </div>
                      <div class="row">
                    <div class="clearfix">
                      <div class="city-label">
                        <label for="cost">COST:</label>
                      </div>
                      <div class="city-textB">
                        <input type="text" id="cost" name="cost" />
                      </div>
                      <div class="error">
                          <p id="e_c_cost">*Costname is required</p>
                        </div>
                    </div>
                  </div>
                      <div class="row">
                    <div class="clearfix">
                      <div class="city-label">
                        <label for="small_text">SMALL TEXT:</label>
                      </div>
                      <div class="city-textB">
                        <input type="text" id="small_text" name="small_text" />
                      </div>
                      <div class="error">
                          <p id="e_c_small_text">*Small text is required</p>
                        </div>
                    </div>
                  </div>
                       <div class="row">
                    <div class="clearfix">
                      <div class="city-label">
                        <label for="deatails">DETAILS:</label>
                      </div>
                      <div class="city-textB">
                        <input type="text" id="details" name="details" />
                      </div>
                      <div class="error">
                          <p id="e_c_details">*Details text is required</p>
                        </div>
                    </div>
                  </div>
                                         
                      
                       <div class='add-button'>

                         <input type='submit' name='city_form_area' value='Add'>
                       </div>
             
                  
                       </div>

                    </form>

                 </div>
                 
                  
                      



			</div>


		</div>
	</div>
    <script type="text/javascript" src="js/general.js"></script>
  </body>
</html>
