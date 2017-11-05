<?php
	include("controller/c_index.php");
	 session_start();
	$m_index = new c_index();
	$index = $m_index->Index();
	
?>