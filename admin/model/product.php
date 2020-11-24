<?php 
	include_once 'database.php';
	function showAllProduct()
	{
		$sql='select * from sanpham';
		return query($sql);
	}
	
	function addNewProduct($id,$cataid,$productName,$giaGoc,$giaGiam,$brand,$path,$truycap,$mota,$anhien,$thutu){
		$sql="insert into sanpham(ma_sp,ma_loai,ten_sp,gia_goc,gia_giam,hang,hinh_anh,truy_cap,mo_ta,an_hien,thu_tu) values(null,'$cataid','$productName','$giaGoc','$giaGiam','$brand','$path','$truycap','$mota','$anhien','$thutu')";
		execute($sql);
	}
	function updateProduct($id,$cataid,$productName,$giaGoc,$giaGiam,$brand,$path,$truycap,$mota,$anhien,$thutu){
		if($path==""){
		$sql="update sanpham set ma_loai='$cataid', ten_sp='$productName',  gia_goc='$giaGoc', gia_giam='$giaGiam', hang='$brand', hinh_anh='$path', truy_cap='$truycap', mo_ta='$mota', thu_tu='$thutu', an_hien='$anhien' where ma_sp='$id'";
		}else{
			$sql="update sanpham set ma_loai='$cataid', ten_sp='$productName',  gia_goc='$giaGoc', gia_giam='$giaGiam', hang='$brand', truy_cap='$truycap', mo_ta='$mota', thu_tu='$thutu', an_hien='$anhien' where ma_sp='$id'";

		}
		echo "<script>
				alert('CHỈNH SỬA THÀNH CÔNG');
			</script>";
		execute($sql);

	}
	function showProductbyId($id){
		$sql="select *from sanpham where ma_sp='$id' ";
		return queryOne($sql);
		
	}
	function deleteProduct($id)
    {
        $sql="delete from sanpham where ma_sp='$id'";
        execute($sql);
	}
	function demCatalog($id)
	{
		$sql="Select count(*) as 'soluong' from sanpham where ma_loai='$id'";
		return queryOne($sql);
	}
?>