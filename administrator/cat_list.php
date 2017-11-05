<?php
session_start();
include("controller/c_category.php");
if(isset($_SESSION['login'])){	
	$c_cat = new c_category();
	$show = $c_cat->GetAll();
}else{
	header("location:index.php");
	}	
?>