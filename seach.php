<?php
	include("controller/c_product.php");
	
	$c_product = new c_product();
	$show = $c_product->SeachProduct();
?>