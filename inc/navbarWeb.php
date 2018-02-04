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
				<a class="navbar-brand" href="#"><span class="primary-text">Web</span> Development</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="current"><a href="/">Design Approach</a></li>
					<li><a href="about">Our Process</a></li>
					<li><a href="contact">Pricing</a></li>
					<li><a href="contact">Clone Sites</a></li>
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