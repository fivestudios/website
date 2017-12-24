<?php
	// Message Variables
	$msg = "";
	$msgClass = "";

	// Check for Submit
	if(filter_has_var(INPUT_POST, "submit")){
		// Get Form Data
		$email = htmlspecialchars($_POST["email"]);

		//Check the required fields
		if(!empty($email)) {
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
				//Failed
				$msg = "Please use a valid email";
			} else {
				//Passed
				// Recipient Email
				$toEmail = "bartekgodzwon@gmail.com";
				$subject = "Newsletter Sign-Up".": ".$email;
				$body = "<h2>Newsletter Sign-Up Request</h2>
				<h4>Email</h4><p>".$email."</p>
				";

				//Email Header 
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: "."<".$email.">"."\r\n";

				if(mail($toEmail, $subject, $body, $headers)) {
					//Email Sent
					$msg = "Your email has been sent";
				} else {
					//Failed 
					$msg = "Your email was not sent";
				}
			}
		} else {
			$msg = "Please fill in the fields";
		}
	}
?>


<!DOCTYPE HTML> 

<!-- FIVE Studios -->
<!-- Website Template Design 2 -->
<!-- By: Corey Ervin -->
<!-- Mail: corey@fivestudios.ca -->

<!-- Home Page -->


<html>
<html lang="en">

<!-- Head --> 

<head>
	<meta charset="UTF-8"/>
	<title>FIVE Studios | Home</title>
	<link rel="stylesheet" href="css/flexboxgrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
</head>

<!-- Body --> 

<body>

	<!-- Header -->
	<header id="main-header">
		<div class="container">
			<div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<h1><span class="primary-text">FIVE </span>Studios</h1>
				</div>
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<nav id="navbar">
						<ul>
							<li class="current"><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<!-- Showcase -->
	<section id="showcase">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-7 showcase-content">
					<h1>Welcome to <span class="primary-text">FIVE Studios</span></h1>
					<p>It's Always 5 O'Clock Somewhere</p>
				</div>
			</div>
		</div>
	</section>


	<!-- Features -->
	<section id="features">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h2>Website Design</h2>
					<p>What's included</p>

					<!-- ICON ROW 1 -->

					<div class="row center-xs center-sm center-md center-lg">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<i class="fa fa-dashboard"></i><br>
							<h4>Fully Optimized</h4>
							<p>Superior Performance and Load Times</p>
						</div>

						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<i class="fa fa-question-circle-o"></i><br>
							<h4>Free Support</h4>
							<p>Expert Support Available Anytime</p>
						</div>

						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<i class="fa fa-rocket"></i><br>
							<h4>Free Upgrades</h4>
							<p>We'll Grow With You</p>
						</div>
					</div>

					<!-- ICON ROW 2 -->

					<div class="row center-xs center-sm center-md center-lg">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<i class="fa fa-line-chart"></i><br>
							<h4>UpTime Guarantee</h4>
							<p>Guaranteed 99.9% uptime</p>
						</div>

						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<i class="fa fa-users"></i><br>
							<h4>Social Media Integration</h4>
							<p>Customer Success is Social</p>
						</div>

						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<i class="fa fa-plug"></i><br>
							<h4>Search Engine Optimization</h4>
							<p>Let People Find You Faster</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- INFO SECTION --> 
	<section id="info">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"">
					<img src="images/iphone.png" alt="">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"">
					<h2>Core Features</h2>
					<ul>
						<li><i class="fa fa-check"></i> Fully Optimized</li>
						<li><i class="fa fa-check"></i> Free Support</li>
						<li><i class="fa fa-check"></i> Free Upgrades</li>
						<li><i class="fa fa-check"></i> UpTime Guarantee</li>
						<li><i class="fa fa-check"></i> Social Media Integration</li>
						<li><i class="fa fa-check"></i> Search Engine Optimization</li>
					</ul>
				</div>

			</div>
		</div>
	</section>

	<!-- COMPANY --> 
	<section id="company">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 center-xs">
					<h4>Contact Us</h4>
					<ul>
						<li><i class="fa fa-envelope"</i> <a href="mailto:corey@fivestudios.ca?Subject=Website%20Connection" style="color: white"; target="_top"> corey@fivestudios.ca</a></i></li>
						<li><i class="fa fa-envelope"</i> <a href="mailto:bartekgodzwon@gmail.com?Subject=Website%20Connection" style="color: white"; target="_top"> bartekgodzwon@gmail.com</a></i></li>
						<li><i class="fa fa-map"</i> Greater Toronto Area</i></li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 center-xs">
					<h4>Donate Bitcoin?</h4>
					<ul>
						<li><i class="fa fa-btc"></i> 32mmQvUr6CXPNj6SppcTcqYMtmjd96tfA4</li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 center-xs">

					<h4>Newsletter</h4>
					<p>We're just getting started. Be the first to hear about our upcoming projects.</p>

					<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

						<input type="text" name="email" placeholder="Enter Email" 
						value="<?php echo isset($_POST["email"]) ? $email : ""; ?>">

						<br>

						<button type="submit" name="submit">Submit</button>
					</form>

				</div>
			</div>
		</div>
	</section>


	<!-- FOOTER --> 
	<footer id="main-footer">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p>Copyright &copy; 2017 | FIVE Studios</p>
				</div>
				<div class="col-md-4">
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



</body>

</html>