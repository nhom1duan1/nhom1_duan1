<?php 
	include 'database.php';
	function showAllProduct()
	{
		$sql='select * from sanpham';
		return query($sql);
	}
	function addNewProduct($productName,$catalogID,$giaGoc,$giaGiam,$brand,$imgProduct){
		$sql="insert into sanpham(ma_loai,ten_sp,gia_goc,gia_giam,hang,hinh_anh) values('$catalogID','$productName','$giaGoc','$giaGiam','$brand','$imgProduct')";
		execute($sql);
	}
	function updateProduct($id,$productName,$catalogName,$giaGoc,$giaGiam,$brand,$imgProduct,$mota,$danhGia,$thuTu,$anHien){
		$sql="update sanpham set ten_loai='$catalogName', ten_sp='$productName', gia_goc='$giaGoc', gia_giam='$giaGiam', hang='$brand', hinh_anh='$imgProduct', mo_ta='$mota', danh_gia='$danhGia',  thu_tu='$thuTu', an_hien='$anHien' where ma_sp='$id'";
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
?>