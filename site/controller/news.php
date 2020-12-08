<?php 
	include 'site/model/news.php';
	$act='index';
	if (isset($_GET['act'])) {
		$act=$_GET['act'];
	}
	switch ($act) {
		case 'index':
			$post=showAllNews();		
			include 'site/view/news.php';
			break;
		case 'blog':
			if (isset($_GET['id'])) {
				$id=$_GET['id'];
			}
			$post=showNewsById($id);
			include 'site/view/blog.php';
			break;
		default:
			# code...
			break;
	}
?>