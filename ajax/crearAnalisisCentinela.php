
<?php

include ("../config.php");
 
// check request
if(isset($_POST)) 
{
   
   
    $causales = mysqli_real_escape_string($link, $_POST["causales"]);//causas
    $condiciones = mysqli_real_escape_string($link, $_POST["condiciones"]);//propuestas
    $efectos = mysqli_real_escape_string($link, $_POST["efectos"]);//propuestas
    $medidas = mysqli_real_escape_string($link, $_POST["medidas"]);//eventos_id_evento
    $id_evento = mysqli_real_escape_string($link, $_POST["id_evento"]);//eventos_id_evento
    $id_areas_id_area = mysqli_real_escape_string($link, $_POST["id_areas_id_area"]);//eventos_areas_id_area
    

    

    
  
    //inserta datos
    $query = "INSERT INTO informes_centinela( causales, condiciones, efectos, medidas,eventos_id_evento, eventos_areas_id_area)

    VALUES('$causales', '$condiciones', '$efectos', '$medidas','$id_evento', '$id_areas_id_area')"; 

//La instrucción INSERT INTO se usa para agregar nuevos registros a una tabla MySQL:
//INSERT INTO table_name (column1, column2, column3,...)
//VALUES (value1, value2, value3,...)

    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    echo "analisis Centinela creado correctamente.";

}
