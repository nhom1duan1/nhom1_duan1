<?php
include 'model/product.php'; 
$action='index';
    if(isset($_GET['action'])){
        $action= $_GET['action'];
    }
    switch ($action) {
        case 'index':
            include 'model/catalogs.php';
            $catalogs= getAllCatalog();
            $product= showAllProduct();
            include 'view/product.php';
        break;
        case 'showbyId':
            include 'model/catalogs.php';
            $catalogs= getAllCatalog();
            $ma_loai= $_GET['id'];
            $product= showProductbyId_loai($ma_loai);
            include 'view/productbyId.php';
        break;
        case 'detail':
            $id= $_GET['id'];
            $all= showAllProduct();
            $product= showProductbyId($id);
            include 'view/detail_product.php';
        break;
        case 'home': 
              include 'view/home.php';  
        break;
       case 'quickview':
             $id= $_GET['id'];
            $product= showProductbyId($id);
            include 'view/quickview.php';
       break;
        default:
            # code...
            break;
    }
?>