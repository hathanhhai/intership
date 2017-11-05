<?php
session_start();
if(isset($_SESSION['login'])){
	include('controller/c_cart.php');
	
	$c_cart = new c_cart();
	$show = $c_cart->ShowListCartSent();
}else{
	header("location:index.php");
	}
?>