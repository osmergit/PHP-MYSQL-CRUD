<?php


  $codigoValor = "GOOGL";
  
  if (isset($_REQUEST['Codigo'])){
	$codigoValor = $_REQUEST['Codigo'];
	}
$request = 'http://finance.google.com/finance?q='. $codigoValor. '&ei=syzcWZmMI869eqWnjsAE';
$datos = file_get_contents($request);
$columnas = explode("\n",$datos);
echo "<br><br>El número de elementos en el array es: " . count($columnas);	
for ($x = 0; $x < count($columnas); $x ++)
{
$day[]= explode(",",$columnas[$x]);	
	
}
	
print '<pre>';
//print_r($day[238]);
echo "promedio 52 semanas";
print_r($day);
print '</pre>';

?>