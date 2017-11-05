<?php

	require_once("model/m_index.php");
	require_once("model/m_category.php");
	require_once("model/m_kind.php");
	require_once("model/m_product.php");
		require_once("controller/c_product.php");
	class c_product{
		
		
		public function DetailProduct($id){
			
			
				
			//NAV
				$m_index = new m_index();
				$kinds=  $m_index->GetKindAll();
				$kindLimit = $m_index->GetKindAll(0,sizeof($kinds)-1);
				
				$m_product = new m_product();
				$product = $m_product->ProductById($id);
				
				$currenProduct = $product->LuotXem;
				
			
			
				$updateView = $m_product->UpdateView($currenProduct+1,$id);
			
			
			
					//product rand
				$productRand = $m_product->ProductRand(0,8);
				
				//search 
				if(isset($_POST['btnseach'])){
				$c_product  =  new c_product();
				$c_product->SeachProduct();
				header("location:seach.php");
				}
				
		
			
			//view
			include("view/layout/header.php");
			include("view/layout/navigtion.php");
			include("view/product/detailproduct.php");
			include("view/layout/coupon.php");
			include("view/layout/footer.php");
		}
		
		
		public function SeachProduct(){
			
			
			
			//NAV
				$m_index = new m_index();
				$kinds=  $m_index->GetKindAll();
				$kindLimit = $m_index->GetKindAll(0,sizeof($kinds)-1);
				
				
				//Category
			$m_cat =  new m_category();
			
			//$countProduct = $m_cat->CountProductFloCategory($id)->SoLuong;	
			//$productSlider = $m_cat->ProductFloCategory($id,0,2);
			
			//slider random
			$productRand = $m_cat->ProductRand(0,3);
			$m_product =  new m_product();
		
			if(isset($_POST['btnseach'])){
				
					$productSeach =  $m_product->SeachProduct($_POST['search']);
					
				
			}
			
			
			//view
			include("view/layout/header.php");
			include("view/layout/navigtion.php");
			include("view/seach/headerCate.php");
			include("view/seach/contentCategory.php");
			include("view/layout/coupon.php");
			include("view/layout/footer.php");
			
		}
		
		
		public function Cart($id){
		
			//NAV
				$m_index = new m_index();
				$kinds=  $m_index->GetKindAll();
				$kindLimit = $m_index->GetKindAll(0,sizeof($kinds)-1);
				
			$m_product = new m_product();
			$product = $m_product->ProductById($id);
			
			//product rand
			$productRand = $m_product->ProductRand(0,8);
			 $allProduct = $m_product->ProductAll();
			
			$data = array();
			 
			foreach($allProduct as $item){
				$data[$item->ID]=$item;
			
			}

			if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
				
				$_SESSION['cart'][$id]=$data[$id];
		
	
			}else{
				if(array_key_exists($id,$_SESSION['cart'])){
					
				}else{
					$_SESSION['cart'][$id]=$data[$id];
				
					
				}
			}
			
			
			$_SESSION['cart'][$id]=$data[$id];

			header("location:index.php");
			echo "<script>alert('Đã thêm vào giỏ hàng');</script>";
			
		}
		
		public function ShowCart(){
			//NAV
				$m_index = new m_index();
				$kinds=  $m_index->GetKindAll();
				$kindLimit = $m_index->GetKindAll(0,sizeof($kinds)-1);
				
				$m_product = new m_product();

			
			//product rand
			$productRand = $m_product->ProductRand(0,8);
			 $allProduct = $m_product->ProductAll();
			 $regSDT = '/^[0-9]+$/';
			// 
			$errorCart = array();
			 if(isset($_POST['btnDatHang'])){
					//ten khach hang
					if(empty($_POST['tftenkh'])){
							array_push($errorCart,"Bạn chưa nhập tên");
					}else{
						$nameCus = 	$_POST['tftenkh'];
					}
					
					//so dien thoai
					if(empty($_POST['tfsdt']) && !preg_match($regSDT,$_POST['tfsdt']) ){
							array_push($errorCart,"Bạn chưa nhập số điện thoại hoặc chưa đúng");
					}else{
						$phoneCus =$_POST['tfsdt'];
					}
					// neu khong co loi
					if(empty($errorCart)){
					$idRand = rand(0,1);
					$idRandTem = $idRand ;
						if($idRandTem==$idRand){
							$idRand = rand(0,500000);	
						}
						$now = time();
						$today = date('d-m-y ', mktime(date("d", $now), date("m", $now), date("y", $now)));
						if(empty($_SESSION['cart'])){
						header("location:index.php");	
						return false;	
						}
						$insertDH = $m_product->InsertCart_DonHang($idRand,$today,$nameCus,$phoneCus,0);
						foreach($_SESSION['cart'] as $item){
							$m_product->InsertCart_ChiTietDH($idRand,$item->ID,$_POST['quantity'],$item->Gia);	
						}
						
						unset($_SESSION['cart']);
						echo "<script>alert('Đơn hàng của bản đã được gửi chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất'); window.location='index.php';</script>";
					}
					
					
				}
				
			
			
					//view
			include("view/layout/header.php");
			include("view/layout/navigtion.php");
			include("view/cart.php");
			include("view/layout/coupon.php");
			include("view/layout/footer.php");
		}
		
	}
?>

