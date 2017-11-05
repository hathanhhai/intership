 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Đơn Hàng
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <?php
					
					?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    	                         <thead>
                                          
										
                            <tr align="center">
                                <th>STT</th>
                                <th>Ngày</th>
                                <th>Tên Khách Hàng</th>
                                <th>Số Điện Thoại</th>
                                <th>Số Lượng - Tên Sản Phẩm</th>
                                <th>Tổng tiền</th>
                                <th>Trạng Thái</th>
                             
                                <th>Xóa</th>
                                <th>Sản Phẩm </th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
						
								
								$i = 1;
								
								foreach($listCart as $item){
									
									
							?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $i ?></td>
                                <td><?php echo $item->Ngay ?></td>
                                <td><?php echo $item->TenKH ?></td>
                                <td><?php echo $item->SDT ?></td>
                                <td><?php echo $item->SoLuong ?> - <?php echo $item->TenSanPham ?></td>
                                <td style="color:Red"><?php echo number_format($item->tongtien) ?> VND</td>
                                <th><?php if($item->TrangThai==0){ echo '<p>Chưa Duyệt<p>';}else{echo'<p style="color:Red;">Đã Duyệt<p>';} ?></th>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return confirm('Bạn có chắc muốn xóa vì các sản phẩm sẽ xóa theo danh mục')" onClick="return comfirm('Bạn có chắc muốn xóa không ?')" href="cart_delete.php?id=<?php echo $item->ID ?>"> Xóa</a></td>
                                
                                <td class="center"><i class="fa fa-product fa-fw"></i> <a href="cart_detail.php?id=<?php echo $item->ID ?>"><span style="color:red;margin-right:5px;font-weight:bold;font-size:15px;" ><?php echo $item->slsp	?></span>Sản Phẩm</a></td>
                            </tr>
                            <?php
							 	$i++;
								}
								
							?>
                        </tbody>
                    </table>
                </div>