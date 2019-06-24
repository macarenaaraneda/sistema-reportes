<?php

include ("../config.php");
 
// check request
if(isset($_POST))
{
    //tomamos los datos que vienen de los script y se asignan a una nueva variable
   // $tipo_evento = '';
  //  $incidente = 'Incidente';
  //  $adverso = 'Adverso';
  //  $centinela = 'Centinela';
    $id_evento = mysqli_real_escape_string($link, $_POST["id_evento"]); 
  //  $dano = mysqli_real_escape_string($link, $_POST["dano"]);   
   // $gravedad = mysqli_real_escape_string($link, $_POST["gravedad"]); 
   $tipo = mysqli_real_escape_string($link, $_POST["tipo"]); 
    
  
   /* echo $dano;
    if ($dano == "Verdadero") {

        echo 'daño verdadero';
        switch ($gravedad) {
            case 'Leve':
                echo 'gravedad leve';
                $tipo_evento = $adverso;
               
                
                break;
            
            case 'Moderado':
            echo 'gravedad moderado';
                $tipo_evento = $adverso;
               

                break;

            case 'Grave':
            echo 'gravedad grave';
                $tipo_evento = $centinela;
               
                break;    
        }
    }elseif($dano == "Falso") {
        $tipo_evento = $incidente;
      echo 'daño falso';
    }  */
    
 
    /*Actualizando datos de tipo evento segun gravedad y existencia de daño */
    
    $query = "UPDATE eventos
            SET  tipo = '$tipo'
            WHERE id_evento = '$id_evento' 
           

            ";

    

    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    echo "Evento actualizado correctamente.";

}