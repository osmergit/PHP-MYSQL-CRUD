<?php
$codigoValor = "GOOGL";

   if (isset($_REQUEST['ei'])){

	$ei = $_REQUEST['ei'];

	}

 if (isset($_REQUEST['Codigo'])){

	$codigoValor = $_REQUEST['Codigo'];

	}

$request = 'http://finance.google.com/finance?q='. $codigoValor. '&ei='.$ei;



//$request = 'http://finance.google.com/finance?q='. $codigoValor. '&ei=syzcWZmMI869eqWnjsAE';

$datos = file_get_contents($request);

$columnas = explode("\n",$datos);

for ($x = 0; $x < count($columnas); $x ++)

{

$day[]= explode(",",$columnas[$x]);	

	

}





//print_r($day[238]);

echo("<tr>");



	$pa= $day[204];



echo("<th>");

//echo("DATOS  DE :  " );

echo("</th>");

echo("<th>");

echo '<span style="color:Black; font-size:20px;"> '.$codigoValor .'</span>';

echo("  ");

echo("</th>");

echo("<th>");

echo '<span style="color:black; font-size:18px;">'.$pa[0].$pa[1].'</span>';

//echo("<TABLE class='w3-table' >");

echo("</th>");



		echo("<th>");

					$pp= $day[207];

					echo '<span style="color:green; font-size:15px;">'.$pp[0].'</span>';

					//echo $pp[0];

					

		echo("</th>");

		echo("<th>");

						$pu= $day[208];

					echo '<span style="color:green; font-size:15px;">'.$pu[0].'</span>';

		

		echo("</th>");





echo("</tr>");

echo("<tr>");

print "</pre>";

?>