<style>
	th{
		color:white;
	}
</style>
<form action="#" method="post" class="container d-flex justify-content-center">
      <div class="card container">
        <div class="card-header">
          QUẢN LÝ LOẠI SẢN PHẨM
        </div>
        <div class="card-body">
          <table class="table table-striped table"  >
              <thead>
                <tr class="bg-info">
                  <th scope="col"></th>
                  <th scope="col">Mã loại</th>
                  <th scope="col">Tên loại</th>
                   <th scope="col">Thứ tự</th>
                     <th scope="col">Ẩn hiện</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
              <?php
                foreach($catalogs as $cate){
                  if($cate['an_hien']==1){
                    $anhien='Hiện';
                  }
                  else{
                    $anhien='Ẩn';
                  }
                  echo'
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"></th>
                      <td>'.$cate['ma_loai'].'</td>
                      <td>'.$cate['ten_loai'].'</td>
                       <td>'.$cate['thu_tu'].'</td>
                         <td>'.$anhien.'</td>
                      <td>
                        <a href="index.php?ctrl=catalogs&action=delete&ma_loai='.$cate['ma_loai'].'" class="btn btn-warning" >Xoá</a>
                        <a href="index.php?ctrl=catalogs&action=edit&ma_loai='.$cate['ma_loai'].'"class="btn btn-info">Sửa</a>
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
            <a href="index.php?ctrl=catalogs&action=addnew" class="btn btn-info">Thêm mới</a>
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