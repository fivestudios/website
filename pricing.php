<!-- FIVE Studios -->
<!-- Website Template Design 2 -->
<!-- By: Corey Ervin -->
<!-- Mail: corey@fivestudios.ca -->

<!-- Web Development Page -->

<!-- Header and Backend Include files -->
<?php include "phpFiles/company.php"; ?>
<?php include "inc/header.php"; ?>

<title>FIVE Studios | Pricing</title>

<!-- Body --> 

<body>

	<!-- Responsive Navbar from getbootstrap.com -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span class="primary-text">FIVE</span> Studios</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href=".">Home</a></li>
					<li><a href="about">About</a></li>

					<li>
   					<button class="btn btn-link navbar-btn dropdown-toggle" type="button" data-toggle="dropdown"><a>WEB</a>
    				</button>
    				<ul class="dropdown-menu">
      					<li><a href="webdev">Design Approach</a></li>
      					<li><a href="ourProcess">Our Process</a></li>
      					<li class="current"><a href="pricing">Pricing</a></li>
      					<li><a href="cloneSites">Clone Sites</a></li>
    				</ul>
					</li>

					<li>
   					<button class="btn btn-link navbar-btn dropdown-toggle" type="button" data-toggle="dropdown"><a>APPS</a>
    				</button>
    				<ul class="dropdown-menu">
      					<li><a href="webApps">Web Apps</a></li>
      					<li><a href="iOS">iOS & Android</a></li>
    				</ul>
					</li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

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

	<!-- Footer and Company Sections --> 
	<?php include "inc/footer.php"; ?>

    <!-- Annimations -->
    <script type="text/javascript">
    	window.sr = ScrollReveal();

    	sr.reveal(".navbar", {
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