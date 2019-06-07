
<?php

include ("../config.php");
 
// check request
if(isset($_POST)) 
{
   
   
    $causas = mysqli_real_escape_string($link, $_POST["causas"]);//causas
    $propuestas = mysqli_real_escape_string($link, $_POST["propuestas"]);//propuestas
    $id = mysqli_real_escape_string($link, $_POST["id"]);//id
    $id_areas_id_area = mysqli_real_escape_string($link, $_POST["id_areas_id_area"]);//id_areas_id_area
    

    

    
  
    //inserta datos
    $query = "INSERT INTO informes( causas, propuestas, eventos_id_evento, eventos_areas_id_area)

    VALUES('$causas', '$propuestas', '$id', '$id_areas_id_area')"; 

//La instrucción INSERT INTO se usa para agregar nuevos registros a una tabla MySQL:
//INSERT INTO table_name (column1, column2, column3,...)
//VALUES (value1, value2, value3,...)

    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    echo "analisis creado correctamente.";

}
