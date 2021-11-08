<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>
<body>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Demonstrating an arearange chart with a low and high value per point.
    Area range charts are commonly used to visualize a range that changes
    over time.
  </p>
</figure>

<script>
    Highcharts.getJSON(
  'http://127.0.0.1:8000/traffic.json',
  function (data) {

    Highcharts.chart('container', {

      chart: {
        type: 'arearange',
        zoomType: 'x',
        scrollablePlotArea: {
          minWidth: 600,
          scrollPositionX: 1
        }
      },
colors:['orange'],
      title: {
        text: 'Temperature variation by day'
      },

      xAxis: {
        type: 'datetime',
        accessibility: {
          rangeDescription: 'Range: Jan 1st 2017 to Dec 31 2017.'
        }
      },

      yAxis: {
        title: {
          text: null
        }
      },

      tooltip: {
        crosshairs: true,
        shared: true,
        // valueSuffix: '°C',
        xDateFormat: '%A, %b %e'
      },

      legend: {
        enabled: false
      },

      series: [{
        name: 'Traffics',
        data: data
      }]

    });
  }
);
</script>
</body>
</html>