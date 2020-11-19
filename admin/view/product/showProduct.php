<style>
	th{
		color:white;
	}
</style>
<form action="#" method="post">
      <div class="card mt-3">
        <div class="card-header">
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table"  >
              <thead>
                <tr class="bg-info">
                  <th>Mã Sản Phẩm</th>
					<th>Hình Ảnh</th>
					<th>Tên Sản Phẩm</th>
					<th>Tên Loại</th>
					<th>Giá Gốc</th>
					<th>Giá Giảm</th>
					<th>Hãng</th>
					<th>Truy Cập</th>
					<th>Ẩn Hiện</th>
					<th></th>
					<th></th>

                </tr>
              </thead>
              <tbody>
              <?php
                foreach ($products as $key ) {
			echo'
				<tr>
					<td>'.$key['ma_sp'].'</td>
					<td><img width="100px" height="100px" src="../site/images/'.$key['hinh_anh'].'"></td>
					<td>'.$key['ten_sp'].'</td>
					<td>'.$key['ten_loai'].'</td>
					<td>'.$key['gia_goc'].'</td>
					<td>'.$key['gia_giam'].'</td>
					<td>'.$key['hang'].'</td>
					<td>'.$key['truy_cap'].'</td>
					<td>'.$key['an_hien'].'</td>
					<td><a href="index.php?ctrl=product&act=delete&id='.$key['ma_sp'].'" class="btn btn-warning">delete</a></td>
					<td><a href="index.php?ctrl=product&act=update&id='.$key['ma_sp'].'" class="btn btn-info">edit</a></td>
				</tr>
			';
		}
              ?>
              </tbody>
            </table>
          </div>
        <div class="card-footer">
            <a href="#" class="btn btn-info">Chọn tất cả</a>
            <input type="button" class="btn btn-info" onclick='selectAll()' value="Chọn tất cả(javascript)" >
            <input type="button" class="btn btn-info" onclick='UnSelectAll()' value="bỏ Chọn tất cả(javascript)" >
            <button type="submit" class="btn btn-info">Xoá danh mục đã chọn</button>
            <a href="index.php?ctrl=catalog&action=addnew" class="btn btn-info">Thêm mới</a>
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

