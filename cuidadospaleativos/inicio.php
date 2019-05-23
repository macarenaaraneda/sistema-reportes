<?php
session_start();


include '../config.php';

/* Si se reconoce rut y contraseña de administrador ingresar*/
if(!isset($_SESSION['rut']) || empty($_SESSION['rut'])){
   header("location: login.php");
   exit;
}

?>


<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "sistemareportes";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección de la base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT fecha_creacion, gravedad, dano, tipo, notificacion_paciente, notificacion_familiares, notificacion_acompanantes, notificacion_no_informa, nombre_evento, areas_id_area, comentario FROM eventos"; 
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla


	echo "LISTA DE EVENTOS";
	echo "<table borde='4'>";
	echo "<tr>";
	echo "<th>Fecha</th>";
    echo "<th>Gravedad</th>";
    echo "<th>Causa daño</th>";
    echo "<th>Tipo evento</th>";
    echo "<th>Notifico al paciente</th>";
    echo "<th>Notifico a la familia</th>";
    echo "<th>Notifico a acompañantes</th>";
    echo "<th>No se notifico</th>";
    echo "<th>Nombre evento</th>";
    echo "<th>idarea</th>";
    echo "<th>Comentarios</th>";
	echo "</tr>";
	
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['fecha_creacion'] . "</td><td>" . $columna['gravedad'] . "</td> <td>" . $columna['dano'] . "</td><td>" . $columna['tipo'] . "</td><td>" . $columna['notificacion_paciente'] . "</td><td>" . $columna['notificacion_familiares'] . "</td><td>" . $columna['notificacion_acompanantes'] . "</td><td>" . $columna['notificacion_no_informa'] . "</td><td>" . $columna['nombre_evento'] . "</td><td>" . $columna['areas_id_area'] . "</td><td>" . $columna['comentario'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>