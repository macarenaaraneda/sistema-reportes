<?php
session_start();


include '../config.php'; // acceso




if(!isset($_SESSION['rut']) || empty($_SESSION['rut'])){
 //header("location: login.php")

   exit;
}
?>
<html>
<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
 
	function drawChart() {
  var num = 11;
		var data = google.visualization.arrayToDataTable([
			['Tarea', 'Horas por dia'],
			['Trabajo',     num],
			['Comida',      2],
			['Social',  2],
			['Ver la TV', 2],
			['Dormir',    7]
		]);
 
 
		// grafico en 2d
		var options = {
			title: 'Mis actividades diarias'
		};
		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
 
		// grafico en 3d
		var options = {
			title: 'Mis actividades diarias',
			is3D: true,
		};
		var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
		chart.draw(data, options);
	}
	</script>
</head>
<body>
	<div id="piechart" style="width: 900px; height: 500px;"></div>
	<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>
</html>