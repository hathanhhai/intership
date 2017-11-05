<?php
session_start();
if(isset($_SESSION['login'])){
	include('controller/c_product.php');
	
	$c_product = new c_product();
	$show = $c_product->GetAllProduct();
}else{
	header("location:index.php");
	}
?>