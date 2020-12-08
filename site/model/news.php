<?php 
	include 'database.php';
	function showAllnews()
	{
		$sql="select * from news ORDER by ngay_dan desc";
		return query($sql);
	}

	function showNewsById($id)
	{
		$sql="select * from news where id=".$id;
		return queryOne($sql);
	}
?>