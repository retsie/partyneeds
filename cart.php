<?php 
	session_start();
	include_once('dao/config.php');
	include_once('dao/productDAO.php'); 
	$id = $_POST['item'];
	if(!empty($id)){
	$_SESSION['cart'] .= "~".$id;
	echo "<script>alert('Succesfully add to cart');window.location.href='home.php'</script>'";
	}else{
		header('Location: purchase.php');
	}
 ?>