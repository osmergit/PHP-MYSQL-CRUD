<?php


  $codigoValor = "AMZN";
  
  if (isset($_REQUEST['Codigo'])){
	$codigoValor = $_REQUEST['Codigo'];
	}
$request = 'http://finance.google.com/finance?q='. $codigoValor. '&ei=syzcWZmMI869eqWnjsAE';
$datos = file_get_contents($request);
$columnas = explode("\n",$datos);
for ($x = 0; $x < count($columnas); $x ++)
{
$day[]= explode(",",$columnas[$x]);	
	
}
	
print '<pre>';
//print_r($day[238]);

echo("<TABLE>");

echo("<TR>");

echo("<TD>");
echo "Precio Actual";


echo("<br>");
$pa= $day[204];

echo $pa[0].$pa[1];
echo("</TD>");
echo("<br>");
echo("<TD>");
echo "promedio 52 semanas";
print_r($day[239]);
echo("</TD>");
//print_r($day[246]);
echo("</TR>");
echo("<TR>");
echo("<TD>");
$p= $day[246];

//$longitud = strlen($p);
echo("<br>");
//echo "longitud";
//echo $p[0];
//echo $p[1];


echo "Precio de Apertura";
echo("<br>");
echo $p[0].$p[1];

echo("</TD>");

echo("</TR>");
echo("<br>");
echo "NUEVA";

echo "Analisis en Marketwatch";
echo("<br>");
print_r($day[523]);

print '</pre>';

?>