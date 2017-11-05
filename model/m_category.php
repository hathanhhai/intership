<?php
	
	require_once("administrator/model/database.php");
 	class m_category extends database{
		
		public function ProductFloCategory($id,$vt= -1 ,$limit = -1){
				$sql =  "select * from sanpham where Id_DanhMuc=? order by Gia ";
				if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
				}
				$this->setQuery($sql);
				return $this->loadALlRows(array($id));
			}	
			
			
			//product
			public function ProductRand($vt= -1 ,$limit = -1){
					$sql =  "select * from sanpham  order by RAND() ";
				if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
				}
				$this->setQuery($sql);
				return $this->loadALlRows();
			}
			
		public function CategoryById($id){
			$sql = "select * from DanhMuc where ID=?";
			$this->setQuery($sql);
			return $this->loadRow(array($id));
		}
		
		public function CountProductFloCategory($id){
			$sql ="SELECT count(*) as SoLuong from theloai t join danhmuc d on t.ID = d.ID_TheLoai JOIN sanpham s on s.ID_DanhMuc=d.ID WHERE d.ID=?";	
			$this->setQuery($sql);
			return $this->loadRow(array($id));
		
		}
		
		
		
		public function KindById($id){
			$sql = "SELECT  t.* from danhmuc d join theloai t on t.ID = d.ID_TheLoai where d.ID=?";
			$this->setQuery($sql);
			return $this->loadRow(array($id));
		}
		
		public function CategoryAllById($id){
			$sql = "select * from DanhMuc where Id_TheLoai=?";
			$this->setQuery($sql);
			return $this->loadAllRows(array($id));
		}
				
	}
?>