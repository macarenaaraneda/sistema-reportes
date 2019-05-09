<style type="text/css">
  .error {
  color: red;
}
</style>
<div class="modal fade" id="myModalFormularioAnalisis">
    <div class="modal-dialog modal-lg" style="width: 600px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Formulario de Análisis de Eventos Adversos</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="limpiarsubirformulario()">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form id="formFormularioAnalisis" name="formFormularioAnalisis" method="post">



          <!-- Formulario -->
          <div>

           




<!-- EVENTOS ADVERSOS -->



                            

             
                    <div class="row"> <!-- Cuadro de texto -->
                        <div class="form-group col-sm-12">
                           <label>Causas detectadas del evento:</label>

                              <textarea name="comentario" rows="5" cols="50"> </textarea>

                        </div>
                        

                    </div>

                    <form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Causa raiz detectada">
    </div>
    
  </div>
</form>




           
          </div>  <!-- FIN -->

          <div class="modal-footer">
          <button type="submit" class="btn btn-primary" ">Aceptar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
          
          </div>          
          </form>
        </div>
        
        
        
    </div>

  </div>

</div>

