<?php
	require_once("database.php");
		class m_user extends database{
			
			//login 
			public function Login($username,$password){
			
				$sql = "select * from user where TaiKhoan=?  and MatKhau = ?";
				$this->setQuery($sql);
				$parameter = array($username,$password);
				return $this->loadRecord($parameter);	
			}
			
			
			
		}
?>