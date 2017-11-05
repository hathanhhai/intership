 <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					
					<ul class="slides">
						<li data-thumb="Uploads/<?php echo $product->Hinh ?>">
							<div class="thumb-image"> <img src="Uploads/<?php echo $product->Hinh ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="Uploads/<?php echo $product->Hinh ?>">
							<div class="thumb-image"> <img src="Uploads/<?php echo $product->Hinh ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
						<li data-thumb="Uploads/<?php echo $product->Hinh ?>">
							<div class="thumb-image"> <img src="Uploads/<?php echo $product->Hinh ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
       
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?php echo $product->TenSanPham ?></h3>
          <?php 
												if($product->GiaGiam>0){
											?>  <span class="item_price"><?php echo number_format($product->GiaGiam) ?> VND</span> <del><?php echo number_format($product->Gia) ?> VND</del></p>
                                            <?php }else{
											 ?>
                                            <p> <span class="item_price"><?php echo number_format($product->Gia) ?> VND</span></p>
                                             <?php
											}
											 ?>
					
					<div class="description">
						<h5 style="margin-left:2px;line-height:30px"><?php echo $product->GioiThieu ?></h5>
					
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
						
						</div>
					</div>
					
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
														<a href="insertcart.php?id=<?php echo $item->ID ?>"><input type="button" name="submit" value="Thêm Vào Giỏ Hàng" class="button"></a>
																</fieldset>
															</form>
														</div>
																			
					</div>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
						                                   <li class="share">Chia sẽ : </li>
															<li><a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)" href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
					
		      </div>
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	<div class="responsive_tabs_agileits"> 
			<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Chi Tiết</li>
							<li>Phản Hồi</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  
							   <p><?php echo $product->ChiTiet ?></p>
							   
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">
							
							<div class="single_page_agile_its_w3ls">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="content/images/t1.jpg" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">NEWDAY</a></li>
												<li></li>
											</ul>
											<p>Hãy nêu ý kiến của bạn về chúng tôi.
                                            </p>
										</div>
										<div class="clearfix"> </div>
						             </div>
									 <div class="add-review">
										<h4>Nhập Phản Hồi</h4>
										<form action="#" method="post">
												<input type="text" name="Name" placeholder="Nhập tên của bạn..." required="Name">
												<input type="text" name="Phone" placeholder="Nhập số điện thoại liên hệ..." required="Phone"> 
												<textarea name="Message" placeholder="Nội dung..." required></textarea>
											<input type="submit" value="Gửi">
										</form>
									</div>
								 </div>
								 
							 </div>
						
				</div>	
			</div>
			</div>
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Sản phẩm <span>khác</span></h3>	
            <?php
			foreach($productRand as $item){
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
		
							<div class="clearfix"> </div>
					<!--//slider_owl-->
		         </div>
	        </div>
 </div>
<!--//single_page-->