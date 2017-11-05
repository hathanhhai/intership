 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể Loại
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    	                         <thead>
                                          
										
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên Thể Loại</th>
                                <th>Thứ Tự</th>
                                <th>Thể Loại</th>
                                <th>Xóa</th>
                                <th>Chỉnh Sửa</th>
                                <th>Sản Phẩm </th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
								$i = 1;
								foreach($m_cats as $item){
									
									
							?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $i ?></td>
                                <td><?php echo $item->TenDanhMuc ?></td>
                                <td><?php echo $item->Teo ?></td>
                                <td><?php echo $item->TenTheLoai ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return confirm('Bạn có chắc muốn xóa vì các sản phẩm sẽ xóa theo danh mục')" href="cat_delete.php?id=<?php echo $item->IdDanhMuc ?>"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="cat_edit.php?id=<?php echo $item->IdDanhMuc ?>">Chỉnh Sửa</a></td>
                                <td class="center"><i class="fa fa-product fa-fw"></i> <a href="cat_detail.php?id=<?php echo $item->IdDanhMuc ?>"><span style="color:red;margin-right:5px;font-weight:bold;font-size:15px;" ><?php echo count($m_cat->CategoryProduct($item->IdDanhMuc));	?></span>Sản Phẩm</a></td>
                            </tr>
                            <?php
							 	$i++;
								}
							?>
                        </tbody>
                    </table>
                </div>