<?php
    include_once'database.php';
    function getAllCart(){
        $sql="SELECT * FROM donhang ORDER BY ma_donhang";
        return query($sql);
    }
    function deleteCart($id){
        $sql="DELETE FROM donhang where ma_donhang='$id'";
        execute($sql);
       
    }
    function updateCart($id,$tinhtrang){
        $sql="UPDATE donhang set tinh_trang='$tinhtrang' where ma_donhang='$id'";
          execute($sql);
    }
    function getDetail($id){
        $sql="select * from chitietdonhang where ma_donhang='$id' ";
        return query($sql);
    }
    function getKhById($id){
        $sql="SELECT * from khachhang where ma_kh='$id'";
        return queryOne($sql);
    }
?>