
<?php

include ("../config.php");
 
// check request
if(isset($_POST)) 
{
    
    $nombre = mysqli_real_escape_string($link, $_POST["nombre"]);//nombre
    $apellido = mysqli_real_escape_string($link, $_POST["apellido"]);//apellido
    $rut = mysqli_real_escape_string($link, $_POST["rut"]); //rut
    $form_pass =mysqli_real_escape_string($link, $_POST["password"]); //password
    $hash = password_hash($form_pass, PASSWORD_BCRYPT);

    $tipo_usuario = mysqli_real_escape_string($link, $_POST["tipo_usuario"]); //tipo_usurio
    $unidad = mysqli_real_escape_string($link, $_POST["unidad"]); //areas_id_area
   

    
  
    //inserta datos
    $query = "INSERT INTO usuarios(nombre, apellido, rut, password, tipo_usuario, areas_id_area)

    VALUES('$nombre', '$apellido', '$rut', '$hash', '$tipo_usuario', '$unidad')"; 

//La instrucción INSERT INTO se usa para agregar nuevos registros a una tabla MySQL:
//INSERT INTO table_name (column1, column2, column3,...)
//VALUES (value1, value2, value3,...)

    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    echo "Evento creado correctamente.";

}
