<?php
	include('controller/c_cart.php');
	session_start();
if(isset($_SESSION['login'])){
	$c_cart = new c_cart();
	$show = $c_cart->ShowListCart();
	}else{
	header("location:index.php");
	}
?>