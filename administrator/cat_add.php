<?php
session_start();
if(isset($_SESSION['login'])){
	include("controller/c_category.php");
	
	$c_cat = new c_category();
	$add = $c_cat->CategoryInsert();
	}else{
	header("location:index.php");
	}
	
?>