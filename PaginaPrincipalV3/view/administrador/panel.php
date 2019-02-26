<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Administradores | TV WAR</title>
    <link href="cssa/bootstrap.min.css" rel="stylesheet">
    <link href="cssa/estilos.css" rel="stylesheet">

    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>
<?php
session_start();
if (!isset($_SESSION["usuario"])) {
  header("Location:login.php");
}else{
  echo "Hola " . $_SESSION['usuario']; 
}
?>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="panel.html">TV WAR | Home</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="panel.html">Panel de control</a></li>
            <li><a href="clientes.html">Listado de Clientes</a></li>
            <li><a href="transacciones.html">Transacciones</a></li>
            <li><a href="reportes.html">Reportes</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.html">Salir</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span aria-hidden="true"></span> Panel de Control</h1>
          </div>
          
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          
          <div class="col-md-9">
            <!-- Vista rápida del sitio -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Vista General - TV WAR</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span  aria-hidden="true"></span> 112</h2>
                    <h4>Usuarios</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span aria-hidden="true"></span> 825</h2>
                    <h4>Suscripciones</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- últimos usuarios -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Últimos usuarios</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha de Registro</th>
                      </tr>
                      <tr>
                        <td>Abel Parrales</td>
                        <td>abel@gmail.com</td>
                        <td>Enero 03, 2019</td>
                      </tr>
                      <tr>
                        <td>Michelle Piza</td>
                        <td>michelle@gmail.com</td>
                        <td>Enero 03, 2019</td>
                      </tr>
                      <tr>
                        <td>Kevin Ruiz</td>
                        <td>kevin@gmail.com</td>
                        <td>Enero 03, 2019</td>
                      </tr>
                      <tr>
                        <td>Keyla Cedeño</td>
                        <td>keyla@gmail.com</td>
                        <td>Enero 03, 2019</td>
                      </tr>
                      <tr>
                        <td>Dayana Duque</td>
                        <td>dayana@gmail.com</td>
                        <td>Enero 03, 2019</td>
                      </tr>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

  <script>
     CKEDITOR.replace( 'editor1' );
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
