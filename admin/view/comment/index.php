<style>
	th{
		color:white;
	}
</style>
<form action="#" method="post" class="container d-flex justify-content-center">
      <div class="card container">
        <div class="card-header">
          QUẢN LÝ BÌNH LUẬN
        </div>
        <div class="card-body">
          <table class="table table-striped table"  >
              <thead>
                <tr class="bg-info">
                  <th scope="col"></th>
                  <th scope="col">Mã bình luận</th>
                  <th scope="col">Mã khách hàng</th>
                   <th scope="col">Mã sản phẩm</th>
                    <th scope="col">thời gian</th>
                     <th scope="col">Ngày</th>
                     <th>Nội dung</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
              <?php
                foreach($comment as $cate){
                  echo'
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"></th>
                      <td>'.$cate['ma_binhluan'].'</td>
                      <td>'.$cate['ma_kh'].'</td>
                       <td>'.$cate['ma_sp'].'</td>
                        <td>'.$cate['thoigian'].'</td>
                         <td>'.$cate['ngay'].'</td>
                          <td>'.$cate['noi_dung'].'</td>
                      <td>
                        <a href="index.php?ctrl=comment&action=delete&ma_binhluan='.$cate['ma_binhluan'].'" class="btn btn-warning" >Xoá</a>
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