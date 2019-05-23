<?php
   session_start(); 
   
   include ("../config.php");
   
   //cuando entramos a las vistas donde necesitamos realizar check (laboratorio y en especialidades adminisrativas) debemos agregar al thead las opciones de laboratorio para validar recepcion de las muestras desde las distintas unidades clinicas y tambien cuando estas llegan desde el hospital higueras
   

   if($_SESSION['tipo_usuario'] == "Administrador"){
      $data = '<table id="tablaEventos" class="display table table-hover"  style="width:100%; margin: 0 auto;">
        <thead class=" thead-dark"> 

           
        <tr>
            
        <th>Nombre evento</th>
        <!-- <th>Gravedad</th> -->
        <!-- <th>Causa daño</th> -->
        <th>Tipo evento</th> 
        <!-- <th>Se informa a paciente</th> -->
        <!-- <th>Se informa a familia</th> -->
        <!-- <th>Se informa a acompañantes</th> -->
        <!-- <th>No se informa</th> -->
        <th>Unidad de ocurrencia</th>
        <th>Comentarios</th> 
        <th>Fecha</th>
        <th>Estado analisis</th>
        <th>Opciones</th>
        </tr>
    </thead>';  

   }elseif($_SESSION['tipo_usuario'] == "Jefatura"){

    $data = '<table id="tablaEventos" class="display table table-hover"  style="width:100%; margin: 0 auto;">
    <thead class=" thead-dark"> 

    <tr>
            
    <th>Nombre evento</th>
    <!-- <th>Gravedad</th> -->
    <!-- <th>Causa daño</th> -->
    <th>Tipo evento</th> 
    <!-- <th>Se informa a paciente</th> -->
    <!-- <th>Se informa a familia</th> -->
    <!-- <th>Se informa a acompañantes</th> -->
    <!-- <th>No se informa</th> -->
    <th>Unidad de ocurrencia</th>
    <th>Comentarios</th> 
    <th>Fecha</th>
    <th>Estado analisis</th>
    <th>Opciones</th>
    </tr>

    </thead>';  







   }
   
   
   
   
   
   
   /*id_area_usuarios
   USUARIOS
   1- FARMACIA
   2- MEDICINA
   3- LABORATORIO
   */
   
   //dependiendo del usuario que loguea se muestran los pacientes que le corresponde a cada tipo de usuario
   //Administrador no listara pacientes, solo se encargara de generar listas de usuarios y hacer gestion de ellos
   if($_SESSION['tipo_usuario'] == "Administrador"){
   
       //como es vista administrador deberia poder ver trazabilidad de una muestra al igual que lab 
       $query = 
               "SELECT * FROM eventos 
                ORDER BY id_evento DESC";
   
   
   }elseif ($_SESSION['tipo_usuario'] == "Jefatura") {
       switch ($_SESSION['areas_id_area']) {
           case '1':
            $query = 
                "SELECT * FROM eventos 

                WHERE areas_id_area= '1'
                ORDER BY id_evento DESC";
            break;
            case '2':
            $query = 
                "SELECT * FROM eventos 
                WHERE areas_id_area= '2'
                ORDER BY id_evento DESC";
             break;
             case '3':
             $query = 
                "SELECT * FROM eventos 
                WHERE areas_id_area= '3'
                ORDER BY id_evento DESC";
              break;
              case '4':
              $query = 
                "SELECT * FROM eventos 
                WHERE areas_id_area= '4'
                ORDER BY id_evento DESC";
               break;
               case '5':
               $query = 
                  "SELECT * FROM eventos 
                    WHERE areas_id_area= '5'
                    ORDER BY id_evento DESC";
                break;
                case '6':
                $query = 
                    "SELECT * FROM eventos 
                    WHERE areas_id_area= '6'
                    ORDER BY id_evento DESC";
                 break;
                 case '7':
                 $query = 
                     "SELECT * FROM eventos 
                     WHERE areas_id_area= '7'
                     ORDER BY id_evento DESC";
                  break;
                  case '8':
                  $query = 
                    "SELECT * FROM eventos 
                    WHERE areas_id_area= '8'
                    ORDER BY id_evento DESC";
                   break;
                   case '9':
                   $query = 
                      "SELECT * FROM eventos 
                        WHERE areas_id_area= '9'
                        ORDER BY id_evento DESC";
                    break;
                    case '10':
                    $query = 
                        "SELECT * FROM eventos 
                        WHERE areas_id_area= '10'
                        ORDER BY id_evento DESC";
                     break;
                     case '11':
                     $query = 
                        "SELECT * FROM eventos 
                        WHERE areas_id_area= '11'
                        ORDER BY id_evento DESC";
                      break;
                      case '12':
                      $query = 
                        "SELECT * FROM eventos 
                        WHERE areas_id_area= '12'
                        ORDER BY id_evento DESC";
                       break;
                       case '13':
                       $query = 
                          "SELECT * FROM eventos 
                            WHERE areas_id_area= '13'
                            ORDER BY id_evento DESC";
                        break;
                        case '14':
                        $query = 
                            "SELECT * FROM eventos 
                            WHERE areas_id_area= '14'
                            ORDER BY id_evento DESC";
                         break;
                         case '15':
                         $query = 
                            "SELECT * FROM eventos 
                            WHERE areas_id_area= '15'
                            ORDER BY id_evento DESC";
                          break;
                          case '16':
                          $query = 
                            "SELECT * FROM eventos 
                            WHERE areas_id_area= '16'
                            ORDER BY id_evento DESC";
                           break;
                           case '17':
                           $query = 
                             "SELECT * FROM eventos 
                                WHERE areas_id_area= '17'
                                ORDER BY id_evento DESC";
                            break;
                            case '18':
                            $query = 
                                "SELECT * FROM eventos 
                                WHERE areas_id_area= '18'
                                ORDER BY id_evento DESC";
                             break;
                             case '19':
                             $query = 
                                "SELECT * FROM eventos 
                                WHERE areas_id_area= '19'
                                ORDER BY id_evento DESC";
                              break;
                              case '20':
                              $query = 
                                "SELECT * FROM eventos 
                                WHERE areas_id_area= '20'
                                ORDER BY id_evento DESC";
                               break;
           
         
       }
   
     ;
   }
   
   
   if (!$result = mysqli_query($link, $query)) {
    exit(mysqli_error($link));
   }  
   
   if(mysqli_num_rows($result) > 0)
       {
           $number = 1;
           
            //formateo de  la unidad para mostrarla en pantalla como unidad y no como numero
           while($row = mysqli_fetch_assoc($result))
           {
            switch ($row['areas_id_area']){
                case '20':
                $row['areas_id_area'] = 'Equipos Médicos';
                break;
                
                case '19':
                $row['areas_id_area'] = 'Urgencias';
                break;

                case '18':
                $row['areas_id_area'] = 'Médico quirúrgico infantil';
                break;
                case '17':
                $row['areas_id_area'] = 'Médico quirúrgico adulto';
                break;
                case '16':
                $row['areas_id_area'] = 'Ginecología';
                break;
                case '15':
                $row['areas_id_area'] = 'Hospital de día';
                break;

                case '14':
                $row['areas_id_area'] = 'Hospitalización psiquiatría';
                break;
                case '13':
                $row['areas_id_area'] = 'Pabellón';
                break;
                case '12':
                $row['areas_id_area'] = 'Especialidades médico quirúrgico';
                break;
                case '11':
                $row['areas_id_area'] = 'Endoscopia';
                break;
                case '10':
                $row['areas_id_area'] = 'Nutrición';
                break;
                case '9':
                $row['areas_id_area'] = 'Laboratorio';
                break;
                case '8':
                $row['areas_id_area'] = 'Esterilización';
                break;
                case '7':
                $row['areas_id_area'] = 'Imagenología';
                break;
                case '6':
                $row['areas_id_area'] = 'Farmacia';
                break;
                case '5':
                $row['areas_id_area'] = 'Medicina física';
                break;
                case '4':
                $row['areas_id_area'] = 'PRAIS';
                break;
                case '3':
                $row['areas_id_area'] = 'Especialidades odontólogicas';
                break;
                case '2':
                $row['areas_id_area'] = 'Cuidados paleativos';
                break;
                case '1':
                $row['areas_id_area'] = 'Salud mental';
                break;

              }    

              // cambiar verdaderos por si y falsos por no
              switch ($row['notificacion_paciente']){
                case 'Verdadero': // codigo en HTML
                $row['notificacion_paciente'] = 'Si';
                break;
                case 'Falso':
                $row['notificacion_paciente'] = 'No';
                break;

              }
              switch ($row['notificacion_familiares']){
                case 'Verdadero':
                $row['notificacion_familiares'] = 'Si';
                break;
                case 'Falso':
                $row['notificacion_familiares'] = 'No';
                break;

              }
              switch ($row['notificacion_acompanantes']){
                case 'Verdadero':
                $row['notificacion_acompanates'] = 'Si';
                break;
                case 'Falso':
                $row['notificacion_acompanantes'] = 'No';
                break;

              }
              switch ($row['notificacion_no_informa']){
                case 'Verdadero':
                $row['notificacion_no_informa'] = 'Si';
                break;
                case 'Falso':
                $row['notificacion_no_informa'] = 'No';
                break;

              }
              switch ($row['dano']){
                case 'Verdadero':
                $row['dano'] = 'Si';
                break;
                case 'Falso':
                $row['dano'] = 'No';
                break;

              }
              

              // GUARDAR FECHA EN FORMATO CHILENO
            
           
              //fecha 
               $fecha = $row['fecha_creacion'];
               $fecha_parseada = explode(" ", $fecha);
               $fecha_chilena = date("d-m-y", strtotime($fecha_parseada[0]));
              
               /**/
                //ESTADO DE ANALISIS
               if ($row['estado'] == 'No aplica') {
                    
                $estadoEventosBadge = '<span class="badge badge-success">'.$row['estado'].'</span>';

              }elseif ($row['estado'] == 'Pendiente') {

                $estadoEventosBadge = '<span class="badge badge-danger">'.$row['estado'].'</span>';

              }elseif ($row['estado'] == 'Ejecutado') {

                $estadoEventosBadge = '<span class="badge badge-success">'.$row['estado'].'</span>';

              }elseif ($row['estado'] == 'En espera') {

                $estadoEventosBadge = '<span class="badge badge-light">'.$row['estado'].'</span>';

              }

               //preguntamos por el tipo de sesion que trae session y escribimos codigo html/php para cada tipo de usuario logueado (concatenado) 
               switch ($_SESSION['tipo_usuario']) {//tipo de usuario
   
                    case 'Administrador'://solo debe mostrar informacion de los usuarios una especia de lista que muestre 
                     
                       $data .= ' <!-- concatenar a una variable ya creada-->
                        <tr>
                            
                                                   
                            <td>'.$row['nombre_evento'].'</td>
                            <!-- <td>'.$row['gravedad'].'</td> -->
                            <!-- <td>'.$row['dano'].'</td> -->
                            <td>'.$row['tipo'].'</td>
                            <!-- <td>'.$row['notificacion_paciente'].'</td> -->
                            <!-- <td>'.$row['notificacion_familiares'].'</td> -->
                            <!-- <td>'.$row['notificacion_acompanantes'].'</td> -->
                            <!-- <td>'.$row['notificacion_no_informa'].'</td> -->
                            <td>'.$row['areas_id_area'].'</td>
                            <td>'.$row['comentario'].'</td>
                            <td> '.$fecha_chilena.'</td>
                            <td> '.$estadoEventosBadge.'</td>
                            <td id="botonesTabla">
                              
                            <button  type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModalVerEvento" data-backdrop="static" data-keyboard="false" onclick="obtenerDetallesEventos('.$row['id_evento'].')">
                            <span><i class="fas fa-edit"></i></span></button>

                            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalFormularioBoton" data-backdrop="static" data-keyboard="false">
                            <span><i class="fas fa-edit"></i></span></button>

                            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalFormularioBoton" data-backdrop="static" data-keyboard="false">
                            <span><i class="fas fa-edit"></i></span></button>

                            </td>
                        </tr>';
                    break;

                    case 'Jefatura'://solo debe mostrar informacion de los usuarios una especia de lista que muestre 
                     
                    $data .= ' <!-- concatenar a una variable ya creada-->
                    <tr>
                            
                                                   
                                            
                    <td>'.$row['nombre_evento'].'</td>
                    <!-- <td>'.$row['gravedad'].'</td> -->
                    <!-- <td>'.$row['dano'].'</td> -->
                    <td>'.$row['tipo'].'</td>
                    <!-- <td>'.$row['notificacion_paciente'].'</td> -->
                    <!-- <td>'.$row['notificacion_familiares'].'</td> -->
                    <!-- <td>'.$row['notificacion_acompanantes'].'</td> -->
                    <!-- <td>'.$row['notificacion_no_informa'].'</td> -->
                    <td>'.$row['areas_id_area'].'</td>
                    <td>'.$row['comentario'].'</td>
                    <td> '.$fecha_chilena.'</td>
                    <td> '.$estadoEventosBadge.'</td>
                    <td id="botonesTabla">
                      
                            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalFormularioBoton" data-backdrop="static" data-keyboard="false">
                            <span><i class="fas fa-edit"></i></span></button>

                            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalFormularioBoton" data-backdrop="static" data-keyboard="false">
                            <span><i class="fas fa-edit"></i></span></button>

                            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalFormularioBoton" data-backdrop="static" data-keyboard="false">
                            <span><i class="fas fa-edit"></i></span></button>
                            

                    </td>
                </tr>';
                 break;


               }    
           }
       }else{

           // Sí no se muestran los datos debemos colocar esto dependiendo del numero de columnas por lo que deberia ir un switchpreguntando si es admin o basico (farmacia, medicina y laboratorio)
          if($_SESSION['tipo_usuario'] == "Administrador"){
            $data .= '<tr><td colspan="13">¡No se encontraron datos!</td></tr>';
             
          }elseif ($_SESSION['tipo_usuario'] == "Jefatura") {
            $data .= '<tr><td colspan="13">¡No se encontraron datos!</td></tr>';
          }
       }
       //concatenamos donde termina la etiqueta table
       $data .= '</table>';
       
       //imprimimos tabla completa
       echo $data;
   ?>