<?php 
	include 'model/news.php';
	$news='index';
	if (isset($_GET['act'])) {
		$news=$_GET['act'];
	}
	switch ($news) {
		case 'index':
			$showNews=showAllNews();
			include 'view/news/index.php';
			break;
		case 'addnews':
			if (isset($_POST['submit'])) {
				$tieude=$_POST['tieude'];
				$tomTat=$_POST['tomTat'];
				$anh=$_POST['anhNen'];
				$anhNen='images/'.$anh;
				$noidung=$_POST['ten'];
				$ngay=date('Y-m-d');
				$tacgia=$_SESSION['username'];
				$anhien=(int)$_POST['anhien'];
				addNews($tieude,$noidung,$ngay,$tacgia,$anhien,$tomTat,$anhNen);
			}
			include 'view/news/addnews.php';
			break;
		case 'update':
			if (isset($_GET['id'])) {
				$id=$_GET['id'];
			}
			else{
				echo "<script>alert('Bạn không được thai đổi link ngồn');window.location='index.php?ctrl=news';</script>";
			}
			if (isset($_POST['submit'])) {
				$tieude=$_POST['tieude'];
				$tomTat=$_POST['tomTat'];
				$hanh=$_POST['anhNen'];
				$anhNen='images/'.$hanh;
				$noidung=$_POST['ten'];
				$ngay=date('Y-m-d');
				$tacgia=$_SESSION['username'];
				$anhien=(int)$_POST['anhien'];
				updateNews($tieude,$noidung,$ngay,$tacgia,$anhien,$tomTat,$anhNen,$id);
			}
			$post=showAllNewsById($id);
			include 'view/news/update.php';
			break;
		
		default:
			# code...
			break;
	}
?>