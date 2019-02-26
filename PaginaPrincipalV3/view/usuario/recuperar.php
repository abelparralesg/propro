    <?php
    	if (isset($_POST["Conseguir"])) {
    		
    		try{
    			$correo=htmlentities(addslashes($_POST["kevemail"]));
    			$base=new PDO('mysql:host=localhost; dbname=logintest', 'root', ''); 
  				$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  				$sql="SELECT * FROM usuario WHERE correo = :kevemail";
  				$resultado=$base->prepare($sql);  
  				$resultado->execute(array(":kevemail"=>$correo));
  					while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
  					if ($correo=$registro['correo']) {
  						$usuarioal=$registro['usuario'];
  						echo "<script>
                		alert('El nombre de su usuario es: . $usuarioal');
                		window.location= 'recuperar.php'
    					</script>";
    				}
  					}$resultado->closeCursor();
  
				}catch(Exception $e){
  					die("Error: " . $e->getMessage());
				}
    	}
    ?>
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
        <link rel="stylesheet" href="cssk/bootstrap.min.css">
        <link rel="stylesheet" href="cssk/bootstrap-theme.min.css">
        <link rel="stylesheet" href="cssk/main.css">
        <link rel="stylesheet" href="login.html">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/all.js"></script>
        <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <div id="rbground">
    <nav class="navbar navbar-fixed-top rnav" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">War TV</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Acerca de</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div class="container">
      <div class="row">
          <div class="col-xs-8 col-sm-6 col-md-4 col-xs-offset-2 col-sm-offset-3 col-md-offset-4">
            <form id="recuperar" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="kevform2" method="post" onsubmit="return rvalidar();">
              <div class="form-group">
                <img src="img/login/logoiden.jpg" alt="logoiden" class="logoiden"><br>
                <label id="rtitulo">Recupere su Usuario</label>
              </div>
              <div class="form-group">
	            <label class="lrecup">El nombre de usuario sera proporcionado al ingresar el correo respectivo, por favor introduzca su e-mail:</label>
	            <input type="email" class="form-control" id="kevemail" name="kevemail" placeholder="usuario@email.com"> 
	          </div>        
	          <div class="form-group">
	            <button type="submit" id="kevsubmit2" name="Conseguir" class="btn btn-primary btn-block">Conseguir</button>
	          </div> 
	          <div class="form-group">
 	            <label class="lrecup" >Desea regresar? <a class="arecup" href="login.php">Pulse aqui</a></label>  
	          </div>
	        </form>
          </div>
      </div>
      </div>
    <footer class="rfooter">
      <div class="container">
        <p id="rfp">&copy; WarTVproject 2019</p>
      </div>
    </footer>
  </div>          
    	  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>