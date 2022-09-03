<?php session_start();
	echo $_SESSION["usuario"];
		if(!isset($_SESSION["usuario"])){
		header("Location:login.php");
    }
	
     
require("class/personal.php");
include "header.php";
require_once 'class/conexion.php';

//:::::::::::::::::::::::::::::
$tamagno_paginas=3;
if (isset($_GET["pagina"])){
	if ($_GET["pagina"]==2){
		$pagina=2;
	//$consulta = "SELECT *  FROM operaciones where estado_oper = 'abierta' limit 0,3 ";	
		
	}else{
		$pagina=$_GET["pagina"];
	}
}else{ 
$pagina=1;
}
$tamagno_paginas=3;
		$empezar_desde=($pagina-1)*$tamagno_paginas;
		
		
		$db_host="localhost";

$db_usuario= "osmer";

$db_contra="123456";
$bd = "bolsa";

$conexion1 = mysqli_connect($db_host, $db_usuario,$db_contra,$bd);
$consulta = "SELECT *  FROM operaciones where estado_oper = 'cerrada'";
$resultados = mysqli_query($conexion1, $consulta);
		
		
     //   $resultado = mysqli->query("SELECT *  FROM operaciones where estado_oper = 'abierta' limit $empezar_desde,$tamagno_paginas");

//$numero_filas = mysql_num_rows($resultado);
//operaciones where estado_oper = 'abierta' limit $empezar_desde,$tamagno_paginas
 $numero_filas = mysqli_num_rows($resultados);
//	$numero_filas = $resultado->num_rows;
 //$resultado = $this->mysqli->query($consulta)
   $total_paginas = ceil( $numero_filas/$tamagno_paginas);

//:::::::::::::::::::::::::::::::::::


	
	
	
	
	 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Documento sin título</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #FFFF66;
	margin: 0;
	padding: 0;
	color: #000;
	background-image: url(dinero.jpg);
	background-repeat: repeat;
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
	color: #CC0033;
	text-decoration: none; /* a no ser que aplique estilos a los vínculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificación visual rápida */
}
a:visited {
	color: #00FF33;
	text-decoration: none;
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */
	text-decoration: none;
}

/* ~~ este contenedor rodea a todas las demás divs, lo que les asigna su anchura basada en porcentaje ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* puede que sea conveniente una anchura máxima (max-width) para evitar que este diseño sea demasiado ancho en un monitor grande. Esto mantiene una longitud de línea más legible. IE6 no respeta esta declaración. */
	min-width: 780px;/* puede que sea conveniente una anchura mínima (min-width) para evitar que este diseño sea demasiado estrecho. Esto permite que la longitud de línea sea más legible en las columnas laterales. IE6 no respeta esta declaración. */
	background-color: #FFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño. No es necesario si establece la anchura de .container en el 100%. */
}

/* ~~ no se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. Contiene un marcador de posición de imagen que debe sustituirse por su propio logotipo vinculado ~~ */
.header {
	background-color: #6F7D94;
}

/* ~~ Estas son las columnas para el diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de las divs. Los elementos situados dentro de estas divs tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

2) No se asigna margen a las columnas, ya que todas ellas son flotantes. Si es preciso añadir un margen, evite colocarlo en el lado hacia el que se produce la flotación (por ejemplo: un margen derecho en una div configurada para flotar hacia la derecha). En muchas ocasiones, puede usarse relleno como alternativa. En el caso de divs para las que deba incumplirse esta regla, deberá añadir una declaración "display:inline" a la regla de la div para evitar un error que provoca que algunas versiones de Internet Explorer dupliquen el margen.

3) Dado que las clases se pueden usar varias veces en un documento (y que también se pueden aplicar varias clases a un elemento), se ha asignado a las columnas nombres de clases en lugar de ID. Por ejemplo, dos divs de barra lateral podrían apilarse si fuera necesario. Si lo prefiere, éstas pueden cambiarse a ID fácilmente, siempre y cuando las utilice una sola vez por documento.

4) Si prefiere que la navegación esté a la derecha en lugar de a la izquierda, simplemente haga que estas columnas floten en dirección opuesta (todas a la derecha en lugar de todas a la izquierda) y éstas se representarán en orden inverso. No es necesario mover las divs por el código fuente HTML.

*/
.sidebar1 {
	float: left;
	width: 20%;
	background-color: #FFF;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 80%;
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
	text-decoration: none;
	background-color: #6699CC;
	color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */
	background-color: #00CC33;
	color: #FFF;
}

/* ~~ El pie de página ~~ */
.footer {
	padding: 10px 0;
	background-color: #6699CC;
	position: relative;/* esto da a IE6 hasLayout para borrar correctamente */
	clear: both; /* esta propiedad de borrado fuerza a .container a conocer dónde terminan las columnas y a contenerlas */
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
.clearfloat { /* esta clase puede situarse en una <br /> o div vacía como elemento final tras la última div flotante (dentro de #container) si #footer se elimina o se saca fuera de #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
body,td,th {
	color: #000;
}
a:hover {
	text-decoration: underline;
	color: #0066FF;
}
a:active {
	text-decoration: none;
	color: #FF3366;
}
-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* este margen negativo de 1 px puede situarse en cualquiera de las columnas de este diseño con el mismo efecto corrector. */
ul.nav a { zoom: 1; }  /* la propiedad de zoom da a IE el desencadenante hasLayout que necesita para corregir el espacio en blanco extra existente entre los vínculos */
</style>
<![endif]--></head>

<body bgcolor="#00FF33">

 <div class="container">
  <div class="header"><a href="#"><img src="images.jpg" alt="Insertar logotipo aquí" name="Insert_logo" width="1260" height="200" id="Insert_logo" style="background-color: #8090AB; display:block;" /></a> 
    <!-- end .header --></div>
 <div style="font-size:16px;">
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="visualizar.php">Operaciones Abiertas</a></li>
      <li><a href="misoperaciones.php">Operaciones Cerradas</a></li>
      <li><a href="visualizar.php">Mi Cuenta</a></li>
      <li><a href="login.php">Ingresar</a></li>
      <li><a href="logout.php">Cerrar Sesión</a></li>
       
    </ul>
   
  

    
    
    
    
  
    <!-- end .sidebar1 --></div></div>
  
    <h1>&nbsp;</h1>
    
    <p>

<div style="font-size:8px;">
<div style=" font-family: Georgia, 'Arial', serif;">
<table id="ghatable" class="display table table-bordered table-stripe" cellspacing="0" width="100%">
     <thead>
          <tr>
               <th bgcolor="#CCCCFF">Id</th>
               <th>Nombre</th>
               <th bgcolor="#CCCCFF">Tipo</th>
               <th>Fecha Open</th>
               <th bgcolor="#CCCCFF">Fecha Cierre</th>
               <th>Vlr Acc</th>
               <th bgcolor="#CCCCFF">Ced Inver</th>
               <th>NoContr</th>
               <th bgcolor="#CCCCFF">Perd-Gana</th>
             
          </tr>
     </thead>
	 </div>
	 <div style=" font-family: Georgia, 'Arial', serif;">
     <tbody>
          <?php
          $objpersonal = new operaciones($pagina);
          $operaciones = $objpersonal->opercerradas($pagina);
		//  $operaciones = $objpersonal->opersuma($pagina);
		 
          if(sizeof($operaciones) > 0){
               foreach ($operaciones as $row){
                    ?>
                   
                    <tr >
                         <th bgcolor="#CCCCFF"  ><?php echo $row['cod_oper'] ?></th>
                         <th ><?php echo $row['nom_oper'] ?></th>
                         <th bgcolor="#CCCCFF" ><?php echo $row['tipo_oper'] ?></th>
                         <th><?php echo $row['fecha_open'] ?></th>
                         <th bgcolor="#CCCCFF" ><?php echo $row['fecha_close'] ?></th>
                         <th><?php echo $row['valor_accion'] ?></th>
                         <th bgcolor="#CCCCFF" ><?php echo $row['ced_inver'] ?></th>
                         <th><?php echo $row['cant_oper'] ?></th>
                         <th bgcolor="#CCCCFF" ><?php echo $row['pl'] ?></th>
                         <th bgcolor="" >
                      <a href="mostrar.php?u=<?php echo $row['ced_inver'] ?>& i=<?php echo $row['cod_oper'] ?>">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="false"></span>Detalle</a>
                      
                </th>
                    </tr>
                    <?php
               }
          }
          ?>
     </tbody>
	 </div>
</table>
<nav aria-label="Page navigation" class="text-center">
     <ul class="pagination">
       
<?php

if(($pagina - 1) > 0) {
            echo "<li><a href='?pagina=".($pagina-1)."'>..Anterior</a></li> ";
        }

  for($i=1; $i<=$total_paginas; $i++){
			  echo "<li><a href='?pagina=" .$i ."'>".$i."</a></li>";
					  }
	 if(($pagina + 1)<=$total_paginas) {
            echo " <li><a href='?pagina=".($pagina+1)."'>Siguiente..</a></li>";
        }					  
					  
					  
include "footer.php";
?>
 </ul>
 </nav>
    
     </p>
    <h3><!-- end .content --></h3>
  </div>
  </div>
  <div class="footer">
    <p>Este .footer contiene la declaración position:relative; para dar a Internet Explorer 6 hasLayout para .footer y provocar que se borre correctamente. Si no es necesario proporcionar compatibilidad con IE6, puede quitarlo.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
