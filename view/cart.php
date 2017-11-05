
         <div class="row-12">
                    <div class="col-lg-8">
                        <h1 class="page-header">Giỏ Hàng
                          <?php
					if(!empty($errorCart)){
					foreach($errorCart as $item){
						echo '<div style="height:50px;font-size:15px;width:500px;" class="alert alert-danger">';
						echo $item;
						echo '</div>';		
					}
					}
					?>
            
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                        <form id="form-cart" action="" method="post" >
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    
                        <thead>
                            <tr align="center">
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                          
                                <th>Delete</th>
                             
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
						
						foreach($_SESSION['cart'] as $item ){
						?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $item->TenSanPham ?></td>
                                <td>  <select name="quantity"  id="quantity_<?php echo $item->ID ?>" style="width:200px;" class="form-control">
                                    <?php
									 for($i=1;$i<=10;$i++){
										echo '<option value="'.$i.'">'.$i.'</option>';	 
									}
									?>
                                </select></td>
                                <td class="giacart" id="gia_<?php echo $item->ID ?>"><?php echo number_format($item->Gia) ?> VND</td>
                            	
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="cartdelete.php?id=<?php  echo $item->ID ?>"> Xóa</a></td>
                          
                            </tr>
                        <?php
						}
						?>
                  
                         <tr class="odd gradeX" align="center">
                                <td> <input class="form-control" id="tftenkh" name="tftenkh" placeholder="Nhập tên khách hàng..." /></td>
                                <td> <input style="width:300px;" id="tfsdt" class="form-control" name="tfsdt" placeholder="Nhập số điện thoại..." />
                                
                                </td>
                                <td id="tong" style="color:Red;"><?php
									$total = 0;
									foreach($_SESSION['cart'] as $item){
										$total+=$item->Gia;
									}
									echo number_format($total).' VND';
						
								 ?></td>
                              	<input type="hidden" name="totalPrice" value="<?php echo $total ?>"/>
                                <td class="center"><button type="submit" onClick="return checkBook()" name="btnDatHang" class="btn btn-default">Đặt hàng</button></td></tr>
                          
                            </tr>
                             
                        </tbody>
                        
                    </table>
                    </form>
                </div>
          
                
      