 <div class="card mt-3">
        <div class="card-header info">
          Chỉnh sửa đơn hàng
        </div>
        <div class="card-body">
          <form action="index.php?ctrl=cart&action=update" method="post">
            <div class="form-group">
                <label for="">Mã đơn hàng</label>
                <input  type="text" readonly name="id" class="form-control" value="<?php echo $id?>">
              </div>
              <div class="form-group">
                <label for="" >Tình trạng</label>
                 <select name="tinhtrang" id="" class="form-control">
                    <option value="1">Đã xử lý</option> 
                    <option value="0">Chưa xử lý</option>
                </select>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
                  <a href="index.php?ctrl=catalogs&action=index" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>