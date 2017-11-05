<?php
	require_once("../administrator/model/database.php");
	require_once("../function.php");
	 class ajax extends database {
	 
	 	public function productAllById($id,$vt= -1 ,$limit = -1){
			$sql = "SELECT s.* FROM theloai t join danhmuc d on t.ID = d.Id_TheLoai  JOIN sanpham s on d.ID = s.ID_DanhMuc where t.ID =?";
			if($vt >=0 && $limit >0){
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows(array($id));
		}
	 
	}


	$id= $_POST['id'];
	$ajax  = new ajax();
	$product=  $ajax->productAllById($id,0,11);
	if(empty($product)){
		echo "<h2 style='margin-top:2em;'>Không có sản phẩm nào...</h2>";	
	}else{	
	foreach($product as $item){
?>

	 <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img style="width:255px;height:291px;" src="Uploads/<?php echo $item->Hinh ?>" alt="" class="pro-image-front">
										<img src="Uploads/<?php echo $item->Hinh ?>" alt="" style="height:300px" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="san-pham-<?php echo changeTitle($item->TenSanPham);?>-<?php echo $item->ID?>.html" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
											<?php if($item->NoiBat == 1){ ?><span class="product-new-top">Mới</span><?php } ?>
											
									</div>
                                 
									<div class="item-info-product ">
										<h4><a    href="san-pham-<?php echo changeTitle($item->TenSanPham);?>-<?php echo $item->ID?>.html"><?php echo $item->TenSanPham ?></a></h4>
										<div class="info-product-price">
												<?php 
												if($item->GiaGiam>0){
											?> <span class="item_price"><?php echo number_format($item->GiaGiam) ?> VND</span> <del><?php echo number_format($item->Gia) ?> VND</del>
                                            <?php }else{
											 ?>
                                             <span class="item_price"><?php echo number_format($item->Gia) ?> VND</span>
                                             <?php
											}
											 ?>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="" method="post">
																
																	<fieldset>
																	
																	<a href="insertcart.php?id=<?php echo $item->ID ?>"><input type="button" name="submit" value="Thêm Vào Giỏ Hàng" class="button"></a>
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>

<?php
	}
	}
?> 	
<div class="clearfix"></div>
