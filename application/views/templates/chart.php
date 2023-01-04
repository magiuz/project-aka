<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['Universitas', 'Jumlah Alumni'],
         ['UI', 123], 
         ['UGM', 243],
         ['IPB', 100],
         ['ITB', 125]
      ]);

        var options = {
          title: 'Persebaran PTN Alumni',
          legend: { position: 'none' },
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="margin: 0 auto; width: 1200px; height: 600px;"></div>
  </body>
</html>