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

<table id="ghatable" class="display table table-bordered table-stripe" cellspacing="0" width="95%">
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
     <tbody>
          <?php
          $objpersonal = new operaciones($pagina);
          $operaciones = $objpersonal->opercerradas($pagina);
		//  $operaciones = $objpersonal->opersuma($pagina);
		 
          if(sizeof($operaciones) > 0){
               foreach ($operaciones as $row){
                    ?>
                   
                    <tr>
                         <th bgcolor="#CCCCFF" ><?php echo $row['cod_oper'] ?></th>
                         <th><?php echo $row['nom_oper'] ?></th>
                         <th bgcolor="#CCCCFF"><?php echo $row['tipo_oper'] ?></th>
                         <th><?php echo $row['fecha_open'] ?></th>
                         <th bgcolor="#CCCCFF"><?php echo $row['fecha_close'] ?></th>
                         <th><?php echo $row['valor_accion'] ?></th>
                         <th bgcolor="#CCCCFF"><?php echo $row['ced_inver'] ?></th>
                         <th><?php echo $row['cant_oper'] ?></th>
                         <th bgcolor="#CCCCFF"><?php echo $row['pl'] ?></th>
                         <th bgcolor="">
                      <a href="mostrar.php?u=<?php echo $row['ced_inver'] ?>& i=<?php echo $row['cod_oper'] ?>">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="false"></span>Detalle</a>
                      
                </th>
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
					  }
	 if(($pagina + 1)<=$total_paginas) {
            echo " <li><a href='?pagina=".($pagina+1)."'>Siguiente..</a></li>";
        }					  
					  
					  
include "footer.php";
?>
 </ul>
 </nav>