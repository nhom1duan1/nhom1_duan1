<?php
include 'model/product.php'; 
$action='index';
    if(isset($_GET['action'])){
        $action= $_GET['action'];
    }
    switch ($action) {
        case 'product':
            include 'model/catalogs.php';
            $total=countProduct();
            $limit=isset($_POST['select'])?$_POST['select']:9;
            $current_page=isset($_GET['current_page']) ? $_GET['current_page'] : 1;
            $start=($current_page-1)*$limit;
            $product= showAllProduct($start,$limit);   
            $catalogs= getAllCatalog();
            $brand = getBrand();        
            include 'view/product.php';
        break;
        case 'showbyId':
            include 'model/catalogs.php';
             $total=countProduct();
            $limit=isset($_POST['select'])?$_POST['select']:9;
            $current_page=isset($_GET['current_page']) ? $_GET['current_page'] : 1;
            $start=($current_page-1)*$limit;
            $catalogs= getAllCatalog();
             $brand = getBrand();
            $ma_loai= $_GET['id'];
            $product= showProductbyId_loai($ma_loai,$start,$limit );     
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
       case 'brand':
        include 'model/catalogs.php';
          $total=countProduct();
            $limit=isset($_POST['select'])?$_POST['select']:9;
            $current_page=isset($_GET['current_page']) ? $_GET['current_page'] : 1;
            $start=($current_page-1)*$limit;
            $brand = getBrand();
             $catalogs= getAllCatalog();
          $ma_hang=$_GET['id'];
          $product= showProductbyBrand_loai($ma_hang,$start,$limit);
          include 'view/productbyId.php';
       break;
       case 'quickview':
        
       break;
        default:
            # code...
            break;
    }
?>