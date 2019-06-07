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
<div class="modal fade" id="myModalActualizarEventos">
    <div class="modal-dialog modal-lg" style="width: 600px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Formulario de Eventos Adversos</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="limpiarsubirformulario()">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form id="formActualizarEventos" name="formActualizarEventos" method="post">



          <!-- Formulario -->
          <div>

            

           




                            <div class="formulario"> <!--CHECKBOX ¿EXISTE DAÑO AL PACIENTE? -->
                                
                            <div class="form-group col-sm-12">
                            <div class="checkbox">
                                    
                            
                                 <input type="checkbox" name="actualizar_dano_paciente" id="actualizar_dano_paciente">
                                 <label for="dano_paciente1">Causa daño al paciente</label> 
                                 
               
                                </div>
                                </div>
                            </div> <!-- FIN CHECKBOX ¿EXISTE DAÑO AL PACIENTE? -->

                               <div class="formulario"> <!--SELECT GRAVEDAD DEL DAÑO -->
                           
                                <div class="form-group col-sm-12">
                                    <h2>Gravedad del daño:</h2>
                                    <select name="actualizar_tipo_dano" id= "actualizar_tipo_dano"  class="form-control">
                                        

                                        <option value="Leve">Leve</option>
                                        <option value="Moderado">Moderado</option>
                                        <option value="Grave">Grave</option>
                                        
                                    </select>
                                </div>
                            </div> <!-- FIN SELECT GRAVEDAD DEL DAÑO -->

               

              
                
                 
                     </div>  
                    

          </form>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary" onclick="actualizarEventos()" >Aceptar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
            <input type="hidden" id="id_evento_oculto_id_evento">
            </div> 
           
        </div>
        
        
        
    </div>

  </div>

</div>