<!-- footer -->
<div class="footer">
<p id="lienhe"></p>
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><span>C</span>hất lượng </a></h2>
			<p>NEWDAY cam kết chất lượng cho tất cả sản phẩm bán tại cửa
             hàng NEWDAY bằng chính sách bảo hành 365 ngày và chăm sóc trọn đời sau khi hết bảo hành.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="https://web.facebook.com/vuong.nguyenminh.1804" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="https://twitter.com/?lang=vi" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.instagram.com/minhvuong22/" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right" id="lienhe">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4> <span>Phục vụ</span> </h4>
					<p>NEWDAY cam kết chất lượng phục vụ tốt nhất, 
                    chuyên nghiệp nhất cho mọi khách hàng bằng 
                    chính sách hoàn tiền và tặng quà nếu nhân viên phục vụ quí khách không chu đáo.
                    </p>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4>Liên Hệ <span>NEWDAY</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Điện Thoại</h6>
								<p>01699994511</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email </h6>
								<p>Email :<a href="Bob.minhvuong@email.com">Bob.minhvuong@email.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Địa Chỉ</h6>
								<p>123 Phan Văn trị,Q.GÒ VẤp,TP.HCM
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				
			</div>
			
		
<!-- //footer -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="content/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="content/js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="content/js/minicart.min.js"></script>

	<script src="content/js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>

<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<script src="content/js/imagezoom.js"></script>
<script src="content/js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="content/js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="content/js/jquery.waypoints.min.js"></script>
	<script src="content/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="content/js/move-top.js"></script>
<script type="text/javascript" src="content/js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script src="content/js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			var mang=[];
		
				<?php foreach($_SESSION['cart'] as $item){ ?>
				$('#quantity_<?php echo $item->ID ?>').change(function(){
					var giulaisl = $('#quantity_<?php echo $item->ID ?>').val();
			
					
					var sl = $(this).val();
					
				
				
					var tong=parseInt(sl)*parseInt(<?php echo $item->Gia ?>);
		
					
					$('#gia_<?php echo $item->ID ?>').html(tong+' VND');
					
					
							
				});
				<?php
				}
				?>
				
					<?php foreach($_SESSION['cart'] as $item){ ?>
					$('#quantity_<?php echo $item->ID ?>').change(function(){
				
					var tongfinal=0;
					for(var i=0;i<10;i++){
					var tonggia=$('#gia_<?php echo $item->ID ?>').text()[i];
					tongfinal +=parseInt(tonggia); 
						i++;
					
					}
					$('#tong').html(tongfinal);
				});
						<?php
				}
				?>	
				
			});
			
			
	</script>
  
<!-- //here ends scrolling icon -->

<script type="text/javascript" src="content/js/myjs.js"></script>
<script type="text/javascript">

	
	 function checkBook(){
				
			var tenKH = document.getElementById('tftenkh').value;
			var sdt = document.getElementById('tfsdt').value;
			var reg = /^[0-9]+$/;
			if(tenKH!="" && sdt!=""  && reg.test(sdt)){
				return true;	
			}else{
				alert("Dữ liệu không hợp lệ");	
			}
			
			return false;	
		}
		
		
</script>



<!-- for bootstrap working -->
<script type="text/javascript" src="content/js/bootstrap.js"></script>
</body>
</html>
