<!-- FIVE Studios -->
<!-- Website Template Design 2 -->
<!-- By: Corey Ervin -->
<!-- Mail: corey@fivestudios.ca -->

<!-- About Page -->

<!-- Header and Backend Include files -->
<?php include "company.php"; ?>
<?php include "inc/header.php"; ?>

<title>FIVE Studios | About</title>

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
					<li><a href="index">Home</a></li>
					<li class="current"><a href="about">About</a></li>

					<li>
   					<button class="btn btn-link navbar-btn dropdown-toggle" type="button" data-toggle="dropdown"><a>WEB</a>
    				</button>
    				<ul class="dropdown-menu">
      					<li><a href="webdev.php">Design Approach</a></li>
      					<li><a href="webdev.php">Our Process</a></li>
      					<li><a href="webdev.php">Pricing</a></li>
      					<li><a href="webdev.php">Clone Sites</a></li>
    				</ul>
					</li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Showcase -->
	<section id="showcaseAbout">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-md-2">
				</div>
				<div class="col-sm-8 col-md-8 showcase-content">
					<h1>This is <span class="primary-text2"><span class="primary-text">FIVE</span> Studios</span></h1>
				</div>
				<div class="col-sm-2 col-md-2">
				</div>
			</div>
		</div>
	</section>

	<!-- MAIN PAGE --> 

	<section id="page" class="about"> 
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h2><span class="primary-text">What</span> We Do</h2>
					<h4>FIVE Studios specializes in the production of fresh, innovative apps for mobile users. We are currently working on our flagship, 'The FIVE App', an interactive, community-based bar-hopping app that ensures nobody stays thirsty on any given night! It's always 5 o'clock somewhere.</h4>
				</div>
			</div>
	</section>


	<!-- Showcase Claim-->
	<section id="showcaseClaim">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-md-2">
				</div>
				<div class="col-sm-8 col-md-8 showcase-content">
					<h2>You’ve got our undivided attention.</h2>
					<h3>Simply put, you're our first and only priority. Following in the footsteps of Apple's standard of customer service, we promise to listen and engage with you every step of the way—from our very first conversation to your 1000th product with us. Our mission is to help you, by every means possible, to create a meaningful, immersive experience for your customers.</h3>
				</div>
				<div class="col-sm-2 col-md-2">
				</div>
			</div>
		</div>
	</section>


	<section id="page" class="about"> 
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h2><span class="primary-text">Meet</span> The Team</h2>

					<div class="box col-xs-12 col-sm-5 col-md-5 col-lg-5 center-xs">
						<img src="./images/corey.jpg" style="width:100%">
						<h3>Corey Ervin</h3>
						<p>Director of Software Engineering</p>
					</div>

					<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 center-xs">
					</div>

					<div class="box col-xs-12 col-sm-5 col-md-5 col-lg-5 center-xs">
						<img src="./images/coolbartek.jpg" style="width:100%">
						<h3>Bartek Godzwon</h3>
						<p>Director of Marketing & Business Development</p>
					</div>
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

    	sr.reveal(".box", {
    		duration: 2000,
    		origin:"bottom"
    	});

    	sr.reveal("#showcaseAbout div", {
    		duration: 2000,
    		origin:"top",
    		distance:"300px"
    	});

    </script>
</body>
</html>