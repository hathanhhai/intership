<?php
session_start();
	include("controller/c_category.php");
	if(!isset($_GET['id'])){
		header("location:index.php");
		}
	$c_category = new c_category();
	$show = $c_category->ProductFloCategory($_GET['id']);
?>