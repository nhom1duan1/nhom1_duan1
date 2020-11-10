<?php
    include_once('database.php');
    function getAllDonhang(){
        $sql="Select *from donhang order by id_donhang";
        return query($sql);
    }
    function getChitietdonhang($id_donhang){
        $sql="select *from chitietdonhang where id_donhang='$id_donhang'";
        return query($sql);
    }
?>