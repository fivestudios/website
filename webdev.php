<!-- FIVE Studios -->
<!-- Website Template Design 2 -->
<!-- By: Corey Ervin -->
<!-- Mail: corey@fivestudios.ca -->

<!-- Design Process -->

<!-- Header and Backend Include files -->
<?php include "phpFiles/company.php"; ?>
<?php include "inc/header.php"; ?>

<title>FIVE Studios | Design Approach</title>

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
      					<li class="current"><a href="webdev">Design Approach</a></li>
      					<li><a href="ourProcess">Our Process</a></li>
      					<li><a href="pricing">Pricing</a></li>
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

	<!-- Design Approach --> 

	<section id="page" class="approach"> 
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2><span class="primary-text">Design</span> Approach</h2>

					<h4>The website design process is both an art and a science. As a business, to provide consistency and a high overall standard of quality we follow a proven design framework based on the best practices of modern website design.</h4>

					<div class="col-sm-12 col-md-12 typography">
						<h2>Typography</h2>
						<h4>The primary goal of typography is to convey information to website users in the form of arranged letters, words or text. Readability, font types and sizes, positioning and amount of text among other aspects are things that one has to take into consideration when thinking of a website user’s experience when they view a website.</h4>
					</div>

					<div class="col-sm-12 col-md-12 colours">
						<h2>Colours</h2>
						<h4>Colours have a direct effect on the mood, perception, feelings, and interaction of a website user. We understand that choosing, combining, and using the right colors for a specific website product is crucial to your company. It creates an impact and assists in achieving your website goal, whether you wish to acquire potential clients, close a sale or reach marketing goals.</h4>
					</div>

					<div class="col-sm-12 col-md-12 spacing">
						<h2>Spacing</h2>
						<h4>Spacing involves the positioning of website elements within a page. More specifically, we look at the distances between text, images and other elements for a more esthetically pleasing page. Elements that are close together comprise a block pertaining to a single general idea. The proper spacing between website elements provides a logical means of imparting information.</h4>
					</div>

					<div class="col-sm-12 col-md-12 consistency">
						<h2>Consistency</h2>
						<h4>Consistency requires a web design to provide the user with a familiar feeling. Users want a hassle-free experience when using a website, they want something familiar so that they are able to adapt quickly to the website and your product. Internal consistency on the other hand requires all pages in a website to have a consistent visual appeal and consistent functional experience, thereby promoting ease of use and zero confusion.</h4>
					</div>

					<div class="col-sm-12 col-md-12 imagery">
						<h2>Imagery</h2>
						<h4>In our digital world, it is evident we communicate best through imagery; humans are visual by nature. With this in mind, it is imperative to utilize high quality imagery to promote what your company does, as well as, what you sell for it to be compelling for the viewer. We have a keen eye for finding just the image you need to engage your consumer.</h4>
					</div>

					<div class="col-sm-12 col-md-12 mobile-compatibility">
						<h2>Mobile Compatibility</h2>
						<h4>On a global scale, there has been a rising trend of mobile internet use. This rising trend has exceeded the number of desktop internet users. Being able to cater to both markets would give your website a distinct advantage. FIVE Studios provides websites that are compatible with both desktop and mobile devices without the need for separate mobile versions.</h4>
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

    	sr.reveal("#showcaseServices div", {
    		duration: 2000,
    		origin:"top",
    		distance:"300px"
    	});

    	sr.reveal(".typography h4, .typography h2, .colours h2, .colours h4, .spacing h2, .spacing h4, .consistency h2, .consistency h4, .imagery h2, .imagery h4, .mobile-compatibility h2, .mobile-compatibility h4", {
    		duration: 1000,
    		viewFactor:0.2
    	});

    </script>
</body>

</html>