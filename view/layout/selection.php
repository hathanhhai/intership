<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info" id="Arrivals">Sản  <span>phẩm mới</span></h3>		
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul id="kindSelection" class="resp-tabs-list">
                        	<?php
                            foreach($kinds as $item){
							?>
                     
							<li class="resp-tab-item" kindID="<?php echo $item->ID ?>" id="liKind"  aria-controls="tab_item-2" role="tab"><?php echo $item->TenTheLoai ?></li>
                            <?php
							}
							?>
						
						</ul>
					<div class="resp-tabs-container">
					
			
					</div>
                    <div id="dataProduct">
                     <div class="resp-tabs-container">
					<!--/tab_one-->
						<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span> Men's</h2><div class="tab1 resp-tab-content resp-tab-content-active" style="display:block" aria-labelledby="tab_item-0">
							<?php
							foreach($product as $item){
							?>
   <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="Uploads/<?php echo $item->Hinh ?>" alt="" style="height:300px" class="pro-image-front">
										<img src="Uploads/<?php echo $item->Hinh ?>" alt="" style="height:300px" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="san-pham-<?php echo changeTitle($item->TenSanPham);?>-<?php echo $item->ID?>.html" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
											<?php if($item->NoiBat == 1){ ?><span class="product-new-top">Mới</span><?php } ?>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html"><?php echo $item->TenSanPham ?></a></h4>
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
							?>

							<div class="clearfix"></div>
						</div>
					</div>	 
                     </div>
                        
				</div>	
			</div>
		</div>
        
        
        <!--product-->
                 