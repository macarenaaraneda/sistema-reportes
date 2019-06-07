<?php 
// include Database connection file

include ("../config.php");

 
//para actualizar el evento antes debemos obtener los datos de el
if(isset($_POST['id_evento']) && isset($_POST['id_evento']) != "") 
{
    // obtenemos id del evento
    $evento_id = $_POST['id_evento'];
  
    //select para modificar muestra pero trayendo informacion del paciente, muestras y trazabilidad
    $query = "                SELECT *
                     FROM eventos
                     
            
                     WHERE id_evento = $evento_id ;";           

    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data, respuesta que entrega
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}
?>