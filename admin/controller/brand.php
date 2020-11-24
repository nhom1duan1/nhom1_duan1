<?php
    include'model/brand.php';
     $action='index';
  if(isset($_GET['action'])){
    $action=$_GET['action'];
  }
  switch ($action) {
            case 'index':
            $catalogs =getAllBrand();
            include 'view/brand/index.php';
            break;

            case 'add':
            include 'view/brand/add.php';
            break;

            case 'insert':
            $hang=$_POST['hang'];
            addBrand($hang);
             header('location:index.php?ctrl=brand&action=index');
            break;
            
            case 'delete':
              $hang=$_GET['hang'];
              deleteBrand($hang);
            header('location:index.php?ctrl=brand&action=index');
            break;

            case 'edit':
              $hang=$_GET['hang'];
              $key=getAllBrand();
            include 'view/brand/edit.php';
            break;
                case 'update':
            $hang=$_POST['hang'];
            updateBrand($hang);
             header('location:index.php?ctrl=brand&action=index');
            break;
        default;
        break;
        }
?>