<?php
session_start();
?>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
	<meta name="google-site-verification" content="n9LztSRclaFRF9SMIxwJM-QgneFpdgI-lCl4oFH1Q84" />
	<title>Chicken Frice</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster|Luckiest+Guy|Barlow+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="../use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="shortcut icon" type="image/png" href="assets/img/chicken.ico.ico" />


</head>

<body data-base_url="index.php">

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
		<a class="navbar-brand js-scroll-trigger d-lg-none" href="#" aria-label="Home"><img src="" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				
				<li class="nav-item active">
					<a class="nav-link js-scroll-trigger" href="index.php" aria-label="Go to Home">Home <span class="sr-only"></span></a>
				</li>

				<li class="nav-item active">
					<a class="nav-link js-scroll-trigger" href="#about" aria-label="Go to About section">About <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#menu" aria-label="Go to Menu section">Menu</a>
				</li>

				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="main/product_photos.php" aria-label="Go to Product Photos">Product Photos</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#branches" aria-label="Go to Branches section">Branches</a>
				</li>

				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#contact" aria-label="Go to Contacts section">Contacts</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="https://www.facebook.com/inegosyopackage/posts/572396940010696" target="_blank" aria-label="Go to Own a Franchise">Own a Franchise</a>
				</li>

				<li class="nav-item">
					<a class="nav-link btn-ordernow d-none d-lg-block" href="login.php" aria-label="Go to Order page">Order Now</a>
				</li>
			</ul>
		</div>
	</nav>
	<main>


		<div class="home">
			<img src="assets/img/chickenfrice-banner.jpg" class="w-100" alt="Chicken Frice Banner">
		</div>

		<!------------------------------ ABOUT ------------------------------>
		<div class="Chicken about-wrapper about-container container-fluid" id="about">
			<h3>About Us</h3>
			<div class="row">
				<div class="col-4 item d-none d-md-block" >
					<img src="assets/img/ck.png" alt="Chicken Frice">
				</div>

				<div class="col-12 col-md-4 ">
					<div class="info-about">
						<p>CHICKENFRICE is comprised of an international team of partners from Australia, Malaysia, New Zealand, Philippines, Singapore, US and UK that operates the following businesses in Australia, New Zealand, Philippines, and the USA.
						<br> 
						<br>
							Experience the best expertise brought about by the global experience of the people behind the Chickenfrice business. 
							Learn world-class business strategies from high caliber professionals and glow as an elite businessman by joining the Chickenfrice family. 
						</p>
					</div>
				</div>

				<div class="col-4 item d-none d-md-block" style="padding-top: 62px;">
					<div>
						<img src="assets/img/ck.png" alt="Chicken Frice">
						
					</div>
				</div>

			</div>
		</div>


		<!------------------------------ PRODUCTS ------------------------------>

		<div class="Chicken products-wrapper w-100" id="menu">
			<h3>Menu</h3>
			<div class="info-products w-100">
				<p> Explore our delicious products and its prices</p>

				<div class="product-container">
					<div class="row">
						<div class="col-12 menu text-center">
							<img src="assets/img/ck1.png" alt="Chicken Frice Menu">
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-------------------------------------   BRANCHES ---------------------------------->
		<div class="Chicken branches-wrapper" id="branches">
			<h3>Branches</h3>
			<div class="branches-container container">
				<div class="row">
					<div class="col-lg-6 col-12 d-flex align-items-center">
						<div class="branches-info" id="demo">
							<div class="branches-info-corner">
								<p>Chicken Frice has multiple branches nationwide and still counting. With the company's vision of providing quality chicken products at an affordable price, Chicken Frice has certainly captured the hearts of our fellow Filipinos.
									<br> <br>
									<a href="main/branches.php" aria-label="Go to Branches page"> Explore all branches
									</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-12">
						<img src="assets/img/philmap.png" class="w-100 map" alt="philippine map">
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<!--------------------------------------- CONTACTS ---------------------------------------->

		<div class="Chicken" contact-wrapper" id="contact">
			<h3>Contact Us</h3>
			<div class="info-products">
				<p> Feel free to leave us a comment</p>
			</div>

			<br />

			<div class="container">
				<div class="inner contact">
					<!-- Form Area -->
					<div class="contact-form">
						<!-- Form -->
						<form id="contact-us" method="post" action="mailto:1820857@ub.edu.ph" class="row" enctype="text/plain" >
							<!-- Left Inputs -->
							<div class="col-12  col-lg-6 wow animated slideInLeft" data-wow-delay=".5s">
								<!-- Name -->
								<input type="text" name="name" id="name" required="required" class="form" placeholder="Name" value="" />
								<!-- Email -->
								<input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" value=""/>
								<!-- Subject -->
								<input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" value=""/>
							</div><!-- End Left Inputs -->
							<!-- Right Inputs -->
							<div class="col-12 col-lg-6 wow animated slideInRight" data-wow-delay=".5s">
								<!-- Message -->
								<textarea name="message" id="message" class="form textarea" placeholder="Message" value=""></textarea>
							</div><!-- End Right Inputs -->
							<!-- Bottom Submit -->
							<div class="relative fullwidth col-12 col-lg-12">
								<!-- Send Button -->
								<button type="submit" id="submit" class="form-btn semibold">Send Message</button>
								
							</div><!-- End Bottom Submit -->			
							<!-- Clear -->
							<div class="clear"></div>
						</form>

						<!-- Your Mail Message -->
						<div class="mail-message-area">
							<!-- Message -->
							<div class="alert gray-bg mail-message not-visible-message">
								<strong>Thank You !</strong> Your email has been delivered.
							</div>
						</div>

					</div><!-- End Contact Form Area -->
				</div><!-- End Inner -->

			</div>
		</div>

		<div class="footer-container text-center container-fluid">
			<div class="row">
				<div class="col-md-12 col-lg-4 col-12 navigation">
					<h1 class="footer-title " style="font-size: 21px;">Navigation</h1>
					<p><a href="index.php#about" class="js-scroll-trigger" aria-label="Go to About section">About </a></p>
					<p><a href="index.php#menu" class="js-scroll-trigger" aria-label="Go to Menu section">Menu </a></p>
					<p><a href="main/product_photos.php" class="js-scroll-trigger" aria-label="Go to Franchise section">Product Photos </a></p>
					<p><a href="index.php#branches" class="js-scroll-trigger" aria-label="Go to Branches section">Branches </a></p>
				</div>
				<div class="col-md-12 col-lg-4 col-12 navigation">
					<h1 class="footer-title " style="font-size: 21px;">Useful Links</h1>
					<p><a href="https://www.facebook.com/ChickenfricePhilippines/" target="_blank" class="js-scroll-trigger" aria-label="Go to Facebook Page">Facebook Page</a></p>
					<p><a href="https://www.chickenfrice.com/index.html" target="_blank" class="js-scroll-trigger" aria-label="International Page">International Page</a></p>
					<p><a href="index.php#contact" class="js-scroll-trigger" aria-label="Go to Contact Us">Contact Us</a></p>
				</div>
				<div class="col-md-12 col-lg-4 col-12 ">
					<h1 class="footer-title JC" style="font-size: 21px;">Contact Us</h1>
					<p> <i class="fas fa-map-marker-alt"></i>
						Brgy. Balintawak, Lipa City, <br> Batangas, Philippines</p>
					<p><i class="fas fa-phone"></i> &nbsp
						+63 915 103 5369</p>
					<p><i class="fas fa-envelope"></i>&nbsp customersupport@chickenfricefranchiseinc.com</p>
				</div>
			</div>

			<div class="copyright text-center">
				<p><strong>ChickenFrice Co.</strong> © Copyright 2021</p>
			</div>
		</div>

	</footer>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/jquery.easing.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/scrolling-nav.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
