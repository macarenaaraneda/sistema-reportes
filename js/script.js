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