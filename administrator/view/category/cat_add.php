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
										?>
                                        <option value="<?php echo $item->ID ?>"><?php echo $item->TenTheLoai ?></option>
                                        <?php 
										}
										?>
                                    </select>
                                </div>
                            <div class="form-group">
                                <label>Tên Danh Mục</label>
                                <input class="form-control" id="tfTenTheLoai" name="tfTenDanhMuc" onBlur="Kind_Name()" placeholder="Nhập tên danh mục" />
                                <span id="errorKindName"></span>
                            </div>
                            
                            <div class="form-group">
                                <label>Thứ Tự</label>
                                <span id="error"></span>
                                <input class="form-control" id="tfThuTu" onBlur="Kind_ThuTu()" name="tfThuTu" placeholder="Nhập thứ tự hiện trên trang chính " /><span id="errorKindThuTu"></span>
                            </div>
                  
                            <button type="submit" name="btnAddCat"  id="btnAddKind" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>