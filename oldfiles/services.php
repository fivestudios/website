<!-- FIVE Studios -->
<!-- Website Template Design 2 -->
<!-- By: Corey Ervin -->
<!-- Mail: corey@fivestudios.ca -->

<!-- Services Page -->


<!-- Backend PHP code for newsletter signup -->
<?php include "company.php"; ?>



<!DOCTYPE HTML> 
<html>
<html lang="en">

<!-- Head --> 

<head>
	<meta charset="UTF-8"/>
	<title>FIVE Studios | Services</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

	<!-- Google Font Package -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">

	<!-- JavaScript Bootstap Package -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- ScrollReveal Package -->
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

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
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li class="current"><a href="services.php">Services</a></li>
					<li><a href="contact.php">Contact</a></li>
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
					<h1>Services</span></h1>
					<!--<p>It's Always 5 O'Clock Somewhere</p>-->
				</div>
				<div class="col-sm-2 col-md-2">
				</div>
			</div>
		</div>
	</section>

	<!-- MAIN PAGE --> 

	<section id="page" class="services"> 
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h2><span class="primary-text">See</span> What We Offer</h2>				
					<ul>
						<li>
							<h2>Web Design & Development</h2>
							<p>Stay Tuned!</p>
						</li>

						<hr>

						<li>
							<h2>Software Development & Programming</h2>
							<p>Stay Tuned!</p>
						</li>

						<hr>

						<li>
							<h2>Social Media Managment</h2>
							<p>Stay Tuned!</p>
						</li>

					</ul>

				</div>
			</div>
	</section>

	<!-- COMPANY --> 
	<section id="company">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 center-xs">
					<h4>Contact Us</h4>
					<ul>
						<li><i class="fa fa-envelope"</i> <a href="mailto:corey@fivestudios.ca?Subject=Website%20Connection" style="color: white"; target="_top"> corey@fivestudios.ca</a></i></li>
						<li><i class="fa fa-envelope"</i> <a href="mailto:bartekgodzwon@gmail.com?Subject=Website%20Connection" style="color: white"; target="_top"> bartekgodzwon@gmail.com</a></i></li>
						<li><i class="fa fa-map"</i> Greater Toronto Area</i></li>
					</ul>
				</div>


				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 center-xs">

					<h4>Newsletter</h4>
					<p>We're just getting started. Be the first to hear about our upcoming projects.</p>

					<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

						<input type="text" name="email" placeholder="Enter Email"
						value="<?php echo isset($_POST["email"]) ? $email : ""; ?>">

						<button type="submit" name="submit">Submit</button>
					</form>

				</div>
			</div>
		</div>
	</section>


	<!-- FOOTER --> 
	<footer id="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p>Copyright &copy; 2017 | FIVE Studios</p>
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

	<!-- jQuery Package -->
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous">
	</script>

	<!-- JavaScript Bootstap Package -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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