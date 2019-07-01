<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root"," ","sistemareportes");

$sqlQuery = "SELECT id_evento, tipo, nombre_evento FROM eventos ORDER BY id_evento";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>