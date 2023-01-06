<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'SBMPTN', 'SNMPTN', 'Kedinasan'],
          ['2019',  1000,      400,       321],
          ['2020',  1170,      460,       432],
          ['2021',  660,       1120,      123],
          ['2022',  1030,      540,       654]
        ]);

        var options = {
          title: 'Jalur Masuk Perguruan Tinggi',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="margin:0 auto; width: 1100px; height: 700px"></div>
  </body>
</html>
