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
                                <th>Xóa</th>
                                <th>Chỉnh Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
								$i = 1;
								foreach($m_cats as $item){
							?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $i ?></td>
                                <td><?php echo $item->TenTheLoai ?></td>
                                <td><?php echo $item->ThuTu ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return confirm('Bạn có chắc muốn xóa vì các danh mục và sản phẩm sẽ xóa theo thể loại')" href="kind_delete.php?id=<?php echo $item->ID ?>"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="kind_edit.php?id=<?php echo $item->ID ?>">Chỉnh Sửa</a></td>
                            </tr>
                            <?php
							 	$i++;
								}
							?>
                        </tbody>
                    </table>
                </div>