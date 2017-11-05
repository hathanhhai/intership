<?php
session_start();
include("controller/c_category.php");
	if(isset($_SESSION['login'])){
		if(!isset($_GET['id'])){
			header("location:cat_list.php");	
		}
		$c_cat = new c_category();
		$show = $c_cat->CategoryFloProduct($_GET['id']);
	
	}else{
		header("location:index.php");
	}
	
?>