<!--Si necesita loguear, sino borrenlo -->
<?php
session_start();
if (!isset($SESSION["usuario"])) {
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administradores | TV WAR - Usuarios</title>
    <!-- Bootstrap core CSS -->
    <link href="cssa/bootstrap.min.css" rel="stylesheet">
    <link href="cssa/estilos.css" rel="stylesheet">
    <script src="jsa/asistbugt.js"></script>
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="panel.html">TV WAR | Home</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">         
           <ul class="nav navbar-nav navbar-right">
            <li><a href="Parte_AD.html">Acerca de</a></li>
            <li><a href="index.html">Salir</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Asistencia al cliente </h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
      	<form action="?c=asistbugt&a=Guardar" method="post">
      	<div class="row">
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Generar una consulta</h3>
              </div>
              <div class="panel-body">
                  <div class="col-xs-5">
                    Ingrese su nombre:
                    <input type="text" name="nombre" value="nombre">
                  </div>
                  <div class="col-xs-10 col-ms-10 ">
                    <textarea rows="8" cols="102" name="bug" placeholder="Inserte su consulta aqui en un espacio no mayor a 500 caracteres..." id="txtasis">
                    </textarea>
                  </div>
                  <div class="col-lg-12">
                    <input type="submit" name="enviarbug" class="btn btn-primary" onclick="return alert();" value="Enviar consulta">
                  </div>
              </div>
            </div>
          </div>
        </div>
      	</form>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright TV WAR &copy; 2019</p>
    </footer>
  <script>
     CKEDITOR.replace( 'editor1' );
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
