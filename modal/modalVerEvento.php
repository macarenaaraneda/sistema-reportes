<style type="text/css">
  .error {
  color: red;
}
</style>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>
<div class="modal fade" id="myModalVerEvento">
    <div class="modal-dialog modal-lg" style="width: 600px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Detalles Eventos Adversos</h4>
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form id="formVerEvento" name="formVerEvento" method="post">



          <!-- Formulario -->
          <div>

          <div class="ver_formulario">
    <div class="form-group col-sm-12">
      <h5>Rut paciente:</h5>
      <input disabled type="text" class="form-control" name= "ver_rut_paciente" id="ver_rut_paciente">
      
    </div>  
    </div> 




            <div class="ver_formulario"> <!--FECHA OCURRENCIA EVENTO -->
                <div class="form-group col-sm-12">
                    
                    <h5> Fecha de ocurrencia de evento:</h5>
                    <input disabled type="date" name="ver_fecha" class="form-control" id="ver_fecha">
                </div>  
             
            </div> <!-- FIN FECHA OCURRENCIA EVENTO -->

            <div class="ver_formulario">  <!--SELECT LUGAR DE OCURRENCIA -->
                           

                                <div class="form-group col-sm-12">
                                    <h5>Unidad o lugar de ocurrencia:</h5>
                                    <select disabled name="ver_unidad" class="form-control" id="ver_unidad">

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

                            <div class="ver_formulario"> <!--SELECT TIPO DE EVENTO ADVERSO -->
                                <div class="form-group col-sm-12">

                                    <h5> Tipo de evento que se reporta</h5>
                                     <select disabled name="ver_evento" class="form-control" id="ver_evento">

                                    <optgroup label="Atención obstetrica">
                                        <option value="Muerte fetal tardía">Muerte fetal tardía</option>
                                        <option value="Muerte materna">Muerte materna</option>
                                        <option value="Asfixia neonatal">Asfixia neonatal</option>
                                        <option value="Lesion del RN por maniobra de parto"> Lesión del RN por maniobra de parto</option>
                                        <option value="Metrorragia postparto"> Metrorragia postparto</option>
                                    </optgroup>

                                    <optgroup label="Muerte">
                                        <option value="Muerte inesperada">Muerte inesperada</option>
                                    </optgroup>

                                    <optgroup label="Caídas">
                                        <option value="caída de paciente"> Caída de paciente </option>
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
                                        <option value="Cirugía a paciente equivocado">Cirugía a paciente equivocado</option>
                                        <option value="Cirugía en sitio equivocado"> Cirugía en sitio equivocado</option>
                                        <option value="Paro cardiorespiratorio"> Paro cardiorespiratorio</option>
                                        <option value="Extirpación no programada de órgano"> Extirpación no programada de órgano</option>
                                        <option value="Extravía de biopsias"> Extravío de biopsas</option>
                                        <option value="Perforación durante endoscopía"> Perforación durante endoscopía</option>
                                        <option value="Suspensión de cirugías"> Suspensión de cirugías</option>
                                        <option value="Reoperaciones no programadas"> Reoperaciones no programadas</option>
                                        <option value="Cuerpo extraño">Cuerpo extraño</option>
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

                            <div class="ver_formulario"> <!--CHECKBOX ¿EXISTE DAÑO AL PACIENTE? -->
                                
                            <div class="form-group col-sm-12">
                            <div class="checkbox">
                                    
                            
                                 <input disabled type="checkbox" name="ver_dano_paciente" id="ver_dano_paciente">
                                 <label for="dano_paciente">Causa daño al paciente</label> 
                                 
               
                                </div>
                                </div>
                            </div> <!-- FIN CHECKBOX ¿EXISTE DAÑO AL PACIENTE? -->

                               <div class="ver_formulario"> <!--SELECT GRAVEDAD DEL DAÑO -->
                           
                                <div class="form-group col-sm-12">
                                    <h5>Gravedad del daño:</h5>
                                    <select disabled name="ver_tipo_dano" class="form-control" id="ver_tipo_dano">
                                        

                                        <option value="Leve">Leve</option>
                                        <option value="Moderado">Moderado</option>
                                        <option value="Grave">Grave</option>
                                        
                                    </select>
                                </div>
                            </div> <!-- FIN SELECT GRAVEDAD DEL DAÑO -->

               <div class="ver_formulario"> <!--CHECKBOX DE SE INFORMA A -->
               <div class="form-group col-sm-12">
               <div class="checkbox">
                               
                                    
                                 <h5>Se informa a:</h5> 
                                 <input disabled type="checkbox" name="ver_paciente" id="ver_paciente">
                                 <label for="ver_paciente">Paciente</label> 
                                 <input disabled type="checkbox" name="ver_familia" id="ver_familia">
                                 <label for="ver_familia">Familia</label> 
                                 <input disabled type="checkbox" name="ver_acompanante" id="ver_acompanante">
                                 <label for="ver_acompanante">Acompañante</label> 
                                 <input disabled type="checkbox" name="ver_no_informa" id="ver_no_informa">
                                 <label for="ver_no_informa">No se informa</label> 
                                
                            
                                
                                 
                                </div>
                                
                                </div>


                            </div> <!-- FIN CHECKBOX DE SE INFORMA A -->

                  <div class="ver_formulario"> 
                        <div class="form-group col-sm-12">
                           <h5>Breve descripción del evento:</h5>
                           <textarea cols="50" rows="5" disabled name="ver_comentario" id="ver_comentario" maxlength="250"  ></textarea>
                                               

                        </div> 
           
                    </div> 
                
                    
                     </div>  
                    

          </form>
            <div class="modal-footer">
            
            <button type="button" class="btn btn-danger" data-dismiss="modal" >Aceptar</button>
            
            <input type="hidden" id="id_evento_oculto_id_evento">
            </div> 
           
        </div>
        
        
        
    </div>

  </div>

</div>

