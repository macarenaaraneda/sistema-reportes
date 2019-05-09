<style type="text/css">
  .error {
  color: red;
}
</style>
<div class="modal fade" id="myModalFormularioReportes">
    <div class="modal-dialog modal-lg" style="width: 600px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Formulario de Eventos Adversos</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="limpiarsubirformulario()">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form id="formFormularioReportes" name="formFormularioReportes" method="post">



          <!-- Formulario -->
          <div>

            <div class="row"> <!--FECHA OCURRENCIA EVENTO -->
                <div class="form-group col-sm-12">
                    
                    <label> Fecha de ocurrencia de evento</label>
                    <input type="date" name="fecha" class="form-control">
                </div>  
             
            </div> <!-- FIN FECHA OCURRENCIA EVENTO -->

            <div class="row">  <!--SELECT LUGAR DE OCURRENCIA -->
                           
                                <div class="form-group col-sm-12">
                                    <label>Unidad o lugar de ocurrencia</label>
                                    <select name="unidad" class="form-control">
                                        
                                        <option selected>
                                            Elegir unidad donde ocurrió el evento
                                        </option>
                                        <option value="1">Salud mental</option>
                                        <option value="2">Cuidados paleativos</option>
                                        <option value="3">Especialidades odontológicas</option>
                                        <option value="4">Prais</option>
                                        <option value="5">Medicina fisica</option>
                                        <option value="6">Farmacia</option>
                                        <option value="7">Imageonología</option>
                                        <option value="8">Esterilización</option>
                                        <option value="9">Laboratorio</option>
                                        <option value="10">Nutrición</option>
                                        <option value="11">Endoscopia</option>
                                        <option value="12">Especialidades medico quirúrgico</option>
                                        <option value="13">Pabellon</option>
                                        <option value="14">Hospitalización pisquiatria</option>
                                        <option value="15">Hospital de día</option>
                                        <option value="16">Ginecología</option>
                                        <option value="17">Médico quirurgico adulto</option>
                                        <option value="18">Médico quirurgico infantil</option>
                                        <option value="19">Urgencia</option>
                                        <option value="20">Equipos médicos</option>
                                    </select>
                                </div>
            </div>  <!-- FIN SELECT LUGAR DE OCURRENCIA -->



<!-- EVENTOS ADVERSOS -->

                            <div class="row"> <!--SELECT TIPO DE EVENTO ADVERSO -->
                                <div class="form-group col-sm-12">

                                    <label> Tipo de evento que se reporta
                                    </label>
                                     <select name="evento" class="form-control">
                                    <option selected>
                                        Elegir evento
                                    </option>

                                    <optgroup label="Atención obstetrica">
                                        <option value="Muerte fetal tardía">Muerte fetal tardía</option>
                                        <option value="Muerte materna">Muerte materna</option>
                                        <option value="Asfixia neonatal">Asfixia neonatal</option>
                                        <option value="Lesion del RN por maniobra de parto"> lesión del RN por maniobra de parto</option>
                                        <option value="Metrorragia postparto"> Metrorragia postparto</option>
                                    </optgroup>

                                    <optgroup label="Muerte">
                                        <option value="Muerte inesperada">Muerte inesperada</option>
                                    </optgroup>

                                    <optgroup label="Caídas">
                                        <option value="caída de paciente"> CaÍda de paciente </option>
                                        <option value="caída con causa de muerte"> Caída con causa de muerte</option>
                                        <option value="caída con fractura"> Caída con fractura</option>
                                    </optgroup>

                                    <optgroup label="medicación">
                                        <option value="Error de medicación"> Error de medicación </option>
                                        <option value="Error de medicación con causa de muerte">Error de medicación con causa de muerte</option>
                                    </optgroup>

                                    <optgroup label="Medicina Transfusional">
                                        <option value="Transfusión paciente equivocado"> Transfusión paciente equivocado</option>
                                        <option value="Transfusión de componentes sanguineos sin tamizajes">Transfusión de componentes sanguineos sin tamizajes</option>
                                        <option value="Infección por agente transmisible">Infección por agente transmisible</option>
                                        <option value="Reacción hemolítica aguda por incompatibilidad de grupo sanguineo">Reacción hemolítica aguda por incompatibilidad de grupo sanguineo</option>
                                        <option value="Reacción por carga de volumen">Reacción por carga de volumen</option>
                                    </optgroup>

                                    <optgroup label="Cirugia">
                                        <option value="Cirugía a paciente equivocado">Cirugia a paciente equivocado</option>
                                        <option value="Cirugía en sitio equivocado"> Cirugía en sitio equivocado</option>
                                        <option value="Paro cardiorespiratorio"> Paro cardiorespiratorio</option>
                                        <option value="Extirpación no programada de órgano"> Extirpación no programada de órgano</option>
                                        <option value="Extravía de biopsias"> Extravío de biopsas</option>
                                        <option value="Perforación durante endoscopía"> Perforación durante endoscopía</option>
                                        <option value="Suspensión de cirugías"> Suspensión de cirugías</option>
                                        <option value="Reoperaciones no programadas"> Reoperaciones No programadas</option>
                                        <option value="Cuerpo extraño">cuerpo Extraño</option>
                                    </optgroup>

                                    <optgroup label="Comportamiento del paciente">
                                        <option value="Agresiones entre usuarios"> Agresiones entre usuarios</option>
                                        <option value="Autoagresiones"> Autoagresiones</option>
                                        <option value="Agresiones de pacientes con daño fisico severo">Agresiones de pacientes con daño fisico severo</option>
                                        <option value="Autoagresiones con causa de muerte o daño severo">Autoagresiones con causa de muerte o daño severo</option>
                                        <option value="Fuga de paciente"> Fuga de paciente </option>
                                    </optgroup>

                                    <optgroup label="IAAS">
                                        <option value="Infecciones asociadas a la atención de salud"> Infecciones asociadas a la atención de salud</option>
                                        <option value="Brote epidémico">Brote epidémico</option>
                                        <option value="Distribución de material no ésteril">Distribución de material no ésteril</option>
                                    </optgroup>

                                    <optgroup label="Nutrición">
                                        <option value="Error en entrega de régimen"> Error en entrega de régimen</option>
                                        <option value="Énfermedad de transmisión alimentaria"> Enfermedad de transmisión alimentaria</option>
                                    </optgroup>

                                    <optgroup label="Laboratorio">
                                        <option value="biopsias">Extravío de biopsias</option>
                                    </optgroup>

                                    <optgroup label="Atención al paciente">
                                        <option value="Ulceras por presión grado 4">Ulceras por presión grado 4</option>
                                        <option value="Ulcera por presión"> Ulcera por presión </option>
                                        <option value="Quemaduras"> Quemaduras </option>
                                        <option value="Informe de resultado por examen erroneo"> Informe de resultado por examen erroneo</option>
                                        <option value="Enfermedad tromboembolica">Enfermedad tromboembolica</option>
                                        <option value="Error de registro en ficha clínica"> Error de registro en Ficha Clínica</option>
                                        <option value="Entrega de material estéril con error de proceso"> Entrega de material estéril con error de proceso</option>
                                    </optgroup>

                                </select>

                                </div>

                               

                            </div>  <!-- FIN SELECT TIPO DE EVENTO ADVERSO -->

                            <div class="row"> <!--CHECKBOX ¿EXISTE DAÑO AL PACIENTE? -->
                                <div class="form-group col-sm-12">
                                    
                                 <label>Causa daño al paciente:</label>
                                 <input type="checkbox" name="dano_paciente">
               
                                </div>
                            </div> <!-- FIN CHECKBOX ¿EXISTE DAÑO AL PACIENTE? -->

                               <div class="row"> <!--SELECT GRAVEDAD DEL DAÑO -->
                           
                                <div class="form-group col-sm-12">
                                    <label>Gravedad del daño:</label>
                                    <select name="tipo_dano" class="form-control">
                                        
                                        <option selected>
                                           Elegir gravedad de daño
                                        </option>

                                        <option value="Leve">Leve</option>
                                        <option value="Moderado">Moderado</option>
                                        <option value="Grave">Grave</option>
                                        
                                    </select>
                                </div>
                            </div> <!-- FIN SELECT GRAVEDAD DEL DAÑO -->

               <div class="row"> <!--CHECKBOX DE SE INFORMA A -->
                                <div class="form-group col-sm-12">
                                    
                                 <label> Se informa a:</label>
                                 Paciente <input type="checkbox" name="paciente">
                                 Familia <input type="checkbox" name="familia">
                                 Acompañante <input type="checkbox" name="acompanante">
                                  No se informa <input type="checkbox" name="no_informa">
                                
                                 
                                </div>
                                



                            </div> <!-- FIN CHECKBOX DE SE INFORMA A -->

                    <div class="row"> <!-- Cuadro de texto -->
                        <div class="form-group col-sm-12">
                           <label>Breve descripción del evento:</label>

                              <textarea name="comentario" rows="5" cols="50"> </textarea>

                        </div>
                        

                    </div>




           
          </div>  <!-- FIN -->

                   
          </form>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary" onclick="ingresarInforme()" >Aceptar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
            
            </div> 
        </div>
        
        
        
    </div>

  </div>

</div>

