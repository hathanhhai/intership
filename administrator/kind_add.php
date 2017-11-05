
<?php include ("controller/c_kind.php");?>
<?php
	session_start();
	if(isset($_SESSION['login'])){

		$c_kind = new c_kind();
		$kind = $c_kind->kindInsert();
	}else{
	header("location:index.php");
	}
?>