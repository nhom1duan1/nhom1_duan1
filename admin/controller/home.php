<?php
 include 'model/product.php';
 include 'model/catalogs.php';
 $product= showAllProduct();
 $loai_sp= getAllCatalog();
 include 'view/home/chart.php';
 ?>