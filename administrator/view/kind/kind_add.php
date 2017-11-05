 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" onSubmit="return confirmKindAdd()">
                           <?php
						   if(isset($_SESSION['KindAdd'])){?>
							<div id="showNotify" class="alert alert-success"><?php echo $_SESSION['KindAdd'] ?></div>  
						<?php
						   }
						?>
                            <div class="form-group">
                                <label>Tên Thể Loại</label>
                                <input class="form-control" id="tfTenTheLoai" name="tfTenTheLoai" onBlur="Kind_Name()" placeholder="Nhập tên thể loại" />
                                <span id="errorKindName"></span>
                            </div>
                            
                            <div class="form-group">
                                <label>Thứ Tự</label>
                                <span id="error"></span>
                                <input class="form-control" id="tfThuTu" onBlur="Kind_ThuTu()" name="tfThuTu" placeholder="Nhập thứ tự hiện trên trang chính " /><span id="errorKindThuTu"></span>
                            </div>
                           
                            <button type="submit" name="btnAddKind"  id="btnAddKind" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>