<?php

	session_start();
	echo $_SESSION["usuario"];
		if(!isset($_SESSION["usuario"])){
		header("Location:login.php");
    }
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
		
		
		$db_host="localhost";

$db_usuario= "osmer";

$db_contra="123456";
$bd = "bolsa";

$conexion1 = mysqli_connect($db_host, $db_usuario,$db_contra,$bd);
$consulta = "SELECT *  FROM operaciones where estado_oper = 'abierta'";
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
     <a href="create.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Operación Nueva</a>
</p>
<table id="ghatable" class="display table table-bordered table-stripe" cellspacing="0" width="100%">
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
              
          </tr>
     </thead>
     <tbody>
          <?php
		  
		  
		  //................
		  
	
//...........................
		  
		  
		  
		  
		  
		  
		  
          $objpersonal = new operaciones($pagina);
          $operaciones = $objpersonal->operaciones($pagina);
          if(sizeof($operaciones) > 0){
               foreach ($operaciones as $row){
                    ?>
                    <tr>
                         <td><?php echo $row['cod_oper'] ?></td>
                         <td><?php echo $row['nom_oper'] ?></td>
                         <td><?php echo $row['tipo_oper'] ?></td>
                         <td><?php echo $row['fecha_open'] ?></td>
                         <td><?php echo $row['hora_open'] ?></td>
                         <td><?php echo $row['valor_accion'] ?></td>
                         <td><?php echo $row['vlr_oper'] ?></td>
                         <td><?php echo $row['cant_oper'] ?></td>
                         <td><?php echo $row['com_oper'] ?></td>
                         <td>
                      <a href="update.php?u=<?php echo $row['cod_oper'] ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                         </td>
                         <td>
                 <a onclick="return confirm('Desea eliminar el registro')" href="delete.php?d=<?php echo $row['cod_oper'] ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a>
                         </td>
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