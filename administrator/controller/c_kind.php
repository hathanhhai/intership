<?php
	require_once("model/m_kind.php");
	class c_kind {
		
		//----Select--------
	
		//Get all Data from m_kind
		public function GetAllData(){
			
			$m_cat = new m_kind();
			$m_cats = $m_cat->GetAll();
		
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/kind/kind_list.php");
			include("view/layout/footer.php");
		}
		
		
		
		
		//----------- Execute----------
		
		
		//Insert
		public function KindInsert(){
			
			if(isset($_POST['btnAddKind'])){
				$tenTheLoai  = $_POST['tfTenTheLoai'];	
				$thuTu  = $_POST['tfThuTu'];
					
				$m_cat = new m_kind();
				if($tenTheLoai!="" && $thuTu!=""){
				$insert = $m_cat->KindInsert($tenTheLoai,$thuTu);
				$_SESSION["KindAdd"]="Thêm Thành Công";
				}
				
			}
			
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/kind/kind_add.php");
			include("view/layout/footer.php");
			
		}
		
		//Delete
		public function KindDelete($id){
			
				$m_cat = new m_kind();
				$currenCount=count($m_cat->GetAll());
				
				$delete = $m_cat->KindDelete($id);
				$lastCount=count($m_cat->GetAll());
				
				if($currenCount==$lastCount){
					
					return false;
				}else{
					return true;
					}
			return true;
											
		}
		
		//Edit 
		public function KindEdit($id){
			
			$m_cat = new m_kind();
			$showDataEdit = $m_cat->GetDataById($id);
				if(isset($_POST['btnEditKind'])){
				$tenTheLoai  = $_POST['tfTenTheLoai'];	
				$thuTu  = $_POST['tfThuTu'];
				if($tenTheLoai!="" && $thuTu!=""){
				$insert = $m_cat->KindUpdate($tenTheLoai,$thuTu,$id);
				$_SESSION["KindAdd"]="Sửa Thành Công";
				}
						
				}
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/kind/kind_edit.php");
			include("view/layout/footer.php");
		}
		
		
		 	
	}
?>