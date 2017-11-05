
<?php include ("controller/c_kind.php");?>
<?php
session_start();
	if(isset($_SESSION['login'])){
		if(!isset($_GET['id'])){
			header("location:kind_list.php");
		}
		$c_kind = new c_kind();
		$edit = $c_kind->KindEdit($_GET['id']);
	}else{
	header("location:index.php");
	}
?>