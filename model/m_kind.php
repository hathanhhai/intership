<?php
	
	require_once("administrator/model/database.php");
 	class m_kind extends database{

		
		public function KindById($id){
			$sql = "SELECT  * from theloai where ID=?";
			$this->setQuery($sql);
			return $this->loadRow(array($id));
		}
		
		

		public function ProductFloKind($id,$vt=-1,$limit=-1)
		{
			$sql = "SELECT s.* from theloai t join danhmuc d on d.ID_TheLoai=t.ID join sanpham s on s.ID_DanhMuc = d.ID WHERE t.ID=?";
			if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
				}
				$this->setQuery($sql);
				return $this->loadALlRows(array($id));	
		}
		
		public function CountProduct($id){
				$sql = "SELECT COUNT(s.ID) as SoLuong from theloai t join danhmuc d on d.ID_TheLoai=t.ID join sanpham s on s.ID_DanhMuc = d.ID WHERE t.ID=?";
			
				$this->setQuery($sql);
				return $this->loadRow(array($id));
		}
				
	}
?>