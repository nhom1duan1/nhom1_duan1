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
				 <th scope="col" colspan="2">Mã đơn hàng</th>
                 <!-- <th>x</th>  -->
					<th scope="col">Tên khách hàng</th>
					<th scope="col">Số điện thoại</th>
					<th scope="col">Địa chỉ</th>
          <th scope="col">Thành tiền</th>
          <th scope="col"  >Thời gian đặt hàng</th>
          <th scope="col">Tình trạng</th>
         
					<th></th>
                  <th scope="col"></th>
          <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach($catalogs as $key){
              
                   $id=$key['ma_kh'];
                  $kh=getKhById($id);
                   if($key['tinh_trang']==1){
                     $key['tinh_trang']="Đã xử lý";
                   }else{
                     $key['tinh_trang']="Chưa xử lý";
                   }
                  echo'
                    <tr>
					  <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"></th>
            <td>'.$key['ma_donhang'].'</td>
            <td>'.$kh['ho_ten'].'</td>
            	<td>'.$key['sdt'].'</td>
              <td>'.$key['dia_chi'].'</td>
              	<td>'.$key['thanh_tien'].'</td>  
              <td >'.$key['thoi_gian'].'</td>
              <td>'.$key['tinh_trang'].'</td>
             
              
              
                 <td>
						<a onclick="return canhbao()" class="btn btn-warning" href="index.php?ctrl=cart&action=delete&ma_donhang='.$key['ma_donhang'].'">Xóa</a>
						</td>
              <td>
						  <a class="btn btn-info" href="index.php?ctrl=cart&action=edit&ma_donhang='.$key['ma_donhang'].'">Sửa</a>
            </td>
            <td>
                     <a href="index.php?ctrl=cart&action=detail&ma_donhang='.$key['ma_donhang'].'" class="btn btn-danger">Chi tiết đơn hàng</a>
              </td>
                
                    </tr>
                    
                    <td colspan="2">Ghi chú</td>
                    <td class="col-sm-12" >'.$key['ghi_chu'].'</td>
                 
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

