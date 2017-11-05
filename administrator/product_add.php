<?php
session_start();
if(isset($_SESSION['login'])){
	include('controller/c_product.php');
	
	$c_product = new c_product();
	$add = $c_product->ProductInsert();
	}else{
	header("location:index.php");
	}

?>