<?php
    if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['usuario']) && (!empty($_POST['password1'])) && (!empty($_POST['password2']))){
        include_once "conexionsql.php";
        $nombre=htmlentities($_POST['nombre']);
        $correo=htmlentities($_POST['email']);
        $usuario=htmlentities($_POST['usuario']);
        $password1=htmlentities($_POST['password1']);
        $password2=htmlentities($_POST['password2']);
        
        $nombre=mysqli_real_escape_string($conexion,$nombre);
        $correo=mysqli_real_escape_string($conexion,$correo);
        $usuario=mysqli_real_escape_string($conexion,$usuario);
        $password1=mysqli_real_escape_string($conexion,$password1);
        $password2=mysqli_real_escape_string($conexion,$password2);
        
        if($password1===$password2){
            $sql_verificar_reg="SELECT correo FROM usuario WHERE correo= '".$correo."'";
            $verificar_reg=mysqli_query($conexion, $sql_verificar_reg);
            if($verificar_reg->num_rows>0){
                ?>
              <a href="registro.php" class="btn btn-primary">No se pudo realizar el registro debido a que el correo ya esta registrado.</a>
            <?php
            }else{
                $password1=password_hash($password1,PASSWORD_DEFAULT);
                $sql="INSERT INTO usuario (nombre,usuario,correo,password) VALUES ('".$nombre."','".$usuario."','".$correo."','".$password1."')";
                $verificar=mysqli_query($conexion, $sql);
                if($verificar){
                    ?>
                     <a href="index.php" class="btn btn-primary">Registro completo, inicia sesi&oacute;n</a>
                <?php
                }else{
                ?>
                     <a href="registro.php" class="btn btn-primary">No se pudo realizar el registro intentalo de nuevo</a>
                <?php
                }
            }     
        }else{
            ?>
              <a href="registro.php" class="btn btn-primary">Las contrase&ntilde;as no son iguales</a>
            <?php
        }
        
        mysqli_close($conexion);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!--bootstrap-->
    <link rel="stylesheet" type="text/css" href="estiloss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <!--bootstrap-->
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--jquery-->
</head>
<body class="bg-dark p-3">
    <div class="container p-3 " style="background-color: rgba(143, 196, 245 ,0.3)">
    <div class="container p-3 " style="background-color: rgba(143, 196, 245 ,0.1)">
        <form action="#" method="post" onsubmit="return validar_contrasena();">
           <div class="form-group">
               <h2 class="title">Registrarse</h2>
           </div>
           <div class="form-group">
    <label for="exampleInputName1">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombreHelp" placeholder="Nombre" required>
  </div>
            <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Correo electronico" required>

  <div class="form-group">
    <label for="exampleInputUsuario1">Usuario</label>
    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="usuarioHelp" placeholder="Usuario" required>
  </div>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contrase&ntilde;a</label>
    <input type="password" class="form-control" name="password1" id="password1" placeholder="Contrase&ntilde;a" required>
    
    <label for="exampleInputPassword1">Confirma tu contrase&ntilde;a</label>
    <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirma tu contrase&ntilde;a" required>
  </div>
  <button type="submit" class="btn btn-info">Registrarse</button>
       <a class="btn btn-primary btn-outline-primary" href="?c=login">Iniciar sesi&oacute;n</a>
        </form>
        
    </div>
    </div>
    <script>
    function validar_contrasena(){
        var pass1=$("#password1").val();
        var pass2=$("#password2").val();
        if(pass1!=pass2){
            alert("Las contraseñas deben ser iguales");
            return false;
        }
    }
    </script>
<footer>
 
</footer>
</body>
</html>