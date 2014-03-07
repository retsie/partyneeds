<?php 
	session_start();
	include_once('dao/config.php');
	include_once('dao/productDAO.php');
	$cart = explode("~", $_SESSION['cart']);
	$size = sizeof($cart);
	$total = 0;
 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div>
 		<div>
 			<div>
 				<?php 
 				for($i = 0; $i<$size; $i++){
 					$list = productDAO::getCart($cart[$i]);
 					$total += $list['price'];
 					if($list == false){

 					}else{ ?> 
 						<table>
 							<tr>
 								<td width = 300px><?=  $list['product_name'] ?> </td><td><?= $list['price'] ?> </td>
 							</tr>
 						</table>
 			<?php
 					}
 				}
 			 ?>

 			</div>
 			<div>
 				<table>
 					<tr>
 						<td width = 300px>total: </td><td><?php echo $total; ?></td>
 					</tr>
 				</table>
 			</div>
 			<div>
 				<form method = "POST" action = "reservation.php">
 					date<input type = "text" name = "date">
 					note<input type = "text" name = "note">
 					<input type = "submit" value = "reserve" name = "reserve">
 				</form>
 			</div>

 					
 		</div>
 	</div>
 </body>
 </html>