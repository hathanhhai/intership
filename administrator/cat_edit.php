
<?php include ("controller/c_category.php");?>
<?php
session_start();
	if(isset($_SESSION['login'])){

		if(!isset($_GET['id'])){
			header("location:cat_list.php");
		}
		$c_kind = new c_category();
		$edit = $c_kind->CategoryUpdate($_GET['id']);

	}else{
	header("location:index.php");
	}	

?>