
<?php

include ("../config.php");
 
// check request
if(isset($_POST)) 
{
    $tipo_evento = ""; // variable para guardar el tipo de evento
    $estado="";
    $fecha = mysqli_real_escape_string($link, $_POST["fecha"]);//fecha_creacion
    $unidad = mysqli_real_escape_string($link, $_POST["unidad"]);//areas_id_area 
    $evento = mysqli_real_escape_string($link, $_POST["evento"]); //nombre_evento
    $dano_paciente = mysqli_real_escape_string($link, $_POST["dano_paciente"]); //dano
    $tipo_dano = mysqli_real_escape_string($link, $_POST["tipo_dano"]); //gravedad
      
    $paciente = mysqli_real_escape_string($link, $_POST["paciente"]); //notificacion_paciente
    $familia = mysqli_real_escape_string($link, $_POST["familia"]); //notificacion_familiares
    $acompanante = mysqli_real_escape_string($link, $_POST["acompanante"]); //notificacion_acompanantes
    $no_informa = mysqli_real_escape_string($link, $_POST["no_informa"]); //notificacion_no_informa
    $comentario = mysqli_real_escape_string($link, $_POST["comentario"]); //comentario

    //daño paciente
    if ($dano_paciente == "on") {  // si se chequea la existencia de daño
        $dano_paciente = "Verdadero";  // recibe verdadero
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
    //Estado de analisis, evento es adverso o centinela viene predetermindo como en ¨espera¨ si es incidente no aplica analisis
    if ($dano_paciente == "Verdadero") {
        switch ($tipo_dano) {
            case 'Leve':
                $tipo_evento = "Adverso";
                $estado="Pendiente"; //Estado de analisis
                
                break;
            
            case 'Moderado':
                $tipo_evento = "Adverso";
                $estado="Pendiente";

                break;

            case 'Grave':
                $tipo_evento = "Centinela";
                $estado="Pendiente";
                break;    
        }
    }else{
        $tipo_evento = "Incidente";
        $estado="No aplica";
    }
    

  
    //inserta datos
    $query = "INSERT INTO eventos(fecha_creacion, areas_id_area, nombre_evento, dano, gravedad, notificacion_paciente, notificacion_familiares, notificacion_acompanantes,
     notificacion_no_informa, comentario, tipo, estado)

    VALUES('$fecha', '$unidad', '$evento', '$dano_paciente', '$tipo_dano', '$paciente', '$familia', '$acompanante', '$no_informa', '$comentario', '$tipo_evento', '$estado')"; 

//La instrucción INSERT INTO se usa para agregar nuevos registros a una tabla MySQL:
//INSERT INTO table_name (column1, column2, column3,...)
//VALUES (value1, value2, value3,...)

    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    echo "Evento creado correctamente.";

}
