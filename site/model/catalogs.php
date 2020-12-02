<?php
    include_once ('database.php');
    function getAllCatalog(){
        $sql="SELECT * from catalogs order by ma_loai ";
        return query($sql);
    }
    function addNewCatalog($name,$thutu,$anhien){
        $sql="INSERT INTO catalogs(ten_loai,thu_tu,an_hien) VALUES ('$name','$thutu','$anhien')";
        execute($sql);
    }
    function getCatalogById($id){
        $sql="SELECT * from catalogs where ma_loai='$id'";
        return queryOne($sql);
    }
    function updateCatalog($id,$name,$thutu,$anhien){
        $sql="UPDATE catalogs SET ten_loai='$name',thu_tu='$thutu',an_hien='$anhien' where ma_loai='$id'";
        execute($sql);
    }
    function deleteCatalog($id){
        $sql="DELETE FROM catalogs where ma_loai='$id'";
        execute($sql);
       
    }
?>