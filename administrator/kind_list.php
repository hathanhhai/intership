
<?php include ("controller/c_kind.php");?>
<?php
	session_start();
	if(isset($_SESSION['login'])){
		$c_kind = new c_kind();
		$show_kind = $c_kind->GetAllData();
	}else{
	header("location:index.php");
	}
?>