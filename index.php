
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Ziegenshop24 - Nur das beste für die Ziege</title>
    <meta content="Ziegenshop" property="og:title" />
    <meta content="Jetzt nicht shoppen und dabei kein geld verlieren" property="og:description" />
    <meta content="https://ziegenshop24.de" property="og:url" />
    <meta content="https://cdn.discordapp.com/attachments/850636447744262154/926462497031069696/unknown.png" property="og:image" />
    <meta content="#00cc70" data-react-helmet="true" name="theme-color" />

    <! CHARTS >

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        function rnd(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
        }

        var randomNum = rnd(400, 4000)
        var TotalNum = rnd(20, 800) + randomNum

        console.log(randomNum)
        console.log(TotalNum)

        var data = google.visualization.arrayToDataTable([
          ['Mon', 'Unique', 'Total'],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
          ['',  rnd(1000, 3000),      rnd(2000, 5000) + rnd(1000, 2000)],
        ]);

          function customTooltip(text) {
            return '<div style="padding:5px 5px 5px 5px; color: black;">' +
            '<table id="medals_layout">' + '<tr>' +
            '<td><b>' + text + '</b></td>' + '</tr>' + '</table>' + '</div>';

            }
        var d = new Date();
        var ld = new Date();
        ld.setDate(d.getDate() - 30);
        var options = {
          title: 'Site Requests',
          hAxis: {title: ld.toLocaleDateString() + " - " + d.toLocaleDateString(),  titleTextStyle: {color: 'white'}, textStyle: {color: 'white'}},
          vAxis: {minValue: 0},
          backgroundColor: '#1d1d1d',
          //graphOpacity: '0.8',
          is3D: true,
          titleTextStyle: {color : 'white'},
          legendTextStyle: {color : 'white'},
          'tooltip' : { trigger: 'none' }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }



    </script>

    <style>
    text {
    fill: white;
    }
    path {
    opacity: 200% !important
    }
    rect {
    border-radius: 20px !important;
    opacity: 100%;
    }
    </style>

    <! CHARTS >

</head>
<body>
<?php require('./menu.php') ?>
<h1>Shop</h1>
<div class="news">
    <h2>Weiter so!</h2>
    <img src="https://cdn.discordapp.com/attachments/850636447744262154/926230227359780914/unknown.png" hidden>
     <div id="chart_div" style="width: 1000px; height: 200px; background-color: #1d1d1d; color: 'white'; border-radius: 20px; position: relative; padding: 10px"></div>
</div>
<div class="items" id="itemholder">


</div>

</body>
<script src="items.js"></script>
</html>
