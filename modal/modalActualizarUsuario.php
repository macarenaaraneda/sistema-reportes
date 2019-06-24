
<style type="text/css">
  .error {
  color: red;
}
</style>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/estilos.css">
</head>
<div class="modal fade" id="myModalActualizarUsuario">
    <div class="modal-dialog modal-lg" style="width: 600px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Actualizar usuario</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form id="formActualizarUsuario" name="formActualizarUsuario" method="post">



          <!-- Formulario -->
          <div>

       

 <!-- <div class="formulario">
    <label class="control-label col-sm-2" for="password">Contraseña:</label>
    <div class="col-sm-12">
      <input type="password" name= "a_password" class="form-control" id="a_password" placeholder="Ingrese contraseña">
    </div>
  </div> -->

  <div class="formulario">  
                           
                           
                           <label class="control-label col-sm-2">Usuario:</label>
                           <div class="form-group col-sm-12">
                               <select name="a_tipo_usuario" id="a_tipo_usuario" class="form-control">
                                
                                   <option value="Jefatura">Jefatura </option>
                                   <option value="Administrador">Administrador </option>
                                  
                               </select>
                           </div>
       </div>  <!-- FIN TIPO USUARIO -->

           
           
       
            <div class="formulario">  <!--Unidad -->
                           
                               
                                <label class="control-label col-sm-2">Unidad:</label>
                                <div class="form-group col-sm-12">
                                    <select name="a_unidad" id="a_unidad" class="form-control">

                                        <option value="1">Salud mental</option>
                                        <option value="2">Cuidados paleativos</option>
                                        <option value="3">Especialidades odontológicas</option>
                                        <option value="4">PRAIS</option>
                                        <option value="5">Medicina fÍsica</option>
                                        <option value="6">Farmacia</option>
                                        <option value="7">Imagenología</option>
                                        <option value="8">Esterilización</option>
                                        <option value="9">Laboratorio</option>
                                        <option value="10">Nutrición</option>
                                        <option value="11">Endoscopia</option>
                                        <option value="12">Especialidades médico quirúrgico</option>
                                        <option value="13">Pabellón</option>
                                        <option value="14">Hospitalización pisquiátria</option>
                                        <option value="15">Hospital de día</option>
                                        <option value="16">Ginecología</option>
                                        <option value="17">Médico quirúrgico adulto</option>
                                        <option value="18">Médico quirúrgico infantil</option>
                                        <option value="19">Urgencia</option>
                                        <option value="20">Equipos médicos</option>
                                    </select>
                                </div>
            </div>  <!-- FIN SELECT LUGAR DE OCURRENCIA -->



<!-- EVENTOS ADVERSOS -->

                           
                               

                           

                           
                              
              
                
                 
                     </div>  
                    

          </form>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary" onclick="actualizarUsuario()" >Aceptar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
            <input type="hidden" id="id_usuario_oculto_id_usuario">
            </div> 
           
        </div>
        
        
        
    </div>

  </div>

</div>