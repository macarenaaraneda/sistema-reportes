<?php 
if(isset($_POST['id']) && isset($_POST['id']) != ""){
    
    include ("../config.php");

    $usuario_id = $_POST['id'];

    //para eliminar usuarios de base de datos

    mysqli_autocommit($link, false);

            $query = "DELETE FROM usuarios WHERE id_usuario = '$usuario_id'";

            mysqli_query($link, $query);

            mysqli_commit($link);

    if(!$result = mysqli_query($link, $query)){
        mysqli_rollback($con);
        exit(mysqli_error($link));
    }
    echo("El usuario se ha eliminado correctamente.");
}
 ?>