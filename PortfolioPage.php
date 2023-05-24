<?php
// Include the necessary files and instantiate the Portfolio class
require_once 'partials/nav.php';

$Portfolio = new Portfolio();

// Retrieve the portfolio data
$portfolio = $Portfolio->get_portfolio();
?>
<?php include 'inc/config.php'; ?>

<main>		
<!-- animate -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- magnific pop up -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- custom -->
		<link rel="stylesheet" href="css/style.css">    

<!-- start portfolio -->
		<div id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="wow bounce">Recent Projects</h2>
							<div class="iso-section wow fadeIn" data-wow-delay="0.6s">

								<ul class="filter-wrapper clearfix">
                   					 <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                   					 <li><a href="#" class="opc-main-bg" data-filter=".graphic">Graphic</a></li>
                   					 <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Photoshop</a></li>
                    				<li><a href="#" class="opc-main-bg" data-filter=".wallpaper">Wallpaper</a></li>
               					 </ul>

               				 	<div class="iso-box-section">
               				 		<div class="iso-box-wrapper col4-iso-box portfolio-container">

               				 			<div class="iso-box graphic photoshop wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img1.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="images/portfolio-img1.jpg" class="fa fa-search portfolio-popup"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4>Project title</h4>
               				 							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box graphic wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img2.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="images/portfolio-img2.jpg" class="fa fa-search portfolio-popup"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4>Project title</h4>
               				 							<p>lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img3.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="images/portfolio-img3.jpg" class="fa fa-search portfolio-popup"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4>Project title</h4>
               				 							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box graphic col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src=url(\'' . $portfolio[$i]->img . '\');">' . $portfolio[$i]->name . 'class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="images/portfolio-img4.jpg" class="fa fa-search portfolio-popup"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4>Project title</h4>
               				 							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img5.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="images/portfolio-img5.jpg" class="fa fa-search portfolio-popup"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4>Project title</h4>
               				 							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box graphic photoshop col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img6.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="images/portfolio-img6.jpg" class="fa fa-search portfolio-popup"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4>Project title</h4>
               				 							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
               				 						</div>
               				 				</div>
               				 			</div>

											<div class="row">
                    <?php
                    // Display the portfolio items
                    for ($i = 0; $i < count($portfolio); $i++) {
                        echo '<div class="col-md-3 col-sm-6 portfolio text-white textcenter" style="background-image: url(\'' . $portfolio[$i]->img . '\');">';
                        echo $portfolio[$i]->name;
                        echo '</div>';
                    }
                    ?>

               				 		</div>
               				 	</div>

							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end portfolio -->
</main>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
		<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- isotope -->
		<script src="js/isotope.js"></script>
		<!-- images loaded -->
   		<script src="js/imagesloaded.min.js"></script>
   		<!-- wow -->
		<script src="js/wow.min.js"></script>
		<!-- smoothScroll -->
		<script src="js/smoothscroll.js"></script>
		<!-- jquery flexslider -->
		<script src="js/jquery.flexslider.js"></script>
		<!-- Magnific Pop up -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>
<?php include 'partials/footer.php'; ?>