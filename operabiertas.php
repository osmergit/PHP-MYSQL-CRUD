<?php session_start();
	$usuario = $_SESSION["usuario"];
 echo $usuario ;
		if(!isset($_SESSION["usuario"])){
		header("Location:login.php");
    } ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Documento sin título</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->

 <link rel="stylesheet" href="assets/css/styles.css" />
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
 

 
 
 
</head>

<body>

<header >
<div>
    <center><font  size = 5 color = #FFF >  INVERSIONISTAS BOLSA DE VALORES USA ZONA DE ADMINISTRACION </font></center>
	</div>

<p>&nbsp</p>
			  </header>

    <center>

            <ul class="fancyNav">
                <li id="home"><a href="zonausuarios.php" class="homeIcon">Inicio</a></li>
                <li id="news"><a href="operabiertas.php">Abiertas</a></li>
                <li id="about"><a href="openclose.php">Cerradas</a></li>
                <li id="services"><a href="capital.php">Capital</a></li>
                <li id="contact"><a href="logout.php">Salir</a></li>
            </ul>

 </center>
  <div class="content">

    <p>
<?php


require("class/personal.php");
include "header.php";
//require_once 'class/conexion.php';
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
	//$pagina=1;
		$empezar_desde=($pagina-1)*$tamagno_paginas;


		$db_host="inviertaenusa.co";

$db_usuario= "invierta_base";

$db_contra="bolsa2017*";
$bd = "invierta_bolsa";

$conexion1 = mysqli_connect($db_host, $db_usuario,$db_contra,$bd);
$consulta = "SELECT *  FROM operaciones where estado_oper = 'abierta' and ced_inver = $usuario";
$resultados = mysqli_query($conexion1, $consulta);


     //   $resultado = mysqli->query("SELECT *  FROM operaciones where estado_oper = 'abierta' limit $empezar_desde,$tamagno_paginas");

//$numero_filas = mysql_num_rows($resultado);
//operaciones where estado_oper = 'abierta' limit $empezar_desde,$tamagno_paginas
 $numero_filas = mysqli_num_rows($resultados);
//	$numero_filas = $resultado->num_rows;
 //$resultado = $this->mysqli->query($consulta)
   $total_paginas = ceil( $numero_filas/$tamagno_paginas);



?>
<p>
 <a href="logout.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Cerrar Sesión</a>
</p>
 <p>

</p>

<div class="datagrid">
<center>
<table class="w3-table-all w3-hoverable">
     <thead>
          <tr>
               <th>Id</th>
               <th>Nombre</th>
               <th>Tipo</th>
               <th>Fecha Open</th>
               <th>Hora Open</th>
               <th>Vlr Accion</th>
               <th>Vlr Operacion</th>
               <th>Contratos Negociados</th>
               <th>Comision</th>
			   <th>P/L Día</th>

          </tr>
     </thead>
     <tbody>
          <?php


		  //................


//...........................







          $objpersonal = new operaciones($pagina);
          $operaciones = $objpersonal->operaciones2($pagina,$usuario);
          if(sizeof($operaciones) > 0){
               foreach ($operaciones as $row){
                    ?>
                    <tr class="w3-hover-light-blue">
                         <td><?php echo $row['cod_oper'] ?></td>
                         <td class="alt"><?php echo $row['nom_oper'] ?></td>
                         <td><?php echo $row['tipo_oper'] ?></td>
                         <td class="alt"><?php echo $row['fecha_open'] ?></td>
                         <td><?php echo $row['hora_open'] ?></td>
                         <td class="alt"><?php echo $row['valor_accion'] ?></td>
                         <td><?php echo $row['vlr_oper'] ?></td>
                         <td class="alt"><?php echo $row['cant_oper'] ?></td>
                         <td><?php echo $row['com_oper'] ?></td>
						  <td><?php echo $row['pldia'] ?></td>

                                          </tr>
                    <?php
               }
          }
          ?>





     </tbody>
</table>
 <nav aria-label="Page navigation" class="text-center">
     <ul class="pagination">
<?php
 if(($pagina - 1) > 0) {
            echo "<li><a href='?pagina=".($pagina-1)."'>..Anterior</a></li> ";
        }


 		  for($i=1; $i<=$total_paginas; $i++){
			  echo "<li><a href='?pagina=" .$i ."'>".$i."</a></li>";
			 // $operaciones = $objpersonal->operaciones(i);
		  }

 if(($pagina + 1)<=$total_paginas) {
            echo " <li><a href='?pagina=".($pagina+1)."'>Siguiente..</a></li>";
        }
		include "footer.php";
?>
  </ul>
 </nav>
       <h3><!-- end .content --></h3>
  </div>
  <div align="right"></div>
  <div class="footer">

    <!-- end .footer --></div>

</body>
</html>
