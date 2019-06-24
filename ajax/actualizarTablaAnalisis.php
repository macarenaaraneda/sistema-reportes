<?php

session_start();
include ("../config.php");

$data = '<table id="tablaInformes" class="display table-hover table-bordered  table-condensed"  style="width:100%; margin: 0 auto;">
<thead class=" thead-light"> <!-- puede ser dark -->

   
<tr>
  
<th>paciente</th>
<th>Rut</th> 
<th>Evento</th> 
<th>Unidad</th>
<th>Fecha</th>
<th>causas</th> 
<th>propuestas</th> 
<th>Ver Evento</th> <!-- BOTONES -->

</tr>
</thead>';  

 // selecciono todos los informes ordenado por fecha de creación de la mas nueva a la mas antigua
 $query = 
 " SELECT *
 FROM eventos e
 INNER JOIN informes i ON  e.id_evento= i.eventos_id_evento 
  ORDER BY fecha_creacion DESC";

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
          

              // LO QUE MUESTRO Y BOTONES

              $data .= ' <!-- concatenar a una variable ya creada-->
              <tr>
                  
                                         
                  <td>'.$row['nombre'].' '.$row['apellidos'].'</td> 
                  <td>'.$row['rut'].'</td>
                  <td>'.$row['tipo'].'</td>
                  <td>'.$row['areas_id_area'].'</td>
                  <td> '.$fecha_chilena.'</td>
                  <td>'.$row['causas'].'</td>
                  <td>'.$row['propuestas'].'</td>
                   
                  <td id="botonesTabla">
                  
                  

                 
                  <button  type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModalFormularioDetallesAyE" data-backdrop="static" data-keyboard="false" onclick="obtenerDetallesEventosAnalisis('.$row['id_evento'].')">
                  <span><i class="fas fa-book-open"></i></span></button>


                  </td>
              </tr>';
            }
       }

               // Sí no se muestran los datos 
   
           
             
          
       
       //concatenamos donde termina la etiqueta table
       $data .= '</table>';
       
       //imprimimos tabla completa
       echo $data;

?>