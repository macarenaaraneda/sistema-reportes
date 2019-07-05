


<?php
session_start();


include '../config.php'; // acceso
 
include 'C:\xampp\htdocs\sistemaReportes\modal\modalVerEvento.php';



if(!isset($_SESSION['rut']) || empty($_SESSION['rut'])){


   exit;
}
?>

<!-- $_SESSION rut recorre rut de session_star-->
<!DOCTYPE hmtl>
<html>
<head>


<style type="text/css"> /* ESTILOS PARA ADMIN css*/
  nav{
    margin-bottom: 8px;
  }
  footer{
    background-color: #f8f9fa;;
    margin-top: 50px;
    height: 
  }

  #copyright{
    color: dark;
  }

  #tablaEventos{
   background: #FFF;

  
  }
 
</style>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="https://code.jquery.com/jquery-3.1.1.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/additional-methods.min.js"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




<!-----------------------alertas de js----------------------------->
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
<!-------------------------------termino de alertas de js------------------>






<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<!--AGREGUÉ ESTO PARA Librito-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 

<!--JQuery DataTables plugin-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<!--JQuery DataTables plugin-->


<script type="text/javascript" src="../js/script.js"></script>




</head>
	<body>
	



<nav class="navbar navbar-expand-lg navbar-primary bg-light">
  <a class="navbar-brand" href="#">Eventos Centinela</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <!-- https://getbootstrap.com/docs/4.0/components/navbar/-->
  <!-- para agrupar y ocultar los contenidos de la barra de navegación por un punto de interrupción principal.-->
    <ul class="navbar-nav"> <!-- ENCABEZADO DE NAVEGACIÓN -->
     
    <li class="nav-item active">
    <a class="nav-link" href="../saludmental/inicio.php"> Inicio <span class="sr-only">(current)</span></a>
  </li>


    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Tipo Eventos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item"   href="../saludmental/inicio_incidente.php" data-backdrop="static" data-keyboard="false" style="cursor: pointer;">Incidentes</a>
             <!--Agregar otra opción de ser necesario-->
             <a class="dropdown-item"   href="../saludmental/inicio_adverso.php" data-backdrop="static" data-keyboard="false" style="cursor: pointer;">Adverso</a>
            
        </div>
       
        
      </li>




      
    </ul>
  </div>
  <div>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../logout.php">Cerrar Sesión<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>



	<div class="display">


	
	</div>
	


<!-- Footer PIE DE PÁGINA-->
<!-- Bootstrap footer https://mdbootstrap.com/docs/jquery/navigation/footer/-->
<footer class="page-footer font-small special-color- pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div id="copyright" class="footer-copyright text-center py-3">
      <!-- LOGO <img src="../resources/logo.png" class="rounded"> Para poner logo --> 
      <span>© Copyright 2019 | Hospital Penco Lirquen.</span>  
      
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

	
		
	</body>
</html>
<!-- FUNCIÓN DE ACTUALIZAR TABLA DE EVENTOS-->
<script type="text/javascript">
$(document).ready( function () {
	actualizarTablaEventos_centinela();
});
</script>

