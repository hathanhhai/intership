<?php
	
require_once('model/m_product.php');
require_once('model/m_category.php');
require_once('model/m_kind.php');
	class c_product{
		
		
		//Get product from m_model
		public function GetAllProduct(){
	
			$m_product  = new m_product();
			$CatFlowingPro = $m_product->GetAll();
		
		
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/category/cat_detail.php");
			include("view/layout/footer.php");
		}
		
		
		
		// insert product
		public function ProductInsert(){
				
						require_once("page.php");
					$m_product = new m_product();
					$m_kind  =  new m_kind();
					$kinds = $m_kind->GetAll();
					$giamGia = 0;
					$error = array();
					
					$pathImage = "../Uploads/";
			if(isset($_POST['btnProductAdd'])){
				
				$slider = $_POST['checkSlider'];	
			 	$noibat = $_POST['checknoibat'];
				
				//validate TenSanPham
				if(empty($_POST['tftensp'])){
					array_push($error,"Bạn chưa nhập tên sản phẩm");
				}else{
					$tenSanPham = $_POST['tftensp'];
				}
				
				
				//validate Gia
				$giaExample ="/[^0-9]/";
				
				if(empty($_POST['tfgia']) ){
					array_push($error,"Bạn chưa nhập giá sản phẩm");
				}else if(preg_match($giaExample,$_POST['tfgia'],$giaOutPut)){
					array_push($error,"Giá sản phẩm không hợp lệ");
					}
					
				else{
					$gia = $_POST['tfgia'];
					}
					
					if(preg_match($giaExample,$_POST['tfgiamgia'],$giaGiamOutPut)){
					array_push($error,"Giá giảm sản phẩm không hợp lệ");
					}else{
						$giamGia+=$_POST['tfgiamgia'];
						}
					
				
				
				//validate GioiThieu
				if(empty($_POST['tfgioithieu']) ){
					array_push($error,"Bạn phải giới thiệu đôi chút về sảm phẩm");
				}else{
					$gioiThieu = $_POST['tfgioithieu'];
					}
					
				if(empty($_POST['tfchitiet']) ){
					array_push($error,"Bạn chưa mô tả chi tiết sản phẩm");
				}else{
					$chiTiet = $_POST['tfchitiet'];
					}
				
				if(empty($_POST['selectCat'])){
					array_push($error,"Bạn chưa chọn danh mục ");	
				}else{
					$danhMuc = $_POST['selectCat'];
					}
					
				
				//$tenSanPham,$gia,$giaGiam,$gioiThieu,$chiTiet,$hinh,$noiBat,$slider,$id_DanhMuc
				$errorImage = array();
				if(isset($_FILES['fImages']))
				{
					if (empty($_FILES['fImages']['name'])){
					array_push($error,"Bạn chưa chọn ảnh ");
				
					}else{
						$fileName = $_FILES['fImages']['name'];
						}
					
					$fileSize = $_FILES['fImages']['size'];
					$fileTmp =  $_FILES['fImages']['tmp_name'];
					$fileType = $_FILES['fImages']['type'];
					//$nameFileLast = strtolower(end(explode(".",$fileName)));
					$nameFileLast = pathinfo($_FILES['fImages']['name'],PATHINFO_EXTENSION);
						
					$allowFile = array("jpeg","jpg","png","PNG","JPEG","JPG");
					
					if(!isset($fileName)&&in_array($nameFileLast,$allowFile)==false){
						array_push($error,"File ảnh không hợp lệ");	
					}
					if(empty($errorImage)){
						$image = $_FILES['fImages']['name'];
			
					}
					
				} 
				
				
				
				
				
				
				if($error==null){
					if(isset($image)){
					$m_product->ProductInsert($tenSanPham,$gia,$giamGia,$gioiThieu,$chiTiet,$image,$noibat,$slider,$danhMuc);
					move_uploaded_file($fileTmp,$pathImage.$image);
					header("location:product_list.php");
					}
				
			}
				
				
			}
	
			
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/product/product_add.php");
			include("view/layout/footer.php");		
		}
		
		//Delete Product
		
		public function ProductDelete($id){
			
			
		
			
			
			$m_product = new m_product();
			$m_product->ProductDelete($id);
		}
		
		// Update Product
		public function UpdateProduct($id){
				//logout
			
			if(isset($_POST['logout'])){
			
				header("location:index.php");		
			}
			$m_kind  =  new m_kind();
			$kinds = $m_kind->GetAll();
			$m_product = new m_product();
			$m_cat = new m_category();
			$m_cats = $m_cat->GetAll1();
			$ProductID = $m_product->ProductById($id);
			$giamGia = 0;
					$error = array();
					$pathImage = "../Uploads/";
					
			if(isset($_POST['btnProductEdit'])){
				
				$slider = $_POST['checkSlider'];	
			 	$noibat = $_POST['checknoibat'];
				
				//validate TenSanPham
				if(empty($_POST['tftensp'])){
					array_push($error,"Bạn chưa nhập tên sản phẩm");
				}else{
					$tenSanPham = $_POST['tftensp'];
				}
				
				
				//validate Gia
				$giaExample ="/[^0-9]/";
				
				if(empty($_POST['tfgia']) ){
					array_push($error,"Bạn chưa nhập giá sản phẩm");
				}else if(preg_match($giaExample,$_POST['tfgia'],$giaOutPut)){
					array_push($error,"Giá sản phẩm không hợp lệ");
					}
					
				else{
					$gia = $_POST['tfgia'];
					}
					
					if(preg_match($giaExample,$_POST['tfgiamgia'],$giaGiamOutPut)){
					array_push($error,"Giá giảm sản phẩm không hợp lệ");
					}else{
						$giamGia+=$_POST['tfgiamgia'];
					}
					
				
				
				//validate GioiThieu
				if(empty($_POST['tfgioithieu']) ){
					array_push($error,"Bạn phải giới thiệu đôi chút về sảm phẩm");
				}else{
					$gioiThieu = $_POST['tfgioithieu'];
					}
					
				if(empty($_POST['tfchitiet']) ){
					array_push($error,"Bạn chưa mô tả chi tiết sản phẩm");
				}else{
					$chiTiet = $_POST['tfchitiet'];
					}
				
				if(empty($_POST['selectCat'])){
					array_push($error,"Bạn chưa chọn danh mục ");	
				}else{
					$danhMuc = $_POST['selectCat'];
					}
					
				
				//$tenSanPham,$gia,$giaGiam,$gioiThieu,$chiTiet,$hinh,$noiBat,$slider,$id_DanhMuc
				$errorImage = array();
				if(isset($_FILES['fImages']))
				{
					if (empty($_FILES['fImages']['name'])){
					$image=$ProductID->Hinh;
				
					}else{
						$fileName = $_FILES['fImages']['name'];
						}
					
					$fileSize = $_FILES['fImages']['size'];
					$fileTmp =  $_FILES['fImages']['tmp_name'];
					$fileType = $_FILES['fImages']['type'];
					//$nameFileLast = strtolower(end(explode(".",$fileName)));
					$nameFileLast = pathinfo($_FILES['fImages']['name'],PATHINFO_EXTENSION);
						
					$allowFile = array("jpeg","jpg","png","PNG","JPEG","JPG");
					
					
					if(empty($errorImage)){
						if(empty($_FILES['fImages']['name'])){
							$image = $ProductID->Hinh;
							}else{
						$image = $_FILES['fImages']['name'];
							}
			
					}
			
					}
				if($error==null){
					if(isset($image)){
					$m_product->ProductUpdate($tenSanPham,$gia,$giamGia,$gioiThieu,$chiTiet,$image,$noibat,$slider,$danhMuc,$id);
					move_uploaded_file($fileTmp,$pathImage.$image);
					header("location:product_list.php");
					}
				}
		
					
			}
			
	
			
			//view
			include("view/layout/header.php");
			include("view/layout/menu.php");
			include("view/product/product_edit.php");
			include("view/layout/footer.php");
		}
		
	}

?>