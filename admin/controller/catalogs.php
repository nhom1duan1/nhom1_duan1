<?php
include_once 'model/catalogs.php';
 $action='index';
  if(isset($_GET['action'])){
    $action=$_GET['action'];
  }
  switch ($action) {
            case 'index':
            $catalogs =getAllcatalog();
            include 'view/catalogs/index.php';
            break;
        case 'addnew':
            include 'view/catalogs/addnew.php';
            break;
         case 'insert':
            $name=$_POST['nameCata'];
            $thutu=$_POST['thutu'];
            $hang=$_POST['hang'];
            $anhien=$_POST['anhien'];
            addNewCatalog($name,$thutu,$hang,$anhien);
            header('location:index.php?ctrl=catalogs&action=index');
            break;
        case 'edit':
            $id=$_GET['ma_loai'];
            $cate=getCatalogById($id);
            include 'view/catalogs/edit.php';
            break;
        case 'update':
            $id=$_POST['id'];
            $name=$_POST['nameCata'];
             $thutu=$_POST['thutu'];
            $hang=$_POST['hang'];
            $anhien=$_POST['anhien'];
            updateCatalog($id,$name,$thutu,$hang,$anhien);
            header('location:index.php?ctrl=catalogs&action=index');
            break;
        case 'delete':
            $id=$_GET['ma_loai'];
            deleteCatalog($id);
            header('location:index.php?ctrl=catalogs&action=index');
            break;
       
            default:
        break;
  }

