<?php
    include_once'database.php';

    function getAllBrand(){
        $sql="SELECT * FROM hang ";
        return query($sql);
    }
     function addBrand($hang){
         $sql="INSERT INTO hang(hang) values ('$hang') ";
         execute($sql);
     }
     function updateBrand($hang){
         $sql="UPDATE hang set hang='$hang' ";
         execute($sql);
     }
     function deleteBrand($hang){
         $sql="DELETE from hang where hang='$hang'";
         execute($sql);
     }
?>