<?php 
	include 'database.php';
	function showAllNews()
	{
		$sql="select * from news";
		return query($sql);
	}
	function showAllNewsById($id)
	{
		$sql="select * from news where id='$id'";
		return queryOne($sql);
	}
	//`id``tieu_de``noi_dung``ngay_dan``tac_gia``an_hien`
	function addNews($tieude,$noidung,$ngay,$tacgia,$anhien,$tomTat,$anhNen){
		//INSERT INTO `news`(`id`, `tieu_de`, `noi_dung`, `ngay_dan`, `tac_gia`, `an_hien`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
		$sql="INSERT INTO news(id, tieu_de, noi_dung, ngay_dan, tac_gia, an_hien, tom_tat, anh_nen) VALUES (null,'$tieude','$noidung','$ngay','$tacgia','$anhien', '$tomTat', '$anhNen');";
		execute($sql);
	}
	function updateNews($tieude,$noidung,$ngay,$tacgia,$anhien,$tomTat,$anhNen,$id){
		//UPDATE `news` SET `id`=[value-1],`tieu_de`=[value-2],`noi_dung`=[value-3],`ngay_dan`=[value-4],`tac_gia`=[value-5],`an_hien`=[value-6],`tom_tat`=[value-7],`anh_nen`=[value-8]
		$sql="UPDATE `news` SET `tieu_de`='$tieude',`noi_dung`='$noidung',`tac_gia`='$tacgia',`an_hien`='$anhien',`tom_tat`='$tomTat',`anh_nen`='$anhNen' where id='$id'";
		execute($sql);
	}
	function deletenews($id){
		$sql="delete from news where id='$id'";
		execute($sql);
		//header('localhost:index.php?ctrl=user');
	}
?>