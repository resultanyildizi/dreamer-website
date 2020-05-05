<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dreamer - Travelling Agency</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/city.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
		include("classes/data_access.php");
		include("classes/city.php");
		include("classes/page_elements.php");
		DataAccess::CreateTables();
	?>
</head>
<body>
	<!--
	<?php PageElements::get_header(); ?>
	<section>
		<div class="container">
			<h1 class="title-1">Explore & Travel</h1>
			<hr>
			<div class="city-cards-area">
				<?php 
					echo City::CShowAllCities();
				?>
			</div>
		</div>
	</section>
	<footer></footer>
	-->

	<?php PageElements::get_user_login(); ?>

	<script type="text/javascript" src="js/general.js"></script>
</body>
</html>