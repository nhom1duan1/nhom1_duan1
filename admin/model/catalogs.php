<?php
    include_once ('database.php');
    function getAllCatalog(){
        $sql="SELECT * from catalogs order by ma_loai ";
        return query($sql);
    }
    function addNewCatalog($name,$thutu,$hang,$anhien){
        $sql="INSERT INTO catalogs(ten_loai,thu_tu,hang,an_hien) VALUES ('$name','$thutu','$hang','$anhien')";
        execute($sql);
    }
    function getCatalogById($id){
        $sql="SELECT * from catalogs where ma_loai='$id'";
        return queryOne($sql);
    }
    function updateCatalog($id,$name,$thutu,$hang,$anhien){
        $sql="UPDATE catalogs SET ten_loai='$name',thu_tu='$thutu',hang='$hang',an_hien='$anhien' where ma_loai='$id'";
        execute($sql);
    }
    function deleteCatalog($id){
        $sql="DELETE FROM catalogs where ma_loai='$id'";
        execute($sql);
       
    }
?>