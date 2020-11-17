<?php 
	include 'model/product.php';
	$act='index';
	if (isset($_GET['act'])) {
		$act=$_GET['act'];
	}
	switch ($act) {
		case 'index':
			$products=showAllProduct();
			include 'view/product/showProduct.php';
			break;
		case 'update':
			$id=$_GET['id'];
			$productId= showProductbyId($id);
			include 'view/product/updateProduct.php';
		break;
		case 'chinhsua':
				$id=$_POST['id_sp'];
				$productName=$_POST['productName'];
				$catalogName=$_POST['catalogName'];
				$giaGoc=$_POST['giaGoc'];
				$giaGiam=$_POST['giaGiam'];
				$brand=$_POST['brand'];
				$imgProduct=$_POST['imgProduct'];
				$mota=$_POST['moTa'];
				$danhGia=$_POST['danhGia'];
				$thuTu=$_POST['thuTu'];
				$anHien=$_POST['anHien'];
				updateProduct($id,$productName,$catalogName,$giaGoc,$giaGiam,$brand,$imgProduct,$mota,$danhGia,$thuTu,$anHien);
				echo "<script>
				alert('CHỈNH SỬA THÀNH CÔNG')
			</script>";
			header('location: index.php?ctrl=product');
			break;
		case 'addnew':
			include 'view/product/addProducct.php';
			break;
		case 'insert':
				include 
				$productName=$_POST['productName'];
				$catalogID=$_POST['catalogID'];
				$giaGoc=$_POST['giaGoc'];
				$giaGiam=$_POST['giaGiam'];
				$brand=$_POST['brand'];
				$imgProduct=$_POST['imgProduct'];
				addNewProduct($productName,$catalogID,$giaGoc,$giaGiam,$brand,$imgProduct);
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
