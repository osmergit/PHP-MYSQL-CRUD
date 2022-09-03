<?Php

function buscar($value)
  {
   		$ei='syzcWZmMI869eqWnjsAE';
		$request = 'http://finance.google.com/finance?q='. $value. '&ei='.$ei ;
		
		$datos = file_get_contents($request);
		$columnas = explode('\n',$datos);
		for ($x = 0; $x < count($columnas); $x ++)
			{
				$day[]= explode(',',$columnas[$x]);	
				
			}
		
  }
  
  ?>