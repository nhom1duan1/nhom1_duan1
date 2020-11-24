<<<<<<< HEAD
<table class="table table-striped table" border="1">
	<tr>
		<th>Mã khách hàng</th>
		<th>Avatar</th>
		<th>Tên khách hàng</th>
		<th>Email</th>
		<th>Địa chỉ</th>
		<th>SĐT</th>
		<th>Phan quyền</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php 
		foreach ($users as $key) {
			echo'
			<tr>
				<td>'.$key['ma_kh'].'</td>
				<td>'.$key['anh_daidien'].'</td>
				<td>'.$key['ho_ten'].'</td>
				<td>'.$key['email'].'</td>
				<td>'.$key['dia_chi'].'</td>
				<td>'.$key['so_dt'].'</td>
				<td>'.(($key['phan_quyen']!='0')?'khách hàng':'admin').'</td>
				<td><a class="btn btn-warning" href="index.php?ctrl=user&act=edit&email='.$key['email'].'">sua</a></td>
				<td><a class="btn btn-info" href="index.php?ctrl=user&act=delete&email='.$key['email'].'">xoa</a></td>
			</tr>
			';
		}
	?>
</table>
=======
<style>
	th{
		color:white;
	}
</style>
<form action="#" method="post" class="container d-flex justify-content-center">
      <div class="card container">
        <div class="card-header">
          QUẢN LÝ KHÁCH HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table"  >
              <thead>
                <tr class="bg-info">
				 <th scope="col"></th>
                 <th>Mã khách hàng</th>
					<th scope="col">Avatar</th>
					<th scope="col">Tên khách hàng</th>
					<th scope="col">Email</th>
						<th scope="col">Pass</th>
					<th scope="col">Địa chỉ</th>
					<th scope="col">SĐT</th>
					<th scope="col">Phân quyền</th>
					<th></th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
              <?php
                foreach($users as $key){
                  echo'
                    <tr>
					  <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"></th>
            <td>'.$key['ma_kh'].'</td>
            <td><img width="100px" height="100px" src="'.$key['anh_daidien'].'"></td>
                    
						<td>'.$key['ho_ten'].'</td>
						<td>'.$key['email'].'</td>
							<td>'.$key['mat_khau'].'</td>
						<td>'.$key['dia_chi'].'</td>
						<td>'.$key['so_dt'].'</td>
						<td>'.(($key['phan_quyen']=='0')?'khách hàng':'admin').'</td>
                  
						<td>
            <a class="btn btn-warning" href="index.php?ctrl=user&act=edit&email='.$key['email'].'">Sửa</a>
            </td>
            <td>
						<a class="btn btn-info" href="index.php?ctrl=user&act=delete&ma_kh='.$key['ma_kh'].'">Xóa</a>
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
			  <a href="index.php?ctrl=user&act=add" class="btn btn-danger">Thêm mới</a>
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

>>>>>>> b001f3a8fb317aa8e6e76f08f84ee4ce86860ebf
