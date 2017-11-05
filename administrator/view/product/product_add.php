
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <?php
						if($error!=null){
							foreach($error as $item){
								echo "<div class='alert alert-danger'>";
								echo $item;
								echo "</div>";
							}	
						}
						?>
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="tftensp"  placeholder="Nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="tfgia" placeholder="Nhập giá sản phẩm" />
                            </div>
                         
                             <div class="form-group" id="formcheck">
                                <label>Giảm Giá</label>
                                <label class="radio-inline">
                                    <input name="checkgiamgia" value="2" id="checkyes"  type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="checkgiamgia" value="1" id="checkno" checked=""  type="radio">Không
                                </label>
                            </div>
                            <div class="form-group" id="formgiagiam">
                                <label>Giảm Giá</label>
                                <input class="form-control" id="tfgiamgia" name="tfgiamgia" placeholder="Nhập giá giảm sản phẩm" />
                            </div>
                            
                            <div class="form-group">
                                <label>Giới Thiệu</label>
                                <textarea class="form-control" rows="3" name="tfgioithieu"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Chi Tiết</label>
                                <textarea   id="editor1" class="form-control" rows="3" name="tfchitiet"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình</label>
                                <input type="file" name="fImages">
                            </div>
                            
                               <div class="form-group" id="formcheck">
                                <label>Nổi Bật</label>
                                <label class="radio-inline">
                                    <input name="checknoibat" value="1" id="checkyes"  type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="checknoibat" value="0" id="checkno" checked=""  type="radio">Không
                                </label>
                            </div>
                             <div class="form-group" id="formcheck">
                                <label>Slider</label>
                                <label class="radio-inline">
                                    <input name="checkSlider" value="1" id="checkyes"  type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="checkSlider" value="0" id="checkno" checked=""  type="radio">Không
                                </label>
                            </div>
                            
                            <div class="form-group">
                                <label>Thể Loại</label>
                                <select id="selectKind" class="form-control">
                                    <?php
									foreach($kinds as $item){
									?>
                                    <option value="<?php echo $item->ID ?>"><?php echo $item->TenTheLoai ?></option>
                                <?php
									}
								?>
                                </select>
                            </div>
                             <div class="form-group">
                                <label>Danh Mục</label>
                                <select name="selectCat" id="selectCat" class="form-control">
                                    
                                 
                                </select>
                            </div>
                            
                         
                            <button type="submit" name="btnProductAdd" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                
                
              
     