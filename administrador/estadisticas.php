<?php
session_start();


include '../config.php'; // acceso




if(!isset($_SESSION['rut']) || empty($_SESSION['rut'])){
 //header("location: login.php")

   exit;
}
?>
<html>


<head>


<style type="text/css"> /* ESTILOS PARA ADMIN css*/
  nav{
    margin-bottom: 8px;
  }
  footer{
    background-color: #33363b;
    margin-top: 50px;
    height: 
  }

  #copyright{
    color: white;
  }

  #tablaEventos{
   background: #FFFF;

  
  }
 
</style>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Librería nueva para probar actualización de pagina -->
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






	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
 
	function drawChart() {
  //var num = 11;
		var data = google.visualization.arrayToDataTable([
			['Tarea', 'eventos por semana'],
			['Trabajo',     11],
			['Comida',      2],
			['Social',  2],
			['Ver la TV', 2],
			['Dormir',    7]
		]);
 
 
		// grafico en 2d
		var options = {
			title: 'Mis actividades diarias'
		};
		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
 
		// grafico en 3d
		var options = {
			title: 'Mis actividades diarias',
			is3D: true,
		};
		var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
		chart.draw(data, options);
	}
	</script>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- Inicio nav -->
  <a class="navbar-brand" href="#">Datos</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <!-- https://getbootstrap.com/docs/4.0/components/navbar/-->
  <!-- para agrupar y ocultar los contenidos de la barra de navegación por un punto de interrupción principal.-->
    <ul class="navbar-nav"> <!-- ENCABEZADO DE NAVEGACIÓN -->

	<li class="nav-item active">
        <a class="nav-link" href="../administrador/inicio.php">Inicio <span class="sr-only">(current)</span></a>
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

 
</nav>  <!-- FIN nav -->


<tr>
    
<td><div id="piechart" style="width: 900px; height: 500px;"></div></td>
<td><div id="piechart_3d" style="width: 900px; height: 500px;"></div></td>

</tr>
	</div>
	


<!-- Footer PIE DE PÁGINA-->
<!-- Bootstrap footer https://mdbootstrap.com/docs/jquery/navigation/footer/-->
<footer class="page-footer font-small special-color-dark pt-4">

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
      <span>© Copyright 2019 | Hospital Penco Lirquén.</span>  
      
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

	
		

	
</body>
