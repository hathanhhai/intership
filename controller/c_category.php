<?php

	require_once("model/m_index.php");
	require_once("model/m_category.php");
	require_once("model/m_kind.php");
		require_once("controller/c_product.php");
	
	class c_category{
		
		
		public function ProductFloCategory($id){
			
			//NAV
				$m_index = new m_index();
				$kinds=  $m_index->GetKindAll();
				$kindLimit = $m_index->GetKindAll(0,sizeof($kinds)-1);
				
				
			//Category
			$m_cat =  new m_category();
			$getNameCat = $m_cat->CategoryById($id)->TenDanhMuc;
			$getNameKind= $m_cat->KindById($id)->TenTheLoai;
			$countProduct = $m_cat->CountProductFloCategory($id)->SoLuong;	
			$productSlider = $m_cat->ProductFloCategory($id,0,2);
			
			//slider random
			$productRand = $m_cat->ProductRand(0,3);
			
			
				if(isset($_POST['btnseach'])){
				$c_product  =  new c_product();
				$c_product->SeachProduct();
				header("location:seach.php");
				}
			//product
			include ("controller/page.php");
			$p = new pager();
			$products = $m_cat->ProductFloCategory($id);
			
			$limit = 8;
			$count = count($products);
			$page = $p->findPages($count,$limit);
			$pos  = $p->findStart($limit);
			$currenPage = $_GET['page'];
			$option = "&id=".$id;
			$lst = $p->pageList($currenPage,$page,$option);
			$productss = $m_cat->ProductFloCategory($id,$pos,$limit);
		
			
			
			
			
			//view
			include("view/layout/header.php");
			include("view/layout/navigtion.php");
			include("view/category/headerCate.php");
			include("view/category/contentCategory.php");
			include("view/layout/coupon.php");
			include("view/layout/footer.php");
		}	
		
		public function ProductFloKind($id){
			
				//NAV
				$m_index = new m_index();
				$kinds=  $m_index->GetKindAll();
				$kindLimit = $m_index->GetKindAll(0,sizeof($kinds)-1);
				
				//Category
			$m_cat =  new m_category();
			$m_kind =  new m_kind();
			$getNameKind= $m_kind->KindById($id)->TenTheLoai;


			//slider 
			$countProduct = $m_kind->CountProduct($id)->SoLuong;	
			$productSlider = $m_cat->ProductFloCategory($id,0,2);
			$productRand = $m_cat->ProductRand(0,3);
			
			//product
			include ("controller/page.php");
			$p = new pager();
			$products = $m_kind->ProductFloKind($id);
			$limit = 8;
			$count = count($products);
			$page = $p->findPages($count,$limit);
			$pos  = $p->findStart($limit);
			$currenPage = $_GET['page'];
			$option = "&id=".$id;
			$lst = $p->pageList($currenPage,$page,$option);
			$products = $m_kind->ProductFloKind($id,$pos,$limit);
			
			//search 
				if(isset($_POST['btnseach'])){
				$c_product  =  new c_product();
				$c_product->SeachProduct();
				header("location:seach.php");
				}
				
				
				
			//view
			include("view/layout/header.php");
			include("view/layout/navigtion.php");
			include("view/kind/headerKind.php");
			include("view/kind/contentKind.php");
			include("view/layout/coupon.php");
			include("view/layout/footer.php");
		}
		
	}
	

?>