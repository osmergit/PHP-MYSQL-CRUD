<?php
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
		
		
		$db_host="inviertaenusa.co";

$db_usuario= "invierta_base";

$db_contra="bolsa2017*";
$bd = "invierta_bolsa";

$conexion1 = mysqli_connect($db_host, $db_usuario,$db_contra,$bd);
$consulta = "SELECT * FROM operaciones where estado_oper = 'abierta'";
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

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">		
		
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
        
        <title>ZONA DE USUARIOS REGISTRADOS</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!-- Including the Lobster font from Google's Font Directory -->
     
        
        <!-- Enabling HTML5 support for Internet Explorer -->
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

        <header>
<div class="datagrid">
    <center><font size = 4  color="006699">  INVERSIONISTAS BOLSA DE VALORES USA ZONA DE USUARIOS REGISTRADOS </font></center>
	</div>		
			  </header>
			  <p>&nbsp</p>	
        
   <center>
  
            <ul class="fancyNav">
                <li id="home"><a href="#home" class="homeIcon">INICIO</a></li>
                <li id="news"><a href="operabiertas.php">Abiertas</a></li>
                <li id="about"><a href="openclose.php">Cerradas</a></li>
                <li id="services"><a href="#services">Personal</a></li>
                <li id="contact"><a href="logout.php">Salir</a></li>
            </ul>
			
 </center>
 


	 <div >
     <tbody>
	 <div class="datagrid">
	 <center>
<table class="w3-table-all w3-hoverable">
     <thead>
          <tr>
               <th bgcolor="#CCCCFF">Id</th>
               <th>Nombre</th>
               <th bgcolor="#CCCCFF">Tipo</th>
               <th>Fecha Open</th>
               <th bgcolor="#CCCCFF">Hora Open</th>
               <th>Vlr Acc</th>
               <th bgcolor="#CCCCFF">Vlr Op</th>
               <th>NoContr</th>
               <th bgcolor="#CCCCFF">Comision</th>
              <th>Dias Op</th>
          </tr>
     </thead>
     <tbody>
          <?php
          $objpersonal = new operaciones($pagina);
          $operaciones = $objpersonal->operaciones($pagina);
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
                        <td class="alt"><?php echo $row['vlrop_oper'] ?></td>
                
                    </tr>
                    <?php
               }
          }
          ?>

     </tbody>
	 
</table>

</center>
</div>
</div>

<div class="w3-container w3-center">

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
					  
					  

?>
 </ul>
 
  
 
</div>

 
        <footer><?php include "footer.php";?></footer>
            
    </body>
</html>

 
 
