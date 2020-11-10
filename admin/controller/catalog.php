<?php
    include 'model/catalog.php';
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }

    switch($action){
        case 'index':
            $catalog=getAllCatalog();
            include 'view/catalog/index.php';
        break;
        case 'add_catalog':
            include 'view/catalog/addnew.php';
        break;
        case 'edit':
            $id=$_GET['id'];
            include 'view/catalog/edit.php';
        break;

        case 'delete':
            $id=$_GET['id'];
            deleteCatalog($id);
            header('location: index.php?ctrl=catalog');
        break;
        case 'update':
            $id=$_POST['MaLoai'];
            $name=$_POST['TenLoai'];
            updateCatalog($id,$name);
            header('location: index.php?ctrl=catalog');
        break;
        case 'add':
            $id=$_POST['MaLoai'];
            $name=$_POST['TenLoai'];
            addNewCatalog($name, $id);
            header('location: index.php?ctrl=catalog');
        break;
    }

?>