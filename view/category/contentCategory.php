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
									<li><a href="danh-muc-<?php echo changeTitle($item1->TenDanhMuc); ?>-<?php echo $item1->ID ?>.html"><?php echo $item1->TenDanhMuc ?></a></li>
									
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
			<h5><?php echo $getNameCat; ?> <span>có (<?php echo $countProduct; ?>) sản phẩm</span></h5>
		<div class="men-wear-top" style="margin-top:2%">
				
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
				if(!empty($productss)){
		
			foreach($productss as $item){
			?>
					  <div class="col-md-3 product-men single" style="margin-top:2%;">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="Uploads/<?php echo $item->Hinh ?>" alt="" style="height:300px" class="pro-image-front">
										<img src="Uploads/<?php echo $item->Hinh ?>" alt="" style="height:300px" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a    href="san-pham-<?php echo changeTitle($item->TenSanPham);?>-<?php echo $item->ID?>.html" class="link-product-add-cart">Chi Tiết</a>
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
		
				}else{
					echo '<h3>Hiện tại chưa có sản phẩm nào...</h3>';	
				}
							?>
							
				
							<div class="clearfix"></div>
                       
		</div>

	</div>
</div>          <div style="width:100%;height:auto;text-align:center;">   <?php echo $lst; ?></div>