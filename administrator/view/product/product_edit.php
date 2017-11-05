
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                         <?php
						if($error!=null){
							foreach($error as $item){
								echo "<div class='alert alert-danger'>";
								echo $item;
								echo "</div>";
							}	
						}
						?>
                        <form action="" method="POST" enctype="multipart/form-data">
                       
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="tftensp"  value="<?php echo $ProductID->TenSanPham ?>" placeholder="Nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" value="<?php echo $ProductID->Gia ?>" name="tfgia" placeholder="Nhập giá sản phẩm" />
                            </div>
                      
                             <div class="form-group" id="formcheck">
                                <label>Giảm Giá</label>
                                <label class="radio-inline">
                                    <input name="checkgiamgia" value="1" id="checkyes"    type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="checkgiamgia" value="2" id="checkno"   type="radio">Không
                                </label>
                            </div>
                            <div class="form-group" id="formgiagiam">
                                <label>Giảm Giá</label>
                                <input class="form-control" value="<?php echo $ProductID->GiaGiam ?>"  id="tfgiamgia" name="tfgiamgia" placeholder="Nhập giá giảm sản phẩm" />
                            </div>
                            
                            <div class="form-group">
                                <label>Giới Thiệu</label>
                                <textarea class="form-control" value=""  rows="3" name="tfgioithieu"><?php echo $ProductID->GioiThieu ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Chi Tiết</label>
                                <textarea   id="editor1" class="form-control" rows="3" name="tfchitiet"><?php echo $ProductID->ChiTiet ?> </textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình</label>
                                <input type="file" name="fImages">
                            </div>
                            
                               <div class="form-group" id="formcheck">
                                <label>Nổi Bật</label>
                                
								
								
                                <label class="radio-inline">
                                    <input name="checknoibat" value="1" id="checkyes" <?php if($ProductID->NoiBat == 1){echo 'checked=""';} ?>   type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="checknoibat" value="0" id="checkno" <?php if($ProductID->NoiBat == 0	){echo 'checked=""';} ?>  type="radio">Không
                                </label>
                            </div>
                             <div class="form-group" id="formcheck">
                                <label>Slider</label>
                                <label class="radio-inline">
                                    <input name="checkSlider" value="1" id="checkyes" <?php if($ProductID->Slider == 1){echo 'checked=""';} ?>  type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="checkSlider" value="0" id="checkno" <?php if($ProductID->Slider == 0){echo 'checked=""';} ?>  type="radio">Không
                                </label>
                            </div>
                            

                            <div class="form-group">
                                <label>Thể Loại</label>
                                <select id="selectKind" class="form-control">
                                    <?php
									foreach($kinds as $item){
										if($item->ID==$ProductID->ID_DanhMuc){
									?>
                                    <option selected="selected" value="<?php echo $item->ID ?>"><?php echo $item->TenTheLoai ?></option><?php
										}else{
	?><option value="<?php echo $item->ID ?>"><?php echo $item->TenTheLoai ?></option>
    
    
                                <?php
									}}
								?>
                                </select>
                            </div>
                             <div class="form-group">
                                <label>Danh Mục</label>
                                <select name="selectCat" id="selectCat" class="form-control">
                                    
                                    <?php
									foreach($m_cats as $item){
										if($item->ID==$ProductID->ID_DanhMuc){
									?>
                                    
                                    <option selected="selected" value="<?php echo $item->ID; ?>"><?php echo $item->TenDanhMuc;?></option>
                                 <?php
									}else{
										
								 ?>
                                 <option value="<?php echo $item->ID; ?>"><?php echo $item->TenDanhMuc;?></option>
                                 <?php
									}
									}
								 ?>
                                </select>
                            </div>
                            
                         
                            <button type="submit" name="btnProductEdit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                
                
              
     