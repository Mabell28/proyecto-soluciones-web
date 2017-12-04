<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<?php include 'nav.php'; ?>
<div id="chart_div" style="width: 900px; height: 600px;"></div>
</body>
<script>
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Mes', 'Total',],
		<?php foreach($lista as $campo){ 
			$mes = $ames[$campo["mes"]];
			$total =  $campo["total"]*1;
			echo "['$mes', $total],";
		} 
		?>
      ]);

      var options = {
        title: 'Total Ventas por Mes',
        chartArea: {width: '50%', height:'50%'},
        hAxis: {
          title: 'Total por Mes',
          minValue: 0
        },
        vAxis: {
          title: 'Mes'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }</script>
</html>