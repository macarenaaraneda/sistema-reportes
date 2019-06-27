

  <style type="text/css">
  .error {
  color: red;
}
</style>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>
<div class="modal fade" id="myModalActualizarEstado">
    <div class="modal-dialog modal-lg" style="width: 600px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Actualizar Estado de Analisis  </h4>
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form id="formActualizarEstado" name="formActualizarEstado" method="post">



          <!-- Formulario -->
          <div>

       

  <div class="formulario">  <!--ESTADO -->
                           
                           
                           <h6 class="control-label col-sm-12">Estado de analisis:</h6>
                           <div class="form-group col-sm-12">
                               <select name="actualizar_estado" id="actualizar_estado" class="form-control">

                                   <option value="No aplica">No aplica </option>
                                   <option value="Pendiente">Pendiente </option>
                                   <option value="Ejecutado">Ejecutado </option>
                                  
                               </select>
                           </div>
       </div>  <!-- ESTADO -->

           
           
       
           



                           
                               

                           

                           
                              
              
                
                 
                     </div> 

                     <div class="modal-footer">
            <button type="submit" class="btn btn-primary" onclick="actualizarEstado()" >Actualizar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
            <input type="hidden" id="id_evento_oculto_id_estado">
            </div>   

          </form>
           
           
        </div>
        
        
        
    </div>

  </div>

</div>