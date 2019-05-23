function obtenerDatosPacientes(id,id_tratamiento,id_antibiotico){
//agregamos el id del usuario para ocuparlo luego
$("#id_paciente_oculto_id_paciente").val(id);
$("#id_paciente_oculto_id_tratamiento").val(id_tratamiento);
$("#id_paciente_oculto_id_antibiotico").val(id_antibiotico);

$.post("../ajax/leerDetallesPaciente.php",{
id: id,
id_tratamiento: id_tratamiento,
id_antibiotico: id_antibiotico
},
function (data, status){
//parse datos json
var paciente = JSON.parse(data);
//recuperamos datos del usuario y ponemos en modal
$("#actualizar_nombres").val(paciente.nombres);
$("#actualizar_apellidos").val(paciente.apellidos);
$("#actualizar_rut").val(paciente.rut);
$("#actualizar_sala_cama").val(paciente.sala_cama);
$("#actualizar_dosis").val(paciente.dosis);
$("#actualizar_antibiotico").val(paciente.nombre);

}); 
//mostramos modal
$("#myModalActualizarPaciente").modal("show");
}