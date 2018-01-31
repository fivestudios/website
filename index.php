<!-- FIVE Studios -->
<!-- Website Template Design 2 -->
<!-- By: Corey Ervin -->
<!-- Mail: corey@fivestudios.ca -->

<!-- Include Files -->

<?php include "phpFiles/company.php"; ?>
<?php include "inc/header.php"; ?>
<?php include "inc/navbar.php"; ?>

<!-- Home Page -->
<title>FIVE Studios | Home</title>

<body>

	<!-- Showcase -->
	<section id="showcase">
		<div class="container">
			<div class="row">
				<div class="col-sm-1 col-md-1">
				</div>
				<div class="col-sm-10 col-md-10 showcase-content">
					<h1 href="" class="typewrite" data-period="1000" style= "color:#000; font-weight:bold; font-size: 60px;" data-type='["This is FIVE Studios.", "We Design.", "We Develop.", "We Create Online Experiences." ]'><span class="wrap"></span>
					</h1>
				</div>
				<div class="col-sm-1 col-md-1">
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


	<!-- APP SECTION --> 
	<section id="apps">
		<div class="container">
			<div class="row">
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"">
					<h2>Custom Web Applications</h2>
					<ul>
						<li><i class="fa fa-calendar"></i>  Available Spring 2018</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Features -->
	<section id="appdev">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h2>Mobile Application Development</h2>
					<p>Available Summer 2018</p>

					<!-- ICON ROW 1 -->

					<div class="row center-xs center-sm center-md center-lg">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<i class="fa fa-apple"></i><br>
							<h4>iOS</h4>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<i class="fa fa-android"></i><br>
							<h4>Android</h4>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer and Company Sections --> 
	<?php include "inc/footer.php"; ?>

    <!-- Annimations -->
    <script type="text/javascript">
    	window.sr = ScrollReveal();

    	sr.reveal(".navbar .container .navbar-header", {
    		duration: 2000,
    		origin:"bottom"
    	});

    	sr.reveal("#features div", {
    		duration: 1000,
    		origin:"top",
    		distance:"300px",
    		viewFactor:0.2
    	});

    	sr.reveal("#apps li", {
    		duration: 2000,
    		origin:"left",
    		distance:"300px",
    		viewFactor:0.2
    	});

    	sr.reveal("#appdev .fa", {
    		duration: 2000,
    		origin:"left",
    		distance:"300px",
    		viewFactor:0.2
    	});

    	var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 1000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    	};

    	TxtType.prototype.tick = function() {
	        var i = this.loopNum % this.toRotate.length;
	        var fullTxt = this.toRotate[i];

	        if (this.isDeleting) {
	        	this.txt = fullTxt.substring(0, this.txt.length - 1);
	        } 
	        else {
	        	this.txt = fullTxt.substring(0, this.txt.length + 1);
	        }

	        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

	        var that = this;
	        var delta = 150 - Math.random() * 100;

	        if (this.isDeleting) { delta /= 2; }

	        if (!this.isDeleting && this.txt === fullTxt) {
	        	delta = this.period;
	        	this.isDeleting = true;
	        } 
	        else if (this.isDeleting && this.txt === '') {
	        	this.isDeleting = false;
	        	this.loopNum++;
	        	delta = 500;
	        }

	        setTimeout(function() {
	        that.tick();
	        }, delta);
	    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    
    </script>
</body>
</html>