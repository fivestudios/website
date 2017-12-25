<?php
	// Message Variables
	$msg = "";
	$msgClass = "";

	// Check for Submit
	if(filter_has_var(INPUT_POST, "submit")){
		// Get Form Data
		$name = htmlspecialchars($_POST["name"]);
		$email = htmlspecialchars($_POST["email"]);
		$message = htmlspecialchars($_POST["message"]);

		//Check the required fields 
		if(!empty($email) && !empty($name) && !empty($message)) {
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
				//Failed
				$msg = "Please use a valid email";
			} else {
				//Passed
				// Recipient Email
				$toEmail = "bartekgodzwon@gmail.com";
				$subject = "Contact Request From".": ".$name;
				$body = "<h2>Contact Request</h2>
				<h4>Name</h4><p>".$name."</p>
				<h4>Email</h4><p>".$email."</p>
				<h4>Message</h4><p>".$message."</p>
				";

				//Email Header 
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)) {
					//Email Sent
					$msg = "Your email has been sent";
				} else {
					//Failed 
					$msg = "Your email was not sent";
					$msgClass = "alert-danger";				}
			}
		} else {
			$msg = "Please fill in all fields";
			$msgClass = "alert-danger";
		}
	}
?>


<!DOCTYPE HTML> 

<!-- FIVE Studios -->
<!-- Website Template Design 2 -->
<!-- By: Corey Ervin -->
<!-- Mail: corey@fivestudios.ca -->

<!-- Contact Page -->

<html>
<html lang="en">

<!-- Head --> 

<head>
	<meta charset="UTF-8"/>
	<title>FIVE Studios | Contact</title>
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
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li class="current"><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<!-- SUBHEADER -->
	<section id="subheader">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>Contact Us</h1>
				</div>
			</div>
		</div>
	</section>

	<!-- MAIN PAGE --> 

	<section id="page" class="contact"> 
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php if($msg!= ""): ?>
						<div class = "alert <?php echo $msgClass; ?>"><?php echo $msg; ?>
						</div>
					<?php endif; ?>


					<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
						<div class = "form-group">
							<label>Name</label><br>
							<input type="text" name="name" class="form-control" 
							value="<?php echo isset($_POST["name"]) ? $name : ""; ?>">
						</div>
						<div class = "form-group">
							<label>Email</label><br>
							<input type="text" name="email" class="form-control" 
							value="<?php echo isset($_POST["email"]) ? $email : ""; ?>">
						</div>
						<div class = "form-group">
							<label>Message</label><br>
							<textarea name="message" class="form-control">
							<?php echo isset($_POST["message"]) ? $message : ""; ?>
							</textarea>
						</div>
						<br>
						<button type="submit" name="submit" class="btn btn-primary">Submit
						</button><br>
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