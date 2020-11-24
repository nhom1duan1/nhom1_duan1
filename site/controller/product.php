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
            include 'view/detail_product.php';
        break;
        default:
            # code...
            break;
    }
?>