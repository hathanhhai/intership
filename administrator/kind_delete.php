
<?php include ("controller/c_kind.php");?>
<?php
session_start();
	if(isset($_SESSION['login'])){
		if(!isset($_GET['id'])){
			header("location:kind_list.php");
		}
		$c_kind = new c_kind();
		$delete = $c_kind->KindDelete($_GET['id']);
		if($delete==true){
		echo "<script>alert('Xóa thành công') ; window.location='kind_list.php';</script>";
		}else{
			echo "<script>alert('Xóa thất bại') ; window.location='kind_list.php';</script>";
			}
	}else{
	header("location:index.php");
	}

?>