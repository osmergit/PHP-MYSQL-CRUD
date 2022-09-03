<html>
<head>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="css/estilo.css">	
<link rel="stylesheet" href="datepicker/datepicker.css">	


</head>
<body>


<?php
require("class/personal.php");
require("class/paises.php");
require("class/cargos.php");
include "header.php";



?>
<a href="open.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Regresar</a>
<?php
if(isset($_POST['bts'])){
	if($_POST['gd']!=null && $_POST['cp']!=null  && $_POST['tl']!=null && $_POST['to']!=null && $_POST['fo']!=null && $_POST['ho']!=null   && $_POST['va']!=null  && $_POST['cn']!=null && $_POST['co']!=null){
		$paginas = new operaciones();
		$paginas->add();
		$paginas->addcapital();
		?>
		<p></p>
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<strong>Listo!</strong> Registro guardado con exito... <a href="open.php">Home</a>.
		</div>
		<?php

	} else{
		?>
		<p></p>
		<div class="alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<strong>Error!</strong> Formulario vacio.
		</div>
		<?php
	}
}
?>

<p><br/></p>
<div class="panel panel-default">
	<div class="panel-body">

		<form role="form" method="post">
        
          <div class="form-group">
            
				<label for="id">Cod Operacion</label>
				<input type="hidden" class="form-control" name="id" id="id" placeholder="Cod Operacion">
			</div>
        
			<TABLE>
            <tr>
          
            <TD>
              <div class="form-group">
			  
			  <SELECT NAME="gd">
<option>Seleccione Inversionista</option>
<?php 
$db_host="inviertaenusa.co";

$db_usuario= "invierta_base";

$db_contra="bolsa2017*";
$bd = "invierta_bolsa";

$conexion1 = mysqli_connect($db_host, $db_usuario,$db_contra,$bd);
$consulta = "SELECT * FROM inversionista";
$resultados = mysqli_query($conexion1, $consulta);
mysqli_set_charset($conexion1,"utf8");

while(($fila=mysqli_fetch_row($resultados)) == true) {
//$fila=mysqli_fetch_row($resultados);
echo'<OPTION VALUE="'.$fila[0].'">'.$fila[1].'</OPTION>';
//echo $fila[0];
//echo'<OPTION VALUE="'.$fila['ced_inv'].'">'.$fila['nom_inv'].'</OPTION>';
}

 
?>
</SELECT>
	</td>
	
			  
			  
			  
			
			</div>

             <TD>
                <div class="form-group">
				<label for="cp">Cod Capital</label>
				<input type="text" class="form-control" name="cp" id="cp" placeholder="Cod Capital">
			</div>
             
             </TD>
            </tr>
            
            <tr>
              <TD>
              	<div class="form-group">
				<label for="tl">Nombre Acción/Indice</label>
				<input type="text" class="form-control" name="tl" id="tl" placeholder="Nombre Operacion">
			</div>
            
             </TD>
             <TD>
              <div class="form-group">
				<label for="to">Tipo Operacion</label>
				<input type="text" class="form-control" name="to" id="to" placeholder="Tipo Operacion">
			</div>
            </TD>
            </tr>
            <tr>
            <TD>
             <div class="form-group">
				<label for="fo">Fecha Apertura </label>
				<input type="text" class="form-control" name="fo" id="fo" placeholder="Fecha de apertura">
			</div>
            </TD>
            
            <TD>
                <div class="form-group">
				<label for="ho">Hora de apertura</label>
				<input type="text" class="form-control" name="ho" id="ho" placeholder="Hora de apertura">
			</div>
            </TD>                  
            </tr>
            <tr>
            <TD>
            
               <div class="form-group">
				<label for="ar">Fecha de cierre</label>
				<input type="text" class="form-control" name="ar" id="ar" placeholder="Fecha de cierre">
			</div>
            </TD>
             <TD>
             <div class="form-group">
				<label for="hc">hora de cierre</label>
				<input type="text" class="form-control" name="hc" id="hc" placeholder="hora de cierre">
			</div>
            </TD>
            </tr>
             <tr>
              <TD>
              	<div class="form-group">
				<label for="va">valor accion</label>
				<input type="text" class="form-control" name="va" id="va" placeholder="valor accion">
			</div> 
            </TD>
             <TD>
              	<div class="form-group">
				<label for="vop">valor Operación</label>
				<input type="text" class="form-control" name="vop" id="vop" placeholder="valor operacion">
			</div> 
            </TD>
            <TD>
               	<div class="form-group">
				<label for="cn">Contratos Negociados </label>
				<input type="text" class="form-control" name="cn" id="cn" placeholder="Contratos Negociados">
            
            	</div>
                </TD>
                </tr>
                <tr>
                 <TD>
          <div class="form-group">
				<label for="co">Comision por la operacion </label>
				<input type="text" class="form-control" name="co" id="co" placeholder="Comision operación">
            
            	</div>
            
            
            </TD> 
                <TD>
               <div class="form-group">
				<label for="vo"> Duración Operación </label>
				<input type="text" class="form-control" name="vo" id="vo" placeholder="Duración Operación">
            
            	</div>  
                </TD>
                </tr>
            
            </TABLE>
            
         <div class="form-group">
				<label for="eo">Estado operacion </label>
				<input type="hidden" class="form-control" name="eo" id="eo" placeholder="Estado operacion " value="abierta">
            
            	</div>  
                                
                        
			
            <div class="form-group">
			<button type="submit" name="bts" class="btn btn-default">Guardar</button>
            </div>
		</form>
		<?php
		include "footer.php";
		?>
</body>

 <script src="jquery/jquery-3.2.1.min.js"></script>
 <script src="bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="datepicker/bootstrap-datepicker.js"></script>
 <script>

$('#fo').datepicker({format: 'yyyy-mm-dd'});
$('#ar').datepicker({format: 'yyyy-mm-dd'});
$('#ho').datepicker({format: 'HH:MM:ss'});
$('#hc').datepicker({format: 'HH:MM:ss'});
$('#fte').datepicker();
$('#fli').datepicker();

</script>
</html>		
		