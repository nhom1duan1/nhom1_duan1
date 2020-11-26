<?php
    include_once'database.php';

    function getAllBrand(){
        $sql="SELECT * FROM hang ORDER by ma_hang";
        return query($sql);
    }
     function addBrand($id,$hang){
         $sql="INSERT INTO hang(ma_hang,hang) values (null,'$hang') ";
         execute($sql);
     }
     function updateBrand($id,$hang){
         $sql="UPDATE hang set hang='$hang' where ma_hang='$id'";
         execute($sql);
     }
     function deleteBrand($id){
         $sql="DELETE from hang where ma_hang='$id'";
         execute($sql);
     }
     function getBrandById($id){
        $sql="SELECT * from hang where ma_hang='$id'";
        return queryOne($sql);
    }
?>