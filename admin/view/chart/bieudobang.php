
</html>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Sản phẩm');
        data.addColumn('number', 'Số lượng');
        data.addRows([
          <?php
            foreach ($product as  $value) {
              echo"['$value[ten_sanpham]', $value[soluong]],";
            } ;
          ?>
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>
  </head>
  <body>
    <div id="table_div" style="width: 90%; margin: 5% auto;"></div>
  </body>
</html>
