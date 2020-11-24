<div class="card mt-3 container">
        <div class="card-header info container">
          THÊM LOẠI SẢN PHẨM
        </div>
        <div class="card-body">
          <form action="index.php?ctrl=catalogs&action=insert"  method="post">
        
            <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh" >
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="nameCata" class="form-control" placeholder="Tên loại" require>
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
                  <button type="submit" class="btn btn-primary" >Lưu</button>
                  <a href="index.php?ctrl=catalog" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>