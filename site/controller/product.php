<?php
include 'site/model/product.php'; 
$action='index';
    if(isset($_GET['action'])){
        $action= $_GET['action'];
    }
    switch ($action) {
        case 'product':
            include 'site/model/catalogs.php';
            $total=countProduct();
            $limit=isset($_POST['select'])?$_POST['select']:9;
            $current_page=isset($_GET['current_page']) ? $_GET['current_page'] : 1;
            $start=($current_page-1)*$limit;
            $product= showProduct($start,$limit);   
            $catalogs= getAllCatalog();
            $brand = getBrand();        
            include 'site/view/product.php';
        break;
        case 'showbyId':
            include 'site/model/catalogs.php';
             $total=countProduct();
            $limit=isset($_POST['select'])?$_POST['select']:9;
            $current_page=isset($_GET['current_page']) ? $_GET['current_page'] : 1;
            $start=($current_page-1)*$limit;
            $catalogs= getAllCatalog();
             $brand = getBrand();
            $ma_loai= $_GET['id'];
            $product= showProductbyId_loai($ma_loai,$start,$limit );     
            include 'site/view/productbyId.php';
        break;
        case 'detail':
            $id= $_GET['id'];
            $all= showAllProduct();
            $product= showProductbyId($id);
            include 'site/view/detail_product.php';
        break;
        case 'home':// cái này không cần thiết
              include 'site/view/home.php';
        break;
        case 'sort':
            include 'site/model/catalogs.php';
            include 'site/model/search.php';
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

            include 'site/view/product.php';

        break;
<<<<<<< HEAD
=======
        case 'home': 
              include 'site/view/home.php';  
        break;
       case 'quickview':
             $id= $_GET['id'];
            $product= showProductbyId($id);
            include 'site/view/quickview.php';
       break;
       case 'brand':
        include 'site/model/catalogs.php';
          $total=countProduct();
            $limit=isset($_POST['select'])?$_POST['select']:9;
            $current_page=isset($_GET['current_page']) ? $_GET['current_page'] : 1;
            $start=($current_page-1)*$limit;
            $brand = getBrand();
             $catalogs= getAllCatalog();
          $ma_hang=$_GET['id'];
          $product= showProductbyBrand_loai($ma_hang,$start,$limit);
          include 'site/view/productbyId.php';
       break;
       case 'quickview':
        
       break;

>>>>>>> b6ca1d742ac70cde9f786aee17f96cb78a0c4a46
        default:
            # code...
            break;
    }
?>