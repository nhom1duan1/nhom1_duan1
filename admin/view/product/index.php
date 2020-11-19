<<<<<<< HEAD:admin/view/product/index.php
<table boder="1"id="showProduct">
	<tr>
		<th>Mã Sảng Phẩm</th>
		<th>Tên Sản Phẩm</th>
		<th>Mã Loại</th>
		<th>Tên Loại</th>
		<th>Giá Góc</th>
		<th>Giá Giảm</th>
		<th>Hãng</th>
		<th>Hình Anh</th>
		<th>Mô Tả</th>
		<th>Truy Cập</th>
		<th>Thứ Tự</th>
		<th>Ẩn Hiện</th>
		<th>Thêm</th>
		<th>Xóa</th>
		<th>Sửa</th>
	</tr>
	<?php 
		foreach ($products as $key ) {
			echo'
				<tr>
					<td>'.$key['ma_sp'].'</td>
					<td>'.$key['ten_sp'].'</td>
					<td>'.$key['ma_loai'].'</td>
					<td>'.$key['ten_loai'].'</td>
					<td>'.$key['gia_goc'].'</td>
					<td>'.$key['gia_giam'].'</td>
					<td>'.$key['hang'].'</td>
					<td><img width="100px" height="100px" src="../site/images/'.$key['hinh_anh'].'"></td>
					<td>'.$key['mo_ta'].'</td>
					<td>'.$key['truy_cap'].'</td>
					<td>'.$key['thu_tu'].'</td>
					<td>'.$key['an_hien'].'</td>
				</tr>
			';
		}
	?>
</table>
<!-- hình ảnh giá loại tên ẩn hiện -->
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
</head>
<body>

<div id="piechart" class="container-sm"></div>



<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Loại sản phẩm', 'width':500, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
>>>>>>> 74c1794bd39a6f45ea649a06dbad5fb461efebef:admin/view/home/index.php
