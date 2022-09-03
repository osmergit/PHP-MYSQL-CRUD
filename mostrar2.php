<?php
require("class/personal.php");
require("class/paises.php");
require("class/cargos.php");
include "header.php";



if(isset($_GET['u'])){
		if(isset($_POST['bts'])){
		$per = new operaciones();
		$per->update();
		$per->addcapital();
		//$per->opersuma();
		//$per->opercerradas();

	
	}



	$db_host="localhost";

$db_usuario= "osmer";

$db_contra="123456";
$bd = "bolsa";

$conexion1 = mysqli_connect($db_host, $db_usuario,$db_contra,$bd);
$consulta = "SELECT *  FROM operaciones where estado_oper = 'cerrada'";
$resultados = mysqli_query($conexion1, $consulta);


	
$obj = new operaciones();
		
$persona = $obj->opersuma($_GET["u"]);
	?>
	<a href="open.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Regresar</a>
	<p><br/></p>
	<div class="panel panel-default">
		<div class="panel-body">
<table>
<tr>
			<form role="form" method="post">
	<td>			<input type="hidden" value="<?php echo $persona[0]['cod_oper']; ?>" name="id">
                <div class="form-group">
					<label for="ci">Cedula del invercionista</label>
					<input type="text" class="form-control" name="ci" id="ci" value="<?php echo $persona[0]['ced_inver']; ?>">
				</div>
                </td>
<td>
				<div class="form-group">
					<label for="nm">Nombre de la operacion</label>
					<input type="text" class="form-control" name="nm" id="nm" value="<?php echo $persona[0]['nom_oper']; ?>">
				</div>
		</td>
        </tr>
        <tr>
        <td>	
 <div class="form-group">
					<label for="fo">Fecha de apertura</label>
					<input type="text" class="form-control" name="fo" id="fo" value="<?php echo $persona[0]['fecha_open']; ?>">
				</div>
                
                </td>
                
                <td>
				<div class="form-group">
					<label for="fc">Fecha de cierre</label>
					<input type="text" class="form-control" name="fc" id="fc" value="<?php echo $persona[0]['fecha_close']; ?>">
				</div>
                </td>
</tr>
                <tr>
                <td>
				<div class="form-group">
					<label for="ho">Hora Apertura</label>
					<input type="text" class="form-control" name="ho" id="ho" value="<?php echo $persona[0]['hora_open']; ?>">
				</div>
</td>
<td>
				<div class="form-group">
					<label for="hc">Hora de Cierre</label>
					<input type="text" class="form-control" name="hc" id="hc" value="<?php echo $persona[0]['hora_close']; ?>">
				</div>
</td>
</tr>
<td>
              <div class="form-group">
					<label for="pl">Valor PL</label>
					<input type="text" class="form-control" name="pl" id="pl" value="<?php echo $persona[0]['pl']; ?>">
				</div>
  </td>
  <td>
                <div class="form-group">
					<label for="pldia">Valor PL Día</label>
					<input type="text" class="form-control" name="pldia" id="pldia" value="<?php echo $persona[0]['pldia']; ?>">
				</div>
		</td>		
             <td>   
                <div class="form-group">
					<label for="ac">Estado Operacion</label>
					<select class="form-control" id="ac" name="ac">
						<?php
						if($persona[0]['estado_oper'] == "cerrada"){
							?>
							<option value="abierta" selected="selected">Abierta</option>
							<?php
						}else{
							?>
							<option value="abierta">Abierta</option>
							<?php
						}

						if($persona[0]['estado_oper'] == "cerrada"){
							?>
							<option value="cerrada" selected="selected">Cerrada</option>
							<?php
						}else{
							?>
							<option value="cerrada">Cerrada</option>
							<?php
						}
						?>

					</select>
				</div>                
                
                </td>
                </tr>
                <tr>
			
				<button type="submit" name="bts" class="btn btn-default">Actualizar</button>
                
                </tr>
			</form>
            
            </table>
			<?php
		}
		include "footer.php";
		?>
