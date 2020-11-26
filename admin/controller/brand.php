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
              $id=$_POST['id'];
            $hang=$_POST['hang'];
            addBrand($id,$hang);
             header('location:index.php?ctrl=brand&action=index');
            break;
            
            case 'delete':
              $id=$_GET['ma_hang'];
              deleteBrand($id);
            header('location:index.php?ctrl=brand&action=index');
            break;

            case 'edit':
              $id=$_GET['ma_hang'];
              $key=getAllBrand();
            include 'view/brand/edit.php';
            break;
                case 'update':
            $id=$_POST['id'];
            $hang=$_POST['hang'];
            updateBrand($id,$hang);
             header('location:index.php?ctrl=brand&action=index');
            break;
        default;
        break;
        }
?>