<?php
    include_once ('database.php');
    function getAllComment(){
        $sql="SELECT * FROM binhluan ORDER by ma_binhluan";
        return query($sql);
    }
    function deleteComment($id){
        $sql="DELETE FROM binhluan WHERE ma_binhluan='$id'";
        execute($sql);
    }
    function showProductbyId($id){
		$sql="select *from sanpham where ma_sp='$id' ";
		return queryOne($sql);
    }
    function getUserbyId($ma_kh){
		$sql="select * from khachhang where ma_kh='$ma_kh'";
		return queryOne($sql);
	}
?>