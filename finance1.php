<!DOCTYPE HTML>

<HTML>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
    <style>
    table{
        background:#8ba987 url('http://www.inviertaenusa.co/nyse.jpg') no-repeat center center;
        background-size:100% 100%;
    }
    </style>
	
</head>

<body background="nyse.jpg">
<center>
<table width="400" height="300" border="2">
<tr>
<th>

<form  action="finance1.php" class=""  method="post">
  


   <div class="form-group">
	
    <label></label>
    
    <input class="sampletext"  type="text" name="nombr" placeholder="Digite el Symbolo a Consultar" color="blue" bgcolor ="blue" >
    <span class="icon fa-user"></span></div>
	
	

<div ><input type="submit" value="Enviar" class="btn btn-default">
</div>

</form>


<?php

  $codigoValor = $_POST['nombr'];
  //$codigoValor = "AMZN";
  
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
echo("DATOS  DE :  " . $codigoValor );

//echo("<TABLE >");

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
echo("<br>");
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
//echo("</TABLE>");

echo("<br>");


//echo "Analisis en Marketwatch";
echo("<br>");
//print_r($day[523]);

print '</pre>';

?>
</th>
</tr>
</table>
</center>

</body>
</HTML>