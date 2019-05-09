
<?php

include ("../config.php");
 
// check request
if(isset($_POST))
{
    $tipo_evento = "";
 
    $fecha = mysqli_real_escape_string($link, $_POST["fecha"]);//fecha_creacion
    $unidad = mysqli_real_escape_string($link, $_POST["unidad"]);//areas_id_area 
    $evento = mysqli_real_escape_string($link, $_POST["evento"]); //nombre_evento
    $tipo_dano = mysqli_real_escape_string($link, $_POST["tipo_dano"]); //gravedad
    $comentario = mysqli_real_escape_string($link, $_POST["comentario"]); //comentario

    $dano_paciente = mysqli_real_escape_string($link, $_POST["dano_paciente"]); //dano
    $paciente = mysqli_real_escape_string($link, $_POST["paciente"]); //notificacion_paciente
    $familia = mysqli_real_escape_string($link, $_POST["familia"]); //notificacion_familiares
    $acompanante = mysqli_real_escape_string($link, $_POST["acompanante"]); //notificacion_acompanantes
    $no_informa = mysqli_real_escape_string($link, $_POST["no_informa"]); //notificacion_no_informa


    //daño paciente
    if ($dano_paciente == "on") {
        $dano_paciente = "Verdadero";
    }else{
        $dano_paciente = "Falso";
    }

    //notificacion a paciente
    if ($paciente == "on") {
        $paciente = "Verdadero";
    }else{
        $paciente = "Falso";
    }

    //notificacion familia
    if ($familia == "on") {
        $familia = "Verdadero";
    }else{
        $familia = "Falso";
    }

    //notificacion acompañante
    if ($acompanante == "on") {
        $acompanante = "Verdadero";
    }else{
        $acompanante = "Falso";
    }

    //notificacion 
    if ($no_informa == "on") {
        $no_informa = "Verdadero";
    }else{
        $no_informa = "Falso";
    }

    
    //seleccionamos tipo de evento
    if ($dano_paciente == "Verdadero") {
        switch ($tipo_dano) {
            case 'Leve':
                $tipo_evento = "Adverso";
                break;
            
            case 'Moderado':
                $tipo_evento = "Adverso";
                break;

            case 'Grave':
                $tipo_evento = "Centinela";
                break;    
        }
    }else{
        $tipo_evento = "Incidente";
    }
    
 
    /*comprobado que se puede agregar trazabilidad y cambiar el estado*/
    
    $query = "INSERT INTO eventos(fecha_creacion, areas_id_area, nombre_evento, dano, gravedad, notificacion_paciente, notificacion_familiares, notificacion_acompanantes,
     notificacion_no_informa, comentario, tipo)

    VALUES('$fecha', '$unidad', '$evento', '$dano_paciente', '$tipo_dano', '$paciente', '$familia', '$acompanante', '$no_informa', '$comentario', '$tipo_evento')"; 

    /*$query = "UPDATE pacientes, muestras SET tipo_muestra = '$tipo_muestra', establecimiento_origen = 'HPL' , areas_id_area = '$unidad_origen', num_frasco = '$num_frasco' WHERE id_muestra = '$id'";*/

    /*$query = "UPDATE antibioticos SET tipo_muestra = '$tipo_muestra' WHERE id_antibiotico = '$id'";*/

    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    echo "Evento creado correctamente.";

}