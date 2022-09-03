<%@LANGUAGE="JAVASCRIPT" CODEPAGE="65001"%>
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
	margin-top: 0;	 /* la eliminación del margen superior resuelve un problema que origina que los márgenes escapen del bloque contenedor. El margen inferior restante lo mantendrá separado de los elementos de que le sigan.  */
	padding-right: 15px;
	padding-left: 15px; /* la adición de relleno a los lados del elemento dentro de los bloques, en lugar de en los elementos del bloque propiamente dicho, elimina todas las matemáticas de modelo de cuadro. Un bloque anidado con relleno lateral también puede usarse como método alternativo. */
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
/* ~~ Este contenedor de anchura fija rodea a todas las demás bloques ~~ */
.container {
	width: 960px;
	background-color: #FFFFFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño  */
}
/* ~~ No se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. ~~ */
header {
	background-color: #ADB96E;
}
/* ~~ Estas son las columnas para el diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de los elementos del bloque. Los elementos situados dentro de estos bloques tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral al bloque propiamente dicho, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en el  bloque y colocar un segundo bloque dentro de éste sin anchura y el relleno necesario para el diseño deseado.

2) No se asigna margen a las columnas, ya que todas ellas son flotantes. Si es preciso añadir un margen, evite colocarlo en el lado hacia el que se produce la flotación (por ejemplo: un margen derecho en un bloque configurado para flotar hacia la derecha). En muchas ocasiones, puede usarse relleno como alternativa. En el caso de bloques para los que deba incumplirse esta regla, deberá añadir una declaración "display:inline" a la regla del elemento del bloque para evitar un error que provoca que algunas versiones de Internet Explorer dupliquen el margen.

3) Dado que las clases se pueden usar varias veces en un documento (y que también se pueden aplicar varias clases a un elemento), se ha asignado a las columnas nombres de clases en lugar de ID. Por ejemplo, dos bloques de barra lateral podrían apilarse si fuera necesario. Si lo prefiere, éstas pueden cambiarse a ID fácilmente, siempre y cuando las utilice una sola vez por documento.

4) Si prefiere que la navegación esté a la izquierda en lugar de a la derecha, simplemente haga que estas columnas floten en dirección opuesta (todas a la izquierda en lugar de todas a la derecha) y éstas se representarán en orden inverso. No es necesario mover los bloques por el código fuente HTML.

*/
.sidebar1 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 600px;
	float: left;
}
aside {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding: 10px 0;
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
	border-bottom: 1px solid #666; /* esto crea la separación de los botones  */
}
ul.nav a, ul.nav a:visited { /* al agrupar estos selectores, se asegurará de que los vínculos mantengan el aspecto de botón incluso después de haber sido visitados  */
	padding: 5px 5px 5px 15px;
	display: block; /* esto asigna propiedades de bloque al vínculo, lo que provoca que llene todo el LI que lo contiene. Esto provoca que toda el área reaccione a un clic de ratón. */
	width: 160px;  /*esta anchura hace que se pueda hacer clic en todo el botón para IE6. Puede eliminarse si no es necesario proporcionar compatibilidad con IE6. Calcule la anchura adecuada restando el relleno de este vínculo de la anchura del contenedor de barra lateral. */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */
	background-color: #ADB96E;
	color: #FFF;
}

/* ~~ El pie de página ~~ */
footer {
	padding: 10px 0;
	background-color: #CCC49F;
	position: relative;/* esto da a IE6 el parámetro hasLayout para borrar correctamente */
	clear: both; /* esta propiedad de borrado fuerza a .container a conocer dónde terminan las columnas y a contenerlas */
}
/* ~~ Clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en elemento <br /> o en un bloque vacío como elemento final tras el último bloque flotante (dentro de .container) si el pie se elimina o se saca fuera de .container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}

/*Compatibilidad con HTML 5: define nuevas etiquetas HTML 5 como display:block para que los navegadores sepan cómo procesar las etiquetas correctamente. */
header, section, footer, aside, article, figure {
	display: block;
}
-->
</style><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--></head>

<body>

<div class="container">
  <header>
    <a href="#"><img src="" alt="Insertar logotipo aquí" width="180" height="90" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a>
  </header>
  <div class="sidebar1">
    <ul class="nav">
        <li><a href="#">Vínculo uno</a></li>
        <li><a href="#">Vínculo dos</a></li>
        <li><a href="#">Vínculo tres</a></li>
        <li><a href="#">Vínculo cuatro</a></li>
    </ul>
    <aside>
      <p> Los vínculos anteriores muestran una estructura de navegación básica que emplea una lista no ordenada con estilo de CSS. Utilícela como punto de partida y modifique las propiedades para lograr el aspecto deseado. Si necesita menús desplegables, créelos empleando un menú de Spry, un widget de menú de Adobe Exchange u otras soluciones de javascript o CSS.</p>
      <p>Si desea que la navegación se sitúe a lo largo de la parte superior, simplemente mueva ul a la parte superior de la página y vuelva a crear el estilo.</p>
    </aside>
  <!-- end .sidebar1 --></div>
  <article class="content">
    <h1>Instrucciones</h1>
    <section>
     <h2>Cómo utilizar este documento</h2>
      <p>Tenga en cuenta que la CSS para estos diseños cuenta con numerosos comentarios. Si realiza la mayor parte de su trabajo en la vista Diseño, eche un vistazo al código para obtener sugerencias sobre cómo trabajar con la CSS para diseños fijos. Puede quitar estos comentarios antes de lanzar el sitio. Para obtener más información sobre las técnicas usadas en estos diseños CSS, lea este artículo en el Centro de desarrolladores de Adobe: <a href="http://www.adobe.com/go/adc_css_layouts_es">http://www.adobe.com/go/adc_css_layouts_es</a>.</p>
    </section>
    <section>
      <h2>Método de borrado</h2>
      <p>Dado que todas las columnas son flotantes, este diseño usa una declaración clear:both en la regla footer.  Esta técnica de borrado fuerza a .container a conocer dónde terminan las columnas con el fin de mostrar cualquier borde o color de fondo que coloque en .container. Si su diseño exige la eliminación de .footer de .container, deberá usar un método de borrado diferente. Lo más fiable es añadir un &lt;br class=&quot;clearfloat&quot; /&gt; o &lt;div  class=&quot;clearfloat&quot;&gt;&lt;/div&gt; después de la última columna flotante (pero antes del cierre de .container). Esto proporcionará el mismo efecto de borrado. </p>
    </section>
    <section>
      <h2>Sustitución de logotipo</h2>
      <p>Se ha utilizado un marcador de posición de imagen en el header de este diseño, en el que lo más probable es que desee colocar un logotipo. Se recomienda quitar el marcador de posición y reemplazarlo por su propio logotipo vinculado. </p>
      <p>Tenga en cuenta que si utiliza el inspector de propiedades para navegar hasta la imagen de su logotipo empleando el campo Origen (en lugar de quitar y reemplazar el marcador de posición), deberá quitar el fondo en línea y mostrar las propiedades. Estos estilos en línea sólo se utilizan para hacer que el marcador de posición del logotipo aparezca en los navegadores para fines de demostración. </p>
      <p>Para quitar los estilos en línea, asegúrese de que el panel Estilos CSS está configurado como Actual. Seleccione la imagen y, en la sección Propiedades del panel Estilos CSS, haga clic con el botón derecho del ratón y elimine las propiedades de visualización y de fondo. (Por supuesto que siempre podrá ir directamente al código y eliminar allí los estilos en línea de la imagen o el marcador de posición.)</p>
    </section>
  <!-- end .content --></article>
  <aside>
    <h4>Fondos</h4>
    <p>Por naturaleza, el color de fondo de cualquier elemento del bloque sólo se muestra a lo largo del contenido. Si desea usar una línea divisoria en lugar de un color, coloque un borde en el lado del bloque .content (pero sólo en el caso de que siempre vaya a tener más contenido).</p>
  </aside>
  <footer>
    <p>Este footer contiene la declaración position:relative; para dar a Internet Explorer 6 hasLayout para footer y provocar que se borre correctamente. Si no es necesario proporcionar compatibilidad con IE6, puede quitarlo.</p>
    <address>
      Contenido de dirección
    </address>
  </footer>
  <!-- end .container --></div>
</body>
</html>
