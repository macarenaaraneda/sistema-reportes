<?php
// Include config file
require_once 'config.php';

//include 'C:\xampp\htdocs\sistemaReportes\modal\modalReporteFormularioEvento.php';  

// Define variables and initialize with empty values
$rut = $password = $tipo_usuario = $id_area_usuarios = $nombre = $apellido = $id_usuario = "";
$rut_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

   // Check if username is empty
   if(empty(trim($_POST["rut"]))){
       $rut_err = 'Por favor ingresa el rut.';
   } else{
       $rut = trim($_POST["rut"]);
   }
   
   // Check if password is empty
   if(empty(trim($_POST['password']))){
       $password_err = 'Ingresa tu contraseña';
   } else{
       $password = trim($_POST['password']);
   }
   
   // Validate credentials
   if(empty($rut_err) && empty($password_err)){
       // Prepare a select statement
       $sql = "SELECT rut, password, tipo_usuario, areas_id_area, nombre, apellido, id_usuario FROM usuarios WHERE rut = ?";
       
       if($stmt = mysqli_prepare($link, $sql)){
           // Bind variables to the prepared statement as parameters
           mysqli_stmt_bind_param($stmt, "s", $param_rut);
           
           // Set parameters
           $param_rut = $rut;
           
           // Attempt to execute the prepared statement
           if(mysqli_stmt_execute($stmt)){
               // Store result
               mysqli_stmt_store_result($stmt);
               
               // Check if username exists, if yes then verify password
               if(mysqli_stmt_num_rows($stmt) == 1){                    
                   // Bind result variables
                   mysqli_stmt_bind_result($stmt, $rut, $hashed_password, $tipo_usuario, $id_area_usuarios, $nombre, $apellido, $id_usuario);
                   if(mysqli_stmt_fetch($stmt)){
                       if(password_verify($password, $hashed_password)){
                           /* Password is correct, so start a new session and
                           save the username to the session */
                           session_start();
                           $_SESSION['rut'] = $rut;   
                           $_SESSION['tipo_usuario'] = $tipo_usuario;
                           $_SESSION['areas_id_area'] = $id_area_usuarios;
                           $_SESSION['nombre'] = $nombre;  
                           $_SESSION['apellido'] = $apellido;  
                           $_SESSION['id_usuario'] = $id_usuario;




                           if ($tipo_usuario == "Administrador") {
                               header("location: administrador/inicio.php");
                           }else{
                               switch ($id_area_usuarios) {
                                 case '1':
                                   header("location: saludmental/inicio.php");
                                   break; 
                                 case '2':
                                   header("location: cuidadospaleativos/inicio.php");
                                   break; 
                                   
                                case '3':
                                   header("location: especialidadesodontologicas/inicio.php");
                                   break; 
                               case '4':
                                   header("location: prais/inicio.php");
                                   break; 

                                   case '5':
                                   header("location: medicinafisica/inicio.php");
                                   break; 
                                   case '6':
                                   header("location: farmacia/inicio.php");
                                   break; 
                                   case '7':
                                   header("location: imageneologia/inicio.php");
                                   break; 
                                    case '8':
                                   header("location: esterilizacion/inicio.php");
                                   break; 
                                    case '9':
                                   header("location: laboratorio/inicio.php");
                                   break; 
                                    case '10':
                                   header("location: nutricion/inicio.php");
                                   break; 
                                    case '11':
                                   header("location: endoscopia/inicio.php");
                                   break; 
                                    case '12':
                                   header("location: especialidadesmedicoquirurgico/inicio.php");
                                   break; 
                                    case '13':
                                   header("location: pabellon/inicio.php");
                                   break; 
                                    case '14':
                                   header("location: hospitalizacionpsiquiatria/inicio.php");
                                   break; 
                                    case '15':
                                   header("location: hospitaldedia/inicio.php");
                                   break; 
                                    case '16':
                                   header("location: ginecologia/inicio.php");
                                   break; 
                                    case '17':
                                   header("location: medicoquirurgicoadulto/inicio.php");
                                   break; 
                                    case '18':
                                   header("location: medicoquirurgicoinfantil/inicio.php");
                                   break; 
                                    case '19':
                                   header("location: Urgencia/inicio.php");
                                   break; 
                                   case '20':
                                   header("location: equiposmedicos/inicio.php");
                                   break; 

 
                              
                               }
                           }
                       } else{
                           // Display an error message if password is not valid
                           $password_err = ' La contraseña ingresada no es correcta.';
                           echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                             <strong>!Alerta!</strong> $password_err
                             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                               <span aria-hidden='true'>&times;</span>
                             </button>
                           </div>";
                       }
                   }
               } else{
                   // Display an error message if username doesn't exist
                   $rut_err = ' Cuenta no corresponde al rut ingresado.';
                   echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                             <strong>!Alerta!</strong> $rut_err
                             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                               <span aria-hidden='true'>&times;</span>
                             </button>
                           </div>";
               }
           } else{
               $error = 'Algo a ocurrido. Intentalo mas tarde.';
               echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                             <strong>!Alerta!</strong> $error
                             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                               <span aria-hidden='true'>&times;</span>
                             </button>
                           </div>";
           }
       }
       
       // Close statement
       mysqli_stmt_close($stmt);
   }
   
   // Close connection
   mysqli_close($link);
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Login V6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php

    include 'C:\xampp\htdocs\sistemaReportes\modal\modalReporteFormularioEvento.php';?>
    


<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> 
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login to site.com</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="formLoginUsuario" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="rut" name="rut" value="<?php echo $rut; ?>" required="" title="Please enter you rut" placeholder="usuario">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                              
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                              
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
                          <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                       
                      </ul>
                      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalFormularioReportes">Primary</button> 
                  </div>
              </div>
          </div>
      </div>
  </div>
    

  
  <div id="dropDownSelect1"></div>
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

    <script src="js/script.js"></script>
   
    

</body>
</html>
