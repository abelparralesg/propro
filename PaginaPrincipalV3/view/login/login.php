<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Acceso | War TV</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css-principal/cssk/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css-principal/cssk/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css-principal/cssk/main.css">
        <script src="assets/js-principal/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="assets/js-principal/js/main.js"></script>
        <script src="assets/js-principal/js/credencial.js"></script>
        <script src="assets/js-principal/js/all.js"></script>
        </head>
  <body>
<?php
if(isset($_POST["enviar"])){
  try{
    $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));
    $contador=0;
    include_once "model/conexiones/conexionpdo.php";
    #$base=new PDO('mysql:host=localhost; dbname=tienda', 'root', ''); 
    #$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM usuario WHERE usuario = :login";
  
    $resultado=$base->prepare($sql);  
    $resultado->execute(array(":login"=>$login));
      while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){         
        if(password_verify($password, $registro['password'])) {
          $contador++;
          }
      } 
      if($contador>0) {
        session_start();
        $_SESSION["usuario"]=$_POST["login"];
        if($_SESSION["usuario"]='admin'){
        header("Location:panel.php");
        }else{
          header("Location:administrador/panel.php");
        }       
      }else{
        header("Location:login'.php");
      }
      $resultado->closeCursor();
  
    }
    catch(Exception $e){
  
      die("Error: " . $e->getMessage());
    
    }

  }
?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <div id="lbground">
    <nav class="navbar navbar-fixed-top lnav" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">War TV</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Parte_AD.html">Acerca de</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div class="container">
        <div class="row">
          <div class="col-xs-8 col-sm-6 col-md-4 col-xs-offset-2 col-sm-offset-3 col-md-offset-4">
            <form class="kevform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return lvalidar1();">
              <div class="form-group">
                <img src="assets/recursos/img/login/logouser.jpg" alt="logouser" class="logouser"><br>
                <label id="ltitulo">Login Here</label>
              </div>
              <div class="form-group">
                <label><i class="fas fa-user"></i>Usuario:</label>  
                <input type="text" class="form-control" id="kevusuario" name="login" placeholder="usuario" autofocus> 
              </div>        
              <div class="form-group">
                <label><i class="icono fas fa-lock"></i>Contraseña</label>
                <input type="password" class="form-control" id="kevcontraseña" name="password" placeholder="contraseña" autocomplete="off">  <br>
              </div>
              <div class="form-group">
                <button type="submit" id="kevsubmit" name="enviar" class="btn btn-primary btn-block">Ingrese</button>
                <label>No tiene cuenta? <a class="llogin" href="?c=registro">Registrese aqui</a></label>
              </div> 
            </form>
          </div>
        </div>
    </div>

    <footer class="lfooter">
      <div class="container">
        <p id="lfp"> Copyright&copy;WarTV 2019</p>
      </div>
    </footer>  
  </div>
    	  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
  </body>
</html>
