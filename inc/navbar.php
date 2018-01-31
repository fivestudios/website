<!-- Responsive Navbar from getbootstrap.com -->

	<nav class="navbar navbar-default transparent navbar-fixed-top">
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
					<li class="current"><a href="/">Home</a></li>
					<li><a href="about">About</a></li>

					<li>
   					<button class="btn btn-link navbar-btn dropdown-toggle" type="button" data-toggle="dropdown"><a>WEB</a>
    				</button>
    				<ul class="dropdown-menu">
      					<li><a href="webdev">Design Approach</a></li>
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

<!-- get current URL path and assign 'current' class --> 
<script type="text/javascript">

	$(document).ready(function() {

		// Spilts filepath into an array
		var pathname = window.location.pathname.split( '/' );

		// Removes current class if not on homepage
		if (pathname != ",") {
			$(".nav").find(".current").removeClass("current");
		}

		// Grabs last element of array, and assigns current class for that page
		$('.nav > li > a[href="'+pathname.slice(-1)[0]+'"]').parent().addClass('current');

		$('.nav > li > ul > li > a[href="'+pathname.slice(-1)[0]+'"]').parent().addClass('current');
	})
</script>




