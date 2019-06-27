<?php

include ("../config.php");
 
// check request
if(isset($_POST))
{
    //tomamos los datos que vienen de los script y se asignan a una nueva variable
    $id_usuario = mysqli_real_escape_string($link, $_POST["id_usuario"]); 
   


    $form_pass =mysqli_real_escape_string($link, $_POST["password"]); //password
    $hash = password_hash($form_pass, PASSWORD_BCRYPT);
    $tipo_usuario = mysqli_real_escape_string($link, $_POST["tipo_usuario"]); 
    $areas_id_area = mysqli_real_escape_string($link, $_POST["areas_id_area"]); 
    
  
    
    
    $query = "UPDATE usuarios
            SET  password ='$hash' , tipo_usuario = '$tipo_usuario' , areas_id_area = '$areas_id_area' 
            WHERE id_usuario = '$id_usuario' 
           

            ";



    if (!$result = mysqli_query($link, $query)) {
        exit(mysqli_error($link));
    }
    echo "Usuario actualizado correctamente.";

}