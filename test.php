<!--
 * Copyright © 2018 FIVE Studios
 *
 * See the LICENSE file at the top-level directory of this distribution
 * for licensing information.
 *
 * Unless otherwise agreed in a custom licensing agreement with the FIVE Studios,
 * no part of this software, including this file, may be copied, modified,
 * propagated, or distributed except according to the terms contained in the
 * LICENSE file.
 *
 * Removal or modification of this copyright notice is prohibited.
 * 
 * Questions: Contact Corey Ervin
 * E: corey@fivestudios.ca
 * 
--> 

<!-- Web Development Page -->

<!-- Header and Backend Include files -->

<?php include "inc/header.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>textSlider</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class = "wrap">
		<div id="arrow-left" class="arrow"></div>


		<div id="slider">
			<div class="slide slide1">
				<div class="slide-content">
					<span>Image One</span>
				</div>
			</div>

			<div class="slide slide2">
				<div class="slide-content">
					<span>Image Two</span>
				</div>
			</div>

			<div class="slide slide3">
				<div class="slide-content">
					<span>Image Three</span>
				</div>
			</div>

		</div>

		<div id="arrow-right" class="arrow"></div>
	</div>

	<script src="textSlider.js"></script>


</body>
</html>