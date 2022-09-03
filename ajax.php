<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Actualizar</title>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script language="javascript">
function recargar(){	
	var variable_post="Mi texto recargado";
	$.post("miscript.php", { variable: variable_post }, function(data){
	$("#recargado").html(data);
	});			
}

<script type="text/javascript">

setInterval('contador()',1000);
var cont = 0;
function contador(){
	var contador = document.getElementById("contador");
	contador.value = cont;
	cont++;
}
</script>

</script>
<style type="text/css">
<!--
body,td,th {
	color: #333333;
}
#recargado {
	width:400px;
	border:1px solid #CCCCCC;
	margin:auto;
	padding:10px;
}
-->
</style></head>
<body onLoad="setInterval('contador()',1000);">

<form>
<label for="contador">Contador:</label><input type="text" id="contador">
</form>
<div id="recargado">Mi texto sin recargar</div>
<p align="center">
	<a href="#" onclick="javascript:recargar();">recargar</a>
</p>    
</body>
</html>
