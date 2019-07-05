
<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../src/PHPMailer.php';
require '../src/SMTP.php';
require '../src/OAuth.php';
require '../src/Exception.php';
include ("../config.php");
 
// check request
if(isset($_POST)) 
{
    
    $tipo_evento = ""; // variable para guardar el tipo de evento
    $estado="";
    $nombre = mysqli_real_escape_string($link, $_POST["nombre"]);//nombre
    $apellidos = mysqli_real_escape_string($link, $_POST["apellidos"]);//apellidos
    $rut_paciente = mysqli_real_escape_string($link, $_POST["rut_paciente"]);//rut
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
    $query = "INSERT INTO eventos(nombre, apellidos, rut_paciente, fecha_creacion, areas_id_area, nombre_evento, dano, gravedad, notificacion_paciente, notificacion_familiares, notificacion_acompanantes,
     notificacion_no_informa, comentario, tipo, estado)
    VALUES('$nombre', '$apellidos','$rut_paciente', '$fecha', '$unidad', '$evento', '$dano_paciente', '$tipo_dano', '$paciente', '$familia', '$acompanante', '$no_informa', '$comentario', '$tipo_evento', '$estado')"; 
//La instrucción INSERT INTO se usa para agregar nuevos registros a una tabla MySQL:
//INSERT INTO table_name (column1, column2, column3,...)
//VALUES (value1, value2, value3,...)
    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    echo "Evento creado correctamente.";
    
    //Enviar correo 
$mail = new PHPMailer;
try {
    $mail->isSMTP(); 
    //$mail->SMTPDebug = 2;
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server message   
    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = 'tsl';
    $mail->Host = "mail.redsalud.gob.cl";
    $mail->Port = 25;
    $mail->Username = "carlos.henriquez@redsalud.gob.cl";
    $mail->Password = "173446837";
    $mail->From = "carlos.henriquez@redsalud.gob.cl";
    $mail->FromName = "Sistema de reporte de eventos adversos";
    $mail->Subject = "Evento adverso reportado";
    /*----------acá pondremos todos los destinatarios es decir todos los usuarios de medicina------------*/ 
      if ($tipo_evento == "Adverso") {
         switch ($unidad) {
             case '20':
           //  $mail->addAddress('carlos.henriquez@redsalud.gob.cl'); 
                 break;
             case '19':
             $mail->addAddress('macarena.araneda1993@gmail.com'); 
                 break;
             case '18':
              //   $mail->addAddress('ijeldres95@gmail.com'); 
                     break;
             case  '17':
                   
                   break;
             case  '16':
                   
                   break;
              case  '15':
                   
                   break;
              case  '14':
                   
                   break;
             case  '13':
                   
                   break;
              case  '12':
                   
                   break;
                case  '11':
                   
                   break;
                case  '10':
                   
                   break;
                 case  '9':
                   
                   break;
                case  '8':
                   
                   break;
                case  '7':
                   
                   break;
              case  '6':
                   
                   break;
                 case  '5':
                   
                   break;
                case  '4':
                   
                   break;
                case  '3':
                   
                   break;
                case  '2':
                   
                   break;
                 case  '1':
                   
                   break;
                   
            
            
         }
        
      }
 
  
    
    /*--------------------------------------------------------------------------------------------------*/
    $mail->MsgHTML("<html>
    <head>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;   
    }
    th{
        color: white;    
        background-color: #0072C6;       
    }
    </style>
    </head>
    <body>
    
    <h2>Evento reportado</h2>
    
    
    <table style=\"width:100%\">
      <tr>
        <th>Fecha Evento</th>
        <th>Lugar de ocurrencia</th>
        <th>Evento</th> 
        <th>Comentarios</th>
       
      </tr>
      <tr>
        <td>".$fecha."</td>
        <td>".$unidad."</td>
        <td>".$evento."</td>
        <td>".$comentario."</td>
       
      </tr>
    </table>
    </body>
    </html>");
    $mail -> Send();
    echo("El email se ha enviado con éxito");
} catch (Exception $e) {
    echo "El email no ha podido ser enviado: {$mail->ErrorInfo}";
}
}