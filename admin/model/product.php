<?php
    include_once('database.php');

    function getAllProduct(){
        $sql="Select *from sanpham order by id_sanpham";
        return query($sql);
    }
    function addNewProduct($id_sanpham,$name,$hinh_sanpham,$id_loaisp,$soluong,$gia){
        $sql="INSERT INTO `sanpham` (`id_sanpham`, `ten_sanpham`, `hinh_sanpham`, `id_loaisp`, `soluong`, `gia_sanpham`) VALUES (NULL, '$name', '$hinh_sanpham', '$id_loaisp', '$soluong', '$gia');";
        execute($sql);
    }
    function getProductByID($id_sanpham){
        $sql="select *from sanpham where id_sanpham='$id_sanpham'";
        return queryOne($sql);
    }
    function updateProduct($id_sanpham,$name,$hinh_sanpham,$id_loaisp,$soluong,$gia){
        if($hinh_sanpham==""){
            $sql="update sanpham set ten_sanpham='$name',id_loaisp='$id_loaisp', soluong='$soluong', gia_sanpham='$gia' where id_sanpham='$id_sanpham'";
        }
        else{
            $sql="update sanpham set ten_sanpham='$name', hinh_sanpham='$hinh_sanpham',id_loaisp='$id_loaisp', soluong='$soluong', gia_sanpham='$gia' where id_sanpham='$id_sanpham'";
        }
        execute($sql);
    }
    function deleteProduct($id_sanpham){
        $sql="delete from sanpham where id_sanpham='$id_sanpham'";
        execute($sql);
    }
?>