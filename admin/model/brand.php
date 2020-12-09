<?php
    include_once'database.php';

    function getAllBrand(){
        $sql='SELECT * FROM hang ORDER by ma_hang desc  ';
        return query($sql);
    }
     function getAllBrands($limit , $start){
        $sql='SELECT * FROM hang ORDER by ma_hang desc limit '.$limit.','.$start;
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
    function countBrand(){
		$sql="select count(ma_hang) as totalrecord from hang";
		return queryOne($sql);
	}
?>