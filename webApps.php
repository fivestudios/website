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
<?php include "phpFiles/company.php"; ?>
<?php include "inc/header.php"; ?>
<?php include "inc/navbar.php"; ?>

<title>FIVE Studios | Web Apps</title>

<!-- Body --> 

<body>

	<!-- Showcase -->
	<section id="appDev">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-md-2">
				</div>
				<div class="col-sm-8 col-md-8 showcase-content">
					<h1>App Development</span></h1>
				</div>
				<div class="col-sm-2 col-md-2">
				</div>
			</div>
		</div>
	</section>

	<!-- Our Process --> 

	<section id="page" class="about"> 
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2><span class="primary-text">Web</span> Applications</h2>
				</div>
			</div>
	</section>


	<!-- MAIN PAGE --> 

	<section id="page" class="services"> 
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<hr>
					<h2>Stay <span class="primary-text">Tuned</span></h2>				
				</div>
			</div>
	</section>

	<!-- Footer and Company Sections --> 
	<?php include "inc/footer.php"; ?>

    <!-- Annimations -->
    <script type="text/javascript">
    	window.sr = ScrollReveal();

    	sr.reveal(".navbar .container .navbar-header", {
    		duration: 2000,
    		origin:"bottom"
    	});

    	sr.reveal("#appDev div", {
    		duration: 2000,
    		origin:"top",
    		distance:"300px"
    	});


    </script>
</body>

</html>