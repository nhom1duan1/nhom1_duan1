
        
          <form action="index.php?ctrl=product&act=insert" method="post" class="container d-flex justify-content-center">
            <div class="card container">
              <div class="card-header info">
                QUẢN LÝ SẢN PHẨM
              </div>
              <div class="card-body">
                  <div class="form-group">
                    <label for="">Mã Sản Phẩm</label>
                    <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
                  </div>
            
                  <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="productName" class="form-control" placeholder="Tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <select name="loai" class="form-control" id="">
                        <?php
                      foreach($catalogs as $cate){
                        echo '<option value='.$cate['ma_loai'].' >'.$cate['ten_loai'].'</option>';
                      }
                    ?>     
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Giá gốc</label>
                  <input type="text" name="giaGoc" class="form-control" placeholder="Giá gốc">
                  </div>
                  <div class="form-group">
                    <label for="">Giá giảm</label>
                  <input type="text" name="giaGiam" class="form-control" placeholder="Giá Giảm">
                  </div>
                  <div class="form-group">
                    <label for="">Mô tả</label>
                  <input type="text" name="mota" class="form-control" placeholder="Mô tả">
                  </div>
                  <div class="form-group">
                    <label for="">Hãng</label>
                    <select name="brand" class="form-control" id="">
                        <?php
                      foreach($hang as $ceta){
                        echo '<option>'.$ceta['hang'].'</option>';
                      }
                    ?>     
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Truy cập</label>
                  <input type="text" name="truycap" class="form-control" placeholder="Truy cập">
                  </div>
                  <div class="form-group">
                    <label for="">Hình ảnh</label>
                  <input type="file" name="imgProduct"  class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Thứ tự</label>
                  <input type="text" name="thutu" class="form-control" placeholder="Thứ tự">
                  </div>
                  <div class="form-group">
                    <label for="">Ẩn hiện</label>
                  <select name="anhien" id="" class="form-control">
                  <option value="0">Ẩn</option>
                  <option value="1">Hiện</option>
                </select>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Lưu</button>
                      <a href="#" class="btn btn-danger">Danh sách</a>
                  </div>
              </div>
            </div>
          </form>