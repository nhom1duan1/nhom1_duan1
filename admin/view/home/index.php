
<div class="col-xm-12">
  <div id="columnchart"  style="width: 600px; height: 600px"></div>
  
</div>
<div class="container">
  <div id="piechart" style="width: 450px; height: 300px"></div>
  <div id="barchart" style="width: 450px; height: 300px" ></div>
</div>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">

// chart loại sản phẩm
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  
  <?php
    foreach ($loai_sp as $value) {
      $id= $value['ma_loai'];
      $count= demCatalog($id);
      echo '
      ["'.$value['ten_loai'].'", '.$count['soluong'].'],
      ';
    }
  ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {
          title: 'Loại sản phẩm',
          pieHole: 0.4,
        };

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}



google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {
  // chart nhà sản xuất
      var data = google.visualization.arrayToDataTable([
        ['City', '2010 Population',],
        ['New York City, NY', 8175000],
        ['Los Angeles, CA', 3792000],
        ['Chicago, IL', 2695000],
        ['Houston, TX', 2099000],
        ['Philadelphia, PA', 1526000]
      ]);

      var options = {
        title: 'Nhà cung cấp',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Total Population',
          minValue: 0
        },
        vAxis: {
          title: 'City'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('barchart'));

      chart.draw(data, options);


//chart luot truy cap san pham
      var data1 = new google.visualization.DataTable();
      data1.addColumn('timeofday', 'Time of Day');
      data1.addColumn('number', 'Lượt truy cập');

      data1.addRows([
        <?php
        $dem=8;
          foreach ($product as $value) {
            
            echo '
              [{v: ['.$dem.'],f: "'.$value['ten_sp'].'"}, '.$value['truy_cap'].'],
            ';
            $dem= $dem+1;
          }
          ?>
      ]);

      var options1 = {
        title: 'Lượt truy cập các sản phẩm',
        vAxis: {
          title: ''
        }
      };

      var chart1 = new google.visualization.ColumnChart(
        document.getElementById('columnchart'));

      chart1.draw(data1, options1);
    }


// chart lượt truy cập sản phẩm
</script>
