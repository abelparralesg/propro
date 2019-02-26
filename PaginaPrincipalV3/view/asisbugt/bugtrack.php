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
    <script type="text/javascript" src="./js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="./js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="./js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="./js/function.js"></script>

	<link rel="stylesheet" href="./css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="./css/responsive.dataTables.min.css">
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
      	<form action="">
      	<div class="row">
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Generar una consulta</h3>
              </div>
              <div class="panel-body">
                  <div class="col-xs-10 col-ms-10 ">
                    <table id="table" class="display responsive nowrap" style="width:100%">
                    	<thead>
            				    <tr>
                				  <th>Usuario</th>
                				  <th>Comentario</th>
            				    </tr>
        				      </thead>
        				      <tbody>
        					      <?php foreach($this->model->Listar() as $r): ?>
        						      <tr>
            						    <td><?php echo $r->nombre; ?></td>
            						    <td><?php echo $r->bug; ?></td>
        						      </tr>
    						        <?php endforeach; ?>
        				      </tbody>
                    </table>
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
