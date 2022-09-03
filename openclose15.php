<?php session_start();


	echo $_SESSION["usuario"];
		if(!isset($_SESSION["usuario"])){
		header("Location:login.php");
    }
	
     
require("class/personal.php");
include "header.php";
require_once 'class/conexion.php';
echo "paso por aca 2i2";
//:::::::::::::::::::::::::::::
$tamagno_paginas=3;
if (isset($_GET["pagina"])){
	if ($_GET["pagina"]==2){
		$pagina=2;
	//$consulta = "SELECT *  FROM operaciones where estado_oper = 'abierta' limit 0,3 ";
		echo "paso por aca 2t2";
	}else{
		$pagina=$_GET["pagina"];
	}
}else{
$pagina=1;
}
$tamagno_paginas=3;
		$empezar_desde=($pagina-1)*$tamagno_paginas;
		
	echo "paso por aca 22";
		$db_host="inviertaenusa.co";

$db_usuario= "invierta_base";

$db_contra="bolsa2017*";
$bd = "invierta_bolsa";

$conexion1 = mysqli_connect($db_host, $db_usuario,$db_contra,$bd);
$consulta = "SELECT * FROM operaciones where estado_oper = 'cerrada'";
$resultados = mysqli_query($conexion1, $consulta);
echo "paso por aca";
		
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
        
        <title>ZONA DE USUARIOS REGISTRADOS</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
		
		

        
        
        
    </head>
    
    <body>


   <center>
  
            <ul class="fancyNav">
                <li id="home"><a href="adminopabiertas.php" class="homeIcon">INICIO</a></li>
                <li id="news"><a href="operabiertas1.php">Abiertas</a></li>
                <li id="about"><a href="openclose.php">Cerradas</a></li>
                <li id="services"><a href="#services">Personal</a></li>
                <li id="contact"><a href="logout.php">Salir</a></li>
            </ul>
			
 </center>
 

<div class="datagrid">
<center><table>
     <thead>
          <tr>
               <th>Id</th>
               <th>Nombre</th>
               <th>Tipo</th>
               <th>Fecha Open</th>
               <th>Fecha Cierre</th>
               <th>Vlr Acc</th>
               <th>Ced Inver</th>
               <th>NoContr</th>
               <th>Perd-Gana</th>
               <th>Detalle</th>
          </tr>
     </thead>

     
     
	 
     <tbody>
     
<?php
          $objpersonal = new operaciones($pagina);
          $operaciones = $objpersonal->opercerradas($pagina);
		//  $operaciones = $objpersonal->opersuma($pagina);
		 
          if(sizeof($operaciones) > 0){
               foreach ($operaciones as $row){
                    ?>
                   
                    <tr>
                         <td><?php echo $row['cod_oper'] ?></td>
                         <td class="alt"><?php echo $row['nom_oper'] ?></td>
                         <td><?php echo $row['tipo_oper'] ?></td>
                         <td class="alt"><?php echo $row['fecha_open'] ?></td>
                         <td><?php echo $row['fecha_close'] ?></td>
                         <td class="alt"><?php echo $row['valor_accion'] ?></td>
                         <td><?php echo $row['ced_inver'] ?></td>
                         <td class="alt"><?php echo $row['cant_oper'] ?></td>
                         <td><?php echo $row['pl'] ?></td>
                         <td class="alt">
                      <a href=" mostrar.php?u=<?php echo $row['ced_inver'] ?> & i= <?php echo $row['cod_oper'] ?>">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="false"></span>Detalle</a>
                      
                </td>
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
					  
					  
//include "footer.php";
?>
 </ul>

    
     </p>
    <h3><!-- end .content --></h3>
  
  
</th>
  
  </tr>
    </tbody>
	 </div>
</table></center>
   



   

            
    </body>
</html>
