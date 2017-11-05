<?php
session_start();
	include("controller/c_product.php");
	if(!isset($_GET['id'])){
		header("location:index.php");
		}
	$c_product = new c_product();
	$show = $c_product->DetailProduct($_GET['id']);
?>