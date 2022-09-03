<html>
<body>

<?php

 $codigoValor = "FB";
  
  if (isset($_REQUEST['Codigo'])){
	$codigoValor = $_REQUEST['Codigo'];
	}
$request = 'http://finance.google.com/finance?q='. $codigoValor. '&ei=syzcWZmMI869eqWnjsAE';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $request);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$xxx = curl_exec($ch);
$longitud = strlen($xxx);
echo("<h3>longitud </h3>");
echo $longitud;
echo("<br>");
echo("<h3>Peticion al servidor Google  REQUEST</h3>");
$cotizacion =substr($xxx,1000,$longitud-120000);

echo("Cotizacion: " . $cotizacion->lt_dts);
echo $cotizacion;
echo("<h3>Peticion al servidor Google  NORMAL</h3>");
echo("<br>");
//echo $xxx;
curl_close($ch);



?>

</body>
</html>