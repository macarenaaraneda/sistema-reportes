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

<div class="modal fade" id="myModalFormularioReportes">
    <div class="modal-dialog modal-lg" style="width: 600px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Prueba validar formularios</h4>
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form  class="needs-validation" novalidate id="formFormularioReportes" name="formFormularioReportes" method="post">
         
          <!-- Formulario -->
          <div>

     <div class="formulario">
    <div class="col-sm-12">
      <h2>Nombre paciente:</h2>
      <input type="text" class="form-control" name= "nombre" id="nombre" placeholder="Ingrese nombre de paciente" required>
      <div class="valid-feedback">
        Muy bien!
      </div>
    </div>  
    </div> 

    <div class="formulario">
    <div class="col-sm-12">
      <h2>Apellidos:</h2>
      <input type="text" class="form-control" name= "apellidos" id="apellidos" placeholder="Ingrese apellidos de paciente" required>
      <div class="valid-feedback">
        Muy bien!
      </div>
    </div>  
    </div> 

    <div class="formulario">
    <div class="col-sm-12">
      <h2>Apellidos:</h2>
      <input type="text" class="form-control" name= "rut" id="rut" placeholder="Ingrese rut del paciente" required>
      <div class="valid-feedback">
        Muy bien!
      </div>
    </div>  
    </div> 

    <div class="formulario"> <!--FECHA OCURRENCIA EVENTO -->
                <div class="form-group col-sm-12">
                    
                    <h2> Fecha de ocurrencia de evento:</h2>
                    <input type="date" name="fecha" id= "fecha" class="form-control">
                   
                </div>  
             
            </div> <!-- FIN FECHA OCURRENCIA EVENTO -->


 

    <div class="formulario">
    <div class="form-group col-sm-12">
    <select class="custom-select" name="unidad" id= "unidad"  required>
      <option value="">Seleccione una opción</option>
      
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
    <div class="invalid-feedback">Selección no válida</div>
  </div>
  </div>

              
              
    <div class="formulario">
    <div class="form-group col-sm-12">
    <select class="custom-select" name="evento" id= "evento"  required>
      <option value="">Seleccione una opción</option>
      
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
    <div class="invalid-feedback">Selección no válida</div>
  </div>
  </div>
                

 <div class="formulario"> <!--CHECKBOX ¿EXISTE DAÑO AL PACIENTE? -->
                                
                            <div class="form-group col-sm-12">
                            <div class="checkbox">
                                    
                            
                                 <input type="checkbox" name="dano_paciente" id="dano_paciente">
                                 <label for="dano_paciente">Causa daño al paciente</label> 
                                 
               
                                </div>
                                </div>
                            </div> <!-- FIN CHECKBOX ¿EXISTE DAÑO AL PACIENTE? -->

                            
                            <div class="formulario"> <!--SELECT GRAVEDAD DEL DAÑO -->
                           
                           <div class="form-group col-sm-12">
                               <h2>Gravedad del daño:</h2>
                               <select name="tipo_dano" id= "tipo_dano" class="form-control">
                                   

                                   <option value="Leve">Leve</option>
                                   <option value="Moderado">Moderado</option>
                                   <option value="Grave">Grave</option>
                                   
                               </select>
                           </div>
                       </div> <!-- FIN SELECT GRAVEDAD DEL DAÑO -->

                       <div class="formulario"> <!--CHECKBOX DE SE INFORMA A -->
               <div class="form-group col-sm-12">
               <div class="checkbox">
                               
                                    
                                 <h2>Se informa a:</h2> 
                                 <input type="checkbox" name="paciente" id="paciente">
                                 <label for="paciente">Paciente</label> 
                                 <input type="checkbox" name="familia" id="familia">
                                 <label for="familia">Familia</label> 
                                 <input type="checkbox" name="acompanante" id="acompanante">
                                 <label for="acompanante">Acompañante</label> 
                                 <input type="checkbox" name="no_informa" id="no_informa">
                                 <label for="no_informa">No se informa</label> 
                                
                            
                                
                                 
                                </div>
                                
                                </div>


                            </div> <!-- FIN CHECKBOX DE SE INFORMA A -->


                            <div class="formulario"> 
                        <div class="form-group col-sm-12">
                           <h2>Breve descripción del evento (Máx 250 caracteres):</h2>
                           <textarea cols="50" rows="5" name="comentario" maxlength="250"></textarea>
                                               

                        </div> 
           
                    </div> 


                 
                 </div>  
                    

            <div class="modal-footer">
            <button type="submit" class="btn btn-primary"  >Aceptar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
          
            </div> 


          </form>
           
           
        </div>
        
        
        
    </div>

  </div>

</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }else{
          ingresarInforme();
        }
        form.classList.add('was-validated');
       //  
      
      }, false);
    });
  }, false);
})();  



 </script>