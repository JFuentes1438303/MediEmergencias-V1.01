<?php  
  session_start();
  if ($_SESSION["usuario"] != "1") {
    header("Location: ../../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Pacientes MediEmergencias</title>
      <!-- Bootstrap core CSS -->
      <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="../../css/simple-sidebar.css" rel="stylesheet">
      <link href="../../css/estilos.css" rel="stylesheet" >
      <script src="https:kit.fontawesome.com/2c36e9b7b1.js"></script>
    </head>

  <body>

    <div class="d-flex" id="wrapper">

      <!-- Sidebar -->
      <div class="border-right" id="sidebar-wrapper">

        <div style="text-align: center; border-bottom: 2px solid #818181; background: #000;">
            <a href="home.php">
              <img src="../../files/img/logoem2.jpg" style="width:240px; height: 61px">
            </a>
        </div>

        <div class="list-group list-group-flush">
          <a href="../views/pacientes.php" class="list-group-item list-group-item-action enlaces">Paciente</a>
          <a href="historias.php" class="list-group-item list-group-item-action enlaces">Historia clinica</a>
          <a href="#" class="list-group-item list-group-item-action enlaces">Cuerpo de atencion</a>
          <a href="#" class="list-group-item list-group-item-action enlaces">Enfermedades</a>
          <a href="#" class="list-group-item list-group-item-action enlaces">Alertas</a>
          <a href="#" class="list-group-item list-group-item-action enlaces">Examenes</a>
          <a href="#" class="list-group-item list-group-item-action enlaces">Antecedentes</a>
          <a href="#" class="list-group-item list-group-item-action enlaces">Sintomas</a>
          <div style="background: #f2f2f2; text-align: center;">
            <img src="../../files/img/logoEM.png" class="logo2">
          </div>
          <div style="background: #f2f2f2; padding-bottom: 20px">
            <a href="https://www.facebook.com" class="redes">
              <i class="fab fa-facebook-square fa-2x"></i>
            </a>
            <a href="https://www.instagram.com" class="redes">
              <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="https://www.twitter.com" class="redes">
              <i class="fab fa-twitter-square fa-2x"></i>
            </a>
            <a href="https://www.google.com" class="redes">
              <i class="fab fa-google fa-2x"></i>
            </a>
          </div>
        </div>
      </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light" style="border-bottom: 2px solid #818181; background: #F70501">
        <button class="btn boton_menu" id="menu-toggle">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link perfil boton_perfil" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mi Perfil   <i class="fas fa-angle-double-down"></i>
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <p class="dropdown-item desplegable">
                <?php 
                  echo " ".$_SESSION["primer_nombre"]." ".$_SESSION["primer_apellido"];
                ?>
              </p>
              <a class="dropdown-item desplegable" href="actualizar.php">Actualizar</a>
              <a class="dropdown-item desplegable" href="../models/cerrar_sesion.php">Cerrar Sesion</a>
            </div>
          </ul>
        </div>
      </nav>

    	<div class="container div">

  			<div class="row" style="background: #F2F2F2; border-bottom: 1px solid #000">
        <div class="col-sm-3">
          <a href="home.php">
            <img src="../../files/img/Emergencia2.jpg" class="logo">
          </a>
        </div>
        <div class="col-sm-9 titulos" style="background: #F2F2F2">
          Buscar paciente
        </div>  
      </div>

		    <form action="../controllers/pacientes.php" method="POST">
  				<div class="row espacio">
  					<div class="col-sm-6" style="margin-left: 30px; padding-left: 50px">
  						<label for="documento" class="col-form-label">
  							Ingrese el documento del paciente:
  						</label>
  					</div>
            <div class="col-sm-1" style="margin-top: 5px; margin-left: -30px;">
              <i class="far fa-id-card fa-2x"></i>
            </div>
  					<div class="col-sm-4">
  						<input type="text" class="form-control inputs" id="documento" placeholder="Ingrese documento" name="doc_paciente" required autocomplete="off">
  					</div>
  				</div>
  				<div class="row espacio" style="justify-content: center;">
  					<button type="submit" class="btn btn-sm btn-dark inputs">Buscar</button>
  				</div>
        </form>
		  </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

  </body>
</html>
