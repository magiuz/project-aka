<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tahun', 'SNMPTN', 'SBMPTN', 'POLTEKES', 'SPAN/PTKIN', 'POLINELA', 'SIMAK UI', 'AKPOL/KEDINASAN', 'MANDIRI/LAINNYA'],
          ['2020', 73, 131, 11, 11, 2, 5, 2, 15],
          ['2021', 71, 121, 15, 19, 12, 6, 3, 17],
          ['2022', 81, 151, 18, 12, 5, 3, 5, 10]
        ]);

        var options = {
          chart: {
            title: 'Penerimaan Mahasiswa Baru di Perguruan Tinggi',
            subtitle: 'Berdasarkan Jenis Seleksi',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style=" margin: 0 auto; width: 1200px; height: 500px;"></div>
  </body>
</html>