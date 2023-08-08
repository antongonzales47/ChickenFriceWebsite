<?php
  session_start(); /* initiator of php code */
?>

<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /> <!-- encoding format -->
<head lang="en">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0"> <!-- auto scaling of screen size -->
  <meta name="google-site-verification" content="n9LztSRclaFRF9SMIxwJM-QgneFpdgI-lCl4oFH1Q84" />
  <title>Chicken Frice</title> <!--tab title -->
  <link href="https://fonts.googleapis.com/css?family=Lobster|Luckiest+Guy|Barlow+Condensed" rel="stylesheet"> <!-- gets fonts from google a.p.i -->
  <!-- gets open source style sheets/fonts from fontawesome.com -->
  <link rel="stylesheet" href="../../use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet"> <!-- calls the bootsrap.min.css file -->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css"> <!-- calls the css file named style.css -->
  <link rel="shortcut icon" type="image/png" href="../assets/img/chicken.ico.ico"/> <!--tab image icon-->


</head>
<body data-base_url="../index.php"> <!-- database url -->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav"> <!-- gets navbar from bootstrap -->
  <a class="navbar-brand js-scroll-trigger d-lg-none" href="#"><img src="../assets/img/pk.php"></a> <!-- pk.php is a error handler -->
  <!--gets navbar toggler button template from the boostrap -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!--gets navbar-collapes template from bootstrap -->
    <ul class="navbar-nav mx-auto"> <!-- automatically adjust navbar -->
      <li class="nav-item active">

        <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="index.php" aria-label="Go to Home">Home <span class="sr-only"></span></a> <!-- this is the home button -->
        </li>

        <a class="nav-link js-scroll-trigger" href="../index.php#about">About <span class="sr-only">(current)</span></a> <!-- goes to about pane -->
      </li>

      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="../index.php#menu">Menu</a> <!-- goes to menu pane -->
      </li>

       <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="../index.php#product_photos">Product Photos</a> <!-- goes to product photos pane -->
      </li>

       <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="../index.php#branches">Branches</a> <!--goes to branches pane -->
      </li>

       <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="../index.php#contact">Contacts</a> <!-- goes to contacts pane -->
      </li>

      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/inegosyopackage/posts/572396940010696" target="_blank" aria-label="Go to Own a Franchise">Own a Franchise</a> <!-- goes to fb page of owning a franchise -->
      </li>

      <li class="nav-item">
        <a class="nav-link btn-ordernow d-none d-lg-block" href="userregistration/login.php" aria-label="Go to Order page">Order Now</a> <!-- goes to login page -->
      </li>
    </ul>
  </div>
</nav>
<main>




<!-- This division gathers the needed images to display at the product photos pane -->
<div class="Chicken branches-container container w-100">

  <h3>Product Photos</h3>

  <div class="row branches-images ">
    <div class="col-lg-4 col-6 w-100 mb-4"> <img src="../assets/img/more/001.jpg" class="w-100" alt="">
    </div>
    
    <div class="col-lg-4 col-6 w-100 mb-4"> <img src="../assets/img/more/002.jpg" class="w-100" alt="">
    </div>
    
    <div class="col-lg-4 col-6 w-100 mb-4"> <img src="../assets/img/more/003.jpg" class="w-100" alt="">
    </div>

    <div class="col-lg-4 col-6  w-100 mb-4"> <img src="../assets/img/more/004.png" class="w-100" alt="">
    </div>

    <div class="col-lg-4 col-6  w-100 mb-4"> <img src="../assets/img/more/005.jpg" class="w-100" alt="">
    </div>

    <div class="col-lg-4 col-6  w-100 mb-4"> <img src="../assets/img/more/006.jpg" class="w-100" alt="">
    </div>

    <div class="col-lg-4 col-6  w-100 mb-4"> <img src="../assets/img/more/007.jpg" class="w-100" alt="">
    </div>

    <div class="col-lg-4 col-6  w-100 mb-4"> <img src="../assets/img/more/008.jpg" class="w-100" alt="">
    </div>

    <div class="col-lg-4 col-6  w-100 mb-4"> <img src="../assets/img/more/009.jpg" class="w-100" alt="">
    </div>
  </div>
  
</div></main>
<footer>

<!--BOTTOM PANE-->

	<div class="footer-container text-center container-fluid">
		<div class="row">
				<div class="col-md-12 col-lg-4 col-12 navigation">
          <h1 class="footer-title " style="font-size: 21px;">Navigation</h1>
					<p><a href="index.php#about" class="js-scroll-trigger" aria-label="Go to About section">About </a></p>
					<p><a href="index.php#menu" class="js-scroll-trigger" aria-label="Go to Menu section">Menu </a></p>
					<p><a href="main/product_photos.php" class="js-scroll-trigger" aria-label="Go to Product Photos">Product Photos </a></p>
					<p><a href="index.php#branches" class="js-scroll-trigger" aria-label="Go to Branches section">Branches </a></p>
				
				</div>
				<div class="col-md-12 col-lg-4 col-12 navigation">
					<h1 class="footer-title " style="font-size: 21px;">Useful Links</h1>
					<p><a href="https://www.facebook.com/ChickenfricePhilippines/" target="_blank" class="js-scroll-trigger" aria-label="Go to Facebook Page">Facebook Page</a></p> <!--goes to fb chicken fries page -->
					<p><a href="https://www.chickenfrice.com/index.html" target="_blank" class="js-scroll-trigger" aria-label="International Page">International Page</a></p> <!--Goes to chicken frice international page-->
			
      <!--more info about chicken frice -->	
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
  
  <!-- These are the JS scripts and Jqueries needed for the styling and animations -->
	<script src="../assets/js/jquery-3.3.1.min.js"></script>
	<script src="../assets/js/jquery.easing.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/scrolling-nav.js"></script>
	<script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>
