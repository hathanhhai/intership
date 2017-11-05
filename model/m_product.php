<?php
	
	require_once("administrator/model/database.php");
 	class m_product extends database{

		
		public function ProductById($id){
			$sql = "SELECT  * from sanpham where ID=?";
			$this->setQuery($sql);
			return $this->loadRow(array($id));
		}
		
		public function ProductRand($vt=-1 ,$limit = -1){
			
			$sql = "select * from sanpham order by RAND() ";
			if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
		public function ProductAll($vt=-1 ,$limit = -1){
			
			$sql = "select * from sanpham  ";
			if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
		public function SeachProduct($name,$vt=-1 ,$limit = -1){
			
			$sql = "select * from sanpham where TenSanPham like '%".$name."%'";
			if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
		
		//update View Product
		public function UpdateView($view,$id){
		
			$sql = "UPDATE `sanpham` SET `LuotXem` = ? WHERE `sanpham`.`ID` = ?";
			$this->setQuery($sql);
			return $this->execute(array($view,$id));	
		
		}
		
		
	
		//inset cart
		public function InsertCart_DonHang($id,$ngay,$tenKH,$sdt,$trangThai){
			$sql = "INSERT INTO `donhang` (`ID`,`Ngay`, `TenKH`, `SDT`,`TrangThai`) VALUES (?,?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute(array($id,$ngay,$tenKH,$sdt,$trangThai));
		}
		//INSERT INTO `chitietdh` (`ID`, `Id_DonHang`, `Id_SanPham`, `SoLuong`, `DonGia`) VALUES (NULL, '21', '21', '21', '21');
		public function InsertCart_ChiTietDH($id_donhang,$id_sanpham,$soluong,$dongia){
			$sql = "INSERT INTO `chitietdh` (`Id_DonHang`, `Id_SanPham`, `SoLuong`, `DonGia`) VALUES (?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute(array($id_donhang,$id_sanpham,$soluong,$dongia));
		}
		
	
	}
?>