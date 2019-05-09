<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', ''); /* sin contraseña*/
define('DB_NAME', 'sistemareportes');//nombre de la base de datos

/* conexión a la base de datos*/
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
} 

?>