<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

<?php
//print_r($_GET);


$ClientID="AbaXa1eJz6Bf9OH-gawpTX7XopAxMV0NOCGCGnv12btFgTDC5D1KxTMqcx4vRy4oP98xDIDJg83fcY2e";
$Secret="ECB1l961lLTsGV0K741YYEm-InCvsGcGa5j_0BkM0EOcDuNeiB9F7ZwR4a75-CkOf9AwkMeg4ZVdZ3Tn";

	$Login=curl_init("https://api.sandbox.paypal.com/v1/oauth2/token");
	curl_setopt($Login, CURLOPT_RETURNTRANSFER, TRUE);

	curl_setopt($Login, CURLOPT_USERPWD, $ClientID.":".$Secret);
	curl_setopt($Login, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
	
	$Respuesta=curl_exec($Login);

	$objRespuesta=json_decode($Respuesta);
	$AccessToken=$objRespuesta->access_token;
	//print_r($AccessToken);


	$venta=curl_init("https://api.sandbox.paypal.com/v1/payments/payment".$_GET['paymentID']);


	

	curl_setopt($venta, CURLOPT_HTTPHEADER, array("Content-Type: application/json","Authorization: Bearer".$AccessToken));
	
	curl_setopt($venta, CURLOPT_RETURNTRANSFER, TRUE);

	$RespuestaVenta=curl_exec($venta);
	
	//print_r($RespuestaVenta);

	$objDatosTransaccion=json_decode($RespuestaVenta);
	

?>
  
<div class="jumbotron" align="center">
	<h1 class="display-4">¡LISTO !</h1>

	<hr class="my-4">
	<p class="lead"> SU PAGO SE REALIZO CORRECTAMENTE </p>
	<p> Content</p>

</div>