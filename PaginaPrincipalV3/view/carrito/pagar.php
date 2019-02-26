<?php
include 'model/global/config.php';
include 'model/global/conexion.php';
include 'view/carrito/carrito.php';
include 'view/templates/cabecera.php';
?>

<?php
if($_POST) {

	$total=0;
	$SID=session_id();
	$Correo=$_POST['email'];

	foreach ($_SESSION ['CARRITO'] as $indice =>$producto) {
	
	$total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
	}
		$sentencia=$pdo->prepare("INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`)
		VALUES (NULL,:ClaveTransaccion,'',NOW(),:Correo,:Total,'pendiente');");

		$sentencia->bindParam(":ClaveTransaccion",$SID);
		$sentencia->bindParam(":Correo",$Correo);
		$sentencia->bindParam(":Total", $total);
		$sentencia-> execute();
		$idVenta=$pdo->lastInsertId();

		foreach ($_SESSION ['CARRITO'] as $indice =>$producto) { 

		$sentencia=$pdo->prepare("INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");

		$sentencia->bindParam(":IDVENTA",$idVenta);
		$sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
		$sentencia->bindParam(":PRECIOUNITARIO", $producto['PRECIO']);
		$sentencia->bindParam(":CANTIDAD", $producto['CANTIDAD']);
		$sentencia->execute(); 

		}
	//echo "<h3>".$total."</h3>";
}

?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<style>
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }
        
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
             
            }
        }
    </style> 
<div class="jumbotron text-center"> 
	<h1 class="display-4">¡Paso Final!</h1>
	<hr class="my-4">
	<p class="lead">Estas a punto de pagar con paypal la cantidad de:
		<h4>$<?php echo number_format($total,2); ?></h4></p>
		<div id="paypal-button"></div>
	<p><br/>
	<strong>(Para aclaraciones: grupo63@hotmail.com)</strong>
	</p>
</div>

<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox:'AbaXa1eJz6Bf9OH-gawpTX7XopAxMV0NOCGCGnv12btFgTDC5D1KxTMqcx4vRy4oP98xDIDJg83fcY2e',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'responsive',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
   	    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '<?php echo $total; ?>',
	            currency: 'USD'},
	        description:"Compra de productos: $<?php echo number_format($total,2);?>",
            custom:"<?php echo $SID;?>#<?php echo openssl_encrypt($idVenta,COD,KEY); ?>"
          }]  	
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        console.log(data);
        window.location="verificador.php?paymentToken="+data.paymentToken+ "&paymentID="+data.paymentID;   });
    }
  }, '#paypal-button');


</script>

<?php 
include 'templates/pie.php';
 ?>
