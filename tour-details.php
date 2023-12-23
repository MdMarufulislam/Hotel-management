<?php
 
 // db connection
 include "lib/connection.php";


 // insert query
 if( isset($_POST['u_submit']) ){

  $name   			= $_POST['u_name'];
  $email  			= $_POST['u_email'];
  $phone  			= $_POST['u_phn'];
  $date 			= $_POST['u_date'];
  $no_of_person 	= $_POST['u_n_person'];

  $insertsql = " INSERT INTO  booking ( name, email, phone, date, no_of_person ) 
                VALUES ('$name', '$email', $phone, '$date', $no_of_person)";

                if ( $conn -> query($insertsql) ) {
                  echo "<script>alert('Booking Susscefully');</script>";
                }else{
                  die($conn -> error);
                }
}
 ?>




<!DOCTYPE html>
<html lang="en">

	
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>Tour & Travel Agency Template</title>			
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
						  <li><a href="index.php">Home</a></li>
						  <li><a href="index.php">Service</a></li>					  
						  <li><a href="index.php">Top deals</a></li>
						  <li><a href="index.php">package</a></li>
						  <li><a href="index.php">Gallery</a></li>
						  <li><a href="index.php">Blog</a></li>
						  <li><a href="index.php">Contact</a></li>
						</ul>
					</nav>
				</div> 
			</div><!--- END CONTAINER -->
		</div> 	  
		<!-- END NAVBAR -->
	
		<!-- START TITLE TOP -->
		<section class="page_banner" style="background-image: url(assets/img/bg/section-bg.jpg);  background-size:cover; background-position: center center;">
			<div class="banner_overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1 class="section-blog-title">Tour details</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END TITLE TOP -->

		<!-- START BLOG -->
		<section class="tour_details section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="single_tour_details">
							<div class="tour_slider">
								<div class="tour_slider_img"><img src="assets/img/package/1.jpg" class="img-responsive" alt="image" /></div>
								<div class="tour_slider_img"><img src="assets/img/package/2.jpg" class="img-responsive" alt="image" /></div>
								<div class="tour_slider_img"><img src="assets/img/package/3.jpg" class="img-responsive" alt="image" /></div>
							</div>
							
							<span class="tour_duration">5 days 4 night</span>
							<h2 class="title">creativity is intelligence having fun</h2>
							<p>Lorem ipsum dosectetur adipisicing elit, sed doLorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempo Sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. Seddo Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur a dipisicing elit at leo dignissim congue.</p>
							<p>Lorem ipsum dosectetur adipisicing elit, sed doLorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempo Sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. Seddo Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur a dipisicing elit at leo dignissim congue.</p>
						</div>						
					</div><!--- END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="book_now">
							<h4>Tour Booking</h4>
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
						</div>

						
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END BLOG -->
		
		<!-- START MAP -->
		<div class="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.305821218898!2d-77.02614928526296!3d38.91698695339549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7e8988897f3%3A0xb195e9a53f03b9d9!2sFlorida+Ave+NW%2C+Washington%2C+DC%2C+USA!5e0!3m2!1sen!2sbd!4v1544686373658" width="600" height="450" style="border:0" allowfullscreen></iframe>
		</div>
		<!-- END MAP -->
		
		<!-- START DEALS & DISCOUNT -->
		<section id="deals_discount" class="deals_discount related-deal section-padding">
			<div class="container">		
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Related Deals</h2>
							<span></span>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->					
				<div class="row">	
					<div class="col-md-12">
						<div id="discount-slider" class="owl-carousel">
						
							<div class="single_package"> 					
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/1.jpg" alt="">		
									<a href="#" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">$236</span>
								<div class="package-hover">
									<h5>Orange</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In efficitur diam tellus. Phasellus odio sem scelerisque</p>									
								
								</div>									
							</div><!-- END SINGLE PACKAGE -->
							
							<div class="single_package"> 					
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/2.jpg" alt="">		
									<a href="#" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">$236</span>
								<div class="package-hover">
									<h5>Orange</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In efficitur diam tellus. Phasellus odio sem scelerisque</p>									
								
								</div>									
							</div><!-- END SINGLE PACKAGE -->
							
							<div class="single_package"> 					
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/3.jpg" alt="">		
									<a href="#" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">$236</span>
								<div class="package-hover">
									<h5>Orange</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In efficitur diam tellus. Phasellus odio sem scelerisque</p>									
								
								</div>									
							</div><!-- END SINGLE PACKAGE -->
							
							<div class="single_package"> 					
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/4.jpg" alt="">		
									<a href="#" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">$236</span>
								<div class="package-hover">
									<h5>Orange</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In efficitur diam tellus. Phasellus odio sem scelerisque</p>									
								
								</div>									
							</div><!-- END SINGLE PACKAGE -->
							
							<div class="single_package"> 					
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/5.jpg" alt="">		
									<a href="#" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">$236</span>
								<div class="package-hover">
									<h5>Orange</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In efficitur diam tellus. Phasellus odio sem scelerisque</p>									
								
								</div>									
							</div><!-- END SINGLE PACKAGE -->
							
							<div class="single_package"> 					
								<div class="pack_image">
									<img class="img-fluid" src="assets/img/package/6.jpg" alt="">		
									<a href="#" class="btn-bg">Explore Now</a>
								</div>
								<span class="pack_price">$236</span>
								<div class="package-hover">
									<h5>Orange</h5>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>									
									<span class="time_zone">5 days - 4 night</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In efficitur diam tellus. Phasellus odio sem scelerisque</p>									
								
								</div>									
							</div><!-- END SINGLE PACKAGE -->
						</div>	
					</div>												
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END DEALS & DISCOUNT -->
		
		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">
				<div class="row">					
					<div class="col-lg-12 text-center">
						<div class="foot-logo">
							<h4><a href="#">Voyage</a></h4>
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
			<h2>Your Awesome Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
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
	</body>


</html>