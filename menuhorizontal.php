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
 {
	margin:0;
	padding:0;
}

/*EN EL VIDEO HAY UN ERROR POR EL CUAL NO SE VISUALIZA EN GOOGLE CHROME,
EL CÓDIGO A CONTINUACIÓN YA ESTA CORREGIDO*/


header {
	margin-top:10px;
    width: 100%;
    overflow: hidden;
    height: 150px;
    position: relative;
}
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #FFFF66;
	margin: 0;
	padding: 0;
	color: #000;
	background-image: url(dinero.jpg);
	background-repeat: repeat;
}

nav {
    top:-20px;
    position: absolute;
    left:0;
    right:0;
	margin:20px auto;
	max-width:1000px;
	width:90%;
}

nav ul {
	list-style:none;
}

nav > ul {
	display:table;
	/*Quitamos el overflow hidden que estaba aqui*/
	width:100%;
	background:#FFF;
	position:relative;
}

nav > ul li {
	display:table-cell;
}

/*Sub-menu*/
nav > ul > li:hover > ul {
	display:block;
	height:100%;
}

nav > ul > li > ul {
	display:block;
	position:absolute;
	background:#000;
	left:0;
	right:0;
	overflow:hidden;
	height:0%;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-ms-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

nav > ul li a {
	color:#fff;
	display:block;
	line-height:20px;
	padding:20px;
	position: relative;
	text-align:center;
	text-decoration:none;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-ms-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

nav > ul > li > ul > li a:hover {
	background:#6699CC;
}

nav > ul > li > a span {
	background:#174459;
	display:block;
	height:100%;
	width:100%;
	left:0;
	position:absolute;
	top:-55px;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-ms-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

nav > ul > li > a span .icon {
	display:block;
	line-height:60px;
}

nav > ul > li > a:hover > span {
	top:0;
}

/*Colores*/
nav ul li a .primero {
	background:#00CC33;
}

nav ul li a .segundo {
	background:##6699CC;
}

nav ul li a .tercero {
	background:#000;
}

nav ul li a .cuarto {
	background:#174459;
}

nav ul li a .quinto {
	background:#37a4d9;
}
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* este margen negativo de 1 px puede situarse en cualquiera de las columnas de este diseño con el mismo efecto corrector. */
ul.nav a { zoom: 1; }  /* la propiedad de zoom da a IE el desencadenante hasLayout que necesita para corregir el espacio en blanco extra existente entre los vínculos */
</style>
<![endif]--></head>
<body >

 <div class="container">
  <div class="header"><a href="#"><img src="images.jpg" alt="Insertar logotipo aquí" name="Insert_logo" width="1260" height="200" id="Insert_logo" style="background-color: #8090AB; display:block;" /></a> 
    <!-- end .header --></div></div>
	<header>
		<nav>
			<ul>
				<li><a href="login.php"><span class="primero"><i class="icon icon-house"></i></span>Inicio</a></li>
				<li><a href="#"><span class="segundo"><i class="icon icon-tag"></i></span>Categorias</a>
					<ul>
						<li><a href="visualizar.php">Operaciones Abiertas</a></li>
						<li><a href="menuhorizontal.php">Operaciones Cerradas</a></li>
						<li><a href="#">Mi cuenta</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="logout.php">Cerrar Sesión</a></li>
					</ul>
				</li>
				<li><a href="#"><span class="tercero"><i class="icon icon-suitcase"></i></span>Servicios</a></li>
				<li><a href="#"><span class="cuarto"><i class="icon icon-text"></i></span>Acerca de</a></li>
				<li><a href="#"><span class="quinto"><i class="icon icon-mail"></i></span>Contacto</a></li>
			</ul>
		</nav>
	</header>

	<div style="font-size:8px;">
<div style=" font-family: Georgia, 'Arial', serif;">
<table id="ghatable" class="display table table-bordered table-stripe" cellspacing="0" width="100%" bgcolor="#CCCCFF">
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
		  		  // aca inicia
          ?>
		  <tr>
 <th>
		  
     <ul  class="pagination" ">
       
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

    
     </p>
    <h3><!-- end .content --></h3>
  </div>
  </div>
</th>
  
  </tr>
     </tbody>
	 </div>
</table>

	
  <div class="footer">
  
    <p>Este .footer contiene la declaración position:relative; para dar a Internet Explorer 6 hasLayout para .footer y provocar que se borre correctamente. Si no es necesario proporcionar compatibilidad con IE6, puede quitarlo.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>