<?php
    include_once('database.php');
    function getAllCatalog(){
        $sql="Select *from loaisanpham order by id_loaisp";
        return query($sql);
    }
    function addNewCatalog($name, $id){
        $sql="insert into loaisanpham(id_loaisp, ten_loaisp) values('$id','$name')";
        execute($sql);
    }
    function getCatalogByID($id){
        $sql="select *from loaisanpham where id_loaisp='$id'";
        return queryOne($sql);
    }
    function updateCatalog($id,$name){
        $sql="update loaisanpham set ten_loaisp='$name' where id_loaisp='$id'";
        execute($sql);
    }
    function deleteCatalog($id){
        $sql="delete from loaisanpham where id_loaisp='$id'";
        execute($sql);
    }
?>