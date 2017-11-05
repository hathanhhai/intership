<?php
	
	require_once("model/m_kind.php");
	require_once("model/m_category.php");
	class c_category{
		
		
		
		
		
		// Get all data from m_category
		public function GetAll(){
			
			
			//logout
			
			if(isset($_POST['logout'])){
			
				header("location:index.php");		
			}
			
			$m_cat = new m_category();
			$m_cats = $m_cat->GetAll();
			
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/category/cat_list.php");
			include("view/layout/footer.php");	
		}
		
		//CattegoryFloProduct
		
		public function CategoryFloProduct($id){
			$m_cat = new m_category();
		
			$CatFlowingPro = $m_cat->CategoryProduct($id);
								
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/category/cat_detail.php");
			include("view/layout/footer.php");	
				
		}
		
		
		//Delete
		public function CategoryDelete($id){
			$m_cat = new m_category();
			$currenCount = $m_cat->CountProductByCat($id);
			$delete = $m_cat->CategoryDelete($id);
			$lastCount=count($m_cat->CountProductByCat($id));
				
				if($currenCount==$lastCount){
					return false;
				}else{
					return true;
					}
			return true;

						
		}
		
		//Insert
		public function CategoryInsert(){
			
				$m_kind =  new m_kind();
			
				$kind = $m_kind->GetAll();
				
						$m_cat =  new m_category();
				if(isset($_POST['btnAddCat'])){
					$theLoai = $_POST['kind'];
					$tenDanhMuc = $_POST['tfTenDanhMuc'];
					$thutu = $_POST['tfThuTu'];
					
					
					$m_cat->CategoryInsert($tenDanhMuc,$thutu,$theLoai);
						
				}
				
			
				//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/category/cat_add.php");
			include("view/layout/footer.php");	
		}
		
		//Update
		public function CategoryUpdate($id){
			$m_kind =  new m_kind();
			$m_cat = new m_category();
			$cat = $m_cat->GetDataById($id);
			$kind = $m_kind->GetAll();
			
			
			$error = array();
			if($_SERVER['REQUEST_METHOD']=="POST"){
				if(empty($_POST['tfTenDanhMuc'])){
					$error['TenDanhMuc']="Ten danh Muc Sai";
				}else{
					$tenDanhMuc = $_POST['tfTenDanhMuc'];
				}
				
				if(!preg_match("/^[0-9]+$/", $_POST['tfThuTu'])|| empty( $_POST['tfThuTu'])){
					$error['ThuTu']="Thứ tự không được để trống hoặc là chữ";
				}else{
					$ThuTu = $_POST['tfThuTu'];
				}
			
				
				if(empty($error)){
					$m_cat->CategoryUpdate($tenDanhMuc,$ThuTu,$_POST['kind'],$id);	
				}
			}
			
		
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/category/cat_edit.php");
			include("view/layout/footer.php");	
	
		}
			
	}
?>