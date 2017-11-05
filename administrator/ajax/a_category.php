<?php

	require_once ("../model/m_category.php");
	
	$m_category = new m_category();
	
	
	$id = $_GET['id'];
	$kinds = $m_category->GetDataAllById($id);
	if($kinds==null){
		echo '<script>alert("Không có danh mục Nào");</script>';
		}
	foreach($kinds as $item){
			echo "<option value='";
			echo $item->ID;
			echo "'>";
			echo $item->TenDanhMuc;
			echo "</option>";
	}
	
?>