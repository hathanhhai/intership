 <div class="row">
	                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <?php
					if($CatFlowingPro!=null){
					?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    	                         <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Giảm Giá</th>
                                <th>Giới Thiệu</th>
                                <th>Chi Tiết</th>
                                <th>Hình</th>
                                <th>Nổi Bật</th>
                                <th>Slider</th>
                                <th>Lượt Xem</th>
                                <th>Xóa</th>
                                <th>Chỉnh Sửa</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
							
								$i = 1;
								foreach($CatFlowingPro as $item){
							?>
                            
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $i ?></td>
                                <td><?php echo $item->TenSanPham ?></td>
                                <td><?php echo $item->Gia ?></td>
                                <td><?php echo $item->GiaGiam ?></td>
                                <th><?php echo $item->GioiThieu ?></th>
                                <th><?php echo $item->ChiTiet ?></th>
                                <th><img src="../Uploads/<?php echo $item->Hinh ?>" width="70" height="70"/></th>
                                <th><?php if($item->NoiBat==1){echo "Có";} else{echo "Không";} ?></th>
                                <th><?php if($item->Slider==1){echo "Chọn";} else{echo "Không";} ?></th>
                                <th><?php echo $item->LuotXem ?></th>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return confirm('Bạn có chắc muốn xóa sản phẩm này')" href="product_delete.php?id=<?php echo $item->ID ?>"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="product_edit.php?id=<?php echo $item->ID ?>">Chỉnh Sửa</a></td>
                            </tr>
                            <?php
							 	$i++;
								}
								}else{
								
							?>
                            <div class="alert alert-success">Không có sản phẩm nào</div>
                        
                        </tbody>
                    </table>
                    <?php
								}
						?>
                </div>