<?php
	require_once("database.php");
	
	class m_category extends database{
		
		
		
		//Get all data from database	
		public function GetAll($vt = -1,$limit = -1){
			
			$sql = "select *,d.ID as IdDanhMuc,d.ThuTu as Teo  from DanhMuc d join TheLoai t on t.ID= d.Id_TheLoai order by d.ID desc";
			if($vt >= 1 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();		
		}
		
			public function GetAll1($vt = -1,$limit = -1){
			
			$sql = "select * from DanhMuc";
			if($vt >= 1 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();		
		}
		
		//Product Flowing Category
		public function CategoryProduct($id,$vt = -1 , $limit = -1){
			$sql="select s.* ,d.*,s.ID as IdSanPham from SanPham as s,danhmuc as d where s.Id_DanhMuc = d.ID and s.Id_DanhMuc=?";
			if($vt >= 1 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			$parameter = array($id);
			return $this->loadAllRows($parameter);	
		}
		
		//Count Product
		public function CountProductByCat($id,$vt = -1 , $limit = -1){
			$sql="select * from SanPham where Id_DanhMuc=?";
			if($vt >= 1 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			$parameter = array($id);
			return $this->loadRecord($parameter);	
		}
		
		//Get data by id	
		public function GetDataById($id,$vt = -1 , $limit = -1){
			$sql="select * from DanhMuc where ID=?";
			if($vt >= 1 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			$parameter = array($id);
			return $this->loadRow($parameter);
		}
		
		//Get data all by id	
		public function GetDataAllById($id,$vt = -1 , $limit = -1){
			$sql="select * from DanhMuc where Id_TheLoai=?";
			if($vt >= 1 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			$parameter = array($id);
			return $this->loadAllRows($parameter);
		}
		
		//---------------administrator----------------
		
		//$tenDanhMuc,$thuTu,$idTheLoai
		
		//$ten,$gia,$giamGia,$gioiThieu,$chiTiet,$hinh,$noiBat,$slider,$idDanhMuc
		//Insert
		public function CategoryInsert($tenDanhMuc,$thuTu,$idTheLoai){
				$sql = "INSERT INTO `danhmuc` (`TenDanhMuc`, `ThuTu`, `ID_TheLoai`) VALUES (?, ?, ?)";
				$this->setQuery($sql);
				$parameter = array($tenDanhMuc,$thuTu,$idTheLoai);
				return $this->execute($parameter);
		}
		
		//Update
		public function CategoryUpdate($tenDanhMuc,$thuTu,$idTheLoai,$id){
			$sql = "Update DanhMuc set TenDanhMuc = ?, ThuTu = ?, ID_TheLoai = ? where ID = ?";
			$this->setQuery($sql);
			$parameter = array($tenDanhMuc,$thuTu,$idTheLoai,$id);
			return $this->execute($parameter);		
		}
		
		//Delete
		public function CategoryDelete($id){
			$sql = "Delete from  DanhMuc where ID = ?";
			$this->setQuery($sql);
			$parameter = array($id);
			return $this->execute($parameter);	
		}
	
				
			
	}
	
	
?>