<?php

include ("../config.php");
 
// check request
if(isset($_POST))
{
    //tomamos los datos que vienen de los script y se asignan a una nueva variable
    $id = mysqli_real_escape_string($link, $_POST["id_evento"]); 
   


    $dano = mysqli_real_escape_string($link, $_POST["dano"]); 
    if($dano=="on"){

        $dano="Verdadero";
    }else{
        $dano="Falso";

    }
   
    $gravedad = mysqli_real_escape_string($link, $_POST["gravedad"]); 
  
    
 
    /*comprobado que se puede agregar trazabilidad y cambiar el estado*/
    
    $query = "UPDATE eventos
            SET dano = '$dano' , gravedad='$gravedad'
            WHERE id_evento = '$id' 
           

            ";

    /*$query = "UPDATE pacientes, muestras SET tipo_muestra = '$tipo_muestra', establecimiento_origen = 'HPL' , areas_id_area = '$unidad_origen', num_frasco = '$num_frasco' WHERE id_muestra = '$id'";*/

    /*$query = "UPDATE antibioticos SET tipo_muestra = '$tipo_muestra' WHERE id_antibiotico = '$id'";*/

    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    echo "Evento actualizado correctamente.";

}