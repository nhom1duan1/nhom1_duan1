<form action="index.php?ctrl=news" method="post" class="container d-flex justify-content-center">
<div class="card container">
  <div class="card-header info">
    Thêm tin tức 
  </div>
  <div class="card-body">
    <div class="form-group">
      <label for="">Tiêu đề</label>
      <input type="text" name="tieude" class="form-control" placeholder="nhập tiêu đề" value="<?php echo ''; ?>">
    </div>
    <div class="form-group">
      <label for="">Tóm Tắt Tin Tức</label>
      <input type="text" name="tomTat" class="form-control" placeholder="nhập tóm tắt tin tức (không quá 300 ký tự)">
    </div>
    <div class="form-group">
      <label for="">Ảnh nền tin tức</label>
      <input type="file" name="anhNen" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Noi dung</label><br>
      <script src="view/ckeditor/ckeditor.js"></script>
      <textarea name="ten" id="ten" style="width: 100%;height: 100vh;" maxlength="6000"></textarea>
      <script>CKEDITOR.replace('ten');</script>
    </div>
    <div class="form-group">
      <label for="">Ẩn hiện</label>
      <select name="anhien" id="anhien">
        <option value="0">Ẩn</option>
        <option value="1" selected>Hiện</option>
      </select>
    </div>
    <div class="form-group">
      <input name="submit" type="submit" class="btn btn-primary" value="Lưu">
    </div>
  </div>
</div>
</form>
