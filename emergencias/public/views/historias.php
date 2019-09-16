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

    <div class="d-flex toggled" id="wrapper">

      <!-- Sidebar -->
      <div class="border-right" id="sidebar-wrapper">

        <div style="text-align: center; border-bottom: 2px solid #818181; background: #000;">
            <a href="home.php">
            	<img src="../../files/img/logoem2.jpg" style="width:240px; height: 61px">
            </a>
        </div>

        <div class="list-group list-group-flush">
          <a href="pacientes.php" class="list-group-item list-group-item-action enlaces">Paciente</a>
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

    	<div class="container div2">

  			<div class="row" style="background: #F2F2F2; border-bottom: 1px solid #000">
          <div class="col-sm-3">
            <a href="home.php">
              <img src="../../files/img/Emergencia4.jpg" class="logo">
            </a>
          </div>
          <div class="col-sm-9 titulos" style="background: #F2F2F2">
            Diligenciamiento de historia clinica.
          </div>  
        </div>

		    <form action="#" method="POST">

          <div class="row">
            <div class="col-sm-12" style="text-align: center; margin-top: 1%">
              <h5>Datos personales del paciente</h5>
            </div>
          </div>

          <div class="row espacio2" style="">
            <div class="col-sm-2">
              <label for="tp" class="col-form-label font" style="">Tipo de documento:</label>
            </div>
            
            <div class="col-sm-3">
              <?php  
                include("../models/tipo_documento.php");
              ?>
            </div>

            <div class="col-sm-2">
              <label for="ndocumento" class="col-form-label font" style="">Numero de documento:</label>
            </div>
            <div class="col-sm-2" style="">
              <input type="text" class="form-control inputs" id="ndocumento" placeholder="ingrese documento" name="ndocumento" required>
            </div>

            <div class="col-sm-1">
              <label for="edad" class="col-form-label font" style="">Edad:</label>
            </div>

            <div class="col-sm-2" style="">
              <input type="text" class="form-control inputs" id="edad" placeholder="ingrese edad" name="edad" required>
            </div>
          </div>

  				<div class="row espacio2" style="">
            <div class="col-sm-1">
              <label for="nombres" class="col-form-label font" style="">Nombres:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="nombres" placeholder="ingrese nombres" name="nombres" required>
            </div>

            <div class="col-sm-1">
              <label for="apellidos" class="col-form-label font" style="">Apellidos:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="apellidos" placeholder="ingrese apellidos" name="apellidos" required>
            </div>

            <div class="col-sm-2">
              <label for="fnacimiento" class="col-form-label font">Fecha de nacimiento:</label>
            </div>

            <div class="col-sm-2" style="">
              <input type="date" class="form-control" id="fnacimiento" name="f_nacimiento" required>
            </div>
          </div>

          <div class="row espacio2" style="">
            <div class="col-sm-1">
              <label for="ciudad" class="col-form-label font" style="">Ciudad:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="ciudad" placeholder="ingrese ciudad" name="ciudad" required>
            </div>

            <div class="col-sm-1">
              <label for="departamento" class="col-form-label font" style="margin-left: -15px">Departamento:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="departamento" placeholder="ingrese departamento" name="departamento" required>
            </div>

            <div class="col-sm-1">
              <label for="direccion" class="col-form-label font" style="">Direccion:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="direccion" placeholder="ingrese direccion" name="direccion" required>
            </div>
          </div>

          <div class="row espacio2" style="">
            <div class="col-sm-1">
              <label for="ciudad" class="col-form-label font" style="">Sexo:</label>
            </div>

            <div class="col-sm-3" style="">
              <?php  
                include("../models/sexo.php");
              ?>
            </div>

            <div class="col-sm-1">
              <label for="ocupacion" class="col-form-label font" style="">Ocupacion:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="ocupacion" placeholder="ingrese ocupacion" name="ocupacion" required>
            </div>

            <div class="col-sm-1">
              <label for="departamento" class="col-form-label font" style="margin-top: -10px">Estado civil:</label>
            </div>

            <div class="col-sm-2" style="">
              <?php  
                include("../models/estado_civil.php");
              ?>
            </div>
          </div>

          <div class="row" style="">
            <div class="col-sm-1">
              <label for="entidad" class="col-form-label font" style="">Entidad:</label>
            </div>

            <div class="col-sm-5" style="">
              <input type="text" class="form-control inputs" id="entidad" placeholder="ingrese entidad" name="entidad" required>
            </div>

            <div class="col-sm-1">
              <label for="regimen" class="col-form-label font" style="">Regimen:</label>
            </div>

            <div class="col-sm-5" style="">
              <?php  
                include("../models/regimen.php");
              ?>
            </div>
          </div>

          <div class="row espacio2" style="">
            <div class="col-sm-1">
              <label for="religion" class="col-form-label font" style="">Region:</label>
            </div>

            <div class="col-sm-5" style="">
              <?php  
                include("../models/region.php");
              ?>
            </div>

            <div class="col-sm-1">
              <label for="escolaridad" class="col-form-label font" style="">Escolaridad:</label>
            </div>

            <div class="col-sm-5 " style="">
              <input type="text" class="form-control inputs" id="escolaridad" placeholder="ingrese escolaridad" name="escolaridad" required>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12" style="text-align: center; margin-top: 1%">
              <h5>Anamnesis</h5>
            </div>
          </div>

          <div class="row espacio2">
            <div class="col-sm-3">
              <label for="motivo" class="col-form-label font" style="margin-left: 110px; margin-top: 7px;">Motivo de consulta:</label>
            </div>
            <div class="col-sm-9">
              <textarea name="motivo" id="motivo" cols="100" rows="2"></textarea>
            </div>
          </div>

          <div class="row espacio2">
            <div class="col-sm-3">
              <label for="enfermedad" class="col-form-label font" style="margin-left: 110px; margin-top: 7px;">Enfermedad actual:</label>
            </div>
            <div class="col-sm-9">
              <textarea name="enfermedad" id="enfermedad" cols="100" rows="2"></textarea>
            </div>
          </div>

          <div class="row espacio2">
            <div class="col-sm-4">
              
            </div>
            <div class="col-sm-3">
              <label for="" class="col-form-label font">¿Padre aun vive?</label>
              <input type="radio" name="padre" value="si">SI
              <input type="radio" name="padre" value="no">NO
            </div>
              <div class="col-sm-5">
                <input type="text" class="form-control inputs" style="width: 70%;" name="enfermedad" placeholder="ingrese enfermedad heredada">
              </div>
          </div>

          <div class="row espacio2">
            <div class="col-sm-4">
              <label for="antecedentes" class="col-form-label font" style="margin-left: 40px">Antecedentes heredofamiliares:</label>
            </div>
            <div class="col-sm-3">
              <label for="" class="col-form-label font">¿Madre aun vive?</label>
              <input type="radio" name="madre" value="si">SI
              <input type="radio" name="madre" value="no">NO
            </div>
            <div class="col-sm-5">
              <input type="text" class="form-control inputs" style="width: 70%;" name="enfermedad" placeholder="ingrese enfermedad heredada">
            </div>
          </div>

          <div class="row espacio2">
            <div class="col-sm-4 espacio2">
              <label for="antecedentes" class="col-form-label font" style="margin-left: 40px">Antecedentes personales:</label>
            </div>
            <div class="col-sm-3 espacio2">
              <label for="" class="col-form-label font">Habitos toxicos</label><br>
            </div>
            <div class="col-sm-5 espacio2">
              <input type="checkbox" name="toxico" value="alcohol">Alcohol
              <input type="checkbox" name="toxico" value="tabaco">Tabaco
              <input type="checkbox" name="toxico" value="drogas">Drogas
              <input type="checkbox" name="toxico" value="infusiones">Infusiones
            </div>

            <div class="row espacio2">
            <div class="col-sm-3">
              <label for="fisiologico" class="col-form-label font" style="margin-left: 110px; margin-top: 7px;">Fisiológicos:</label>
            </div>
            <div class="col-sm-9">
              <textarea name="fisiologico" id="fisiologico" cols="100" rows="2"></textarea>
            </div>
          </div>
          </div>

  				<div class="row espacio" style="justify-content: center;">
  					<button type="submit" class="btn btn-sm btn-dark inputs">Enviar</button>
  				</div>
          <div class="row espacio2" style="justify-content: center;">
            <input type="reset" class="btn btn-sm btn-danger" value="Borrar">
          </div>
        </form>
		  </div>

    <br>
    <br>

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
