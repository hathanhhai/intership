<?php 

include('controller/c_cart.php');
session_start();
if(isset($_SESSION['login'])){	
	$id = $_GET['id'];
	if(!isset($id)){
		header("location:cart_list.php");
		}
	$c_cart = new c_cart();
	$comfirm = $c_cart->ComfirmOrder($id);
	
}else{
	header("location:index.php");
	}
?>