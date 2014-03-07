<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="assets/css/design1.css">
	<!--slider files -->
	<link rel="stylesheet" type="text/css" href="assets/css/slider.css" />
	<script type="text/javascript" src="assets/js/modernizr.custom.28468.js"></script>
	<!--end of slider-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
</head>
<body>

	<div class='container'>
		<div class='row'>
			<div id='image'style="background-image:url('assets/img/image.jpg')">
			</div>

			<!--content-->
			<div class='content'>
				<!--navigation-->
				<div id='navigation'>
						<ul>
							<li><a href="home.php">Home</a></li>
						</ul>

						<ul>
							<li><a href="gallery.php">Gallery</a></li>
						</ul>

						<ul>
							<li style='z-index:1000000'><a href="#">Services</a>
								<ul>
									<li><a href="foods.php">Foods</a></li>
									<li><a href="beverages.php">Beverages</a></li>
									<li><a href="souvenir.php">Souvenir</a></li>
									<li><a href="tac.php">Tables and Chairs</a></li>
									<li><a href="aav.php">Audio and Videos</a></li>
								</ul>
							</li>
						</ul>

						<ul>
							<li style='z-index:1000000'><a href="#">Entertainment</a>
								<ul>
									<li><a href="bands.php">Bands</a></li>
								</ul>
							</li>
						</ul>

						<ul>
							<li style='background-color:blue;'><a href="aboutus.php">About Us</a></li>
						</ul>

						<ul>
							<li><a href="contactus.php">Contact Us</a></li>
						</ul>
					</div><!--end navigation-->

					<!--carousel-->
					<div class='row'>
						<div class='carousel'>
							<div id="da-slider" class="da-slider">
								<div class="da-slide">
									<h2>Vision</h2>
									<p> To be a world class chain of resorts and hotels which are choice destinations of recreational, leisure, and business travelers.</p>
									<div class="da-img"><img src="assets/img/1.png" alt="image01" /></div>
								</div>
								
								<div class="da-slide">
									<h2>Mission</h2>
									<p>To provide a caring and delightful hospitality environment and service to all our recreational, leisure and business clientele.</p>
									<div class="da-img"><img src="assets/img/2.png" alt="image01" /></div>
								</div>
							</div>
						</div> 
					</div>
				<!--end carousel-->

				<!--gallery-->
					<div class='container' style='margin-top:100px'>
						<div class='row' id='gallery'>
							<div class='span6 columns aboutuscontent'>
								<img src="assets/img/image5.jpg">

								<table id='table'>
									<thead>
										<th>Party Needs</th>
										<th>Office Telephone No.</th>
										<th>Office Fax No.</th>
									</thead>

									<tbody>
										<tr>
											<td>Addstreet Pampanga</td>
											<td>(+63)942200287</td>
											<td>(02) 286-6139</td>
										</tr>
									</tbody>
								</table>

								<br>

									<p>
									<b>Corporate Principles</b> In fulfilling this vision and mission, we fully commit to the following principles: 
									</p>

									<ol>
										<li>Because they are our reason for being, we should always accord our Clients with the highest attention in order to meet their needs and expectations.</li>
										<li>Our most valued assets are our Staff so much so that we ensure that they are properly trained and equipped to perform their duties.</li>
										<li> We honor the trust placed upon us by our Investors so that we must endeavor to maintain the viability and financial growth of the institution.</li>
										<li>As we regard our Suppliers as business partners, we closely collaborate with them to continually improve on our products and services.</li>
										<li>We consider our Competitors as drivers to compel us to continually improve on our standard operating practices and bring us always to the next higher plain of customer service.</li>
										<li>Our Community is the environment and the society we operate in, and that we have an interest in contributing to its economic and social developments.</li>
									</ol>


							</div>

							<div class='span3 columns reservationpicture'>
								<div id='pictureingallery'>
									<!--reserve image dapat to nakay kuya jeff-->
									<a href="#"><img src="assets/img/3.png"></a>
								</div>
							</div>
						</div>
					</div>
				<!--end gallery-->
			</div><!--end content-->
		</div>
	</div>

	

<script src="assets/js/carousel.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery.cslider.js"></script>
<script type="text/javascript">
	$(function() {
	
		$('#da-slider').cslider({
			autoplay	: true,
			bgincrement	: 450
		});
	
	});
</script>

</body>
</html>