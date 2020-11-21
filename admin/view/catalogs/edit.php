
      <div class="card mt-3">
        <div class="card-header info">
          CHỈNH SỬA LOẠI SẢN PHẨM
        </div>
        <div class="card-body">
          <form action="index.php?ctrl=catalogs&action=update" method="post">
            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input  type="text" readonly name="id" class="form-control" value="<?php echo $id?>">
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="nameCata" class="form-control" value="<?php echo $cate['ten_loai'];?>" >

              </div>
               <div class="form-group">
                <label for="">Thứ tự</label>
                <input type="text" name="thutu" class="form-control" value="<?php echo $cate['thu_tu'];?>">
              </div>
               <div class="form-group">
                <label for="">Ẩn hiện</label>
                <select name="anhien" id="" class="form-control">
                  <option value="0">Ẩn</option>
                  <option value="1">Hiện</option>
                </select>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
                  <a href="index.php?ctrl=catalogs&action=index" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
