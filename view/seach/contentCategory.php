<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-4 products-left">
			
			<div class="css-treeview">
				<h4>Danh mục</h4>
				
						<ul>
                        <?php
						$i=0;
						foreach($kinds as $item){
						?>
							<li><input type="checkbox"  checked="checked	" id="item-0-<?php echo $i; ?>"><label for="item-0-<?php echo $i; ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><?php echo $item->TenTheLoai ?></label>
								<ul>
                                <?php
								foreach($getCategorys = $m_cat->CategoryALlById($item->ID) as $item1){
								?>
									<li><a href="category.php?id=<?php echo $item1->ID ?>"><?php echo $item1->TenDanhMuc ?></a></li>
									
								<?php
								}
								?>
                                </ul>
							</li>
						<?php
						$i++;
						}
						?>
                        </ul>
				
			</div>
			
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">

		<div class="men-wear-top" style="margin-top:1%">
				
				<div id="top" class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider3">
						<?php
						if(!empty($productSlider)){
						foreach($productSlider as $item){
						?>
                        <li id="callbacks1_s0" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
							<a href="detail.php?id=<?php echo $item->ID ?>"><img class="img-responsive" src="Uploads/<?php echo $item->Hinh ?>" style="height:18em;width:100%" alt=" "></a>
						</li>
						<?php
						}}else{
							foreach($productRand as $item){
						?>
                     	 <li id="callbacks1_s0" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
							<a href="detail.php?id=<?php echo $item->ID ?>"><img class="img-responsive" src="Uploads/<?php echo $item->Hinh ?>" style="height:18em;width:100%" alt=" "></a>
						</li>
                        <?php
							}}
						?>

					</ul><ul class="callbacks_tabs callbacks1_tabs"><li class="callbacks1_s1 callbacks_here"><a href="#" class="callbacks1_s1">1</a></li><li class="callbacks1_s2"><a href="#" class="callbacks1_s2">2</a></li><li class="callbacks1_s3"><a href="#" class="callbacks1_s3">3</a></li></ul>
				</div>
				<div class="clearfix"></div>
			</div>
		
			
				
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		<div class="single-pro">
			<?php
				if(!empty($productSeach)){
		
			foreach($productSeach as $item){
			?>
					  <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="Uploads/<?php echo $item->Hinh ?>" alt="" style="height:300px" class="pro-image-front">
										<img src="Uploads/<?php echo $item->Hinh ?>" alt="" style="height:300px" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="detail.php?id=<?php echo $item->ID ?>" class="link-product-add-cart">Chi Tiết</a>
												</div>
											</div>
									<?php if($item->NoiBat == 1){ ?><span class="product-new-top">Mới</span><?php } ?>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="detail.php?id=<?php echo $item->ID ?>"><?php echo $item->TenSanPham ?></a></h4>
										<div class="info-product-price">
											 <span class="item_price"><?php echo number_format($item->Gia) ?> VND</span> <del><?php if($item->GiaGiam>0){ ?><del><?php echo number_format($item->GiaGiam) ?> VND</del><?php } ?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Thêm Vào Giỏ Hàng" class="button">
																</fieldset>
															</form>
														</div>
											<div class="clearfix"></div>								
									</div>
								</div>
							</div>
               <?php
			}
		
				}else{
					echo '<h3>Không tìm thấy sản phẩm nào...</h3>';	
				}
							?>
							
				</div>
                       
		</div>

	</div>
</div>  
    