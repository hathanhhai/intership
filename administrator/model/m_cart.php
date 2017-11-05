<?php
	require_once("database.php");
		class m_cart extends database{
			
			
			public function GetAllCart(){
				$sql = "SELECT dh.ID,dh.Ngay,dh.TenKH,dh.SDT,sum(ct.DonGia*ct.SoLuong) as tongtien,ct.SoLuong, count(ct.Id_SanPham) as slsp,s.TenSanPham,dh.TrangThai FROM donhang as dh , chitietdh as ct, sanpham as s where dh.ID  = ct.Id_DonHang and s.ID = ct.Id_SanPham  and s.ID = ct.Id_SanPham
GROUP by dh.ID order by dh.ID asc";
				$this->setQuery($sql);
				return $this->loadAllRows();	
			}
			
			//getProduct
			public function GetProductCart($id){
				$sql = "SELECT s.* FROM sanpham as  s,donhang as dh , chitietdh as ct WHERE dh.ID = ct.Id_DonHang and ct.Id_SanPham = s.ID and dh.ID=?";
				$this->setQuery($sql);
				return $this->loadAllRows(array($id));
			}
			
			
			public function DeleteCart($id){
				
				$sql = "delete from donhang where ID=?";
				$this->setQuery($sql);
				return $this->execute(array($id));
					
			}
			
			public function DeleteCartDetail($id){
				
				$sql = "delete from chitietdh where Id_DonHang=?";
				$this->setQuery($sql);
				return $this->execute(array($id));
					
			}
			
			public function ComfirmOrder($id){
				
				$sql = "UPDATE `donhang` SET `TrangThai` = 1 WHERE `donhang`.`ID` = ?";
				$this->setQuery($sql);
				return $this->execute(array($id));
					
			}
			
			public function CartSent(){
				$sql = "SELECT dh.ID,dh.Ngay,dh.TenKH,dh.SDT,sum(ct.DonGia*ct.SoLuong) as tongtien,ct.SoLuong, count(ct.Id_SanPham) as slsp,s.TenSanPham,dh.TrangThai FROM donhang as dh , chitietdh as ct, sanpham as s where dh.ID  = ct.Id_DonHang and s.ID = ct.Id_SanPham  and s.ID = ct.Id_SanPham and dh.TrangThai = 1
GROUP by dh.ID order by dh.ID asc";
				$this->setQuery($sql);
				return $this->loadAllRows();	
			}
			public function CartNotSent(){
				$sql = "SELECT dh.ID,dh.Ngay,dh.TenKH,dh.SDT,sum(ct.DonGia*ct.SoLuong) as tongtien,ct.SoLuong, count(ct.Id_SanPham) as slsp,s.TenSanPham,dh.TrangThai FROM donhang as dh , chitietdh as ct, sanpham as s where dh.ID  = ct.Id_DonHang and s.ID = ct.Id_SanPham  and s.ID = ct.Id_SanPham and dh.TrangThai = 0
GROUP by dh.ID order by dh.ID asc";
				$this->setQuery($sql);
				return $this->loadAllRows();	
			}
			
	
		
			
			
			
		}
?>