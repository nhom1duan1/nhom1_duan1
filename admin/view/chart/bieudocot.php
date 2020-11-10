<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Sản phẩm', 'Số Lượng'],
              <?php
                foreach ($product as $item){
                echo "['$item[ten_sanpham]', $item[soluong]],";
                }
              ?>
              ]);
              var options = { title:'THỐNG KÊ HÀNG HÓA', is3D: true };
              var chart = new google.visualization.BarChart(document.getElementById('piechart_3d'));
              chart.draw(data, options);
            }
        </script>
</head>
<body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>
</html>