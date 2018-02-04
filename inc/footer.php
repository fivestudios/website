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

<!-- COMPANY --> 
	<section id="company">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 center-xs">
					<h4 style="color:#fff;"><span class="primary-text">FIVE</span> Studios</h4>
					<p>FIVE Studios is a software development firm based out of Toronto. We specialize in creating online experiences to bring customers closer to your product or service.</p>

					<p>416-523-3547 | info@fivestudios.ca</p>
				</div>

				<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 center-xs">
					<br>
					<br>
					<hr>
					<div class="sitemap">
						<ul>
							<li><a href=".">Home</a></li>
							<li><a href="about">About</a></li>
							<li><a href="contact">Contact</a></li>
	      				</ul>
      				</div>
				</div>

				<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 center-xs">
					<h4>Sitemap</h4>
					<hr>
					<div class="sitemap">
						<ul>
							<li><a href="webdev">Design Approach</a></li>
	      					<li><a href="ourProcess">Our Process</a></li>
	      					<li><a href="pricing">Pricing</a></li>
	      				</ul>
      				</div>
				</div>

				<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 center-xs">
					<br>
					<br>
					<hr>
					<div class="sitemap">
						<ul>
	      					<li><a href="cloneSites">Clone Sites</a></li>
	      					<li><a href="webApps">Web Apps</a></li>
	      					<li><a href="iOS">iOS & Android</a></li>
	      				</ul>
      				</div>
				</div>


				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 center-xs">

					<h4>Connect</h4>

					<p>Let us reach out to you.</p>

					<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

						<input type="text" name="email" placeholder="Enter Email"
						value="<?php echo isset($_POST["email"]) ? $email : ""; ?>">

						<button type="submit" name="submit">Submit</button>
					</form>
					<br>

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
	</section>


	<!-- FOOTER --> 
	<footer id="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 copyright">
					<p>&copy; 2017 FIVE Studios, All Rights Reserved</p>
				</div>
			</div>
		</div>
	</footer>