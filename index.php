<?php
 
 // db connection
 include "lib/connection.php";

$result = null;

 // insert query
 if( isset($_POST['u_submit']) ){

  $name   			= $_POST['u_name'];
  $email  			= $_POST['u_email'];
  $subject  		= $_POST['u_subj'];
  $message 			= $_POST['u_mess'];

  

  $insertsql = " INSERT INTO  contact_us ( name , email , subject , message ) 
                VALUES ('$name', '$email', '$subject', '$message')";

                if ( $conn -> query($insertsql) ) {
                  echo "<script>alert('Message send Susscefully');</script>";
                }else{
                  die($conn -> error);
                }

}
// insert query
 if (isset($_POST['reg_submit'])) {
    $full_name = $_POST['full_name'];
    $user_email = $_POST['user_email'];
    $pass = $_POST['user_password'];
    $cpass = $_POST['conf_password'];

    // Check if passwords match
    if ($pass !== $cpass) {
        echo '<script>alert("Password and Confirm Password do not match!");</script>';
    } else {
        // Additional password requirements can be added here
        if (!preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/', $pass)) {
            echo '<script>alert("Password must contain at least one uppercase letter, one number, and one special character, and be at least 8 characters long!");</script>';
        } else {
            // Add your insert query here using the provided variables
        }
    }
}




 ?>



<!DOCTYPE html>
<html lang="en">

	
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>Tour & Travel Agency</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700,700i" rel="stylesheet"> 
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">	
 	    <!--Flex slider-->
        <link rel="stylesheet" href="assets/css/flexslider.css">
		<!--Meanmenu-->		
        <link rel="stylesheet" href="assets/css/meanmenu.css">	
		 <!--magnific-popup Css-->
       <link rel="stylesheet" href="assets/css/magnific-popup.css">	
		 <!--Slick Css-->
        <link rel="stylesheet" href="assets/css/slick.css">	
		 <!--slick theme Css-->
        <link rel="stylesheet" href="assets/css/slick-theme.css">	
		<!-- component CSS -->	
		<link rel="stylesheet" href="assets/css/aos.css">			
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- popup css -->
		<link rel="stylesheet" href="assets/css/switcher/popup.css">	
		<!-- CSS FOR COLOR SWITCHER -->
		<link rel="stylesheet" href="assets/css/switcher/switcher.css"> 	
		<link rel="stylesheet" href="assets/css/switcher/style1.css" id="colors">			
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"></div>
			</div>
		</div>
		<!-- END PRELOADER -->		

		<!-- START NAVBAR -->  
		<div id="navigation" class="navbar navbar-toggleable-md fixed-top navbar-light bg-faded site-navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"><img src="assets/img/logo-1.png" alt=""></a>          				
				</div>
				
				<div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
					<nav>
						<ul class="navbar-nav">
						  <li><a href="#home">Home</a></li>
						  <li><a href="#service">Service</a></li>					  
						  <li><a href="#top_deals">Top deals</a></li>
						  <li><a href="#special_package">package</a></li>
						  <li class="item"><a href="room.php">Hotels</a></li>
                          <li class="item"><a href="restaurent/food.php">Food</a></li>
						  <li class="item"><a href="ticket-book/pass-dashboard.php">Ticket</a></li>
				          <li class="item"><a href="cart.php">Cart</a></li>
						  <!-- <li><a href="#gallery">Gallery</a></li>
						  <li><a href="#blog">Blog</a></li> -->
						  <li><a href="#contact">Contact</a></li>
						  <!-- Registration Button -->
						  <!-- <li><a class="btn btn-primary" onclick="openPopup('registration')">Register</a></li> -->
						  <!-- Login Button -->
						  <li><a class="btn btn-success" href="pass-login.php">Log Out</a></li>
						</ul>
					</nav>
				</div> 
			</div><!--- END CONTAINER -->
		</div> 	  
		<!-- END NAVBAR -->

		<!-- popup design -->
		<!-- Registration Popup -->
  <div id="registrationPopup" class="overlay">
    <div class="popup">
      <span class="close-btn" onclick="closePopup('registration')">&times;</span>
      <h2>Registration Form</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"  onsubmit="return validateForm()">
								<div class="row justify-content-center">

									<div class="form-group col-md-12">
										<input type="text" class="form-control u_name" id="full_name" name="full_name" placeholder="Full Name" required>
									</div>								
									<div class="form-group col-md-12">
										<input type="email" class="form-control u_email" id="user_email" name="user_email" placeholder="Email" required>
									</div>

									<div class="form-group col-md-12">
										<input type="password" class="form-control u_phn password" id="user_password" name="user_password" placeholder="Enter Passsword" required>
										<i id="togglePassword" class="fa fa-eye-slash fa-lg" aria-hidden="true" style="position: absolute; top: 30%; bottom: 10%; right: 7%; width:8%;"></i>
									</div>
	
									<div class="form-group col-md-12">
										<input type="password" class="form-control u_phn" id="conf_password" name="conf_password" placeholder="Conferm Password" required>
										<i id="conf_togglePassword" class="fa fa-eye-slash fa-lg" aria-hidden="true" style="position: absolute; top: 30%; bottom: 10%; right: 7%; width:8%;"></i>
									</div>
										<span id="passwordMatch" style="color: red;"></span>
									<div class="col-md-12">
										<div class="actions">
											<input type="submit" value="Registration" name="reg_submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
										</div>
									</div>

								</div>
							</form>
      <!-- Add your registration form fields here -->
    </div>
  </div>

  <!-- Login Popup -->
  <div id="loginPopup" class="overlay">
    <div class="popup">
      <span class="close-btn" onclick="closePopup('login')">&times;</span>
      <h2>Login Form</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
								<div class="row">

									<div class="form-group col-md-12">
										<input type="text" class="form-control u_name" id="u_name" name="u_name" placeholder="Name" required>
									</div>

									<div class="form-group col-md-12">
										<input type="email" class="form-control u_email" id="u_email" name="u_email" placeholder="Email" required>
									</div>

									<div class="form-group col-md-12">
										<input type="text" class="form-control u_phn" id="u_phn" name="u_phn" placeholder="Phone" required>
									</div>

									
									<div class="form-group col-md-12">
										<input type="text" class="form-control u_date" id="u_date" name="u_date" placeholder="Date" required>
									</div>


									<div class="form-group col-md-12">
										<input type="text" class="form-control u_n_person" id="u_n_person" name="u_n_person" placeholder="No Of Person" required>
									</div>


									<div class="col-md-12">
										<div class="actions">
											<input type="submit" value="Booking" name="u_submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
										</div>
									</div>

								</div>
							</form>
      <!-- Add your login form fields here -->
    </div>
  </div>
		<!-- popup design -->

		<!-- START HOME -->
		<section id="home" class=" home-slider" >			
			<div class="single_home_slide" style="background-image: url(assets/img/slider/1.jpg);  background-size:cover; background-position: center center;">
				<div class="slide_overlay">
					<div class="container">
						<div class="row">
						  <div class="col-md-12 text-left">
							<div class="hero-text">
								<h1>
									Welcome  <span>To The Travel</span>
								</h1>
								<p>Riverview is the best agency in Bangladesh,As travel opportunities reopen with the growing COVID-19 vaccine and declining cases,<br />interested travelers are booking the next post of travel with friends and family.</p>
								<a href="#special_package" class="btn btn-default btn-home-bg">Booking Now</a>						
							</div>
						  </div><!--- END COL -->			  
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
				</div><!--- END slide -->			
			</div><!--- END slide -->			
			
			<div class="single_home_slide" style="background-image: url(assets/img/slider/2.jpg);  background-size:cover; background-position: center center;">
				<div class="slide_overlay">
					<div class="container">
						<div class="row">
						  <div class="col-md-12 text-left">
							<div class="hero-text">
								<h1>
									Choose  <span>The Best Tour Package</span>
								</h1>
								<p>Riverview provide the best package of tour and travels. <br />the world of travel to offer you the best possible offers for your budget.</p>
								<a href="#special_package" class="btn btn-default btn-home-bg">Booking Now</a>						
							</div>
						  </div><!--- END COL -->			  
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
				</div><!--- END slide -->			
			</div><!--- END slide -->			
			
			<div class="single_home_slide" style="background-image: url(assets/img/slider/3.jpg);  background-size:cover; background-position: center center;">
				<div class="slide_overlay">
					<div class="container">
						<div class="row">
						  <div class="col-md-12 text-left">
							<div class="hero-text">
								<h1>
									Travel  <span>To The Beautiful Place</span>
								</h1>
								<p>Riverview is the easiest way to visit the most spectacular and fascinating places in Bangladesh <br />we will give you the best services.</p>
								<a href="#special_package" class="btn btn-default btn-home-bg">Booking Now</a>						
							</div>
						  </div><!--- END COL -->			  
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
				</div><!--- END slide -->			
			</div><!--- END slide -->		
		</section>
		<!-- END  HOME DESIGN -->

		<!-- START SERVICES -->
		<section id="service" class="our_services">
		   <div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section-title">
							<h2>Riverview services</h2>
							<span></span>
							<p>Riverview is the easiest way to visit the most spectacular and fascinating places in Bangladesh we will give you the best services.You can save any facility as per your wish</p>
						</div>	
					</div>
				</div>
				
				<div class="row text-center">					
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="service">
							<div class="icon"><i class="fa fa-bed"></i></div>
							<h4>Hotel Booking</h4>
							<p>You can booking hotels to our service. We hope that it will be best for you. Find a compare hotel deals.</p>
						
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="service">
							<div class="icon"><i class="fa fa-plane"></i></div>
							<h4>Flight Booking</h4>
							<p>You can get flight to our service. We hope that it will be best for you. Find a flexible flight for your next trip.</p>
						
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="service">
							<div class="icon"><i class="fa fa-ticket"></i></div>
							<h4>Ticket Booking</h4>
							<p>You can booking ticket to our service. We hope that it will be best for you.Compare rental car deals to find the right one.</p>
						
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="service">
							<div class="icon"><i class="fa fa-ship"></i></div>
							<h4>Cruises Booking</h4>
							<p>You can booking cruises to our service. We hope that it will be best for you.Compare rental car deals to find the right one.</p>
						
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="service">
							<div class="icon"><i class="fa fa-train"></i></div>
							<h4>Rail Booking</h4>
							<p>You can booking rail to our service. We hope that it will be best for you.Compare train deals to find the right one.</p>
						
						</div>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="service">
							<div class="icon"><i class="fa fa-home"></i></div>
							<h4>Amazing tour</h4>
							<p>You can enjoy amazing tour to our service. We hope that it will be best for you.Compare tour deals to find the right package.</p>
						
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END SERVICES -->	

		<!-- START WHY CHOOSE US -->	
		<section class="why_choose section-padding gray-section">			
			<div class="container">
				<div class="row">
					<div class="col-md-12" data-aos="fade-up">
						<div class="section-title text-center">
							<h2>why choose us</h2>
							<span></span>
							<p>Our team always active for give the customer services. We provide financial protection for your money when you buy a package holiday.</p>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->
				
				<div class="row text-center">
					<div class="col-md-5">
						<div class="why-choose-img">
							<figure class="big-img">
								<img src="assets/img/why-choose-us/why-choose-us.jpg" alt="Big image">
							</figure>

							<figure class="thumb-1">
								<img src="assets/img/why-choose-us/thumb.jpg" alt="Thumb image">
							</figure>
							
							<figure class="thumb-2">
								<img src="assets/img/why-choose-us/thumb-2.jpg" alt="Thumb image">
							</figure>
						</div>
					</div>				
				
					<div class="col-md-7 mt-40">
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<div class="single-choose">
									<i class="fa fa-star"></i>
									<h4>Handpicked Hotels</h4>
									<p>You can get handpicked hotels to our service. We hope that it will be best for you.</p>
								</div>
							</div><!-- END COL -->
							
							<div class="col-sm-6 col-xs-12">
								<div class="single-choose">
									<i class="fa fa-globe"></i>
									<h4>World Class Service</h4>
									<p>We provide world class service. Every clients is very important for us.</p>
								</div>
							</div><!-- END COL -->
							
							<div class="col-sm-6 col-xs-12">
								<div class="single-choose">
									<i class="fa fa-thumbs-up"></i>
									<h4>Best Price Guarantee</h4>
									<p>You can get best budget travel package to us. So stay with us.</p>
								</div>
							</div><!-- END COL -->
							
							<div class="col-sm-6 col-xs-12">
								<div class="single-choose">
									<i class="fa fa-shield "></i>
									<h4>Secure Travel</h4>
									<p>Our travel agencies provide maximum security for their clients.</p>
								</div>
							</div><!-- END COL -->						
						</div>
					</div>	

				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->			
		</section>
		<!-- END WHY CHOOSE US -->
		
		<!-- START COUNTER -->
		<section class="complete-project-area counter_feature section-padding">
			<div class="container">
				<div class="row ">
					<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
						<div class="single-project-complete">
							<h2 class="counter-num">32652</h2>
							<h3>Happy Customers</h3>
						</div>
					</div><!-- END COL -->
					<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
						<div class="single-project-complete">
							<h2 class="counter-num">1821</h2>
							<h3>Amazing Tours</h3>
						</div>
					</div><!-- END COL -->
					<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
						<div class="single-project-complete">
							<h2 class="counter-num">5660</h2>
							<h3>In Business</h3>
						</div>
					</div><!-- END COL -->
					<div class="col-md-3 col-sm-6 col-xs-12 no-padding">
						<div class="single-project-complete brnone">
							<h2 class="counter-num">11859</h2>
							<h3>Support Cases</h3>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END COUNTER -->

		<!-- START TOP DEALS -->
		<section id="top_deals" class="top_deals section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12" data-aos="fade-up">
						<div class="section-title text-center">
							<h2>Popular Destinations</h2>
							<span></span>
							<p>You can travel, visit and enjoy the most beautiful, picturesque and captivating places in Bangladesh through us.We offer you to go some popular destination with low budget.</p>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->		
				
				<div class="row" data-aos="fade-up">
					<div class="col-sm-4 col-xs-12">
						<div class="single-deal">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/1.jpg" alt=""/>
								<figcaption>
									<h4>KUAKATA</h4>
									<p><a href="tour-details.php">Booking Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
					
					<div class="col-sm-4 col-xs-12">
						<div class="single-deal">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/2.jpg" alt=""/>
								<figcaption>
									<h4>TANGUA HAOR</h4>
									<p><a href="tour-details.php">Booking Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
					
					<div class="col-sm-4 col-xs-12">
						<div class="single-deal">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/3.jpg" alt=""/>
								<figcaption>
									<h4>Cox's Bazar</h4>
									<p><a href="tour-details.php">Booking Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
					
					<div class="col-sm-4 col-xs-12">
						<div class="single-deal">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/4.jpg" alt=""/>
								<figcaption>
									<h4>Bandarban</h4>
									<p><a href="tour-details.php">Booking Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
					
					<div class="col-sm-4 col-xs-12">
						<div class="single-deal">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/5.jpg" alt=""/>
								<figcaption>
									<h4>Kaptai Lake</h4>
									<p><a href="tour-details.php">Booking Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
					
					<div class="col-sm-4 col-xs-12">
						<div class="single-deal">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/6.jpg" alt=""/>
								<figcaption>
									<h4>Bichanakandi</h4>
									<p><a href="tour-details.php">Booking Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
				</div><!--- END ROW -->				
			</div><!--- END CONTAINER-FLUID -->
		</section>
		<!-- END TOP DEALS -->		
		
		<!-- START SPECIAL PACKAGE -->
		<section id="special_package" class="special_package section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Popular Tour Package</h2>
							<span></span>
							<p>Riverview provide the best package of tour.The world of travel to offer you the best possible offers for your budget.</p>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->						
				<div class="row text-left">
					<div class="col-md-12" data-aos="fade-up">
						<div id="package-slider" class="owl-carousel">
							<div class="single_package">
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/1.jpg" alt="">		
									<a href="tour-details.php" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">15,500 tk.</span>
								<div class="package-hover">
									<h5>Cox's Bazar</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Cox's Bazar  is a  tourism centre, fishing port, and  It is famous mostly for its long natural sandy beach.</p>															
								</div>								
							</div><!-- END SINGLE PACKAGE -->
							
							<div class="single_package"> 
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/2.jpg" alt="">		
									<a href="tour-details.php" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">10,500 tk.</span>
								<div class="package-hover">
									<h5>Rangamati</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Rangamati is an interesting place to visit, as there are many places of interest here. The nature here is very beautiful.</p>									
								
								</div>								
							</div><!-- END SINGLE PACKAGE -->
							
							<div class="single_package"> 
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/3.jpg" alt="">		
									<a href="tour-details.php" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">20,500 tk.</span>
								<div class="package-hover">
									<h5>Saintmartin</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Saintmartin is a small island in the northeastern part of the bay of Bengal,the southernmost part of Bangladesh.</p>									
								
								</div>
							</div><!-- END SINGLE PACKAGE -->
							
							<div class="single_package"> 
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/4.jpg" alt="">		
									<a href="tour-details.php" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">20,500 tk.</span>
								<div class="package-hover">
									<h5>Bandarban</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Bandarban is regarded as one of the most exotic tourist attractive travel destinations in Bangladesh.</p>									
								
								</div>								
							</div><!-- END SINGLE PACKAGE -->
							
							<div class="single_package"> 				
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/5.jpg" alt="">		
									<a href="tour-details.php" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">25,500 tk.</span>
								<div class="package-hover">
									<h5>Kaptai Lage</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Kaptai Lake the largest man-made freshwater body in Bangladesh.
									There have freshwater fishes, flood control and agriculture, etc</p>									
								
								</div>									
							</div><!-- END SINGLE PACKAGE -->
							
							<div class="single_package"> 					
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/6.jpg" alt="">		
									<a href="tour-details.php" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">30,500 tk.</span>
								<div class="package-hover">
									<h5>Bichanakandi</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Bisanakandi is situated at Bangladesh-India border in Sylhet. It is a landscape beauty among gardens and hills.</p>									
								
								</div>									
							</div><!-- END SINGLE PACKAGE -->
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END SPECIAL PACKAGE -->
		

		<!-- START GALLERY -->
		<section id="gallery" class="our_gallery section-padding">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" data-aos="fade-up">
						<div class="section-title text-center">
							<h2>Gallery</h2>
							<span></span>
							<p>We have the facility to travel not only to Bangladesh but also to other countries outside Bangladesh.So we suggest that you enjoy your wish.</p>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->					
				<div class="row">
					<div class="col-md-12 padding_0">
						<div id="gallery-slider" class="owl-carousel">
							<div class="single_gallery">
								<img src="assets/img/gallery/1.jpg" class="img-gallery" alt="" />							
								<a class="gallery_enlarge_icon" href="assets/img/gallery/1.jpg" title="Germany"><i class="ti-plus"></i></a>
								<h4>Germany</h4>
							</div><!-- END SINGLE GALLERY -->
							
							<div class="single_gallery">
								<img src="assets/img/gallery/2.jpg" class="img-gallery" alt="" />
								<a class="gallery_enlarge_icon" href="assets/img/gallery/2.jpg" title="London"><i class="ti-plus"></i></a>								
								<h4>London</h4>
							</div><!-- END SINGLE GALLERY -->
							
							<div class="single_gallery">
								<img src="assets/img/gallery/3.jpg" class="img-gallery" alt="" />		
								<a class="gallery_enlarge_icon" href="assets/img/gallery/3.jpg" title="New York"><i class="ti-plus"></i></a>
								<h4>New York</h4>
							</div><!-- END SINGLE GALLERY -->
							
							<div class="single_gallery">
								<img src="assets/img/gallery/4.jpg" class="img-gallery" alt="" />
								<a class="gallery_enlarge_icon" href="assets/img/gallery/4.jpg" title="China"><i class="ti-plus"></i></a>
								<h4>China</h4>
							</div><!-- END SINGLE GALLERY -->	

							<div class="single_gallery">
								<img src="assets/img/gallery/5.jpg" class="img-gallery" alt="" />
								<a class="gallery_enlarge_icon" href="assets/img/gallery/5.jpg" title="Malyasia"><i class="ti-plus"></i></a>
								<h4>Malyasia</h4>
							</div><!-- END SINGLE GALLERY -->
							
							<div class="single_gallery">
								<img src="assets/img/gallery/6.jpg" class="img-gallery" alt="" />
								<a class="gallery_enlarge_icon" href="assets/img/gallery/6.jpg" title="Canada"><i class="ti-plus"></i></a>
								<h4>Canada</h4>
							</div><!-- END SINGLE GALLERY -->	
							
							<div class="single_gallery">
								<img src="assets/img/gallery/7.jpg" class="img-gallery" alt="" />
								<a class="gallery_enlarge_icon" href="assets/img/gallery/7.jpg" title="Japan"><i class="ti-plus"></i></a>
								<h4>Japan</h4>
							</div><!-- END SINGLE GALLERY -->		
							
							<div class="single_gallery">
								<img src="assets/img/gallery/8.jpg" class="img-gallery" alt="" />
								<a class="gallery_enlarge_icon" href="assets/img/gallery/8.jpg" title="India"><i class="ti-plus"></i></a>
								<h4>India</h4>
							</div><!-- END SINGLE GALLERY -->
							
							<div class="single_gallery">
								<img src="assets/img/gallery/9.jpg" class="img-gallery" alt="" />
								<a class="gallery_enlarge_icon" href="assets/img/gallery/9.jpg" title="Bangladesh"><i class="ti-plus"></i></a>
								<h4>Bangladesh</h4>
							</div><!-- END SINGLE GALLERY -->
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END GALLERY -->
		
		<!-- START BLOG -->
		<section id="blog" class="blog_section">						
			<div class="container">
				<div class="row">
					<div class="col-md-12" data-aos="fade-up">
						<div class="section-title text-center wow zoomIn">
							<h2>Our Blog</h2>
							<span></span>
							<p>Here is some travel blog which is written by our clients. And this blogs are published in many famous newspaper.</p>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->	
				
				<div class="row">	
					<div class="col-lg-4 col-md-6" data-aos="fade-up">
						<div class="single_blog">
							<div class="blog_image">
								<img class="blog-photo" alt="Blog Photo" src="assets/img/blog/1.jpg"/>
								<span class="post_date"><a href="#">10 Dec, 2019</a></span>
							</div>
							<div class="blog-text">	
								<h4><a href="#">Bichanakandi(Sylhet)</a></h4>
								 <p>Bisanakandi is a landscape beauty among gardens and hills.Along the stream flowing from high up in the mountain come huge boulders that are deposited and mined in Bisnakandi.</p>								 
							</div>							
						</div>
					</div><!--- END COL -->
					
					<div class="col-lg-4 col-md-6" data-aos="fade-up">
						<div class="single_blog">							
							<div class="blog_image">
								<img class="blog-photo" alt="Blog Photo" src="assets/img/blog/2.jpg"/>
								<span class="post_date"><a href="#">29 Sep, 2019</a></span>
							</div>
							<div class="blog-text">	
								<h4><a href="#">Sajek(Rangamati)</a></h4>
								 <p>Sajek Valley is an emerging tourist spot in Bangladesh situated among the hills of the kasalong range of mountains in Rangamati District. sajek valley is known as the Queen of hills & Roof of Rangamati.</p>
								 
							</div>							
						</div>
					</div><!--- END COL -->
					
					<div class="col-lg-4 col-md-6" data-aos="fade-up">
						<div class="single_blog">							
							<div class="blog_image">
								<img class="blog-photo" alt="Blog Photo" src="assets/img/blog/3.jpg"/>
								<span class="post_date"><a href="#">26 Aug, 2019</a></span>
							</div>
							<div class="blog-text">	
								<h4><a href="#">Volagonj Sada Pathor(Sylhet)</a></h4>
								 <p>Bholaganj is the largest stone quarry in Bangladesh and filled with hills, rivers, waterfalls and quarries.This place is situated in the border area of Bangladesh and India.This is most popular place.</p>
								 
							</div>							
						</div>
					</div><!--- END COL -->
			
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section> 
		<!-- END BLOG -->
		
		<!-- START TESTIMONIAL -->
		<section class="testimonial-demo section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center" data-aos="fade-up">
						<div class="section-title">
							<h2>What our Visitor say</h2>
							<span></span>
							<p>We shared with you some of the things that some visitors from our agency have said about us</p>
						</div>	
					</div><!-- END COL -->
				</div><!-- END ROW -->	
				
				<div class="row">
					<div class="col-md-9 d-block mx-auto text-left">
						<div id="testimonial-slider">
						
							<div class="testimonial">
								<div class="row">
									<div class="col-lg-8 col-md-12 col-sm-12">
										<div class="testimonial-content">
											<h3 class="title">Rohan Khan</h3>
											<span class="post">Dhaka</span>
											<div class="description">
												We have just returned from a trip to the Sajek Vally that was booked with the help of Travelbd and i couldn't speak more highly of them. Their service was fantastic and everything about the trip was amazing and very well organised.
											</div>
											<div class="test-rating">
												<ul class="list-inline">
													<li class="list-inline-item">								
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
													</li>
												</ul>
											</div>									
										</div>
									</div>
									
									<div class="col-lg-4 hidden-md-down hidden-sm-down">
										<img src="assets/img/review/1.png" alt="review image">
									</div>
								</div>								
							</div><!-- END single Testimonials -->	
							
							<div class="testimonial">
								<div class="row">
									<div class="col-lg-8 col-md-12 col-sm-12">
										<div class="testimonial-content">
											<h3 class="title">Shohan</h3>
											<span class="post">Barishal</span>
											<div class="description">
												Booking a holiday was easy, Travelbd took care of everything including things i hadn't even thought about. i travel all the time and always book with them. They look after me, get me a great price and make sure i have fun, their escorted tours are the best time, they always go that extra mile. <br>Thanks, Travelbd.
											</div>
											<div class="test-rating">
												<ul class="list-inline">
													<li class="list-inline-item">								
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
													</li>
												</ul>
											</div>									
										</div>
									</div>
									
									<div class="col-lg-4 hidden-md-down hidden-sm-down">
										<img src="assets/img/review/2.png" alt="review image">
									</div>
								</div>								
							</div><!-- END single Testimonials -->	
							
							<div class="testimonial">
								<div class="row">
									<div class="col-lg-8 col-md-12 col-sm-12">
										<div class="testimonial-content">
											<h3 class="title">Siam Mahmud</h3>
											<span class="post">Comilla</span>
											<div class="description">
												Booking a holiday was easy, Travelbd took care of everything including things i hadn't even thought about. i travel all the time and always book with them. They look after me, get me a great price and make sure i have fun, their escorted tours are the best time, they always go that extra mile. <br>Thanks, Travelbd.
											</div>
											<div class="test-rating">
												<ul class="list-inline">
													<li class="list-inline-item">								
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
													</li>
												</ul>
											</div>									
										</div>
									</div>
									
									<div class="col-lg-4 hidden-md-down hidden-sm-down">
										<img src="assets/img/review/3.png" alt="review image">
									</div>
								</div>								
							</div><!-- END single Testimonials -->	
							
							<div class="testimonial">
								<div class="row">
									<div class="col-lg-8 col-md-12 col-sm-12">
										<div class="testimonial-content">
											<h3 class="title">Sharif Islam</h3>
											<span class="post">Gopalganj</span>
											<div class="description">
												Booking a holiday was easy, Travelbd took care of everything including things i hadn't even thought about. i travel all the time and always book with them. They look after me, get me a great price and make sure i have fun, their escorted tours are the best time, they always go that extra mile. <br>Thanks, Travelbd.
											</div>
											<div class="test-rating">
												<ul class="list-inline">
													<li class="list-inline-item">								
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
														<i class="fa fa-star"></i>									
													</li>
												</ul>
											</div>									
										</div>
									</div>
									
									<div class="col-lg-4 hidden-md-down hidden-sm-down">
										<img src="assets/img/review/4.png" alt="review image">
									</div>
								</div>								
							</div><!-- END single Testimonials -->
		 
				
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END TESTIMONIAL -->

		<!-- START COMPANY PARTNER LOGO  -->
		<!-- <div data-stellar-background-ratio="0.3" class="partner-logo" style="background-image: url(assets/img/bg/partner-bg.jpg);  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
					<div class="col-md-12" data-aos="fade-up">
						<div class="partner">
							<a href="#"><img src="assets/img/partner/1.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/2.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/3.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/4.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/5.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/6.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/1.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/2.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/3.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/4.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/5.jpg" alt="image"></a>
							<a href="#"><img src="assets/img/partner/6.jpg" alt="image"></a>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- END COMPANY PARTNER LOGO -->
		
		<!-- START CONTACT FORM-->
		<section id="contact" class="contact_area section-padding">
			<div class="container">			
				<div class="row">
					<div class="col-md-12 text-center" data-aos="fade-up">
						<div class="section-title">
							<h2>Contact Us</h2>
							<span></span>
							<p>Get in touch with us today. Or Let Travelbd know your future travel plans so that we can make sure you're one of the first to know what's on offer when the time comes.</p>
						</div>	
					</div><!-- END COL -->
				</div><!-- END ROW -->	
				
				<div class="row">
					<div class="col-lg-9 col-sm-12 col-xs-12 d-block mx-auto">
						<div class="contact_address text-center">			
							<div class="row">	
								<div class="col-lg-4 col-md-4">
									<div class="single-contact-info">
										<i class="fa fa-map"></i>
										<p>34-road,7-blog <br />1045-Dhaka</p>
									</div>
								</div><!-- END COL -->		

								<div class="col-lg-4 col-md-4">
									<div class="single-contact-info">
										<i class="fa fa-phone"></i>
										<p>
											(+1) 700-300-3800<br />
											(+1) 711-311-3811
										</p>
									</div>
								</div><!-- END COL -->	
								
								
								<div class="col-lg-4 col-md-4">
									<div class="single-contact-info">
										<i class="fa fa-envelope"></i>
										<p>
											Info@example.com<br />
											admin@example.com
										</p>
									</div>
								</div><!-- END COL -->	
												
							</div>
						</div>
					</div><!-- END COL -->	
					
					<div class="col-lg-8 col-sm-12 col-xs-12 d-block mx-auto" data-aos="fade-up">
						<div class="contact">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
								<div class="row">

									<div class="form-group col-md-6">
										<input type="text" class="form-control u_name" id="u_name" name="u_name" placeholder="Enter Your full name..." required>
									</div>

									<div class="form-group col-md-6">
										<input type="email" class="form-control u_email" id="u_email" name="u_email" placeholder="Enter Your Email..." required>
									</div>

									<div class="form-group col-md-12">
										<input type="text" class="form-control u_subj" id="u_subj" name="u_subj" placeholder="Subject.." required>
									</div>

									<div class="form-group col-md-12">
										<textarea rows="6" name="u_mess" class="form-control u_mess" id="u_mess" placeholder="Your Message" required="required"></textarea>
									</div>

									<div class="col-md-12">
										<div class="actions text-center">
											<input type="submit" value="Send message" name="u_submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
										</div>
									</div>

								</div>
							</form>
						</div>
					</div><!-- END COL -->
				</div><!--- END ROW -->				
			</div><!--- END CONTAINER -->	
		</section>
		<!-- END CONTACT FORM -->	
		
		<!-- START MAP -->
		<div class="google-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.2828900852955!2d90.27195456033371!3d23.950434767938184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e876ff2e9631%3A0x8565fee980bc172d!2sDhaka%20EPZ%20Bus%20Stand!5e0!3m2!1sen!2sbd!4v1625584633178!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen></iframe>
		</div>
		<!-- END MAP -->
		
		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">
				<div class="row">					
					<div class="col-lg-12 text-center">
						<div class="foot-logo">
							<h4><a href="#">RiverView</a></h4>
						</div>
						<div class="footer-menu">	
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Term</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
						<div class="copyright">
							<p>Copyright &copy; 2019 |  All Rights Reserved.</p>
						</div><!--- END FOOTER COPYRIGHT -->
					</div><!--- END COL -->			
				</div><!--- END ROW -->				
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->		

		<!-- STYLE SWITCHER -->
		 <div id="style-switcher">
			<h2>Your Awesome Color<a href="#"><i class="fa fa-compass fa-spin"></i></a></h2>
			<div>
			  <ul class="colors" id="color1">
				<li><a href="#" class="style1"></a></li>
				<li><a href="#" class="style2"></a></li>
				<li><a href="#" class="style3"></a></li>
				<li><a href="#" class="style4"></a></li>
				<li><a href="#" class="style5"></a></li>
				<li><a href="#" class="style6"></a></li>
				<li><a href="#" class="style7"></a></li>
				<li><a href="#" class="style8"></a></li>
				<li><a href="#" class="style9"></a></li>
				<li><a href="#" class="style10"></a></li>
				<li><a href="#" class="style11"></a></li>
				<li><a href="#" class="style12"></a></li>
			  </ul>
			</div>
		 </div>  
		 <!-- END OF STYLE SWITCHER -->	

		 
		 
		<!-- Latest jQuery -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- modernizer JS -->		
		<script src="assets/js/modernizr-2.8.3.min.js"></script>	
		<!-- jquery nav JS -->		
		<script src="assets/js/jquery.nav.js"></script>
		<!-- Meanmenu JS -->		
		<script src="assets/js/meanmenu.js"></script>
		<!-- jquery smooth-scroll JS -->
		<script src="assets/js/smooth-scroll.js"></script>																	
		<!-- owl-carousel min js  -->
		<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
		<!-- stellar js -->
		<script src="assets/js/jquery.stellar.min.js"></script>
		<!-- countTo js -->
		<script src="assets/js/jquery.inview.min.js"></script>	
		<!-- magnific-popup js -->	
		<script src="assets/js/jquery.magnific-popup.js"></script>	
		<!-- jquery flexslider min js -->
		<script src="assets/js/jquery.flexslider-min.js"></script>				
		<!-- scrolltopcontrol js -->
		<script src="assets/js/scrolltopcontrol.js"></script>	
		<!-- slick js -->			
		<script src="assets/js/slick.js"></script>									
		<!-- form-contact js -->
		<script src="assets/js/form-contact.js"></script>	
		<!-- aos js -->
		<script src="assets/js/aos.js"></script>
		<!-- switcher js -->
		<script src="assets/js/switcher.js"></script>			

		<!-- scripts js -->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/popup.js"></script>
    </body>

</html>