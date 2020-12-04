<?php 
	include_once 'database.php';
	function byName($like){
		$sql="SELECT * FROM sanpham WHERE ten_sp LIKE '%$like%';";
		//"SELECT * FROM sanpham WHERE ten_sp LIKE '%search%';";
		return query($sql);
	}
	function productSort($like){
		$sql='SELECT * FROM sanpham ORDER BY '.$like;
		//"SELECT * FROM sanpham WHERE ten_sp LIKE '%search%';";
		return query($sql);
	}
?>