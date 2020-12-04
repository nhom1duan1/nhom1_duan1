<?php
    include_once ('database.php');
    function getAllComment($ma_sp){
        $sql="SELECT * from binhluan where ma_sp='$ma_sp' ";
        return query($sql);
    }
    function addNewComment($ma_kh, $ma_sp, $thoigian, $noi_dung){
        $sql="INSERT INTO binhluan(ma_kh, ma_sp, thoigian, noi_dung) VALUES ('$ma_kh','$ma_sp','$thoigian', '$noi_dung')";
        execute($sql);
    }
    function getKhachhang($ma_kh){
        $sql="select * from khachhang where ma_kh='$ma_kh'";
        return queryOne($sql);
    }
?>