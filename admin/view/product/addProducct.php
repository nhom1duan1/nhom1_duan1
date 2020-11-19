<<<<<<< HEAD
=======
<div class="card mt-3 container">
        <div class="card-header info">
          QUẢN LÝ SẢN PHẨM
        </div>
        <div class="card-body">
          <form action="index.php?ctrl=product&act=insert" method="post">
        
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
                <select name="" class="form-control" id="">
                    <option value="">.</option>
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
                <label for="">Hãng</label>
                <select name="brand" class="form-control" id="">
                    <option value="">.</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Hình ảnh</label>
              <input type="file" name="imgProduct" class="form-control">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Lưu</button>
                  <a href="#" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
>>>>>>> 74c1794bd39a6f45ea649a06dbad5fb461efebef
