
<?php
function convertCurrency($amount, $from, $to) {
     $url = 'http://finance.google.com/finance/converter?a=' . $amount . '&from=' . $from . '&to=' . $to;
     $data = file_get_contents($url);
         preg_match_all("/<span class=bld>(.*)<\/span>/", $data, $converted);
         $final = preg_replace("/[^0-9.]/", "", $converted[1][0]);
        return round($final, 3);
   }

   echo convertCurrency(1, 'EUR', 'USD'); 
   


  $codigoValor = "FB";
  
  if (isset($_REQUEST['Codigo'])){
	$codigoValor = $_REQUEST['Codigo'];
	}
$request = 'http://finance.google.com/finance?q='. $codigoValor. '&ei=syzcWZmMI869eqWnjsAE';
$request= file_get_contents($request);



$request = $request.$codigoValor;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $request);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output =curl_exec($ch);
curl_close($ch);
$longitud = strlen($output);
echo("<h3>longitud </h3>");
echo $longitud;
$cotizacion =substr($output,6,$longitud-150000);
echo("<br>");
echo("<br>");
echo("<br>");
echo ("Precio Accion: ". $cotizacion->Open);
echo("<br>");
echo("URL: ". $cotizacion->url);
echo("<br>");
echo("Cotizacion: ". $cotizacion->l_cur);
echo("<br>");
echo("Cotizacion: ". $cotizacion->lt_dts);
echo("<br>");
echo("<h3>Peticion al servidor Google  REQUEST</h3>");
echo($request);
echo("<br>");
echo("<h3>Respuesta completa en formato JSON </h3>");

echo("<h3>Aca se imprime la cotizacion</h3>");
var_dump($cotizacion);
echo("<br>");
echo($output);
echo("<br>");

echo("<br>");
echo("<h3>cotizacion </h3>");
echo($cotizacion);
echo("<br>");
echo ("Precio Accion: " . $cotizacion -> open);

?>