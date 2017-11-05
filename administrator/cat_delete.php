
<?php include ("controller/c_category.php");?>
<?php
session_start();
	if(isset($_SESSION['login'])){
		if(!isset($_GET['id'])){
			header("location:cat_list.php");
		}
		$c_kind = new c_category();
		$delete = $c_kind->CategoryDelete($_GET['id']);
		if($delete==true){
		echo "<script>alert('Xóa thành công') ; window.location='cat_list.php';</script>";
		}else{
			echo "<script>alert('Xóa thất bại') ; window.location='cat_list.php';</script>";
			}
	
}else{
	header("location:index.php");
	}	

?>