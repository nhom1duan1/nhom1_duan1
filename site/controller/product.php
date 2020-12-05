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
        case 'home':// cái này không cần thiết
              include 'view/home.php';
        break;
        case 'sort':
            include 'model/catalogs.php';
            include 'model/search.php';
            //SELECT * FROM sanpham ORDER BY gia_giam DESC
            $sort="see";
            if (isset($_GET['sort'])) {
                $sort=$_GET['sort'];
            }
            // echo $sort;
            switch ($sort) {
                    case 'pricedown':
                        $like="gia_giam ASC";
                        $product= productSort($like);
                        break;
                    case 'pricetop':
                        $like="gia_giam DESC";
                        $product= productSort($like);
                        break;
                    case 'see':
                        $like="truy_cap DESC";
                        $product= productSort($like);
                        break;
                    case 'nameaz':
                        $like="ten_sp ASC";
                        $product= productSort($like);
                        break;
                    case 'nameza':
                        $like="ten_sp DESC";
                        $product= productSort($like);
                        break;
                    default:
                        # code...
                        break;
                }
             $catalogs= getAllCatalog();

            include 'view/product.php';

        break;
        default:
            # code...
            break;
    }
?>