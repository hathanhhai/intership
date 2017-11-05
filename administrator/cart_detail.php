<?php
	include('controller/c_cart.php');
	$c_cart = new c_cart();
	session_start();

	if(!isset($_GET['id'])){
			header("location:kind_list.php");
		}else{
				$id=$_GET['id'];
					$show = $c_cart->CartDetail($id);
			}
			
	

?>