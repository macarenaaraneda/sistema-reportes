<?php
// Include config file
require_once 'config.php';

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
</head>
<body>
    
   <div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome back!</h3>
              <form>
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                <div class="text-center">
                  <a class="small" href="#">Forgot password?</a></div>
              </form>
            </div>
          </div>
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

</body>
</html>