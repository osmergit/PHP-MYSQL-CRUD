<html>
<head>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">	
<link rel="stylesheet" href="../css/estilo.css">	
<link rel="stylesheet" href="../datepicker/datepicker.css">	


</head>
<body>
<div class="container">
<a href="#" >Volver a inicio</a>
    <h1 class="well">INFORMES</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Fecha Entrega (Informe1)</label>
								<input type="text" name="FECHA_ENTREGA_INFORME1" id="fs1" placeholder="fecha primer informe" class="form-control">
							</div>
								
						</div>
						<div class="form-group">
							<label>Documento (Informe1)</label>
							<textarea placeholder="documento primer informe" name="DOCUMENTO_INFORME1" rows="3" class="form-control"></textarea>
						</div>	
					</div>
								
				</form> 
				</div>
				</div>
					<div class="form-group">
						
						<button type="button" class="btn btn-md btn-warning"  title="Informes"> <i class="fa fa-files-o"></i></button>
						<button type="button" class="btn btn-md btn-success"  title="Pagos"> <i class="fa fa-usd"></i></button>
					</div>
					<button type="button" class="btn btn-lg btn-info">Guardar</button>	
	</div>
</body>

 <script src="../jquery/jquery-3.2.1.min.js"></script>
 <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="../datepicker/bootstrap-datepicker.js"></script>
 <script>
$('#fs1').datepicker();
$('#fai').datepicker();
$('#fsu').datepicker();
$('#far').datepicker();
$('#fte').datepicker();
$('#fli').datepicker();

</script>
</html>