function ingresarInforme(){

var datastring = $("#formFormularioReportes").serialize();
  $.ajax({
    type: "post",
    url: "ajax/crearEventos.php",//crear nuevo archivo php para recibir eventos
    data: datastring,
    success: function(datastring){//
      $("#myModalFormularioReportes").modal("hide");
      document.getElementById("formFormularioReportes").reset();
      
      //notificación
      //alertify.success('Paciente ingresado correctamente.');
    },
  });

}

function actualizarTablaEventos(){
  $.get("../ajax/actualizarTablaEventos.php", {}, function(data, status){
    $(".display").html(data);//leer datos ya lo tenemos con php
   var table = $('#tablaEventos').DataTable( {
         ordering: false,
        stateSave: true,
        "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons:[
              'excel',
              {
                extend: 'pdfHtml5',
                  orientation: 'landscape',
                  pageSize: 'LEGAL',

              }
            ]
    });   
  });
}

function obtenerDetallesEventos(id){
  //agregamos el id del usuario para ocuparlo luego
  /*$("#id_paciente_oculto_id_paciente").val(id);

  $.post("../ajax/leerDetallesEventos.php",{
    id: id,
  
  },
  function (data, status){
    //parse datos json
    var evento = JSON.parse(data);
    //recuperamos datos del usuario y ponemos en modal
    $("#ver_fecha").val(evento.fecha_creacion);
    $("#ver_unidad").val(evento.areas_id_area);
    $("#ver_evento").val(evento.nombre_evento);
    $("#ver_dano_paciente").val(evento.dano);
    $("#ver_tipo_dano").val(evento.gravedad);
    $("#ver_paciente").val(evento.notificaicon_paciente);
    $("#ver_familia").val(evento.notificacion_familiares);
    $("#ver_acompanante").val(evento.notificacion_acompanantes);
    $("#ver_no_informa").val(evento.notificacion_no_informa);
    $("#ver_comentario").val(evento.comentario);


  }); */
  //mostramos modal
  $("#myModalVerEvento").modal("show");
  alert("prueba");
}

//funcion para update pacientes
function actualizarPaciente() {
    // get values
    var nombres = $("#actualizar_nombres").val();
    var apellidos = $("#actualizar_apellidos").val();
    var rut = $("#actualizar_rut").val();
    var sala_cama = $("#actualizar_sala_cama").val();
    var dosis = $("#actualizar_dosis").val();
    var antibiotico = $("#actualizar_antibiotico").val();
 
    // get hidden field value
    var id = $("#id_paciente_oculto_id_paciente").val();
    var id_tratamiento = $("#id_paciente_oculto_id_tratamiento").val();
    var id_antibiotico = $("#id_paciente_oculto_id_antibiotico").val();
 
    // Update the details by requesting to the server using ajax
    $.post("../ajax/actualizarDetallesPaciente.php", {
            id: id,
            id_tratamiento: id_tratamiento,
            id_antibiotico: id_antibiotico,
            nombres: nombres,
            apellidos: apellidos,
            rut: rut,
            sala_cama: sala_cama,
            dosis: dosis,
            nombre: antibiotico
        },
        function (data, status) {
            // hide modal popup
            $("#myModalActualizarPaciente").modal("hide");
            // reload Users by using readRecords();
            actualizarTablaActivos();
            alertify.success('Datos del paciente actualizados correctamente.');
        }
    );
}
function obtenerDetallesEventos(){
  

 
  
  }

 
 // FUNCIÓN QUE CUENTA CARACTERES del cuadro de texto
function cuenta(){ 
      	document.forms[0].caracteres.value=document.forms[0].texto.value.length 
} 


  


