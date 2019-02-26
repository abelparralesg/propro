<!--Si necesita loguear, sino borrenlo -->
<?php
session_start();
if (!isset($SESSION["usuario"])) {
	header("Location:login.php");
}
?>
