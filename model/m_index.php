<?php
	require_once("administrator/model/database.php");
	class m_index extends database{
		
		public function GetKindAll($vt= -1 ,$limit = -1){
			$sql = "select * from theloai";
			if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
		public function CountKind(){
			$sql = "select * from theloai";
		
			$this->setQuery($sql);
			return $this->loadRecord();
		}
		
		public function GetCategoryById($id){
			$sql = "select * from danhmuc where Id_TheLoai=?";
			$this->setQuery($sql);
			return $this->loadAllRows(array($id));
		}
		
		public function productAllById($id,$vt= -1 ,$limit = -1){
			$sql = "SELECT s.* FROM theloai t join danhmuc d on t.ID = d.Id_TheLoai  JOIN sanpham s on d.ID = s.ID_DanhMuc where t.ID =?";
			if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows(array($id));
		}
		
		public function ProductSale($vt= -1 ,$limit = -1){
			
			$sql = "SELECT * FROM `sanpham` WHERE GiaGiam > 0 ORDER BY RAND()";
			if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
			
		}
		
		public function ProductSaleOne($vt= -1 ,$limit = -1){
			
			$sql = "SELECT * FROM `sanpham` WHERE GiaGiam > 0 ORDER BY RAND()";
			if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadRow();
			
		}
		
		public function GetAllProduct($vt= -1 ,$limit = -1){
				$sql = "SELECT * FROM `sanpham`  ORDER BY RAND() ";
			if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
			//category
			
				
	}
?>