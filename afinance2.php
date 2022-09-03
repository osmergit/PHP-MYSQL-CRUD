<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Documento sin título</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->














<style type="text/css">




<!--






body {
	
	background:#8ba987 url('http://www.inviertaenusa.co/nyse.jpg') no-repeat center center;
    background-size:100% 100%;
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no añadir relleno ni márgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aquí o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aquí se aplicará en cascada en la lista .nav, a no ser que escriba un selector más específico. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* la eliminación del margen superior resuelve un problema que origina que los márgenes escapen de la etiqueta div contenedora. El margen inferior restante lo mantendrá separado de los elementos de que le sigan. */
	padding-right: 15px;
	padding-left: 15px; /* la adición de relleno a los lados del elemento dentro de las divs, en lugar de en las divs propiamente dichas, elimina todas las matemáticas de modelo de cuadro. Una div anidada con relleno lateral también puede usarse como método alternativo. */
}
a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}

/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* a no ser que aplique estilos a los vínculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificación visual rápida */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */
	text-decoration: none;
}

/* ~~ este contenedor de anchura fija rodea a las demás divs~~ */
.container {
	width: 960px;
	background-color: #FFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño */
	overflow: hidden; /* esta declaración hace que .container conozca dónde terminan las columnas flotantes incluidas y las contenga */
}

/* ~~ Estas son las columnas para el diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de las divs. Los elementos situados dentro de estas divs tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

2) No se asigna margen a las columnas, ya que todas ellas son flotantes. Si es preciso añadir un margen, evite colocarlo en el lado hacia el que se produce la flotación (por ejemplo: un margen derecho en una div configurada para flotar hacia la derecha). En muchas ocasiones, puede usarse relleno como alternativa. En el caso de divs para las que deba incumplirse esta regla, deberá añadir una declaración "display:inline" a la regla de la div para evitar un error que provoca que algunas versiones de Internet Explorer dupliquen el margen.

3) Dado que las clases se pueden usar varias veces en un documento (y que también se pueden aplicar varias clases a un elemento), se ha asignado a las columnas nombres de clases en lugar de ID. Por ejemplo, dos divs de barra lateral podrían apilarse si fuera necesario. Si lo prefiere, éstas pueden cambiarse a ID fácilmente, siempre y cuando las utilice una sola vez por documento.

4) Si prefiere que la navegación esté a la derecha en lugar de a la izquierda, simplemente haga que estas columnas floten en dirección opuesta (todas a la derecha en lugar de todas a la izquierda) y éstas se representarán en orden inverso. No es necesario mover las divs por el código fuente HTML.

*/
.sidebar1 {
	float: left;
	width: 180px;
	background-color: #FFFFFF;
	padding-bottom: 10px;
}
.content {

	padding: 10px 0;
	width: 780px;
	float: left;
}

/* ~~ Este selector agrupado da espacio a las listas del área de .content ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* este relleno reproduce en espejo el relleno derecho de la regla de encabezados y de párrafo incluida más arriba. El relleno se ha colocado en la parte inferior para que el espacio existente entre otros elementos de la lista y a la izquierda cree la sangría. Estos pueden ajustarse como se desee. */
}

/* ~~ Los estilos de lista de navegación (pueden eliminarse si opta por usar un menú desplegable predefinido como el de Spry) ~~ */
ul.nav {
	list-style: none; /* esto elimina el marcador de lista */
	border-top: 1px solid #666; /* esto crea el borde superior de los vínculos (los demás se sitúan usando un borde inferior en el LI) */
	margin-bottom: 15px; /* esto crea el espacio entre la navegación en el contenido situado debajo */
}
ul.nav li {
	border-bottom: 1px solid #666; /* esto crea la separación de los botones */
}
ul.nav a, ul.nav a:visited { /* al agrupar estos selectores, se asegurará de que los vínculos mantengan el aspecto de botón incluso después de haber sido visitados */
	padding: 5px 5px 5px 15px;
	display: block; /* esto asigna propiedades de bloque al vínculo, lo que provoca que llene todo el LI que lo contiene. Esto provoca que toda el área reaccione a un clic de ratón. */
	width: 160px;  /*esta anchura hace que se pueda hacer clic en todo el botón para IE6. Puede eliminarse si no es necesario proporcionar compatibilidad con IE6. Calcule la anchura adecuada restando el relleno de este vínculo de la anchura del contenedor de barra lateral. */
	text-decoration: none;
	background-color: #CCFFFF;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */
	background-color: #FFFFFF;
	color: #99FFCC;
}

/* ~~ clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en una <br /> o div vacía como elemento final tras la última div flotante (dentro de #container) si se elimina overflow:hidden en .container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>

<script>
var myVar = setInterval(myTimer ,1000);
function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>

<script language="javascript" type="text/javascript" src="/javascript/jquery/jquery.js"></script>
<script type="text/javascript">
$(document).ready( function()
        {
        $('#auto').load('afinance.php');
        refresh();
        });

function refresh()
        {
        setTimeout( function()
                {
                $('#auto').load('afinance.php');
                refresh();
                }, 5000);
        }
</script>


</head>

<body>
<div id="auto"></div>
<div class="container">
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="#">Compañias</a></li>
      <li><a href="#">Conversion de divisas</a></li>
      <li><a href="#">Google finance</a></li>
      <li><a href="#">Yahoo Finance</a></li>
    </ul>
    <p></p>
    <p></p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1>BUSQUEDA DE ACCIONES E INDICES</h1>
    
 

<center>
<table class="w3-table w3-bordered">
<tr>
  
    
    
    <form  action="afinance.php" class=""  method="post">
  


   <div class="form-group">
	
   
    
    <input class="w3-text-teal"  type="text" name="nombr" placeholder="Digite el Symbolo" color="blue" bgcolor ="blue" size ="20">
   	<button name="boton" type="submit"><img src="buscar.jpg" width="20" height="20"><span class="gbqfi gb_6b"></span></button>
	
	
	</div>
	
	
</form>
<br>
<th>  
<?php




//<input type="submit" value="Enviar" class="btn btn-default">
  $codigoValor = strtoupper($_POST['nombr']);
  
  function stringVal ($value)
{
    // We use get_class_methods instead of method_exists to ensure that __toString is a public method
    if (is_object($value) && in_array("__toString", get_class_methods($value)))
        return strval($value->__toString());
    else
        return strval($value);
}


  
  
  
  //$codigoValor = "AMZN";
  $ei='syzcWZmMI869eqWnjsAE';
  if( $codigoValor == 'SPX' OR  $codigoValor == 'spx' )
{
$codigoValor = "INDEXCBOE:SPX";
//echo $codigoValor;
}
  
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

	
print '<pre>';
//print_r($day[238]);
echo("<tr>");
echo("<p>A script on this page starts this clock:</p>");

echo("<p id='demo'></p>");

echo("<button onclick='clearInterval(myVar)'>Stop time</button>");
echo("<th>");
echo("DATOS  DE :  " );
echo("</th>");
echo("<th>");
echo '<span style="color:Black; font-size:32px;">  '.$codigoValor .'</span>';
//echo("<TABLE class='w3-table' >");
echo("</th>");
echo("</tr>");
echo("<tr>");



if( $codigoValor == 'RUT' or $codigoValor == 'INDEXCBOE:SPX' )
	{
		//echo $codigoValor;
		echo("<th>");	
			echo "Precio Actual:";
		echo("</th>");
	echo("<th>");
	
	
	
	$pi= $day[242];
			echo '<span style="color:black; font-size:40px;">'.$pi[0].$pi[1].'</span>';	
	echo("</th>");
	
		echo("<th>");
			
		
		
					$prut= $day[245];
					$validar =$prut[0];
				//	echo $validar;
					$convertir=stringVal($validar);
				//	if (is_string($convertir) )
					
				//	{
				//	echo '<span style="color:red; font-size:28px;">'.$prut[0].'</span>';
				//	}
					
					$mystring = $convertir;
$findme   = '-';
$pos = strpos($mystring, $findme);

// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
// porque la posición de 'a' está en el 1° (primer) caracter.
if ($pos === false) {
   // echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
     echo '<span style="color:green; font-size:28px;">'.$prut[0].'</span>';
     		$pru= $day[246];
					echo '<span style="color:green; font-size:28px;">'.$pru[0].'</span>';
} else {
   //ho "La cadena '$findme' fue encontrada en la cadena '$mystring'";
   // echo " y existe en la posición $pos";
    echo '<span style="color:red; font-size:28px;">'.$prut[0].'</span>';
    

					
					
					//$numerico=floatval($convertir);
					//echo $numerico;
					//if( $numerico > 0 )
					//{
					//			echo '<span style="color:red; font-size:28px;">'.$prut[0].'</span>';
				//	} else {
				//	echo '<span style="color:green; font-size:28px;">'.$prut[0].'</span>';
					//echo $pp[0];
				//	}*//
		echo("</th>");
		echo("<th>");
						$pru= $day[246];
					echo '<span style="color:red; font-size:28px;">'.$pru[0].'</span>';
		
		echo("</th>");
	
	}
	
	
	
	
} ELSE {


		echo("<th>");
				echo "Precio Actual:";
				//echo"<font size=8>Precio Actual:</font>";
		echo("</th>");

		echo("<th>");
				$pa= $day[204];
				//echo '<span style="color:red; font-size:32px;">Precio '.$pa[0].$pa[1].'</span>';
echo '<span style="color:black; font-size:40px;">'.$pa[0].$pa[1].'</span>';
			//	echo $pa[0].$pa[1];

		echo("</th>");
		echo("<th>");
					$pp= $day[207];
					echo '<span style="color:green; font-size:28px;">'.$pp[0].'</span>';
					//echo $pp[0];
					
		echo("</th>");
		echo("<th>");
						$pu= $day[208];
					echo '<span style="color:green; font-size:28px;">'.$pu[0].'</span>';
		
		echo("</th>");
echo("</tr>");
echo("<tr>");
				echo("<th>");
						echo "Precio Min y Max 52 Sem";
						$pm=$day[242];
				echo("</th>");		
				echo("<th>");		
						echo $pm[0].$pm[1];

				echo("</th>");

				
				
echo("</TR>");	

echo("<tr>");			
				
				
				echo("<th>");
							echo "Precio de Apertura:";
				echo("</th>");
				echo("<th>");
				            $p= $day[249];
							echo $p[0].$p[1];

				echo("</th>");
echo("</TR>");
//echo("</TABLE>");

echo("<br>");


//echo "Analisis en Marketwatch";
echo("<br>");
//print_r($day[523]);

print '</pre>';

}
?>
</th>
</tr>
</table>
</center>
    
    
    
    
    <h2>La tesis alcista es robusta

Alphabet Inc ( GOOGL ) (NASDAQ: GOOG )</h2>
    <p> puede ser el único stock de tecnología mega-cap que tiene una línea de visión en cada tema de tecnología importante que viene al futuro. Podemos ver negocios claros en la nube, automóviles autodirigidos, inteligencia artificial, publicidad, streaming de video bajo demanda (YouTube), teléfonos inteligentes, altavoces inteligentes e incluso un brazo de comercio electrónico que está creciendo en silencio.

Vamos a tocar la inteligencia artificial, la nube y los automóviles autodirigidos, y luego discutir algunos de los anuncios más recientes de su evento de lanzamiento, que mostró el magnífico progreso de Google en convertir la inteligencia artificial en un negocio de hardware multifacético.</p>
    <p></p>
    <h3>Prepárese para un enorme retroceso en acciones de Apple Inc. (AAPL)</h3>
    <p>El gato está fuera de la bolsa, y parece que Apple no venderá muchos modelos de iPhone 8 este año. Eso ejerce mucha presión sobre el revolucionario (y costoso) iPhone X para llevar a cabo más allá de las expectativas, pero los retrasos en la producción y el aumento de la competencia de los teléfonos inteligentes están comenzando a nublar las perspectivas de crecimiento del teléfono más grande de Apple.

Mientras tanto, las acciones de AAPL están fuera de sus recientes máximos de $ 164. Aproximadamente una semana después de que Apple reveló los nuevos iPhones, las expectativas de los inversores se enfriaron y las acciones de AAPL arrojaron $ 50 mil millones en capitalización de mercado. En comparación,  Target Corporation (NYSE: TGT ), eBay Inc (NASDAQ: EBAY ) y  TJX Companies Inc (NYSE: TJX ) tienen topes de mercado por debajo de $ 50 mil millones.

Era un clásico "comprar el rumor, vender las noticias".

Las acciones de AAPL han rebotado desde que arrojaron esos $ 50 mil millones y muchos toros piensan que es hora de adelantarse a la explosiva demanda de iPhone X, mientras que las acciones son baratas.</p>
    <h4></h4>
    <p></p>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>
