<?php
require_once('model/m_cart.php');
	class c_cart {
		
		
		public function ShowListCart(){
				//logout
			
			if(isset($_POST['logout'])){
			
				header("location:index.php");		
			}
				$m_cart = new m_cart();
				$listCart = $m_cart->GetAllCart();	
				
		
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/cart/cart_list.php");
			include("view/layout/footer.php");
			
		}
		
			public function ShowListCartSent(){
				//logout
			
			if(isset($_POST['logout'])){
			
				header("location:index.php");		
			}
				$m_cart = new m_cart();
				$listCart = $m_cart->CartSent();	
				
		
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/cart/cart_sent.php");
			include("view/layout/footer.php");
			
		}
		
		public function ShowListCartNotSent(){
				//logout
			
			if(isset($_POST['logout'])){
			
				header("location:index.php");		
			}
				$m_cart = new m_cart();
				$listCart = $m_cart->CartNotSent();	
				
		
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/cart/cart_not_sent.php");
			include("view/layout/footer.php");
			
		}
		
		public function CartDetail($id){
				$m_cart = new m_cart();
				$listCartProduct = $m_cart->GetProductCart($id);
				
			
			
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/cart/cart_detail.php");
			include("view/layout/footer.php");
		}
		
		public function ComfirmOrder($id){
			
			$m_cart = new m_cart();
			$m_cart->ComfirmOrder($id);
			header("location:cart_list.php");
		}
		
		public function CartDelete($id){
			$m_cart = new m_cart();
		
			$m_cart->DeleteCartDetail($id);
				$m_cart->DeleteCart($id);
		
			header("location:cart_list.php");	
		}
		
			
	}
?>	