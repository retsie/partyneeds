<?php 
	session_start();
	include_once('dao/config.php');
	include_once('dao/productDAO.php');
	$i=$_REQUEST['id'];
	$service = $_SESSION['service'];
	$product = ProductDAO::getProduct($i, $service);
 ?>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
 </head>
 <body>
 	<div class='container' style='margin-top:100px'>
						<div class='row' id='gallery'>
								<div class='row productframe'>
									<div class='span2' id='foodsimg'>
										<img src="assets/img/image3.jpg">
										<p>
											<b><?php echo $_SESSION['cart']; ?></b>
										</p>
										<?php 
										
										echo $product['product_name']."<br>";
										echo $product['service']."<br>";
										echo $product['description']."<br>";
										echo $product['price']." peso";
										 ?>
										
									</div>
									<div>
										<form method = "POST" action = "cart.php">
											<input type = "hidden" value = "<?php echo $i; ?>" name = "item">
											<button>add to cart</button>
										</form>
									</div>
							</div>
 </body>
 </html>