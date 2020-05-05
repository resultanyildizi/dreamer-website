<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

		<?php

        include("classes/data_access.php");

        include("classes/city.php");
    	
		?>

<form action="" method="POST"> 
            
            <input type="submit" name="insert_city" value="İnsert City">
            <input type="submit" name="delete_city" value="Delete City">

</form>


<?php
   if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["insert_city"])){
                        
    City::InsertCity();

}
   if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["delete_city"])){
                          
    City::DeleteCity(33);
            
}

?>

</body>
</html>