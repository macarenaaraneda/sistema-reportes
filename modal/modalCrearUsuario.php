

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
<div class="modal fade" id="myModalCrearUsuario">
    <div class="modal-dialog modal-lg" style="width: 600px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ingresar nuevo usuario</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="limpiarsubirformulario()">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form id="formCrearUsuario" name="formCrearUsuario" method="post">



          <!-- Formulario -->
          <div>

          <div class="formulario">
    <label class="control-label col-sm-2" for="nombre">Nombre:</label>
    <div class="col-sm-12">
      <input name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre">
    </div>
  </div>
  <div class="formulario">
    <label class="control-label col-sm-2" for="apellido">Apellido:</label>
    <div class="col-sm-12">
      <input name="apellido" class="form-control" id="apellido" placeholder="Ingrese apellido">
    </div>
  </div>
  <div class="formulario">
    <label class="control-label col-sm-2" for="rut">Rut:</label>
    <div class="col-sm-12">
      <input name="rut" class="form-control" id="rut" placeholder="Ingrese rut">
    </div>
  </div>

  <div class="formulario">
    <label class="control-label col-sm-2" for="password">Contraseña:</label>
    <div class="col-sm-12">
      <input type="password" name= "password" class="form-control" id="password" placeholder="Ingrese rut">
    </div>
  </div>

  <div class="formulario">  <!--TIPO USUARIO -->
                           
                           
                           <label class="control-label col-sm-2">Usuario:</label>
                           <div class="form-group col-sm-12">
                               <select name="tipo_usuario" class="form-control">

                                   <option value="Jefatura">Jefatura </option>
                                   <option value="Administrador">Administrador </option>
                                  
                               </select>
                           </div>
       </div>  <!-- FIN TIPO USUARIO -->

           
           
       
            <div class="formulario">  <!--Unidad -->
                           
                               
                                <label class="control-label col-sm-2">Unidad:</label>
                                <div class="form-group col-sm-12">
                                    <select name="unidad" class="form-control">

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
            <button type="submit" class="btn btn-primary" onclick="ingresarInformeUsuario()" >Aceptar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
            
            </div> 
           
        </div>
        
        
        
    </div>

  </div>

</div>