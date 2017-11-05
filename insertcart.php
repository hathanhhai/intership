<?php
session_start();
	include("controller/c_product.php");

	if(!isset($_GET['id'])){
		header("location:index.php");
		}
		if(isset($_GET['id']) && !empty($_GET['id'])){
			header("location:detail.php?id".$_GET['id']);
			$id= $_GET['id'];
		}
		
	
	$c_product = new c_product();

	$cart = $c_product->Cart($id);
	
					

	
?>