<?php
   session_start(); 
   
   include ("../config.php");
   
  // si el usuario es administrador muestro la tabla con todos los datos dentro del tr ( fila o celda)
   // si el usuario es admin:
   if($_SESSION['tipo_usuario'] == "Administrador"){
      $data = '<table id="tablaEventos" class="display table-hover table-bordered"  style="width:100%; margin: 0 auto;">
       <thead>
      
           
        <tr>
          
        <th>Paciente </th>
      
        <th>Rut </th>
        <th>Evento</th> 
        <th>Unidad</th>
        <th>Fecha</th>
        <th>Análisis</th>
        
        <th>Opciones</th> <!-- BOTONES -->
        </tr>
    </thead>';  
  // SI EL USUARIO ES JEFATURA MUESTRO LO SIGUIENTE:
   }elseif($_SESSION['tipo_usuario'] == "Jefatura"){

    $data = '<table id="tablaEventos" class="display table-hover table-bordered table-condensed"  style="width:100%; margin: 0 auto;">
    <thead class=" thead-light"> <!-- puede ser dark -->
      
           
        <tr>
          
        <th>Nombre </th>
        <th>Apellidos</th>
        <th>Rut </th>
        <th>Evento</th> 
        <th>Unidad</th>
        <th>Fecha</th>
        <th>Análisis</th> 
        <th>Opciones</th> <!-- BOTONES -->
        </tr>

    </thead>';  


   }
   
   
   
   
  
   
   //dependiendo del usuario que logea se muestra TODO O ALGUNAS COSAS CON SELECTO FROM Y WHERE
   // SI ES ADMINISTRADOR OBTIENE LOS DATOS DE BASE DE DATOS Y TABLA EVENTOS
   // https://www.campusmvp.es/recursos/post/Fundamentos-de-SQL-Como-realizar-consultas-simples-con-SELECT.aspx
   if($_SESSION['tipo_usuario'] == "Administrador"){
   
       // selecciono todo de eventos ordenado por fecha de creación de la mas nueva a la mas antigua
       $query = 
               "SELECT * FROM eventos
                
                ORDER BY fecha_creacion DESC";
   
   // si es jefatura se mostrará segun la area a la cual pertenezca la jefaura
   // 
   }elseif ($_SESSION['tipo_usuario'] == "Jefatura") {
       switch ($_SESSION['areas_id_area']) {
           case '1':
            $query = 
                "SELECT * FROM eventos 

                WHERE areas_id_area= '1'
                ORDER BY fecha_creacion DESC";
            break;

            case '2':
            $query = 
                "SELECT * FROM eventos 
                WHERE areas_id_area= '2'
                ORDER BY fecha_creacion DESC";
             break;

             case '3':
             $query = 
                "SELECT * FROM eventos 
                WHERE areas_id_area= '3'
                ORDER BY fecha_creacion DESC";
              break;

              case '4':
              $query = 
                "SELECT * FROM eventos 
                WHERE areas_id_area= '4'
                ORDER BY fecha_creacion DESC";
               break;

               case '5':
               $query = 
                  "SELECT * FROM eventos 
                    WHERE areas_id_area= '5'
                    ORDER BY fecha_creacion DESC";
                break;

                case '6':
                $query = 
                    "SELECT * FROM eventos 
                    WHERE areas_id_area= '6'
                    ORDER BY fecha_creacion DESC";
                 break;

                 case '7':
                 $query = 
                     "SELECT * FROM eventos 
                     WHERE areas_id_area= '7'
                     ORDER BY fecha_creacion DESC";
                  break;

                  case '8':
                  $query = 
                    "SELECT * FROM eventos 
                    WHERE areas_id_area= '8'
                    ORDER BY fecha_creacion DESC";
                   break;

                   case '9':
                   $query = 
                      "SELECT * FROM eventos 
                        WHERE areas_id_area= '9'
                        ORDER BY fecha_creacion DESC";
                    break;

                    case '10':
                    $query = 
                        "SELECT * FROM eventos 
                        WHERE areas_id_area= '10'
                        ORDER BY fecha_creacion DESC";
                     break;

                     case '11':
                     $query = 
                        "SELECT * FROM eventos 
                        WHERE areas_id_area= '11'
                        ORDER BY fecha_creacion DESC";
                      break;

                      case '12':
                      $query = 
                        "SELECT * FROM eventos 
                        WHERE areas_id_area= '12'
                        ORDER BY fecha_creacion DESC";
                       break;

                       case '13':
                       $query = 
                          "SELECT * FROM eventos 
                            WHERE areas_id_area= '13'
                            ORDER BY fecha_creacion DESC";
                        break;

                        case '14':
                        $query = 
                            "SELECT * FROM eventos 
                            WHERE areas_id_area= '14'
                            ORDER BY fecha_creacion DESC";
                         break;

                         case '15':
                         $query = 
                            "SELECT * FROM eventos 
                            WHERE areas_id_area= '15'
                            ORDER BY fecha_creacion DESC";
                          break;

                          case '16':
                          $query = 
                            "SELECT * FROM eventos 
                            WHERE areas_id_area= '16'
                            ORDER BY fecha_creacion DESC";
                           break;

                           case '17':
                           $query = 
                             "SELECT * FROM eventos 
                                WHERE areas_id_area= '17'
                                ORDER BY fecha_creacion DESC";
                            break;

                            case '18':
                            $query = 
                                "SELECT * FROM eventos 
                                WHERE areas_id_area= '18'
                                ORDER BY fecha_creacion DESC";
                             break;

                             case '19':
                             $query = 
                                "SELECT * FROM eventos 
                                WHERE areas_id_area= '19'
                                ORDER BY fecha_creacion DESC";
                              break;
                              
                              case '20':
                              $query = 
                                "SELECT * FROM eventos 
                                WHERE areas_id_area= '20'
                                ORDER BY fecha_creacion DESC";
                               break;
           
         
       }
   
     ;
   }
   
   // comprueba que existe una fila, VALIDACIÓN
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
                //ESTADO DE ANALISIS colores
               if ($row['estado'] == 'No aplica') {
                    
                $estadoEventosBadge = '<span class="badge badge-warning">'.$row['estado'].'</span>';

              }elseif ($row['estado'] == 'Pendiente') {

                $estadoEventosBadge = '<span class="badge badge-danger">'.$row['estado'].'</span>';

              }elseif ($row['estado'] == 'Ejecutado') {

                $estadoEventosBadge = '<span class="badge badge-success">'.$row['estado'].'</span>';

              }
              //AGREGAR BOTONES AQUÍ PARA MOSTRAR

               //preguntamos por el tipo de sesion que trae session y escribimos codigo html/php para cada tipo de usuario logueado (concatenado) 
               switch ($_SESSION['tipo_usuario']) {//tipo de usuario
   
                    case 'Administrador':
                     
                       $data .= ' <!-- concatenar a una variable ya creada-->
                        <tr>
                            
                                                   
                        
                            <td>'.$row['nombre'].' '.$row['apellidos'].'</td> 
                            <td>'.$row['rut_paciente'].'</td>
                            <td>'.$row['tipo'].'</td>
                            <td>'.$row['areas_id_area'].'</td>
                            <td> '.$fecha_chilena.'</td>
                            <td> '.$estadoEventosBadge.'</td>
                            <td id="botonesTabla">
                              
                            <button  type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModalVerEvento" data-backdrop="static" data-keyboard="false" onclick="obtenerDetallesEventos('.$row['id_evento'].')">
                            <span title="Detalles Reportes"><i class="fas fa-book-open"></i></span></button>
                            

                            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalVerFormularioAnalisis" data-backdrop="static" data-keyboard="false" onclick="obtenerInformes('.$row['id_evento'].')">
                            <span title="Ver Análisis"><i class="fas fa-check"></i></span></button>
                            
                            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalActualizarEventos" data-backdrop="static" data-keyboard="false" onclick="obtenerDetallesEventosParaActualizar('.$row['id_evento'].')">
                            <span title="Tipo evento" ><i class="fas fa-edit"></i></span></button>

                            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalActualizarEstado" data-backdrop="static" data-keyboard="false" onclick="obtenerEstadosParaActualizar('.$row['id_evento'].')">
                            <span title="Estado análisis"><i class="fas fa-bell"></i></span></button>
                                                  
                            </td>
                        </tr>';
                    break;

                    case 'Jefatura'://solo debe mostrar informacion de los usuarios una especia de lista que muestre 
                     
                    $data .= ' <!-- concatenar a una variable ya creada-->
                    <tr>
                            
                                                   
                    <td>'.$row['nombre'].'</td>
                    <td>'.$row['apellidos'].'</td>
                    <td>'.$row['rut_paciente'].'</td>
                    <td>'.$row['tipo'].'</td> 
                    <td>'.$row['areas_id_area'].'</td>
                    <td> '.$fecha_chilena.'</td>
                    <td> '.$estadoEventosBadge.'</td>
                    <td id="botonesTabla">
                      <!--COLOCAR MYMODAL CORRECTO EN CADA BOTON -->
                      <button  type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModalVerEvento" data-backdrop="static" data-keyboard="false" onclick="obtenerDetallesEventos('.$row['id_evento'].')">
                      <span title="Detalles Reportes" ><i class="fas fa-book-open"></i></span></button>
                      

                            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalFormularioAnalisis" data-backdrop="static" data-keyboard="false" onclick="DatosOcultosInformeAnalisis('.$row['id_evento'].')">
                            <span title="Completar Análisis" ><i class="fas fa-edit"></i></span></button>

                            
                            <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalVerFormularioAnalisis" data-backdrop="static" data-keyboard="false" onclick="obtenerInformes('.$row['id_evento'].')">
                            <span title="Ver análisis"><i class="fas fa-check"></i></span></button>
                            
                           
                    </td>            
                </tr>';
                 break;


               }    
           }
       }else{

           // Sí no se muestran los datos 
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