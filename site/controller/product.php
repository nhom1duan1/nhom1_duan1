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
<<<<<<< HEAD
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
=======
        case 'home': 
              include 'view/home.php';  
        break;
       case 'quickview':
             $id= $_GET['id'];
            $product= showProductbyId($id);
            include 'view/quickview.php';
       break;
>>>>>>> 1b7c26a28b11c8cf187e03be66438dd9644f5f43
        default:
            # code...
            break;
    }
?>