<div class="card mt-3 container">
        <div class="card-header info container">
          THÊM LOẠI HÃNG
        </div>
        <div class="card-body">
          <form action="index.php?ctrl=brand&action=update"  method="post">
              <div class="form-group">
                <label for="">Mã Hãng</label>
                <input type="text"  name="id" class="form-control" readonly value="<?php echo $id;?>">
              </div>
            <div class="form-group">
                <label for="">Hãng</label>
                <input type="text"  name="hang" class="form-control" >
              </div>
              <div class="form-group">
                  <button type="submit" name='btn' class="btn btn-primary" >Lưu</button>
                  <a href="index.php?ctrl=brand&action=index" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>