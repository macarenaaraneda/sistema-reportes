<?php

include ("../config.php");
 
// check request
if(isset($_POST))
{
    //tomamos los datos que vienen de los script y se asignan a una nueva variable
    $id_evento = mysqli_real_escape_string($link, $_POST["id_evento"]); 
   
    $estado = mysqli_real_escape_string($link, $_POST["estado"]); 
  
    
    
    $query = "UPDATE eventos
            SET estado = '$estado' 
            WHERE id_evento = '$id_evento' 
           

            ";



    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    echo "Estado actualizado correctamente.";

}