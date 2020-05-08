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
              <a class="name" href="#">Tanyıldızı</a>
              <a class="logout" href="includes/logout.inc.php">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="title">
          <h2>Profile</h2>
        </div>

        <div class="main-content">
          <div class="show-area">
            <div class="clearfix">
              <div class="profile-form">
                <form name="profile-form-area">
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-label">
                        <label for="name">NAME:</label>
                      </div>
                      <div class="profile-textB">
                        <input type="text" id="name" name="name" />
                      </div>
                      <div class="error">
                          <p id="e_name">*Name is required</p>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-label">
                        <label for="surname">SURNAME:</label>
                      </div>
                      <div class="profile-textB">
                        <input type="text" id="surname" name="surname" />
                      </div>
                      <div class="error">
                          <p id="e_surname">*Surname is required</p>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-label">
                        <label for="password">PASSWORD:</label>
                      </div>
                      <div class="profile-textB">
                        <input type="text" id="password" name="password" />
                      </div>
                      <div class="error">
                          <p id="e__password">*Password is required</p>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-label">
                        <label for="cpassword">CONFIRM:</label>
                      </div>
                      <div class="profile-textB">
                        <input type="text" id="cpassword" name="cpassword" placeholder="Confirm Password" />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-label">
                        <label for="cpassword">PICTURE:</label>
                      </div>
                      <div class="profile-file">
                        <input type="file" id="cpassword" name="picture_upload" />
                      </div>
                    </div>
                  </div>
                </form>
                
                
                <div class="image-area" style="background-image: url('resources/user_images/31.jpeg');"></div>
              </div>

              <div class="profile-show-area">
                <div class="small-tittle-area">
                  <h3>ACCOUNT</h3>
                </div>
                <hr />

                <div class="output-area">
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="id">ID:</label>
                      </div>
                      <div class="profile-show-textB">
                        <p id="id " name="id">12</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="name">NAME:</label>
                      </div>
                      <div class="profile-show-textB">
                        <p id="name" name="name">EBRU</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="surname">SURNAME:</label>
                      </div>
                      <div class="profile-show-textB">
                        <p id="surname" name="surname">KUBRA</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="email">EMAİL:</label>
                      </div>
                      <div class="profile-show-textB">
                        <p id="email" name="email">ebrukubra@gmail.com</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="clearfix">
                      <div class="profile-show-label">
                        <label for="reg_date">REG. DATE:</label>
                      </div>
                      <div class="profile-show-textB">
                        <p d="reg_date" name="reg_date">12.05.2020</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="update-area">
            <button>Update</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/general.js"></script>
  </body>
</html>