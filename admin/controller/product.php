<?php 
	include 'model/catalogs.php';
	include 'model/product.php';
	include 'model/brand.php';
	$act='index';
	if (isset($_GET['act'])) {
		$act=$_GET['act'];
	}
	switch ($act) {
		case 'index':
			$products=showAllProduct() ;
			include 'view/product/showProduct.php';
			break;
		case 'update':
			 $id=$_GET['id'];
			 $catalogs=getAllCatalog();
			$hang=getAllBrand();
			$maloai=getAllCatalog();
			$tensp=getAllCatalog();
			$productId= showProductbyId($id);
			
			include 'view/product/updateProduct.php';
		break;
		case 'chinhsua':
				 $id=$_POST['id'];
				 $cataid=$_POST['loai'];
				$productName=$_POST['productName'];
				$giaGoc=$_POST['giaGoc'];
				$giaGiam=$_POST['giaGiam'];
				$brand=$_POST['brand'];
				$imgProduct=$_FILES['imgProduct']['name'];
				 $path='../images/'.$imgProduct;
				$truycap=$_POST['truycap'];
				$mota=$_POST['mota'];
				$anhien=$_POST['anhien'];
				$thutu=$_POST['thutu'];
				
				updateProduct($id,$cataid,$productName,$giaGoc,$giaGiam,$brand,$path,$truycap,$mota,$anhien,$thutu);
				
			header('location: index.php?ctrl=product');
			break;
		case 'addnew':
			 $catalogs=getAllCatalog();
			$hang=getAllBrand();
			$maloai=getAllCatalog();
			include 'view/product/addProduct.php';
			break;
		case 'insert':
				 $catalogs=getAllCatalog();
				 $id=$_POST['id'];
				 $cataid=$_POST['loai'];
				$productName=$_POST['productName'];
				$giaGoc=$_POST['giaGoc'];
				$giaGiam=$_POST['giaGiam'];
				$brand=$_POST['brand'];
				$imgProduct=$_POST['imgProduct'];
				 $path='images/'.$imgProduct;
				$truycap=$_POST['truycap'];
				$mota=$_POST['mota'];
				$anhien=$_POST['anhien'];
				$thutu=$_POST['thutu'];
				
				addNewProduct($id,$cataid,$productName,$giaGoc,$giaGiam,$brand,$path,$truycap,$mota,$anhien,$thutu);
				echo "<script>
				alert('THÊM THÀNH CÔNG')
			</script>";
			header('location: index.php?ctrl=product');
			break;
			case 'delete':
				$id=$_GET['id'];
				deleteProduct($id);
				echo "<script>
				alert('XÓA THÀNH CÔNG')
			</script>";
			header('location: index.php?ctrl=product');

			break;
		default:
			# code...
			break;
	}
?>
