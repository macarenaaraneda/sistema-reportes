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
        //alertify.success('evento ingresado correctamente.');
      },
    });
  
  }
  
  
  
  
  function ingresarInformeUsuario(){
  
    var datastring = $("#formCrearUsuario").serialize();
      $.ajax({
        type: "post",
        url: "../ajax/crearUsuarios.php",//crear nuevo archivo php para recibir usuarios
        data: datastring,
        success: function(datastring){//
          $("#myModalCrearUsuario").modal("hide");
          document.getElementById("formCrearUsuario").reset();
          
          //notificación
          //alertify.success('Usuario ingresado correctamente.');
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




  function actualizarTablaAnalisis(){
    $.get("../ajax/actualizarTablaAnalisis.php", {}, function(data, status){
      $(".display").html(data);//leer datos ya lo tenemos con php
     var table = $('#tablaInformes').DataTable( {
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

  function actualizarTablaUsuarios(){
    $.get("../ajax/actualizarTablaUsuarios.php", {}, function(data, status){
      $(".display").html(data);//leer datos ya lo tenemos con php
     var table = $('#tablaUsuarios').DataTable( {
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


  
  function obtenerDetallesEventos(id_evento){
    //agregamos el id del usuario para ocuparlo luego
    $("#id_evento_oculto_id_evento").val(id_evento);
  
    $.post("../ajax/leerDetallesEventos.php",{
      id_evento: id_evento,
    
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
      $("#ver_paciente").val(evento.notificacion_paciente);
      $("#ver_familia").val(evento.notificacion_familiares);
      $("#ver_acompanante").val(evento.notificacion_acompanantes);
      $("#ver_no_informa").val(evento.notificacion_no_informa);
      $("#ver_comentario").val(evento.comentario);
     var check_dano =  document.getElementById("ver_dano_paciente");
     var check_paciente =  document.getElementById("ver_paciente");
     var check_familia =  document.getElementById("ver_familia");
     var check_acompanante =  document.getElementById("ver_acompanante");
     var check_no_informa =  document.getElementById("ver_no_informa");
     if(evento.dano == 'Verdadero'){
      document.getElementById("ver_dano_paciente").checked=true;
     }
     if(evento.dano =='Falso'){
      document.getElementById("ver_dano_paciente").checked=false;
     }
      /* */
     var check_paciente =  document.getElementById("ver_paciente");
     if(evento.notificacion_paciente == 'Verdadero'){
      document.getElementById("ver_paciente").checked=true;
     
     }
     if(evento.notificacion_paciente =='Falso'){
      document.getElementById("ver_paciente").checked=false;
     }
    /* */
     var check_familia =  document.getElementById("ver_familia");
     if(evento.notificacion_familiares == 'Verdadero'){
      document.getElementById("ver_familia").checked=true;
     
     }
     if(evento.notificacion_familiares =='Falso'){
      document.getElementById("ver_familia").checked=false;
     }
       /* */
     var check_acompanante =  document.getElementById("ver_acompanante");
     if(evento.notificacion_acompanantes == 'Verdadero'){
      document.getElementById("ver_acompanante").checked=true;
   
     }
     if(evento.notificacion_acompanantes =='Falso'){
      document.getElementById("ver_acompanante").checked=false;
     }
  
      /* */
     var check_no_informa =  document.getElementById("ver_no_informa");
     if(evento.notificacion_no_informa == 'Verdadero'){
      document.getElementById("ver_no_informa").checked=true;
     
     }
     if(evento.notificacion_no_informa =='Falso'){
      document.getElementById("ver_no_informa").checked=false;
     }
  
     
   
    }); 
    //mostramos modal
    //$("#myModalVerEvento").modal("show");
    //alert(fecha);
  }


  function obtenerDetallesEventosAnalisis(id_evento){
    //agregamos el id del usuario para ocuparlo luego
    $("#id_evento_oculto_id_evento").val(id_evento);
  
    $.post("../ajax/leerAnalisis.php",{
      id_evento: id_evento,
    
    },
   function (data, status){
      //parse datos json
      var evento = JSON.parse(data);
      //recuperamos datos del usuario y ponemos en modal
      $("#a_nombre").val(evento.nombre);
      $("#a_apellidos").val(evento.apellidos);
      $("#a_rut").val(evento.rut);
      $("#a_fecha").val(evento.fecha_creacion);
      $("#a_unidad").val(evento.areas_id_area);
      $("#a_evento").val(evento.nombre_evento);
      $("#a_dano_paciente").val(evento.dano);
      $("#a_tipo_dano").val(evento.gravedad);
      $("#a_paciente").val(evento.notificacion_paciente);
      $("#a_familia").val(evento.notificacion_familiares);
      $("#a_acompanante").val(evento.notificacion_acompanantes);
      $("#a_no_informa").val(evento.notificacion_no_informa);
      $("#a_comentario").val(evento.comentario);
     var check_dano =  document.getElementById("a_dano_paciente");
     var check_paciente =  document.getElementById("a_paciente");
     var check_familia =  document.getElementById("a_familia");
     var check_acompanante =  document.getElementById("a_acompanante");
     var check_no_informa =  document.getElementById("a_no_informa");
     if(evento.dano == 'Verdadero'){
      document.getElementById("a_dano_paciente").checked=true;
     }
     if(evento.dano =='Falso'){
      document.getElementById("a_dano_paciente").checked=false;
     }
      /* */
     var check_paciente =  document.getElementById("a_paciente");
     if(evento.notificacion_paciente == 'Verdadero'){
      document.getElementById("a_paciente").checked=true;
     
     }
     if(evento.notificacion_paciente =='Falso'){
      document.getElementById("a_paciente").checked=false;
     }
    /* */
     var check_familia =  document.getElementById("a_familia");
     if(evento.notificacion_familiares == 'Verdadero'){
      document.getElementById("a_familia").checked=true;
     
     }
     if(evento.notificacion_familiares =='Falso'){
      document.getElementById("a_familia").checked=false;
     }
       /* */
     var check_acompanante =  document.getElementById("a_acompanante");
     if(evento.notificacion_acompanantes == 'Verdadero'){
      document.getElementById("a_acompanante").checked=true;
   
     }
     if(evento.notificacion_acompanantes =='Falso'){
      document.getElementById("a_acompanante").checked=false;
     }
  
      /* */
     var check_no_informa =  document.getElementById("a_no_informa");
     if(evento.notificacion_no_informa == 'Verdadero'){
      document.getElementById("a_no_informa").checked=true;
     
     }
     if(evento.notificacion_no_informa =='Falso'){
      document.getElementById("a_no_informa").checked=false;
     }
  
     
   
    }); 
    //mostramos modal
    //$("#myModalVerEvento").modal("show");
    //alert(fecha);
  }
  
  //funcion para update pacientes
  function actualizarEventos() {
      // get values
     // var dano = $("#actualizar_dano_paciente").val();
      
     var tipo = $("#actualizar_tipo_evento").val();
     //console.log(dano);
      // get hidden field value
      var id_evento = $("#id_evento_oculto_id_evento").val();
     
   
      // Update the details by requesting to the server using ajax
      $.post("../ajax/actualizarTipoEventos.php", {
              id_evento: id_evento,
             // dano:dano,
             // gravedad:gravedad,
             tipo:tipo,
              
             
             
          function (data, status) {
              // hide modal popup
              $("#myModalActualizarEventos").modal("hide");
              // reload Users by using readRecords();
              document.getElementById("display").innerHTML="";
              actualizarTablaEventos();
              alertify.success('Evento actualizado correctamente.');
          }
    });
  }
  
  
  
  
  
  function obtenerDetallesEventosParaActualizar(id_evento){
    //agregamos el id del usuario para ocuparlo luego
    $("#id_evento_oculto_id_evento").val(id_evento);
  
    $.post("../ajax/leerDetallesEventos.php",{
      id_evento: id_evento,
    
    },
   function (data, status){
      //parse datos json
      var evento = JSON.parse(data);
      //recuperamos datos del usuario y ponemos en modal
      
      
     // $("#actualizar_dano_paciente").val(evento.dano);
     
   
   /* if(evento.dano =='Verdadero'){
      document.getElementById("actualizar_dano_paciente").checked=true;
     }
    if(evento.dano =='Falso'){
      document.getElementById("actualizar_dano_paciente").checked=false;
     }  */
  
     $("#actualizar_tipo_evento").val(evento.tipo);
  
      
    }); 
    //mostramos modal
    //$("#myModalVerEvento").modal("show");
    //alert(fecha);
  }
  
  function obtenerEstadosParaActualizar(id_evento){
    //agregamos el id del usuario para ocuparlo luego
    $("#id_evento_oculto_id_evento").val(id_evento);
  
    $.post("../ajax/leerDetallesEventos.php",{
      id_evento: id_evento,
    
    },
   function (data, status){
      //parse datos json
      var evento = JSON.parse(data);
      //se recuperan datos del estado y se coloca en modalActualizarEstado
      
      
      $("#actualizar_estado").val(evento.estado);
     
     
  
    
  
      
    }); 
    //mostramos modal
    //$("#myModalVerEvento").modal("show");
    //alert(fecha);
  }
   
  function actualizarEstado() {
    // get values
    var estado = $("#actualizar_estado").val();
   
    
    // get hidden field value
    var id_evento = $("#id_evento_oculto_id_evento").val();
   
  
    // Update the details by requesting to the server using ajax
    $.post("../ajax/actualizarEstado.php", {
            id_evento: id_evento,
            estado: estado,
           
            
           
           
        function (data, status) {
            // hide modal popup
            $("#myModalActualizarEstado").modal("hide");
            // reload Users by using readRecords();
            document.getElementById("display").innerHTML="";
            actualizarTablaEventos();
          
            alertify.success('Estado de analisis actualizado correctamente.');
        }
  });
  }
  
  function DatosOcultosInformeAnalisis(id_evento){
    //
    $("#id_evento_oculto_id_evento").val(id_evento);
   
    
  
    $.post("../ajax/leerDetallesEventos.php",{
      id_evento: id_evento,
    
    },
   function (data, status){
      //parse datos json
      var evento = JSON.parse(data);
      //recuperamos datos del evento
      
     //$("#eventos_areas_id_area").val(evento.areas_id_area);  
     $("#fecha_analisis").val(evento.fecha_creacion);  
     $("#evento_analisis").val(evento.nombre_evento);   
     $("#eventos_areas_id_area").val(evento.areas_id_area);
    
  
      
    }); 
    //mostramos modal
    //$("#myModalVerEvento").modal("show");
    //alert(fecha);
  }
  
  function ingresarAnalisis(){
  
    var id_evento = $("#id_evento_oculto_id_evento").val();
    var id_areas_id_area = $("#eventos_areas_id_area").val();
  
    var causas = $("#causas").val();
    var propuestas = $("#propuestas").val();
    
    $.post("../ajax/crearAnalisis.php", {
      id_evento: id_evento,
      id_areas_id_area: id_areas_id_area,
      causas:causas,
      propuestas:propuestas,
      
    }, function(data, status){
      $("#myModalFormularioAnalisis").modal("hide");
          document.getElementById("formFormularioAnalisis").reset();
          
          //notificación
        alertify.success('Analisis ingresado correctamente.');
  } );
  
  
    
    
    }
  
    function obtenerInformes(id_evento){
      
    
      $("#id_evento_oculto_id_evento").val(id_evento); 
      
      $.post("../ajax/leerAnalisis.php",{
     
      id_evento: id_evento
      
      },
      function (data, status){
      //parse datos json
      var evento = JSON.parse(data);
      //recuperamos datos del usuario y ponemos en modal
     
      $("#ver_fecha_analisis").val(evento.fecha_creacion);
      $("#ver_unidad_analisis").val(evento.areas_id_area);
      $("#ver_evento_analisis").val(evento.nombre_evento);
      $("#ver_causas").val(evento.causas);
      $("#ver_propuestas").val(evento.propuestas);
      
     
      
      }); 
     
    
      }

      function eliminarUsuario(id){
        var conf = confirm("¿Está seguro de eliminar usuario?");
        if(conf == true){
          $.post("../ajax/eliminarUsuarios.php",{
              id: id
            },
            function (data,status){
              actualizarTablaUsuarios();
              alertify.success('Usuario eliminado correctamente.');
            }
          );  
        }
      }

      
      function obtenerUsuariosParaActualizar(id_usuario){
        //agregamos el id del usuario para ocuparlo luego
        $("#id_usuario_oculto_id_usuario").val(id_usuario);
      
        $.post("../ajax/leerUsuarios.php",{
          id_usuario: id_usuario,
        
        },
       function (data, status){
          //parse datos json
          var usuarios = JSON.parse(data);
          //se recuperan datos del estado y se coloca en modalActualizarEstado
          
          
         // $("#a_password").val(usuarios.password);
          $("#a_tipo_usuario").val(usuarios.tipo_usuario);
          $("#a_unidad").val(usuarios.areas_id_area);
         
         
      
        
      
          
        }); 
        //mostramos modal
        //$("#myModalVerEvento").modal("show");
        //alert(fecha);
      }

      function actualizarUsuario() {
        // get values
       // var password = $("#a_password").val();
        var tipo_usuario = $("#a_tipo_usuario").val();
        var areas_id_area = $("#a_unidad").val();
       
      // get hidden field value
        var id_usuario = $("#id_usuario_oculto_id_usuario").val();
       
      
        // Update the details by requesting to the server using ajax
        $.post("../ajax/actualizarUsuario.php", {
                id_usuario: id_usuario,
               // password: password,
                tipo_usuario: tipo_usuario,
                areas_id_area: areas_id_area,
                 
               
            function (data, status) {
                // hide modal popup
                $("#myModalActualizarUsuario").modal("hide");
                // reload Users by using readRecords();
                document.getElementById("display").innerHTML="";
                actualizarTablaUsuarios();
              
                alertify.success('Usuario actualizado correctamente.');
            }
      });
      }