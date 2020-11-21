<style>
	th{
		color:white;
	}
</style>
<form action="#" method="post" class="container d-flex justify-content-center">
      <div class="card container">
        <div class="card-header">
          QUẢN LÝ GIỎ HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table"  >
              <thead>
                <tr class="bg-info">
				 <th scope="col"></th>
                 <th>Mã đơn hàng</th>
					<th scope="col">Mã sản phẩm</th>
					<th scope="col">Mã khách hàng</th>
					<th scope="col">Tên sản phẩm</th>
						<th scope="col">Hình ảnh</th>
					<th scope="col">Giá</th>
					<th scope="col">Số lượng sản phẩm</th>
					<th scope="col">Thành tiền</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">Giờ đặt</th>
                    <th scope="col">Tình trạng</th>
					<th></th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
              <?php
                foreach($catalogs as $key){
                  if($key['tinh_trang']==1){
                    $key['tinh_trang']="Đã xử lý";
                  }else{
                    $key['tinh_trang']="Chưa xử lý";
                  }
                  echo'
                    <tr>
					  <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"></th>
            <td>'.$key['ma_donhang'].'</td>
            <td>'.$key['ma_sp'].'</td>
                    
						<td>'.$key['ma_kh'].'</td>
						<td>'.$key['ten_sp'].'</td>
							 <td><img width="100px" height="100px" src="'.$key['hinh_anh'].'"></td>
						<td>'.$key['gia'].'</td>
            <td>'.$key['so_luong'].'</td>
            	<td>'.$key['thanh_tien'].'</td>
            	<td>'.$key['ngay_dat'].'</td>
              <td>'.$key['gio_dat'].'</td>
                <td>'.$key['tinh_trang'].'</td>
                 <td>
						<a class="btn btn-warning" href="index.php?ctrl=cart&action=delete&ma_donhang='.$key['ma_donhang'].'">Xóa</a>
						</td>
              <td>
						  <a class="btn btn-info" href="index.php?ctrl=cart&action=edit&ma_donhang='.$key['ma_donhang'].'">Sửa</a>
						</td>
           
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
            <button type="submit" class="btn btn-info">Xoá danh mục đã chọn</button>
            <a href="index.php?ctrl=cart&action=detail" class="btn btn-danger">Chi tiết đơn hàng</a>
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

