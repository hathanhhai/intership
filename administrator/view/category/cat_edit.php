 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" onSubmit="return confirmKindAdd()">
                             <div class="form-group" >
          
                                    <label>Thể Loại</label>
                                    <select class="form-control" name="kind">
                                        <?php
											foreach($kind as $item){
											if($item->ID==$cat->ID_TheLoai){
												
										?>
                                        <option selected="selected" value="<?php echo $item->ID ?>"><?php echo $item->TenTheLoai ?></option>
                                        <?php 
											}else{
												
										?>
                                          <option  value="<?php echo $item->ID ?>"><?php echo $item->TenTheLoai ?></option>
                                          <?php 
											}
											}
										  ?>
                                    </select>
                                </div>
                            <div class="form-group">
                                <label>Tên Danh Mục</label>
                                <input class="form-control" id="tfTenTheLoai" value="<?php echo $cat->TenDanhMuc;  ?>" name="tfTenDanhMuc" placeholder="Nhập tên danh mục" />
                                <?php if(isset($error['TenDanhMuc'])){echo '<span id="errorKindName">Bạn chưa nhập tên danh mục</span>';} ?>
                            </div>
                            
                            <div class="form-group">
                                <label>Thứ Tự</label>
                                <span id="error"></span>
                                <input class="form-control" id="tfThuTu" value="<?php echo $cat->ThuTu; ?>" name="tfThuTu" placeholder="Nhập thứ tự hiện trên trang chính " /><span id="errorKindThuTu"></span>
                            </div>
                  
                            <button type="submit" name="btnEditCat"   class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>