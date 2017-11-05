<?php
session_start();
	include("controller/c_product.php");

	
	if(isset($_SESSION['cart'])){
	$c_product = new c_product();

	$cart = $c_product->ShowCart();
		

	}else{
			//header("location:index.php");	
		echo "<script>alert('Bạn chưa có sản phẩm vào trong giỏ hàng'); window.location='index.php';</script>";
	
	}
	
	
?>