<!-- FIVE Studios -->
<!-- Website Template Design 2 -->
<!-- By: Corey Ervin -->
<!-- Mail: corey@fivestudios.ca -->

<!-- Contact Page -->

<!-- Backend PHP code for contact form -->
<?php include "contactbackend.php"; ?>
<?php include "inc/header.php"; ?>

<title>FIVE Studios | Contact</title>

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
					<li><a href="about">About</a></li>

					<li>
   					<button class="btn btn-link navbar-btn dropdown-toggle" type="button" data-toggle="dropdown"><a>WEB</a>
    				</button>
    				<ul class="dropdown-menu">
      					<li><a href="webdev">Design Approach</a></li>
      					<li><a href="webdev">Our Process</a></li>
      					<li><a href="webdev">Pricing</a></li>
      					<li><a href="webdev">Clone Sites</a></li>
    				</ul>
					</li>
					<li class="current"><a href="contact">Contact</a></li>
				</ul>
			</div>
		</div>	
	</nav>

	<!-- Showcase -->
	<section id="showcaseContact">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-md-2">
				</div>
				<div class="col-sm-8 col-md-8 showcase-content">
					<h1>Get More Information</span></h1>
					<!--<p>It's Always 5 O'Clock Somewhere</p>-->
				</div>
				<div class="col-sm-2 col-md-2">
				</div>
			</div>
		</div>
	</section>

	<!-- SUBHEADER -->
	<section id="subheader">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Questions? Call or email us today.</h2>
					<h4>We’ll get right back to you.</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- MAIN PAGE --> 

	<section id="page" class="contact"> 
		<div class="container">
			<div class="row row-centered">
				<div class="col-xs-12 col-xs-offset-3 col-sm-12 col-sm-offset-3 col-md-12 col-md-offset-3 col-lg-12 col-lg-offset-3 text-left">
					<?php if($msg!= ""): ?>
						<div class = "alert <?php echo $msgClass; ?>"><?php echo $msg; ?>
						</div>
					<?php endif; ?>

					<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
						<div class = "form-group">
							<label>Name</label><br>
							<input type="text" name="name" class="form-control" placeholder="John Doe"
							value="<?php echo isset($_POST["name"]) ? $name : ""; ?>">
						</div>

						<div class = "form-group">
							<label>Email</label><br>
							<input type="text" name="email" class="form-control" placeholder="johndoe@example.com"
							value="<?php echo isset($_POST["email"]) ? $email : ""; ?>">
						</div>

						<div class = "form-group">
							<label>Message</label><br>
							<textarea name="message" class="form-control" placeholder="Enter Message Here" value="
							<?php echo isset($_POST["message"]) ? $message : "";?>"></textarea>
						</div>
						
						<br>
						<button type="submit" name="submit" class="btn btn-primary">Submit
						</button><br>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- SUBHEADER -->
	<section id="subheader">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3>+1-416-523-3547 or <a href="mailto:corey@fivestudios.ca?Subject=Website%20Connection" style="color: black"; target="_top">corey@fivestudios.ca</a></h3>
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER --> 
	<footer id="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p>&copy; 2017 FIVE Studios, All Rights Reserved</p>
				</div>
				<div class="col-md-12">
					<a href="https://twitter.com/thestudiosfive" target="_blank">
						<i class="sm fa fa-twitter"></i>
					</a>
					<a href="https://www.instagram.com/studiosfive/?hl=en" target="_blank">
						<i class="sm fa fa-instagram"></i>
					</a>
					<a href="https://www.facebook.com/FIVE-Studios-212285405980757/" target="_blank">
						<i class="sm fa fa-facebook"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>

    <!-- Annimations -->
    <script type="text/javascript">
    	window.sr = ScrollReveal();

    	sr.reveal(".navbar", {
    		duration: 2000,
    		origin:"bottom"
    	});

    	sr.reveal("#showcaseContact div", {
    		duration: 2000,
    		origin:"top",
    		distance:"300px"
    	});
    </script>

</body>
</html>