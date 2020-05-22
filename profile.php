<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reservation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/travel.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Reservations</title>

    <?php
		require_once("classes/data_access.php");
		require_once("classes/reservation.php");
		require_once("classes/page_elements.php");
		DataAccess::CreateTables();
		session_start();
	?>

    <style>
    .profile-card {
        margin: 100px auto;
        width: 80%;
        background-color: rgba(255, 255, 255, 0.4);
        padding: 40px;
        font-size: 2em;
        font-family: "Century Gothic";
    }

    .half {
        float: left;
        width: 50%;
    }

    .half label {
        font-weight: bold;
    }

    .half p {
        margin: 10px 0;
    }

    .img {
        width: 200px;
        height: 260px;
        background-position: center;
        background-size: cover;
        margin-top: 10px;
        -webkit-box-shadow: -1px 4px 13px -5px rgba(0, 0, 0, 0.7);
        -moz-box-shadow: -1px 4px 13px -5px rgba(0, 0, 0, 0.7);
        box-shadow: -1px 4px 13px -5px rgba(0, 0, 0, 0.7);
    }
    </style>
</head>

<body>
    <?php 

if(isset($_SESSION["user_id"])) {
    $fullname = $_SESSION["user_fname"] ." ". $_SESSION["user_lname"];
    $picture_url = $_SESSION["picture_url"];
    
    PageElements::get_header($fullname, $picture_url);

    $fname = $_SESSION["user_fname"];
    $lname = $_SESSION["user_lname"];
    $email = $_SESSION["user_email"];
    $picture_url = $_SESSION["picture_url"];


} else {
    header("Location: index.php");
}?>

    <section>
        <div class="container">
            <h1 class="title-1">Profile</h1>
            <hr />
            <div class="blurred-area">
                <div class="profile-card">
                    <div class="clearfix">
                        <div class="half">
                            <label>Name:</label>
                        </div>
                        <div class="half">
                            <p><?php echo $fname; ?></p>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="half">
                            <label>Surname:</label>
                        </div>
                        <div class="half">
                            <p><?php echo $lname; ?></p>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="half">
                            <label>Email:</label>
                        </div>
                        <div class="half">
                            <p><?php echo $email; ?></p>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="half">
                            <label>Picture:</label>
                        </div>
                        <div class="half">
                            <div class="img" style="
                            <?php echo "background-image: url('resources/user_images/" . $picture_url ."');"; ?>  ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="js/general.js"></script>

</body>

</html>