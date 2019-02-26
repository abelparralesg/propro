<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administradores | TV WAR - Usuarios</title>
    <!-- Bootstrap core CSS -->
    
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/chartJS/Chart.min.js"></script>
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- PROPIO -->
    <link href="css/estilo.css" rel="stylesheet">
    <link href="cssa/estilos.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-default fixed-top">
      <div class="container">
        <a class="navbar-brand" href="panel.html">TV WAR | TELEVISION DIGITAL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="panel.html">Panel de control</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clientes.html">Listado de Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="item.html">Canales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transacciones.html">Transacciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reportes.php>">Reportes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navbar-right" href="login.html">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span aria-hidden="true"></span> Detalles de Reportes</h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          
          <div class="col-xs-12 col-ms-10 col-ms-offset-1 col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <div class="col-md-10"">
                <h3 aria-hidden="true" align="center">Reportes Estadísticos</h3><br>
              </div>
              <div>
                <h4>Reportes Anuales: Por mes y monto.</h4>
              </div>
              </div> <br>
              <div class="caja" align="center">
                <select onChange="mostrarResultados(this.value);">
                  <?php
                    for($i=2018;$i<2020;$i++){
                        if($i == 2019){
                            echo '<option value="'.$i.'" selected>'.$i.'</option>';
                        }else{
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                    }
                  ?>
                </select>
              </div> <br>
            <div class="resultados">
              <canvas id="grafico"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section>

    
  <script>
     CKEDITOR.replace( 'editor1' );
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="jsa/bootstrap.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
  <script>
            $(document).ready(mostrarResultados(2019));  
                function mostrarResultados(year){
                    $('.resultados').html('<canvas id="grafico"></canvas>');
                    $.ajax({
                        type: 'POST',
                        url: 'reportes-model.php',
                        data: 'year='+year,
                        dataType: 'JSON',
                        success:function(response){
                            var Datos = {
                                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                    datasets : [
                                        {
                                            fillColor : 'rgb(0, 184, 230)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgb(179, 179, 179)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                            data : response
                                        }
                                    ]
                                }
                            var contexto = document.getElementById('grafico').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                            Barra.clear();
                        }
                    });
                    return false;
                }
    </script>
</html>
