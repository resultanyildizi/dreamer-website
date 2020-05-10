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
            <li>
              <a  href="dashboard.php"><i class="fas fa-city"></i><label>Cities</label></a>
            </li>
            <li id="current-page">
              <a href="admin_profile.php"
                ><i class="fas fa-user-alt"></i><label>Profile</label></a
              >
            </li>
          </ul>
        </nav>
      </div>

      <div class="content">
        <div class="title">
          <h2>Profile</h2>
        </div>

        <div class="main-content">
          <div class="show-area">
            <div class="clearfix">
              <div class="profile-form">
                <form action="includes/admin-update.inc.php" method="POST" name="profile-form-area" enctype="multipart/form-data">
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-label">
                        <label for="name">NAME:</label>
                      </div>
                      <div class="profile-textB">
                        <input type="text" id="name" name="a_name" placeholder="Name" value="<?php if(isset($_GET['a_name'])) echo $_GET['a_name'];?>"/>
                      </div>
                      <div class="error">
                        <p id="e_a_name">*Name is required</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-label">
                        <label for="surname">SURNAME:</label>
                      </div>
                      <div class="profile-textB">
                        <input type="text" id="surname" name="a_surname" placeholder="Surname" value="<?php if(isset($_GET['a_surname'])) echo $_GET['a_surname'];?>"/>
                      </div>
                      <div class="error">
                        <p id="e_a_surname">*Surname is required</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-label">
                        <label for="password">PASSWORD:</label>
                      </div>
                      <div class="profile-textB">
                        <input type="password" id="password" name="a_password" placeholder="Password"/>
                      </div>
                      <div class="error">
                        <p id="e_a_password">*Password is required</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-label">
                        <label for="cpassword">CONFIRM:</label>
                      </div>
                      <div class="profile-textB">
                        <input
                          type="password"
                          id="cpassword"
                          name="a_cpassword"
                          placeholder="Confirm Password"
                        />
                      </div>
                      <div class="error">
                        <p id="e_a_cpassword">*Confirm the password</p>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-label">
                        <label for="picture">PICTURE:</label>
                      </div>
                      <div class="profile-file">
                        <input
                          type="file"
                          id="picture"
                          name="a_picture_upload"
                          accept="image/*"
                        />
                      </div>
                      <div class="error">
                        <p><?php if(isset($_GET["error"])) echo "*Invalid image format" ?></p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="profile-show-area">
                <div class="small-title">
                  <h3>ACCOUNT</h3>
                </div>
                <hr />

                <div class="output-area">
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="id">ID:</label>
                      </div>
                      <div class="profile-show-text">
                        <p id="id " name="id"><?php echo $_SESSION["admin_id"]; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="name">NAME:</label>
                      </div>
                      <div class="profile-show-text">
                        <p id="name" name="name"><?php echo $_SESSION["admin_fname"]; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="surname">SURNAME:</label>
                      </div>
                      <div class="profile-show-text">
                        <p id="surname" name="surname"><?php echo $_SESSION["admin_lname"]; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="email">EMAIL:</label>
                      </div>
                      <div class="profile-show-text">
                        <p id="email" name="email"><?php echo $_SESSION["admin_email"]; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="reg_date">REG. DATE:</label>
                      </div>
                      <div class="profile-show-text">
                        <p d="reg_date" name="reg_date"><?php echo $_SESSION["reg_date"]; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="reg_date">PICTURE:</label>
                      </div>
                      <div class="profile-show-text">
                        <div
                          class="img-area"
                          style="
                            <?php echo "background-image: url('resources/admin_images/" . $picture_url ."');"; ?>  "
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="update-area">
            <button onclick="validate_admin_profile();">UPDATE</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/general.js"></script>
  </body>
</html>
