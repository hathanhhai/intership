<?php
	require_once("database.php");
	
	class m_product extends database{
		//get all product
		public function GetAll($vt=-1 ,$limit = -1){
			$sql = "select * from sanpham  order by ID desc";
			if($vt>=0 && $limit>0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
			
		}	
		
		public function GetAllIndex(){
			$sql = "select * from sanpham  order by LuotXem desc limit 0,8";
			
			$this->setQuery($sql);
			return $this->loadAllRows();
			
		}
		
			public function GetAllSale(){
			$sql = "select * from sanpham  order by LuotXem desc limit 0,4";
			
			$this->setQuery($sql);
			return $this->loadAllRows();
			
		}
		
		
		// Get product follow id
		public function ProductGetById($id,$vt=-1 ,$limit = -1)
		{
			$sql = "select * from sanpham where ID=?";
			if($vt>=0 && $limit>0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows(array($id));	
		}
		
		// Get product follow id
		public function ProductById($id,$vt=-1 ,$limit = -1)
		{
			$sql = "select * from sanpham where ID=?";
			if($vt>=0 && $limit>0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadRow(array($id));	
		}
		
		//Insert
		public function ProductInsert($tenSanPham,$gia,$giaGiam,$gioiThieu,$chiTiet,$hinh,$noiBat,$slider,$id_DanhMuc){
				$sql ="INSERT INTO `sanpham` (`TenSanPham`, `Gia`, `GiaGiam`, `GioiThieu`, `ChiTiet`, `Hinh`, `NoiBat`, `Slider`, `ID_DanhMuc`) VALUES (?,?,?,?,?,?,?,?,?)";
				$this->setQuery($sql);
				$parameter = array($tenSanPham,$gia,$giaGiam,$gioiThieu,$chiTiet,$hinh,$noiBat,$slider,$id_DanhMuc);
				return $this->execute($parameter);
		}
		
		//delete
		public function ProductDelete($id){
			$sql = "delete from sanpham where ID=?";
			$this->setQuery($sql);
			$parameter = array($id);
			return $this->execute($parameter);	
		}
		
		//update
		
		public function ProductUpdate($tenSanPham,$gia,$giaGiam,$gioiThieu,$chiTiet,$hinh,$noiBat,$slider,$id_DanhMuc,$id){
			
			$sql = "UPDATE `sanpham` SET `TenSanPham` = ?, `Gia` = ?, `GiaGiam` =?, `GioiThieu` = ?, `ChiTiet` =?, `Hinh` = ?, `NoiBat` = ?, `Slider` = ?, `ID_DanhMuc` = ? WHERE `sanpham`.`ID` = ?";
			$this->setQuery($sql);
			$parameter = array($tenSanPham,$gia,$giaGiam,$gioiThieu,$chiTiet,$hinh,$noiBat,$slider,$id_DanhMuc,$id);
			return $this->execute($parameter);	
		
		}
		
		
	}
?>