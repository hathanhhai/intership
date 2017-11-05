<?php
	
	require_once("database.php");
	
	class m_kind extends database{
		
		//Get all data
		public function GetAll($vt = -1 , $limit = - 1){
			$sql = "select * from TheLoai order by ID DESC";
			if($vt >= 0 && $limit > 1){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
		//Get data by id
		public function GetDataById ($id,$vt = -1 , $limit = - 1){
			$sql="select * from TheLoai where ID =?";
			$this->setQuery($sql);
			$parameter = array($id);
			return $this->loadRow($parameter);	
		}
		

		
		
		//------Administrator----------
		//	`ID` `TenTheLoai` `ThuTu`
		
		//Insert
		public function KindInsert($tenTheLoai,$thuTu){
			$sql = "Insert Into TheLoai (TenTheLoai,ThuTu) value (?,?)";
			$this->setQuery($sql);
			$parameter = array($tenTheLoai,$thuTu);
			return $this->execute($parameter);	
		}
		
		//Update
		public function KindUpdate($tenTheLoai,$thuTu,$id){
			$sql = "Update TheLoai TenDanhMuc = ?, ThuTu = ? where ID=? ";
			$this->setQuery($sql);
			$parameter = array($tenTheLoai,$thuTu,$id);
			return $this->execute($parameter);	
		}
		
		//Delete
		public function KindDelete($id){
			$sql =  "DELETE FROM `theloai` WHERE `theloai`.`ID` = ?";
			$this->setQuery($sql);
			$parameter = array($id);
			return $this->execute($parameter);	
		}
		
			
	}
	
?>