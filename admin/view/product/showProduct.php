<style>
	th{
		color:white;
	}
</style>
<form action="#" method="post">
      <div class="card container ">
        <div class="card-header">
          QUẢN LÝ SẢN PHẨM
        </div>
        <div class="card-body">
          <table class="table table-striped table"  >
              <thead>
                <tr class="bg-primary">
                <th name="chonX[]"></th>
                  <th>Mã Sản Phẩm</th>
                  <th>Loại sản phẩm</th>
                  <th>Hình Ảnh</th>
                  <th>Tên Sản Phẩm</th>
                  <th>Giá Gốc</th>
                  <th>Giá Giảm</th>
                  <th>Hãng</th>
                  <th>Mỏ tả</th>
                  <th>Truy Cập</th>
                  <th>Thứ tự</th>
                  <th>Ẩn Hiện</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach ($products as $key )
                  {
                    
                  $id=$key['ma_loai'];
                  $loaisp=getCatalogById($id);
                   $idhang=$key['ma_hang'];
                  $hangsp=getBrandById($idhang);
                  if($key['an_hien']==1){
                    $anhien='Hiện';
                  }
                  else{
                    $anhien='Ẩn';
                  };
                  echo'
                    <tr>
                      <td><input type="checkbox" name="chonX[]"></td>
                      <td>'.$key['ma_sp'].'</td>
                      <td>'.$loaisp['ten_loai'].'</td>
                      <td><img width="100px" height="100px" src="'.$key['hinh_anh'].'"></td>
                      <td>'.$key['ten_sp'].'</td>
                      <td>'.$key['gia_goc'].'</td>
                      <td>'.$key['gia_giam'].'</td>
                      <td>'.$hangsp['hang'].'</td>
                      <td>'.$key['mo_ta'].'</td>
                      <td>'.$key['truy_cap'].'</td>
                      <td>'.$key['thu_tu'].'</td>
                      <td>'.$anhien.'</td>
                      <td><a onclick="return canhbao()" href="index.php?ctrl=product&act=delete&id='.$key['ma_sp'].'" class="btn btn-warning">Xóa</a></td>
                      <td><a href="index.php?ctrl=product&act=update&id='.$key['ma_sp'].'" class="btn btn-info">Sửa</a></td>
                    </tr>
                  ';
                }
              ?>
              </tbody>
            </table>
          </div>
        <div class="card-footer">
            <input type="button" class="btn btn-info" onclick='selectAll()' value="Chọn tất cả" >
            <input type="button" class="btn btn-info" onclick='UnSelectAll()' value="bỏ Chọn tất cả" >
            <button onclick="return canhbao()" type="submit" class="btn btn-info">Xoá danh mục đã chọn</button>
            <a href="index.php?ctrl=product&act=addnew" class="btn btn-danger">Thêm mới</a>
        </div>
      </div>
</form>
<script language="JavaScript">
              function selectAll(){
				var items=document.getElementsByName('chonX[]');
				for(var i=0; i<items.length; i++){
					if(items[i].type=='checkbox')
						items[i].checked=true;
				}
			}
</script>
<script>
              function UnSelectAll(){
                var items=document.getElementsByName('chonX[]');
                for(var i=0; i<items.length; i++){
                  if(items[i].type=='checkbox')
                    items[i].checked=false;
                }
              }			
            </script>

