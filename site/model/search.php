<?php 
	include_once 'database.php';
	function byName($search){
		$sql="SELECT * FROM sanpham inner join catalogs
		ON sanpham.ma_loai = catalogs.ma_loai WHERE ten_loai like '%$search%' OR ten_sp like '%$search%'
		OR concat(ten_loai,'',ten_sp) like '%$search%'
		OR concat(ten_sp,'',ten_loai) like '%$search%'
		";
		return query($sql);
	}
	function productSort($like){
		$sql="SELECT count sanpham inner join catalogs
		ON sanpham.ma_loai = catalogs.ma_loai WHERE ten_loai like '%$search%' OR ten_sp like '%$search%'
		OR concat(ten_loai,'',ten_sp) like '%$search%'
		OR concat(ten_sp,'',ten_loai) like '%$search%'
		";
		return query($sql);
	}
?>