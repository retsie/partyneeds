<?php 
	session_start();
	include_once('dao/config.php');
	include_once('dao/productDAO.php');
	$cart = explode("~", $_SESSION['cart']);
	$size = sizeof($cart);
	$date = mysql_real_escape_string($_POST['date']);
	$note = mysql_real_escape_string($_POST['note']);
	if(!empty($date)&&(!empty($note))){
		for($i = 0; $i<$size; $i++){
			$list = productDAO::getCart($cart[$i]);
			$id = $cart[$i];
			$service = $list['service'];
				productDAO::reserve($service, $date, $note, $id);
		}
		/*header('Location: home.php');*/
	}else{
		echo "<script>alert('filled up all fields');window.location.href='viewcart.php'</script>'";
	}
 ?>