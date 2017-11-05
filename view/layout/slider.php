<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class=""></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Giảm Giá <span>ĐẶC BIỆT</span></h3>
						<p>Cho Ngày Hôm Nay</p>
						<a class="hvr-outline-out button2" href="#Arrivals">Shop Now </a>
					</div>
				</div>
			</div>
			
			<div class="item item3 active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Sành Điệu <span>Tự Tin</span></h3>
						<p>Là Con Gái Thật Tuyệt</p>
						<a class="hvr-outline-out button2" href="#Arrivals">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>
                        Bạn Đã Có<span>
                        BỘ SƯU TẬP</span></h3>
						<p>
                        HOT Nhất TRONG THÁNG NÀY CHƯA</p>
						<a class="hvr-outline-out button2" href="#Arrivals">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Nam Tính<span>Lịch Lãm</span></h3>
						<p>Cùng NEW DAY Nào</p>
						<a class="hvr-outline-out button2" href="#Arrivals">Shop Now </a>
					</div>
				</div>
			</div> 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div>
    
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
            <?php
			if(sizeof($kinds)%2==0){
					
			foreach($kinds as $item){
			?>
            	<a href="the-loai-<?php echo changeTitle($item->TenTheLoai); ?>-<?php echo $item->ID ?>.html">
    	           <div style="margin-bottom:2%" class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="content/images/bottom1.jpg" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>T</span>hể loại</h3>
								<p><?php echo $item->TenTheLoai ?></p>
							</figcaption>			
						</figure>
					</div>
                    </a>
				<?php
			}
			}else{
				foreach($kindLimit as $item){
					?>
                    <a href="Kind.php?id=<?php echo $item->ID ?>">
    	           <div style="margin-bottom:2%" class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="content/images/bottom1.jpg" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p><?php echo $item->TenTheLoai ?></p>
							</figcaption>			
						</figure>
					</div>
                    </a>
                    <?php
				}
			}
					?>
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
    
    <div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">Đang <span>Khuyến Mãi</span></h3>
		
		<div class="col-md-6 bb-grids bb-left-agileits-w3layouts">
		
		
			<a href="san-pham-<?php echo changeTitle($productSaleOne->TenSanPham);?>-<?php echo $productSaleOne->ID?>.html">
			   <div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
							<img src="Uploads/<?php echo $productSaleOne->Hinh ?>" style="height:42.5em" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>K</span>huyến mãi </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
			    </div>
			</a>
		</div>
        
		<div class="col-md-6 bb-grids bb-middle-agileits-w3layouts">
        <?php
		foreach($productSale as $item){
		?>
		      <a href="san-pham-<?php echo changeTitle($item->TenSanPham);?>-<?php echo $item->ID?>.html">
		       <div class="bb-middle-agileits-w3layouts grid">
			         <figure class="effect-roxy">
							<img src="Uploads/<?php echo $item->Hinh ?>" style="height:21em" alt=" " class="img-responsive">
							<figcaption>
							<h3><span>K</span>huyến mãi </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
		        </div>
				</a>
				
                 <?php
		}
				 ?>   
		<div class="clearfix"></div>
	</div>
    
    
	</div>
    </div>
    
    
    <div class="agile_last_double_sectionw3ls">
    <?php
	foreach($productSale as $item){
	?>
            <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="san-pham-<?php echo changeTitle($item->TenSanPham);?>-<?php echo $item->ID?>.html"><img style="height:18em" src="Uploads/<?php  echo $item->Hinh ?>" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
					
			</div>
		
            <?php
	}
			?>
			<div class="clearfix"></div>
            
	   </div>