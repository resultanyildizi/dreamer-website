<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dreamer - Travelling Agency</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/city.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php
		include("classes/data_access.php");
		DataAccess::CreateTables();
	?>
</head>
<body>
	<header>
		<div class="container">
			<div class="clearfix">
				<nav>
					<ul>
						<li><a href="#">HOME</a></li>
						<li><a href="#">CITIES</a></li>
						<li><a href="#">RESERVATIONS</a></li>
						<li><a href="#">ABOUT</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<section>
		<div class="container">
			<h1 class="title-1">Explore & Travel</h1>
			<hr>
			<div class="city-cards-area">
				
				<div class="clearfix">

					<div class="city-cards-row">
						<div class="city-card">
							<h1 class="city-card-title">Istanbul</h1>
							<p  class="city-card-p">Istanbul is a great city to travel...</p>
							<h2 class="city-card-price">70$</h2>
							<a class="city-card-purchase" href="#">Travel</a>
							
						</div>

						<div class="city-card">
							<h1 class="city-card-title">Istanbul</h1>
							<p  class="city-card-p">Istanbul is a great city to travel...</p>
							<h2 class="city-card-price">70$</h2>
							<a class="city-card-purchase" href="#">Travel</a>
							
						</div>

						<div class="city-card">
							<h1 class="city-card-title">Istanbul</h1>
							<p  class="city-card-p">Istanbul is a great city to travel...</p>
							<h2 class="city-card-price">70$</h2>
							<a class="city-card-purchase" href="#">Travel</a>
						</div>

					</div>
				</div>

				<div class="clearfix">
						<div class="city-cards-row">
						<div class="city-card">
					

						</div>

						<div class="city-card">
					

						</div>

						<div class="city-card">
					

						</div>

					</div>
				</div>
			
				<div class="clearfix">
						<div class="city-cards-row">
						<div class="city-card">
					

						</div>

						<div class="city-card">
					

						</div>

						<div class="city-card">
					

						</div>

					</div>
				</div>
			



			</div>
		</div>
	</section>
	<footer></footer>

</body>
</html>