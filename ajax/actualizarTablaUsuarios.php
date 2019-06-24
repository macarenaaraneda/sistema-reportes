<?php
   session_start(); 
   
   include ("../config.php");
   

   

   if($_SESSION['tipo_usuario'] == "Administrador"){
      $data = '<table id="tablaUsuarios" class="display table-hover table-bordered"  style="width:100%; margin: 0 auto;">
        <thead>
            <tr>
                <!--<th style="height: 40px; width: 40px;"></th>-->
                <th>Rut</th>
                <th>Usuario</th>
                <th>Tipo usuario</th>
                <th>Unidad</th>
                <th>Opciones</th>
            </tr>
        </thead>';          
   }
   
   
   
   
   
  
   //dependiendo del usuario que loguea se muestran los pacientes que le corresponde a cada tipo de usuario
   //Administrador no listara pacientes, solo se encargara de generar listas de usuarios y hacer gestion de ellos
   if($_SESSION['tipo_usuario'] == "Administrador"){
   
       //como es vista administrador deberia poder ver trazabilidad de una muestra al igual que lab 
       $query = 
               "SELECT * FROM usuarios 
                ORDER BY id_usuario DESC";
   
   
   }
   
   
   if (!$result = mysqli_query($link, $query)) {
    exit(mysqli_error($link));
   }  
   
   if(mysqli_num_rows($result) > 0)
       {
           $number = 1;
           
            //formateamos la unidad para mostrarla en pantalla como unidad y no como numero
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

              //convertir nombres porque uno es de usuarios y el otro es de antibioticos

            

               //preguntamos por el tipo de sesion que trae session y escribimos codigo html/php para cada tipo de usuario logueado (concatenado) 
              
                       $data .= '
                        <tr>
                        <td>'.$row['rut'].'</td>  
                         <td>'.$row['nombre'].' '.$row['apellido'].'</td> 
                        <td>'.$row['tipo_usuario'].'</td>
                         <td>'.$row['areas_id_area'].'</td>

                            <td id="botonesTabla">
                                <span data-toggle="tooltip" data-placement="top"
                                    title="Editar datos usuario">
                                    <button data-backdrop="static" data-keyboard="false" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalActualizarUsuario" onclick="obtenerUsuariosParaActualizar('.$row['id_usuario'].')">
                                    <i class="fas fa-pen-square"></i>
                                    </button>
                                </span>

                                <span data-toggle="tooltip" data-placement="top" title="Eliminar usuario">
                                    <button type="button" class="btn btn-danger" onclick="eliminarUsuario('.$row['id_usuario'].')">
                                    <i class="fas fa-trash-alt"></i></button>   
                                </span>

                              
                            </td>
                        </tr>';
               
           }
       }
       //concatenamos donde termina la etiqueta table
       $data .= '</table>';
       
       //imprimimos tabla completa
       echo $data;
   ?>
