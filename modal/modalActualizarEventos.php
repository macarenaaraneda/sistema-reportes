<style type="text/css">
  .error {
  color: red;
}
</style>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>
<div class="modal fade" id="myModalActualizarEventos">
    <div class="modal-dialog modal-lg" style="width: 600px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Actualizar tipo evento</h4>
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form id="formActualizarEventos" name="formActualizarEventos" method="post">



          <!-- Formulario -->
          <div>

            

           
                         



                         
                <!--   <div class="formulario"> 
                           
                           <b class="control-label col-sm-12"> Causa daño al paciente:</b>
                           <div class="form-group col-sm-12">
            
                           <select name="actualizar_dano_paciente" id= "actualizar_dano_paciente"  class="form-control">
                                      

                                      <option value="Verdadero">Si</option>
                                      <option value="Falso">No</option>
                                   
                                      
                                  </select>
                              </div>
                          </div>  --> 

                       

                    <!--         <div class="formulario"> 
                           
                             <b class="control-label col-sm-12">Gravedad del daño:</b>
                             <div class="form-group col-sm-12">
              
                             <select name="actualizar_tipo_dano" id= "actualizar_tipo_dano"  class="form-control">
                                        

                                        <option value="Leve">Leve</option>
                                        <option value="Moderado">Moderado</option>
                                        <option value="Grave">Grave</option>
                                        
                                    </select>
                                </div>
                            </div> -->

                            <div class="formulario"> 
                           
                             <b class="control-label col-sm-12">Tipo evento:</b>
                             <div class="form-group col-sm-12">
              
                             <select name="actualizar_tipo_evento" id= "actualizar_tipo_evento"  class="form-control">
                                        

                                        <option value="Incidente">Incidente</option>
                                        <option value="Adverso">Adverso</option>
                                        <option value="Centinela">Centinela</option>
                                        
                                    </select>
                                </div>
                            </div>  

               

              
                
                 
                     </div>  
                    
                     <div class="modal-footer">
            <button type="submit" class="btn btn-primary" onclick="actualizarEventos()" >Aceptar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
            <input type="hidden" id="id_evento_oculto_id_evento">
            </div> 

          </form>
         
           
        </div>
        
        
        
    </div>

  </div>

</div>