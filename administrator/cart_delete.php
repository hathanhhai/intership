<?php
include('controller/c_cart.php');
session_start();
if(isset($_SESSION['login'])){


			if(!isset($_GET['id'])){
						header("location:kind_list.php");
					}else{
							$id=$_GET['id'];
							$c_cart = new c_cart();
							$delete = $c_cart->CartDelete($id);
						}
	
	}else{
	header("location:index.php");
	}
?>