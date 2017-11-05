<?php
	require_once("model/m_user.php");
	
	
	class c_user{
		
			public function Login(){
			
			
					session_start();
			$m_user = new m_user();
			$errorLogin = array();
			if(isset($_POST['btnLogin'])){
		
				if(empty($_POST['username']) && empty($_POST['password'])){
					array_push($errorLogin,"Tên tài khoản hoặc mật khẩu không đúng...");
				}else{
					
					$username =$_POST['username'];
					$password =$_POST['password'];
						$checkLogin =  $m_user->Login($username,$password);
						if($checkLogin>0){
						$_SESSION['login']=$username;
						header("location:kind_list.php");
						}else{
							header("location:index.php");
							}
					
				}
		
			}
		
			//view
			include("view/layout/login.php");
		}	
		
	}

?>