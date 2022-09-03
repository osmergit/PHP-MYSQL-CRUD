<?php

$codigoValor = "AMZN";
$codigoValor1 = "NVDA";
$codigoValor2 = "AAPL";
$GOOGL = "GOOGL";
	//echo $codigoValor1;
//********** Aca inicia la funcion**********************
		function buscar($value)
					{
	 // echo $value;
						$ei='syzcWZmMI869eqWnjsAE';
								if (isset($_REQUEST['ei'])){
																$ei = $_REQUEST['ei'];
															}
								if (isset($_REQUEST['Codigo'])){
																  $value = $_REQUEST['Codigo'];
																}
						$request = 'http://finance.google.com/finance?q='. $value. '&ei='.$ei;
						$datos = file_get_contents($request);
						$columnas = explode("\n",$datos);
							//echo  count($columnas);
								for ($x = 0; $x < count($columnas); $x ++)
									{
										$day[]= explode(",",$columnas[$x]);	
	
									}
									return $day;
									//	echo $day[204];
					}
//********** Aca termina la funcion**********************		


 //*********************Fucion para convertir de array a string 
                               function arrayAString($miArray,$sep) {
																		echo implode($sep,$miArray);
																	}
 			
//**********************aCA TERMINA**************************	


//**********************funcion para convertir en string

  function stringVal ($value)
{
    // We use get_class_methods instead of method_exists to ensure that __toString is a public method
    if (is_object($value) && in_array("__toString", get_class_methods($value)))
        return strval($value->__toString());
    else
        return strval($value);
}
//*****************************aca Termina funcion**************************************				
 print '<pre>';

//****************** Llamada a la funcion ACA AGREGAMOS LA NUEVA ACCION************************ 
		$vector =	buscar($codigoValor1); //NVDA
		$vector1 =	buscar($codigoValor2); //AAPL
		$GOOGL1 =	buscar($GOOGL); //GOOGL
		
		//echo "por fin";
		//print_r($vector);
		// $vector[204];
		
		//print_r($vector[204]);
		
       // $myArray = print_r($vector[204]);
	  
    //Ejemplo
  
  //**********************************colores para las acciones
  
  	$prut= $GOOGL1[204]; 
	
	    $elArreglo5 = $GOOGL1[204]; 
   $convertir= arrayAString($elArreglo5,',');
							
					$mystring = $convertir;
$findme   = '-';
$pos = strpos($mystring, $findme);

if ($pos === false) {
   // echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
   
     echo '<span style="color:green; font-size:28px;">'.arrayAString($elArreglo5,',').'</span>';
    // echo '<span style="color:green; font-size:28px;">'.$prut[0].'</span>';
     	//	$pru= $day[246];
			//		echo '<span style="color:green; font-size:28px;">'.$pru[0].'</span>';
} else {
   //ho "La cadena '$findme' fue encontrada en la cadena '$mystring'";
   // echo " y existe en la posición $pos";
    echo '<span style="color:red; font-size:28px;">'.arrayAString($elArreglo5,',').'</span>';
    

			
					

		echo("</th>");
		echo("<th>");
			//			$pru= $day[246];
			//		echo '<span style="color:red; font-size:28px;">'.$pru[0].'</span>';
		
		echo("</th>");
	
	}
	
	
	
	
  
  
  
  
  
  
  //**************** Llamado a la funcion FB ************************	
	
	
	
	
	
	
	
	 echo "<br>";
		echo $GOOGL;
		echo "<br>";
	
	    $elArreglo5 = $GOOGL1[204]; 
    echo arrayAString($elArreglo5,',');
        echo " ";
       $elArreglo6 = $GOOGL1[207]; 
    echo arrayAString($elArreglo6,',');   
        
        
       $elArreglo7 = $GOOGL1[208]; 
    echo arrayAString($elArreglo7,','); 
	
	
	//********************************************************************
  
	
	//**************** Llamado a la funcion NVDA************************
	echo "<br>";
	echo $codigoValor1;
		echo "<br>";
		
	echo "<br>";
	    $elArreglo = $vector[204]; 
    echo arrayAString($elArreglo,',');
        echo " ";
       $elArreglo3 = $vector[207]; 
    echo arrayAString($elArreglo3,',');   
        
        
       $elArreglo4 = $vector[208]; 
    echo arrayAString($elArreglo4,','); 
	
	
	
	
	
	
	//***************************************** Llamado a la funcion AAPL
       // echo implode(" ; ", $myArray);
       // $lto = implode ( ,$tmp );
         print '</pre>';
      //  echo $lto;
        
       // print "<p>$tmp</p>\n";
		echo "<br>";
        echo $codigoValor2;
        echo "<br>"; 
		//print_r($vector1[204]);
		 $elArreglo = $vector1[204]; 
		echo arrayAString($elArreglo,',');
		
		$elArreglo1 = $vector1[207]; 
		echo arrayAString($elArreglo1,',');
		
		$elArreglo2 = $vector1[208]; 
		echo arrayAString($elArreglo2,',');
	//*****************************************************
	
		
	 print '</pre>';	
	 print '<pre>';	
		
					//echo $convertir[204];
			//$co= $day[204];
           //     echo $co[0].$co[1];
 // echo $co[0].$co[1] ;
  $ei='syzcWZmMI869eqWnjsAE';
  //if( $codigoValor == 'SPX' OR  $codigoValor == 'spx' )
//{
//$codigoValor = "INDEXCBOE:SPX";
//echo $codigoValor;
//}
  
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