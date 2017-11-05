<?php

	include('controller/c_product.php');
session_start();
if(isset($_SESSION['login'])){	
	$id = $_GET['id'];
	if(!isset($id)){
		header("location:product_list.php");
		}
	$c_product = new c_product();
	$edit = $c_product->UpdateProduct($id);
	
}else{
	header("location:index.php");
	}
?>