<?php
	require_once("model/m_index.php");
	require_once("controller/c_product.php");
	class c_index{
		
		public function Index(){
			
				//NAV
				$m_index = new m_index();
				$kinds=  $m_index->GetKindAll();
				$kindLimit = $m_index->GetKindAll(0,sizeof($kinds)-1);
				
				
				//product sale
				$productSale = $m_index->ProductSale(0,2);
				$productSaleOne = $m_index->ProductSaleOne(0,1);
				$product = $m_index->GetAllProduct(0,4);
			
			
			//search 
				if(isset($_POST['btnseach'])){
				$c_product  =  new c_product();
				$c_product->SeachProduct();
				header("location:seach.php");
				}
				
				
		
			
			//view
			include("view/layout/header.php");
			include("view/layout/navigtion.php");
			include("view/layout/slider.php");
			include("view/layout/selection.php");
			include("view/layout/coupon.php");
			include("view/layout/footer.php");
			
		}	
		
		
		
	}

?>