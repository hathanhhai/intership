<?php

	include('controller/c_user.php');
	
	$c_user = new c_user();
	$login = $c_user->Login();
	

?>