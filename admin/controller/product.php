<?php
    include 'model/product.php';
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }

    switch($action){
        case 'index':
            include 'model/catalog.php';
            $product=getAllProduct();
            include 'view/product/index.php';

        break;
        case 'add_product':
            include 'model/catalog.php';
            $catalog= getAllCatalog();
            include 'view/product/addnew.php';
        break;
        case 'edit':
            include 'model/catalog.php';
            $catalog= getAllCatalog();
            $id=$_GET['id'];
            include 'view/product/edit.php';
        break;
        case 'delete':
            $id_sanpham=$_GET['id'];
            deleteProduct($id_sanpham);
            header('location: index.php?ctrl=product');
        break;
        case 'update':
            $id_sanpham=$_POST['id_sanpham'];
            $id_loaisp= $_POST['id_loaisp'];
            $name=$_POST['ten_sanpham'];
            $hinh_sanpham=$_POST['hinh_sanpham'];
            $soluong=$_POST['soluong'];
            $gia=$_POST['gia_sanpham'];
            updateProduct($id_sanpham,$name,$hinh_sanpham,$id_loaisp,$soluong,$gia);
            header('location: index.php?ctrl=product');
        break;
        case 'add':
            $id_sanpham=$_POST['id_sanpham'];
            $id_loaisp= $_POST['id_loaisp'];
            $name=$_POST['ten_sanpham'];
            $hinh_sanpham=$_POST['hinh_sanpham'];
            $soluong=$_POST['soluong'];
            $gia=$_POST['gia_sanpham'];
            addNewProduct($id_sanpham,$name,$hinh_sanpham,$id_loaisp,$soluong,$gia);
            header('location: index.php?ctrl=product');
        break;
    }

?>