<!-- FIVE Studios -->
<!-- Website Template Design 2 -->
<!-- By: Corey Ervin -->
<!-- Mail: corey@fivestudios.ca -->

<!-- Web Development Page -->

<!-- Header and Backend Include files -->
<?php include "phpFiles/company.php"; ?>
<?php include "inc/header.php"; ?>
<?php include "inc/navbar.php"; ?>

<title>FIVE Studios | Pricing</title>

<!-- Body --> 

<body>

	<!-- Showcase -->
	<section id="showcaseServices">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-md-2">
				</div>
				<div class="col-sm-8 col-md-8 showcase-content">
					<h1>Web Development</span></h1>
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
					<h2>Pricing</h2>
				</div>
			</div>
	</section>

	<hr>

	<!-- MAIN PAGE --> 

	<section id="page" class="services"> 
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h2>Stay <span class="primary-text">Tuned</span></h2>				

				</div>
			</div>
	</section>

	<!-- Include Web Link Buttons --> 
	<?php include "inc/linkButtons.php"; ?>

	<!-- Footer and Company Sections --> 
	<?php include "inc/footer.php"; ?>

    <!-- Annimations -->
    <script type="text/javascript">
    	window.sr = ScrollReveal();

    	sr.reveal(".navbar .container .navbar-header", {
    		duration: 2000,
    		origin:"bottom"
    	});

    	sr.reveal("#showcaseServices div", {
    		duration: 2000,
    		origin:"top",
    		distance:"300px"
    	});

    </script>
</body>

</html>