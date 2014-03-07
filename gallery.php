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
							<li  style='background-color:blue;'><a href="gallery.php">Gallery</a></li>
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
							<li><a href="aboutus.php">About Us</a></li>
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
									<h2>Image Gallery</h2>
									<p> Description.</p>
									<div class="da-img"><img src="assets/img/1.png" alt="image01" /></div>
								</div>
								<div class="da-slide">
									<h2>Image Gallery</h2>
									<p>Description.</p>
									<div class="da-img"><img src="assets/img/2.png" alt="image01" /></div>
								</div>
								<div class="da-slide">
									<h2>Image Gallery</h2>
									<p> Description.</p>
									<div class="da-img"><img src="assets/img/3.png" alt="image01" /></div>
								</div>
							</div>
						</div> 
					</div>
				<!--end carousel-->

				<!--gallery-->
					<div class='container' style='margin-top:100px'>
						<div class='row' id='gallery'>
							<div class='span6 columns showpictures'>
								<img src="assets/img/image5.jpg"><br><br>
								<img src="assets/img/image1.jpg">

								<!--small picture in gallery-->
								<div class='row'>
									<div class='span2' id='smallimg'>
										<img src="assets/img/image3.jpg">	
									</div>

									<div class='span2' id='smallimg'>
										<img src="assets/img/image3.jpg">
									</div>

									<div class='span2' id='smallimg'>
										<img src="assets/img/image3.jpg">
									</div>
								</div>
								<!--end small picture in gallery-->
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